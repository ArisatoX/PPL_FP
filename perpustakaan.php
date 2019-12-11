<?php

class Perpustakaan
{
    protected $nama_perpustakaan, $lokasi, $listbuku, $listpeminjaman, $jenis;

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

    public function cari_buku($nama_buku)
    {
        foreach($listbuku as $buku)
        {
            if($buku->nama == $nama_buku)
            {
                return 1;
            }
        }

        return 0;
    }
}