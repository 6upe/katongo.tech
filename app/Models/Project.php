<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Project extends Model
{
    use HasFactory;

    // Specify the fillable attributes for the project
    protected $fillable = [
        'title',
        'description',
        'client',
        'role',
        'project_date',
        'link',
        'media_paths'
    ];

    // Cast the media_paths attribute to an array
    // In your Project model
    protected $casts = [
        'project_date' => 'datetime',
        'media_paths' => 'array',
    ];


    // You can add custom methods for filtering images
    public function getImagesAttribute()
    {
        return collect(is_array($this->media_paths) ? $this->media_paths : [])->filter(function ($path) {
            return str_starts_with(Storage::disk('public')->mimeType($path), 'image');
        });
    }
    
    public function getVideosAttribute()
    {
        return collect(is_array($this->media_paths) ? $this->media_paths : [])->filter(function ($path) {
            return str_starts_with(Storage::disk('public')->mimeType($path), 'video');
        });
    }



}
