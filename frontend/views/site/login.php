<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
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
<div class="site-login">

   <div class="colorlib-loader"></div>
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
                  <a href="#">Masyarakat</a>
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

<section id="home" class="video-hero" style="height: 1000px;" data-section="home">
  <div class="overlay"></div>
  <div class="display-t text-center">
    <div class="display-tc">
      <div class="container">
        <div class="col-md-12 col-md-offset-0">
          <div class="animate-box">
            <br><br><br>
            <h2>Halaman Login</h2>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="row">
                    <div class="col-lg-4">
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                        <?= $form->field($model, 'username')->textInput() ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
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
