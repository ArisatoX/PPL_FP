<?php

class Kemitraan extends Perpustakaan
{
    private $mitra;
    public function __construct($nama, $lokasi, $mitra)
    {
        $this->nama = $nama;
        $this->lokasi = $lokasi;
        $this->listbuku = [];
        $this->peminjaman = [];
        $this->jenis = "Kemitraan";
        $this->mitra=$mitra;
    }

    public function get($choice)
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

    public function set($choice, $value)
    {
        switch($choice) 
        {
            case 'nama':
                $this->nama = $value;
                break;
            case 'lokasi':
                $this->lokasi = $value;
                break;
            case 'buku':
                array_push($this->listbuku, $value);
                break;
        }
    }

    public function cari_buku($nama_buku)
    {
        echo nl2br("Terhubung dengan perpustakaan $this->nama\n");
        // print(newline);
        echo nl2br("Mencari buku $nama_buku pada perpustakaan $this->nama\n");
        $found = 0;
        foreach($this->listbuku as $buku)
        {
            if($buku->get('judul') == $nama_buku)
            {
                $found = 1;
            }
        }

        echo nl2br("Mengirim hasil pencarian dari perpustakaan $this->nama\n");
        return $found;
    }
}