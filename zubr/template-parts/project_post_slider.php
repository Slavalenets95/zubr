<?php
    $items = get_sub_field('project_post_slider_repeater');
?>

    <div class="project-post-slider">
        <?php foreach($items as $item) : 
                $imgUrl = $item['img']['url'];
                $imgAlt = $item['img']['alt'] ? $item['img']['alt'] : $item['img']['title'];
        ?>
            <div class="project-post-slide">
                <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="project-post-slide__img">
            </div>
        <?php endforeach; ?>
    </div>
	<button class="project-post-slider__close-btn" type="button">
      	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="121.31px" height="122.876px" viewBox="0 0 121.31 122.876" enable-background="new 0 0 121.31 122.876" xml:space="preserve"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M90.914,5.296c6.927-7.034,18.188-7.065,25.154-0.068 c6.961,6.995,6.991,18.369,0.068,25.397L85.743,61.452l30.425,30.855c6.866,6.978,6.773,18.28-0.208,25.247 c-6.983,6.964-18.21,6.946-25.074-0.031L60.669,86.881L30.395,117.58c-6.927,7.034-18.188,7.065-25.154,0.068 c-6.961-6.995-6.992-18.369-0.068-25.397l30.393-30.827L5.142,30.568c-6.867-6.978-6.773-18.28,0.208-25.247 c6.983-6.963,18.21-6.946,25.074,0.031l30.217,30.643L90.914,5.296L90.914,5.296z"/></g></svg>
    </button>