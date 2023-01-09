<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class message extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'message',
    //     'topic_id'
    // ];

    // definir table pour query 
    // protected $table = '' 
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topic()
    {
        return $this->belongsTo(topic::class);
    }
}
