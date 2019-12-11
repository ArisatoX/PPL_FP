<?php

class Perpustakaan
{
    protected $nama, $lokasi, $buku, $peminjaman;

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

    public function catat_peminjaman($nama_buku)
    {
        $temp = new peminjaman($nama_buku);
        $peminjaman.push($temp);
    }
}