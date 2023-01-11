<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal"/>
    <meta name="theme-color" content="black" />
    <link rel="icon" type="image/ico" sizes="16x16" href="./../../public/img/favicon.ico"/>
    <link rel="apple-touch-icon" href="../../public/img/favicon.ico" />
    <link rel="shortcut icon" href="../../public/img/favicon.ico" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../styles/pages/connexion.css">
    <title>flyp. inscription</title>
</head>

<body>

    <script>
        window.axeptioSettings = {
          clientId: "62508b716976ee645f41f26a",
          cookiesVersion: "xxxxx"
        };
         
        (function(d, s) {
          var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
          e.async = true; e.src = "//static.axept.io/sdk.js";
          t.parentNode.insertBefore(e, t);
        })(document, "script");
    </script>

<div class="triangle2"></div>
<div class="login-form2">
    <h1>&#x1F449; &#x1F4F1;</h1><br>
</div>
<div class="login-form">
    <!--<?php 
        if(isset($_GET['reg_err']))
        {
            $err = htmlspecialchars($_GET['reg_err']);

            switch($err)
            {
                case 'success':
                ?>
                    <div class="alert alert-success">
                        <h5>Succès</h5> inscription réussie !
                    </div>
                <?php
                break;

                case 'password':
                ?>
                    <div class="alert alert-danger">
                        <h5>Erreur</h5> mot de passe différent
                    </div>
                <?php
                break;

                case 'email':
                ?>
                    <div class="alert alert-danger">
                        <h5>Erreur</h5> email non valide
                    </div>
                <?php
                break;

                case 'email_length':
                ?>
                    <div class="alert alert-danger">
                        <h5>Erreur</h5> email trop long
                    </div>
                <?php 
                break;

                case 'pseudo_length':
                ?>
                    <div class="alert alert-danger">
                        <h5>Erreur</h5> pseudo trop long
                    </div>
                <?php 
                case 'already':
                ?>
                    <div class="alert alert-danger">
                        <h5>Erreur</h5> compte deja existant
                    </div>
                <?php 

            }
        }
        ?>-->
    
    <form action="../php/inscription_traitement.php" method="post">
        <h2 class="titre">Inscription à fly.</h2>   
        <div class="form">    
            <div class="form-group">
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Inscription</button>
            </div> 

            <div class="dropdown">
                <h4>CONDITIONS GÉNÉRALES</h4>
                <p>Les présentes conditions générales régissent l'utilisation d’un flyp
                    Ce site appartient et est géré par l’entreprise FLY.
                    En utilisant ce site, vous indiquez que vous avez lu et compris les conditions d'utilisation et que vous acceptez de les respecter en tout
                    temps.</p>
                <div onclick="myFunction()" class="dropbtn">Plus</div>
                <div id="myDropdown" class="dropdown-content">
                    <div class="info">
                        <h5>Propriété intellectuelle</h5>
                        <p>Tout contenu publié et mis à disposition sur ce site est la propriété de et de ses créateurs. Cela comprend, mais n'est pas limitéaux images, textes, logos, documents, fichiers téléchargeables et tout ce qui contribue à la composition de ce site.</p>
                        <h5>Restrictions d'âge</h5>
                        <p>L'âge minimum pour utiliser ce site est de 12 ans. Les utilisateurs conviennent qu'en utilisant notre site, ils ont plus de 12 ans. Nous n'assumons aucune responsabilité juridique pour les fausses déclarations sur l'âge.</p>
                        <h5>Utilisation acceptable</h5>
                        <p>En tant qu'utilisateur, vous acceptez d'utiliser notre site légalement et de ne pas utiliser ce site pour des fins illicites, à savoir : <br>
                         - Violer les droits des autres utilisateurs du site<br>
                         - Violer les droits de propriété intellectuelle des propriétaires du site ou de tout tiers au site<br>
                         - Pirater le compte d'un autre utilisateur du site<br>
                        Agir de toute façon qui pourrait être considérée comme frauduleuse<br>
                        Si nous estimons que vous utilisez ce site illégalement ou d'une manière qui viole les conditions d'utilisation acceptable ci-dessus, nous
                        nous réservons le droit de limiter, suspendre ou résilier votre accès à ce site. Nous nous réservons également le droit de prendre toutes les
                        mesures juridiques nécessaires pour vous empêcher d'accéder à notre site.</p>
                        <h5>Comptes</h5>
                        <p>Lorsque vous créez un compte sur notre site, vous acceptez ce qui suit:
                        que vous êtes seul responsable de votre compte et de la sécurité et la confidentialité de votre compte, y compris les mots de passe ou
                        les renseignements de nature délicate joints à ce compte, et
                        que tous les renseignements personnels que vous nous fournissez par l'entremise de votre compte sont à jour, exacts et véridiques et
                        que vous mettrez à jour vos renseignements personnels s'ils changent.
                        Nous nous réservons le droit de suspendre ou de résilier votre compte si vous utilisez notre site illégalement ou si vous violez les conditions d'utilisation acceptable.</p>
                        <h5>Ventes des biens et services</h5>
                        <p>Ce document régit la vente des biens mis à disposition sur notre site.
                        Les biens que nous offrons comprennent :
                        Support d'écoute audio
                        Contenus exclusifs
                        Les biens liés à ce document sont les biens qui sont affichés sur notre site au moment où vous y accédez. Cela comprend tous les produits
                        énumérés comme étant en rupture de stock. Toutes les informations, descriptions ou images que nous fournissons sur nos biens sont
                        décrites et présentées avec la plus grande précision possible. Cependant, nous ne sommes pas légalement tenus par ces informations,
                        descriptions ou images car nous ne pouvons pas garantir l'exactitude de chaque produit ou service que nous fournissons. Vous acceptez
                        d'acheter ces biens a vos propres risques.
                        Vendus par des tiers
                        Notre site peut offrir des biens de sociétés tierces. Nous ne pouvons pas garantir la qualité ou l'exactitude des biens mis à disposition par
                        des tiers sur notre site.</p>
                        <h5>Paiements</h5>
                        <p>Nous acceptons les modes de paiement suivants sur ce site :
                        Carte bancaire 
                        PayPal
                        Lorsque vous nous fournissez vos renseignements de paiement, vous nous confirmez que vous avez autorisé l'utilisation et l'accès à
                        l'instrument de paiement que vous avez choisi d'utiliser. En nous fournissant vos détails de paiement, vous confirmez que vous nous
                        autorisez à facturer le montant dû à cet instrument de paiement.
                        Si nous estimons que votre paiement a violé une loi ou l'une de nos conditions d'utilisation, nous nous réservons le droit d'annuler votre
                        transaction.</p>
                        <h5>Remboursement</h5>
                        <p>Remboursement des biens
                        Nous acceptons les demandes de remboursement sur notre site pour les produits qui répondent à l'une des exigences suivantes :
                        le bien n'est pas tel que décrit
                        Les demandes de remboursement peuvent être faites dans les délais de
                        après la réception de vos biens.
                        Limitation de responsabilité
                        ou l'un de ses employés sera tenu responsable de tout problème découlant de ce site. Néanmoins,
                        employés ne seront pas tenus responsables de tout problème découlant de toute utilisation irrégulière de ce site.</p>
                        <h5>Indemnité</h5>
                        <p>En tant qu'utilisateur, vous indemnisez par les présentes
                        de toute responsabilité, de tout coût, de toute cause d'action, de tout
                        dommage ou de toute dépense découlant de votre utilisation de ce site ou de votre violation de l'une des dispositions énoncées dans le
                        présent document.</p>
                        <h5>Lois applicables</h5>
                        <p>Ce document est soumis aux lois applicables en France et vise à se conformer à ses règles et règlements nécessaires. Cela inclut la réglementation à l'échelle de l'UE énoncée dans le RGPD.</p>
                        <h5>Divisibilité</h5>
                        <p>Si, à tout moment, l'une des dispositions énoncées dans le présent document est jugée incompatible ou invalide en vertu des lois applicables, ces dispositions seront considérées comme nulles et seront retirées du présent document. Toutes les autres dispositions ne seront pas touchees par les lois et le reste du document sera toujours considéré comme valide</p>
                        <h5>Modifications</h5>
                        <p>Ces conditions générales peuvent être modifiées de temps à autre afin de maintenir le respect de la loi et de refleter tout changement à la façon dont nous gerons notre site et la façon dont nous nous attendons a ce que les utilisateurs se comportent sur notre site. Nous recommandons à nos utilisateurs de vérifier ces conditions générales de temps à autre pour s'assurer qu'ils sont informés de toute mise à jour. Au besoin, nous informerons les utilisateurs par courriel des changements apportés à ces conditions ou nous afficherons un avis sur notre site.</p>
                        <h5>Contact</h5>
                        <p>Veuillez communiquer avec nous si vous avez des questions ou des préoccupations. Nos coordonnées sont les suivantes :<br>
                        flypproduction485@gmail.com</p>

                        <sub>Date d'entrée en vigueur : le 1 janvier 2020.</sub>

                        <sub>(©2019-2022. ]Documents Legaux-* (Sequiter Inc.]</sub>
                    </div>
                </div>
            </div>

            <h4>UTILISATION DES DONNÉES &#x1F36A;</h4>
            <p>Cette politique de cookies explique ce que sont les cookies et comment nous les utilisons. Cette politique permet de comprendre quel type de cookies nous utilisons, ou les informations que nous collectons à l'aide de cookies et comment ces informations sont utilisées. </p>
            <div onclick="myFunction2()" class="dropbtn">Plus</div>
            <div id="myDropdown2" class="dropdown-content">
                <div class="info">
                    <p><h5>Cookies Policy</h5></p>
                    <p>Our Cookies Policy was last updated on 01/01/2020.</p>
                    <p>Cookies do not typically contain any information that personally identifies a user, but personal information that we store about You may be linked to the information stored in and obtained from Cookies. For further information on how We use, store and keep your personal data secure, see our Privacy Policy.</p>
                    <p>We do not store sensitive personal information, such as mailing addresses, account passwords, etc. in the Cookies We use. This Cookies Policy was generated by <a href="https://www.termsfeed.com/blog/sample-cookies-policy-template/">TermsFeed Cookies Policy Template.</a></p>
                    <p><h5>Interpretation and Definitions</h5></p>
                    <p><h5>Interpretation</h5></p>
                    <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
                    <p><h5>Definitions</h5></p>
                    <p>For the purposes of this Cookies Policy:</p>
                    <ul>
                    <li><h5>Company</h5> (referred to as either "the Company", "We", "Us" or "Our" in this Cookies Policy) refers to FLY.</li>
                    <li><h5>Cookies</h5> means small files that are placed on Your computer, mobile device or any other device by a website, containing details of your browsing history on that website among its many uses.</li>
                    <li><h5>Website</h5> refers to flyp, accessible from <a href="https://www.flypandyou.fr/web/src/pages/about.html">flyandyou.com</a></li></li>
                    <li><h5>You</h5> means the individual accessing or using the Website, or a company, or any legal entity on behalf of which such individual is accessing or using the Website, as applicable.</li>
                    </ul>
                    <p><h5>The use of the Cookies</h5></p>
                    <p><h5>Type of Cookies We Use</h5></p>
                    <p>Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser.</p>
                    <p>We use both session and persistent Cookies for the purposes set out below:</p>
                    <ul>
                    <li>
                    <p><h5>Necessary / Essential Cookies</h5></p>
                    <p>Type: Session Cookies</p>
                    <p>Administered by: Us</p>
                    <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
                    </li>
                    <li>
                    <p><h5>Cookies Policy / Notice Acceptance Cookies</h5></p>
                    <p>Type: Persistent Cookies</p>
                    <p>Administered by: Us</p>
                    <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
                    </li>
                    <li>
                    <p><h5>Functionality Cookies</h5></p>
                    <p>Type: Persistent Cookies</p>
                    <p>Administered by: Us</p>
                    <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
                    </li>
                    <li>
                    <p><h5>Tracking and Performance Cookies</h5></p>
                    <p>Type: Persistent Cookies</p>
                    <p>Administered by: Third-Parties</p>
                    <p>Purpose: These Cookies are used to track information about traffic to the Website and how users use the Website. The information gathered via these Cookies may directly or indirectly identify you as an individual visitor. This is because the information collected is typically linked to a pseudonymous identifier associated with the device you use to access the Website. We may also use these Cookies to test new advertisements, pages, features or new functionality of the Website to see how our users react to them.</p>
                    </li>
                    </ul>
                    <p><h5>Your Choices Regarding Cookies</h5></p>
                    <p>If You prefer to avoid the use of Cookies on the Website, first You must disable the use of Cookies in your browser and then delete the Cookies saved in your browser associated with this website. You may use this option for preventing the use of Cookies at any time.</p>
                    <p>If You do not accept Our Cookies, You may experience some inconvenience in your use of the Website and some features may not function properly.</p>
                    <p>If You'd like to delete Cookies or instruct your web browser to delete or refuse Cookies, please visit the help pages of your web browser.</p>
                    <p>For any other web browser, please visit your web browser's official web pages.</p>
                    <p><h5>Contact Us</h5></p>
                    <p>If you have any questions about this Cookies Policy, You can contact us:</p>
                    <ul>
                    <li>By visiting this page on our website: <a href="https://www.flypandyou.fr/web/src/pages/about.html">flyandyou.com</a></li>
                    <li>By sending us an email: flypproduction485@gmail.com</li>
                    </ul>
                    <p></p>
                    <sub>Date d'entrée en vigueur : le 1 janvier 2022.</sub>

                    <sub>(©2019-2022. ]Documents Legaux-* (Sequiter Inc.]</sub>
                </div>
            </div>

        </div>  
    </form>
    
    <!--<p class="text-center"><a href="/Flyp-artist/Frank_Ocean/index.php">Retour</a></p>-->
</div>

<script>
    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    }

     window.onclick = function(event) {
         if (!event.target.matches('.dropbtn')) {
                 var dropdowns = document.getElementsByClassName("dropdown-content");
                 var i;
                 for (i = 0; i < dropdowns.length; i++) {
                 var openDropdown = dropdowns[i];
                 if (openDropdown.classList.contains('show')) {
                     openDropdown.classList.remove('show');
                 }
             }
         }
     }

    function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show2");
    }

     window.onclick = function(event) {
         if (!event.target.matches('.dropbtn2')) {
                 var dropdowns = document.getElementsByClassName("dropdown-content2");
                 var i;
                 for (i = 0; i < dropdowns.length; i++) {
                 var openDropdown = dropdowns[i];
                 if (openDropdown.classList.contains('show2')) {
                     openDropdown.classList.remove('show2');
                 }
             }
         }
     }
</script>

</body>

</html>




