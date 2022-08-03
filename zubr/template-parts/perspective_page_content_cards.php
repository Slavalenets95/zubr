<?php
	$firstContent = get_sub_field('first_content');
	$secondContent = get_sub_field('second_content');
?>
	<div class="perspective-page__content-block">
	<div class="perspective-cards">
      <div class="perspective-card">
      	<?= $firstContent ?>
      </div>
      <div class="perspective-card">
      	<?= $secondContent ?>
      </div> 
	</div>
      <button class="cb-btn perspective-cb" type="button">
      	<?= pll__('write to us') ?>
      </button>
	</div>