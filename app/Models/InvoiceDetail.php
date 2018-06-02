<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    protected $fillable = ['invoice_id', 'lesson_id', 'contributor_id', 'flag'];
    public $timestamps = true;
}
