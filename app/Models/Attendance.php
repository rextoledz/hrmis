<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Attendance extends Model
{
    use HasFactory;
    public function emp(){
        return $this->belongsTo('App\Models\Employee', 'employee_id', 'employee_id');
    }
    public static function getUndertimeHour($am_in, $am_out, $pm_in, $pm_out){
       
    }
}
