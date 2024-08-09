<!DOCTYPE html>
<html dir="ltr" lang="ru-RU">
<head>
	<!-- Document Title
	============================================= -->
	<title><?php wp_title('|', true, 'right'); ?> и области</title>
	<meta name="description" content="<?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?> <?php the_excerpt(); bloginfo('description');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Юрий Шанти" />

	<!-- Stylesheets
	============================================= -->
	<link rel="icon" href="https://seoshanti.ru/favicon-seoshanti-ru.ico" type="image/x-icon">
	<link href="http://fonts.googleapis.com/css?family=Heebo:300,400,500,700,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri();?>/style.css" type="text/css" />

	<link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/custom.css" type="text/css" />

	<!-- Freelancer Demo Specific Stylesheet -->
	<link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/fonts.css" type="text/css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri();?>/freelancer.css" type="text/css" />


	<link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/colors.php?color=f7c25e" type="text/css" />

	<?php wp_head();?>

<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(22153841, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/22153841" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

<div id="top-bar" class="transparent-topbar">
			<div class="container clearfix">

				<div class="row justify-content-between">
					<div class="col-12 col-md-auto">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="/contact/">Продвижение сайтов</a></li>
								<li class="top-links-item"><a href="mailto:info@seoshanti.ru">info@seoshanti.ru</a></li>
								<li class="top-links-item"><a href="tel:+74991668012">+7 499 166 80 12</a></li>
							</ul>
						</div><!-- .top-links end -->

					</div>

					<div class="col-12 col-md-auto dark">

						<!-- Top Social
						============================================= -->
						<ul id="top-social">
							<li><a href="https://vk.com/seoshanti" class="si-vk" target="_blank"><span class="ts-icon"><i class="icon-vk"></i></span><span class="ts-text">ВКонтакте</span></a></li>
							<li><a href="https://wa.me/79150775852" class="si-whatsapp" target="_blank"><span class="ts-icon"><i class="icon-whatsapp"></i></span><span class="ts-text">WhatsApp</span></a></li>
							<li><a href="https://t.me/seoalena" class="si-vk" target="_blank"><span class="ts-icon"><i class="icon-telegram"></i></span><span class="ts-text">Telegram</span></a></li>
							<!-- <li><? get_search_form(); ?></li> -->
							<li>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>								
							</li>
							<!-- <li><a href="tel:+74991668012" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+7 499 166 80 12</span></a></li>
							<li><a href="mailto:info@seoshanti.ru" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@seoshanti.ru</span></a></li> -->
						</ul><!-- #top-social end -->

					</div>
				</div>

			</div>
		</div>		


		<!-- Header
		============================================= -->
		<header id="header" class="border-bottom-0 transparent-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="/" class="standard-logo" data-dark-logo="<?=get_template_directory_uri();?>/images/webshanti-logo.png"><img src="<?=get_template_directory_uri();?>/images/webshanti-logo.png" alt="веб студия шанти"></a>
							<a href="/" class="retina-logo" data-dark-logo="<?=get_template_directory_uri();?>/images/webshanti-logo.png"><img src="<?=get_template_directory_uri();?>/images/webshanti-logo.png" alt="веб студия шанти"></a>
						</div><!-- #logo end -->

						<!-- <div class="header-misc">

							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div>

							<a href="#" class="button button-rounded ms-3 d-none d-sm-block">Оставить заявку</a>

						</div> -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="/"><div>Главная</div></a></li>
								<li class="menu-item"><a class="menu-link" href="/about/"><div>О нас</div></a></li>
								<li class="menu-item"><a class="menu-link" href="/portfolio/"><div>Наши работы</div></a></li>
								<li class="menu-item mega-menu"><div class="menu-link"><div>Услуги</div></div>
									<div class="mega-menu-content mega-menu-style-2 px-0">
										<div class="container">
											<div class="row">
												<a href="#" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-content">
															<div class="fakeTitle nott ls0">SEO продвижение</div>
															<p></p>
														</div>
													</div>
												</a>
												<a href="#" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-content">
															<div class="fakeTitle nott ls0">Создание сайтов</div>
															<p></p>
														</div>
													</div>
												</a>
												<a href="#" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-content">
															<div class="fakeTitle nott ls0">Продвижение в социальных сетях</div>
															<p></p>
														</div>
													</div>
												</a>
												<a href="#" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-content">
															<div class="fakeTitle nott ls0">Поддержка сайта</div>
															<p></p>
														</div>
													</div>
												</a>
												<a href="#" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-content">
															<div class="fakeTitle nott ls0">Хостинг сайтов</div>
															<p></p>
														</div>
													</div>
												</a>
												<a href="#" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-content">
															<div class="fakeTitle nott ls0">Контекстная реклама</div>
															<p></p>
														</div>
													</div>
												</a>
												<!-- <div class="mega-menu-column sub-menu-container col-12 p-0">
													<a href="#" class="button button-rounded button-large nott ls0 w-100 text-center m-0 rounded-0 py-3 button-light ">Смотреть все <i class="icon-line-arrow-right"></i></a>
												</div> -->
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item"><a class="menu-link" href="/blog/"><div>Статьи</div></a></li>
								<li class="menu-item"><a class="menu-link" href="/faq/"><div>FAQ</div></a></li>
								<li class="menu-item"><a class="menu-link" href="/price/"><div>Цены</div></a></li>
								<li class="menu-item"><a class="menu-link" href="/contact/"><div>Контакты</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<!-- <form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Введите &amp; запрос.." autocomplete="off">
						</form> -->

					</div>
				</div>
			</div>
		</header><!-- #header end -->

<?php if ( ! is_front_page() ) : ?>
        <section id="page-title" class="page-title-mini">

            <div class="container clearfix">
                <h1><?wp_title();?></h1>
            </div>

        </section><!-- #page-title end -->
<?php endif; ?>

<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
