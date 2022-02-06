<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'cover',
        'instruction',
        'status',
        'config',
        'started_at',
        'end_registration_at',
        'completion_at',
        'created_at',
        'updated_at'];

    public function work()
    {
        return $this->hasMany(Work::class);
    }

}
