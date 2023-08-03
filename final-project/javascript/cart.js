if(document.readyState == 'loading'){
  document.addEventListener('DOMContentLoaded', ready);
}
else{
  ready();
}

function ready(){
  var removeButtons = document.getElementsByClassName("remove")
  for(var i = 0; i < removeButtons.length; i++){
    var button = removeButtons[i];
    button.addEventListener("click", removeCartItem);
  }

  var quantityElements = document.getElementsByClassName("quantity");
  for(var i = 0; i < quantityElements.length; i++){
    var currQuantity = quantityElements[i];
    currQuantity.addEventListener("change", changeQuantity);
  }
  var addToCartButtons = document.getElementsByClassName("add-to-cart");
  for(var i = 0; i < addToCartButtons.length; i++){
    var currAddButton = addToCartButtons[i];
    currAddButton.addEventListener("click", addToCart);
  }
}

function removeCartItem(event){
  var currButton = event.target;
  currButton.parentElement.parentElement.remove();
  updateCartTotal();
}

function changeQuantity(event){
  var input = event.target;
  if(isNaN(input.value) || input.value<=0){
    input.value = 1;
  }
  updateCartTotal();
}

function addToCart(event){
  var itemToAdd = event.target;
  var shopItem = itemToAdd.parentElement.parentElement;
  var itemName = shopItem.getElementsByClassName("page-item-name")[0].innerHTML;
  var price = shopItem.getElementsByClassName("price")[0].innerHTML;
  var imageSrc = shopItem.getElementsByClassName("item-image")[0].src;
  console.log(itemName, price, imageSrc);
  addItemToCart(title, price, imageSrc);
}

function addItemToCart(title, price, imageSrc){
  var cartRow = document.createElement('div');
  var cartItems = document.getElementsByClassName("cart-items")[0];
  cartItems.append(cartRow);
}

function updateCartTotal(){
  var allItemsInCart = document.getElementsByClassName("cart-items")[0];
  var cartItemsRow = allItemsInCart.getElementsByClassName("cart-items-row");
  var total = 0;
  for(var i = 0; i < cartItemsRow.length; i++){
    var currRow = cartItemsRow[i];
    var priceElement = currRow.getElementsByClassName("item-price")[0];
    var quantityElement = currRow.getElementsByClassName("quantity")[0];
    var price = parseFloat(priceElement.innerText.replace("$",''));
    var quantity = quantityElement.value;
    total = total + (price * quantity);
  }
  total = Math.round(total * 100) / 100;
  document.getElementsByClassName("subtotal")[0].innerHTML = "$"+total;
}