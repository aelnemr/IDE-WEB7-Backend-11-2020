<?php


namespace App\Models;


use Carbon\Doctrine\CarbonTypeConverter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'user_id',
        'body'
    ];
}