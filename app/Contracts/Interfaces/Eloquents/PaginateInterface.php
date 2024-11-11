<?php
namespace App\Contracts\Interfaces\Eloquents;

use Illuminate\Pagination\LengthAwarePaginator;
/**
 * interface GetInterface
 *
 * Interface ini digunakan untuk mendefinisikan method get() yang akan
 * digunakan untuk mengambil data dari sebuah model
 *
 * @package App\Contracts\Interfaces\Eloquents
 */


interface PaginateInterface
{
    /**
     * Handle paginate data event from models.
     *
     * @param int $pagination
     *
     * @return LengthAwarePaginator
     */

    public function paginate(int $pagination = 5): LengthAwarePaginator;
}
