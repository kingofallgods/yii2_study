<?php
/**
 * Author: David<yiwei.duan@meta-insight.com>
 * Date: 2018/8/21
 * Time: 10:52
 */

namespace frontend\modules\design\controllers;

use common\models\User;
use yii\base\Controller;


/**
 * Class HelloController
 * == hello
 *
 * @package frontend\modules\design\controllers
 */
class HelloController extends Controller
{

    public function actionSix()
    {
        phpinfo();
    }

}