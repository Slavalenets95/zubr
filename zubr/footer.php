<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onlinegroup
 */

?>

	<footer class="footer">
		<p>Copyright © 2022 by <?= pll__('company name') ?> All rights reserved ZUBR Company Sp. z o.o.</p>
	</footer>
	<div class="dark-bg"></div>
	<div class="cb">
      	<button class="cb__close-btn" type="button">
      		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="121.31px" height="122.876px" viewBox="0 0 121.31 122.876" enable-background="new 0 0 121.31 122.876" xml:space="preserve"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M90.914,5.296c6.927-7.034,18.188-7.065,25.154-0.068 c6.961,6.995,6.991,18.369,0.068,25.397L85.743,61.452l30.425,30.855c6.866,6.978,6.773,18.28-0.208,25.247 c-6.983,6.964-18.21,6.946-25.074-0.031L60.669,86.881L30.395,117.58c-6.927,7.034-18.188,7.065-25.154,0.068 c-6.961-6.995-6.992-18.369-0.068-25.397l30.393-30.827L5.142,30.568c-6.867-6.978-6.773-18.28,0.208-25.247 c6.983-6.963,18.21-6.946,25.074,0.031l30.217,30.643L90.914,5.296L90.914,5.296z"></path></g></svg>
      	</button>
      	<?php if(pll_current_language() === 'ru') : ?>
			<?php echo do_shortcode('[contact-form-7 id="428" title="Форма обратного звонка всплывающая (RU)"]') ?>
      	<?php elseif(pll_current_language() === 'en') : ?>
      		<?php echo do_shortcode('[contact-form-7 id="431" title="Форма обратного звонка всплывающая (EN)"]') ?>
      	<?php elseif(pll_current_language() === 'pl') : ?>
      		<?php echo do_shortcode('[contact-form-7 id="430" title="Форма обратного звонка всплывающая (PL)"]') ?>
      	<?php endif ?>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
