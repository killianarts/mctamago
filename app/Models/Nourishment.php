<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nourishment extends Model
{
    protected $guarded = ['id'];
    public function getImageUrlAttributes() {
        return $this->image ? asset("storage/" . $this->image) : null;
    }
}
