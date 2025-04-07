# 🛍️ Storefront – Intern Project

A basic e-commerce storefront built for the intern test using:

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP (for product and checkout API)

---

## ✅ Features

- Product listing with image, variety, and price
- Filter by category
- Sort by price (low to high, high to low)
- Search functionality
- Add to cart, increase/decrease quantity
- Persistent cart using localStorage
- Checkout modal with final total
- PHP backend to serve products and handle checkout request

---

## 🗂️ Folder Structure

storefront/
├── backend/
│   ├── products.php         # Returns product data as JSON
│   └── checkout.php         # Handles checkout requests
│
├── frontend/
│   ├── index.html           # Main UI
│   ├── styles.css           # All styles
│   └── app.js               # JavaScript logic (render, cart, checkout)
├── README.md                # Project overview and instructions



---

## 💻 Getting Started

### Requirements

- PHP installed on your system

### Steps to Run Locally

1. Clone this repository or download the ZIP.

2. Navigate to the project folder in terminal.

3. Start a local PHP server:

```bash
php -S localhost:8000
```
