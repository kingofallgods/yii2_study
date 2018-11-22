<?php
/**
 * Author: David<yiwei.duan@meta-insight.com>
 * Date: 2018/11/15
 * Time: 14:26
 */

namespace frontend\modules\design\models;


class EmailSender implements IObserver,ICommand
{
    function onChanged($sender, $args)
    {
        // TODO: Implement onChanged() method.
        $this->sendEmail();
    }

    function onCommand($name, ...$args)
    {
        // TODO: Implement onCommand() method.
        if ($name=='sm'){
            $this->sendEmail();
            return true;
        }elseif ($name=='stm'){
            $this->sendTEmail();
            return true;
        }else{
            return false;
        }
    }

    function sendEmail()
    {
        echo "发送邮件\n";
    }

    function sendTEmail()
    {
        echo "发送定时邮件\n";
    }
}