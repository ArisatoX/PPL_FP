<?php

class Kemitraan extends Perpustakaan
{
    private $nama_mitra;

    public function __constructor($mitra)
    {
        $jenis = "Kemitraan";
        $nama_mitra = $mitra;
    }

    public function __get($choice)
    {
        switch($choice) 
        {
            case 'nama':
                return $this->nama;
            case 'lokasi':
                return $this->lokasi;
        }
    }

    public function __set($choice, $value)
    {
        switch($choice) 
        {
            case 'nama':
                $this->nama = $value;
                break;
            case 'lokasi':
                $this->lokasi = $value;
                break;
        }
    }
}