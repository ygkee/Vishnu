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
}
