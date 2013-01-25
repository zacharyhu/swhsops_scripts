<?php
/* @var $this GpSourceCfgController */
/* @var $model gpSourceCfg */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gp-source-cfg-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'l_source_id'); ?>
		<?php echo $form->textField($model,'l_source_id'); ?>
		<?php echo $form->error($model,'l_source_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_source_name'); ?>
		<?php echo $form->textField($model,'l_source_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'l_source_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->