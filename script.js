// ----------------MANIPULATION DU DOM----------------------------



 



// --------------------MENU HEADER.PHP ----------------------


//----- MENU CLASS ACTIVE POUR LA LISTE ACTIVE-------------


let menuActive = document.querySelector(".menu_box").getElementsByTagName("a");
console.log(location.href);

for (let i = 0; i < menuActive.length; i++) {
    if (menuActive[i].href === location.href){
        menuActive[0].classList.remove("active");
        menuActive[i].classList.add("active");
        
    }};


    
    // const currentLocation = location.href;
    // const menuItem = document.querySelectorAll('.menu_item');
    // const menuLength = menuItem.length
    
    // for (let i = 0; i < menuLength; i++) {
    //     if(menuItem[i].href === currentLocation){
    //         menuItem[i].className = 'active';
    //     }
        
    // }
    // const ul = document.querySelector('.menu_box');
    // const li = document.querySelectorAll('.menu_item');
// const a = document.querySelectorAll('.two-lines');
// console.log(li);

// li.forEach(element => {
//     element.addEventListener('click', function(){
//         a.classList.remove('active');

//         a.classList.add('active');
//     });
// });




// ----------------BOUTON FLECHE POUR REMONTER EN HAUT DE LA PAGE / PRESENT DANS FOOTER.PHP-----------------

const btnArrow = document.querySelector('.btn-arrow');
console.log(btnArrow);
btnArrow.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        left:0,
        behavior: 'smooth'
    })
})