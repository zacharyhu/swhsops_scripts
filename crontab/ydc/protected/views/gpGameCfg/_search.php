<?php
/* @var $this GpGameCfgController */
/* @var $model gpGameCfg */
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
		<?php echo $form->label($model,'l_game_id'); ?>
		<?php echo $form->textField($model,'l_game_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_game_name'); ?>
		<?php echo $form->textField($model,'l_game_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_game_desc'); ?>
		<?php echo $form->textField($model,'l_game_desc',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_game_spcode'); ?>
		<?php echo $form->textField($model,'l_game_spcode',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->