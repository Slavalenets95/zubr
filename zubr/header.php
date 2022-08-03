<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onlinegroup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Marcellus&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"><?php wp_head(); ?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/assets/imgs/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/imgs/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/assets/imgs/favicon-16x16.png">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site">
	<header class="header">
		<div class="header-container">
			<div class="header-top">
				<a href="<?= get_home_url() ?>" class="header-logo">
					<img style="max-height: 80px;" src="<?= get_template_directory_uri() . '/assets/imgs/header-logo.jpg' ?>" alt="logo">
				</a>
              	
                  	
                  	<!--<div class="header-top__clock">
                  		<svg style="width: 30px; height: 30px;" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 120.39 122.88"><path d="M110.82,30a4.54,4.54,0,0,0-7.63,4.91,50.2,50.2,0,0,1,3.92,7.34,4.53,4.53,0,0,0,8.32-3.61A59.17,59.17,0,0,0,110.82,30Zm-7.89-13.61a5.51,5.51,0,0,1,.33,1.57,5.05,5.05,0,0,1-3.52,5.62L86.27,27.72a5,5,0,0,1-2.92-9.65l1.28-.39a50.55,50.55,0,0,0-10.19-4.19A51.17,51.17,0,1,0,60.22,113.81c1.36,0,2.6,0,4-.13a48,48,0,0,0,5.73-.75,4.54,4.54,0,1,1,1.7,8.91,59.3,59.3,0,0,1-6.78.88c-1.52.11-3.1.16-4.63.16A60.23,60.23,0,1,1,89.71,10.16l-1.26-3.3a5.06,5.06,0,1,1,9.45-3.6l5,13.15ZM51,38.11a4.67,4.67,0,0,1,9.33,0V66.5l19.43,8.55A4.65,4.65,0,1,1,76,83.57L54,73.91a4.67,4.67,0,0,1-3-4.37V38.11Zm34.55,69.15a4.53,4.53,0,0,0,4.45,7.9,55.69,55.69,0,0,0,8.12-5.5,4.54,4.54,0,1,0-5.7-7.06,46.89,46.89,0,0,1-6.87,4.66Zm17.87-17a4.53,4.53,0,1,0,7.69,4.8,61.14,61.14,0,0,0,4.51-8.69,4.54,4.54,0,1,0-8.37-3.5,51.73,51.73,0,0,1-3.83,7.39Zm7.77-23.54a4.53,4.53,0,0,0,9,.7,61.54,61.54,0,0,0,0-9.79,4.54,4.54,0,1,0-9,.76,52.65,52.65,0,0,1,0,8.33Z"/></svg>
                      	<p>
                          	<?= pll__('work time') ?></br>
                  			<?= pll__('day off') ?>
                      	</p>
                  	</div>-->
              	
				<div class="header-top__ui-block">
					<ul class="header-top__social-list">
						<li class="header-top__social-list-item">
							<a href="https://www.facebook.com/people/Zubr-Company/100066990624241/" class="header-top__social-list-link" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
                      	<li class="header-top__social-list-item">
							<a href="#" class="header-top__social-list-link" target="_blank">
								<i class="fa fa-telegram" aria-hidden="true"></i>
							</a>
						</li>
						<li class="header-top__social-list-item">
							<a href="https://www.instagram.com/zubrcom/" class="header-top__social-list-link" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li class="header-top__social-list-item">
							<a href="https://www.linkedin.com/company/zubr-company" class="header-top__social-list-link" target="_blank">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
					<a href="#" class="header-top__link-btn cb-btn trans-all"><?= pll__('contact us') ?></a>
				</div>
              	<button class="header-top__menu-btn">
              		<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 50 50" width="50px" height="50px"><path d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"/></svg>
              	</button>
              <div class="header__lang-switcher">
				<?php 
					$langs_array = pll_the_languages( array( 'dropdown' => 1, 'hide_current' => 0, 'raw' => 1 ) );
				?>


				<?php if ($langs_array) : ?>
				  <div class="drop-block lang">
				    <div class="lang-list">
						<?php 	$count = 0;
                      			foreach ($langs_array as $key => $lang) : $count++;
                      			$locale = str_replace('_', '-', get_locale());
                          		if($lang['locale'] === $locale) :
                      				
                                                  
                      				$span = $lang['locale'] === 'ru-RU' ?  '' : '<span style="color: #333;"> - </span>';
                      	?>
                      			<span class="lang-active"> <?= $lang['slug'] . $span ?> </span>
                      	<?php else : ?>
                      			<a href="<?php echo $lang['url']; ?>" class="drop-block__link">
				    	    		<?php if($count !== count($langs_array)) {
  											echo $lang['slug'] . ' - ';
									} else {
											echo $lang['slug'];
									}?>
				    	    	</a>
                      	<?php endif; ?>
				    	  
				    	<?php endforeach; ?>
					</div>
				  </div>
				<?php endif; ?>
				</div>
      			
			</div>
  			
			<div class="header-bottom">
              	<div class="header-bottom__mobile-header">
                	<span>Меню</span>
              	</div>
              	<button class="header-bottom__back-btn">
              		<svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 500 511.61"><path fill-rule="nonzero" d="m218.54 261.95 15.5 101.27c.56 3.8-.47 7.81-3.19 10.93-4.92 5.64-13.5 6.24-19.14 1.32L4.64 195.09l-1.53-1.59c-4.77-5.76-3.96-14.32 1.8-19.08L211.98 3.08c2.99-2.41 6.96-3.59 11.03-2.87 7.34 1.31 12.22 8.35 10.91 15.69l-15.44 85.83c17.97 2.09 37.59 6.57 57.77 13.36 52.66 17.69 109.96 51.41 153.32 100.33 43.79 49.39 73.45 114.21 70.18 193.61-1.17 28.92-6.76 59.73-17.63 92.34-1.34 5.29-5.82 9.46-11.55 10.14-7.44.88-14.19-4.44-15.06-11.87-11.94-100.09-50.53-158.11-98.25-191.8-42.66-30.12-93.19-41.36-138.72-45.89z"/></svg>
              	</button>
              	<button class="header-bottom__close-svg">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="121.31px" height="122.876px" viewBox="0 0 121.31 122.876" enable-background="new 0 0 121.31 122.876" xml:space="preserve"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M90.914,5.296c6.927-7.034,18.188-7.065,25.154-0.068 c6.961,6.995,6.991,18.369,0.068,25.397L85.743,61.452l30.425,30.855c6.866,6.978,6.773,18.28-0.208,25.247 c-6.983,6.964-18.21,6.946-25.074-0.031L60.669,86.881L30.395,117.58c-6.927,7.034-18.188,7.065-25.154,0.068 c-6.961-6.995-6.992-18.369-0.068-25.397l30.393-30.827L5.142,30.568c-6.867-6.978-6.773-18.28,0.208-25.247 c6.983-6.963,18.21-6.946,25.074,0.031l30.217,30.643L90.914,5.296L90.914,5.296z"/></g></svg>
              	</button>
				<?php 
					wp_nav_menu( [
						'theme_location'  => 'header_menu',
						'menu'            => 'header_menu',
						'container'       => 'nav',
						'container_class' => 'header-nav',
						'menu_class'      => 'menu',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					] );
				?>
              <div class="header-top__contact-block pc">
    			<div class="header-top__contacts">
      				<svg style="width: 30px; height: 30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3333 3333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M1667 0c920 0 1667 746 1667 1667 0 920-746 1667-1667 1667C747 3334 0 2588 0 1667 0 747 746 0 1667 0zm700 952c-175-175-407-271-655-271-510 0-925 415-925 925 0 163 43 322 124 462l-131 480 491-129c135 74 287 113 442 113 510 0 925-415 925-925 0-247-96-480-271-655zm-654 1424c-138 0-274-37-392-107l-28-17-291 76 78-284-18-29c-77-122-118-264-118-409 0-424 345-769 770-769 205 0 399 80 544 225 145 146 225 338 225 544 0 424-345 770-769 770zm422-576c-23-12-137-67-158-75s-37-12-52 12c-15 23-60 75-73 91-14 15-27 18-50 6s-98-36-186-115c-69-61-115-137-129-160s-2-36 10-47c11-10 23-27 35-41s15-23 23-39c8-15 4-29-2-41s-52-125-71-172c-19-45-38-39-52-40s-29-1-44-1-40 6-62 29c-21 23-81 79-81 193s83 224 94 239c12 15 163 249 395 349 55 24 98 38 132 49 55 17 106 15 146 9 44-7 137-56 156-110s19-100 14-110-21-16-44-28z"/></svg>  
        
      			<div>
      				<a class="header-top__contact-link" href="https://api.whatsapp.com/send?phone=+487234775131">
        				<span>+ 48 724 775 131</span>
      				</a>
      	
      				<a class="header-top__contact-link" href="https://api.whatsapp.com/send?phone=+48791624825">
        				<span>+ 48 791 624 825</span>
      				</a>
      			</div>
      
    			</div>
    			<a class="header-top__contact-link" href="mailto:zubrcompl@gmail.com" >
    				<svg style="width: 30px; height: 30px;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.88"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><path class="cls-1" d="M61.44,0A61.44,61.44,0,1,1,0,61.44,61.44,61.44,0,0,1,61.44,0ZM30.73,38,62,63.47,91.91,38Zm-2,42.89L51,58.55,28.71,40.39V80.87ZM53.43,60.55l-22.95,23H92.21l-21.94-23L63,66.71h0a1.57,1.57,0,0,1-2,0l-7.59-6.19Zm19.24-2,21.5,22.54V40.19L72.67,58.51Z"/></svg>
      					<span>zubrcompl@gmail.com</span>
    			</a>
			</div>
              <div class="header__lang-switcher">
				<?php 
					$langs_array = pll_the_languages( array( 'dropdown' => 1, 'hide_current' => 0, 'raw' => 1 ) );
				?>


				<?php if ($langs_array) : ?>
				  <div class="drop-block lang">
				    <div class="lang-list">
						<?php 	$count = 0;
                      			foreach ($langs_array as $key => $lang) : $count++;
                      			$locale = str_replace('_', '-', get_locale());
                          		if($lang['locale'] === $locale) :
                      				
                                                  
                      				$span = $lang['locale'] === 'ru-RU' ?  '' : '<span style="color: #333;"> - </span>';
                      	?>
                      			<span class="lang-active"> <?= $lang['slug'] . $span ?> </span>
                      	<?php else : ?>
                      			<a href="<?php echo $lang['url']; ?>" class="drop-block__link">
				    	    		<?php if($count !== count($langs_array)) {
  											echo $lang['slug'] . ' - ';
									} else {
											echo $lang['slug'];
									}?>
				    	    	</a>
                      	<?php endif; ?>
				    	  
				    	<?php endforeach; ?>
					</div>
				  </div>
				<?php endif; ?>
				</div>
              <ul class="header-bottom__social-list">
						<li class="header-bottom__social-list-item">
							<a href="https://www.facebook.com/people/Zubr-Company/100066990624241/" class="header-top__social-list-link" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
                		<li class="header-bottom__social-list-item">
							<a href="#" class="header-top__social-list-link" target="_blank">
								<i class="fa fa-telegram" aria-hidden="true"></i>
							</a>
						</li>
						<li class="header-bottom__social-list-item">
							<a href="https://www.instagram.com/zubrcom/" class="header-top__social-list-link" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li class="header-bottom__social-list-item">
							<a href="https://www.linkedin.com/company/zubr-company" class="header-top__social-list-link" target="_blank">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
              <div class="header-top__contact-block">
                  	<div class="header-top__contact">
                      	<div>
                      		<svg style="width: 30px; height: 30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3333 3333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M1667 0c920 0 1667 746 1667 1667 0 920-746 1667-1667 1667C747 3334 0 2588 0 1667 0 747 746 0 1667 0zm700 952c-175-175-407-271-655-271-510 0-925 415-925 925 0 163 43 322 124 462l-131 480 491-129c135 74 287 113 442 113 510 0 925-415 925-925 0-247-96-480-271-655zm-654 1424c-138 0-274-37-392-107l-28-17-291 76 78-284-18-29c-77-122-118-264-118-409 0-424 345-769 770-769 205 0 399 80 544 225 145 146 225 338 225 544 0 424-345 770-769 770zm422-576c-23-12-137-67-158-75s-37-12-52 12c-15 23-60 75-73 91-14 15-27 18-50 6s-98-36-186-115c-69-61-115-137-129-160s-2-36 10-47c11-10 23-27 35-41s15-23 23-39c8-15 4-29-2-41s-52-125-71-172c-19-45-38-39-52-40s-29-1-44-1-40 6-62 29c-21 23-81 79-81 193s83 224 94 239c12 15 163 249 395 349 55 24 98 38 132 49 55 17 106 15 146 9 44-7 137-56 156-110s19-100 14-110-21-16-44-28z"/></svg>  
                          	<div>
                              	<a class="header-top__contact-link" href="https://api.whatsapp.com/send?phone=+48724775131">
                        			<span>+ 48 724 775 131</span>
                      			</a>
                          		<a class="header-top__contact-link" href="https://api.whatsapp.com/send?phone=+48791624825">
                        			<span>+48 791 624 825</span>
                      			</a>
                          	</div>
                      	</div>
                  		
       
                      	<a class="header-top__contact-link" href="mailto:zubrcompl@gmail.com" >
                        	<svg style="width: 30px; height: 30px;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.88"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><path class="cls-1" d="M61.44,0A61.44,61.44,0,1,1,0,61.44,61.44,61.44,0,0,1,61.44,0ZM30.73,38,62,63.47,91.91,38Zm-2,42.89L51,58.55,28.71,40.39V80.87ZM53.43,60.55l-22.95,23H92.21l-21.94-23L63,66.71h0a1.57,1.57,0,0,1-2,0l-7.59-6.19Zm19.24-2,21.5,22.54V40.19L72.67,58.51Z"/></svg>
                          	<span>zubrcompl@gmail.com</span>
                      	</a>
                  	</div>
                  	<!--<div class="header-top__clock">
                  		<svg style="width: 30px; height: 30px;" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 120.39 122.88"><path d="M110.82,30a4.54,4.54,0,0,0-7.63,4.91,50.2,50.2,0,0,1,3.92,7.34,4.53,4.53,0,0,0,8.32-3.61A59.17,59.17,0,0,0,110.82,30Zm-7.89-13.61a5.51,5.51,0,0,1,.33,1.57,5.05,5.05,0,0,1-3.52,5.62L86.27,27.72a5,5,0,0,1-2.92-9.65l1.28-.39a50.55,50.55,0,0,0-10.19-4.19A51.17,51.17,0,1,0,60.22,113.81c1.36,0,2.6,0,4-.13a48,48,0,0,0,5.73-.75,4.54,4.54,0,1,1,1.7,8.91,59.3,59.3,0,0,1-6.78.88c-1.52.11-3.1.16-4.63.16A60.23,60.23,0,1,1,89.71,10.16l-1.26-3.3a5.06,5.06,0,1,1,9.45-3.6l5,13.15ZM51,38.11a4.67,4.67,0,0,1,9.33,0V66.5l19.43,8.55A4.65,4.65,0,1,1,76,83.57L54,73.91a4.67,4.67,0,0,1-3-4.37V38.11Zm34.55,69.15a4.53,4.53,0,0,0,4.45,7.9,55.69,55.69,0,0,0,8.12-5.5,4.54,4.54,0,1,0-5.7-7.06,46.89,46.89,0,0,1-6.87,4.66Zm17.87-17a4.53,4.53,0,1,0,7.69,4.8,61.14,61.14,0,0,0,4.51-8.69,4.54,4.54,0,1,0-8.37-3.5,51.73,51.73,0,0,1-3.83,7.39Zm7.77-23.54a4.53,4.53,0,0,0,9,.7,61.54,61.54,0,0,0,0-9.79,4.54,4.54,0,1,0-9,.76,52.65,52.65,0,0,1,0,8.33Z"/></svg>
                      	<p>
                          	<?= pll__('work time') ?></br>
                  			<?= pll__('day off') ?>
                      	</p>-->
                  	</div>
              	</div>
			</div>
		</div>
	</header>


	
