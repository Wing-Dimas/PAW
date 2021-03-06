<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotingDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        "header",
        "voting_details_description",
        "voting_id"
    ];
}
