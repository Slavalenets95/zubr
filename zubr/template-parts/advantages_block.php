<?php $items = get_sub_field('advantages_block_repeater') ?>
<?php if($items) : ?>
<div class="advantages_block">
    <div class="advantages-block__container">
        <?php foreach($items as $item) : ?>
            <div class="advantages-block__item">
                <?php if($item['title']) : ?><p class="advantages-block__title"><?= $item['title'] ?></p><?php endif; ?>
                <?php if($item['sub_title']) : ?> <p class="advantages-block__subtitle"><?= $item['sub_title'] ?></p><?php endif; ?>
                <div class="advantages-block__item-content">
                    <?= $item['list'] ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?php endif ?>