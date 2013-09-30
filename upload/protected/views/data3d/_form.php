<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data3d-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hundred'); ?>
		<?php echo $form->textField($model,'hundred'); ?>
		<?php echo $form->error($model,'hundred'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ten'); ?>
		<?php echo $form->textField($model,'ten'); ?>
		<?php echo $form->error($model,'ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one'); ?>
		<?php echo $form->textField($model,'one'); ?>
		<?php echo $form->error($model,'one'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->