<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">

    <!-- slink -->
    <link rel="stylesheet" href="public/slick/slick.css">
    <link rel="stylesheet" href="public/slick/slick-theme.css">



    <!--css-->
    <link rel="stylesheet" href="public/css/desing.css">

    <!--responsivel-->
    <link rel="stylesheet" href="public/css/responsivel-site.css">

    <title>DESIGN</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="home-tamanho">
                <div class="home">
                    <div class="logo">
                        <a href="index.php"><img src="public/img/logopreto.png" alt="logo-preto"></a>
                    </div>
                    <div class="nav">
                        <div class="button">
                            <a href="">CLIENT LOGIN</a>
                        </div>
                        <div class="nav-ul">
                            <nav>
                                <ul>
                                    <li><a href="design.php">DESIGN</a></li>
                                    <li><a href="develop.php">DEVELOP</a></li>
                                    <li><a href="manage.php">MANAGE</a></li>
                                    <li><a href="properties.php">PROPERTIES</a></li>
                                    <li><a href="about.php">ABOUT</a></li>
                                    <li><a href="contact.php">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
               <!-- menu mobile -->
              <?php
                    include('components/menu-mobile.php');
              ?>
              <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
            </div>


        </div>

    </header>

    <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    <main>

        <div class="design-box">
            <div class="desing-tamanho">
                <div class="part1">
                    <div class="part1-img">
                        <img src="public/img/foto-design.png" alt="foto-design">
                    </div>
                    <div class="part1-items">
                        <div class="parte1-h1">
                            <h1>DESIGN</h1>
                        </div>
                        <div class="parte1-p">
                            <p>From planning to permits, our team helps you navigate every step of the design and
                                construction process with professionalism and promptness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <main>
        <div class="parte2-box">
            <div class="parte2-tamanho">
                <div class="parte2-conteudo">
                    <div class="parte2-div1">
                        <h6>OUR APPrOACH</h6>
                    </div>
                    <div class="parte2-divs">

                        <div class="parte2-div2">
                            <h1>Expertise, on a<br>
                                first-name basis.</h1>
                        </div>
                        <div class="parte2-div3">
                            <p>We know that the design and build process can be unfamiliar, confusing and frustrating.
                                Which is why we personally empower you with the necessary resources you need to make
                                informed decisions about your project. We never insulate ourselves from your questions
                                and concerns—we always handle them quickly and directly.<br><br>

                                We are a small, well-connected team with decades-long relationships and experience
                                regarding every detail of a construction project, from permits and crews to budgets and
                                timelines</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxx include xxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

    <?php
    include('components/components1.php');

    include('components/components2.php');
    ?>

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxx fim include xxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

    <main>
        <div class="parte5-box">
            <div class="parte5-tamanho">

                <div class="parte5-conteudo">

                    <div class="parte5-bloco1">

                        <div class="parte5-featured">
                            <p>featured property</p>
                        </div>

                        <div class="parte5-pointe">
                            <h1>Pointe 1620</h1>
                        </div>

                        <div class="parte5-p">
                            <p>These boutique residences feature pioneering design, capturing the old world charm
                                indicative of new england with innovative, contemporary indulgences.</p>
                        </div>
                        <div class="parte5-button">
                            <a href="">Visit Website</a> <a href="" class="a-branco">See All Properties</a>
                        </div>

                    </div>
                    <div class="parte5-bloco2">

                        <div class="carrossel">

                            <div class="carrossel-img">
                                <img src="public/img/foto-design.png" alt="foto-design">
                            </div>
                            <div class="carrossel-img">
                                <img src="public/img/foto-about.png" alt="foto-about">
                            </div>
                            <div class="carrossel-img">
                                <img src="public/img/foto-develop.png" alt="foto-develop">
                            </div>
                            <div class="carrossel-img">
                                <img src="public/img/foto-manage.png" alt="foto-manage">
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </main>

    <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    <footer>
        <div class="footer-box">
            <div class="footer-tamanho">

                <div class="footer-conteudo">

                    <div class="caixa">
                        <div class="footer-img">
                            <img src="public/img/logorodape.png" alt="logo-rodape">
                        </div>
                        <div class="footer-texto">
                            <p>508-830-4646 info@megryco.com</p>
                            <p class="p">Megryco, inc. • 22 1/2 Whiting STREET • Plymouth, MA 02360</p>
                        </div>
                    </div>

                    <div class="footer-button">
                        <a href="">Client Login</a>
                    </div>

                </div>

            </div>
        </div>
    </footer>
    <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->

    <!--jquery cdm-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- bootsrap script -->
    <script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- script -->
    <script src="public/slick/slick.min.js"></script>
    <script src="public/slick/slick.js"></script>

    <script>
        $('.carrossel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: $("#arrow-prevv"),
            nextArrow: $("#arrow-nextt")

        });
    </script>

</body>

</html>