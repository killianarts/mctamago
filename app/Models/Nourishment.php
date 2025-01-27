<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

enum NourishmentCategoryChoices: string {
    case Food = 'food';
    case Drink = 'drink';
}

class Nourishment extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'category' => NourishmentCategoryChoices::class,
    ];
    public function getImageUrlAttributes() {
        return $this->image ? asset("storage/" . $this->image) : null;
    }
}
