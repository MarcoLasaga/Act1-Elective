const pricePerKg = 369;
const kgInput = document.getElementById("kgInput");
const totalPriceEl = document.getElementById("totalPrice");
const totalKgEl = document.getElementById("totalKg");

kgInput.addEventListener("input", () => {
  const kg = kgInput.value || 1;
  totalKgEl.innerText = kg;
  totalPriceEl.innerText = (kg * pricePerKg).toLocaleString();
});

function addToCart() {
  const kg = kgInput.value || 1;

  const item = {
    name: "Tuna Belly",
    pricePerKg,
    kg,
    total: kg * pricePerKg
  };

  cart.push(item);
  localStorage.setItem("cart", JSON.stringify(cart));
  updateCartCount();

  alert("Added to cart!");
}
