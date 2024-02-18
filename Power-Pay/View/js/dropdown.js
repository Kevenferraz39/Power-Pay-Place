const carrinho = document.querySelector(".carrinho");
const carButton = document.querySelector("#car-button");

carButton.addEventListener("click", () => {
    carrinho.classList.toggle("show-carrinho");
});
