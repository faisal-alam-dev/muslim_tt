<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageConfirmation extends Model
{
    protected $guarded = [];

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id', 'id');
    }

    public function userNameByID()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
