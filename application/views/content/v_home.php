<section class="container-fluid service-type pb-5 wow fadeInUp" data-wow-delay="0.2s">
    <div class="container pb-5">
        <div class="row gy-4">
            <?php foreach ($service as $s) { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card-service" title="<?= @$_GET['lang'] == 'eng' ? $s->title_eng : $s->title ?>">
                        <img src="https://admin103.servicelaptopmac.com/upload/service/<?= $s->image_bg; ?>" class="img-fluid bg-service" alt="">
                        <div class="position-relative">
                            <div class="img">
                                <img src="https://admin103.servicelaptopmac.com/upload/service/<?= $s->image; ?>" class="img-fluid" alt="<?= @$_GET['lang'] == 'eng' ? $s->title_eng : $s->title ?>">
                            </div>
                            <div class="title">
                                <p class="text-white"><?= @$_GET['lang'] == 'eng' ? $s->title_eng : $s->title ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="container-fluid about px-0 position-relative wow fadeInUp" data-wow-delay="0.2s" id="about">
    <div class="container-1520 ps-md-0">
        <div class="row gy-4">
            <div class="col-md-4 col-lg-4">
                <div class="img">
                    <img src="https://admin103.servicelaptopmac.com/upload/about_us/<?= $about_us->image; ?>" class="img-fluid" alt="<?= @$_GET['lang'] == 'eng' ? $about_us->title_eng : $about_us->title ?>">
                </div>
            </div>
            <div class="col-md-8 col-lg-7">
                <div class="caption ps-0 ps-lg-5 pe-0 pe-lg-4 pb-5 pb-lg-0">
                    <div class="header-title d-flex align-items-center pb-3">
                        <img src="https://admin103.servicelaptopmac.com/upload/<?= $website->image; ?>" class="img-fluid me-4" alt="">
                        <h1>About Us</h1>
                    </div>
                    <div class="desk">
                        <div class="title-desk mb-4">
                            <h2><?= @$_GET['lang'] == 'eng' ? $about_us->title_eng : $about_us->title ?></h2>
                        </div>
                        <p><?= @$_GET['lang'] == 'eng' ? $about_us->deskripsi_eng : $about_us->deskripsi ?></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="container-xxl why-us px-0" id="why-us">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <div class="header-title wow fadeInUp" data-wow-delay="0.2s">
                    <h1 class="txt-blue pb-3">WHY CHOOSE US</h1>
                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, </small>
                </div>
            </div>
        </div>
        <div class="caption mt-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="row g-4">
                <?php foreach ($why_us as $wu) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-caption">
                            <div class="title mb-4">
                                <h5><?= @$_GET['lang'] == 'eng' ? $wu->title_eng : $wu->title ?></h5>
                            </div>
                            <div class="desk">
                                <p><?= @$_GET['lang'] == 'eng' ? $wu->deskripsi_eng : $wu->deskripsi ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid our-services bg-blue pt-5" id="services">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <div class="header-title wow fadeInUp" data-wow-delay="0.2s">
                    <h1 class="mb-3">OUR SERVICE</h1>
                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, </small>
                </div>
            </div>
        </div>

        <div class="row wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-lg-12">
                <div class="slider-container mt-5 h-100">
                    <div class="swiper-container services-slider p-3">
                        <div class="swiper-wrapper">
                            <?php foreach ($our_service as $os) { ?>
                                <div class="swiper-slide">
                                    <div class="service-box pb-5 position-relative" title="<?= @$_GET['lang'] == 'eng' ? $os->title_eng : $os->title ?>">
                                        <div class="img">
                                            <img src="https://admin103.servicelaptopmac.com/upload/our_service/<?= $os->image; ?>" class="img-fluid w-100" alt="<?= @$_GET['lang'] == 'eng' ? $os->title_eng : $os->title ?>">
                                        </div>
                                        <div class="caption p-4">
                                            <div class="title">
                                                <h5><?= @$_GET['lang'] == 'eng' ? $os->title_eng : $os->title ?></h5>
                                            </div>
                                            <div class="desk">
                                                <p><?= @$_GET['lang'] == 'eng' ? $os->deskripsi_eng : $os->deskripsi ?></p>
                                            </div>
                                            <?php
                                            $numberAPI = $website->phone;
                                            $n1API = substr($numberAPI, 1);
                                            $apiWa = $n1API;
                                            $waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Admin%20servicelaptopmac,%20Saya%20tertarik%20dengan%20layanan%20service%20dari%20website%20https://servicelaptopmac.com/";
                                            ?>
                                            <div class="booking">
                                                <a href="<?= $waLink; ?>" target="_blank" class="px-5 py-2 rounded-10 fw-bold">BOOKING</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="container-xxl testimoni px-0" id="testimoni">
    <div class="container py-5 px-lg-5">

        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <div class="header-title wow fadeInUp" data-wow-delay="0.2s">
                    <h1 class="txt-blue">Testimonial</h1>
                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, </small>
                </div>
            </div>
        </div>
        <div class="slider-container mt-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="swiper-container testimoni-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($testimoni as $t) { ?>
                        <div class="swiper-slide">
                            <div class="box-testimoni">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="img">
                                            <img src="https://admin103.servicelaptopmac.com/upload/testimoni/<?= $t->image; ?>" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="caption">
                                            <h5><?= $t->nama; ?></h5>
                                            <p><?= $t->testi; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

<section class="container xxl brand px-0 wow fadeInUp" data-wow-delay="0.2s">
    <div class="container py-5 px-lg-5">
        <div class="img">
            <?php foreach ($brand as $b) { ?>
                <img src="https://admin103.servicelaptopmac.com/upload/brand/<?= $b->image; ?>" class="img-fluid" alt="<?= $b->nama; ?>" title="<?= $b->nama; ?>">
            <?php } ?>

        </div>
    </div>
</section>