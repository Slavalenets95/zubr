<?php
    $content = get_sub_field('content');
    $cardsTitle = get_sub_field('title');
    $cards = get_sub_field('services_cards_repeater');
?>

<div class="services-page__content-block">
    <?= $content ?>
</div>
<?php if($cards) : ?>
    <div class="services-page__cards">
        <?php if($cardsTitle) : ?>
            <h3 class="services-page__cards-title"><?= $cardsTitle ?></h3>
        <?php endif; ?>
        <div class="services-page__cards-slider">
        <?php foreach($cards as $item) : 
                $imgUrl = $item['img']['sizes']['medium'];
                $imgAlt = $item['img']['alt'] ? $item['img']['alt'] : $item['img']['title'];
                $linkUrl = $item['link'] ? $item['link']['url'] : $item['link'];
                $content = $item['content'];
        ?>

        <div class="services-page__card">
            <div class="services-page__card-wrapper">
                <?php if($linkUrl) : ?>
                    <div class="services-page__card-img-block" href="<?= $linkUrl ?>">
                        <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="services-page__card-img">
                </div>
                <?php else : ?>
                    <div class="services-page__card-img-block">
                        <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="services-page__card-img">
                    </div>
                <?php endif; ?>
                <div class="services-page__card-content-block">
                    <?= $content ?>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>