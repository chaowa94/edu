<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Attachment;

class AttachmentController extends Controller
{
    /**
     * 展示课程附件列表页面
     *
     * @return view()
     */
    public function index()
    {
        $attachment=Attachment::all();
        return view('',compact('attachment'));
    }

    /**
     * 显示新增课程附件表单
     *
     * @return view()
     */
    public function create()
    {
        return view('');
    }

    /**
     * 储存新增课程附件
     *
     * @param  \Illuminate\Http\Request  $request
     * @return view(),boolean,$msg
     */
    public function store(Request $request)
    {
        $attachment=new Attachment();
        $attachment->create($request->all());
        return view('');
    }

    /**
     * 展示单个课程附件详情页
     *
     * @param  int  $id
     * @return view()
     */
    public function show($id)
    {
        $attachment=Attachment::find($id);
        return view('',compact('attachment'));
    }

    /**
     * 显示课程附件修改页面
     *
     * @param  int  $id
     * @return view()
     */
    public function edit($id)
    {
        return view('');
    }

    /**
     * 更新课程附件修改信息
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return view(),boolean,$msg
     */
    public function update(Request $request, $id)
    {
        $attachment=Attachment::find($id);
        $attachment->create($request->all());
        return view('');
    }

    /**
     * 删除指定课程附件
     *
     * @param  int  $id
     * @return view(),boolean,$msg
     */
    public function destroy($id)
    {
        Attachment::destroy($id);
        return view();
    }
}
