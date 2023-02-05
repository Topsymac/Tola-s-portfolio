<?php
include 'connect.php';
$error = false;

if(isset($_POST['sub'])){
  $fn = $_POST['fullname'];
  $em = $_POST['email'];
  $pw = $_POST['pass'];
  $cp = $_POST['cpass'];
  if (!preg_match("/^[a-zA-Z ]+$/",$fn)) {
    $error = true;
    $f_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($em,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $e_error = "Please Enter Valid Email ID";
    }
    if(strlen($pw) < 6) {
        $error = true;
        $p_error = "Password must be minimum of 6 characters";
    }
    if($pw != $cp) {
        $error = true;
        $cp_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        if(mysqli_query($conn, "INSERT INTO regform(name,email,password)VALUE('$fn','$em','$pw')")) {
            echo '<script>alert("Profile Created Successfully")</script>';
    header ('location:signin.php');
        } else {
    echo '<script>alert("Error in registering...Please try again later!")</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <title> - Cryptocurrency Exchange - Buy and Sell Bitcoins</title>
        <meta property="og:title" content=" - Cryptocurrency Exchange - Buy and Sell Bitcoins">
        <meta name="keywords" content="cryptocurrency trading, crypto trading platform, bitcoin trading." />
        <meta name="description" content="Start cryptocurrency trading with the most reliable exchange platform on the market. We offer a simple user interface, helpful trading tools and advanced security." />
        <meta property="og:description" content="Start cryptocurrency trading with the most reliable exchange platform on the market. We offer a simple user interface, helpful trading tools and advanced security." />
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Montserrat:400,500,600,700|Source+Sans+Pro:300,400,600,700" rel="stylesheet" />
        <link href="../dist/vendor.126bb8da.css" rel="stylesheet">
        <link href="../dist/inner.6aea48b3.css" rel="stylesheet">
        <link href="../dist/all.4f834f53.css" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="../i/favicon6654.ico?v1" type="image/x-icon" />
        <meta name="theme-color" content="#23363D" />
        <meta property="og:url" content="../index.html">
        <meta property="og:type" content="website">
        <meta property="og:image" content="../i/logo-og.jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <link rel="canonical" href="index.html" />
        <link rel="alternate" hreflang="en" href="index.html" />
        <link rel="alternate" hreflang="th" href="../th/index.html" />
        <link rel="alternate" hreflang="my" href="../my/index.html" />
        <meta name="yandex-verification" content="e28824928b7aff8c" />
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N8B4S6H');</script>
        <!-- End Google Tag Manager -->
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8B4S6H"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="page page_type_signin">
            <nav class="navbar navbar-expand-md header header-b" role="navigation">

                <link href="../dist/header-banner.8bd9570b.css" rel="stylesheet">

                <div class="container">
                    <div class="header__inner header__inner-eng">
                        <a id="header-link-logo" class="navbar-brand header__logo js-header-link-logo" href="./index.html">
                            <img class="header__logo-image" src="../i/logo.svg" alt="sitename" />
                        </a>
        
                        <div class="dropdown header-lang">
                            <div role="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon d-none d-md-inline-block"><img alt="English" class="promo__change-lang-eng" src="../i/flag_eng.svg"></span>
                                <span class="header-lang__code">en</span>
                            </div>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="j-change-lang active" lang="en" href="./register">
                                    <span class="icon">
                                        <img alt="English" class="dropdown-menu__lang-eng" src="../i/flag_eng.svg">
                                    </span>
                                    <span>English</span>
                                </a>
                               
                            </div>
                        </div>

                        <button class="navbar-toggler header__toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="la la-bars"></i>
                            <i class="la la-close"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbar-content">
                            <div class="header__menus">
                                <ul class="navbar-nav header__menu header__menu_type_main">
                                    <li class="nav-item">
                                        <a id="header-link-about" class="nav-link text-center header__link" href="./about.html">
                                            About
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="header-link-faq" class="nav-link text-center header__link" href="./faq/question/00_General/01_How_to_register_an_account.html">
                                            FAQ
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="header-link-referralprogram" class="nav-link text-center header__link" href="./referralprogram.html">
                                            Referral Program
                                        </a>
                                    </li>
                                    <li class="nav-item d-block d-lg-none">

                                        <div class="header__btns w-100 text-center">

                                            <a
                                                href="./signin.php"
                                                class="btn btn-gradient-04 header__btns-success btn-dark"
                                            >Sign In
                                            </a>

                                            <a
                                                href="./register.php"
                                                class="btn btn-gradient-pink header__btns-pink btn-dark"
                                            >Register
                                            </a>
                                        </div>
                                    </li>
                                </ul>

                                <div class="header__user_menu d-none d-lg-block">
                                    <a href="./register.php" class="btn btn-outline-purple btn-dark">
                                        Register
                                    </a>
                                    <a href="./signin.php" class="btn btn-outline-success btn-dark ml-3">
                                        Sign In
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </nav>
            <script>
                var CurrencyCodeFixMap = {"USD":"USDT"};
            </script>
            <div class="content account-page-bg">
                <div class="container">   
                    <link href="../dist/register.9dc2c8a1.css" rel="stylesheet">
                    <div id="js-register-vue-root">
                        <div class="register">
                            <div class="row mh100vh">
                                <div class="align-self-center offset-xl-3 col-xl-6 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                                    <div class="register__widget widget has-shadow">
                                        <div class="widget-inner">
                                            <div class="register__widget-body widget-body">
                                                <!-- register-form -->
                                                <div class="register-form">
                                                    <h2 class="register__title text-center mb-4">
                                                        Create Your Account
                                                    </h2>

                                                        
                                                    <form method="POST" enctype="multipart/form-data">

                                                        <div class="form-group mb30">

                                                            <form-input
                                                                input-id="input-email-signin"
                                                                type="text"
                                                                name="email"
                                                                value=""
                                                                label="Email"
                                                                required=""
                                                            >
                                                                <div class="register__form-group">
                                                                    <input value="<?php if($error) echo $fn; ?>" name="fullname" placeholder="enter full name" class="register__input form-control"/>
                                                                </div>
                                                                <p class="text-danger"><?php if (isset($f_error)) echo $f_error; ?></p>
                                                            </form-input>

                                                        </div>

                                                        <div class="form-group mb30">

                                                            <form-input
                                                                input-id="input-email-signin"
                                                                type="text"
                                                                name="email"
                                                                value=""
                                                                label="Email"
                                                                required=""
                                                            >
                                                                <div class="register__form-group">
                                                                    <input value="<?php if($error) echo $em; ?>" name="email" placeholder="enter email address" class="register__input form-control"/>
                                                                </div>
                                                                <p class="text-danger"><?php if (isset($e_error)) echo $e_error; ?></p>
                                                            </form-input>

                                                        </div>

                                                        <div class="form-group mb30">

                                                            <form-input
                                                                input-id="input-password-register"
                                                                type="password"
                                                                name="password"
                                                                label="Password"
                                                                required=""
                                                                input-class="j-pswd-input"
                                                            >
                                                                <div class="register__form-group">
                                                                    <input value="<?php if($error) echo $pw; ?>" name="pass" placeholder="enter password" class="register__input form-control"/>
                                                                </div>
                                                                <p class="text-danger"><?php if (isset($p_error)) echo $p_error; ?></p>
                                                            </form-input>

                                                        </div>

                                                        <div class="form-group mb30">

                                                            <form-input
                                                                input-id="input-password-verify"
                                                                type="password"
                                                                name="password_verify"
                                                                label="Confirm Password"
                                                                required=""
                                                            >
                                                                <div class="register__form-group">
                                                                    <input value="<?php if($error) echo $cp; ?>" name="cpass" placeholder="confirm password" class="register__input form-control"/>
                                                                </div>
                                                            </form-input>
                                                            <p class="text-danger"><?php if (isset($cp_error)) echo $cp_error; ?></p>
                                                            <p class="invalid-feedback text-left">
                                                                
                                                            </p>
                                                        </div>

                                                        <div class="register-text-wrapper mb0">

                                                            <div class="styled-checkbox">
                                                                <input
                                                                    id="agreement-checkbox"
                                                                    name="agreement"
                                                                    type="checkbox"
                                                                    value="1"
                                                                    class="j-register__input with-font"
                                                                />
                                                                <label id="agreement-checkbox-label" for="agreement-checkbox">
                                                                    I agree to <a href="./terms_of_use.html" target="_blank" rel="nofollow noreferrer noopener" class="btn-link">Terms of Use</a> and <a href="https://sitename/en/privacy_policy" target="_blank" rel="nofollow noreferrer noopener" class="btn-link">Privacy Policy.</a>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <button
                                                            name="sub"
                                                            id="register-button-submit"
                                                            type="submit"
                                                            class="register__btn-submit btn btn-gradient-04 btn-block my-2 j-check-submit-register-form"
                                                        >
                                                            Register
                                                        </button>

                                                        <div class="register__recaptcha-wrapper mx-auto mb-1">
                                                            <div
                                                                id="registerRC"
                                                                class="g-recaptcha custom-input"
                                                                data-callback="onSubmitRegister"
                                                                data-size="invisible"
                                                                data-badge="bottomleft"
                                                                data-sitekey="6Le_QHUUAAAAAMbFBBRifosPhZqUbQfJ7Gc3nIn0"
                                                            ></div>

                                                            <p class="invalid-feedback text-left mt-1">
                                                                
                                                            </p>
                                                        </div>
                                                    </form>
                                                        


                                                </div>
                                                <div class="row">
                                                    <p class="col-12 register__footer-text text-center">
                                                        Already have an account?

                                                        <a href="./signin.php">
                                                            Sign In
                                                        </a>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <div class="footer footer_type_inner js-footer-inner">
                <div class="container">
                    <div class="row flex-md-nowrap flex-sm-wrap justify-content-xl-between">
                    <!-- footer-company -->
                        <div class="col-sm-auto col-12">
                            <div class="footer__block footer__block-divider js-footer-inner-active js-footer-block-active">
                                <div class="footer__title">Company</div>

                                <ul class="list-unstyled footer__list footer__menu">
                                    <li class="footer__list-item">
                                        <a href="./about.html" class="footer__link">About</a>
                                    </li>

                                    <li class="footer__list-item">
                                        <a href="./faq/question/00_General/01_How_to_register_an_account.html" class="footer__link">FAQ</a>
                                    </li>

                                    <li class="footer__list-item">
                                        <a href="./contact.html" class="footer__link">Contact Us</a>
                                    </li>
                                    <li class="footer__list-item">
                                        <a href="./regional_partners.html" class="footer__link">Regional Partners</a>
                                    </li>

                                    <li class="footer__list-item">
                                        <a href="./awards.html" class="footer__link">Awards</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.footer-company -->
                        <!-- footer-margin -->
                        <!-- /.footer-margin -->
                        <!-- footer-exchange -->
                        <div class="col-sm-auto col-12">
                            <div class="footer__block footer__block-divider">
                                <div class="footer__title">Exchange</div>

                                <ul class="list-unstyled footer__list footer__quick">

                                    <li class="footer__list-item">
                                        <a href="./apply_to_list.html" class="footer__link">Apply to List</a>
                                    </li>

                                    <li class="footer__list-item">
                                        <a href="./otc_trading.html" class="footer__link">OTC Trading</a>
                                    </li>

                                    <li class="footer__list-item">
                                        <a href="./asset_introduction.html" class="footer__link">Asset Introduction</a>
                                    </li>

                                        <li class="footer__list-item">
                                            <a href="./referralprogram.html" class="footer__link">Referral Program</a>
                                        </li>


                                    <li class="footer__list-item">
                                        <a href="./status.html" class="footer__link">Status</a>
                                    </li>

                                    <li class="footer__list-item">
                                        <a href="./fees.html" class="footer__link">Fees</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- /.footer-exchange -->
                        <!-- footer-legal -->
                        <div class="col-sm-auto col-12">
                            <div class="footer__block footer__block-divider">
                                <div class="footer__title">Legal</div>

                                <ul class="list-unstyled footer__list footer__menu">
                                    <li class="footer__list-item">
                                        <a href="./terms_of_use.html" class="footer__link">Terms of Use</a>
                                    </li>

                                    <li class="footer__list-item">
                                        <a href="./privacy_policy.html" class="footer__link">Privacy Policy</a>
                                    </li>

                                    <li class="footer__list-item">
                                        <a href="./aml_policy.html" class="footer__link">AML/KYC Policy</a>
                                    </li>

                                    <li class="footer__list-item">
                                        <a href="./risk_disclosure.html" class="footer__link">Risk Disclosure</a>
                                    </li>

                                    <li class="footer__list-item">
                                        <a href="./disclaimer_and_consent.html" class="footer__link">Disclaimer and Consent</a>
                                    </li>

                                    <li class="footer__list-item">
                                        <a href="./referral_policy.html" class="footer__link">Referral Terms of Service</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.footer-legal -->
                        <!-- footer-social & Secure -->
                        <div class="col-sm-auto col-12 footer__block_type_last">
                            <div class="footer__block footer__block_type_social">
                                <div class="footer__title">Social</div>
                                <ul class="list-unstyled footer__list footer__social">
                                    <li class="footer__list-item footer__social-item">
                                        <a target="_blank" rel="nofollow noreferrer noopener" href="https://www.facebook.com/" class="footer__link btn btn-normal btn-navy-blue">
                                            <span class="fi fi-facebook-circular-logo"></span>
                                            <span class="footer__link-text">Facebook</span>
                                        </a>
                                    </li>
                                    <li class="footer__list-item footer__social-item">
                                        <a target="_blank" rel="nofollow noreferrer noopener" href="https://twitter.com/" class="footer__link btn btn-normal btn-sky-blue">
                                            <span class="fi fi-twitter"></span>
                                            <span class="footer__link-text">Twitter</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                            <div class="footer__block footer__block_type_bitgo mt-4">
                                <div class="footer__title">Secure</div>

                                <div class="footer__secure">

                                    <div class="footer__secure-img">
                                        <img src="../i/logo_BitGo/BitGo-1.png" class="img-fluid" alt="BigGo">
                                    </div>

                                    <div class="footer__secure-img">
                                        <img src="../i/logo_BitGo/Ssl-2.png" class="img-fluid" alt="ssl">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.footer-social & Secure -->
                    <!-- footer-copy -->
                    <div class="row">

                        <div class="col-12 text-center">

                            <div class="tiny-footer footer__copy">

                                <div class="color-light-blue">
                                        <div class="mb-2">
                                                Important! Margin trading isn’t available to US residents.
                                        </div>

                                    Copyright © All Rights Reserved 2022
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.footer-copy -->

                </div>
            </div>
            <!-- /.footer -->
        </div>
        <script src="../dist/vendor.2d98803f.js"></script>
        <script src="../dist/inner.9b3f2692.js"></script>
        <script src="../dist/all.abd09a1a.js"></script>
        <script src="../dist/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
        <script src="../dist/register.25fe33e2.js"></script>
        <script src="../dist/header-banner.d06f5be9.js"></script>

        <script src="../dist/header.34dde155.js"></script>
        <script>
        $(function() {


        });
        </script>
        <script src="../dist/footer-inner.aad4ce34.js"></script>

    </body>
</html>
