<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{


    public function muban()
    {

        $list =Db::name('data')
        ->where('id','>',20)
        ->select();
        dump($list);

        //模板变量赋值
       $this->assign('name','20笑脸');
       $this->assign('email','1216252@qq.com');

       //或者批量赋值
       $this->assign([
           'name' =>'789',
           'email'=>'5645',
       ]);

       //数组赋值
        $data['name'] ='123';
        $data['email']='456';
        $this->assign('data',$data);
        $this->assign('list',$list);
       return $this->fetch('muban');
    }

    public function xiaolian()
    {
        echo '123';

        /**
         * 第一种、 原生写法
         */

        $result = Db::execute('insert into tp_data (name,status)value ("thinkphp",1)');
        dump($result);


        /**
         * 第二种、框架带的
         */

         //Db::table('tp_data')->insert(['name' =>'thinkphp2','status' =>1]);
            Db::table('tp_data')->insert(['name'=>'','status'=>2]);


        /**
         *  第三种、去掉表前缀
         */

        //Db::name('data')
        //->insert(['name' =>'tp3']);

        /**
         * 第四种、插入记录-更简单的写法
         * insertGetId();意思就是返回数据库里面的id号
         */

        //$db = db('data');
        //$result1 = $db->insertGetId(['name' => 'thinkphp4']);
        //dump($result1);

        //以上是插入一条数据的写法

        //以下是插入多条的方法，insertAll()
        //$db = db('data');
        //$data1 = [
        //    ['name' => 'thinkphp6-1'],
        //    ['name' => 'thinkphp6-2'],
        //    ['name' => 'thinkphp6-3']
        //];
        //$result3 = $db->insertAll($data1);
        //dump($result3);
    }


}