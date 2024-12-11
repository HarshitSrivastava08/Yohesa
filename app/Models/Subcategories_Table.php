<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategories_Table extends Model
{
    use HasFactory;

    protected $table = 'subcategories';
    protected $id = 'id';
    protected $fillable = ['categories__table_id', 'name'];

    public function category()
    {
        return $this->belongsTo(Categories_Table::class);
    }
}