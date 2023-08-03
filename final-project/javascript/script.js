function toggleMobileMenu(){
  var mobileMenu = document.getElementById("mobile-categories-selector");
  mobileMenu.classList.toggle("open-mobile-menu");
  var hamburger = document.getElementById("hamburger-menu-icon");
  hamburger.classList.toggle("hover-hamburger");
}

function scrollChange(){
  var gifContainer = document.getElementById("gif-container");
  var header = document.getElementById("header-container");
  var categories = document.getElementById("categories-section");
  var timer = document.getElementById("liveTimer");
  if(document.documentElement.scrollTop > gifContainer.offsetHeight){
    header.style.backgroundColor = "white";
    header.style.transition = "background-color 0.2s ease-in-out"
    categories.style.backgroundColor = "white";
    categories.style.transition = "background-color 0.2s ease-in-out";
    categories.style.borderColor = "rgb(225, 225, 225)";
    categories.style.borderBottom = "1px solid rgb(225, 225, 225)";
    timer.style.color = "rgb(99, 99, 99)";

  }
  else{
    header.style.backgroundColor = "transparent";
    categories.style.backgroundColor = "transparent";
    header.style.transition = "background-color 0.2s ease-in-out";
    categories.style.transition = "background-color 0.2s ease-in-out";
    categories.style.borderColor = "rgb(110, 110, 110)";
    categories.style.borderBottom = "none";
    timer.style.color = "black";
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
  setTimeout("changeAnnouncement()", 4000);
}

function loadAll(){
  changeAnnouncement();
  liveTimer();
}
