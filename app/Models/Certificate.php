<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{

    protected $table      = 'certificate';
    //protected $primaryKey = 'id';
    protected $fillable = [
        'certificate_id',
        'course'        , 
        'student_name'  , 
        'email'         , 
        'phone'         , 
        'project_name'  , 
        'transcript'    , 
        'course_from'   , 
        'course_to'     , 
        'issued_by'     , 
        'issued_on'     , 
        'status'        , 
        'remarks'       , 
        'type'];

    protected $guarded  = [];
    protected $hidden   = ['created_at'];

    /**
     * Get the options for generating the slug.
    */
    
}
