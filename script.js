let adresse = document.getElementById('address');
console.log(adresse.value);

fetch ("https://api-adresse.data.gouv.fr/search/?q="+adresse.value+"&limit=6&autocomplete=1")
.then(response => response.json())
.then(data => {
    console.log(data);
    let adresses = data;

    adresse.addEventListener('input', displayAddress)

    function displayAddress() {
    
    
    }
})


   