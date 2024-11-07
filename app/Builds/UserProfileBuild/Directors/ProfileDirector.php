<?php 
namespace App\Builds\UserProfileBuild\Directors;

use App\Builds\UserProfileBuild\BasicUserProfileBuilder;
use App\Builds\UserProfileBuild\InvestmentUserProfileBuilder;

class ProfileDirector
{
    public function build(BasicUserProfileBuilder $builder, $config)
    {
        if (!empty($config['personalInfo'])) {
            $builder->addPersonalInfo($config['personalInfo']);
        }
        if (!empty($config['investmentPreferences'])) {
            $builder->addInvestmentPreferences($config['investmentPreferences']);
        }
        if (!empty($config['securitySettings'])) {
            $builder->addSecuritySettings($config['securitySettings']);
        }

        return $builder->getUserProfile();
    }
}
