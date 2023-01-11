<?php

    http_response_code(200);
    $to = 'flyproduction485@gmail.com';
    $email= htmlspecialchars($_POST["email"]);
    $firstname = htmlspecialchars($_POST["nom"]);
    $secondname = htmlspecialchars($_POST["prenom"]);
    $message = htmlspecialchars($_POST["message"]);
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; 
    $headers .= 'Content-type: text/html; charset=iso-8859-1; charset=UTF-8' . "\r\n";

    $message ='
    
<html>
    <head>
    <title>Nouvelle commande !</title>
    <style> 
        .corps-mail {
            width: 100%;
            padding-top: 30px;
            padding-bottom: 150px;
            align-content: center;
            color: #111622;
            background-color: #F5F1F2; 
        }
        .corps-demande{
            display: grid;
            margin: 10vw;
            margin-top: 30px;
            height: 200px;
            min-width: 50%;
            text-align: center;
            border-radius: 10px;
            border:solid 2px #111622;
        }
        header{ 
            border-bottom: solid 2px black;
        }
        span{ font-weight: bold;}
     </style>
   </head>
   <body>
       <div class="corps-mail">
            <header>
                <H1>Nouvelle message &#x1F4E9;</H1>
                <h3>QetR</h3>
            </header>

            <div class="corps-demande">
                <p>Client : ' . $secondname . ' . ' . $firstname . ' </p>
                <p>mail : ' . $email . '</p>
                <p>Message : ' . $message . '</p>
            </div>
       </div>
   </body>
</html>';


if (@mail($to, $email, $message, $headers))
{
    header('Location: https://www.flypandyou.fr/web/src/pages/offres.html');
    exit();

}