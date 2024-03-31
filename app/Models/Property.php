<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Property extends Model
// {
//     use HasFactory;
//     protected $table = 'properties';
//     protected $primaryKey = 'pid';
// }


class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';
    protected $primaryKey = 'pid';

    // Define the relationship with Location
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}