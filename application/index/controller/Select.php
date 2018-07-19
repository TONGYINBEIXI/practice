<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/5 0005
 * Time: 18:15
 */

namespace app\index\controller;


use think\Controller;
use think\Db;

class Select extends Controller
{
            public function select()
            {
                //原生查询
                //$result = Db::query('select *from tp_data where id<>5');
                //dump($result);

                //查询数据， TP5查询构造方法2
                //$result1 = Db::table('tp_data')
                //->where('id',18)
                //->select();
                //dump($result1);

                //查询数据，去掉表前缀3
                //$result2 = Db::name('data')
                // ->where('id',20)
                // ->select();
                //dump($result2);

                //查询数据，更简洁写法，通过助手db函数 4
                $db = db('data');
                $list = $db->where('id',22)->select();
                dump($list);
            }

}
