<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories_Table extends Model
{
    use HasFactory;

    protected $table = 'categories_tables';
    protected $id = 'id';
    protected $fillable = ['category_name'];

    public function subcategories()
    {
        return $this->hasMany(Subcategories_Table::class);
    }
}
