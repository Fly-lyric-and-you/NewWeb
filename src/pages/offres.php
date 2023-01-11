<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="black" />
        <link rel="icon" type="image/ico" sizes="16x16" href="./../../public/img/favicon.ico"/>
        <link rel="apple-touch-icon" href="./../../public/img/favicon.ico" />
        <link rel="shortcut icon" href="./../../public/img/favicon.ico" />
    
    <!---st-->
        <link rel="stylesheet" href="../../src/styles/settings.css">
        <link rel="stylesheet" href="../../src/styles/pages/background.css">
        <link rel="stylesheet" href="../../src/styles/components/header.css">
        <link rel="stylesheet" href="../../src/styles/components/footer.css">
        <link rel="stylesheet" href="../../src/styles/components/home/intro.css">
        <link rel="stylesheet" href="../../src/styles/components/home/feuillet.css">
        <link rel="stylesheet" href="../../src/styles/components/home/tele.css">
        <link rel="stylesheet" href="../../src/styles/components/home/carte.css">
        <link rel="stylesheet" href="../../src/styles/components/home/produit.css">
        <link rel="stylesheet" href="../../src/styles/components/home/description.css">
        <link rel="stylesheet" href="../../src/styles/components/home/like.css">
        <link rel="stylesheet" href="../../src/styles/components/home/q&a.css">

        <link rel="stylesheet" href="../../src/styles/components/offre/intro3.css">
        <link rel="stylesheet" href="../../src/styles/components/offre/lesPacks.css">
        <link rel="stylesheet" href="../../src/styles/components/offre/packperso.css">
        <link rel="stylesheet" href="../../src/styles/components/offre/overlay.css">
        <link rel="stylesheet" href="../../src/styles/components/offre/packaging.css">
    <!---fin-st-->

    <!--Ja-->
        <script src="../../src/components/mouvement.js"></script>
        <script type="text/javascript" src="../components/btt-order.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <script>
            ScrollReveal({ duration:1000 });
        </script>
    <!--fin-Ja-->
    
    <!--Goog-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5THQCMDV1G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5THQCMDV1G');
</script>
    <!--fin-Goog-->
    
        <title>FLY. offres</title>
    </head>
<body>
    
    <script>
        window.axeptioSettings = {
          clientId: "62508b716976ee645f41f26a",
          cookiesVersion: "fly-fr",
        };
         
        (function(d, s) {
          var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
          e.async = true; e.src = "//static.axept.io/sdk.js";
          t.parentNode.insertBefore(e, t);
        })(document, "script");
    </script>

    <div class="corpus">
        <div class="background">
            <div class="triangle"></div>
            <div class="triangle2"></div>
            <div class="triangle3" style="display: none;"></div>
        </div>

        <header> 
            <a href="../../index.html"><img src='../../public/img/Fichier_000.png' alt='logo' class='logo'/></a>
            <div class='titre'>
                <h3 class='titre1'>FLY.</h3>
                <ul class="nav-bar">
                    <li class="dropbtn2" onclick="secteur()">secteurs</li>
                    <div id="myDropdown2" class="dropdown-content2">
                        <a href="../../index.html"><li>Musique</li></a>
                        <a href="../../litterature.html"><li>Litterature</li></a>
                    </div>
                    <a href="../../src/pages/offres.html"><li style="text-decoration: underline;">offres</li></a>
                    <a href="../../src/pages/about.html"><li>about</li></a>
                    <li class="soon">Wallet</li>
                </ul>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Menu</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../../index.html"><li>Musique</li></a>
                        <a href="../../litterature.html"><li>Litterature</li></a>
                        <a href="../../src/pages/offres.html"><li style="text-decoration: underline;">offres</li></a>
                        <a href="../../src/pages/about.html"><li>about</li></a>
                        <li class="soon">Wallet</li>
                    </div>
                </div>
            </div>
        </header>
        
        <?php
            if(isset($_GET['mail']))
            {
                $err = htmlspecialchars($_GET['mail']);

                switch($err)
                {
                    case 'ok':
                    ?>
                        <div class="alert alert-sucess">
                            <strong>OK</strong>, le mail a été envoyé !
                        </div>
                    <?php
                    break;
                }
            }
        ?>

        <div class="intro3">
            <h1 class="intro2-titre">Offres &#x1F4E6;</h1>
            <div class="intro2-txt headline">
                <div class="txt A">
                    <h3>LES AVANTAGES</h3>
                    <p> 
                        &#x2022; 100% Personnalisable à son image et celui de son projet.<br><br>
                        &#x2022; Des retours clairs et précis.<br><br>
                        &#x2022; La possibilité de générer du stream avec son produit.<br><br>
                        &#x2022; Se différencier de la concurrence par un produit original!
                    </p>
                </div>
                <div class="txt B">
                    <h3>À partir de <br><span style="font-size: 50px;">4,78 €/u</span></h3>
                </div>
            </div>
        </div>
        
        <div class="marge1"></div>
        <div class="package">
            <div class="img_pack"></div>
            <div class="txt_pack" style="z-index: 2;">
                <h1>le CD 2.0 &#x1F4BF;</h1>
                <p style="margin-bottom: 20px;">Chez FLY., <br>on achète en lot ! </p>
                <h3>Dans votre colis :</h3>
                <ul style="display: block;">
                    <li class="list_colis">Livret(s)</li>
                    <li class="list_colis">Carte(s)</li>
                </ul>
            </div>
        </div>
        <div class="marge2"></div>

        <div class="lesEtapes">
            <div class="triangle4"></div>
            <h1 class="intro2-titre" style="position: relative;">Les étapes <br>de fabrication</h1>
            <img class="etapes" src="../../public/img/Etapes.png" alt="Les étapes de création">
        </div>

        <h1 class="intro2-titre" id="offre" style="position: relative; background-color: var(--main-color-background);">Les Packs</h1>
        
        <div class="intro2-txt headline">
            <div class="txt A" style="width: 90%;">
                <h3></h3>
                <p>Chez FLY nous créons les flyp en stock. en fonction de la taille de son projet, nous créons autant de flyp que vous le souhaitez.<br><br>
                <span class="accent2">Les 4 packs vous permettes d'obtenir un devis instantanément !</span><br><br>
                Delais = J+15 après validation démo et ajustable en fonction du stock
                </p>
            </div>
        </div>
        
        <div class="packs">
            <div class="lot discovery">
                <h4><sub>Pack</sub><br>Discovery</h4>
                <h3 class="nombFlyp">25 flyp</h3>
                <ul class="nombFlyp-list" style="display: block;">
                    <li>- 25 flyp</li>
                    <li>- Accompagnement à la création</li>
                </ul>
                <button class="but1 order" onclick="on()">commander</button>
            </div>


