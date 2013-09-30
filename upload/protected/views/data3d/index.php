<?php
$this->breadcrumbs=array(
	'Data3ds',
);

$this->menu=array(
	array('label'=>'Create Data3d', 'url'=>array('create')),
	array('label'=>'Manage Data3d', 'url'=>array('admin')),
);
?>

<h1>Data3ds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
