<?php

if(!isset($_COOKIE['authenticated'])) {
    header("Location: /login.php");
    die();
}

if (isset($_GET["lang"])){
$lang = $_GET["lang"];
}
else {
    $lang = "el";
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link href="https://fonts.googleapis.com/css?family=Arimo&subset=greek" rel="stylesheet"/>

    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css"/>

    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css"/>

    <link href="/css/skeleton.css" rel="stylesheet"/>
    <link href="/css/style.css?v=37" rel="stylesheet"/>
    <link href="/css/responsive.css" rel="stylesheet"/>
    <title><?php if ($lang == "en")
                echo "GFR Car Parts";
            else {
                echo "GFR Ανταλλακτικά Αυτοκινήτων";
            } ?></title>
    <meta name="description" content="<?php if ($lang == "en")
                echo "GFR PARTS & SPARES trades in car parts of all types";
            else {
                echo "Η GFR PARTS & SPARES εμπορεύεται ανταλλακτικά αυτοκινήτου παντός τύπου.";
            } ?>">
</head>
<body>
    <div class="top-info-wrapper">
        <div class="center-wrapper clearfix">
            <div class="top-info-wrapper">
                <div class="email-wrapper">
                    <span class="icon icon-envelope-o"></span>
                    <a class="email label" href="mailto:info@gfr.gr">info@gfr.gr</a>
                </div>
                <div class="mobile-wrapper">
                    <span class="icon icon-mobile2"></span>
                    <span class="label">693 68 50 779</span>
                </div>
                <div class="phone-wrapper">
                    <span class="icon icon-phone"></span>
                    <span class="label">211 40 30 889</span>
                </div>
            </div>
        </div>
    </div>
    <div class ="header-placeholder">
        <header>
            <div class="center-wrapper">
                <div class="header-wrapper ">
                    <div class="logo-wrapper">
                        <a href="/index.php<?php if ($lang == "en")
                            echo "?lang=en";
                        else {
                            echo "?lang=el";
                        } ?>">
                            <img class="logo" src="/images/logo-long.png" />
                        </a>
                    </div>
                    <nav class="main-menu-wrapper">
                        <ul class="main-menu">
                            <li  class="main-menu-item">
                                <a href="/index.php<?php if ($lang == "en")
                            echo "?lang=en";
                        else {
                            echo "?lang=el";
                        } ?>">
                                <span class="icon icon-home3"></span>&nbsp;&nbsp;&nbsp;<?php if ($lang == "en")
                            echo "HOME";
                        else {
                            echo "ΑΡΧΙΚΗ";
                        } ?></a>
                            </li>
                            <li class="main-menu-item">
                                <a href="/company.php<?php if ($lang == "en")
                            echo "?lang=en";
                        else {
                            echo "?lang=el";
                        } ?>"><?php if ($lang == "en")
                            echo "COMPANY";
                        else {
                            echo "ΕΤΑΙΡΕΙΑ";
                        } ?></a>
                            </li>
                            <li class="main-menu-item">
                                <a href="/brands.php<?php if ($lang == "en")
                            echo "?lang=en";
                        else {
                            echo "?lang=el";
                        } ?>"><?php if ($lang == "en")
                            echo "BRANDS";
                        else {
                            echo "ΜΑΡΚΕΣ";
                        } ?></a>
                            </li>
                            <li class="main-menu-item">
                                <a href="/contact.php<?php if ($lang == "en")
                            echo "?lang=en";
                        else {
                            echo "?lang=el";
                        } ?>"><?php if ($lang == "en")
                            echo "CONTACT";
                        else {
                            echo "ΕΠΙΚΟΙΝΩΝΙΑ";
                        } ?></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="lang-wrapper"><span class="selected" data-lang="el">ΕΛ</span> | <span data-lang="en">EN</span></div>
                </div>
            </div>
        </header>
    </div>