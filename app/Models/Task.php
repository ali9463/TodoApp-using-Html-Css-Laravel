<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Define the table name (optional if your table name is the plural form of your model name)
    protected $table = 'tasks';

    // Allow mass assignment for these fields
    protected $fillable = ['task'];
}
