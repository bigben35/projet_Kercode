let adresse = document.getElementById('address');
console.log(adresse.value);

fetch ("https://api-adresse.data.gouv.fr/search/?q="+adresse.value+"&limit=6&autocomplete=1")
.then(response => console.log(response))
// .then(data => {
//     let adresses = data.features;
//     console.log(data);

//     adresse.addEventListener('input', displayAddress)

//     function displayAddress() {
    
    
//     }
// })


   