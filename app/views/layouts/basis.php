<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Horologium</title>
    <base href="/">
    <?php if(!empty($canonical)): ?>
        <link rel="canonical" href="<?=$canonical;?>" />
    <?php endif; ?>
    <link rel="shortcut icon" href="public/images/favicon.png" type="image/x-icon">
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    
    <link href="public/megamenu/css/ionicons.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="public/megamenu/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="public/css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="public/css/style-liberty.css">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- <link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
    <link rel="stylesheet" href="public/css/swiper-bundle.min.css">

    <!-- <link rel="stylesheet" href="public/css/flexslider.css"> -->
    <!-- <link rel="stylesheet" href="public/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="public/css/bootstrap.css.map">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css.map"> -->


    
</head>

<body>

    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand" href="<?=PATH;?>" >
                    Horol<svg style="color: #fd5c63;" xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-watch" viewBox="0 0 16 16">
  <path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z"/>
  <path d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z"/>
</svg>gium
                    </a>
                </h1>
                <!-- mobl button -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <!-- //mobl button -->

                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=PATH;?>">Главная <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link dropdown-toggle d-lg-flex align-items-center" href="#"
                            id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Каталог <span class="fas fa-angle-down ml-lg-1"></span>
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="menu-container">
                                    <div class="menu">
                                        <?php new \app\widgets\menu\Menu([
                                        'tpl' => WWW . '/menu/menu.php',
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="public/templates/about.html">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="public/templates/contact.html">Контакты</a>
                        </li>
                        <div class="btn-group">
                        <a class="dropdown-toggle" data-toggle="dropdown">Аккаунт<span class="fas fa-angle-down ml-lg-1"></span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php if(!empty($_SESSION['user'])): ?>
                                <li><a href="user/cabinet">Добро пожаловать, <?=h($_SESSION['user']['name']);?></a></li>
                                <li><a href="user/logout">Выход</a></li>
                            <?php else: ?>
                                <li><a href="user/login">Вход</a></li>
                                <li><a href="user/signup">Регистрация</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    </ul>
                </div>

                <!-- search button -->

                <div class="search-right ml-lg-3">
                    <div class="search-container">
                        <form action="search" method="get" autocomplete="off">
                            <input class="search expandright" type="search text" id="searchright" id="typeahead" name="s">
                            <label class="button searchbutton" for="searchright" >
                            <i class="fas fa-search"></i>
                            </label>
                        </form>
                    </div>
                </div>
                
                <!-- //search button -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
</button> -->
            <!-- cart button -->
                <div class="cart box_1">
                    <a href="cart/show" onclick="getCart(); return false;">
                <div class="total">
                    <button class="button btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"></path></svg>
                    </button>
                    <?php if(!empty($_SESSION['cart'])): ?>
                                <span class="simpleCart_total" data-toggle="modal" data-target="#exampleModalCenter"><?=$_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] . $_SESSION['cart.currency']['symbol_right'];?></span>
                            <?php else: ?>
                                <span class="simpleCart_total" data-toggle="modal" data-target="#exampleModalCenter"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-body-text" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5Zm0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>
</svg></span>
                            <?php endif; ?>
                            </div>
                            </a>
                      <div class="clearfix"> </div>
                      
                </div>
                
                    <!-- //cart button -->

                <!-- toggle switch for light and dark theme -->
                <div class="clearfix"> 
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                </div>
                <!-- //toggle switch for light and dark theme -->

            </nav>
        </div>
    </header>
    <!--//header-->

    <div class="content">
    <?=$content;?>
    </div>



    <!-- footer -->
    <footer class="footer-29-main">
        <div class="footer-29 py-5">
            <div class="container pt-md-5 pt-4">
                <div class="footer-text-style">
                    <div class="footer-list-cont d-flex align-items-center justify-content-between mb-5">
                        <h6 class="foot-sub-title">Связаться с нами</h6>
                        <div class="main-social-footer-29">
                            <a href="https://ru-ru.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://vk.com/cy3aemi" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row footer-top-29 pt-lg-5 pt-sm-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="address-grid">
                            <h5>Хабаровская ул., 57, <br> Симферополь.</h5>
                            <h5 class="mt-sm-5 mt-4">Каждый день: <span> 9:00 - 18:00</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="address-grid">
                            <h5>Телефон</h5>
                            <h5 class="phone-number-text mt-2"><a href="tel:+7(978)593-82-69">+7(978)593-82-69</a></h5>
                        </div>
                        <div class="address-grid mt-sm-5 mt-4">
                            <h5>E-mail</h5>
                            <h5 class="email-cont-text mt-1"> <a href="mailto:myshop.horologium@gmail.com"
                                    class="mail">horologium@gmail.com</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 footer-list-menu pl-lg-0 mt-lg-0 mt-sm-5 mt-4">
                        <div class="address-grid">
                            <h5 class="mb-4 pb-lg-2">Ссылки поддержки</h5>
                            <ul>
                                <li><a href="https://xn--80aapampemcchfmo7a3c9ehj.xn--p1ai/assets/%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0%20%D0%BA%D0%BE%D0%BD%D1%84%D0%B8%D0%B4%D0%B5%D0%BD%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D0%B8.pdf">Политика конфиденциальности</a></li>
                                <li><a href="/public/templates/services.html"> Условия обслуживания</a></li>
                                <li><a href="#он_появится">Связь с нами</a></li>
                                <li><a href="#у_тебя_все_получиться"> Поддержка</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="address-grid col-lg-4 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 footer-16-main">
                        <h5>Подпишитесь здесь</h5>
                        <form action="#" class="subscribe d-flex mt-4 pt-lg-2 mb-4" method="post">
                            <input type="email" name="email" placeholder="Адрес электронной почты" required="">
                            <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                        </form>
                        <p>Подпишитесь на нашу рассылку и получайте обновления на свой почтовый ящик.</p>
                    </div>
                </div>
                <!-- copyright -->
                <div class="copyright text-center mt-lg-5 mt-sm-4 pt-md-4 pt-3">
                    <p class="copy-footer-29">© 2021 Horologium. All rights reserved. Design by <a class="navbar-brand" href="<?=PATH;?>" target="_blank">
                        horol<svg style="color: #fd5c63;" xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-watch" viewBox="0 0 16 16">
      <path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z"/>
      <path d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z"/>
    </svg>gium
                        </a></p>
                            
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Modal -->
    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Корзина</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                <a href="cart/view" type="button" class="btn btn-primary">Оформить заказ</a>
                <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Корзина</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                <a href="cart/view" type="button" class="btn btn-primary">Оформить заказ</a>
                <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>
            </div>
        </div>
    </div>
</div>

<div class="preloader"><img src="images/ring.svg" alt=""></div>

<?php $curr = \myshop\App::$app->getProperty('currency'); ?>
<script>
    var path = '<?=PATH;?>',
        course = <?=$curr['value'];?>,
        symboleLeft = '<?=$curr['symbol_left'];?>',
        symboleRight = '<?=$curr['symbol_right'];?>';
</script>

<script src="public/js/jquery-1.11.0.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="js/validator.js"></script>
<script src="public/js/typeahead.bundle.js"></script>
<!--dropdown-->
<script src="public/js/jquery.easydropdown.js"></script>
<!--Slider-Starts-Here-->
<script src="public/js/responsiveslides.min.js"></script>
<script src="public/js/imagezoom.js"></script>
<script defer src="public/js/jquery.flexslider.js"></script>



    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="public/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- banner slider -->
    <script>
        const sliderContainer = document.querySelector(".slider-container");
        const slideRight = document.querySelector(".right-slide");
        const slideLeft = document.querySelector(".left-slide");
        const upButton = document.querySelector(".up-button");
        const downButton = document.querySelector(".down-button");
        const slidesLength = slideRight.querySelectorAll("div").length;

        let activeSlideIndex = 0;

        slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`;

        const changeSlide = (direction) => {
            const sliderHeight = sliderContainer.clientHeight;
            if (direction === "up") {
                activeSlideIndex++;
                if (activeSlideIndex > slidesLength - 1) activeSlideIndex = 0;
            } else if (direction === "down") {
                activeSlideIndex--;
                if (activeSlideIndex < 0) activeSlideIndex = slidesLength - 1;
            }
            slideRight.style.transform = `translateY(-${
    activeSlideIndex * sliderHeight
  }px)`;
            slideLeft.style.transform = `translateY(${
    activeSlideIndex * sliderHeight
  }px)`;
        };

        upButton.addEventListener("click", () => changeSlide("up"));
        downButton.addEventListener("click", () => changeSlide("down"));
    </script>
    <!-- //banner slider -->

    <!-- libhtbox -->
    <script src="public/js/lightbox-plus-jquery.min.js"></script>
    <!-- libhtbox -->

    <!-- counter for stats -->
    <script src="public/js/counter.js"></script>
    <!-- //counter for stats -->

    <!-- testimonial script -->
    <script>
        $(document).ready(function () {

            $('.client-single').on('click', function (event) {
                event.preventDefault();

                var active = $(this).hasClass('active');

                var parent = $(this).parents('.testi-wrap');

                if (!active) {
                    var activeBlock = parent.find('.client-single.active');

                    var currentPos = $(this).attr('data-position');

                    var newPos = activeBlock.attr('data-position');

                    activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(
                        currentPos);
                    activeBlock.attr('data-position', currentPos);

                    $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(
                        newPos);
                    $(this).attr('data-position', newPos);

                }
            });

        }(jQuery));
    </script>
    <!-- //testimonial script -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <script src="public/js/swiper-bundle.min.js"></script> 
    <script src="public/js/main.js"></script>
    <script src="public/megamenu/js/megamenu.js"></script>
    <script src="public/js/script.js" charset="utf-8"></script>

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script> -->
    <!-- //bootstrap-->
    <!-- //Js scripts -->

    <!-- <?php
    $logs = \R::getDatabaseAdapter()
        ->getDatabase()
        ->getLogger();
        debug( $logs->grep( 'SELECT' ) );
    ?> -->

	</body>

</html>