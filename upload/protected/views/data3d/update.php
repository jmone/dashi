<?php
$this->breadcrumbs=array(
	'Data3ds'=>array('index'),
	$model->number=>array('view','id'=>$model->number),
	'Update',
);

$this->menu=array(
	array('label'=>'List Data3d', 'url'=>array('index')),
	array('label'=>'Create Data3d', 'url'=>array('create')),
	array('label'=>'View Data3d', 'url'=>array('view', 'id'=>$model->number)),
	array('label'=>'Manage Data3d', 'url'=>array('admin')),
);
?>

<h1>Update Data3d <?php echo $model->number; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>