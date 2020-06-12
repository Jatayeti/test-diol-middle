<?php


namespace App\Helpers;


class ProductSorts
{
    protected $builder;

    public function apply($query)
    {
        $this->builder = $query;

        $this->sort();

        return $this->builder;
    }

    protected function sort()
    {
        $sort = mb_strtolower(request()->get('sort'));

        if ($sort) {
            $sortBy = explode("-", $sort)[0];
            $sortType = explode("-", $sort)[1];

            $this->builder->orderBy($sortBy, $sortType);
        }
    }
}
