<?php
/**
 * Author: David<yiwei.duan@meta-insight.com>
 * Date: 2018/8/21
 * Time: 10:52
 */

namespace frontend\modules\design\controllers;

use frontend\modules\design\behavior\MyBehavior;
use frontend\modules\design\models\CommandChain;
use frontend\modules\design\models\EmailSender;
use frontend\modules\design\models\UserList;
use frontend\modules\design\models\UserListLogger;
use yii\base\Controller;


/**
 * Class HelloController
 * == hello
 *
 * @package frontend\modules\design\controllers
 */
class HelloController extends Controller
{
    public function he($a, $in, $order = 'asc')
    {
        array_walk($a, function ($v, $k) use (&$ab, $in) {
            $key = $v[$in];
            $ab[$key] = $v;
        });
        if (strtolower($order) === 'asc') {
            ksort($ab);
        } elseif (strtolower($order) === 'desc') {
            krsort($ab);
        } else {
            throwException(new \Exception('排序方式$order参数输入有误！'));
        }
        return array_values($ab);
    }

    public function actionTwo()
    {
        $a = [
            ['x' => 1, 'y' => 'a'],
            ['x' => 10, 'y' => 'j'],
            ['x' => 12, 'y' => 'l'],
            ['x' => 8, 'y' => 'k'],
            ['x' => 6, 'y' => 'a'],
            ['x' => 13, 'y' => 'c'],
            ['x' => 5, 'y' => 'f'],
            ['x' => 5, 'y' => 'c'],
            ['x' => 11, 'y' => 'h'],
            ['x' => 6, 'y' => 'l'],
            ['x' => 8, 'y' => 'k'],
        ];

        var_dump($this->he($a, 'x'));
    }

    public function actionThree()
    {
        \Yii::$app->db->createCommand()->execute();
    }

    public function actionFour()
    {
        $bh = new MyBehavior();
        $bh('dsad');
//        echo $bh->property2;exit();
        $this->attachBehavior('mb', $bh);
        echo $this->property2;
//        echo $this->method1();
    }

    public function actionFive()
    {
        $ul = new UserList();
        $ul->addObserver(new UserListLogger());
        $ul->addObserver(new EmailSender());
        $ul->addCustomer("Jack");
        $ul->addCustomer("Tom");
        $ul->addCustomer("Martin");
        $ul->addCustomer("Jerry");
        echo "\n===========================\n";
        $cc = new CommandChain();
        $cc->addCommand(new EmailSender());
        $cc->addCommand($ul);
        $cc->runCommand('ac', 'Kim');
//        new TestLogic();
    }

    public function actionSix()
    {
        phpinfo();
    }

}