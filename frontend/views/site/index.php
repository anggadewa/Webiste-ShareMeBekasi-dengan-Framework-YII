<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;


$this->title = 'My Yii Application';
?>
<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="colorlib-logo"><a href="index.php">ShareMeBekasi</a></div>
                    </div>
                    <div class="col-md-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="index.php">Beranda</a></li>
                            <li class="has-dropdown">
                                <a href="index.php">Masyarakat</a>
                                <ul class="dropdown">
                                    <li><a href="index.php?r=site/signup">Registrasi</a></li>
                                    <li><a href="index.php?r=site/login">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
        <div class="overlay"></div>
        <!-- <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a> -->
        <div class="display-t text-center">
            <div class="display-tc">
                <div class="container">
                    <div class="col-md-12 col-md-offset-0">
                        <div class="animate-box">
                            <h2>Laporkan Semua Keluhan Anda Tentang Kota Bekasi</h2>
                            <p>Bangun Bekasi Menjadi Kota Yang Lebih Maju</p>
                            <p><a href="index.php?r=site/login" class="btn btn-primary btn-lg btn-custom">Kunjungi Website</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="colorlib-services colorlib-bg-truewhite">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-eye2"></i>
                        </span>
                        <div class="desc">
                            <h3>Laporkan Kejadian</h3>
                            <p>Laporkan seluruh kejdaian yang menjadi keresahan anda ke Pemerintah Bekasi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-zoom-in2"></i>
                        </span>
                        <div class="desc">
                            <h3>Lihat Laporan Lain</h3>
                            <p>Lihat laporan lain yang diberikan oleh seluruh masyarakats</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Informasi Website</h2>
                    <p>Website ini dibuat untuk seluruh masyarakat Bekasi agar dapat berinteraksi kapanpun dan dimanapun dengan pemerintah yang dapat di lakukan dengan melaporkan seluruh keluhan anda terhadap pelayanan instansi serta seluruh sarana yang ada di Bekasi. Mari bangun Kota Bekasi menjadi lebih maju dan melek teknologi!!!</p>
                </div>
            </div>
        </div>
    </div>

    <footer id="colorlib-footer">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-6 colorlib-widget">
                    <h4>Tentang ShareMeBekasi</h4>
                    <p>Sebuah website yang bergerak dalam bidang e-government yang dibuat untuk masyarakat Bekasi dan untuk memenuhi praktikum PWEB Lab. Ti Universitas Gunadarma</p>
                    <p>
                        <ul class="colorlib-social-icons">
                            <li><a href="https://www.twitter.com" target="_blank"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com" target="_blank"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com" target="_blank"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </p>
                </div>

                <div class="col-md-6 colorlib-widget">
                    <h4>Contact Info</h4>
                    <ul class="colorlib-footer-links">
                        <li>Universitas Gunadarma, <br> Kalimalang Bekasi</li>
                        <li><a href="#"><i class="icon-phone"></i> +62000000000</a></li>
                        <li><a href="https://www.google.jp" target="_blank"><i class="icon-envelope"></i>sharme@bekasi.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                           Copyright &copy;<script>document.write(new Date().getFullYear());</script> ShareMeBekasi <br> <br>This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br>
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </footer>
</div>