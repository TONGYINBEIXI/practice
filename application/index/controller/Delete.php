<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9 0009
 * Time: 16:12
 */

namespace app\index\controller;


use think\Controller;
use think\Db;

class Delete extends Controller
{
    public function delete()
    {
        ////原生写法 1
        //$result = Db::execute('delete from tp_data where id =6');
        //dump($result);

        //删除数据 -用TP5的查询构造器方法 2
        //$result2 = Db::table('tp_data')
        //->where('id',18)
        //->delete();
        //dump($result2);

        //删除数据 -去掉表前缀 3
        //$result3 = Db::name('data')
        //->where('id',19)
        //->delete();
        //dump($result3);

        //删除数据 -更加简化的写法 通过助手db函数 4
        //$db = db('data');
        //$db->where('id','<',22)->delete();
        //dump($db);

        //删除数据 -根据主键删除 精简写法 5
        //$result5 = db('data')->delete(6);
        //$result6 = db('data')->delete([8,10,7]);

    }
}