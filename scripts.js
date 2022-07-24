document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll('.more-info-about-car').forEach(button => {
        button.addEventListener('click', function(event) {
            let automobilis = {
                marke: event.target.parentElement.attributes['data-marke'].value,
                modelis: event.target.parentElement.attributes['data-modelis'].value,
                rida: event.target.parentElement.attributes['data-rida'].value,
                darbinis_turis: event.target.parentElement.attributes['data-darbinis_turis'].value,
                gamybos_metai: event.target.parentElement.attributes['data-gamybos_metai'].value,
                spalva: event.target.parentElement.attributes['data-spalva'].value,
            };
            console.log(automobilis);
        });
    });

});
