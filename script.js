// -----------------PAGE CONTACT----------------------------- 


// FORMULAIRE DE CONTACT / RECUPERER ADRESSE AVEC API.GOUV


// let adresse = document.getElementById('address');
// let listeAdresse = document.getElementById('listAddress');
// console.log(adresse.value);

// adresse.addEventListener('input', displayAddress)


// function displayAddress() {
//     listeAdresse.innnerHTML = "";
//     fetch("https://api-adresse.data.gouv.fr/search/?q=" + adresse.value + "&limit=6&autocomplete=1")
//     .then(response => response.json())
//     .then(data => {
//         listeAdresse.innerHTML = "";
//         let adresses = data.features;
//         // console.log(adresses);

//         if (adresse.value) {
            
//             adresses.forEach(element => {
                
//                 let li = document.createElement('li');
//                 li.classList.add('form-list')
//                 listeAdresse.appendChild(li);
//                 li.innerText = element.properties.label;

//                 li.addEventListener('click', () => {
//                     adresse.value = element.properties.label;
//                     listeAdresse.innerHTML = "";
//                 })
//                 listeAdresse.appendChild(li);   
//              } );
            
//         }
//         else{
//             listeAdresse.innerHTML = "";
//         }
    
//     })
// }



// MANIPULATION DU DOM


let button = document.querySelector('.send-msg');
// console.log(button);
let checkbox = document.getElementById('autorisation');
// console.log(checkbox);


// button.classList.add('noHover');
// button.addEventListener('mouseover', () => {
    
//         button.style.transform = scale(1.1);
//         button.style.backGroundColor = "orange";

// }) 


// checkbox.addEventListener('click', () => {
//     button.classList.toggle('activeBtn');
    
// })
// button.classList.remove('send-msg:hover');

// let toast = document.querySelector('#notification');
// button.addEventListener("click", () => {
//     toast.classList.add("show");
//     setTimeout(() => {
//       toast.classList.remove("show");
//     }, 4000);
//   });

if(checkbox){
    button.addEventListener('click', () => {
    alert('Votre message a bien été envoyé !');
})
}
 



// --------------------MENU HEADER.PHP ----------------------


//----- MENU CLASS ACTIVE POUR LA LISTE ACTIVE-------------


// const currentLocation = location.href;
// const menuItem = document.querySelectorAll('a.two-lines');
// const menuLength = menuItem.length

// for (let i = 0; i < menuLength; i++) {
//     if(menuItem[i].href === currentLocation){
//         menuItem[i].className = 'active';
//     }
    
// }

const ul = document.querySelector('.menu_box');
const li = document.querySelectorAll('.menu_item');
const a = document.querySelectorAll('.two-lines');
console.log(li);

li.forEach(element => {
    element.addEventListener('click', function(){
        a.classList.remove('active');

        a.classList.add('active');
    });
});



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