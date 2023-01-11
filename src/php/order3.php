<?php

    http_response_code(200);
    $to = 'flyproduction485@gmail.com';
    $email= htmlspecialchars($_POST["email"]);
    $firstname = htmlspecialchars($_POST["nom"]);
    $secondname = htmlspecialchars($_POST["prenom"]);
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; 
    $headers .= 'Content-type: text/html; charset=iso-8859-1; charset=UTF-8' . "\r\n";

    $message ='
    
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Réponse demande de devis</title>
        <style> 
        * {    
            box-sizing: border-box;   
            margin: 0;    
            padding: 0;
            align-items: center;
            cursor: default;
        }

        p {
            margin-bottom: 20px;
        }

        a {
            cursor: pointer;
        }

        body {
            position: absolute;
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
            background-color: #F5F1F2;
        }

        header { 
            display: grid;
            text-align: center;
        }

        span { 
            font-weight: bold;
            color:indianred;
        }

        sup {
            margin-top: 30px;
            color: rgb(167, 167, 167);
        }

        .titre {
            margin: 20px;
            font-size: 50px;
        }

        .corps {
            padding-top: 20px;
            padding-bottom: 100px;
        }
        
        .corps-mail {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding-top: 30px;
            padding-bottom: 150px;
            align-content: center;
            color: #111622;
            /* background-color: #F5F1F2;  */
        }

        .corps-demande {
            display: grid;
            text-align: left;
            margin: 6vw;
            margin-top: 30px;
            padding: 20px;
            min-width: 50%;
            border-radius: 10px;
            border:solid 2px #111622;
        }

        .informations {
            position: absolute;
            display: grid;
            text-align: center;
            bottom: 0;
            min-height: 100px;
            width: 100%;
            padding: 20px;
            color: ghostwhite;
            background-color: #111622;
        }

        .supp {
            padding: 6vw;
        }

        .lien {
            display: flex;
            justify-content: space-around;
        }

        .lien-R {
            display: flex;
            align-content: center;
            justify-content: center;
            padding: 4px;
            height: 30px;
            width: 30px;
            text-decoration: none;
            border-radius: 4px;
            background-color: ghostwhite;
            color: #111622;
        }
        
     </style>
    </head>
    <body>
        <div class="corps-mail">
             <header>
                 <H1 class="titre">Nouvelle commande &#x1F389;</H1>
                 <h3>PACK STARS</h3>
             </header>
 
             <div class="corps">
                <div class="corps-demande">
                    <p>Client : ' . $secondname . ' . ' . $firstname . ' </p>
                    <p>Quantité : <span>200 flyp</span></p>
                    <p>mail : ' . $email . '</p>   
                </div>
                <div class="supp">
                    <p>
                        1 . > RÉPONSE À ENVOYER : <br><br>
                
                        - Devis pour la Quantité<br>
                        - Confirmation des délais<br><br>
                
                        2 . > INFORMATIONS UTILES : <br><br>
                
                        - Réponse au client sous 24H maximum 5j/7<br>
                        - Les produits doivent être conditionner :<br>
                            --> Pochette pour la carte mis en place<br>
                            --> Étiquette avec le numéro personnalisé sur
                            l avant<br>
                            --> carte mis en place<br>
                            --> Flyp mis sous platsique<br>
                            --> Vérification de la Quantité<br>
                            --> Mise en place du stock dans le carton<br>
                    </p>
                </div>
            </div>
            <div  class="informations">
                <p> Suivez nous sur les réseaux sociaux !</p>
                <div class="lien">
                    <a href="" class="lien-R">F</a>
                    <a href="" class="lien-R">In</a>
                    <a href="" class="lien-R">in</a>
                </div>
                <sup>Copyright 2022 FLY. Bordeaux-France</sup>
            </div>
        </div>
    </body>
    </html>
';

