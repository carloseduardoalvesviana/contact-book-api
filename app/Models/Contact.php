<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;

    protected $with = ['phones', 'emails'];

    protected $fillable = ['name'];

    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class, 'contact_id');
    }

    public function emails(): HasMany
    {
        return $this->hasMany(Email::class, 'contact_id');
    }
}
