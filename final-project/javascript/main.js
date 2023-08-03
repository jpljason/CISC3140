let shop = document.getElementById("allItems");

let shopItemsData = [
  {
    id: "air-jordan1",
    name: "AIR JORDAN 1 RETRO HIGH OG 'UNC TOE'",
    price: 199.99,
    desc: "The Jordan 1 High OG UNC Toe is taking the sneaker game by storm. Jordan Brand masterfully integrates a unique colorway combo of University Blue, Black, and White on this iconic silhouette.",
    img: "../images/item imgs/air jordan/airjordan1.jpg"
  }, 
  {
    id: "air-jordan2",
    name: "AIR JORDAN 2 RETRO HIGH OG 'UNC TOE'",
    price: 499.99,
    desc: "The Jordan 1 High OG UNC Toe is taking the sneaker game by storm. Jordan Brand masterfully integrates a unique colorway combo of University Blue, Black, and White on this iconic silhouette.",
    img: "../images/item imgs/air jordan/airjordan2.jpg"
  }, 
  {
    id: "air-jordan3",
    name: "AIR JORDAN 3 RETRO HIGH OG 'UNC TOE'",
    price: 399.99,
    desc: "The Jordan 1 High OG UNC Toe is taking the sneaker game by storm. Jordan Brand masterfully integrates a unique colorway combo of University Blue, Black, and White on this iconic silhouette.",
    img: "../images/item imgs/air jordan/airjordan3.jpg"
  }, 
  {
    id: "air-jordan4",
    name: "AIR JORDAN 4 RETRO HIGH OG 'UNC TOE'",
    price: 299.99,
    desc: "The Jordan 1 High OG UNC Toe is taking the sneaker game by storm. Jordan Brand masterfully integrates a unique colorway combo of University Blue, Black, and White on this iconic silhouette.",
    img: "../images/item imgs/air jordan/airjordan4.jpg"
  }]

function generateShop(){
  return shop.innerHTML = shopItemsData.map(function(x){
    let {id, name, price, desc, img} = x;
    return `
    <div id=${id} class="item" href="../product detail pages/airjordan1.html">
      <div class="item-container">
        <img  class="item-pic" src="${img}">
        <div class="item-name">${name}</div>
        <div class="star-system">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star-half-o"></span>
          126
        </div>
        <div class="price">${price}</div>
      </div>
    </div>  
    `
  }).join("");
}
generateShop();

