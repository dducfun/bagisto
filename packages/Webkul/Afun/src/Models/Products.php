<?php

namespace Webkul\Afun\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Webkul\User\Models\Admin;
use Webkul\Afun\Contracts\Products as ProductsContract;

class Products extends Model implements ProductsContract
{
    /**
     * The attributes that are mass assignable.
     *
     * @var $fillable
     */
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'status'
    ];

    /**
     * Get the user that owns the post.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }
}
