<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mission extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['number_day'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getNumberDayAttribute()
    {
        $dateDebut = Carbon::parse($this->start_date);
        $dateFin = Carbon::parse($this->end_date);
        $differenceJours = $dateFin->diffInDays($dateDebut);
        return $differenceJours;
    }
}
