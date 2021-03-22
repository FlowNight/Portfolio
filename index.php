<?php 

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--===== Fichiers CSS =====-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/osm.css">

    <!--===== BOX ICONS =====-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--===== FONT AWESOME =====-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    <!--===== Lien OpenStreetMap =====-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">

    <title> PHELIPPON Alexis - Portfolio | Accueil </title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo"> Alexis PHELIPPON </a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active"> Accueil </a></li>
                    <li class="nav__item"><a href="#about" class="nav__link"> À Propos </a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link"> Compétences </a></li>
                    <li class="nav__item"><a href="#work" class="nav__link"> Expériences </a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link"> Contact </a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    <main class="l-main">

        <!--===== ACCUEIL =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title"> Salut,<br>Je suis <span class="home__title-color"> Alexis </span><br> <span
                        class="small_txt">
                        Étudiant en IT </span></h1>

                <a href="#contact" class="button"> Contact </a>
            </div>

            <div class="home__social">
                <a href="https://www.facebook.com/Phelippon.Alexis/" target="_blank" class="home__social-icon"><i
                        class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/alex.phlpn/" target="_blank" class="home__social-icon"><i
                        class='bx bxl-instagram'></i></a>
                <a href="https://twitter.com/FlowNigth" target="_blank" class="home__social-icon"><i
                        class='bx bxl-twitter'></i></a>
                <a href="https://www.linkedin.com/in/alexis-phelippon-4b8470179/" target="_blank"
                    class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                <a href="https://github.com/FlowNight" target="_blank" class="home__social-icon"><i
                        class='bx bxl-github'></i></a>
            </div>

            <div hidden class="home__img">
                <img src="assets/img/profil.png" alt="">
            </div>
        </section>

        <hr class="hr">

        <!--===== À PROPOS =====-->
        <section class="about section " id="about">
            <h2 class="section-title"> À Propos </h2>

            <div class="about__container bd-grid">
                <div hidden class="about__img">
                    <img src="assets/img/about.jpg" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle"> Je suis Alexis PHELIPPON </h2>
                    <p class="about__text"> Âgé de 22 ans, je réside dans la région Nantaise. Je suis actuellement
                        étudiant en filière ingénieur informatique dans le centre de formation Nantes Ynov Campus. En
                        parallèle, de mes études je possède également un CDI à temps partiel chez 231 East Street dans
                        la galerie de Beaulieu. J'ai intégré plus particulièrement cette formation, afin d'accéder à un
                        métier dans la sécurité informatique.
                        En effet, j'aspire à titulariser le Master en cybersécurité.
                    </p>
                </div>
            </div>
        </section>

        <hr class="hr">

        <!--===== COMPÉTENCES =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title"> Compétences </h2>
            <!-- Compétences Professionnelles -->
            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle"> Compétences Professionnelles </h2>
                    <p class="skills__text"> Après 5 ans d'expérience professionnelles en entreprise, toutes ces années
                        mon appris à murir dans mon comportement professionnelles et m'ont apporté : </p>
                </div>
                <div>
                    <img src="assets/img/template_1.jpg" alt="" class="skills__img">
                </div>
                <div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='far fa-comments skills__icon'></i>
                            <span class="skills__name"> Le Sens de la communication ; <br> L'Écoute. </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='fas fa-layer-group skills__icon'></i>
                            <span class="skills__name"> La Capacité d'adaptation ; <br> La Polyvalence. </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bx-spreadsheet skills__icon'></i>
                            <span class="skills__name"> Le Sens de l’organisation ; <br> L'Autonomie. </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='fas fa-fist-raised skills__icon'></i>
                            <span class="skills__name"> La Force de proposition / de persuasion. </span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='fas fa-question skills__icon'></i>
                            <span class="skills__name"> Curieux. <br> </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='fas fa-user-tie skills__icon'></i>
                            <span class="skills__name"> Sérieux. </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='fas fa-tools skills__icon'></i>
                            <span class="skills__name"> La Volonté ; <br> La Persévérance. </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class="far fa-lightbulb skills__icon"></i>
                            <span class="skills__name"> Autodidacte </span>
                        </div>
                    </div>
                </div>


                <!-- Compétences Informatiques -->

                <div>
                    <h2 class="skills__subtitle"> Compétences Informatiques </h2>
                    <p class="skills__text"> Je suis passionné d'informatique ! Aujourd'hui, j'ai soif
                        d'apprendre tout les jours de nouvelles technologies et d'acquérir de nouvelles compétences.
                        Afin d'atteindre cette objectif, j'ai intégré une formation d'ingénieur informatique, voici où
                        j'en suis rendu : </p>
                </div>
                <div>
                    <img src="assets/img/template_2.jpg" alt="" class="skills__img">
                </div>
                <div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name"> HTML5 </span>

                        </div>
                        <div class="skills__bar skills__html">

                        </div>
                        <div>
                            <span class="skills__percentage"> 85% </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name"> CSS3 </span>
                        </div>
                        <div class="skills__bar skills__css">

                        </div>
                        <div>
                            <span class="skills__percentage"> 70% </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='fab fa-js-square skills__icon'></i>
                            <span class="skills__name"> JAVASCRIPT </span>
                        </div>
                        <div class="skills__bar skills__js">

                        </div>
                        <div>
                            <span class="skills__percentage"> 50% </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='fab fa-java skills__icon'></i>
                            <span class="skills__name"> JAVA </span>
                        </div>
                        <div class="skills__bar skills__java">
                        </div>
                        <div>
                            <span class="skills__percentage"> 40% </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='fab fa-python skills__icon'></i>
                            <span class="skills__name"> Python </span>
                        </div>
                        <div class="skills__bar skills__python">

                        </div>
                        <div>
                            <span class="skills__percentage"> 25% </span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bx-cloud skills__icon'></i>
                            <span class="skills__name"> Réseaux </span>
                        </div>
                        <div class="skills__bar skills__network">

                        </div>
                        <div>
                            <span class="skills__percentage">65%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-windows skills__icon'></i>
                            <span class="skills__name"> Windows Server </span>
                        </div>
                        <div class="skills__bar skills__ws">
                        </div>
                        <div>
                            <span class="skills__percentage"> 55% </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bx-terminal skills__icon'></i>
                            <span class="skills__name"> Script Shell </span>
                        </div>
                        <div class="skills__bar skills__script__shell">

                        </div>
                        <div>
                            <span class="skills__percentage"> 60% </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='fab fa-linux skills__icon'></i>
                            <span class="skills__name"> Linux </span>
                        </div>
                        <div class="skills__bar skills__tux">
                        </div>
                        <div>
                            <span class="skills__percentage"> 65% </span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='fas fa-hashtag skills__icon'></i>
                            <span class="skills__name"> C#, C ou C++ </span>
                        </div>
                        <div class="skills__bar skills__python">

                        </div>
                        <div>
                            <span class="skills__percentage"> 25% </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="hr">

        <!--===== EXPÉRIENCES =====-->
        <section class="work section" id="work">
            <h2 class="section-title"> Expériences Professionnelles </h2>

            <div class="work__container bd-grid">
                <div class="work__img">
                    <a href="assets/html/work1.html">
                        <img src="assets/img/work1.jpg" alt="work1">
                    </a>
                    <p class="p_work"> McDonald's | <i class="far fa-clock"></i> 11 mois </p>
                </div>
                <div class="work__img">
                    <a href="assets/html/work2.html">
                        <img src="assets/img/work2.jpg" alt="work2">
                    </a>
                    <p class="p_work"> MFC | <i class="far fa-clock"></i> 3 mois </p>
                </div>
                <div class="work__img">
                    <a href="assets/html/work3.html">
                        <img src="assets/img/work3.jpg" alt="work3">
                    </a>
                    <p class="p_work"> MAPAC Panel | <i class="far fa-clock"></i> 6 mois </p>
                </div>
                <div class="work__img">
                    <a href="assets/html/work4.html">
                        <img src="assets/img/work4.jpg" alt="work4">
                    </a>
                    <p class="p_work"> Abri Plus | <i class="far fa-clock"></i> 1 mois</p>
                </div>
                <div class="work__img">
                    <a href="assets/html/work5.html">
                        <img src="assets/img/work5.jpg" alt="work5">
                    </a>
                    <p class="p_work"> CETIH | <i class="far fa-clock"></i> 5 mois</p>
                </div>
                <div class="work__img">
                    <a href="assets/html/work6.html">
                        <img src="assets/img/work6.jpg" alt="work6">
                    </a>
                    <p class="p_work"> Beillevaire | <i class="far fa-clock"></i> 4 mois </p>
                </div>
                <div class="work__img">
                    <a href="assets/html/work7.html">
                        <img src="assets/img/work7.png" alt="Subway">
                    </a>
                    <p class="p_work"> Subway | <i class="far fa-clock"></i> 3 mois</p>
                </div>
                <div class="work__img">
                    <a href="assets/html/work8.html">
                        <img src="assets/img/work8.jpg" alt="231 East Street">
                    </a>
                    <p class="p_work"> 231 East Street |  <i class="far fa-clock"></i> 1 an 4 mois</p>
                </div>
                <div class="work__img">
                    <a href="assets/html/work9.html">
                        <img src="assets/img/work9.jpg" alt="Coming Soon">
                    </a>
                    <p class="p_work"> Cybersécurité | Coming Soon </p>
                </div>
            </div>
        </section>

        <hr class="hr">

        <!--===== CONTACT =====-->

        <section class="contact section" id="contact">

            <h2 class="section-title"> Contactez-moi </h2>

            <div class="contact__container bd-grid">
                <div id="myMap"></div>
                <form action="" class="contact__form">
                    <input type="text" name="name" placeholder="Nom | Prénom" class="contact__input">
                    <input type="mail" name="email" placeholder="Adresse mail" class="contact__input">
                    <textarea name="message" id="" placeholder="Laissez moi un message." cols="0" rows="10"
                        class="contact__input"></textarea>
                    <input type="submit" name="submit" value="Envoyer" class="contact__button button">
                </form>
            </div>

        </section>
    </main>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title"> Alexis PHELIPPON </p>

        <div class="footer__social">
            <a href="https://www.facebook.com/Phelippon.Alexis/" target="_blank" class="home__social-icon"><i
                    class='bx bxl-facebook'></i></a>
            <a href="https://www.instagram.com/alex.phlpn/" target="_blank" class="home__social-icon"><i
                    class='bx bxl-instagram'></i></a>
            <a href="https://twitter.com/FlowNigth" target="_blank" class="home__social-icon"><i
                    class='bx bxl-twitter'></i></a>
            <a href="https://www.linkedin.com/in/alexis-phelippon-4b8470179/" target="_blank"
                class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
            <a href="https://github.com/FlowNight" target="_blank" class="home__social-icon"><i
                    class='bx bxl-github'></i></a>
        </div>
        <p>&#169; Portfolio | 2021 </p>
    </footer>


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== Fichiers JS =====-->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <script src="assets/js/osm.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>

