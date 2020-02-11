<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostelRoom extends Model
{
    //
    protected $fillable = ['room_no', 'hostel_id', 'room_type_id', 'no_of_bed', 'cost_per_bed', 'description', 'is_active'];

    public function roomtype()
    {
        return $this->belongsTo(RoomType::class);
    }
    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }
}
