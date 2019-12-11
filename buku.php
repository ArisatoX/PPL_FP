<?php

class Buku
{
    private $id_buku, $judul, $ketersediaan, $kategori;

    public function __get($choice)
    {
        switch($choice)
        {
            case 'judul':
                return $this->judul;
            case 'ketersediaan':
                return $this->ketersediaan;
        }
    }

    public function __set($choice, $value)
    {
        switch($choice)
        {
            case 'judul':
                $this->judul = $value;
            break;
            case 'ketersediaan':
                $this->ketersediaan = $value;
            break;
        }
    }

}