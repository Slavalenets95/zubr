<?php
    $items = get_sub_field('about_us_repeater');
?>
<?php if($items) : ?>

    <div class="about-items">

<?php
        foreach($items as $item) :
            $imgUrl = $item['img']['url'];
            $imgAlt = $item['img']['alt'] ? $item['img']['alt'] : $item['img']['title'];
            $content = $item['content'];
?>  

        <div class="about-item">
            <div class="about-item__img-block">
                <img class="about-item__img" src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>">
            </div>
            <div class="about-item__content-block">
                <?= $content ?>
            </div>
        </div>

<?php   endforeach; ?> 

    </div>

<?php endif; ?>