<?php

use yii\helpers\Html;

$title = Yii::t('page', 'Create page');

$this->title = $title . '|' . Yii::$app->name;

$this->params['breadcrumbs'] = [
	['label' => Yii::t('page', 'Pages'), 'url' => ['index']],
	$title,
];

?>
<h1><?= Html::encode($title) ?></h1>

<?= $this->render('_form', ['model' => $model]) ?>