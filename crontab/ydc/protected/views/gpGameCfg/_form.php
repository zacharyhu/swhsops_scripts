<?php
/* @var $this GpGameCfgController */
/* @var $model gpGameCfg */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gp-game-cfg-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'l_game_id'); ?>
		<?php echo $form->textField($model,'l_game_id'); ?>
		<?php echo $form->error($model,'l_game_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_game_name'); ?>
		<?php echo $form->textField($model,'l_game_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'l_game_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_game_desc'); ?>
		<?php echo $form->textField($model,'l_game_desc',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'l_game_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_game_spcode'); ?>
		<?php echo $form->textField($model,'l_game_spcode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'l_game_spcode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->