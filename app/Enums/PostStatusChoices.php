<?php

namespace App\Enums;

enum PostStatusChoices: string {
    case Public = 'PU';
    case Private = 'PR';
    case Archived = 'AR';
    case Draft = 'DR';
}
