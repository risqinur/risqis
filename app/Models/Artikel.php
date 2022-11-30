<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artikel extends Model
{
    use HasFactory;
    protected $table='artikels';
    protected $guarded =['id'];

    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class);
    // }
    
    protected $hidden = [];
    /**
     * Get the kategori that owns the Artikel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}
