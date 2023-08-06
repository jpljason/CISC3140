function toggleMobileMenu(){
  var mobileMenu = document.getElementById("mobile-categories-selector");
  mobileMenu.classList.toggle("open-mobile-menu");
  var hamburger = document.getElementById("hamburger-menu-icon");
  hamburger.classList.toggle("hover-hamburger");
}

function scrollChange(){
  var header = document.getElementById("header-container");
  var categories = document.getElementById("categories-section");
  var timer = document.getElementById("liveTimer");
  var searchBar = document.getElementsByClassName("search-bar")[0];
  var searchButton = document.getElementsByClassName("search-button")[0];
  if(document.documentElement.scrollTop > 0){
    header.style.backgroundColor = "white";
    header.style.transition = "background-color 0.2s ease-in-out"
    categories.style.backgroundColor = "white";
    categories.style.transition = "background-color 0.2s ease-in-out";
    categories.style.borderColor = "rgb(225, 225, 225)";
    categories.style.borderBottom = "1px solid rgb(225, 225, 225)";
    timer.style.color = "rgb(99, 99, 99)";
    searchBar.style.backgroundColor = "rgb(233, 233, 233)";
    searchBar.style.transition = "background-color 0.2s ease-in-out";
    searchBar.style.border = "none";
  }
  else{
    header.style.backgroundColor = "transparent";
    categories.style.backgroundColor = "transparent";
    header.style.transition = "background-color 0.2s ease-in-out";
    categories.style.transition = "background-color 0.2s ease-in-out";
    categories.style.borderColor = "rgb(110, 110, 110)";
    categories.style.borderBottom = "none";
    timer.style.color = "black";
    searchBar.style.backgroundColor = "transparent";
    searchBar.style.transition = "background-color 0.2s ease-in-out";
    searchBar.style.border = " 2px solid black";
  }
}

function liveTimer(){
  let date = new Date();
  let fullDate = date.getMonth()+1 + "/" + date.getDate() + "/" + date.getFullYear();
  let fullTime = date.toLocaleString('en-US', {hour: 'numeric' , minute: 'numeric', hour12: true});
  document.getElementById("liveTimer").innerHTML = fullDate + " " + fullTime + " NYC"
  setTimeout("liveTimer()", 1000);
}

function changeAnnouncement(){
  var announcementElements = document.getElementsByClassName("reminders");
  for(var i = 0; i < announcementElements.length; i++){
    if(announcementElements[i].innerHTML === "Free shipping on all orders over $150"){
      announcementElements[i].innerHTML = "Black Friday Sale Next Week!";
      announcementElements[i].style.color = "red";
    }
    else{
      announcementElements[i].innerHTML = "Free shipping on all orders over $150";
      announcementElements[i].style.color = "rgb(171, 0, 0)";
    }
  }
  setTimeout("changeAnnouncement()", 3500);
}

function loadAll(){
  changeAnnouncement();
  liveTimer();
}

function showModal(message){
  let modal = document.getElementById("modal");
  let modalMessage = document.getElementById("modalMessage");
  modalMessage.innerHTML = message;
  modal.showModal();
  let closeModal = document.getElementById("closeModal");
  closeModal.addEventListener("click", () => {
    modal.close();
  })
}

let features = document.querySelectorAll(".fade");
console.log(features);
let options = {
  threshold: 0.75
};

let fadeIn = new IntersectionObserver(function(entries, fadeIn) {
  entries.forEach(entry => {
    if(!entry.isIntersecting){
      return;
    } else {
      entry.target.classList.add("fade-in");
      fadeIn.unobserve(entry.target);
    }
  })
}, options);

features.forEach(feature => {
  fadeIn.observe(feature);
})


