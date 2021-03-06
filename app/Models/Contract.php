<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
	use HasDateTimeFormatter;    
    public $timestamps = false;

    public function Receipts()
    {
        return $this->hasMany(Receipt::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
