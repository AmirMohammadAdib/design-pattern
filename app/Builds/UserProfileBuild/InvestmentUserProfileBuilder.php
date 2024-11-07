<?php 
namespace App\Builds\UserProfileBuild;

use App\Builds\UserProfileBuild\Interfaces\UserProfileBuilder As UserProfileInterface;

class InvestmentUserProfileBuilder implements UserProfileInterface
{
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
        $this->profile->investmentPreferences = $investmentPreferences;
        return $this;
    }

    public function addSecuritySettings($securitySettings)
    {
        $this->profile->securitySettings = $securitySettings;
        return $this;
    }

    public function getUserProfile()
    {
        return $this->profile;
    }
}
