<?php
/**
 * Author: David<yiwei.duan@meta-insight.com>
 * Date: 2018/11/15
 * Time: 14:49
 */

namespace frontend\modules\design\models;


interface ICommand
{
    public function onCommand($name, ...$args);
}