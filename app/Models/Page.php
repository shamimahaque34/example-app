<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['menu_id', 'title', 'content'];

    // Relationship: A page belongs to a menu
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
