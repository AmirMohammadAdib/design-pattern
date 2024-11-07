<?php 

namespace App\Builds\UserProfileBuild;

class UserProfile {
    public $personalInfo;
    public $investmentPreferences;
    public $securitySettings;

    public function display()
    {
        echo "Personal Information: " . json_encode($this->personalInfo) . PHP_EOL;
        echo "Investment Preferences: " . json_encode($this->investmentPreferences) . PHP_EOL;
        echo "Security Settings: " . json_encode($this->securitySettings) . PHP_EOL;
    }

}