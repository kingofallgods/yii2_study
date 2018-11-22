<?php
/**
 * Author: David<yiwei.duan@meta-insight.com>
 * Date: 2018/11/15
 * Time: 18:24
 */

namespace frontend\modules\design\models;


class Number implements \Iterator
{
    protected $i = 1;
    protected $key;
    protected $val;
    protected $count;

    public function __construct(int $count)
    {
        $this->count = $count;
        echo "第{$this->i}步:对象初始化.\n";
        $this->i++;
    }

    public function rewind()
    {
        $this->key = 0;
        $this->val = 0;
        echo "第{$this->i}步:rewind()被调用.\n";
        $this->i++;
    }

    public function next()
    {
        $this->key += 1;
        $this->val += 2;
        echo "第{$this->i}步:next()被调用.\n";
        $this->i++;
    }

    public function current()
    {
        echo "第{$this->i}步:current()被调用.\n";
        $this->i++;
        return $this->val;
    }

    public function key()
    {
        echo "第{$this->i}步:key()被调用.\n";
        $this->i++;
        return $this->key;
    }

    public function valid()
    {
        echo "第{$this->i}步:valid()被调用.\n";
        $this->i++;
        return $this->key < $this->count;
    }
}