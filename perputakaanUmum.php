<?php

class PerpustakaanUmum extends Perpustakaan
{
    public function __get($choice)
    {
        switch($choice) 
        {
            case 'nama':
                return $this->nama;
            case 'lokasi':
                return $this->lokasi;
        }
        $jenis = "Perpustakaan Umum";
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

    public function peminjamanBuku($nama_buku, $id_user)
    {

        foreach($daftarbuku as $buku)
        {
            if($buku->nama == $nama_buku)
            {
                if($buku->ketersediaan)             # Buku tersedia
                {
                    $temp = new Peminjaman($nama_buku, $id_user);
                    $listPeminjaman.push($temp);
                    return 1;
                }
            }
        }

        return 0;
    }
}