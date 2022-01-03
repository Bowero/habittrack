<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function results(): HasMany
    {
        return $this->hasMany(GoalResult::class);
    }

    public function isCheckedSubDays(int $days): bool
    {
        return $this->results()->whereDate('completed_at', today()->subDays($days))->exists();
    }

    public function isCheckedToday(): bool
    {
        return $this->results()->whereDate('completed_at', today())->where('is_complete', true)->exists();
    }
}
