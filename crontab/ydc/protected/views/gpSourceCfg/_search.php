<?php
/* @var $this GpSourceCfgController */
/* @var $model gpSourceCfg */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_source_id'); ?>
		<?php echo $form->textField($model,'l_source_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_source_name'); ?>
		<?php echo $form->textField($model,'l_source_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->