<?php

namespace App\Models;

use Database\Factories\CompanyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    /** @use HasFactory<CompanyFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'street',
        'street_number',
        'postal_code',
        'city',
        'phone',
        'email',
        'debtor_number',
    ];


    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }


}
