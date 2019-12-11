<?php

class Buku
{
    private $id_buku, $judul;
    public $kategori;

    public function __get($choice)
    {
        switch($choice)
        {
            case 'judul':
                return $this->judul;
                
        }
        
    }

    public function __set($choice, $value)
    {
        switch($choice)
        {
            case 'judul':
                $this->judul = $value;
            break;
        }
    }

}