const BURGER = document.querySelector(".header__nav--burgerMenu");
const MENU = document.querySelector(".navBar__ul");
const CLOSED_BURGER = document.querySelector(".header__nav__div");
const Burger_Div = document.querySelectorAll("header__nav--burgerMenu__div");
BURGER.addEventListener('click', rotate);

function rotate(Event){
    Event.preventDefault();
    MENU.classList.toggle("navBar__ul--display");
}


// Generation random de la page poem :
const CARDS = document.querySelectorAll(".section__img");
// let key = "";
for (let card of CARDS){
    card.addEventListener("click", randomPoem);

}

function randomPoem(){
    let valueCard = this.getAttribute("alt");
    let cookie = document.cookie=`theme=${valueCard}; path=/; samesite=Lax`;
    document.location.href=`poems.php`;
    

}

const pictEggs = ["lionnel.jpg", "loic.png", "giovanny.png", "gaetan.jpg", "geoffroy.jpg", "bastien.jpg"]

const EASTER = document.getElementById("easterEgg");
EASTER.addEventListener("click", surprise);

function surprise(){
    for (let i = 0; i < CARDS.length; i++){
        CARDS[i].setAttribute("src", `/pictures/easter/${pictEggs[i]}` )
    }
}

const open = document.querySelector('#envoyer')
const modal = document.querySelector('#confirm')
open.addEventListener("click", 
 function(){
 modal.style.display="block";
  })

open.addEventListener("click", 
 function(){ 
  modal.style.display="none";
})