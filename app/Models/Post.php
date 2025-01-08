<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

enum PostStatusChoices: string {
    case Public = 'PU';
    case Private = 'PR';
    case Archived = 'AR';
    case Draft = 'DR';
}

class Post extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'status' => PostStatusChoices::class,
    ];
    public function getImageUrlAttributes() {
        return $this->image ? asset("storage/" . $this->image) : null;
    }
}
