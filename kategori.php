<?php

class Kategori
{
    private $id_kategori, $nama_kategori;

    public function __get($choice)
    {
        switch($choice)
        {
            case 'nama':
                return $this->nama_kategori;
        }
    }

    public function __set($choice, $value)
    {
        switch($choice)
        {
            case 'nama':
                $this->nama_kategori = $value;
                break;
        }
    }

}