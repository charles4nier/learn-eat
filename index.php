<?php
if(!empty($_POST)){
    extract($_POST);
    $valid = true;
    if(empty($name)){
        $valid=false;
        $erreurnom="Please fill the name field";
    }
    if(!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i",$email)){
        $valid=false;
        $erreuremail="invalid email";
    }
    if(empty($email)){
        $valid=false;
        $erreuremail="Please fill the email field";
    }
    if(empty($message)){
        $valid=false;
        $erreurmessage="Please fill the message field";
    }
    if($valid){
        $to="marie@learn-eat.fr";
        $name=stripslashes($name);
        $sujet= $name."a contacté Learn Eat";
        $header="From: $email \n";
        $header .="Reply-to: $email";
        $message=stripslashes($message);
        if(mail($to,$sujet,$message,$header)){
            $erreur="Thank you, your message has been sent";
            unset($name);
            unset($email);
            unset($message);
        }
        else
        {
            $erreur="An error occured and your email has not been sent";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Learn eat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="links/cook.png" />
    <link href="css/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Si tu veux modifier le document, télécharges Bracket.
    Pour modifier le texte, tu peux toucher à ce qui est écrit en noir.
    Pour modifier une photo : tu vas chercher une balise <img> (avec ctrl + f). Tu modifies la source du fichier (sa provenance) : <img src:links/taphoto.jpg>. Tu donneras le nom que tu veux à ta photo en un seul mot.-->

    <!-- Page d'accueil  -->

    <header class="main">
        <!-- Menu  -->
        <nav class="menu spyScroll" id="menu">
                <div class="button-menu menu-small">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
             <div class="testons">
                <ul class="menu list-menu">
                    <li class="menu-barre"><a href="#supporting-1" class="a b">Concept</a></li>
                    <li class="menu-barre"><a href="#supporting-2" class="a b">Cook’eat in French</a></li>
                    <li class="menu-barre"><a href="#supporting-3" class="a b">Cook'eat in English</a></li>
                    <li><a href="#supporting-4" class="a b">Contact and more</a></li>
                </ul>
            </div>
        </nav>
        <!-- fin menu  -->
        <div class="container">
            <div class="logo">
                <h1>Learn eat </h1>
                <h1 class="rose titre">Cooking with languages</h1>
            </div>
        </div>
    </header>

    <!-- Fin Page d'accueil  -->

    <!-- Concept  -->

    <section class="supporting-1" id="supporting-1">
        <div class="container-fluid">
            <div class="row">
                <section class="col-md-offset-1 col-md-10 classes-main">
                    <h1 class="rose titre">Langues, cuisine et gastronomie</h1>
                    <p> Learn eat propose des ateliers cuisine et culture de la gastronomie adaptés à l'apprentissage du Français langue étrangère (FLE) et de l'anglais seconde langue (ESL).</p>
                    <p>Les ateliers sont dispensés par une enseignante de langues, titulaire d'une certification professionnelle en cuisine: Marie. </p>
                    <p>Les ateliers "Cook'eat in French" s'adressent à tous les apprenants de FLE ayant acquis de bonnes bases et souhaitant se perfectionner au travers d'ateliers culinaires et autour de la culture de la gastronomie.</p>
                    <p>Les ateliers "cook'eat in English" s'adressent aux grands enfants et jeunes adolescents en cours d'apprentissage de l'anglais à l'école élémentaire et au collège, qui ont un niveau A1/A2 du CECRL.
                    <p class="learn-more1" id="learn-more1" ><a href="#learn-more1" class="a a-bold">En savoir plus</a></p>
                </section>
            </div>
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 spyScroll"><a href="#menu" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12" alt="une icone fleche rose"></a></div>
            </div>
        </div>
    </section>

    <!-- Fin Concept  -->

    <!-- Lear-more Concept  -->

    <section class="supporting-1bis">
        <div class="container-fluid container-cross">
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 ">
                    <a class="reduce-1" href="#supporting-1"><img src="links/cross.png" width="15" height="15" class="cross" alt="une petite croix noire"></a>
                </div>
            </div>
        </div>
        <div class="container">
                <section class="about_marie about_marie_min1">
                    <h3 class="rose titre">Marie, Créatrice de Learn eat</h3>
                    <p>Diplômée en Langues et Civilisation Anglaise, mention complémentaire FLE et du Cambridge Proficiency in English, j'ai enseigné l'anglais et le français langue étrangère pendant plusieurs années en France, et à l'international où j'ai vécu pendant 7 ans.</p>
                    <p>Issue d'une famille de restaurateurs passionnés, j'ai toujours évolué en parallèlle de ma carrière dans l'univers de la cuisine et de la gastronomie. En effet, j'ai pu travailler dans des cuisines professionnelles tout au long de mes études linguistiques en France et en Angleterre. Pour créer Learn eat et améliorer mes compétences en cuisine, j'ai préparé et obtenu le C.A.P cuisine.</p>
                </section>
                <div class="trait-vertical1">
                </div>
                <section class="about_marie about_marie_min2">
                    <h3 class="rose titre">Apprendre par l'action</h3>
                    <p>Mes ateliers langue et cuisine s'inspirent de l'approche actionnelle en  didactique des langues, méthode recommandée par le CECRL (Cadre Européen Commun de Références pour les Langues.</p>
                    <p><strong class="">Langue et cuisine</strong> : la cuisine est un outil idéal pour parfaire l'apprentissage d'une langue: elle permet aux apprenants d'être en constante interaction et favorise un apprentissage coopératif. Elle encourage les échanges et fait travailler des compétences linguistiques clés : donner, recevoir des instructions, poser des questions, parler de soi, de ses goûts, s'exprimer au passé...</p>
                </section>
                <div class="trait-vertical1">
                </div>
                <section class="about_marie">
                    <h3 class="rose titre"> Environnement convivial</h3>
                    <p>Les ateliers ont lieu dans un appartement spacieux situé dans le quartier de Bastille, à proximité des métros Bastille, Voltaire et Bréguet Sabin.</p>
                    <p>Les effectifs sont réduits pour plus de convivialité et d'interaction: 4 à 6 personnes maximum.</p>
                    <p> Les ateliers enfants et adolescents sont encadrés par Marie assistée d'une intervenante anglophone native: soit 1 adulte pour 3 enfants. </p>
                </section>
                <div class="row visible-xs">
                    <div class="text-center spyScroll"><a href="#supporting-1" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12" alt="une icone fleche rose"></a></div>
                </div>
         </div>
    </section>

    <!-- Fin Learn More Concept  -->

    <!-- Cook'eat in French  -->

    <section class="supporting-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-5 img-sm-device">
                    <img src="links/ingredients.jpg" class="img-responsive" alt="une planche en bois avec une poele en fonte et divers ingrédients de cuisine">
                </div>
                <section class=" col-md-5 classes-main" id="supporting-2">
                    <h1 class="rose titre">Cook’eat in French</h1>
                    <p>Ces ateliers s'adaptent à des apprenants de Français langue étrangère ayant acquis des bases de conversation.</p>
                    <p>Chaque semaine, vous réaliserez une ou plusieurs recettes de Chefs Français contemporains qui cuisinent selon tous les styles de cuisine représentés dans le répertoire de la cuisine française: traditionnel,  régional, "bistronomique", "Fusion"...</p>
                    <p>Les ateliers durent 2H30 et sont composés de trois parties: cuisine (1H30), vocabulaire et culture de la gastronomie (30 min), dégustation (30 min) . </p>
                    <p><span id="learn-more2"> </span>Le vocabulaire culinaire et technique est traduit en anglais.</p>
                    <p class="learn-more2"><a href="#learn-more2" class="a a-bold">En savoir plus</a></p>
                </section>
            </div>
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 spyScroll"><a href="#menu" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12" alt="une icone fleche rose"></a></div>
            </div>
        </div>
    </section>

     <!-- Fin Cook'eat in French  -->

     <!-- Cook'eat in French Learn More  -->

    <section class="supporting-2bis" id="supporting-2bis">
        <div class="container-fluid container-cross">
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1">
                    <a class="reduce-2" href="#supporting-2"><img src="links/cross.png" width="15" height="15" class="cross" alt="une petite croix noire"></a>
                </div>
            </div>
        </div>
        <div class="container" id="container">
                <section class="french-cooking french-cooking-min-1">
                    <h3 class="rose titre">Contenu</h3>
                    <p>Lors de ces <strong> ateliers langue et cuisine française</strong>, vous pourrez acquérir du vocabulaire, pratiquer votre expression orale, découvrir des techniques culinaires et la culture de la gastronomie française.</p>
                </section>
                <div class="trait-vertical2">
                </div>
                <section class="french-cooking french-cooking-min-2">
                    <h3 class="rose titre">Expression orale</h3>
                    <p>D'un point de vue <strong>expression orale</strong>, vous serez activement impliqué car vous serez amené à animer vous-même l'atelier en donnant des instructions aux autres ou en leur donnant des conseils. Vous serez également encouragés à partager vos propres connaissances culinaires avec le reste du groupe.</p>
                </section>
        </div>
        <div class="container schedule" id="container-prices">
            <div class="row">
                <section class="col-md-offset-1 col-md-8">
                    <p><strong class="rose">Tarifs*: </strong> De 40 euros à 50 euros selon les ateliers et le coût des ingrédients.
                    Réductions avec une "carte d'abonnement". </p>
                    <p><strong class="rose">Planning: tous les vendredis matins en dehors des vacances scolaires </strong> Rejoignez mon <a href="https://www.meetup.com/fr-FR/Meetup-Innovative-Language-Exchange-around-cooking-Paris/" class="rose a" target=_blank>groupe Meetup </a>pour vous inscrire ou utilisez le <span class="spyScroll"><a href="#supporting-4" class="rose a spyScroll">formulaire de contact</a></span>.</p>
                    <p><em>*Les tarifs incluent les dégustations, les boissons. Un minimum de deux apprenants est requis pour ouvrir l'atelier qui est limité à 6 personnes maximum.</em></p>
                </section>
            </div>
            <div class="sm-arrow row visible-xs">
                <div class="text-center spyScroll"><a href="#supporting-1" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12" alt="une icone fleche rose"></a></div>
            </div>
        </div>
    </section>

    <!-- Fin Cook'eat in French Learn More  -->

    <!-- Cook'eat in English -->

    <section class="supporting-3">
        <div class="container-fluid">
            <div class="row">
                <section class="col-md-offset-1 col-md-5 classes-main" id="supporting-3">
                    <h1 class="rose titre"> Cook'eat in English  </h1>
                    <p>Pour les enfants et les grands adolescents , Learn eat propose des ateliers pâtisserie en <span id="learn-more3">anglais</span>.</p>
                    <p>Ces ateliers s'adressent aux enfants agés de 8 à 13 ans qui apprennent l'anglais à l'école élémentaire et au collège.</p>
                    <p> Les enfants sont encadrés par Marie, assistée d'une intervenante anglophone native. L'atelier est animé en anglais excepté lorsque le recours à la langue française est absolument nécessaire.</p>
                    <p> Les enfants apprennent à réaliser des desserts traditionnels anglais et américains et nous abordons ensemble la culture anglo-saxonne sous l'angle de sa gastronomie.</p>
                    <p class="learn-more3"><a href="#learn-more3" class="a a-bold">En savoir plus</a></p>
                </section>
                <div class="col-md-5 img-sm-device">
                    <img src="links/scones%20.jpg" class="img-responsive" alt="une assiette de scones">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 spyScroll"><a class="a2" href="#menu"><img src="links/arrow.png" class="arrow" width="12" height="12" alt="une icone fleche rose"></a></div>
            </div>
        </div>
    </section>

    <!-- Fin Cook'eat in English -->

    <!-- Cook'eat in English Learn More -->

    <section class="supporting-3bis" id="supporting-3bis">
        <div class="container-fluid container-cross">
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 ">
                    <a class="reduce-3" href="#supporting-3"><img src="links/cross.png" width="15" height="15" class="cross" alt="une petite croix noire"></a>
                </div>
            </div>
        </div>
        <div class="container" id="container">
                <section class="french-cooking french-cooking-min-3 ">
                    <h3 class="titre rose">Goûters British et US</h3>
                    <p> Lors de chaque atelier, nous travaillons sur des recettes anglaises et américaines simples à réaliser. Les enfants apprennent du vocabulaire culinaire en anglais et pratiquent les compétences linguistiques clés travaillées à l'école élémentaire au cycle 3 ou en 6° et 5° au collège: parler de soi, de ses goûts, apprendre à poser des questions en anglais, comprendre des instructions, s'exprimer au présent et au passé (pour les plus grands).</p>
                </section>
                <div class="trait-vertical3">
                </div>
                <section class="french-cooking french-cooking-min-4">
                    <h3 class="titre rose">Organisation et encadrement</h3>
                    <p>Les enfants sont au nombre de 6 par atelier, et nous sommes deux à les encadrer : je suis assistée par Bella, une intervenante américaine dynamique, expérimentée dans l'animation et l'encadrement d'enfants.</p>
                    <p>Les enfants sont répartis en groupe par âge: 8/10 ans (les Samedi à domicile) et 11/13 ans. (le Mercredi après-midi chez Marie) </p>
                </section>
        </div>
        <div class="container schedule" id="container-prices">
            <div class="row">
                <div class="col-md-offset-1 col-md-8">
                    <p><strong class="rose">Tarif*: </strong> 30 euros l'atelier de 2H.</p>
                    <p><strong class="rose">Planning: le mercredi ou le samedi (à domicile) <span class="spyScroll"><a href="#supporting-4" class="rose a spyScroll">Nous contacter</a></span>.</p>
                    <p><em>*Le tarif inclue les ustensiles de cuisine, les ingrédients et le prêt d'un tablier.</em></p>
                </div>
            </div>
            <div class="sm-arrow row visible-xs">
                <div class="text-center spyScroll"><a href="#supporting-3" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12" alt="une icone fleche rose"></a></div>
            </div>
        </div>
    </section>

     <!-- Fin Cook'eat in English Learn More -->

     <!-- Contact -->

     <section class="supporting-4" id="supporting-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-1 hidden-xs hidden-sm"><img src="links/enveloppe.png" width="50" height="50" alt="une enveloppe rose"></div>
                        <section class="col-md-offset-1 col-md-7">
                            <h1 class="rose titre">Contact form</h1>
                            <div class="row">
                                <div class=" col-xs-offset-2 col-xs-8 col-md-offset-0 col-md-9">
                                    <form action="index.php#supporting-4" method="post">
                                        <input type="text" name="name" placeholder="Your name" class="form-control" value="<?php if(isset($name)) echo $name; ?>"  required>
                                        <span class="error-message"><?php if(isset($erreurnom)) echo $erreurnom; ?></span>

                                        <input type="text" name="email" placeholder="Your email" class="form-control" value="<?php if(isset($email)) echo $email; ?>" required>
                                        <span class="error-message"><?php if(isset($erreuremail)) echo $erreuremail; ?></span>

                                        <textarea id="zone_texte" name="message" placeholder="Your message" class="form-control" rows="8" required><?php if(isset($message)) echo $message; ?></textarea>
                                        <span class="error-message"><?php if(isset($erreurmessage)) echo $erreurmessage; ?></span>

                                        <button class="btn pull-right" type="submit">Send</button>
                                        <?php
                                            if(isset($erreur)){
                                                echo "<p class=\"error-message\">$erreur</p>"; }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
                <div class="col-md-6 img-sm-device hidden-sm">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-1"><img src="links/i.png" width="50" height="50" alt="un i rose"></div>
                        <section class="col-md-offset-1 col-md-7">
                            <h1 class="rose titre">Practical Information</h1>
                            <div class="row">
                                <div class=" col-md-9">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21001.394648470992!2d2.3738840000000003!3d48.854886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e672076825d623%3A0x21f73fa9304aa1e8!2s4+Cit%C3%A9+de+la+Roquette%2C+75011+Paris%2C+France!5e0!3m2!1sfr!2sfr!4v1481652923957" width="320" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 spyScroll"><a href="#menu" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12" alt="une icone fleche rose"></a></div>
            </div>
        </div>
    </section>

     <!-- FinCook'eat in English Learn More -->

     <!-- Mentions -->

    <footer class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-offset-1 col-md-5 text-center">
                <a class="a2" href="https://www.facebook.com/learneatparis/?fref=ts"  target=_blank class="icon-footer"><img src="links/facebook.png" width="30" height="30" class="icon-footer"></a>
                <a class="a2" href="https://twitter.com/learneatparis" target=_blank class="icon-footer"><img src="links/twitter.png"  width="30" height="30" class="icon-footer"></a>
                <a class="a2" href="https://www.meetup.com/fr-FR/Meetup-Innovative-Language-Exchange-around-cooking-Paris/" target=_blank class="icon-footer"><img src="links/Meet.png" width="30" height="30" class="icon-footer"></a>
            </div>
            <div class="col-sm-12 col-md-5 text-center">
                <p class="mentions">Mentions légales : Marie Gaillard, 4 Cité de la Roquette, 75011 Paris - France - Tél.: +336 49 47 63 11 - Contact : <a href="mailto:marie@learn-eat.fr" class="a">marie@learn-eat.fr</a> - Site hébergé par OVH - 2 rue Kellermann 59100 Roubaix - FRANCE</p>
            </div>
        </div>
    </footer>

     <!-- Fin mentions -->

     <!-- Ne pas toucher -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
