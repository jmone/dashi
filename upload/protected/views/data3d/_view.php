<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->number), array('view', 'id'=>$data->number)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hundred')); ?>:</b>
	<?php echo CHtml::encode($data->hundred); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ten')); ?>:</b>
	<?php echo CHtml::encode($data->ten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one')); ?>:</b>
	<?php echo CHtml::encode($data->one); ?>
	<br />


</div>