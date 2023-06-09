<?php


require('src/db-functions.php');
require('src/functions.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <script src="https://kit.fontawesome.com/de7e6c09fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>LandingPage</title>
</head>

<body>

    <div class="background-color">
        <header>

            <!-- NARBAR -->

            <div class="header-container">
                <a href="#" class="kucra">Kucra</a>
                <nav>
                    <ul class="menu">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#features">FEATURES</a></li>
                        <li><a href="#client">CLIENT</a></li>
                        <li><a href="#pricing">PRICING</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#blog">BLOG</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </nav>
                <div class="social-icons">
                    <a href="#">
                        <svg width="22" height="22">
                            <use xlink:href="#facebook" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="22" height="22">
                            <use xlink:href="#twitter" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="22" height="22">
                            <use xlink:href="#instagram" />
                        </svg>
                    </a>
                </div>
            </div>

        </header>

        <!-- PREMIERE SECTION -->

        <section id="home" class="premiereSection">
            <div class="accueil">
                <div class="newsletter">
                    <h1>We are StartUp Creative Kucra Agency</h1>
                    <p>Carefully crafted analysing the needs of different industries and the design achieves a great
                        balance
                        between purpose & presentation</p>
                        <form action="src/db-functions.php" method="POST" enctype="multipart/form-data">
                        <div class="subscribe">
                            <input placeholder="Enter your email" type="email" name="email" id="email" autocomplete="off" required>
                            
                            <div class="button">
                                <input type="submit" name="subscribe" id="submit" Value="SUBSCRIBE">
                            </div>

                        </div>
                    </form>
                </div>
                <div class="illustration">
                    <img src="img/illustration.svg" alt="Illustration d'un écran d'ordinateur avec un chat au dessus" class="">
                </div>
            </div>
        </section>

    </div>

    <!-- Products feature -->

    <section id="features" class="section-card">

        <div class="text">
            <h1>Products Features</h1>
            <p>It is a long established fact that a reader will be of a page when<br>established fact looking at its
                layout.</p>
        </div>

        <div class="card-container">
            <div class="card">
                <div class="cardimg">
                    <i class="fa-sharp fa-solid fa-globe"></i>
                </div>
                <div class="card-text">
                    <h1>Digital Design</h1>
                    <p>Some quick example text to build on the card title and make up the bulk of the card the platform.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="cardimg">
                    <i class="fa-solid fa-brush"></i>
                </div>
                <div class="card-text">
                    <h1>Unlimited Colors</h1>
                    <p>Credibly brand stanaads compliant user exteible services College Anibh ocean euismod tincidunt
                        laoreet.</p>
                </div>
            </div>

            <div class="card">
                <div class="cardimg">
                    <i class="fa-solid fa-chess"></i>
                </div>
                <div class="card-text">
                    <h1>Strategy Solutions</h1>
                    <p>Separated they live in Bookmarks grove right at the coast of the Semantics, a large ocean
                        regelialia.</p>
                </div>
            </div>
        </div>

        <div class="text text-container">
            <h1>How It Works ?</h1>
            <p>It is a long established fact that a reader will be of a page when<br>established fact looking at its
                layout.</p>
        </div>

    </section>

    <!-- EQUIPE -->

    <section id="client" class="equipe">

        <div class="text">
            <h1>We'r dynamic team of talented<br>people of innovative & marketing<br>expert</h1>
            <p>To achieve this, it would be necessary to have uniform grammar,<br> pronuncation and more common words.
                If several languages of the<br>resulting language.</p>
        </div>

        <div class="card-container">

            <div class="card-person">
                <div class="cardstat">
                    <h1>1499+</h1>
                    <p>Complete Projects</p>
                </div>
                <figure class="person-img">
                    <img src="img/person1.png" alt="">
                    <div class="social">
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-skype"></i>
                        </a>
                    </div>
                </figure>
                <div class="nom">
                    <h2>Anna G. Wilhite</h2>
                    <p>CEO/Founder</p>
                </div>
            </div>

            <div class="card-person">
                <div class="cardstat">
                    <h1>1080K+</h1>
                    <p>Satisfed Clients</p>
                </div>
                <figure class="person-img">
                    <img src="img/person2.png" alt="">
                    <div class="social">
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-skype"></i>
                        </a>
                    </div>
                </figure>
                <div class="nom">
                    <h2>William S. Blay</h2>
                    <p>CTO/Co-Founder</p>
                </div>
            </div>

            <div class="card-person">
                <div class="cardstat">
                    <h1>608</h1>
                    <p>Team Members</p>
                </div>
                <figure class="person-img">
                    <img src="img/person3.png" alt="">
                    <div class="social">
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-skype"></i>
                        </a>
                    </div>
                </figure>
                <div class="nom">
                    <h2>Maria B. Morales</h2>
                    <p>Web Designer</p>
                </div>
            </div>

            <div class="card-person">
                <div class="cardstat">
                    <h1>252</h1>
                    <p>Employee</p>
                </div>
                <figure class="person-img">
                    <img src="img/person4.png" alt="">
                    <div class="social">
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-skype"></i>
                        </a>
                    </div>
                </figure>
                <div class="nom">
                    <h2>Luke L. Johnston</h2>
                    <p>Web Developper</p>
                </div>
            </div>

        </div>

    </section>

    <!-- PARALLAX -->

    <section class="parallax">

        <div class="parallax-container">

            <div class="text2">
                <h1>Let's get started with Kucra</h1>
                <p>They are a good way to get you started if you want to build something similar or use from existing
                    apps which apps which will reduce the corst,<br>efforts and time of the developpers.</p>
            </div>
            <form action="">
                <button class="started">
                    Get Started
                </button>
            </form>
        </div>

        <!-- BLOG -->

        <div id="blog" class="section-blog">

            <div class="blog-text">
                <h1>Our Blod</h1>
                <p>It is a long established fact that a reader will be of a page when established fact looking at its
                    layout.</p>
            </div>

            <div class="cardblog-container">
                <div class="card-blog">
                    <div class="card-header">
                        <div class="info-card">
                            <i class="fa-regular fa-user">
                                <p1>Calvin Carlo</p1>
                            </i>
                            <i class="fa-regular fa-clock fa-xs">
                                <p2>20th March 2021</p2>
                            </i>
                        </div>
                        <img src="img/blog1.png" alt="">
                    </div>
                    <div class="cardblog-text">
                        <h1>Doing a cross country road trip</h1>
                        <p>We craft digital, graphic and dimensional<br>thinking, to create category leading brand.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>

                <div class="card-blog">
                    <div class="card-header">
                        <div class="info-card">
                            <i class="fa-regular fa-user">
                                <p1>Ruben Reed</p1>
                            </i>
                            <i class="fa-regular fa-clock fa-xs">
                                <p2>01th July 2021</p2>
                            </i>
                        </div>
                        <img src="img/blog2.png" alt="">
                    </div>
                    <div class="cardblog-text">
                        <h1>New exhiition at our Museum</h1>
                        <p>Even the all-powerful Pointing has no control<br>about the blind almost unorthograpic.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>

                <div class="card-blog">
                    <div class="card-header">
                        <div class="info-card">
                            <i class="fa-regular fa-user">
                                <p1>Theresa Sinclair</p1>
                            </i>
                            <i class="fa-regular fa-clock fa-xs">
                                <p2>25th July 2021</p2>
                            </i>
                        </div>
                        <img src="img/blog3.png" alt="">
                    </div>
                    <div class="cardblog-text">
                        <h1>Design your apps in your own way</h1>
                        <p>Pityful a rethoric question ran over her cheek,<br>then she continued her way.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>

            <div class="blog-text text-container">
                <h1>How It Works ?</h1>
                <p>It is a long established fact that a reader will be of a page when established fact looking at its
                    layout.</p>
            </div>

        </div>

    </section>

    <!-- PRICING -->

    <section id="pricing" class="pricing">
        <div class="header-pricing">
            <div class="h-pricing-card">
                <h2>We are digital creative Landing Page</h2>
                <p>The difference between a successful person and others is not a lack of strength, not a lack of
                    knowledge, but rather a lack of will. Composed in a pseudo-Latin language which more or less
                    pseudo-Latin language corresponds.</p>
                <div class="h-pricing-stat">
                    <div>
                        <h3>4957</h3>
                        <p>Happy User</p>
                    </div>
                    <div>
                        <h3>1599</h3>
                        <p>Complete Project</p>
                    </div>
                </div>
                <button>Learn More</button>
            </div>
            <img src="img/creativity.png" alt="">
        </div>

        <div class="container">
            <div class="text-pricing" id="ourPricing">
                <h2>Our Pricing</h2>
                <p>It is a long established fact that a reader will be of a page when established fact looking at its
                    layout.</p>
            </div>

            <div class="cards-pricing">

                <?php

                foreach (getPricings() as $pricing) { ?>
                    <form action="src/db-functions.php?id=<?= $pricing['id_pricing'] ?>" method="POST" enctype="multipart/form-data">
                        <?php if ($pricing['sale'] > 0) { ?>
                            <div class="promo">
                                <div class="card-p">
                                    <div class="sale">
                                        <p><?= $pricing['sale'] ?>% sale</p>
                                    </div> <?php
                                        } else { ?> <div class="card-p"> <?php } ?>
                                    <div class="card-p-header">
                                        <h2><?= $pricing['name'] ?></h2>
                                        <p><sup>$</sup><?= $pricing['price'] ?><span>/month</span></p>
                                    </div>
                                    <div class="card-center">
                                        <ul>
                                            <li>
                                                <p><i class="fa-sharp fa-regular fa-circle-check"></i> Bandwidth</p>
                                                <p><?= convert($pricing['bandwidth']) ?></p>
                                            </li>
                                            <li>
                                                <p><i class="fa-sharp fa-regular fa-circle-check"></i> Onlinespace</p>
                                                <p><?= convert($pricing['onlineSpace']) ?></p>
                                            </li>
                                            <li>
                                                <p><?= getIconeCheck($pricing['support']) ?> Support:No</p>
                                                <p><?= getYesNoBool($pricing['support']) ?></p>
                                            </li>
                                            <li>
                                                <p><i class="fa-sharp fa-regular fa-circle-check"></i> Domain</p>
                                                <p><?= $pricing['domain'] ?></p>
                                            </li>
                                            <li>
                                                <p><?= getIconeCheck($pricing['hiddenFees']) ?> Hidden Fees</p>
                                                <p><?= getYesNoBool($pricing['hiddenFees']) ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="button">
                                        <input type="submit" name="join" id="submit" Value="Join Now">
                                    </div>
                                    </div>

                                    <?php if ($pricing['sale'] > 0) { ?>
                                </div>
                            <?php } ?>
                    </form>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- FOOTER -->

    <footer id="contact">
        <div class="social-footer">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
        </div>

        <div class="links">
            <a href="#">Terms & Condition</a>
            <span>|</span>
            <a href="#">Privacy Policy</a>
            <span>|</span>
            <a href="#">Contact Us</a>
        </div>

        <div class="credits">
            <p>2022 &copy; Kucra - Landing Page Template by Pichforest</p>
        </div>

    </footer>

    <!-- SVG -->

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="facebook" viewBox="0 0 32 32">
            <path d="M23.446 18l0.889-5.791h-5.557v-3.758c0-1.584 0.776-3.129 3.265-3.129h2.526v-4.93c0 0-2.292-0.391-4.484-0.391-4.576 0-7.567 2.774-7.567 7.795v4.414h-5.087v5.791h5.087v14h6.26v-14z" />
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </symbol>
        <symbol id="twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
        </symbol>
    </svg>

    <!-- Script -->

    <a href="#" class="scroll-to-top"><i class="fa-solid fa-arrow-up"></i></a>
    <script src="js/script.js"></script>

    <?php 
    if (isset($_SESSION['Message'])) { ?>
         <div id="alert"><?= $_SESSION['Message'] ?></div>
        <script>tempAlert(1000)</script>
<?php   unset($_SESSION['Message']);
    } ?>

</body>

</html>