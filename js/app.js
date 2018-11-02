document.addEventListener('scroll', () => {
    document.getElementById("nav").classList.toggle('scroll', window.scrollY > window.innerHeight);
})


var slides = document.querySelectorAll('#slides div'),
    arrows = document.querySelectorAll('#avis-button'),
    carouselCount = 0,
    scrollInterval,
    interval = 10000;

arrows[0].addEventListener('click', function (e) {
    e = e || window.event;
    e.preventDefault();
    carouselCount -= 100;
    slider();
    if (e.type !== 'autoClick') {
        clearInterval(scrollInterval);
        scrollInterval = setInterval(autoScroll, interval);
    }
});
arrows[1].addEventListener('click', sliderEvent);
arrows[1].addEventListener('autoClick', sliderEvent);

function sliderEvent(e) {
    e = e || window.event;
    e.preventDefault();
    carouselCount += 100;
    slider();
    if (e.type !== "autoClick") {
        clearInterval(scrollInterval);
        scrollInterval = setInterval(autoScroll, interval);
    }
}

function slider() {
    switch (carouselCount) {
        case -100:
            carouselCount = 300;
            break;
        case 400:
            carouselCount = 0;
            break;
        default:
            break;
    }
    for (var i = 0; i < slides.length; i += 1) {
        slides[i].setAttribute('style', 'transform:translateX(-' + carouselCount + '%)');
    }
}

var autoClick = new Event('autoClick');
function autoScroll() {
    arrows[1].dispatchEvent(autoClick);
}

scrollInterval = setInterval(autoScroll, interval);

var email = document.getElementById('email'),
    auto = document.getElementById('autosuffix'),
    popularEmails = ['gmail.com', 'googlemail.com', 'hotmail.com', 'yahoo.com', 'msn.com', 'aol.com'],
    itemSelected = 0,
    itemList = [];
console.log(email);

document.addEventListener('keyup', function(){
    
  if(window.event.keyCode === 40) { // Down
    if(itemSelected === (itemList.length - 1)) {
      itemSelected = itemList.length - 1;
    }
    else {
      itemSelected += 1;
    }
  }

  if(window.event.keyCode === 38) { // Up
    if(itemSelected === 0) {
      return;
    }
    else {
      itemSelected -= 1;
    }
  }
  
  if(window.event.keyCode === 13) { // Enter
    email.value = itemList[itemSelected].textContent;
    auto.innerHTML = '';
  }
  
  for(var i = 0; i < itemList.length; i++) {
    if(itemList[i].classList.contains('selected')) {
      itemList[i].classList.remove('selected');
    }
    if(itemSelected === i) {
      itemList[i].classList.add('selected');
    }
  }
});

email.addEventListener('keyup', function() {
  auto.innerHTML = '';
  
  if(email.value.match('@')) {
    var afterAt = email.value.substring(email.value.indexOf('@') + 1, email.value.length);
    var popularEmailsSub = [];
    
    for(var l = 0; l < popularEmails.length; l++) {
      popularEmailsSub.push(popularEmails[l].substring(0, afterAt.length))
    }
    
    if(afterAt == '') {
      for(var i = 0; i < popularEmails.length; i++) {
        auto.innerHTML += '<li>' + email.value + popularEmails[i] + '</li>';
      }
      itemList = document.querySelectorAll('#autosuffix li');
      itemList[0].classList.add('selected');
    }
    
    else if(!(afterAt == '')) {
      var matchedEmails = [];
      
      for(var k = 0; k < popularEmails.length; k++) {
        if(popularEmailsSub[k].match(afterAt)) {
          matchedEmails.push(popularEmails[k]);                   
        }
      }
      
      for(var i = 0; i < matchedEmails.length; i++) {
        auto.innerHTML += '<li>' + email.value.substring(0, email.value.indexOf('@')) + '@' + matchedEmails[i] + '</li>';
      }
    }
    
    var itemsList = document.querySelectorAll('#autosuffix li');
    
    for(var j = 0; j < itemsList.length; j++) {
      itemsList[j].addEventListener('click', function() {
        email.value = this.textContent;
        auto.innerHTML = '';
      });
    }
  }
});
document.getElementById('mobile-button').addEventListener('click', a => {
    document.querySelector('.menu').classList.toggle('open');
    document.querySelector('#page').classList.toggle('overflow');
}),
document.querySelector('.cache').addEventListener('click', a => {
    document.querySelector('.menu').classList.remove('open');
    document.querySelector('#page').classList.remove('overflow'); 
});


// initialisation des variables
var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
 
// action lorsque la "barre d'espace" ou "Entrée" est pressée
button.addEventListener( "keydown", function( event ) {
    if ( event.keyCode == 13 || event.keyCode == 32 ) {
        fileInput.focus();
    }
});
 
// action lorsque le label est cliqué
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});
 
// affiche un retour visuel dès que input:file change
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});