<?php
/* @var $this CheckPortStatusController */
/* @var $model CheckPortStatus */
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
		<?php echo $form->label($model,'item_id'); ?>
		<?php echo $form->textField($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_name'); ?>
		<?php echo $form->textField($model,'item_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'check_status'); ?>
		<?php echo $form->textField($model,'check_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'check_last_time'); ?>
		<?php echo $form->textField($model,'check_last_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'failed_times'); ?>
		<?php echo $form->textField($model,'failed_times'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->