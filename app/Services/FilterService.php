<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Builder;

class FilterService
{
    /**
     * Apply search filters to the query.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  array  $filters
     * @param  array  $searchableColumns
     * @param  string|null  $relation  Relation name if filtering on a relation's column
     * @param  string|null  $relationColumn  Column name if filtering on a relation's column
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function applyFilter(
        Builder $query,
        array $filters,
        array $searchableColumns,
        ?string $relation = null,
        ?string $relationColumn = null
    ): Builder {
        if (isset($filters['search']) && !empty($filters['search'])) {
            $searchTerm = '%' . $filters['search'] . '%';
            $query->where(function ($query) use ($searchTerm, $searchableColumns, $relation, $relationColumn) {
                foreach ($searchableColumns as $column) {
                    $query->orWhere($column, 'like', $searchTerm);
                }

                if ($relation && $relationColumn) {
                    $query->orWhereHas($relation, function ($q) use ($relationColumn, $searchTerm) {
                        $q->where($relationColumn, 'like', $searchTerm);
                    });
                }
            });
        }

        if (isset($filters['category_ids']) && !empty($filters['category_ids'])) {
            $query->whereHas('categories', function ($q) use ($filters) {
                $q->whereIn('categories.id', $filters['category_ids']);
            });
        }

        if (isset($filters['status']) && !empty($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        if (isset($filters['date']) && !empty($filters['date'])) {
            $dates = explode(' to ', $filters['date']);

            if (count($dates) === 2) {
                $query->whereBetween('created_at', [$dates[0], $dates[1]]);
            } elseif (count($dates) === 1) {
                $query->whereDate('created_at', $dates[0]);
            }
        }

        return $query;
    }
}
