let ShoppingCart = document.getElementById("shopping-cart");
let label = document.getElementById("label");

/*

  Basket to hold all the selected items. 
  The getItem part is retrieving data from the local storage
  if local storage is blank, basket becomes an empty array

*/
let basket = JSON.parse(localStorage.getItem("data")) || [];

/*

  Calculate total amount of selected Items

*/
let calculation = () => {
  let cartIcon = document.getElementById("cartAmount");
  cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
};

calculation();

/*

  Generates the Cart Page with product cards composed of
  images, title, price, buttons, & Total price
  When basket is blank -> show's Cart is Empty

*/
let generateCartItems = () => {
  if (basket.length !== 0) {
    return (ShoppingCart.innerHTML = basket.map((x) => {
        let { id, item } = x;
        let search = shopItemsData.find((x) => x.id === id) || [];
        let { img, price, name } = search;
        return `
          <div class="cart-item">
            <img width="100" src=${img} alt="" />

            <div class="details">
            
              <div class="title-price-x">
                <h4 class="title-price">
                  <h3>${name}</h3>
                </h4>
                <i onclick="removeItem(${id})" class="fa-solid fa-circle-xmark"></i>
              </div>

              <p class="cart-item-price">$ ${price}</p>
              <div class="cart-buttons">
                <div class="buttons">
                  <i onclick="decrement(${id})" class="fa-solid fa-minus"></i>
                  <div id=${id} class="quantity">${item}</div>
                  <i onclick="increment(${id})" class="fa-solid fa-plus"></i>
                </div>
              </div>

              <h3>$ ${item * price}</h3>
            
            </div>
          </div>
        `;}).join(""));
  } else {
    ShoppingCart.innerHTML = "";
    label.innerHTML = `
    <h2>Cart is Empty</h2>
    <a href="../html/shop.html">
      <button class="HomeBtn">Back to shop</button>
    </a>
    `;
  }
};



/*

  Used to increase the selected product item 
  quantity by 1 or add it if not in the cart

*/
let increment = (id) => {
  let selectedItem = id;
  let search = basket.find((x) => x.id === selectedItem.id);

  if (search === undefined) {
    basket.push({
      id: selectedItem.id,
      item: 1,
    });
  } else {
    search.item += 1;
  }

  generateCartItems();
  update(selectedItem.id);
  localStorage.setItem("data", JSON.stringify(basket));
};

/*

  Used to decrease the selected product item 
  quantity by 1 or remove if it reach 0

*/
let decrement = (id) => {
  let selectedItem = id;
  let search = basket.find((x) => x.id === selectedItem.id);

  if (search === undefined) return;
  else if (search.item === 0) return;
  else {
    search.item -= 1;
  }

  update(selectedItem.id);
  basket = basket.filter((x) => x.item !== 0);
  generateCartItems();
  localStorage.setItem("data", JSON.stringify(basket));
};

/*

  To update the digits of picked 
  items on each item card

*/
let update = (id) => {
  let search = basket.find((x) => x.id === id);
  document.getElementById(id).innerHTML = search.item;
  calculation();
  TotalAmount();
};

/*

  Used to remove 1 selected product card from basket
  using the X [cross] button

*/
let removeItem = (id) => {
  let selectedItem = id;
  basket = basket.filter((x) => x.id !== selectedItem.id);
  calculation();
  generateCartItems();
  TotalAmount();
  localStorage.setItem("data", JSON.stringify(basket));
};

/*

  Used to calculate total amount of the selected products 
  with specific quantity. When basket is blank, it will show 0

*/
let TotalAmount = () => {
  if (basket.length !== 0) {
    let amount = basket
      .map((x) => {
        let { id, item } = x;
        let filterData = shopItemsData.find((x) => x.id === id);
        return filterData.price * item;
      })
      .reduce((x, y) => x + y, 0);

    return (label.innerHTML = `
    <h2>Total Bill : $ ${amount}</h2>
    <a href='../php/checkout.php'><button class="checkout">Checkout</button></a>
    <button onclick="clearCart()" class="removeAll">Clear Cart</button>
    `);
  } else return;
};

/*

  Used to clear cart and remove 
  everything from local storage

*/
let clearCart = () => {
  basket = [];
  generateCartItems();
  calculation();
  localStorage.setItem("data", JSON.stringify(basket));
};

/*

  Execute the functions

*/
generateCartItems();
TotalAmount();