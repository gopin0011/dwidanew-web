<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'project';

    protected $primaryKey = 'id';

    public function image()
    {
        return $this->hasMany(ProjectImage::class,'id_project');
    }

}
