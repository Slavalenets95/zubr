<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package onlinegroup
 */

get_header();
?>

<main class="blog-page">
    <div class="blog-page__container">
        <div class="blog-page__header">
            <div class="blog-page__date-block">
                <?= get_the_date('n/j/Y'); ?>
            </div>
            <h1 class="blog-page__title"><?= get_the_title() ?></h1>
        </div>
        <?php
            if(have_rows('constructor')) :
                while(have_rows('constructor')) : the_row();
                    $rowName = get_row_layout();
            
                    if(file_exists('wp-content/themes/onlinegroup/template-parts/' . $rowName . '.php')) {
                        get_template_part('template-parts/' . $rowName);
                    }
                
                endwhile;
            endif;
        ?>
    </div>
</main>
	

<?php
get_footer();
