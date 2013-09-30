<?php
$this->breadcrumbs=array(
	'Data3ds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Data3d', 'url'=>array('index')),
	array('label'=>'Manage Data3d', 'url'=>array('admin')),
);
?>

<h1>Create Data3d</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>