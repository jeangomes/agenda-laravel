<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 08/04/18
 * Time: 00:25
 */

namespace App\Repositories;


use App\Contact;

class ContactRepository extends BaseRepository
{
    protected $modelClass = Contact::class;

    public function getContacts($filters) {
        $query = $this->newQuery();
        $query->filter($filters);
        $query->orderBy('created_at');
        return $query->paginate(10);
    }
}