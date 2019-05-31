<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    /**
     * 展示用户列表页面
     *
     * @return view()
     */
    public function index()
    {
        $user=User::all();
        return view('',compact('user'));
    }

    /**
     * 显示新增用户表单
     *
     * @return view()
     */
    public function create()
    {
        return view('');
    }

    /**
     * 储存新增用户
     *
     * @param  \Illuminate\Http\Request  $request
     * @return view(),boolean,$msg
     */
    public function store(Request $request)
    {
        $user=new User();
        $user->create($request->all());
        return view('');
    }

    /**
     * 展示单个用户详情页
     *
     * @param  int  $id
     * @return view()
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('',compact('user'));
    }

    /**
     * 显示用户修改页面
     *
     * @param  int  $id
     * @return view()
     */
    public function edit($id)
    {
        return view('');
    }

    /**
     * 更新用户修改信息
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return view(),boolean,$msg
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->create($request->all());
        return view('');
    }

    /**
     * 删除指定用户
     *
     * @param  int  $id
     * @return view(),boolean,$msg
     */
    public function destroy($id)
    {
        User::destroy($id);
        return view();
    }
}
