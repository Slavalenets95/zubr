<?php
    $items = get_sub_field('services_intro_repeater');
?>
<?php if($items) : ?>

    <div class="services-intro">
        <div class="services-intro__slider">
<?php
        foreach($items as $item) :
            $imgUrl = $item['img']['url'];
            $imgAlt = $item['img']['alt'] ? $item['img']['alt'] : $item['img']['title'];
            $content = $item['content'];
?>  

        <div class="services-intro__slide">
            <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="services-intro__slide-img">
            <div class="services-intro__slide-content-block">
                <?= $content ?>
            </div>
        </div>

<?php   endforeach; ?> 

        </div>
    </div>

<?php endif; ?>