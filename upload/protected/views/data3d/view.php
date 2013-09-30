<?php
$this->breadcrumbs=array(
	'Data3ds'=>array('index'),
	$model->number,
);

$this->menu=array(
	array('label'=>'List Data3d', 'url'=>array('index')),
	array('label'=>'Create Data3d', 'url'=>array('create')),
	array('label'=>'Update Data3d', 'url'=>array('update', 'id'=>$model->number)),
	array('label'=>'Delete Data3d', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->number),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Data3d', 'url'=>array('admin')),
);
?>

<h1>View Data3d #<?php echo $model->number; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'number',
		'hundred',
		'ten',
		'one',
	),
)); ?>
