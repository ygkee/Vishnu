<?php

namespace YK\Vishnu;

class Vishnu
{
    public function controllers()
    {
        return [
            VISHNU_PATH.'/src/Http/Controllers/Vishnu' => app_path('Http/Controllers/Vishnu')
        ];
    }

    public function configs()
    {
        return [
            VISHNU_PATH.'/config/vishnu.php' => config_path('vishnu.php')
        ];
    }
}
