<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public const STATUSES = ['new', 'in_progress', 'done', 'canceled'];
    protected $fillable = [
        'client_id',
        'service_id',
        'status',
        'comment'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
