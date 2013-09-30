<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hundred'); ?>
		<?php echo $form->textField($model,'hundred'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ten'); ?>
		<?php echo $form->textField($model,'ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'one'); ?>
		<?php echo $form->textField($model,'one'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->