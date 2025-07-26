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

    /**
     * Get the agent that owns the PackageConfirmation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent()
    {
        return $this->belongsTo(\App\Models\User::class, 'created_by');
    }
}
