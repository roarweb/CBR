const createCallToAction = () => {
    const ctaContainer = document.getElementById('cta-container');
    if (!ctaContainer) return;

    // Crear el contenedor del CTA
    const ctaDiv = document.createElement('div');
    ctaDiv.style.fontFamily = 'Arial, sans-serif';
    ctaDiv.style.textAlign = 'center';
    ctaDiv.style.padding = '20px';
    ctaDiv.style.border = '1px solid #ddd';
    ctaDiv.style.borderRadius = '10px';
    ctaDiv.style.backgroundColor = '#f9f9f9';
    ctaDiv.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';

    // Agregar el título
    const title = document.createElement('h2');
    title.innerText = 'Looking for Real Estate Solutions in Panama?';
    title.style.color = '#333';
    title.style.marginBottom = '10px';
    ctaDiv.appendChild(title);

    // Agregar la descripción
    const description = document.createElement('p');
    description.innerHTML = "My name is <strong>Oliver Rodriguez</strong>, a professional <strong>Real Estate Agent</strong> based in <strong>Panama, Republic of Panama</strong>.<br> Whether you're buying, selling, or investing, I'm here to guide you every step of the way.";
    description.style.color = '#555';
    description.style.marginBottom = '20px';
    ctaDiv.appendChild(description);

    // Agregar los detalles de contacto
    const contactDetails = document.createElement('div');
    contactDetails.style.marginBottom = '20px';

    const phone = document.createElement('p');
    phone.innerHTML = '<strong>Whatsapp:</strong> +50764262272';
    phone.style.margin = '5px 0';
    contactDetails.appendChild(phone);

    const email = document.createElement('p');
    email.innerHTML = '<strong>Email:</strong> <a href="mailto:oliver@cbr.com.pa" style="color: #007BFF; text-decoration: none;">oliver@cbr.com.pa</a>';
    email.style.margin = '5px 0';
    contactDetails.appendChild(email);

    ctaDiv.appendChild(contactDetails);

    // Agregar el botón de CTA con reCAPTCHA v3
    const ctaButton = document.createElement('button');
    ctaButton.innerText = "Contact Me Today";
    ctaButton.style.display = 'inline-block';
    ctaButton.style.padding = '10px 20px';
    ctaButton.style.backgroundColor = '#007BFF';
    ctaButton.style.color = '#fff';
    ctaButton.style.borderRadius = '5px';
    ctaButton.style.textDecoration = 'none';
    ctaButton.style.fontWeight = 'bold';
    ctaButton.style.transition = 'background-color 0.3s';
    ctaButton.style.border = 'none';
    ctaButton.style.cursor = 'pointer';

    ctaButton.onmouseover = () => ctaButton.style.backgroundColor = '#0056b3';
    ctaButton.onmouseout = () => ctaButton.style.backgroundColor = '#007BFF';

    // Agregar reCAPTCHA v3 al botón
    ctaButton.addEventListener('click', (event) => {
        event.preventDefault(); // Evitar el comportamiento predeterminado del botón

        // Ejecutar reCAPTCHA
        grecaptcha.ready(() => {
            grecaptcha.execute('6Lc5LjQqAAAAABI4ixyg3WQyPSXklPlooDFEeK0i', { action: 'submit' }).then((token) => {
                // Aquí puedes enviar el token a tu servidor para su validación
                console.log("Token de reCAPTCHA:", token);

                // Redirigir al usuario después de la validación
                window.location.href = "mailto:oliver@cbr.com.pa";
            });
        });
    });

    ctaDiv.appendChild(ctaButton);

    // Agregar el CTA al contenedor
    ctaContainer.appendChild(ctaDiv);
};

// Ejecutar la función para crear el CTA
createCallToAction();