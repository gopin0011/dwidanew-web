<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'project_image';

    public function media()
    {
        return $this->hasOne(Media::class, 'id', 'id_media');
    }
}
