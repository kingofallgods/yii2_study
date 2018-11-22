<?php
/**
 * Author: David<yiwei.duan@meta-insight.com>
 * Date: 2018/8/21
 * Time: 10:52
 */

namespace frontend\modules\design\controllers;

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