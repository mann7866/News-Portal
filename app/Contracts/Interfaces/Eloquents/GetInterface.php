<?php
namespace App\Contracts\Interfaces\Eloquents;

/**
 * interface GetInterface
 *
 * Interface ini digunakan untuk mendefinisikan method get() yang akan
 * digunakan untuk mengambil data dari sebuah model
 *
 * @package App\Contracts\Interfaces\Eloquents
 */

interface GetInterface
{
    /**
     * method get() digunakan untuk mengambil data dari sebuah model
     *
     * @return mixed
     */
    public function get(): mixed;
}
