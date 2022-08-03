<?php get_header(); 
 $lang = pll_current_language(); ?>

<main class="archive-project">
    <div class="archive-project__container">
        <h1 class="archive-project__title">
      		<?php if($lang === 'ru') {
				echo 'Проекты';
			} else if($lang === 'en') {
				echo 'Projects';
			} else if($lang === 'pl') {
				echo 'Projektowanie';
			}
          ?>
      	</h1>
        <div class="archive-project__items">
            <?php 
                while(have_posts()) : the_post(); $post = get_post();
                $thumbnailUrl = get_the_post_thumbnail_url();
                $link = get_permalink();
            ?>
                <a class="archive-project__item" href="<?= $link ?>">
                    <img src="<?= $thumbnailUrl ?>" class="archive-project__img">
                    <div class="archive-project__item-hidden">
                        <h3 class="archive-project__item-title"><?= get_field('project_post_title', $post) ?></h3>
                    </div>
                    <div></div>
                </a>

            <?php endwhile; ?>
        </div>
    </div>
</main>

<?php get_footer() ?>