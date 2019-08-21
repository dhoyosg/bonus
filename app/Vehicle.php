<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table="vehicles";
    protected $primaryKey="placa";
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable=["placa", "marca","owners_id"];
    public function Owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
