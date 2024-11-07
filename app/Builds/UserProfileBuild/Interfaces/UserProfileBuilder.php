<?php 
namespace App\Builds\UserProfileBuild\Interfaces;

interface UserProfileBuilder
{
    public function addPersonalInfo($personalInfo);
    public function addInvestmentPreferences($investmentPreferences);
    public function addSecuritySettings($securitySettings);
    public function getUserProfile();
}
