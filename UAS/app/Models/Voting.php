<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "voting_description",
        "created_by",
        "voting_status",
        "categorie_id"
    ];
}
