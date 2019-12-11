<?php

class Mediator
{
    private $daftar_perpustakaan;                                   # Array List Perpustakaan yang masuk ke sistem

    public function send_request_pinjam($nama_buku, $lokasi_buku, $id_user)
    {
        foreach($daftar_perpustakaan as $perpus)
        {
            if($lokasi_buku == $perpus->nama_perpustakaan)
            {
                $success = $perpus->peminjamanBuku($nama_buku, $id_user);
                if($success)
                {
                    print("Peminjaman Sukses");
                }
                else
                {
                    print("Peminjaman Tidak Berhasil dikarena buku yang anda minta tidak tersedia pada perpustakaan ini.");
                }
            }
        }
    }

    public function send_request_cari($nama_buku)
    {
        print("Buku yang anda cari ada di");
        $jumlah_perpus = 0;
        foreach($daftar_perpustakaan as $perpus)
        {
            $found = $perpus->cari_buku($nama_buku);
            if($found)
            {
                print($perpus->nama);
                $jumlah_perpus++;
            }
        }

        if($jumlah_perpus==0)
        {
            print("Buku tidak ditemukan di perpustakaan manapun.");
        }
    }
}