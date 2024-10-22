<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'address', 'contact_id'];

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
