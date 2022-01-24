let adresse = document.getElementById('address');
let listeAdresse = document.getElementById('listAddress');
console.log(adresse.value);

adresse.addEventListener('input', displayAddress)


function displayAddress() {
    
    fetch("https://api-adresse.data.gouv.fr/search/?q=" + adresse.value + "&limit=6&autocomplete=1")
    .then(response => response.json())
    .then(data => {
        let adresses = data.features;
        // console.log(adresses);

        if (adresse.value) {
            listeAdresse.innnerHTML = "";
            adresses.forEach(element => {
                let li = document.createElement('li');
                li.style.backgroundColor = "grey";
                li.style.cursor = "pointer";
                li.style.margin = "5px";
                listeAdresse.appendChild(li);
                li.innerText = element.properties.label;

                li.addEventListener('click', () => {
                    adresse.value = element.properties.label;
                })
                listeAdresse.appendChild(li);
             } );
            
        }
        else{
            listeAdresse.innerHTML = "";
        }
    
    })
}




button = document.querySelector('.send-msg');
// console.log(button);
checkbox = document.getElementById('autorisation');
console.log(checkbox);

checkbox.addEventListener('click', () => {
    button.classList.toggle('active');
    // button.classList.remove('send-msg:hover');
})

