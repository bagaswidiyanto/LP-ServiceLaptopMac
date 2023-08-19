<?php
error_reporting(0);
if (@$_GET['lang'] != '') {
    $_SESSION['lang'] = $_GET['lang'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $website->metaTitle; ?></title>
    <meta name="keywords" content="<?= $website->metaKeywords; ?>">
    <meta name="description" content="<?= $website->metaDescription; ?>">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $website->metaTitle; ?>" />
    <meta property="og:description" content="<?= $website->metaDescription; ?>" />
    <meta property="og:url" content="<?= base_url() ?>" />
    <meta property="og:image" content="<?= base_url() ?>assets/images/og-image.png" />

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>assets/images/icon-url.png" sizes="32x32">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
</head>

<body class="bg-white" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Navbar & Hero Start -->
    <header class="container-fluid position-relative p-0" id="home">
        <div class="position-top-menu">
            <div class="top_menu d-none d-lg-block">
                <div class="top-content d-flex align-items-center py-3">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="float-left d-flex">
                                <i class="far fa-clock text-white fs-5"></i>
                                <p class="text-white ms-2 fs-14"><?= @$_GET['lang'] == 'eng' ? 'Open' : 'Buka' ?>
                                    <?= $website->working_hours; ?> WIB</p>
                            </div>

                            <div class="float-right ms-auto d-flex">
                                <div class="wa-top d-flex align-items-center me-5">
                                    <?php
                                    $number = $website->phone;
                                    $nwa1 = substr($number, 0, 4);
                                    $nwa2 = substr($number, 4, 4);
                                    $nwa3 = substr($number, 8, 4);
                                    $wa = $nwa1 . '-' . $nwa2 . '-' . $nwa3;

                                    $numberAPI = $website->phone;
                                    $n1API = substr($numberAPI, 1);
                                    $apiWa = $n1API;

                                    $waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Admin%20servicelaptopmac,%20Saya%20tertarik%20dengan%20layanan%20service%20dari%20website%20https://servicelaptopmac.com/";
                                    ?>
                                    <i class="fab fa-whatsapp text-white fs-5"></i>
                                    <a href="<?= $waLink; ?>" target="_blank" class="text-white ms-2 fs-14"><?= $wa; ?></a>
                                </div>
                                <div class="d-flex top-social align-items-center">
                                    <p class="me-3 text-white fs-14">
                                        <?= @$_GET['lang'] == 'eng' ? 'Follow us on' : 'Ikuti Kami di' ?> :</p>
                                    <?php foreach ($sosmed as $s) { ?>
                                        <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" target="_blank" title="<?= $s->name; ?>"><i class="<?= $s->icon; ?>"></i></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light px-0 px-lg-2 py-1">
                <div class="container">
                    <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center">
                        <img class="img-fluid" src="https://admin103.servicelaptopmac.com/upload/<?= $website->image; ?>" alt="Logo" title="<?= $website->name; ?>">
                        <p class="ms-2 fw-bold txt-red"><?= $website->name; ?></p>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto  py-0">
                            <?php if (@$_GET['lang'] == 'eng') { ?>
                                <a href="#home" class="nav-item nav-link click-scroll"><?= @$_GET['lang'] == 'eng' ? $n1->title_eng : $n1->title ?></a>
                                <a href="#about" class="nav-item nav-link click-scroll"><?= @$_GET['lang'] == 'eng' ? $n2->title_eng : $n2->title ?></a>
                                <a href="#why-us" class="nav-item nav-link click-scroll"><?= @$_GET['lang'] == 'eng' ? $n3->title_eng : $n3->title ?></a>
                                <a href="#services" class="nav-item nav-link click-scroll"><?= @$_GET['lang'] == 'eng' ? $n4->title_eng : $n4->title ?></a>
                                <a href="#testimoni" class="nav-item nav-link click-scroll"><?= @$_GET['lang'] == 'eng' ? $n5->title_eng : $n5->title ?></a>
                                <a href="#location" class="nav-item nav-link click-scroll"><?= @$_GET['lang'] == 'eng' ? $n6->title_eng : $n6->title ?></a>
                            <?php } else { ?>
                                <a href="#home" class="nav-item nav-link click-scroll idn"><?= @$_GET['lang'] == 'eng' ? $n1->title_eng : $n1->title ?></a>
                                <a href="#about" class="nav-item nav-link click-scroll idn"><?= @$_GET['lang'] == 'eng' ? $n2->title_eng : $n2->title ?></a>
                                <a href="#why-us" class="nav-item nav-link click-scroll idn"><?= @$_GET['lang'] == 'eng' ? $n3->title_eng : $n3->title ?></a>
                                <a href="#services" class="nav-item nav-link click-scroll idn"><?= @$_GET['lang'] == 'eng' ? $n4->title_eng : $n4->title ?></a>
                                <a href="#testimoni" class="nav-item nav-link click-scroll idn"><?= @$_GET['lang'] == 'eng' ? $n5->title_eng : $n5->title ?></a>
                                <a href="#location" class="nav-item nav-link click-scroll idn"><?= @$_GET['lang'] == 'eng' ? $n6->title_eng : $n6->title ?></a>
                            <?php } ?>
                            <div class="d-block d-lg-none">
                                <div class="float-left d-flex">
                                    <i class="far fa-clock fs-5"></i>
                                    <p class="ms-2 fs-14"><?= @$_GET['lang'] == 'eng' ? 'Open' : 'Buka' ?>
                                        <?= $website->working_hours; ?> WIB</p>
                                </div>

                                <div class="float-right ms-auto">
                                    <div class="wa-top d-flex align-items-center me-5">
                                        <?php
                                        $number = $website->phone;
                                        $n1 = substr($number, 0, 4);
                                        $n2 = substr($number, 4, 4);
                                        $n3 = substr($number, 8, 4);
                                        $wa = $n1 . '-' . $n2 . '-' . $n3;
                                        ?>
                                        <i class="fab fa-whatsapp fs-5"></i>
                                        <a href="#" class="text-dark ms-2 fs-14"><?= $wa; ?></a>
                                    </div>
                                    <div class="d-flex top-social align-items-center">
                                        <p class="me-3 fs-14">
                                            <?= @$_GET['lang'] == 'eng' ? 'Follow us on' : 'Ikuti Kami di' ?> :</p>
                                        <?php foreach ($sosmed as $s) { ?>
                                            <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" target="_blank" title="<?= $s->name; ?>"><i class="<?= $s->icon; ?>"></i></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="top-language">
                                <div class="dropdown">
                                    <button type="button" class="bg-transparent border-0 dropdown-toggle fs-13" data-bs-toggle="dropdown">
                                        <?= @$_GET['lang'] == 'eng' ? '<span class="fi fi-gb"></span>' : '<span class="fi fi-id"></span>' ?>
                                    </button>
                                    <ul class="dropdown-menu" style="left: -25px;">
                                        <style>
                                            .dropdown-item.lang_active {
                                                background: linear-gradient(180deg, #5B88C6 0%, #1E539C 100%);
                                                color: #fff;
                                            }

                                            .dropdown-item.lang {
                                                background: linear-gradient(180deg, #5B88C6 0%, #1E539C 100%);
                                                color: #fff;
                                            }
                                        </style>
                                        <li><a class="dropdown-item <?php
                                                                    if (@$_GET['lang'] == 'eng') {
                                                                        echo '';
                                                                    } else {
                                                                        echo 'lang';
                                                                    }
                                                                    ?>" href="<?= base_url(); ?>"> <span class="fi fi-id"></span> Indonesia</a>
                                        </li>
                                        <li><a class="dropdown-item <?php
                                                                    if (@$_GET['lang'] == 'eng') {
                                                                        echo 'lang_active';
                                                                    } else {
                                                                        echo '';
                                                                    }
                                                                    ?>" href="<?= base_url(); ?>?lang=eng"><span class="fi fi-gb"></span> Inggris</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container-fluid hero-header" id="home wow fadeInUp" data-wow-delay="0.2s">
            <!-- <div class=""> -->
            <div class="container swipper-caption">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7">
                        <div class="slider-container">
                            <div class="swiper-container hero-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="content-hero position-relative">
                                            <h1 class="text-white mb-3 display-6">
                                                <?= @$_GET['lang'] == 'eng' ? $homeweb->title_eng : $homeweb->title ?>
                                            </h1>
                                            <p class="text-white mb-0">
                                                <?= @$_GET['lang'] == 'eng' ? $homeweb->deskripsi_eng : $homeweb->deskripsi ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="mt-4 btn-click">
                                <a href="" class="bg-red fs-14 py-2 px-2 px-sm-4 rounded-10 fw-bolder d-inline-block text-center w-auto">Dapatkan
                                    Penawaran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->

        </div>
    </header>
    <!-- Navbar & Hero End -->