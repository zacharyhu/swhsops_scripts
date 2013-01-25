<?php
/* @var $this DailyGameController */
/* @var $model DailyGame */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--  div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'l_date'); ?>
		<?php echo $form->textField($model,'l_date',array('size'=>10,'maxlength'=>10)); ?>
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
		<?php echo $form->label($model,'l_total_num'); ?>
		<?php echo $form->textField($model,'l_total_num',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_user_num'); ?>
		<?php echo $form->textField($model,'l_user_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_avg_num'); ?>
		<?php echo $form->textField($model,'l_avg_num',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_game_points'); ?>
		<?php echo $form->textField($model,'l_game_points'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_cash_sum'); ?>
		<?php echo $form->textField($model,'l_cash_sum'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->