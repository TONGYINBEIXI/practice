<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/4 0004
 * Time: 17:35
 */

namespace app\index\controller;
use think\Controller;
use think\Db;

class Update  extends Controller
{
        public function upload()
        {
            echo '更新的几种方法';
            //更新的几种方法
            /**
             * 第一种：原生写法
             */

            //$result = Db::execute('update tp_data set name = "frmaework笑脸" where id = 5');
            //dump($result);
            /**
             * 第二种：更新记录
             */
            //Db::table('tp_data')
            //->where('id',18)
            //->update(['name' => '18笑脸']);

            /**
             * 第三种：更新方法，去掉前缀
             */
            //Db::name('data')
            //->where('id',19)
            //->update(['name' =>'19笑脸']);

            /**
             * 第四种：更新方法，更加简化的写法  通过助手db函数
             */
            //$db = db('data');
            //$db->where('id',20)->update(['name' => '20笑脸','title' =>'我改了标题']);
        }

}