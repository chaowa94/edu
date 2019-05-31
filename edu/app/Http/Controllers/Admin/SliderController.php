<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
class SliderController extends Controller
{
        /**
     * 展示科目幻灯列表页面
     *
     * @return view()
     */
    public function index()
    {
        $slider=Slider::all();
        return view('',compact('slider'));
    }

    /**
     * 显示新增科目幻灯表单
     *
     * @return view()
     */
    public function create()
    {
        return view('');
    }

    /**
     * 储存新增科目幻灯
     *
     * @param  \Illuminate\Http\Request  $request
     * @return view(),boolean,$msg
     */
    public function store(Request $request)
    {
        $slider=new Slider();
        $slider->create($request->all());
        return view('');
    }

    /**
     * 展示单个科目幻灯详情页
     *
     * @param  int  $id
     * @return view()
     */
    public function show($id)
    {
        $slider=Slider::find($id);
        return view('',compact('slider'));
    }

    /**
     * 显示科目幻灯修改页面
     *
     * @param  int  $id
     * @return view()
     */
    public function edit($id)
    {
        return view('');
    }

    /**
     * 更新科目幻灯修改信息
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return view(),boolean,$msg
     */
    public function update(Request $request, $id)
    {
        $slider=Slider::find($id);
        $slider->create($request->all());
        return view('');
    }

    /**
     * 删除指定科目幻灯
     *
     * @param  int  $id
     * @return view(),boolean,$msg
     */
    public function destroy($id)
    {
        Slider::destroy($id);
        return view();
    }
}
