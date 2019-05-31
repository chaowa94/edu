<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Attachment;

class LessonController extends Controller
{
    /**
     * 展示课程列表页面
     * @param $id科目Course的id
     * @return view()
     */
    public function index()
    {
        $lesson=Lesson::all();
        return view('',compact('lesson'));
    }

    /**
     * 显示新增课程表单
     *
     * @return view()
     */
    public function create()
    {
        return view('');
    }

    /**
     * 储存新增课程
     *
     * @param  \Illuminate\Http\Request  $request
     * @return view(),boolean,$msg
     */
    public function store(Request $request)
    {
        $lesson=new Lesson();
        $course->create($request->all());
        return view('');
    }

    /**
     * 展示单个课程详情页
     *
     * @param  int  $id
     * @return view()
     */
    public function show($id)
    {
        $lesson=Lesson::find($id);
        $attachment=$lesson->attachment();
        return view('',compact('lesson','attachment'));
    }

    /**
     * 显示课程修改页面
     *
     * @param  int  $id
     * @return view()
     */
    public function edit($id)
    {
        return view('');
    }

    /**
     * 更新课程修改信息
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return view(),boolean,$msg
     */
    public function update(Request $request, $id)
    {
        $lesson=Lesson::find($id);
        $lesson->create($request->all());
        return view('');
    }

    /**
     * 删除指定课程
     *
     * @param  int  $id
     * @return view(),boolean,$msg
     */
    public function destroy($id)
    {
        Lesson::destroy($id);
        return view();
    }
}
