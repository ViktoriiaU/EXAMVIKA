<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Category;
use app\models\Product;

class SiteController extends Controller {
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }
	
    public function actionIndex() {
		$categories = Category::find()->all();
		$products = Product::find()->all();
        return $this->render('index', compact('categories','products'));
    }
	
	public function actionView($id) {
		$id = Yii::$app->request->get('id');
		$products = Product::find()->where(['product_category' => $id])->all();
		$categories = Category::find()->all();
		return $this->render('view', compact('products','categories'));
	}
}
