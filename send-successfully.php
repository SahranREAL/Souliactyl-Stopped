<!DOCTYPE html>
<html lang="fr_FR">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="index,follow">
	   <meta name="googlebot" content="index,follow">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Softky.eu — Hébergement de bot discord gratuit</title>
      <meta name="keywords" content="Hébergement, hébergeur, discord, discord bot, hébergement bot discord, softky, softky.eu, js, java, python">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/rsp.css">
      <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <script src="https://kit.fontawesome.com/de733b6433.js" crossorigin="anonymous"></script>
      <script async src="https://api.countapi.xyz/hit/softky.eu/90b43e5e-658f-40e9-8681-faa605cb01b7?callback=websiteVisits"></script>
         <script>
            function websiteVisits(response) {
               document.querySelector("#visits").textContent = response.value;}
         </script>

      <meta property="og:locale" content="fr_FR">
      <meta property="og:title" content="Softky.eu" />
      <meta property="og:image" content="https://softky.eu/images/Softky.png" />
      <meta property="og:image:alt" content="Softky">
      <meta property="og:url" content="https://softky.eu/" />
      <meta property="og:site_name" content="softky.eu" />
      <meta property="og:type" content="website">
      <meta property="og:description" content="Softky.eu offre une solution d'hébergement de bot Discord fiable et de qualité supérieure, comprenant à la fois des options gratuites et payantes. Notre plateforme est équipée de nouvelles machines permettant un taux de disponibilité de 99,6% et une expérience utilisateur inoubliable." />
      <meta name="twitter:creator" content="@MaybeAnge">
      <meta name="twitter:site" content="@MaybeAnge">
      <meta name="apple-mobile-web-app-title" content="Maybe Ange">
      <meta name="application-name" content="Maybe Ange">
      <meta name="msapplication-TileColor" content="#FFFF00">
      <meta name="theme-color" content="#FFFF00">
   </head>

   <!--
	//////////////////////////////////////////////////////

	MAYBE ANGE
	DESIGNED & DEVELOPED by MAYBE ANGE

	Instagram: 	      https://www.instagram.com/maybe.ange/
	Email: 				contact.support@maybe-ange.com
	Twitter: 			https://twitter.com/Maybe_Ange
	YouTube: 			https://youtube.com/c/MaybeAnge

	//////////////////////////////////////////////////////
	-->

   <body class="layout-cc-by-nd">

      <header>
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="logo-desk">
                           <div class="logo">
                              <a href="index.html"><img onmousedown="return false" src="images/Softky.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbars">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="index.html">Accueil</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="index.html#about"> En savoir plus </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="index.html#service"> Services</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php"> Contact</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="https://www.paypal.com/paypalme/SoftkyFR" rel="noopener" target="_blank">Donation</a>
                              </li>
                              <div class="discord-link">
                                 <a class="nav-link" href="https://discord.gg/softky-eu-837380983413014538" rel="noopener" target="_blank">Discord <i class="fa-brands fa-discord"></i></a>
                              </div>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>

      <section class="banner">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="text-bg">
                     <h1>Contact</h1>
                     <p>E-mail envoyé avec succès <i class="fa-solid fa-heart" style="color: #24ff3d;"></i></p>
                  </div>
                  <div class="btn-placement">
                  <button class="btn-primary" onclick="location.href ='https://softky.eu'" style="margin-top: 50px;">Retour sur le site</button>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="text-img">
                     <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                     <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_u25cckyh.json"  background="transparent"  speed="1"  style="max-width: 100%; height: auto; margin-top: -150px; width: 800px; height: 800px;"  loop  autoplay></lottie-player>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php
        require_once(__DIR__ . '/vendor/autoload.php');
        use \Mailjet\Resources;

        define('API_PUBLIC_KEY', '*******************************');
        define('API_PRIVATE_KEY', '********************************');
        $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);


        if(!empty($_POST['surname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $surname = htmlspecialchars($_POST['surname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        $idticket = uniqid();

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $body = [
        'Messages' => [
        [
        'From' => [
        'Email' => "formulaire.support@softky.eu",
        'Name' => "$surname $firstname"
        ],
        'To' => [
        [
        'Email' => "support@softky.eu",
        'Name' => "Softky Support"
        ]
        ],
        'Subject' => "Contact — ".$idticket,
        'TextPart' => "$email\r \n$message",
        'CustomID' => "Identifiant du ticket : ".$idticket,
        'Headers' => [
         'Reply-To' => "$email",
       ]
        ]
        ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();

        }
        else{
        echo "Email non valide";
        }

        } 
        else {
        header('Location: contact.php');
        die();
        }
		    ?>

      <footer class="footer">
         <div class="container">
           <div class="row">
             <div class="col-sm-12 col-md-6">
               <h6 class="title-company">SOFTKY.EU</h6>
               <p class="buttom-justify">Softky.eu n'est, en aucun cas, affilié avec Discord. <br>Les logos, marques et images de Discord sont la propriété de Discord Inc.</p>
             </div>
   
             <div class="col-xs-6 col-md-3">
               <h6>Categories</h6>
               <ul class="footer-links">
                 <li><a href="#about">À propos</a></li>
                 <li><a href="#service">Services</a></li>
                 <li><a href="#offer">Nos offres</a></li>
                 <li><a href="https://dash.softky.eu/">Panel Pterodactyl</a></li>
                 <li><a href="faq.html">FAQ</a></li>
               </ul>
             </div>
   
             <div class="col-xs-6 col-md-3">
               <h6>Légal</h6>
               <ul class="footer-links">
                 <li><a href="https://www.societe.com/societe/softky-group-913926663.html" rel="noopener" target="_blank">SOFTKY GROUP</a></li>
                 <li><a href="legal.html">Mentions Légales</a></li>
               </ul>
             </div>
           </div>
           <hr>
         </div>
         <div class="container">
           <div class="row">
             <div class="col-md-8 col-sm-6 col-xs-12">
               <div><p>Ce site a été visité <span id="visits"></span> fois.</p></div>
               <div><p>Site web conçu et développé par <a style="color: #3366cc;" href="https://maybe-ange.com" rel="noopener" target="_blank">Maybe Ange</a></p></div>
               <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by <span class="Softky">Softky.eu</span>
               </p>
             </div>
             <div class="col-md-4 col-sm-6 col-xs-12 text-right">
               <a href="https://www.top-heberg.com/hebergeur/softky-316" rel="noopener" target="_blank">
               <img class="img-top-heberg" src="images/assets_images_badge-stars_4-stars.png" alt=""></a>
             </div>
           </div>
         </div>
      </footer>

      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https://kit.fontawesome.com/de733b6433.js" crossorigin="anonymous"></script>
   
   </body>
</html>

