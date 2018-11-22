<?php
/**
 * Author: David<yiwei.duan@meta-insight.com>
 * Date: 2018/11/15
 * Time: 14:23
 */

namespace frontend\modules\design\models;


class UserList implements ICommand,IObservable
{
    private $_observers = array();

    function onCommand($name, ...$args)
    {
        // TODO: Implement onCommand() method.
        if ($name == 'ac') {
            $this->addCustomer(...$args);
            return true;
        } else {
            return false;
        }
    }

    public function addCustomer($name)
    {
        foreach ($this->_observers as $obs)
            $obs->onChanged($this, $name);
    }

    public function addObserver($observer)
    {
        $this->_observers [] = $observer;
    }
}