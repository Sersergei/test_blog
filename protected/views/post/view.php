<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Просмотреть Запись', 'url'=>array('index')),
	array('label'=>'Создать Запись', 'url'=>array('create')),
	array('label'=>'Изменить Запись', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Запись', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Менеджер Записей', 'url'=>array('admin')),
);
?>

<h1>Просмотр Записи #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'title',
		'content',
		
	),
)); ?>