<div id="overlay" class="overlay2">
    <span class="cross" onclick="off()">&#x274C;</span>
    <div class="form-order">
        <h4><sub>Pack</sub><br>Discovery</h4>
        <h3 class="nombFlyp">25 flyp</h3>
        <p style="margin: 50px;">Une fois votre demande faite<br>notre équipe vous enverra la liste des documents nécaissaires et notre devis pour la réalisation de votre nouveau produit !</p>
        <form class="form-order-1" action="../php/order1.php" method="post">
            <input class="personal-input buy" type="text" name="nom" id="nom" required placeholder="Nom">
            <input class="personal-input buy" type="text" name="prenom" id="prenom" required placeholder="Prénom">
            <input class="personal-input buy" type="email" name="email" id="email" required placeholder="Email">
            <input class="submitQA buy" type="submit" value="Submit">
        </form>
    </div>
</div>

            <div class="lot go">
                <h4><sub>Pack</sub><br>Let's go</h4>
                <h3 class="nombFlyp">100 flyp</h3>
                <ul class="nombFlyp-list" style="display: block;">
                    <li>- 100 flyp</li>
                    <li>- 3 mois de retour data</li>
                </ul>
                <button class="but1 order" onclick="on_1()">commander</button>
            </div>

<div id="overlay_1" class="overlay2">
    <span class="cross" onclick="off_1()">&#x274C;</span>
    <div class="form-order">
        <h4><sub>Pack</sub><br>Let's go</h4>
        <h3 class="nombFlyp">100 flyp</h3>
        <p style="margin: 50px;">Une fois votre demande faite<br>notre équipe vous enverra la liste des documents nécaissaires et notre devis pour la réalisation de votre nouveau produit !</p>
        <form class="form-order-1" action="../php/order2.php" method="post">
            <input class="personal-input buy" type="text" name="nom" id="nom" required placeholder="Nom">
            <input class="personal-input buy" type="text" name="prenom" id="prenom" required placeholder="Prénom">
            <input class="personal-input buy" type="email" name="email" id="email" required placeholder="Email">
            <input class="submitQA buy" type="submit" value="Submit">
        </form>
    </div>
</div>

            <div class="lot stars">
                <h4><sub>Pack</sub><br>Stars</h4>
                <h3 class="nombFlyp">200 flyp</h3>
                <ul class="nombFlyp-list" style="display: block;">
                    <li>- 200 flyp</li>
                    <li>- 3 mois de retour data</li>
                </ul>
                <button class="but1 order" onclick="on_2()">commander</button>
            </div>

