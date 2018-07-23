<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/23 0023
 * Time: 11:30
 */

namespace app\index\controller;
use think\Controller;
use app\index\model\Data;
//use think\Loader;

class Model extends Controller
{
    public function  index()
    {
        //使用模型的方法 这个是没有引入use app\index\model\Data;下面的方法才是引入之后的
    // $res = model("Data");
     //$res = $res::get(13);

        //静态调用的写法1
     $res = Data::get(16);

        //new的写法2
    //$res = new Data();
    //$res = Data::get(33);

     //可以加多个模型的写法 3
     // $res = Loader::model("Data");
     // $res = $res::get(36);

       //使用助手函数的写法 4  也就是没引入的
       // $res = model("Data");
       // $res = $res::get(19);
        $res = $res->toArray();
     dump($res);
    }
}