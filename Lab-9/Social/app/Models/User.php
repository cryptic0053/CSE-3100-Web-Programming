<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Define the table
    protected $table = 'users';

    // Define the columns that can be modified
    protected $fillable = ['name', 'email', 'password'];

    // Timestamps are not used
    public $timestamps = false;

    // Define the 1:1 relationship between User and Profile
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // Define the 1:M relationship between User and Post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}