<?php

use App\Builds\UserProfileBuild\BasicUserProfileBuilder;
use App\Builds\UserProfileBuild\Directors\ProfileDirector;
use App\Builds\UserProfileBuild\InvestmentUserProfileBuilder;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // تنظیمات پروفایل کاربر
    $userProfileConfig = [
        'personalInfo' => [
            'name' => 'Amir',
            'age' => 25,
            'email' => 'amir@example.com'
        ],

    ];


    // ساخت پروفایل کاربر با استفاده از بیلدر
    $builder = new BasicUserProfileBuilder();
    $director = new ProfileDirector();
    $userProfile = $director->build($builder, $userProfileConfig);

    // نمایش پروفایل کاربر
    $userProfile->display();

});
