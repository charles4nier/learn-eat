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
        else{
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
    <link href="css/style-english.css" rel="stylesheet">
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
                    <li class="menu-barre"><a href="#supporting-3" class="a b">French cooking in English</a></li>
                    <li><a href="#supporting-4" class="a b">Contact and more</a></li>
                </ul>
            </div>
        </nav>
        <!-- fin menu  -->
        <div class="container">
            <div class="logo">
                <h1>Learn eat</h1>
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
                    <h1 class="rose titre">Concept</h1>
                    <p>Learn eat offers language & cooking workshops for international people who reside in Paris.</p>
                    <p>For Paris visitors, Learn eat also offers regular cooking classes that are taught in English with an introduction to French language and culture.</p>
                    <p >Working around both French and international recipes, you will practise and improve your speaking skills, acquire vocabulary and connect with other people around food and culture. </p>
                    <p class="learn-more1" id="learn-more1" ><a href="#learn-more1" class="a a-bold">Learn more</a></p>
                </section>
            </div>
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 spyScroll"><a href="#menu" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12"></a></div>
            </div>
        </div>
    </section>

    <!-- Fin Concept  -->

    <!-- Lear-more Concept  -->

    <section class="supporting-1bis">
        <div class="container-fluid container-cross">
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 ">
                    <a class="reduce-1" href="#supporting-1"><img src="links/cross.png" width="15" height="15" class="cross"></a>
                </div>
            </div>
        </div>
        <div class="container">
                <section class="about_marie about_marie_min1">
                    <h3 class="rose titre">About me</h3>
                    <p>My name is Marie Gaillard. I have <strong>dual professional skills</strong> which have proved complementary and led me to imagine and create <strong>Learn eat</strong> quite naturally:</p>
                    <p>I graduated in language studies and taught French and English as a second language in various European countries but my cultural background is primarily that of French gastronomy.</p>
                    <p>Coming from a family of Chefs and truffle wholesalers from the Perigord ( South West region of France), I had the great opportunity to work in professional kitchens and most importantly, I have developped a sincere passion for cooking and food since an early age. </p>
                </section>
                <div class="trait-vertical1">
                </div>
                <section class="about_marie about_marie_min2">
                    <h3 class="rose titre">Language acquisition</h3>
                    <p> My language and cooking workshops are inspired by the action-oriented approach to language learning, as recommanded by the CEFR (Common European Framework of Reference for language learning, teaching and assessment).</p>
                    <p><strong class="">Cooking with languages</strong> : cooking allows active interaction and cooperative learning. Food culture in general enables people to share cultural perspectives and connect.</p>
                    <p><strong class="">Learning through taste</strong> : I am convinced that if students are interested in a specific subject, they will be challenged enough to grow in their learning and maximise their chances of success.</p>
                </section>

                <div class="trait-vertical1">
                </div>
                <section class="about_marie">
                    <h3 class="rose titre">Learning environment</h3>
                    <p>Workshops and classes take place at <strong>my private home</strong>, ideally located in the lively and "Bobo" Parisian 11th district, a 5 minutes walk from Bastille or Voltaire  and a 10 minutes walk from le Marais. </p>
                    <p>I offer classes for reduced sized groups to allow active interaction and a warm learning environment : 4 to 6 people maximum. </p>
                </section>
                <div class="row visible-xs">
                    <div class="text-center spyScroll"><a href="#supporting-1" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12"></a></div>
                </div>
         </div>
    </section>

    <!-- Fin Learn More Concept  -->

    <!-- Cook'eat in French  -->

    <section class="supporting-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-5 img-sm-device">
                    <img src="links/ingredients.jpg" class="img-responsive">
                </div>
                <section class=" col-md-5 classes-main" id="supporting-2">
                    <h1 class="rose titre">Cook’eat in French</h1>
                    <p>My <em>French + cooking workshops </em> are adapted to elementary to intermediate speakers of French as a second language. They are complementary to French classes, previously taken or in progress.</p>
                    <p><span id="learn-more2">In</span> these workshops, students will learn French vocabulary (related to food and cooking but not exclusively), all while cooking food from various regions and learning about French culture and habits in general.</p>
                    <p class="learn-more2"><a href="#learn-more2" class="a a-bold">Learn more</a></p>
                </section>
            </div>
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 spyScroll"><a href="#menu" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12"></a></div>
            </div>
        </div>
    </section>

     <!-- Fin Cook'eat in French  -->

     <!-- Cook'eat in French Learn More  -->

    <section class="supporting-2bis" id="supporting-2bis">
        <div class="container-fluid container-cross">
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1">
                    <a class="reduce-2" href="#supporting-2"><img src="links/cross.png" width="15" height="15" class="cross"></a>
                </div>
            </div>
        </div>
        <div class="container" id="container">
                <section class="french-cooking french-cooking-min-1">
                    <h3 class="rose titre">Content</h3>
                    <p>In my <strong>language + cooking/baking workshops</strong>, you'll acquire cooking and food vocabulary, practise your French, learn cooking or baking techniques, meet people and have fun.</p>
                    <p>You will be working around easy recipes from both traditional French and world cuisine that are adapted to language acquisition.</p>
                </section>
                <div class="trait-vertical2">
                </div>
                <section class="french-cooking french-cooking-min-2">
                    <h3 class="rose titre">Speaking skills</h3>
                    <p>On <strong>the speaking side</strong>, you will be actively involved : you will in turn give instructions, recommandations and get to share your own experience of food and cooking with the rest of the group.</p>
                </section>
        </div>
        <div class="container schedule" id="container-prices">
            <div class="row">
                <section class="col-md-offset-1 col-md-8">
                    <p><strong class="rose">Pricing*: </strong>from 39 to 49 euros. 35 or 45 euros if booked for 2 to 4 people.</p>
                    <p><strong class="rose">Schedule:</strong> Join my <a href="https://www.meetup.com/fr-FR/Meetup-Innovative-Language-Exchange-around-cooking-Paris/" class="rose a" target=_blank>Meetup group </a>to sign up for my workshops or use <span class="spyScroll"><a href="#supporting-4" class="rose a spyScroll">contact form</a></span>.</p>
                    <p><em>*Costs include kitchen material, tastings and drinks. Prices vary depending on ingredients, preparations and number of guests. A minimum of two guests is required to open the workshop. I welcome a maximum of 6 guest per workshop.</em></p>
                </section>
            </div>
            <div class="sm-arrow row visible-xs">
                <div class="text-center spyScroll"><a href="#supporting-1" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12"></a></div>
            </div>
        </div>
    </section>

    <!-- Fin Cook'eat in French Learn More  -->

    <!-- Cook'eat in English -->

    <section class="supporting-3">
        <div class="container-fluid">
            <div class="row">
                <section class="col-md-offset-1 col-md-5 classes-main" id="supporting-3">
                    <h1 class="rose titre">French cooking in English</h1>
                    <p>For International people who are visiting Paris and do not speak French at all, I offer French cooking classes that are taught in <span id="learn-more3">English</span> with an introduction to French language and culture.</p>
                    <p>As I am originally from the Perigord, my cooking classes are inspired by French traditional and regional « Cuisine du Sud Ouest ». In my baking classes, you will learn how to make choux, Macarons, entremets…</p>
                    <p class="learn-more3"><a href="#learn-more3" class="a a-bold">Learn more</a></p>
                </section>
                <div class="col-md-5 img-sm-device">
                    <img src="links/truffe.jpg" class="img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 spyScroll"><a class="a2" href="#menu"><img src="links/arrow.png" class="arrow" width="12" height="12"></a></div>
            </div>
        </div>
    </section>

    <!-- Fin Cook'eat in English -->

    <!-- Cook'eat in English Learn More -->

    <section class="supporting-3bis" id="supporting-3bis">
        <div class="container-fluid container-cross">
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 ">
                    <a class="reduce-3" href="#supporting-3"><img src="links/cross.png" width="15" height="15" class="cross"></a>
                </div>
            </div>
        </div>
        <div class="container" id="container">
                <section class="french-cooking french-cooking-min-3 ">
                    <h3 class="titre rose">French cooking classes</h3>
                    <p>In my <strong>kitchen</strong>, you will cook and eat traditional savoury recipes from my home region such as : parmentier de canard, chou farci, magret aux cèpes...</p>
                    <p>In my baking worksops you will learn how to make traditional « tarte Quercynoise », choux à la crème, macarons, crêpes…etc.</p>
                    <p>More than just a simple cooking class, we will take time to discuss regions and terroirs from where these specialities are from. </p>
                </section>
                <div class="trait-vertical3">
                </div>
                <section class="french-cooking french-cooking-min-4">
                    <h3 class="titre rose">Cooking with truffles</h3>
                    <p>For passionates of the so-called « Black Diamond » I offer a very special workshop in which I explain this wonderful product (harvest, varieies…) and I do cooking « demos ».</p>
                    <p>Truffles are provided by Maison Henras 1820, my family business who provide truffles for some of the greatest gastronomic restaurants in Paris.</p>
                </section>
        </div>
        <div class="container schedule" id="container-prices">
            <div class="row">
                <div class="col-md-offset-1 col-md-8">
                    <p><strong class="rose">Prices: </strong>from 55 to 85 euros*</p>
                    <p class="spyScroll"><a href="#supporting-4" class="rose a">Reservations</a></p>
                    <p><em>*Costs include kitchen material, ingredients, tastings and some wine. Prices vary depending on menus and ingredients.</em></p>
                </div>
            </div>
            <div class="sm-arrow row visible-xs">
                <div class="text-center spyScroll"><a href="#supporting-3" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12"></a></div>
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
                        <div class="col-md-offset-2 col-md-1 hidden-xs hidden-sm"><img src="links/enveloppe.png" width="50" height="50"></div>
                        <aside class="col-md-offset-1 col-md-7">
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
                        </aside>
                    </div>

                </div>
                <div class="col-md-6 img-sm-device hidden-sm">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-1"><img src="links/i.png" width="50" height="50"></div>
                        <aside class="col-md-offset-1 col-md-7">
                            <h1 class="rose titre">Practical Information</h1>
                            <div class="row">
                                <div class=" col-md-9">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21001.394648470992!2d2.3738840000000003!3d48.854886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e672076825d623%3A0x21f73fa9304aa1e8!2s4+Cit%C3%A9+de+la+Roquette%2C+75011+Paris%2C+France!5e0!3m2!1sfr!2sfr!4v1481652923957" width="320" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-offset-10 col-xs-1 col-md-offset-11 col-md-1 spyScroll"><a href="#menu" class="a2"><img src="links/arrow.png" class="arrow" width="12" height="12"></a></div>
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
