<?php
    $items = get_sub_field('perspective_page_slider_repeater');
?>

<div class="perspective-page-slider">
    <?php foreach($items as $item) : 
            $imgUrl = $item['img']['url'];
            $imgAlt = $item['img']['alt'] ? $item['img']['alt'] : $item['img']['title'];    
    ?>
        <div class="perspective-page-slide">
            <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="perspective-page-slide__img">
        </div>
    <?php endforeach; ?>
</div>