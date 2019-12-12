<?php

class Perpustakaan
{
    protected $nama, $lokasi, $listbuku, $listpeminjaman, $jenis;

    public function __constructor($nama, $lokasi)
    {
        $this->nama = $nama;
        $this->lokasi = $lokasi;
        $this->listbuku = [];
        $this->peminjaman = [];
    }

    public function __get($choice)
    {
        switch($choice) 
        {
            case 'nama':
                return $this->nama;
            case 'lokasi':
                return $this->lokasi;
            case 'jenis':
                return $this->jenis;
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
        print("Terhubung dengan perpustakaan " + $this->nama);
        print("Mencari buku" + $nama_buku + "pada perpustakaan " + $this->nama);
        $found = 0;
        // foreach($listbuku as $buku)
        // {
        //     if($buku->nama == $nama_buku)
        //     {
        //         $found = 1;
        //     }
        // }

        for($i=0; $i<length(listbuku); $i++)
        {
            if($buku->nama == $nama_buku)
            {
                $found = 1;
            }
        }

        print("Mengirim hasil pencarian dari perpustakaan " + $this->nama);
        return $found;
    }
}