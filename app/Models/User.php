<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function active_text(): string
    {
        if ($this->is_active === 0) {
            return 'not active';
        }

        return 'active';
    }
}
