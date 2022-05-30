<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceCategory;


class Service extends Model
{
    use HasFactory;
    protected $table = "services";

     public function category()
     {
         return $this->belongsTo(ServiceCategory::class, 'service_category_id');
     }
    public function provider()
    {
        return $this->belongsTo(ServiceProvider::class, 'service_providers_id');
    }

    public function users()
    {
        return $this->belongsTo(ServiceProvider::class, 'users_id');
    }
}
