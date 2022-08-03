<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package onlinegroup
 */

get_header();
?>

<div class="blog-archive">
    <div class="blog-archive__container">
      	<div class="blog-archive__top-img-block">
      		<img src="<?= get_template_directory_uri() ?>/assets/imgs/blog-archive.png" />
      	</div>
      	<div class="blog-archive__plug sd-styles">
          	<p style="text-align: center;">
          		<?= pll__('plug') ?>
          	</p>
      	</div>
      	<!-- 
			<div class="blog-archive__items">
            <?php if(have_posts()) : 
                    while(have_posts()) : the_post();
                        $thumbnailUrl = get_the_post_thumbnail_url();
                        $link = get_permalink();
                        $title = get_the_title();
                        $date = get_the_date('n/j/Y');
                        $description = get_the_excerpt();    
            ?>
                <div class="blog-archive__item">
                    <div class="blog-archive__item-header">
                        <span class="blog-archive__item-date"><?= $date ?></span>
                    </div>
                    <h2 class="blog-archive__item-title">
                        <a href="<?= $link ?>"><?= $title ?></a>
                    </h2>
                    <div class="blog-archive__item-body">
                        <a class="blog-archive__item-body-link" href="<?php $link ?>"><img class="blog-archive__item-img" src="<?= $thumbnailUrl ?>"></a>
                        <div class="blog-archive__item-descr">
                            <?= $description ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="pagination-wrapper">
            <?php wp_pagenavi(); ?>
        </div>
		-->
    </div>
</div>


<?php
get_footer();
