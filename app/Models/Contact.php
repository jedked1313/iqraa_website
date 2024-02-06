<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $table = 'contacts';
    protected $guarded = ['id'];
    public $fillable = ['username','email','subject','message'];
}
