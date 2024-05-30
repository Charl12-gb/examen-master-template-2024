<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'medias';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
