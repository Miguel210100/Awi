<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{	
	protected $table = 'producto';
	protected $primaryKey = 'id';
	protected $id;
	protected $name;
	protected $price;
	protected $quantity;
}
