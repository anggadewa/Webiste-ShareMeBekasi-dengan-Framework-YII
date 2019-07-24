<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $model->id_saran;
$this->params['breadcrumbs'][] = ['label' => 'Saranas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <h1 style="color: white">Admin</h1>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <li class="active"> <a href="index.php?r=site/login" aria-expanded="true"><i class="ti-dashboard"></i><span>Beranda</span></a>
                        </li>
                        <li><a href="index.php?r=sarana/index"><i class="ti-map-alt"></i> <span>Hasil Laporan Sarana Prasarana</span></a></li>
                        <li><a href="index.php?r=instansi/index"><i class="ti-receipt"></i> <span>Hasil Laporan Instansi Pemerintah</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
        <!-- header area start -->
        <div class="header-area">
            <div class="row align-items-center">
                <!-- nav and search button -->
                <div class="col-md-6 col-sm-8 clearfix">
                    <div class="nav-btn pull-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- profile info & task notification -->

            </div>
        </div>
        <!-- header area end -->
        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Sarana</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.php">Home</a></li>
                            <li><span>Sarana</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">
                    <div class="user-profile pull-right">
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu">
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
<!--                                 <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            -->                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <br><br><br><br>
                <!-- <center><h1>Hai Admin Selamat Datang :)</h1></center> <br><br><br><br> -->
                <div class="row">
                    <div class="col-lg-12">
                       <center> <p>
                            <?= Html::a('Update', ['update', 'id' => $model->id_saran], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id' => $model->id_saran], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </p>
                    </center> <br>

                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id_saran',
                                'username',
                                'nama',
                                'saran:ntext',
                                'target',
                                'waktu',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
            <!-- row area end -->
        </div>
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
        </div>
    </footer>
    <!-- footer area end-->
</div>