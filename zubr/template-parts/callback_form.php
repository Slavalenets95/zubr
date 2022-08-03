<?php $headerContent = get_sub_field('header_content'); ?>

<div class="perspective-page__callback-form">
    <div>
        <div class="perspective-page__callback-form-header">
            <?= $headerContent ?>
        </div>
        <div class="perspective-page__callback-form-wrapper">
            <?php echo do_shortcode('[contact-form-7 id="168" title="Форма обратного звонка"]'); ?>
        </div>
    </div>
</div>