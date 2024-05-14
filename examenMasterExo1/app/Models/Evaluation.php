<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evaluation extends Model
{
    use HasFactory;

    protected $table = 'evaluations';

    protected $appends = ['moyen_total'];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getMoyenTotalAttribute()
    {
        $total = (float)$this->skills + (float)$this->pontualite + (float)$this->assiduite + (float)$this->respect;
        return $total/4;
    }
}
