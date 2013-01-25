<?php
/* @var $this DailyVipController */
/* @var $data DailyVip */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_date')); ?>:</b>
	<?php echo CHtml::encode($data->l_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_mon_points')); ?>:</b>
	<?php echo CHtml::encode($data->l_mon_points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_mon_num')); ?>:</b>
	<?php echo CHtml::encode($data->l_mon_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_coin_points')); ?>:</b>
	<?php echo CHtml::encode($data->l_coin_points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_coin_num')); ?>:</b>
	<?php echo CHtml::encode($data->l_coin_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_ingame_num')); ?>:</b>
	<?php echo CHtml::encode($data->l_ingame_num); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('l_incash_num')); ?>:</b>
	<?php echo CHtml::encode($data->l_incash_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_cash_sum')); ?>:</b>
	<?php echo CHtml::encode($data->l_cash_sum); ?>
	<br />

	*/ ?>

</div>