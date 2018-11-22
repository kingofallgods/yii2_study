<?php
/**
 * Author: David<yiwei.duan@meta-insight.com>
 * Date: 2018/11/15
 * Time: 14:22
 */

namespace frontend\modules\design\models;


interface IObserver
{
    function onChanged($sender, $args);
}