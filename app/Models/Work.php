<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'contest_id',
        'title',
        'file',
        'confirm',
        'participant_name',
        'particapant_lastname',
        'sum_of_points',
        'number_of_votes',
        'like',
        'dislike',
        'created_at',
        'updated_at'];

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }
}
