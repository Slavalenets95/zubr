<?php
    $content = get_sub_field('content');
    $img = get_sub_field('img');
    $imgUrl = $img['url'];
    $imgAlt = $img['alt'] ? $img['alt'] : $img['title'];
?>

<div class="contact-content">
    <div class="contact-content__container">
        <div class="contact-content__txt-block">
            <?= $content ?>
        </div>
        <div class="contact-content__img-block">
            <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="contact-content__img">
          	<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.840845471481!2d21.004527715685427!3d52.228109279759984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471eccf2b33e478f%3A0x4d12187b55b535f0!2zTm93b2dyb2R6a2EgNTZBLCAwMC02OTUgV2Fyc3phd2EsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1649095424383!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>