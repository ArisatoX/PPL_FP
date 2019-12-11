<?php

class Kategori
{
    private $id_kategori, $nama;

    public function __get($choice)
    {
        switch($choice)
        {
            case 'nama':
                return $this->nama;
        }
    }

    public function __set($choice, $value)
    {
        switch($choice)
        {
            case 'nama':
                $this->nama = $value;
                break;
        }
    }

}