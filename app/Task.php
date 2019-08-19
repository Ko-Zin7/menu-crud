<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable=['subject_id','title','description'];
    protected $guarded =[];

    public function subject()
    {
      return $this->belongsTo(Subject::class);
    }
}
