<?php
/**
 * Author: David<yiwei.duan@meta-insight.com>
 * Date: 2018/11/15
 * Time: 14:51
 */

namespace frontend\modules\design\models;


use yii\base\ErrorException;
use yii\db\Exception;

class CommandChain
{
    /**
     * @var ICommand[] $_commands
     */
    private $_commands;

    public function addCommand(ICommand $cmd)
    {
        $this->_commands[] = $cmd;
    }

    public function runCommand($name, ...$args)
    {
        $i = 0;
        foreach ($this->_commands as $cmd) {
            if ($cmd->onCommand($name, ...$args)) {
                $i++;
                break;
            }
        }
        if ($i == 0)
//            throw new ErrorException("未发现该命令，请检查命令名");
            throwException(new Exception('未发现该命令，请检查命令名', [], 401));
    }
}