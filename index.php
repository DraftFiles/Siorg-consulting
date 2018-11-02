<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Siorg Consulting</title>

	<link rel="canonical" href=""/>
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<meta name="description" content="">
	<meta name="author" content="DraftMan">

	<meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:description" content="">
	<meta property="og:locale" content="fr_FR">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:image" content="">
	<meta property="og:image:secure_url" content="">

	<meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image:src" content="">

	<meta name="theme-color" content="">
    <meta name="apple-mobile-web-app-status-bar-style" content="">
    <meta name="msapplication-navbutton-color" content="">

	<link rel="shortcut icon" href="images/logo.png" type="image/ico" />

	<link rel="stylesheet" href="css/style.css">

	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Open+Sans:300,400,600,700,900">
</head>
<body id="page">
	<nav id="nav">
		<li><span><i class="material-icons">home</i></span><a href="">Accueil</a></li>
		<div id="mobile-button"></div>
		<div class="menu">
			<li><span><i class="material-icons">person</i></span><a href="">A propos</a></li>
			<li><span><i class="material-icons">live_help</i></span><a href="">Avis</a></li>
			<li><span><i class="material-icons">email</i></span><a href="">Contact</a></li>
		</div>
	</nav>
	<header id="header">
		<img src="images/Logo.svg" alt="Logo" width="500px">
	</header>
	<section id="a-propos">
		<h3>A-PROPOS</h3>
		<div class="content">
			<div>
				<div class="image">
					<div class="hover">
						<a href=""><span></span></a>
					</div>
					<img src="images/profil.jpg" alt="" width="100%">
				</div>
			</div>
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo at est explicabo aspernatur praesentium, doloremque tempora dolore dicta earum a cum, deleniti quasi perferendis consequatur natus pariatur? Alias, recusandae dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo at est explicabo aspernatur praesentium, doloremque tempora dolore dicta earum a cum, deleniti quasi perferendis consequatur natus pariatur? Alias, recusandae dolore!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo at est explicabo aspernatur praesentium, doloremque tempora dolore dicta earum a cum, deleniti quasi perferendis consequatur natus pariatur? Alias, recusandae dolore!</p>
			</div>
		</div>
	</section>
	<section id="infos">
		<div class="content">
			<div><h5>+9</h5><h6>Clients satisfaits</h6></div>
			<div><h5>+3</h5><h6>Partenaires</h6></div>
			<div><h5>+4</h5><h6>Projets achevés</h6></div>
			<div><h5>+153</h5><h6>Litres de café</h6></div>
		</div>
	</section>
	<section id="parallax" class="avis">
		<div>
			<h3>L'avis des clients</h3>
		</div>
	</section>
	<section id="avis">
		<div class="icon-container">
			<div id="avis-button" class="prev"></div>
		</div> 
		<div class="content">
			<div id="slides">
				<div>
					<blockquote>
						<h3>Super titre cool</h3>
						<p class="testimonial-quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eveniet autem dicta sit voluptatem, consequuntur.</p>
						<h2>Bjarne Stroustrup</h2>
					</blockquote>
				</div>
				<div>
					<blockquote>
						<h3>Super titre cool</h3>
						<p class="testimonial-quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eveniet autem dicta sit voluptatem, consequuntur.</p>
						<h2>Gerald Weinberg</h2>
					</blockquote>
				</div>
				<div>
					<blockquote>
						<h3>Super titre cool</h3>
						<p class="testimonial-quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eveniet autem dicta sit voluptatem, consequuntur.</p>
						<h2>Edsger Dijkstra</h2>
					</blockquote>
				</div>
				<div>
					<blockquote>
						<h3>Super titre cool</h3>
						<p class="testimonial-quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eveniet autem dicta sit voluptatem, consequuntur.</p>
						<h2>Peter Funk</h2>
					</blockquote>
				</div>
			</div>
		</div>
		<div class="icon-container">
			<div id="avis-button" class="next"></div>
		</div>
	</section>
	<section id="parallax" class="contact">
		<div>
			<h3>Me contacter</h3>
		</div>
	</section>
	<section id="contact">	
		<div class="content">
			<div>
				<div>
					<!-- carte -->
				</div>
			</div>
			<div>	
				<blockquote>
					<li class="call"><span><i class="material-icons">call</i></span><a href="">+33 6 05 15 84 54</a></li>
					<li class="email"><span><i class="material-icons">email</i></span><a href="">contact@siorg.fr</a></li>
					<li class="facebook"><span><i></i></span><a href="">christophemarchal</a></li>
					<li class="linkedin"><span><i></i></span><a href="">marchalchristophesiorg</a></li>
				</blockquote>
				<blockquote>
					<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
