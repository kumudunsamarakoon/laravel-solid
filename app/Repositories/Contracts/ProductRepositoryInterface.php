<?php


namespace App\Repositories\Contracts;


use Carbon\Carbon;

interface ProductRepositoryInterface
{
    public function getAfterDate(Carbon $date);
    public function create(object $product);
}
