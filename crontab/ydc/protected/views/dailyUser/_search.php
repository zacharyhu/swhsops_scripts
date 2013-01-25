<?php
/* @var $this DailyUserController */
/* @var $model dailyUser */
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
		<?php echo $form->label($model,'l_date'); ?>
		<?php echo $form->textField($model,'l_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_active'); ?>
		<?php echo $form->textField($model,'l_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_new_num'); ?>
		<?php echo $form->textField($model,'l_new_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_new_gamer'); ?>
		<?php echo $form->textField($model,'l_new_gamer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_source'); ?>
		<?php echo $form->textField($model,'l_source'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->