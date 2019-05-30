<?php


Route::group(['profix'=>'admin','name'=>'admin.'], function () {
    #---------------------科目------------------------
    Route::resource('/course','CourseController');
    #---------------------课程------------------------
    Route::resource('/lesson','LessonController');
    #---------------------科目幻灯-----------------------
    Route::resource('/slider','SliderController');
    #----------------------课程目录-----------------------
    Route::resource('/attachment','AttachmentController');
});