<?php 
/*
Template name: Service Template
*/

get_header();
?>

<main class="services-page <?php if(get_field('css_class')) echo get_field('css_class'); ?>">
    <div class="services-page__container">
    <?php
        if(have_rows('constructor')) :
            while(have_rows('constructor')) : the_row();
                $rowName = get_row_layout();
        
                if($rowName === 'services_intro') {
                    get_template_part('template-parts/' . $rowName);
                    break;
                }
            
            endwhile;
        endif;
    ?>

    <div class="services-page__content">
        <div>
        <?php
            if(have_rows('constructor')) :
                while(have_rows('constructor')) : the_row();
                    $rowName = get_row_layout();
            
                    if($rowName === 'services_intro' || $rowName === 'services_slider' || $rowName === 'guarantee_block' || $rowName === 'callback_form' || $rowName === 'advantages_block') {
                        continue;
                    }

                    if(file_exists('wp-content/themes/onlinegroup/template-parts/' . $rowName . '.php')) {
                        get_template_part('template-parts/' . $rowName);
                    }
                
                endwhile;
            endif;
        ?>
        <?php
            if(have_rows('constructor')) :
                while(have_rows('constructor')) : the_row();
                    $rowName = get_row_layout();
            
                    if($rowName === 'services_slider') {
                        get_template_part('template-parts/' . $rowName);
                        break;
                    }
                
                endwhile;
            endif;
        ?>
        </div>
    </div>
    <?php
            if(have_rows('constructor')) :
                while(have_rows('constructor')) : the_row();
                    $rowName = get_row_layout();
            
                    if($rowName === 'callback_form' || $rowName === 'guarantee_block' || $rowName === 'advantages_block') {
                        get_template_part('template-parts/' . $rowName);
                    } else {
                        continue;
                    }
                
                endwhile;
            endif;
        ?>
    </div>
</main>

<?php 
get_footer();