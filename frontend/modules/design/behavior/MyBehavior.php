<?php
/**
 * Author: David<yiwei.duan@meta-insight.com>
 * Date: 2018/11/22
 * Time: 18:00
 */

namespace frontend\modules\design\behavior;


use yii\base\Behavior;

class MyBehavior extends Behavior
{
    // 行为的一个属性
    public $property1 = 'This is property in MyBehavior.';

    private $_property2 = 'This is private property in MyBehavior.';

    public function getProperty2()
    {
        return $this->_property2;
    }

    // 行为的一个方法
    public function method1()
    {
        return 'Method in MyBehavior is called.';
    }

    public function __invoke(...$args)
    {
        // TODO: Implement __invoke() method.
        var_dump($args);
    }

}