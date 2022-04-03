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
    <link rel="stylesheet" href="public/css/about.css">

    <!--responsivel-->
    <link rel="stylesheet" href="public/css/responsivel-site.css">

    <title>ABOUT</title>
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
                        <img src="public/img/foto-about.png" alt="foto-about">
                    </div>
                    <div class="part1-items">
                        <div class="parte1-h1">
                            <h1>ABOUT US</h1>
                        </div>
                        <div class="parte1-p">
                            <p>MEGRYCO, Inc. is a family-built company with decades of experience shaping and investing in the communities of Plymouth and the South Shore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <main>
        <div class="parte2-box-about">
            <div class="parte2-tamanho">
                <div class="parte2-conteudo">
                    <div class="parte2-div1">
                        <h6>OUR APPrOACH</h6>
                    </div>
                    <div class="parte2-divs">

                        <div class="parte2-div2">
                            <h1>Full-circle property <br> services from design,<br> to development to<br> management.</h1>
                        </div>
                        <div class="parte2-div3">
                            <p>At its core, MEGRYCO, Inc. seeks to build, manage and ultimately grow communities in Plymouth and on the South Shore. Our full-circle services allow us to assist our clients more thoroughly with our informed, consistent collaboration and communication regarding everything building and leasing. And, we are uniquely positioned to not only develop a property or community, but do so with an eye on the future maintenance and lifelong comfort of our clients.<br><br>

                                While offering a personal, well-informed experience, our small team works seamlessly together across our three main services—design, development and management— connecting our clients to the exact decision makers they need to move their project or leasing process along. And, we certainly don’t sacrifice resources in the name of small company size. Our clients have access to the bandwidth and near endless resources of a much larger organization, without sacrificing a personal connection.<br><br>


                                Based in Plymouth, Massachusetts for over three decades, MEGRYCO, Inc. is a proud, family-owned company with an impressive portfolio of diverse properties and a host of satisfied clients, tenants and city partners.
                            </p>
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