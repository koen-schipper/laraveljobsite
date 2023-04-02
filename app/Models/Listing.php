<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . $filters['tag'] . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . $filters['search'] . '%')
                ->orWhere('description', 'like', '%' . $filters['search'] . '%')
                ->orWhere('tags', 'like', '%' . $filters['search'] . '%')
                ->orWhere('company', 'like', '%' . $filters['search'] . '%');
        }

        if ($filters['contract'] ?? false) {
            $query->where('contract', $filters['contract']);
        }

        if ($filters['hours'] ?? false) {
            $query->where('hours', $filters['hours']);
        }

        if ($filters['min_salary'] ?? false) {
            $query->where('min_salary', '>=', $filters['min_salary']);
        }

        if ($filters['max_salary'] ?? false) {
            $query->where('max_salary', '<=', $filters['max_salary']);
        }

        if ($filters['education'] ?? false) {
            $query->where('education', $filters['education']);
        }

        if ($filters['category'] ?? false) {
            $query->where('category', $filters['category']);
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
