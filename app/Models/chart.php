<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chart extends Model
{
    use HasFactory;
    
    Schema::('chart', function(Blueprint $table){    
        $table->bigIncrement('id');
        $table->String('name');
        $table->String('email')->unique();
        $table->String('email_verified_at')->nullable();
        $table->String('password');
        $table->rememberToken();
        $table->timestamps(); 
    });
    
}
