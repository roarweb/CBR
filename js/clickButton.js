document.addEventListener("DOMContentLoaded", function () {
    const contactButton = document.querySelector(".button");
    
    if (contactButton) {
        contactButton.addEventListener("click", function () {
            const email = "info@rodriguezarrocha.com";
            const subject = encodeURIComponent("Consulta sobre servicios legales");
            const body = encodeURIComponent("Hola, me gustaría obtener más información sobre sus servicios.");
            
            window.location.href = `mailto:${email}?subject=${subject}&body=${body}`;
        });
    }
});
