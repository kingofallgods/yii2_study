<?php
/**
 * Author: David<yiwei.duan@meta-insight.com>
 * Date: 2018/11/15
 * Time: 14:23
 */

namespace frontend\modules\design\models;


class UserListLogger
{
    public function onChanged($sender, $args)
    {
        echo("'$args' added to user list\n");
    }
}