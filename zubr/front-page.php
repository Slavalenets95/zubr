<?php
    get_header();
?>

    <main class="front-page">
        <div class="front-page__container">
            <div class="intro-slider">
                <?php if(have_rows('intro_slider_repeater')) : 
                        while(have_rows('intro_slider_repeater')) : the_row();
                            $img = get_sub_field('img');
                            $imgAlt = $img['alt'] ? $img['alt'] : $imt['title'];
                            $imgUrl = $img['url'];
                ?>
                    <div class="intro-slider__slide">
                        <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="intro-slider__img">
                    </div>
                    
                <?php endwhile; endif; ?>
            </div>

            <div class="front-page__content services-page__content">
                <?= get_the_content() ?>
            </div>

            <div class="preview-slider">
                <?php
                    if(have_rows('preview_slider_repeater')) :
                        while(have_rows('preview_slider_repeater')) : the_row();
                            $img = get_sub_field('img');
                            //$link = get_sub_field('link');
                            $imgAlt = $img['alt'] ? $img['alt'] : $imt['title'];
                            $imgUrl = $img['sizes']['medium'];
                            //$linkUrl = $link['url'];
                            //$linkTxt = $link['title'];
                            $txt = get_sub_field('txt');
                ?>
                    <div class="preview-slider__slide">
                        <div>
                        	<div href="<?= $linkUrl ?>">
                            	<img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="preview-slider__slide-img">
                        	</div>
                        	<p class="preview-slider__slide-txt"><?= $txt ?></p>
                       		<!-- <a class="preview-slider__slide-link trans-all" href="<?= $linkUrl ?>">
                            	+ <?= $linkTxt ?>
                        	</a>  -->
                      	</div>
                    </div>  
                <?php endwhile; endif; ?>
            </div>
        </div>
    </main>

<?php
    get_footer();