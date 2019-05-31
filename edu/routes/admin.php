<?php


Route::group(['profix'=>'admin','name'=>'admin.'],function(){
    /**
     * 科目
     */
    Route::resource('/course','CourseController');
    /**
     * 科目中课程的crud
     */
    Route::resource('/course/{id}/lesson/create/','CourseController@lessonCreate')->name('course.lessonCreate');
    Route::resource('/course/{id}/lesson/store/{id}','CourseController@lessonStore')->name('course.lessonStore');
    Route::resource('/course/{id}/lesson/delete/{id}','CourseController@lessonDelete')->name('course.lessonDelete');
    Route::resource('/course/{id}/lesson/edit/','CourseController@lessonEdit')->name('course.lessonEdit');
    Route::resource('/course/{id}/lesson/update/{id}','CourseController@lessonUpdate')->name('course.lessonUpdate');
    Route::resource('/course/{id}/lesson/index/{id}','CourseController@lessonIndex')->name('course.lessonIndex');
    Route::resource('/course/{id}/lesson/show/{id}','CourseController@lessonShow')->name('course.lessonShow');
    /**
     * 科目中幻灯的crud
     */
    Route::resource('/course/{id}/slider/create/','CourseController@sliderCreate')->name('course.sliderCreate');
    Route::resource('/course/{id}/slider/store/{id}','CourseController@sliderStore')->name('course.sliderStore');
    Route::resource('/course/{id}/slider/delete/{id}','CourseController@sliderDelete')->name('course.sliderDelete');
    Route::resource('/course/{id}/slider/edit/','CourseController@sliderEdit')->name('course.sliderEdit');
    Route::resource('/course/{id}/slider/update/{id}','CourseController@sliderUpdate')->name('course.sliderUpdate');
    Route::resource('/course/{id}/slider/index/{id}','CourseController@sliderIndex')->name('course.sliderIndex');
    Route::resource('/course/{id}/slider/show/{id}','CourseController@sliderShow')->name('course.sliderShow');

    /**
     * 课程
     */
    Route::resource('/lesson','LessonController');
    /**
     * 课程中目录的crud
     */
    Route::resource('/lesson/{id}/attachment/create/','LessonController@attachmentCreate')->name('course.attachmentCreate');
    Route::resource('/lesson/{id}/attachment/store/{id}','LessonController@attachmentStore')->name('course.attachmentStore');
    Route::resource('/lesson/{id}/attachment/delete/{id}','LessonController@attachmentDelete')->name('course.attachmentDelete');
    Route::resource('/lesson/{id}/attachment/edit/','LessonController@attachmentEdit')->name('course.attachmentEdit');
    Route::resource('/lesson/{id}/attachment/update/{id}','LessonController@attachmentUpdate')->name('course.attachmentUpdate');
    Route::resource('/lesson/{id}/attachment/index/{id}','LessonController@attachmentIndex')->name('course.attachmentIndex');
    Route::resource('/lesson/{id}/attachment/show/{id}','LessonController@attachmentShow')->name('course.attachmentShow');
    
    /**
     * 科目幻灯
     */
    Route::resource('/slider','SliderController');

    /**
     * 课程目录
     */
    Route::resource('/attachment','AttachmentController');
});