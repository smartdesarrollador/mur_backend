<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPost extends Model
{
    use HasFactory;

    protected $table = 'test_posts';

    protected $fillable = ['image'];
}
