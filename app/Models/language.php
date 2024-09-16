<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class language extends Model
{
    use HasFactory;
    protected $table = "language";
    protected $fillable = ["name"];
=======
class Language extends Model
{
    use HasFactory;

    protected $table = 'language';

    protected $fillable = [
        'name'
    ];
>>>>>>> main
}
