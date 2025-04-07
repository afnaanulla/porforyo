// 🧪 Mock product data (simulate backend API)
const products = [
    {
      id: 1,
      name: "Coffee",
      category: "Beverages",
      image_url: "https://via.placeholder.com/150",
      varieties: [
        { id: 101, name: "Small", price: 50 },
        { id: 102, name: "Medium", price: 100 },
        { id: 103, name: "Large", price: 150 }
      ]
    },
    {
      id: 2,
      name: "T-Shirt",
      category: "Clothing",
      image_url: "https://via.placeholder.com/150",
      varieties: [
        { id: 201, name: "Small", price: 300 },
        { id: 202, name: "Medium", price: 350 },
        { id: 203, name: "Large", price: 400 }
      ]
    }
  ];
  
  // 🛒 Cart setup (persistent)
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  
  // 🔁 Initialize UI
  document.addEventListener("DOMContentLoaded", () => {
    renderProducts(products);
    populateCategoryFilter(products);
    renderCart();
  });
  
  // 🧩 Category filter dropdown
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
  
  // 🖼️ Render product cards
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
  
  // 🛒 Add item to cart
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
  
  // 🧾 Render cart items
  function renderCart() {
    const cartItemsContainer = document.getElementById("cartItems");
    const totalPriceElement = document.getElementById("totalPrice");
  
    cartItemsContainer.innerHTML = "";
    let total = 0;
  
    cart.forEach((item, index) => {
      const itemTotal = item.price * item.quantity;
      total += itemTotal;
  
      const div = document.createElement("div");
      div.className = "cart-item";
  
      div.innerHTML = `
        <span>${item.name} (${item.variety}) x${item.quantity}</span>
        <span>₹${itemTotal}</span>
        <button onclick="removeItem(${index})" class="remove-btn">✖</button>
      `;
  
      cartItemsContainer.appendChild(div);
    });
  
    totalPriceElement.textContent = `Total: ₹${total}`;
  }
  
  

  function removeItem(index) {
    if (cart[index].quantity > 1) {
      cart[index].quantity -= 1;
    } else {
      cart.splice(index, 1);
    }
    updateCart();
  }
  

  function clearCart() {
    cart = [];
    updateCart();
  }
  
  
  // 💾 Save and render cart
  function updateCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
    renderCart();
  }
  
  // 🔍 Search input
  document.getElementById("searchInput").addEventListener("input", () => {
    applyFilters();
  });
  
  // 📂 Category filter change
  document.getElementById("categoryFilter").addEventListener("change", () => {
    applyFilters();
  });
  
  // ⬇️ Sorting option change
  document.getElementById("sortSelect").addEventListener("change", () => {
    applyFilters();
  });
  
  // 🔄 Apply all filters and sorting
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
  