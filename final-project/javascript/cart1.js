var cart = JSON.parse(localStorage.getItem("CART")) || []; //local storage
var item = function(itemName, shoeSize, price, count, imageSrc){ //our item class we will be using for every item
  this.itemName = itemName;
  this.shoeSize = shoeSize;
  this.price = price;
  this.count = count;
  this.imageSrc = imageSrc;
};

function updateCartCount(){
  document.getElementsByClassName("cart-count")[0].innerHTML = cart.length;
}

updateCartCount();

//look for any "add to cart" buttons that have been pressed
var addToCartButtons = document.getElementsByClassName("add-to-cart");
for(var i = 0; i < addToCartButtons.length; i++){
  var currAddButton = addToCartButtons[i];
  currAddButton.addEventListener("click", addToCart);
}

//add items to the cart by getting all their info
function addToCart(event){
  var itemToAdd = event.target;
  var shopItem = itemToAdd.parentElement.parentElement.parentElement;
  var itemName = shopItem.getElementsByClassName("page-item-name")[0].innerHTML;
  var price = parseFloat(shopItem.getElementsByClassName("price")[0].innerHTML.replace("$", ""));
  var imageSrc = shopItem.getElementsByClassName("item-image")[0].src;
  var shoeSize = shopItem.getElementsByClassName("size-selection")[0].value;
  if(shoeSize === ''){
    showModal("Please select a shoe size");
  }
  else{
    console.log(itemToAdd, shopItem, itemName, price, imageSrc, shoeSize);
    var currItem = new item(itemName, shoeSize, price, 1, imageSrc);
    for(var i in cart){
      //if cart already has the current sneaker and the shoe size is the same, alert the user and do not add it to the cart
      if(cart[i].itemName === itemName && cart[i].shoeSize === shoeSize){
        showModal("Item is already in your cart!");
        return;
      }
    }
    cart.push(currItem);
    updateCartCount();
    showModal("Item added to your cart!");
    localStorage.setItem("CART", JSON.stringify(cart));
    console.log(cart.length);
  }
}

var cartCol = document.getElementById("cart-items");
if(cartCol !== null){   //if we are at the cart page, update the cart
  updateCart();
}

//update the cart page 
function updateCart(){
  updateCartCount();
  cartCol.innerHTML = "";
  showItemsInCart(); //show current items in cart
  if(cartCol.innerHTML === ""){ //if cart is empty, display a message notifying the user
    cartCol.innerHTML = `<center><b>Empty Cart!</b></center>`
  }
  computeCharges();
  lookForItemRemovals();
  lookForQuantityChanges();
  localStorage.setItem("CART", JSON.stringify(cart));
  console.log("Updated Cart!");
}

//show all the items we added to the cart
function showItemsInCart(){
  for(var i = 0; i < cart.length; i++){
    let curr = cart[i];
    cartCol.innerHTML += `
    <div class="cart-items-row">
      <div class="item-img-container">
        <img src="${curr.imageSrc}">
      </div>
      <div class="item-details">
        <h3 class="thisItemName">${curr.itemName}</h3>
        <div><span class="gray">Size:</span><span class="shoe-size">${curr.shoeSize}</span></div>
        <div><span class="gray quantity-label">Quantity:</span>
          <span>
            <input class="quantity" type="number" value="${curr.count}">
          </span>
        </div>
        <div class="remove">Remove</div>
        <div><span class="price">Price:</span><span class="item-price">$${curr.price}</span></div>
      </div>
    </div>
    <hr>
    `
  }
}

//Look for any remove buttons that have been clicked
function lookForItemRemovals(){
  var removeElements = document.getElementsByClassName("remove");
  for(var i = 0; i < removeElements.length; i++){
    var currRemove = removeElements[i];
    currRemove.addEventListener("click", removeItem); //if it's clicked, remove the item
  }
}

//remove the item
function removeItem(event){
  let valueToRemove = event.target;
  console.log(valueToRemove);
  let parentOfRemove = valueToRemove.parentElement;
  let currentName = parentOfRemove.getElementsByClassName("thisItemName")[0];
  let currentSize = parentOfRemove.getElementsByClassName("shoe-size")[0];
  cart = cart.filter(function removeIt(item){  //remove item that has the same name or size
    return item.itemName !== currentName.innerHTML || item.shoeSize !== currentSize.innerHTML;
  });
  updateCart();
}

//look for any quantity changes in the cart
function lookForQuantityChanges(){
  var quantityElements = document.getElementsByClassName("quantity");
  for(var i = 0; i < quantityElements.length; i++){
    var currQuantity = quantityElements[i];
    currQuantity.addEventListener("change", changeQuantity); //if quantity is changed, update the cart
  }
}

//change the quantity 
function changeQuantity(event){
  let valueToChange = event.target;
  if(isNaN(valueToChange.value) || valueToChange.value<=0){
    showModal("Not valid quantity!");
    valueToChange.value = 1;
  }
  let parentOfChange = valueToChange.parentElement.parentElement.parentElement;
  cart = cart.map((item) => {
    let currCount = item.count;
    let currName = parentOfChange.getElementsByClassName("thisItemName")[0];
    let currSize = parentOfChange.getElementsByClassName("shoe-size")[0];
    if(item.itemName === currName.innerHTML && item.shoeSize === currSize.innerHTML){
      item.count = valueToChange.value;
    }
    return item;
  })
  updateCart();
  console.log("Quantity Changed!");
}

//compute all the charges of the items in the current cart
function computeCharges(){
  let subtotal = document.getElementById("subtotal");
  let shipping = document.getElementById("shipping");
  let tax = document.getElementById("tax");
  let grand_total = document.getElementById("grand-total");
  let subtotalValue = 0;
  for(var i = 0; i < cart.length; i++){
    let currItemCharge = cart[i];
    subtotalValue += currItemCharge.price * currItemCharge.count;
  }
  subtotalValue = Math.round(subtotalValue * 100) / 100;
  let shippingValue = 0;
  if(subtotalValue < 150 && subtotalValue != 0){
    shippingValue = 10;
  }
  let taxValue = (Math.round(subtotalValue * 0.04 * 100) / 100);
  let grandTotalValue = Math.round((subtotalValue + shippingValue + taxValue) * 100) / 100;
  subtotal.innerHTML = "$" + subtotalValue.toFixed(2);
  subtotalValue > 150 ? shipping.innerHTML = "FREE" : shipping.innerHTML = "$" + shippingValue.toFixed(2);
  tax.innerHTML = "$" + taxValue.toFixed(2);
  grand_total.innerHTML = "$" + grandTotalValue.toFixed(2);
}

function placeOrder(){
  if(cart.length == 0){
    showModal("You have no items in your cart!");
    return;
  }
  showModal("Your order has been placed! Thank you for your purchase!");
  cart.length = 0;
  updateCart();
}