if (@mail($to, $email, $message, $headers))
{
    header('Location: https://www.flypandyou.fr/src/pages/offres.html');
    
    $firstname = htmlspecialchars($_POST["nom"]);
    $secondname = htmlspecialchars($_POST["prenom"]);
    $to      = " $email ";
    $subject = 'Retour commande 200 flyp';
    $headers = array(
        'From' => 'flyproduction485@gmail.com',
        'Reply-To' => 'flyproduction485@gmail.com',
        'Content-type' => 'text/html; charset=iso-8859-1; charset=UTF-8',
    );

    $message = '

    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Réponse demande de devis</title>
        <style> 
        * {    
            box-sizing: border-box;   
            margin: 0;    
            padding: 0;
            align-items: center;
            cursor: default;
        }

        p {
            margin-bottom: 20px;
        }

        a {
            cursor: pointer;
        }

        body {
            position: absolute;
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
            background-color: #F5F1F2;
        }

        header { 
            display: grid;
            text-align: center;
        }

        span { 
            font-weight: bold;
            color:indianred;
        }
        
        img {
            margin-top: 50px;
            width: 100%;
            background-color: white !important;
            box-shadow: 9px 10px 28px rgba(0, 0, 0, 0.42);
        }

        sup {
            margin-top: 30px;
            color: rgb(167, 167, 167);
        }
        
        button {
            display: flex;
            justify-content: center;
            width: 150px;
            padding: 15px;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            background-color: rgb(244, 114, 114);
            color: white;
        }

        .corps {
            padding-top: 20px;
            padding-bottom: 100px;
        }

        .titre {
            margin: 20px;
            font-size: 50px;
        }
        
        .corps-mail {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding-top: 30px;
            padding-bottom: 150px;
            align-content: center;
            color: #111622;
            /* background-color: #F5F1F2;  */
        }

        .corps-demande {
            display: grid;
            text-align: left;
            margin: 6vw;
            margin-top: 30px;
            padding: 20px;
            min-width: 50%;
            border-radius: 10px;
        }

        .informations {
            position: absolute;
            display: grid;
            text-align: center;
            bottom: 0;
            min-height: 100px;
            width: 100%;
            padding: 20px;
            color: ghostwhite;
            background-color: #111622;
        }

        .lien {
            display: flex;
            justify-content: space-around;
        }

        .lien-R {
            display: flex;
            align-content: center;
            justify-content: center;
            padding: 4px;
            height: 30px;
            width: 30px;
            text-decoration: none;
            border-radius: 4px;
            background-color: ghostwhite;
            color: #111622;
        }
        
     </style>
    </head>
    <body>
        <div class="corps-mail">
            <header>
                <H1 class="titre">Confirmation de la demande &#x1F389;</H1>
            </header>

            <div class="corps">
                <div class="corps-demande">
                    <p></p>
                    Bonjour &#x1F601;,<br><br>
                    Nous avons bien reçu votre demande de devis pour <span>200 flyp !</span><br>
                    <span>Vous trouverez votre devis plus bas !</span><br>
                    À très vite.<br><br>
                    
                    Cordialement,<br><br><br>
                    
                    Fly.</p>

                    <sub>Si vous n\'êtes pas à l\'origine de cette connexion,<br>
                    veuillez nous l\'indiquer par retour de mail !<br><br>
                    <a href="mailto:flyproduction485@gmail.com">flyproduction485@gmail.com</a><br><br><br><br>
                    <a href="https://www.flypandyou.fr/src/php/200.pdf" style="margin-top: 30px; text-decoration: none;"><button>Devis</button></a>
                    </sub>
                    
                    <img src="https://www.flypandyou.fr/src/php/200.pdf" alt="devis lot de 200 flyp PDF">
                </div>
            </div>
    
            <div class="informations">
                <p> Suivez nous sur les réseaux sociaux !</p>
                <div class="lien">
                    <a href="" class="lien-R">F</a>
                    <a href="" class="lien-R">In</a>
                    <a href="" class="lien-R">in</a>
                </div>
                <sup>Copyright 2022 FLY. Bordeaux-France</sup>
            </div>
       </div>
    </body>
    </html>
    ';

    mail($to, $subject, $message, $headers);
    
    exit();
}


