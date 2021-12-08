<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'seller_id',
        'product_sub_category_id',
        'sector_id',
        'company_name',
        'company_name_slug',
        'company_description',
        'company_email',
        'company_phone',
    ];
}
