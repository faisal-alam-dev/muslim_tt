<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function blogDetail()
    {
        return $this->hasOne(BlogDetails::class, 'blog_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id')->orWhere('updated_by', 'id');
    }
}
