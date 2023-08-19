<?php
date_default_timezone_set('ASIA/JAKARTA');
function hari_ini()
{
    $hari = date("D");

    switch ($hari) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;
        case 'Mon':
            $hari_ini = "Senin";
            break;
        case 'Tue':
            $hari_ini = "Selasa";
            break;
        case 'Wed':
            $hari_ini = "Rabu";
            break;
        case 'Thu':
            $hari_ini = "Kamis";
            break;
        case 'Fri':
            $hari_ini = "Jumat";
            break;
        case 'Sat':
            $hari_ini = "Sabtu";
            break;
        default:
            $hari_ini = "Tidak di ketahui";
            break;
    }
    return "<b>" . $hari_ini . "</b>";
}
?>
<!-- Footer Start -->
<footer class="container-fluid text-light footer py-5" id="location">
    <div class="container px-0">
        <div class="row gy-4 gy-lg-0 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-lg-7">
                <div class="text-heading mb-5">
                    <h2><?= @$_GET['lang'] == 'eng' ? 'LOKASI KAMI' : 'OUR LOCATION' ?></h2>
                </div>
                <div class="row gy-5 gy-lg-0 mb-4">
                    <div class="col-md-7">
                        <div class="heading-footer mb-3">
                            <h4><?= @$_GET['lang'] == 'eng' ? 'Address' : 'Alamat' ?></h4>
                        </div>
                        <div class="address">
                            <p><?= $website->address; ?></p>
                        </div>
                        <div class="my-5">
                            <div class="heading-footer mb-3">
                                <h4><?= @$_GET['lang'] == 'eng' ? 'Contact Us' : 'Kontak Kami' ?></h4>
                            </div>
                            <div class="contact">
                                <?php
                                $number = $website->phone;
                                $n1 = substr($number, 0, 4);
                                $n2 = substr($number, 4, 4);
                                $n3 = substr($number, 8, 4);
                                $wa = $n1 . '-' . $n2 . '-' . $n3;
                                ?>
                                <p><?= $wa; ?></p>
                                <p><?= $website->email; ?></p>
                            </div>
                        </div>
                        <div class="sosmed">
                            <div class="d-flex mt-3">
                                <?php foreach ($sosmed as $s) { ?>
                                    <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" target="_blank" title="<?= $s->name; ?>"><i class="<?= $s->icon; ?>"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="visitor">
                            <div class="row gy-5 align-items-center">
                                <div class="col-3 px-0">
                                    <div class="img text-end">
                                        <img src="<?= base_url(); ?>assets/images/v-day.png" class="img-fluid w-50" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="text">
                                        <p><?= @$_GET['lang'] == 'eng' ? date('l') : hari_ini() ?></p>
                                        <small><?= date('d F Y'); ?></small>
                                    </div>
                                </div>
                                <div class="col-3 px-0">
                                    <div class="img text-end">
                                        <img src="<?= base_url(); ?>assets/images/v-today.png" class="img-fluid w-50" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="text">
                                        <p><?= $today->jml; ?></p>
                                        <small><?= @$_GET['lang'] == 'eng' ? 'Visitor Today' : 'Pengunjung Hari ini' ?></small>
                                    </div>
                                </div>
                                <div class="col-3 px-0">
                                    <div class="img text-end">
                                        <img src="<?= base_url(); ?>assets/images/v-online.png" class="img-fluid w-50" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="text">
                                        <p><?= $online->jml; ?></p>
                                        <small><?= @$_GET['lang'] == 'eng' ? 'Online Visitor Today' : 'Pengunjung Online Hari Ini' ?></small>
                                    </div>
                                </div>
                                <div class="col-3 px-0">
                                    <div class="img text-end">
                                        <img src="<?= base_url(); ?>assets/images/v-total.png" class="img-fluid w-75" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="text">
                                        <p><?= $all->jml; ?></p>
                                        <small><?= @$_GET['lang'] == 'eng' ? 'Total Visitor' : 'Jumlah Pengunjung' ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <?= $website->map; ?>
            </div>
        </div>

    </div>
    <div class="container px-lg-5">
        <div class="copyright">

            <div class="row d-flex justify-content-center  text-center mt-4">
                <div class="col-xl-4 col-lg-6 col-md-7 col-sm-9 col-12">
                    <p>Copyright © 2022 - <a href="https://progimedia.com/" target="_blank">PROGIMEDIA</a> All Rights Reserved.
                        Powered by <a href="https://digitalindo.co.id/" target="_blank">Digitalindo</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up "></i></a>

<?php
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>
<div class="whatsapp-chat-section">
    <div class="icon-section">
        <img src="<?= base_url(); ?>assets/whatsapp/ic_whatsapp.png" id="whatsapp_chat" onclick="chatWhatsApp();">
    </div>
    <div id="whatsapp-chat-popup" class="animated bounceOutDown" style="z-index: 999999; display: none;">
        <div id="list-chat-section" class="list-chat-section animated fadeIn" style="display: block;">
            <div class="header-section" style="background:  linear-gradient(180deg, #2056A0 0%, #0264EB 100%)">
                <img class="close-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_close_btn.png" onclick="closechatWhatsApp();">
                <div class="header-avatar-section">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
                        <div class="avatar">
                            <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="https://admin103.servicelaptopmac.com/upload/wa_image/<?= $sec1->image; ?>">
                        </div>
                    <? } ?>
                </div>
                <div class="header-desc-section" style="margin-top: 15px;">
                    <p><?= @$_GET['lang'] == 'eng' ? 'We are ready to help you, please chat with our customer service.' : 'Kami siap membantu Anda, Silahkan chat dengan customer service kami.' ?>
                    </p>
                </div>
            </div>
            <div class="chat-section">
                <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec2) { ?>
                    <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                        <div class="avatar">
                            <img class="avatar" src="https://admin103.servicelaptopmac.com/upload/wa_image/<?= $sec2->image; ?>">
                        </div>
                        <div class="profile">
                            <p class="position">Customer Service </p>
                            <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                            <?php if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                                <small class="status">Online <span class="online"><i class="fas fa-circle "></i></span>
                                </small>
                            <? } else { ?>
                                <small class="status">Offline <span class="offline"><i class="fas fa-circle "></i></span>
                                </small>
                            <? } ?>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
        <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec3) { ?>
            <div class="chat-section animated fadeIn" id="customer_chat_<?= $sec3->id; ?>" style="display: none;">
                <div class="header-section" style="background: linear-gradient(180deg, #2056A0 0%, #0264EB 100%)">
                    <img class="back-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_back_btn.png" onclick="backListChat(<?= $sec3->id; ?>);">
                    <div class="header-avatar-section">
                        <div class="avatar">
                            <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="https://admin103.servicelaptopmac.com/upload/wa_image/<?= $sec3->image; ?>">
                        </div>
                    </div>
                    <div class="header-desc-section">
                        <h3><?= $sec3->nama; ?></h3>
                        <?php
                        $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                        ?>
                        <p><i class="fas fa-phone"></i> <?php echo $phone_split; ?></p>
                    </div>
                </div>
                <div class="inside-chat-section">
                    <div class="chat">
                        <div class="inside-chat">
                            <span><?= @$_GET['lang'] == 'eng' ? 'Hello, I am' : 'Halo saya' ?>
                                <?= ucwords(strtolower($sec3->nama)); ?>, <?= @$_GET['lang'] == 'eng' ? 'from' : 'dari' ?>
                                <?= $website->name; ?></span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="inside-chat">
                            <span><?= @$_GET['lang'] == 'eng' ? 'Can I help you ?' : 'Ada yang bisa saya bantu ?' ?></span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                        </div>
                    </div>
                </div>
                <div class="box-chat-section">
                    <div class="text">
                        <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>" value="<?= $sec3->phone; ?>">
                        <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>" name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);" onclick="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);" onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value="" placeholder="Type a message">
                    </div>
                    <div class="button-send">
                        <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img src="<?= base_url(); ?>assets/whatsapp/ic_send_message.png"></a>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/counterup/counterup.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url(); ?>assets/js/swiper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>
<script src="<?= base_url(); ?>assets/js/click-scroll.js"></script>

<script type="text/javascript">
    function chatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceOutDown')) {
            cek_class.classList.remove("bounceOutDown");
            cek_class.classList.add("bounceInUp");
            cek_class.style.display = "block";
        } else {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }

    function chatCustomer(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);

        if (id != 0 && id != '') {
            list_chat.style.display = "none";
            chat.style.display = "block";
        }
    }



    function closechatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceInUp')) {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }





    function backListChat(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);
        if (id != 0 && id != '') {
            chat.style.display = "none";
            list_chat.style.display = "block";
            $("#chat_wa_" + id).val('');
        }
    }



    function textChatWhatsapp(id) {
        var link_wa = 'https://api.whatsapp.com/send?';
        if (id != 0 && id != '') {
            var telp = $("#telp_wa_" + id).val();
            var chat = $("#chat_wa_" + id).val();
            var link = 'https://api.whatsapp.com/send?phone=62' + telp + '&text=' + chat;
            var btn = document.getElementById("btn_wa_" + id);
            btn.setAttribute("href", link);
        }
    }

    function myFunction() {
        var x = document.getElementById("contact");
        if (x.style.display === "none") {
            x.style.display = "block";
            document.getElementById("fa").style.transform = "rotate(90deg)";
        } else {
            x.style.display = "none";
            document.getElementById("fa").style.transform = "rotate(0)";
        }
    }
</script>


</body>

</html>