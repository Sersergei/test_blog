<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Просмотреть все Записьи', 'url'=>array('index')),
	array('label'=>'Создать Запись', 'url'=>array('create')),
	array('label'=>'Посмотреть Запись', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Менеджер Записей', 'url'=>array('admin')),
);
?>

<h1>Изменить Запись <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>