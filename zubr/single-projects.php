<?php get_header(); ?>
<main class="project-post">
    <div class="project-post__container">
        <h1 class="project-post__title"><?= get_field('project_post_title', get_queried_object()) ?></h1>
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
<?php get_footer(); ?>