<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Expert real estate services in Panama. Buy, sell, or rent properties with ease. Contact us for personalized solutions in Panama's real estate market.">
    <meta name="keywords" content="real estate Panama, buy property Panama, sell property Panama, rent property Panama, Panama real estate agent, properties for sale Panama, property rentals Panama">
    <meta name="author" content="Roar Web Development">
    <title>Oliver Rodriguez - Real Estate</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- recaptcha api -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Lc5LjQqAAAAABI4ixyg3WQyPSXklPlooDFEeK0i"></script>

    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-W307EE07NK"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-W307EE07NK');
    </script>

    <style>
        /* General styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f9fc;
            color: #333;
        }

        /* Header styles */
        header {
            background: #1e3a5f;
            color: #fff;
            padding: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .column {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        header .column-25 {
            width: 25%;
            text-align: justify;
        }

        header .column-25 img {
            max-width: 75%;
            height: auto;
        }

        header .column-75 {
            width: 75%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        header .row {
            width: 100%;
            text-align: justify;
        }

        header h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        header p {
            font-size: 1rem;
            margin: 0;
        }

        /* Estilo para ocultar el navbar-brand al hacer scroll */
        .navbar-brand-hidden {
            display: none !important;
        }
             
        /* Cambiar color de los nav-item al pasar el cursor */
        .navbar-nav .nav-item:hover {
            color: #fff;
            font-weight: bold;
            border-top-left-radius: 0.5em 0.5em;
            border-top-right-radius: 0.5em 0.5em;
        }    

        /* Section styles */
        section {
            padding: 2rem;
            background-color: #e8f1f8;
            color: #1e3a5f;
            text-align: justify;
        }

        /* Call-to-action styles */
        #call-to-action {
            background-color: #326fa8;
            color: #fff;
            padding: 2rem;
            text-align: center;
            border-radius: 10px;
            margin: 2rem auto;
            max-width: 600px;
        }

        #call-to-action h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        #call-to-action p {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        #call-to-action a {
            color: #f4f9fc;
            text-decoration: none;
            font-weight: bold;
        }

        #call-to-action button {
            background-color: #1e3a5f;
            color: #fff;
            border: none;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 5px;
        }

        /* Footer styles */
        footer {
            background: #1e3a5f;
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }

            header .column {
                align-items: center;
                text-align: center;
            }

            header .column-25,
            header .column-75 {
                width: 100%;
            }

            header .row {
                text-align: center;
            }

        }

        /*recaptcha oculto*/
        .grecaptcha-badge {
            visibility: hidden;
        }
        

    </style>

</head>
<body>
    <header>
        <div class="column column-25">
        <img src="images/olivera-white.png" alt="Company Logo">
        </div>
        <div class="column column-75">
            <div class="row">
                <h1>Real Estate Services in Panama</h1>
            </div>
            <div class="row">
                <p>Your trusted partner for buying, selling, and renting properties in Panama.</p>
            </div>
        </div>
    </header>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- Navbar brand (visible solo en escritorio) -->
      <a class="navbar-brand d-none d-lg-block" href="#"></a>

      <!-- Navbar toggler (visible en móviles, alineado a la derecha) -->
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <!-- Navbar items (centrados) -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://www.cbr.com.pa">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About me</a>
          </li>
                          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Buy and Sell</a></li>
                    <li><a class="dropdown-item" href="#">Rent</a></li>
                    <li><a class="dropdown-item" href="https://propiedades.mlsacobir.com/panama/userId_677087">Multiple Listing Service</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="https://www.rodriguezarrocha.com">Legal Services</a></li>
                </ul>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <section>
        <h2>About me</h2>
        <p>Are you looking for reliable and expert legal advice in real estate agent and attorney at law in Panama? As a lawyer and real estate broker, we offer a comprehensive service to ensure every transaction is secure, efficient, and beneficial for our clients. </p>
        <p>We specialize in buying, selling, renting, and property management, as well as providing legal advice on immigration procedures, tax planning, contracts, and real estate-related litigation. Whether you're a foreign investor or a local resident, our personalized approach ensures solutions tailored to your needs. </p>
        <p>Discover how we can help you maximize your opportunities in Panama's dynamic real estate market. Contact us today! </p>
        <div id="cta-container"></div>
        <script src="js/cta.js"></script>
    </section>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Oliver Rodriguez. All Rights Reserved.</p>
    </footer>

    <!--bootstrap-->    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
