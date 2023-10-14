<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\ItemController;
class Item extends Model
{
    protected $table = 'item';
    protected $primaryKey = 'ItemId';
    public $timestamps = false;

    use HasFactory;
}
