<?php
//add your blog name below
$config_wsName = 'Oliver Rodríguez - Abogado';

//Add your name below
$config_author = 'Roar Web Development, SeP';

$config_basedir = '/rodriguezarrocha/'; // para trabajar en localhost
//$config_basedir = 'https://www.rodriguezarrocha.com/'; // para trabajar en la web

//Address
$address = "El Conquistador, Calle 45E y Via España. Panamá, Ciudad de Panamá";

//telefono
$phone = "+(507) 382-1904";

//celular
$cel = "+(507) 6219-5227";

//email
$email = "info@rodriguezarrocha.com";

?>

<?php
$codigo = <<<EOT

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- font awesome -->
    <script src="https://kit.fontawesome.com/e132026875.js" crossorigin="anonymous"></script>

<!-- recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PSMWR43P3G"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PSMWR43P3G');
    </script>

    
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
		
		window.addEventListener('scroll', function() {
	       
			if (window.scrollY > 50) {
				document.getElementById('navbar_top').classList.add('fixed-top');
				// add padding top to show content behind navbar
				navbar_height = document.querySelector('.navbar').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
			 	document.getElementById('navbar_top').classList.remove('fixed-top');
				 // remove padding top from body
				document.body.style.paddingTop = '0';
			} 
		});
	}); 
	// DOMContentLoaded  end
</script>

EOT;
echo $codigo;

?>

<?php
$scripFooter = <<<EOT

    <!--bootstrap-->    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


EOT;
echo $bootstrapFooter;
?>