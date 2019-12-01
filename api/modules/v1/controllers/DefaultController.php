<?php
/**
 * @author : Asus ONE
 * @email  : <jamwid07@mail.ru>
 * @created: 01-Dec-19
 */

namespace api\modules\v1\controllers;

use yii\rest\Controller;

class DefaultController extends Controller
{
    public function actionIndex(): string
    {
        return 'default API module';
    }
}
