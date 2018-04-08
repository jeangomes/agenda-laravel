<?php


namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class ContactFilters extends QueryFilters
{

    /**
     * Filter by name.
     *
     * @param  string $name
     * @return Builder
     */
    public function name($name)
    {
        return $this->builder->where('name', 'LIKE', '%' . $name . '%');
    }

    /**
     * Filter by telephone.
     *
     * @param  string $telephone
     * @return Builder
     */
    public function telephone($telephone)
    {
        return $this->builder->where('telephone', 'LIKE', '%' . $telephone . '%');
    }

    /**
     * Filter by email.
     *
     * @param  string $email
     * @return Builder
     */
    public function email($email)
    {
        return $this->builder->where('email', 'LIKE', '%' . $email . '%');
    }
}
