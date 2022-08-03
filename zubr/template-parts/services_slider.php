<?php
    $title = get_sub_field('title');
    $items = get_sub_field('services_slider_repeater');
?>

<div class="services-page__slider-wrapper">
    <?php if($title) : ?>
        <h3 class="service-page__slider-wrapper-title"><?= $title ?></h3>
    <?php endif; ?>
    <div class="services-page__slider">
        <?php foreach($items as $item) : 
            $imgUrl = $item['img']['url'];
            $imgAlt = $item['img']['alt'] ? $item['img']['alt'] : $item['img']['title'];
            $linkUrl = $item['link'] ? $item['link']['url'] : $item['link'];
            $content = $item['content'];    
        ?>

        <div class="services-page__slide">
            <a class="services-page__slide-wrapper" href="<?= $linkUrl ?>">
                <div class="services-page__slide-img-block">
                    <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="services-page__slide-img">
                </div>
                <div class="services-page__slide-content-block">
                    <?= $content ?>
                </div>
            </a>
        </div>

        <?php endforeach; ?>
    </div>
</div>