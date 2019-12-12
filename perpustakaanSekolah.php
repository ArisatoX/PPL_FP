<?php

class PerpustakaanSekolah extends Perpustakaan
{
    public function __construct($nama, $lokasi)
    {
        $this->nama = $nama;
        $this->lokasi = $lokasi;
        $this->listbuku = [];
        $this->peminjaman = [];
        $this->jenis = "Perpustakaan Sekolah";
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

    public function peminjamanBuku($nama_buku, $id_user)
    {
        echo nl2br("Terhubung dengan perpustakaan $this->nama\n");
        echo nl2br("Mencari ketersediaan buku $nama_buku pada perpustakaan $this->nama\n");

        $tersedia = 0;
        foreach($this->listbuku as $buku)
        {
            if($buku->get('judul') == $nama_buku)
            {
                if($buku->get('ketersediaan'))             # Buku tersedia
                {
                    $temp = new Peminjaman($nama_buku, $id_user);
                    array_push($listPeminjaman, $temp);
                    $tersedia = 1;
                    break;
                }
            }
        }

        echo nl2br("Mengirim hasil peminjaman dari perpustakaan $this->nama\n");
        return $tersedia;
    }

    public function cari_buku($nama_buku)
    {
        echo nl2br("$this->jenis : Terhubung dengan perpustakaan $this->nama\n");
        // print(newline);
        echo nl2br("$this->jenis : Mencari buku $nama_buku pada perpustakaan $this->nama\n");
        $found = 0;
        foreach($this->listbuku as $buku)
        {
            if($buku->get('judul') == $nama_buku)
            {
                $found = 1;
            }
        }

        echo nl2br("$this->jenis : Mengirim hasil pencarian dari perpustakaan $this->nama\n");
        return $found;
    }
}