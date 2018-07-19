<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/13 0013
 * Time: 14:26
 */

namespace app\index\controller;
use think\Db;
use think\Request;


class Bbs extends \think\Controller
{
    public function show()
    {
        //$db = db('data');
        //$show =$db->where('id','>',3)->select();
        ////dump($show);
        //$this->assign('show',$show);
        //return $this->fetch('show');
        // 查询状态为1的用户数据 并且每页显示10条数据
        $show = Db::name('data')->where('id','>',0)->paginate(10,60);
// 把分页数据赋值给模板变量list
//        print_r($show);die();
        $this->assign('show', $show);
// 渲染模板输出
        return $this->fetch();


        //foreach ($show as $b){
        //    print_r($b);
        //}
    }
    public function add()
    {
        //$request = Request::instance();
        ////echo '请求方法：'.$request->method().'<br/>';
        ////echo  '请求参数：';
        ////dump($request->param());
        //echo Request::instance()->param('content');
        //echo '-----------';
        //echo input('param.title');
        //echo '<br>';

        //echo input('param.content');
        $title = input('param.title');
        $content = input('param.content');
        //
        if($title<>''){
            //去掉前缀 写法
            $result =Db::name('data')
           ->insert(['title' =>$title,'content'=>$content,'create_time'=>time()]);
            //dump($result);

            return $this->success("恭喜你留言成功","bbs/show");
        }

        //return "恭喜你留言成功";

        return $this->fetch('add');
    }
}