$mail = new PHPMailer(false);
if(!empty($_POST)) {

    $smtp_host = '';
    $smtp_username = '';
    $smtp_pwd = '';
    $smtp_port = 587;


    // EMAIL CONFIG
    $email_to       = '';

    $email_from     = $_POST['email'];          // EXPEDITEUR DE L'EMAIL
    $email_object   = $_POST['objet'];          // OBJET DE L'EMAIL
    $email_author   = $_POST['author'];         // AUTEUR DE L'EMAIL
    $email_message  = $_POST['message'];        // MESSAGE DU MAIL

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = $smtp_host;
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_username;
        $mail->Password = $smtp_pwd;
        $mail->SMTPSecure = 'tls';
        $mail->Port = $smtp_port;

        $mail->setFrom($email_from, $email_author);
        $mail->addAddress($email_to);     // Ajouter un destinataire

        //Content
        $mail->isHTML(true);                                  // DÃ©fini l'email en html
        $mail->Subject = $email_object;
        $mail->Body    = '<html>
                            <body>
                                <table style="width:100%;">
                                    <tr>
                                        <td colspan="2">
                                            Vous avez reçu un message le ' . date( 'd/m/Y' ) . ' à  ' . date( 'H:i:s' ) . '<br>
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">' . nl2br( $_POST['message'] ) . '</td><br>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Mail : ' . nl2br( $_POST['email'] ) . '</td>
                                    </tr><br>
                                    <tr>
                                        <td colspan="2">Cordialement ' . nl2br( $_POST['author'] ) . '.</td>
                                    </tr>
                                </table>
                            </body>
                            </html>';;
        $mail->AltBody = 'Un mail provenant de christophe.fr';

        $mail->send();
    } catch (Exception $e) {

    }
}
?>
					<form action="" method="POST" name="sendMail">
						<input type="text" placeholder="Société" name="societe" required>
						<input type="text" placeholder="Nom" name="name" required>
						<div>
						<input type="email" placeholder="Mail" name="mail" id="email" required>
						<ul id="autosuffix"></ul>
						</div>
						<input type="tel" placeholder="Numéro" name="numero" required>
						<textarea name="msg" id="" cols="30" rows="10" placeholder="Message"></textarea>
						<button type="submit">Envoyer</button>
					</form>
				</blockquote>
			</div>
		</div>
	</section>
	<footer>
		<div class="content">
			<div>
				<h4>Siorg Consulting</h4>
				<a href="" title="Accueil">Accueil</a>
				<a href="" title="À Propos">À Propos</a>
				<a href="" title="Avis">Avis</a>
				<a href="" title="Contact">Contact</a>
			</div>
			<div>
				<div>
					<h4>Contact</h4>
					<a href="" title="Formulaire de Contact">Formulaire de Contact</a>
					<span class="contract"><a href="" target="blank">Facebook</a> | <a href="" target="blank">Linkedin</a></span>
				</div>
			</div>
			<div>
				<h4>Partenaires</h4>
				<a href="" target="blank">Partenaire 1</a>
				<a href="" target="blank">Partenaire 2</a>
				<a href="" target="blank">Partenaire 3</a>
				<a href="" target="blank">DraftMan.fr</a>
			</div>
		</div>
		<div id="copyright">
			<section>Copyright 2018 &copy; Siorg Consulting - All rights reserved</section><span class="sep"> - </span><section>Développé avec <span class="coeur">❤</span> par DraftMan</section>
		</div>
	</footer>
	<script src="js/app.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>