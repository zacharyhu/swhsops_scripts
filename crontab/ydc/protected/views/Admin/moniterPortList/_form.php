<?php
/* @var $this MoniterPortListController */
/* @var $model MoniterPortList */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'moniter-port-list-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->textField($model,'item_id'); ?>
		<?php echo $form->error($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_name'); ?>
		<?php echo $form->textField($model,'item_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'item_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_host'); ?>
		<?php echo $form->textField($model,'item_host',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'item_host'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_port'); ?>
		<?php echo $form->textField($model,'item_port'); ?>
		<?php echo $form->error($model,'item_port'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->