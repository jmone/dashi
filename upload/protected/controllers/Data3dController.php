<?php

class Data3dController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','trend'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Data3d;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Data3d']))
		{
			$model->attributes=$_POST['Data3d'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->number));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Data3d']))
		{
			$model->attributes=$_POST['Data3d'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->number));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Data3d');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Data3d('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Data3d']))
			$model->attributes=$_GET['Data3d'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Data3d::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='data3d-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionTrend($max = 30, $len = 10){
		$max = intval($max);
		$len = intval($len);
		$data = Yii::app()->db->createCommand()->select('*')->from('3d')->limit($max, 0)->order('number DESC')->queryAll();
		$a = array(0, 1, 5, 6);

		$i = 0;
		foreach($data as $ele){
			$trend['hundred'][$i] = in_array($ele['hundred'], $a) ? 1 : 0;
			$trend['ten'][$i] = in_array($ele['ten'], $a) ? 1 : 0;
			$trend['one'][$i] = in_array($ele['one'], $a) ? 1 : 0;
			$trend['categories'][$i] = $ele['number'];
			$i++;
		}

		for($i=0; $i<$max-$len; $i++){
			$hundred[$i] = array_sum(array_slice($trend['hundred'], $i, $len));
			$ten[$i] = array_sum(array_slice($trend['ten'], $i, $len));
			$one[$i] = array_sum(array_slice($trend['one'], $i, $len));
			$trend['categories'][$i] = $trend['categories'][$i];
		}

		for($j=0; $j<$i; $j++){
			$trend_hundred[$j] = $hundred[$i-$j-1];
			$trend_ten[$j] = $ten[$i-$j-1];
			$trend_one[$j] = $one[$i-$j-1];
			$trend_categories[$j] = $trend['categories'][$i-$j-1];
		}
		$trend['categories'] = $trend_categories;

		$this->render('trend',array(
			'trend'=>$trend,
			'hundred'=>$trend_hundred,
			'ten'=>$trend_ten,
			'one'=>$trend_one,
			'max'=>$max,
			'len'=>$len
		));
	}
}
