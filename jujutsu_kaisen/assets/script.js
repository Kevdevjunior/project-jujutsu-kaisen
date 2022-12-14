
function log(arg){
    console.log(arg);
}

log("site fait par Kévin Denis");
log("https://github.com/Kevdevjunior");

// --------selection

let burger = document.querySelector('#burger');
console.log(burger);
let menu = document.querySelector('nav');
let img = document.querySelector('.logo')
const divHistory = document.querySelector('.history');

// console.log(img);
// console.log(menu);
 


//------ evenement

  burger.addEventListener('click', open);
  
 


 // fonction animation nav et header

setTimeout(()=>{
    menu.style.transform = "scaleX(1)";
    img.style.transform = "scaleX(1)";
}, 300) 




//----- fonction Pour mon menu burger

  function open() {
    
	

      if(menu.style.display == 'block') {
          menu.style.display = 'none';
          burger.src = 'assets/img/menuburger.jpg';
      }else {
          menu.style.display = 'block';
          burger.src = 'assets/img/cross1.png';
      }
    
   
 }

 //------ fonction animation scroll pour mon texte

 

  

