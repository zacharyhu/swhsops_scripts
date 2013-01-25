<?php
/* @var $this DailyGameController */
/* @var $data DailyGame */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_date')); ?>:</b>
	<?php echo CHtml::encode($data->l_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_game_id')); ?>:</b>
	<?php echo CHtml::encode($data->l_game_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_game_name')); ?>:</b>
	<?php echo CHtml::encode($data->l_game_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_total_num')); ?>:</b>
	<?php echo CHtml::encode($data->l_total_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_user_num')); ?>:</b>
	<?php echo CHtml::encode($data->l_user_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_avg_num')); ?>:</b>
	<?php echo CHtml::encode($data->l_avg_num); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('l_game_points')); ?>:</b>
	<?php echo CHtml::encode($data->l_game_points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_cash_sum')); ?>:</b>
	<?php echo CHtml::encode($data->l_cash_sum); ?>
	<br />

	*/ ?>

</div>