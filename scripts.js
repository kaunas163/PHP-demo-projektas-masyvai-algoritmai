document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll('.more-info-about-car').forEach(button => {
        button.addEventListener('click', function(event) {
            console.log(event.target.parentElement);
        });
    });

});
