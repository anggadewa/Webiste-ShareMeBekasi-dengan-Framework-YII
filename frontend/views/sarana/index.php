<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Saranas';
// $this->params['breadcrumbs'][] = $this->title;
?>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

<!-- Animate.css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- Magnific Popup -->
<link rel="stylesheet" href="css/magnific-popup.css">

<!-- Owl Carousel -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<!-- Theme style  -->
<link rel="stylesheet" href="css/style.css">

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<div class="sarana-index">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="colorlib-logo"><a href="index.php?r=site/login">ShareMeBekasi</a></div>
                    </div>
                    <div class="col-md-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="index.php?r=site/login">Beranda</a></li>
                            <li class="has-dropdown">
                                <a href="index.php?r=site/login">Laporkan</a>
                                <ul class="dropdown">
                                    <li><a href="index.php?r=sarana/create">Sarana dan Prasana</a></li>
                                    <li><a href="index.php?r=instansi/create">Pelayanan Instansi Pemerintah Bekasi</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="index.php?r=site/login">Data Laporan</a>
                                <ul class="dropdown">
                                    <li><a href="index.php?r=sarana/index">Data Laporan SarPras</a></li>
                                    <li><a href="index.php?r=instansi/index">Data Laporan Instansi Pemerintah</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="index.php?r=site/logout">Logout</a></li> -->
                            <li class="has-dropdown">
                                <a href="index.php?r=site/login">Akun</a>
                                <ul class="dropdown">
                                    <li>
                                        <?php 
                                        if (Yii::$app->user->isGuest) {

                                            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                                        } else {
                                            $menuItems[] = '<li>'
                                            . Html::beginForm(['/site/logout'], 'post')
                                            . Html::submitButton(
                                             'Logout (' . Yii::$app->user->identity->username . ')',
                                             ['class' => 'btn btn-link logout']
                                         )
                                            . Html::endForm()
                                            . '</li>';
                                        }
                                        echo Nav::widget([
                                            'options' => ['class' => 'navbar-nav navbar-right'],
                                            'items' => $menuItems, 
                                        ]);
                                        ?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="video-hero" style="height: 500px;" data-section="home">
        <div class="overlay"></div>
        <div class="display-t text-center">
            <div class="display-tc">
                <div class="container">
                    <div class="col-md-12 col-md-offset-0">
                        <div class="animate-box">
                            <br><br><br>
                            <h2>Halaman Hasil Lapor Sarana</h2>
                            <div class="row" style="color: black">
                                <!-- <div class="col-lg-4"></div> -->
                                <div class="col-lg-12">
                                    <p>
                                        <?= Html::a('Tambah Saran', ['create'], ['class' => 'btn btn-success']) ?>
                                    </p>
                                </div>
                                <!-- <div class="col-lg-4"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="colorlib-services colorlib-bg-truewhite">
        <div class="container">
            <div class="row" style="color: black">
                <div class="col-lg-12 text-center animate-box">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                                            //['class' => 'yii\grid\SerialColumn'],

                                            //'id_saran',
                            'username', 
                            'nama',
                            'saran:ntext',
                            'target',
                            'waktu',

                                            // ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- YTPlayer -->
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="js/jquery.countTo.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</div>
