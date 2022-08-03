<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package onlinegroup
 */

get_header();
?>
    <main class="page-main sd-styles <?php if(get_field('css_class')) echo get_field('css_class'); ?>">
        <div class="page-main__container">
            <h1 class="page-main__title"><?= get_the_title() ?></h1>
            <div class="page-main__content">

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
        </div>
    </main>
<?php
get_footer();
