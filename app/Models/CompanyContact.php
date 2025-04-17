<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyContact extends Model
{
    protected $fillable = ['company_name', 'phone', 'email', 'address', 'whatsapp_url', 'telegram_url'];
}