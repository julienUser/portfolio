<?php require 'include/header.php'; ?>

<body id="page-top" class="index">

    <!-- Navigation -->

    <?php require 'include/nav.php'; ?>

    <!-- Header -->
    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image: url('img/carousel/webdesign2.jpg')"></div>
                <div class="carousel-caption">
                    <h2>Web design</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image: url('img/carousel/communication.jpg')"></div>
                <div class="carousel-caption">
                    <h2>Communication</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image: url('img/carousel/ecommerce.jpg')"></div>
                <div class="carousel-caption">
                    <h2>E-commerce</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>    
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                    <br>                  
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-tv"></i>
                    </span>
                    <h4 class="service-heading">Informatique</h4>
                    <p class="text-muted">Développement WEB, applications, réseaux & connectiques.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                       <i class="fa fa-thumbs-o-up"></i>
                    </span>
                    <h4 class="service-heading">Communication</h4>
                    <p class="text-muted">Conceptions graphiques, PAO, campagnes e-mailing.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-pie-chart"></i>
                    </span>
                    <h4 class="service-heading">Stratégies d'entreprise</h4>
                    <p class="text-muted">Marketing de produit, audit interne, analyses de faisabilité</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">

    <?php require 'include/portfolio_marketing.php'; ?>


        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Informatique - Réalisations EPSI</h2>
                    <h3 class="section-subheading text-muted">Réalisations WEB développées lors de mes deux années d'étude.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/absys.jpg" class="img-responsive" alt="" height="240" width="360">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Symbiose</h4>
                        <p class="text-muted">Stage de première année</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/nft_preview.jpg" class="img-responsive" alt="" height="240" width="360">
                    </a>
                    <div class="portfolio-caption">
                        <h4>NeedForTruck</h4>
                        <p class="text-muted">Stage de seconde année</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/absence.png" class="img-responsive" alt="" height="250" width="360">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Gestion d'absences</h4>
                        <p class="text-muted">Application en C#</p>
                    </div>
                </div>

                <!-- Deuxième ligne de projets  -->

                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/projetphppremiereannee_preview.png" class="img-responsive" alt="" height="240" width="360">
                    </a>
                    <div class="portfolio-caption">
                        <h4>E-commerce</h4>
                        <p class="text-muted">Projet PHP de première année</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/jeu_preview.png" class="img-responsive" alt="" height="240" width="360">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Frogger</h4>
                        <p class="text-muted">Création personnelle</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/siteVOD_preview.png" class="img-responsive" alt="" height="250" width="360">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Site de VOD</h4>
                        <p class="text-muted">Workshop entrée d'école</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">À propos de moi</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">

                        <li>
                            <div class="timeline-image">
                                <img class="img-responsive" src="img/about/epsi.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2014-2016</h4>
                                    <h4 class="subheading">École supérieure</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Cursus d'ingénierie en informatique qui propose un BTS services informatiques aux organisations à la fin de la 2nd année.</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-responsive" src="img/about/efht.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2016-2017</h4>
                                    <h4 class="subheading">Bachelor "Responsable marketing touristique"</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Souhaitant me diversifier dans le domaine du marketing, je me suis lancé dans une troisième année de Bachelor en vue d'obtenir la certification "Responsable marketing touristique".</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="timeline-image">
                                <img class="img-responsive" src="img/about/keyce.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2017-2019</h4>
                                    <h4 class="subheading">MSE Entreprenariat</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Le MSE proposé par l'école Keyce est un équivalent Master, dans le domaine du marketing. Cette formation à bac+5 est l'occasion pour moi de compléter les acquis de ma 3ème année et de justifier d'une double compétence dans le domaine du numérique.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <!-- <div class="container-fluid"> -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Qui suis-je ?</h2>                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-member">
                        <img src="img/team/PHOTO_CV.jpg" class="img-responsive" alt="">
                        <h4>Julien Rassinier</h4>
                        <p class="text-muted">Développeur WEB - Communicant</p>
                        <ul class="list-inline social-buttons">                                                        
                            <li><a href="https://www.facebook.com/julien.rassinier.1"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/preview?locale=fr_FR&trk=prof-0-sb-preview-primary-button"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Actuellement en école d'ingénierie informatique je suis en perpetuelle quête de formations et stages afin de vivre des expériences professionnelles enrichissantes. Je m'oriente actuellement vers un Bachelor3 et espère suivre ce cursus sur un master1 puis 2.</p>
                    </br>
                    <a href="doc/CV_RASSINIER_BAC+4MARKETING_ALTERNANCE.pdf" download class="page-scroll btn btn-xl">Télécharger mon CV</a>
                </div>
            </div>
        <!-- </div> -->
    </section>    
        <section id ="scolaire" style="overflow: hidden;">
            <!-- <div class="container-fluid"> -->
                <div class="row">
                    <div class="section-background col-xs-12 col-sm-6" style="padding-left: 35px;">
                        <h2>
                            Parcours scolaire
                        </h2>
                        <ul class="resume-box">
                            <!-- <li>
                                <div class="year" style="">
                                    <div>
                                        <h4>2010 - 2013</h4>
                                        <span>Baccalauréat STGRH</span>
                                    </div>
                                </div>
                                <div class="box-content" style="">
                                    <div>
                                        <h4>Lycée</h4>
                                        <p>J'ai passé ma première année au lycée Victor Hugo à Lunel et ai fini en section sciences techniques de gestion option communication au lycée Louis-feuillade. Découvert d'un intérêt pour la communication et obtention du baccalauréat technologique en 2013</p>
                                    </div>
                                </div>
                            </li> -->
                            <li>
                                <div class="year" style="">
                                    <div>
                                        <h4>2014 - 2016</h4>
                                        <span>BTS SIO</span>
                                    </div>
                                </div>
                                <div class="box-content" style="">
                                    <div style="position: relative; top: 10%;">
                                        <h4>EPSI - École d'informatique</h4>
                                        <p>École d'informatique orienté développement logiciel (C# MSDN, .NET, Java, Android) en passant en revue les technologies WEB (HTML5, CSS3, Javascript, Jquery, PHP, Symfony2). </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="year" style="">
                                    <div>
                                        <h4>2016 - 2017</h4>
                                        <span>Bachelor "Responsable marketing touristique"</span>
                                    </div>
                                </div>
                                <div class="box-content" style="">
                                    <div style="position: relative; top: 10%;">
                                        <h4>EFHT - École de marketing touristique</h4>
                                        <p>Souhaitant compléter mes compétences en informatique avec le marketing, je me suis orienté vers un cursus marketing touristique dans le but de travailler dans l'hôtellerie de luxe en Occitanie.</p>
                                    </div>
                                </div>
                            </li>
                             <li>
                                <div class="year" style="">
                                    <div>
                                        <h4>2017-2019</h4>
                                        <span>MCE entreprenariat - Master</span>
                                    </div>
                                </div>
                                <div class="box-content" style="">
                                    <div style="position: relative; top: 10%;">
                                        <h4>Keyce - École de marketing</h4>
                                        <p>Afin de consolider mes acquis et de m'ouvrir de nouvelles portes, après une année de marketing touristique, je me suis orienté vers le marketing plus général et les stratégies d'entreprise. Cette double compétence en informatique / communication et en marketing constitue un atout de part ma polyvalence.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="skills-background col-xs-12 col-sm-6">
                        <div class="black-layer">
                            <div class="middle-content">
                                <div class="skill-bar">
                                    <!-- <div style="display:inline;width:100px;height:100px;">
                                        <canvas width="200" height="200" style="width: 100px; height: 100px;"></canvas>
                                        <input type="text" value="0" data-number="90" class="dial" readonly="readonly" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: normal; font-size: 20px; line-height: normal; font-family: 'Open Sans'; text-align: center; color: rgb(255, 255, 255); padding: 0px; -webkit-appearance: none; background: none;">
                                    </div> -->
                                    <!-- <h4>PHP</h4> -->
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
                <div class="row">
                <div id="skills-background-2" class="skills-background col-xs-12 col-sm-6" style="height:580px; background:url('img/chjob.jpg');">
                    <div class="white-layer">
                        <div class="middle-content" style="top:50%;">
                            <div class="skill-bar" style="margin-right: 0px;">
                                <div style="display:inline;width:100px;height:100px;"></div>
                                <!-- <p class="devis-content">Besoin d'un site web ? </p>
                                <a href="">Demander un devis</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-background col-xs-12 col-sm-6" style="padding-right: 20px;">
                        <h2>
                            Expérience
                        </h2>
                        <ul class="resume-box">
                            <li>
                                <div class="year" style="">
                                    <div>
                                        <h4>2016-2017</h4>
                                        <span>Alternance SARL Hôtel de La Plage</span>
                                    </div>
                                </div>
                                <div class="box-content" style="">
                                    <div style="position: relative; top: 10%;">
                                        <h4>La Plage | Le Prose | Atipico</h4>
                                        <p>Cette année en contrat de professionnalisation m'a permis de développer de solides compétences dans les domaines de la communication ainsi que du marketing touristique.</p>
                                        <p><b>Contact responsable : </b><a style="color:blue;" href="mailto:communication@lpgroup-hotel.com">Mlle. PERRET Mathilde</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="year" style="">
                                    <div>
                                        <h4>2015</h4>
                                        <span>Stage</span>
                                    </div>
                                </div>
                                <div class="box-content" style="">
                                    <div style="position: relative; top: 10%;">
                                        <h4>Absys computer</h4>
                                        <p>Développement d'un site web de présentation de l'entreprise pour le Symbiose. Utilisation des langages WEB basiques avec PHP procédural et framework JS Jquery.</p>
                                        <p><b>Contact responsable : </b><a style="color:blue;" href="mailto:communication@lpgroup-hotel.com">Mlle. PERRET Mathilde</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="year" style="">
                                    <div>
                                        <h4>2016</h4>
                                        <span>Stage</span>
                                    </div>
                                </div>
                                <div class="box-content" style="">
                                    <div style="position: relative; top: 10%;">
                                        <h4>Visions nouvelles</h4>
                                        <p>Prise en charge d'un projet client, administration des ressources humaines et matérielles. Consulting et établissement des devis puis développement de l'application web en PHP avec Symfony2.</p>
                                        <p><b>Contact responsable : </b><a style="color:blue;" href="mailto:communication@lpgroup-hotel.com">Mlle. PERRET Mathilde</a></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
        </section>

    <!-- Clients Aside -->
    <!-- <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside> -->
    <?php require 'include/portfolio_modal.php'; ?>

    <?php require 'include/footer.php'; ?>
</body>
</html>
