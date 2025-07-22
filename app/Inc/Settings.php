<?php

namespace App\Inc;

class Settings
{
    public static function getUserRoles()
    {
        return [
            'admin' => 'Admin',
            'user' => 'User',
            'agent' => 'Agent',
        ];
    }

    public static function getGlobalStatus()
    {
        return [
            'active' => 'Active',
            'inactive' => 'Inactive',
        ];
    }
}
