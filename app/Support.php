<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Support;
class Support extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="td_support";
    protected $fillable = [
        'project_id', 'title', 'content','doc1','doc2','ticket_no','created_by'
    ];
}
