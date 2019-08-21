<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table="owners";
    protected $primaryKey="id";
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable=["id","name"];

    public function Vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }
}
