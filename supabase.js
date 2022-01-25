const { createClient } = supabase;

supabase = createClient('https://ewqipldqgkvmgjzfjhrl.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTk3Mjg4LCJleHAiOjE5NTgxNzMyODh9.XT0AbCgdroy8RCMHs7-hhp2t8-nFs-J8jXXHahgvids');

const form = document.querySelector('.bloc-form');
form.addEventListener('submit', async (event) => {
    event.preventDefault()

    const formInputs = form.querySelectorAll('input, textarea');

    let submission = {};

    formInputs.forEach(element => {
        const { value, name } = element
        if(value  && name!="") {
            submission[name] = value
        }
        // console.log({error, data});
    })

    const {error, data} = await supabase.from('Formulaire-de-contact').insert([submission]);
    // console.log(submission);
    // console.log(error);

    if(error){
        alert('Il y a une erreur, réessayer');
    }
    else{
        alert('Votre message a bien été envoyé');
    }

    formInputs.forEach(element => element.value = '');


    // console.log(submission);
});