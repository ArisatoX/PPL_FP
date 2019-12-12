<?php

class Buku
{
    private $id_buku, $judul, $ketersediaan, $kategori;

    public function __construct($judul, $kategori)
    {
        $this->judul=$judul;
        $this->kategori=$kategori;
        $this->ketersediaan=true;
    }

    public function get($choice)
    {
        switch($choice)
        {
            case 'judul':
                return $this->judul;
            case 'ketersediaan':
                return $this->ketersediaan;
        }
    }

    public function set($choice, $value)
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