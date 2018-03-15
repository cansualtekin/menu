<?php

<<<<<<< HEAD
namespace kouosl\sample;
=======
namespace kouosl\menu;
>>>>>>> origin/master
use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\web\HttpException;

class Module extends \kouosl\base\Module
{
    public $controllerNamespace = '';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        switch ($this->namespace)
        {
            case 'backend':{

            };break;
            case 'frontend':{

            };break;
            case 'api':{

                $behaviors['authenticator'] = [
                    'class' => CompositeAuth::className(),
                    'authMethods' => [
                        HttpBasicAuth::className(),
                        HttpBearerAuth::className(),
                        QueryParamAuth::className(),
                    ],
                ];
            };break;
            case 'console':{

            };break;
            default:{
                throw new HttpException(500,'behaviors'.$this->namespace);
            };break;
        }

        return $behaviors;

    }

    public function registerTranslations()
    {
        Yii::$app->i18n->translations['site/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
<<<<<<< HEAD
            'basePath' => '@kouosl/sample/messages',
            'fileMap' => [
                'sample/sample' => 'sample.php',
=======
            'basePath' => '@kouosl/menu/messages',
            'fileMap' => [
                'menu/menu' => 'menu.php',
>>>>>>> origin/master
            ],
        ];
    }

    public static function t($category, $message, $params = [], $language = null)
    {
<<<<<<< HEAD
        return Yii::t('sample/' . $category, $message, $params, $language);
=======
        return Yii::t('menu/' . $category, $message, $params, $language);
>>>>>>> origin/master
    }

    public static function initRules(){

        return $rules = [
            [
                'class' => 'yii\rest\UrlRule',
                'controller' => [
<<<<<<< HEAD
                    'sample/samples',
=======
                    'menu/menu',
>>>>>>> origin/master
                ],
                'tokens' => [
                    '{id}' => '<id:\\w+>'
                ],
                /*'patterns' => [
                    'GET new-action' => 'new-action'
                ]*/
            ],

        ] ;

    }



}
