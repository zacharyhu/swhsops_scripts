<?php
/* @var $this GpSourceCfgController */
/* @var $data gpSourceCfg */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_source_id')); ?>:</b>
	<?php echo CHtml::encode($data->l_source_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_source_name')); ?>:</b>
	<?php echo CHtml::encode($data->l_source_name); ?>
	<br />


</div>