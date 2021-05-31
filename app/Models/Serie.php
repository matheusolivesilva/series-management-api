<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
    protected $appends = ['links'];
    protected $perPage = 3;

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function setNameAttribute($name)
    { 
        $this->attributes['name'] = strtoupper($name);
    }

    public function getLinksAttribute(): array
    {
        return [
            'self' => '/api/episodes/' . $this->id,
            'episodes' => '/api/series/' . $this->id . '/episodes'
        ];
    }
}

