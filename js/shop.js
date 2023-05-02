let shop = document.getElementById("shop");
let basket = JSON.parse(localStorage.getItem("data")) || [];

/*
Generates the shop with product cards 
*/
let generateShop = () => {
  return (shop.innerHTML = shopItemsData
    .map((x) => {
      let { id, name, desc, img, price } = x;
      let search = basket.find((y) => y.id === id) || [];
      return `
        <div id=product-id-${id} class="item">
          <img width="220" src=${img} alt="">
          <div class="details">
            <h3>${name}</h3>
            <p>${desc}</p>
            <div class="price-quantity">
              <h2>$ ${price} </h2>
              <div class="buttons">
                <i onclick="decrement(${id})" class="fa-solid fa-minus"></i>
                <div id=${id} class="quantity">${
                  search.item === undefined ? 0 : search.item
                }</div>
                <i onclick="increment(${id})" class="fa-solid fa-plus"></i>
              </div>
            </div>
          </div>
      </div>
      `;}).join(""));
};

/*
Used to increase the selected product item quantity by 1
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

  console.log(basket);
  update(selectedItem.id);
  localStorage.setItem("data", JSON.stringify(basket));
};

/*
Used to decrease the selected product item quantity by 1
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
  console.log(basket);
  localStorage.setItem("data", JSON.stringify(basket));
};

/*
To update the digits of picked items on each item card
*/
let update = (id) => {
  let search = basket.find((x) => x.id === id);
  document.getElementById(id).innerHTML = search.item;
  calculation();
};

/*
To calculate total amount of selected Items
*/
let calculation = () => {
  let cartIcon = document.getElementById("cartAmount");
  cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
};

/*
Load more
*/
$(document).ready(function(){
  $(".load-more").click(function(){
     $(".item").fadeIn();
     $(this).fadeOut();
  });
});

generateShop();
calculation();



