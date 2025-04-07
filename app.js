let products = [];

document.addEventListener("DOMContentLoaded", () => {
  fetch("http://localhost:8000/products.php")
    .then(res => res.json())
    .then(data => {
      products = data;
      renderProducts(products);
      populateCategoryFilter(products);
      renderCart();
    })
    .catch(err => console.error("Failed to load products:", err));
});


  
  // cart setup
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  
  // initiialize UI
  document.addEventListener("DOMContentLoaded", () => {
    renderProducts(products);
    populateCategoryFilter(products);
    renderCart();
  });
  
  // category filter dropdown
  function populateCategoryFilter(products) {
    const categoryFilter = document.getElementById("categoryFilter");
    const categories = [...new Set(products.map(p => p.category))];
  
    categories.forEach(cat => {
      const option = document.createElement("option");
      option.value = cat;
      option.textContent = cat;
      categoryFilter.appendChild(option);
    });
  }
  
  // render product cards
  function renderProducts(data) {
    const grid = document.getElementById("productGrid");
    grid.innerHTML = "";
  
    data.forEach(product => {
      const card = document.createElement("div");
      card.className = "product-card";
  
      card.innerHTML = `
        <img src="${product.image_url}" alt="${product.name}" />
        <h3>${product.name}</h3>
        <p>Category: ${product.category}</p>
  
        <select class="varietySelect">
          ${product.varieties.map(v =>
            `<option value="${v.id}" data-price="${v.price}">${v.name} - ₹${v.price}</option>`
          ).join('')}
        </select>
  
        <button onclick="addToCart(${product.id}, this)">Add to Cart</button>
      `;
  
      grid.appendChild(card);
    });
  }
  
  // add item to cart
  function addToCart(productId, buttonElement) {
    const product = products.find(p => p.id === productId);
    const card = buttonElement.closest(".product-card");
    const select = card.querySelector(".varietySelect");
    const selectedVarietyId = parseInt(select.value);
    const selectedVariety = product.varieties.find(v => v.id === selectedVarietyId);
  
    const itemKey = `${product.id}_${selectedVariety.id}`;
    const existingItem = cart.find(item => item.key === itemKey);
  
    if (existingItem) {
      existingItem.quantity += 1;
    } else {
      cart.push({
        key: itemKey,
        name: product.name,
        variety: selectedVariety.name,
        price: selectedVariety.price,
        quantity: 1
      });
    }
  
    updateCart();
  }
  
  // render cart items
  function renderCart() {
    const cartItemsContainer = document.getElementById("cartItems");
    const totalPriceElement = document.getElementById("totalPrice");
    const cartElement = document.getElementById("cart");
  
    cartItemsContainer.innerHTML = "";
    let total = 0;
  
    if (cart.length === 0) {
      cartElement.style.display = "none";
      return;
    } else {
      cartElement.style.display = "block";
    }
  
    cart.forEach((item, index) => {
      const itemTotal = item.price * item.quantity;
      total += itemTotal;
  
      const div = document.createElement("div");
      div.className = "cart-item";
  
      div.innerHTML = `
        <span>${item.name} (${item.variety})</span>
        <div class="qty-controls">
          <button onclick="decreaseQty(${index})">−</button>
          <span>${item.quantity}</span>
          <button onclick="increaseQty(${index})">+</button>
        </div>
        <span>₹${itemTotal}</span>
      `;
  
      cartItemsContainer.appendChild(div);
    });
  
    totalPriceElement.textContent = `Total: ₹${total}`;
  }
  
  
  document.getElementById("checkoutBtn").addEventListener("click", checkout);
  
  
  function checkout() {
    const total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
    document.getElementById("checkoutTotal").textContent = `Total amount: ₹${total}`;
    document.getElementById("checkoutModal").style.display = "flex";
  }
  function confirmCheckout() {
    fetch("http://localhost:8000/checkout.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ cart }),
    })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          alert(`Thank you! Your order has been placed.\nOrder ID: ${data.order_id}`);
          clearCart();
          document.getElementById("checkoutModal").style.display = "none";
        } else {
          alert("Checkout failed: " + data.message);
        }
      })
      .catch(err => {
        alert("Checkout failed. Please try again.");
        console.error(err);
      });
  }
  
  
  document.getElementById("closeModal").onclick = function () {
    document.getElementById("checkoutModal").style.display = "none";
  };
  
  
  function closeCart() {
    document.getElementById('cart').classList.remove('active');
  }
  
  function removeItem(index) {
    cart.splice(index, 1);
    updateCart();
  }

  function clearCart() {
    cart = [];
    updateCart();
  }
  function increaseQty(index) {
    cart[index].quantity += 1;
    updateCart();
  }
  
  function decreaseQty(index) {
    if (cart[index].quantity > 1) {
      cart[index].quantity -= 1;
    } else {
      cart.splice(index, 1);
    }
    updateCart();
  }
  
  
  // save and render cart
  function updateCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
    renderCart();
  }
  
  // search input
  document.getElementById("searchInput").addEventListener("input", () => {
    applyFilters();
  });
  
  // category filter change
  document.getElementById("categoryFilter").addEventListener("change", () => {
    applyFilters();
  });
  
  // sorting option change
  document.getElementById("sortSelect").addEventListener("change", () => {
    applyFilters();
  });
  
  // apply all filters and sorting
  function applyFilters() {
    const searchValue = document.getElementById("searchInput").value.toLowerCase();
    const selectedCategory = document.getElementById("categoryFilter").value;
    const sortOption = document.getElementById("sortSelect").value;
  
    let filtered = [...products];
  
    if (selectedCategory) {
      filtered = filtered.filter(p => p.category === selectedCategory);
    }
  
    if (searchValue) {
      filtered = filtered.filter(p => p.name.toLowerCase().includes(searchValue));
    }
  
    if (sortOption === "lowToHigh") {
      filtered.sort((a, b) => a.varieties[0].price - b.varieties[0].price);
    } else if (sortOption === "highToLow") {
      filtered.sort((a, b) => b.varieties[0].price - a.varieties[0].price);
    }
  
    renderProducts(filtered);
  }
  