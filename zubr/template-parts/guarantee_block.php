<?php $items = get_sub_field('guarantee_block_repeater') ?>
<?php if($items) : ?>
<div class="guaranty">
    <div class="guaranty__container">
        <?php foreach($items as $item) : 
                $icon = $item['icon'];
                $title = $item['title'];
                $subTitle = $item['sub_title'];
        ?>
            <div class="guaranty-item">
                <div class="guaranty-item__icon">
                    <img src="<?= $icon ?>" aria-hidden="true">
                </div>
                <div class="guaranty-item__content">
                    <p class="guaranty-item__title"><?= $title ?></p>
                    <p class="guaranty-item__subtitle"><?= $subTitle ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?php endif; ?>