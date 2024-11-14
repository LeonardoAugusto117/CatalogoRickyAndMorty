<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Character extends Model
{
    use HasFactory;

    // Defina aqui os campos que podem ser preenchidos, se necessário
    protected $fillable = ['name', 'species', 'image', 'url', 'created_at', 'updated_at'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'character_user', 'character_id', 'user_id');
    }
    
}