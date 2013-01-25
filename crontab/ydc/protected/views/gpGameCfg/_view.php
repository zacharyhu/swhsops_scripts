<?php
/* @var $this GpGameCfgController */
/* @var $data gpGameCfg */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_game_id')); ?>:</b>
	<?php echo CHtml::encode($data->l_game_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_game_name')); ?>:</b>
	<?php echo CHtml::encode($data->l_game_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_game_desc')); ?>:</b>
	<?php echo CHtml::encode($data->l_game_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_game_spcode')); ?>:</b>
	<?php echo CHtml::encode($data->l_game_spcode); ?>
	<br />


</div>