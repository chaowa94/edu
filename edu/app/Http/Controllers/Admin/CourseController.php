<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Slider;
class CourseController extends Controller
{
    /**
     * 展示科目列表页面
     *
     * @return view()
     */
    public function index()
    {
        $course=Course::all();
        return view('',compact('course'));
    }

    /**
     * 显示新增科目表单
     *
     * @return view()
     */
    public function create()
    {
        return view('');
    }

    /**
     * 储存新增科目
     *
     * @param  \Illuminate\Http\Request  $request
     * @return view(),boolean,$msg
     */
    public function store(Request $request)
    {
        $course=new Course();
        $course->create($request->all());
        return view('');
    }

    /**lesson
     * 展示单个科目详情页
     *
     * @param  int  $id
     * @return view()
     */
    public function show($id)
    {
        $course=Course::find($id);
        $lesson=$course->lesson();
        $slider=$course->slider();
        return view('',compact('course','lesson','slider'));
    }

    /**
     * 显示科目修改页面
     *
     * @param  int  $id
     * @return view()
     */
    public function edit($id)
    {
        return view('');
    }

    /**
     * 更新科目修改信息
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return view(),boolean,$msg
     */
    public function update(Request $request, $id)
    {
        $course=Course::find($id);
        $course->create($request->all());
        return view('');
    }

    /**
     * 删除指定科目
     *
     * @param  int  $id
     * @return view(),boolean,$msg
     */
    public function destroy($id)
    {
        Course::destroy($id);
        return view();
    }
}
