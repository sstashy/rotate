<?php
include("server/control.php");
?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
		<meta charset="UTF-8">
		<meta charset="ISO-8859-1">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="MERCY - Checker 2023">

				<link rel="shortcut icon" type="image/x-icon" href="https://i.hizliresim.com/hs1331h.png" />

               <title>Rotate Checker</title>

        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />    
		
        <link href="assets/css/style.css" rel="stylesheet"/>
        <link href="assets/css/skin-modes.css" rel="stylesheet"/>
        <link href="assets/css/dark-style.css" rel="stylesheet"/>


        <link href="assets/css/sidemenu.css" rel="stylesheet" id="sidemenu">

        <link href="assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

        <link href="assets/css/icons.css" rel="stylesheet"/>

        <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">
		<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />


        <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="assets/switcher/css/switcher.css" rel="stylesheet">
        <link href="assets/switcher/demo.css" rel="stylesheet">

    </head>

	<body class="app sidebar-mini dark-mode">
		
		<div id="global-loader">
			<img src="assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>

		<div class="page">
			<div class="page-main">
				<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="side-header">
						<a class="header-brand1" href="index.php">
							ROTATE CHECKER
						</a>
					
                     </div>
					 <br>
					<ul class="side-menu">
						<li>
							<a class="side-menu__item" href="check.decart"><i class="side-menu__icon ti-home"></i><span class="side-menu__label"   style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif);">Ana Sayfa</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa-solid fa-address-card"></i></i><span class="side-menu__label"   style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif);">Sorgu Çözümleri</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
							<li><a href="adsoyad.decart" class="slide-item">Ad Soyad Sorgu</a></li>
							<li><a href="adsoyadvip.decart" class="slide-item">Ad Soyad Pro Sorgu</a></li>
								<li><a href="tc.decart" class="slide-item">T.C Sorgu 2023</a></li>
								
								
								<li><a href="ailepre.decart" class="slide-item">Aile Sorgu</a></li>
								<li><a href="sülale.decart" class="slide-item">Soyağacı Sorgu</a></li>
								
							</ul>
                          </li>					
						
					   <li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa-solid fa-home"></i><span class="side-menu__label"   style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif);">Adres Sorgular</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								
								<li><a href="adres2023.php" class="slide-item">Adres 2023</a></li>
                          </ul>
</li>
					 
					   <li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa-solid fa-user"></i><span class="side-menu__label"   style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif);">Kişi Sorgu</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
							<li><a href="tcpro.php" class="slide-item">T.C Sorgu PRO</a></li>
							
                          </ul>
</li>
							
								<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa-solid fa-mobile-screen"></i><span class="side-menu__label"  style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif);">Telefon Çözümleri</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
							<li><a href="tcgsm.decart" class="slide-item">TC-GSM Sorgu</a></li>
								<li><a href="gsmtc.decart" class="slide-item">GSM-TC Sorgu</a></li>
								<li><a href="smsbomber.decart" class="slide-item">SMS Bomber</a></li>
								<li><a href="operator.php" class="slide-item">Operator Sorgu</a></li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa-solid fa-star"></i><span class="side-menu__label"  style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif);">Araçlar</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								
								<li><a href="ddos.decart" class="slide-item">DDoS Attack</a></li>
								<li><a href="cimer.decart" class="slide-item">Cimer İhbar</a></li>
							</ul>
						</li>
						<?php if ($angeris['role'] == 1) { ?>

							<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa-solid fa-user-shield"></i><span class="side-menu__label"  style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif);">Admin Menu</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="usercreate.decart" class="slide-item">Kullanıcı Ekle</a></li>
								<li><a href="banned.decart" class="slide-item">Ban Listesi</a></li>
							</ul>
						</li>
							
						<?php } ?>

						<?php if ($angeris['owner'] == 1) { ?>

							<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa-solid fa-hard-drive"></i><span class="side-menu__label"  style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif);">Sunucu İşlemleri</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="duyuru.decart" class="slide-item">Duyuru Ekle</a></li>
								<li><a href="duyurular.decart" class="slide-item">Duyuru Listesi</a></li>
								<li><a href="admincreate.decart" class="slide-item">Admin Ekle</a></li>
								<li><a href="adminlist.decart" class="slide-item">Admin Listesi</a></li>
								<li><a href="users.decart" class="slide-item">Kullanıcılar</a></li>
							</ul>
						</li>
							
						<?php } ?>
						
						
					</ul>
				</aside>
				<div class="mobile-header">
					<div class="container-fluid">
						<div class="d-flex">
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
							<a class="header-brand" href="index.html">
							
							</a>
							<div class="d-flex order-lg-2 ms-auto header-right-icons">

								<div class="dropdown profile-1">
									<a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
										<span>
											<img src="https://i.hizliresim.com/hs1331h.png" alt="profile-user" class="avatar  profile-user brround cover-image">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-0"><?=$angeris['key_ad']?></h5>
												<small class="text-muted"><?php if ($angeris['role'] == 1) {
													echo "root@Admin";
												}elseif ($angeris['role'] == 2) {
													echo "root@Premium";
												} ?>
												</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="logout.decart">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i>Çıkış Yap
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="app-content">
					<div class="side-app">

						<div class="page-header">

							
						<div>
							<h1 class="page-title"><i class="fa-brands fa-telegram"></i>   <a href="https://t.me/rotatechecker">t.me/rotatechecker ❤️</a></h1>
						</div>

						<div class="d-flex  ms-auto header-right-icons header-search-icon">
								<div class="dropdown d-sm-flex">
									<div class="dropdown-menu header-search dropdown-menu-start">
										<div class="input-group w-100 p-2">
										</div>
									</div>
								</div>

								<div class="dropdown d-md-flex notifications">
									
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
										<div class="notifications-menu">
											
										</div>
										<div class="dropdown-divider"></div>
										
									</div>
								</div>
								<div class="dropdown d-md-flex message">
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
										<div class="message-menu">
										</div>
										<div class="dropdown-divider"></div>
									
									</div>
								</div>
								<div class="dropdown profile-1">
								<a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
										<span>
											<img src="https://i.hizliresim.com/hs1331h.png" alt="profile-user" class="avatar  profile-user brround cover-image">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-0"><?=$angeris["key_ad"]?></h5>
												<small class="text-muted">
													<?php 
													if ($angeris['role'] == 1) {
														echo "root@Admin";
													}elseif ($angeris['role'] == 2) {
														echo "root@Premium";
													}
													?>
												</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="logout.decart">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Çıkış Yap
										</a>
									</div>
								</div>
								<div class="dropdown d-md-flex header-settings">
									
								</div>
							</div>
						</div>