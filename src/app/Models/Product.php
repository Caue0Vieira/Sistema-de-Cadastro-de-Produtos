<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    public $table = 'products';

    public $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade',
        'category_id'
    ];

    protected $casts = [
        'nome' => 'string',
        'descricao' => 'string',
        'preco' => 'decimal:2'
    ];

    public static array $rules = [
        'nome' => 'required|string|max:255',
        'descricao' => 'nullable|string',
        'preco' => 'required|numeric|min:0',
        'quantidade' => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
