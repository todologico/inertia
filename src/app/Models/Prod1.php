<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod1 extends Model
{
    use HasFactory;

    protected $table = 'prod1';
    protected $primaryKey = 'prod1_id';

    protected $fillable = [
        'prod1_product',
        'prod1_code',
        'prod1_price1',
        'prod1_title1',
        'prod1_title2',
        'prod1_text1',
        'prod1_image1',
        'prod1_image2',
        'prod1_order',
        'prod1_enable',
        'prod1_token'
    ];
    
}
