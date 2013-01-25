<?php
/* @var $this GpCpController */
/* @var $model GpCp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gp-cp-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'l_name'); ?>
		<?php echo $form->textField($model,'l_name',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'l_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_type'); ?>
		<?php echo $form->textField($model,'l_type',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'l_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->