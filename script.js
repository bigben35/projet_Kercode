let adresse = document.getElementById('address');
let listeAdresse = document.getElementById('listAddress');
console.log(adresse.value);

adresse.addEventListener('input', displayAddress)


function displayAddress() {
    listeAdresse.innnerHTML = "";
    fetch("https://api-adresse.data.gouv.fr/search/?q=" + adresse.value + "&limit=6&autocomplete=1")
    .then(response => response.json())
    .then(data => {
        listeAdresse.innerHTML = "";
        let adresses = data.features;
        // console.log(adresses);

        if (adresse.value) {
            
            adresses.forEach(element => {
                
                let li = document.createElement('li');
                li.classList.add('form-list')
                listeAdresse.appendChild(li);
                li.innerText = element.properties.label;

                li.addEventListener('click', () => {
                    adresse.value = element.properties.label;
                    listeAdresse.innerHTML = "";
                })
                listeAdresse.appendChild(li);   
             } );
            
        }
        else{
            listeAdresse.innerHTML = "";
        }
    
    })
}




let button = document.querySelector('.send-msg');
// console.log(button);
checkbox = document.getElementById('autorisation');
// console.log(checkbox);

checkbox.addEventListener('click', () => {
    button.classList.toggle('active');
    // button.classList.remove('send-msg:hover');
})

// let toast = document.querySelector('#notification');
// button.addEventListener("click", () => {
//     toast.classList.add("show");
//     setTimeout(() => {
//       toast.classList.remove("show");
//     }, 4000);
//   });

if(checkbox === true){
    button.addEventListener('click', () => {
    alert('Message');
})
}
 