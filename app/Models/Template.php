<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Template extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'thumbnail_url',
        'project_data',
        'html_content',
        'css_content',
    ];

    protected $casts = [
        'project_data' => 'array',
    ];

    protected static function booted(): void
    {
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->id = (string) Uuid::uuid4();
            }
        });
    }
}
