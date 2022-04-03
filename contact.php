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
    <link rel="stylesheet" href="public/css/contact.css">

    <!--responsivel-->
    <link rel="stylesheet" href="public/css/responsivel-site.css">

    <title>contact</title>
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
        <div class="contact-box">
            <div class="contact-tamanho">
                <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
                <div class="contact-parte1">

                    <div class="contact-h1">
                        <h1>CONTACT US</h1>
                    </div>
                    <div class="contact-p">
                        <label for="">
                            <div class="contact-icone">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 1.71875C16.097 1.71875 20.2812 5.84697 20.2812 11C20.2812 16.1258 16.13 20.2812 11 20.2812C5.87623 20.2812 1.71875 16.1321 1.71875 11C1.71875 5.878 5.86962 1.71875 11 1.71875ZM11 0.34375C5.11513 0.34375 0.34375 5.11685 0.34375 11C0.34375 16.8866 5.11513 21.6562 11 21.6562C16.8849 21.6562 21.6562 16.8866 21.6562 11C21.6562 5.11685 16.8849 0.34375 11 0.34375ZM9.45312 15.125H9.96875V9.96875H9.45312C9.16837 9.96875 8.9375 9.73788 8.9375 9.45312V9.10938C8.9375 8.82462 9.16837 8.59375 9.45312 8.59375H11.5156C11.8004 8.59375 12.0312 8.82462 12.0312 9.10938V15.125H12.5469C12.8316 15.125 13.0625 15.3559 13.0625 15.6406V15.9844C13.0625 16.2691 12.8316 16.5 12.5469 16.5H9.45312C9.16837 16.5 8.9375 16.2691 8.9375 15.9844V15.6406C8.9375 15.3559 9.16837 15.125 9.45312 15.125ZM11 4.8125C10.2406 4.8125 9.625 5.42811 9.625 6.1875C9.625 6.94689 10.2406 7.5625 11 7.5625C11.7594 7.5625 12.375 6.94689 12.375 6.1875C12.375 5.42811 11.7594 4.8125 11 4.8125Z" fill="#3A5DB6" />
                                </svg>

                            </div>

                            <p>If you are current resident or leasee, please use our <a href="#"> client login.</a> </p>
                        </label>
                    </div>
                </div>
                <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->


                <div class="contact-parte2">

                    <form action="" method="post">

                        <div class="contact-input">
                            <label for="">NAME<input type="text" name="name" required="required" minlength="4"></label>
                            <label for="">EMAIL<input type="email" name="email" required="required" minlength="4"></label>
                            <label for="">PHONE<input type="tel" name="tel" required="required" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"></label>
                            <label for="">How can we help you?<textarea name="message" id="" cols="30" rows="12"></textarea></label>

                            <div class="input-button">
                                <input type="submit" value="SEND MESSAGE">
                            </div>
                        </div>

                    </form>

                    <div class="contact-lado-box">
                        <div class="contact-img">
                            <img src="public/img/foto-contact.png" alt="foto localidade">
                        </div>
                        <div class="contact-informacoes">
                            <label for="">OFFICE <p> 22 1/2 Whiting Street<br>Plymouth, MA 02360</p></label>
                            <label for="">PHONE <p>508-830-4646</p></label>
                            <label for="">EMAIL <p>info@megryco.com</p></label>
                        </div>
                    </div>
                </div>
                <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
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



</body>

</html>