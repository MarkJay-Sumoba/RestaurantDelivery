const openShopping = document.querySelector(".shopping");
const closeShopping = document.querySelector(".closeShopping");
const list = document.querySelector(".list");
const listCard = document.querySelector(".listCard");
const body = document.querySelector("body");
const total = document.querySelector(".total");
const quantity = document.querySelector(".quantity");

openShopping.addEventListener("click", () => {
  body.classList.add("active");
});
closeShopping.addEventListener("click", () => {
  body.classList.remove("active");
});

let products = [
  {
    id: 1,
    name: "Steak",
    image: "Steak.jpg",
    price: 30,
  },
  {
    id: 2,
    name: "Paella",
    image: "Paella.jpg",
    price: 50,
  },
  {
    id: 3,
    name: "SurfnTurf",
    image: "seafood.jpg",
    price: 30,
  },
  {
    id: 4,
    name: "Ramen",
    image: "Ramen.jpg",
    price: 15,
  },
  {
    id: 5,
    name: "Sarmale",
    image: "Sarmale.jpg",
    price: 25,
  },
];
let listCards = [];
function initApp() {
  products.forEach((value, key) => {
    let newDiv = document.createElement("div");
    newDiv.classList.add("item");
    //Order Item image > dish-name > price > qty
    newDiv.innerHTML = `
            <img src="../image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">$${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Order</button>`;
    list.appendChild(newDiv);
  });
}
initApp();
function addToCard(key) {
  if (listCards[key] == null) {
    // copy dish from menu to order summary
    listCards[key] = JSON.parse(JSON.stringify(products[key]));
    listCards[key].quantity = 1;
  }
  reloadCard();
}
function reloadCard() {
  listCard.innerHTML = "";
  let count = 0;
  let totalPrice = 0;
  listCards.forEach((value, key) => {
    totalPrice = totalPrice + value.price;
    count = count + value.quantity;
    if (value != null) {
      let newDiv = document.createElement("li");

      //Order Item image > dish-name > price > qty
      newDiv.innerHTML = `
                <div><img src="../image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>$${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${
        value.quantity - 1
      })">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${
        value.quantity + 1
      })">+</button>
                </div>`;

      listCard.appendChild(newDiv);
    }
  });

  total.innerText = totalPrice.toLocaleString();
  quantity.innerText = count;
}

function changeQuantity(key, quantity) {
  if (quantity == 0) {
    delete listCards[key];
  } else {
    listCards[key].quantity = quantity;
    listCards[key].price = quantity * products[key].price;
  }
  reloadCard();
}
