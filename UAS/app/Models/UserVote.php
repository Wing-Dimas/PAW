<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVote extends Model
{
    use HasFactory;

    protected $fillable = [
        "voting_date",
        "user_id",
        "voting_id",
        "voting_detail_id",
        "title",
        "header"
    ];
}
