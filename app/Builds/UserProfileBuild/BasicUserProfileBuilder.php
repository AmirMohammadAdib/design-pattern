<?php

namespace App\Builds\UserProfileBuild;

use App\Builds\UserProfileBuild\Interfaces\UserProfileBuilder;

class BasicUserProfileBuilder implements UserProfileBuilder {
    protected $profile;

    public function __construct()
    {
        $this->profile = new UserProfile();
    }

    public function addPersonalInfo($personalInfo)
    {
        $this->profile->personalInfo = $personalInfo;
        return $this;
    }

    public function addInvestmentPreferences($investmentPreferences)
    {
        // این بیلدر تنظیمات سرمایه‌گذاری ندارد، بنابراین می‌توانیم آن را خالی بگذاریم
        $this->profile->investmentPreferences = [
            'riskLevel' => 'low', // مقدار پیش‌فرض برای سطح ریسک
        ];
        return $this;
    }

    public function addSecuritySettings($securitySettings)
    {
        // تنظیمات امنیتی ساده
        $this->profile->securitySettings = [
            'twoFactorAuth' => false,
            'alertPreferences' => ['email'], // پیش‌فرض برای دریافت هشدار فقط از طریق ایمیل
        ];
        return $this;
    }

    public function getUserProfile()
    {
        return $this->profile;
    }

}