<div id="overlay_2" class="overlay2">
    <span class="cross" onclick="off_2()">&#x274C;</span>
    <div class="form-order">
        <h4><sub>Pack</sub><br>Stars</h4>
        <h3 class="nombFlyp">200 flyp</h3>
        <p style="margin: 50px;">Une fois votre demande faite<br>notre équipe vous enverra la liste des documents nécaissaires et notre devis pour la réalisation de votre nouveau produit !</p>
        <form class="form-order-1" action="../php/order3.php" method="post">
            <input class="personal-input buy" type="text" name="nom" id="nom" required placeholder="Nom">
            <input class="personal-input buy" type="text" name="prenom" id="prenom" required placeholder="Prénom">
            <input class="personal-input buy" type="email" name="email" id="email" required placeholder="Email">
            <input class="submitQA buy" type="submit" value="Submit">
        </form>
    </div>
</div>

            <div class="lot pro">
                <h4><sub>Pack</sub><br>Pro</h4>
                <h3 class="nombFlyp">300 flyp</h3>
                <ul class="nombFlyp-list" style="display: block;">
                    <li>- 300 flyp</li>
                    <li>- 3 mois de retour data</li>
                </ul>
                <button class="but1 order" onclick="on_3()">commander</button>
            </div>
        </div>

<div id="overlay_3" class="overlay2">
    <span class="cross" onclick="off_3()">&#x274C;</span>
    <div class="form-order">
        <h4><sub>Pack</sub><br>Pro</h4>
        <h3 class="nombFlyp">300 flyp</h3>
        <p style="margin: 50px;">Une fois votre demande faite<br>notre équipe vous enverra la liste des documents nécaissaires et notre devis pour la réalisation de votre nouveau produit !</p>
        <form class="form-order-1" action="../php/order4.php" method="post">
            <input class="personal-input buy" type="text" name="nom" id="nom" required placeholder="Nom">
            <input class="personal-input buy" type="text" name="prenom" id="prenom" required placeholder="Prénom">
            <input class="personal-input buy" type="email" name="email" id="email" required placeholder="Email">
            <input class="submitQA buy" type="submit" value="Submit">
        </form>
    </div>
</div>      

        <div class="personnal-pack">
            <div class="personnal-txt">
                <h2 class="personnal-titre">For a personal pack</h2>
                <p>Sur ce formulaire, vous allez pouvoir nous adresser une demande de stock personnalisé<br/><br/><span>Entre 100 et 2000 flyp<br/>Réponse sous 24-48h maximum</span></p>
                <p class="direction">contact<br><span>Formulaire &#x1F4CB;</span></p>
            </div>
            <form class="personnal-form" action="../php/Personal.php" method="post">
                <div class="personal-info">
                    <input class="personal-input" type="text" name="nom" id="nom" required placeholder="Nom">
                    <input class="personal-input" type="text" name="prenom" id="prenom" required placeholder="Prénom">
                    <input class="personal-input" type="email" name="email" id="email" required placeholder="Email">
                    <input class="personal-input" type="number" name="quantite" id="quantite" required placeholder="Quantité" maxlength="20000" minlength="500">
                </div>
                <div class="personal-message">
                    <input class="projet" type="text" name="projet" id="projet" required placeholder="Votre projet">
                </div>
                <input class="submitQA" type="submit" value="Submit">
            </form>
        </div>

        <div class="link1">
            <div class="link1-base">
                <div class="base1">
                    <sub>Liens page</sub>
                    <ul class="link1-base1">
                        <a href="../../src/pages/about.html"><li>About</li></a>
                        <a href="#offre"><li>Offre</li></a>
                    </ul>
                </div>
                <div class="base2">
                    <sub>Docs</sub>
                    <ul class="link1-base2">
                        <a href="CGV.html"><li>CGU</li></a>
                        <a href="mailto:flyproduction485@gmail.com"><li>Mail to</li></a>
                    </ul>
                </div>
                <div class="base2">
                    <sub>Réseau</sub>
                    <ul class="link1-base2">
                        <a href="https://www.facebook.com/flypandyou/"><li>Facebook</li></a>
                        <a href="https://instagram.com/flypandyou?igshid=YmMyMTA2M2Y="><li>Instagram</li></a>
                        <a href="https://www.linkedin.com/company/fly-lyric-and-you/"><li>Linkedin</li></a>
                    </ul>
                </div>
            </div>
            <img src='../../public/img/favicon.ico' alt='logo' class='logo fin'/>
            <sup>Copyright ©FLY. 2022</sup>
        </div>
    </div>

    <!--Script mouvement-->
    <script src="../../src/components/scroll-effect.js"></script>
    
</body>
</html>