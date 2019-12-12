<?php

class Mediator
{
    private $daftar_perpustakaan;                                   # Array List Perpustakaan yang masuk ke sistem

    public function __construct($list)
    {
        $this->daftar_perpustakaan = $list;
    }

    public function send_request_pinjam($nama_buku, $lokasi_buku, $id_user)
    {
        echo nl2br("\nMediator menerima request peminjaman $nama_buku pada perpustakaan $lokasi_buku\n");
        foreach($this->daftar_perpustakaan as $perpus)
        {
            if($lokasi_buku == $perpus->nama)
            {
                echo nl2br("Mediator: Menghubungkan pada perpustakaan $perpus->nama \n");
                $success = $perpus->peminjamanBuku($nama_buku, $id_user);
                echo nl2br("Mediator: Menerima hasil peminjaman dari perpustakaan $perpus->nama\n");
                if($success)
                {
                    echo nl2br("Mediator : Peminjaman Sukses\n");
                }
                else
                {
                    echo nl2br("Mediator : Peminjaman Tidak Berhasil dikarena buku yang anda minta tidak tersedia pada perpustakaan ini.\n");
                }
            }
        }
    }

    public function send_request_cari($nama_buku)
    {
        echo nl2br("Mediator menerima request untuk mencari buku dengan judul $nama_buku\n\n");

        $jumlah_perpus = 0;
        $list_perpus = [];
        foreach($this->daftar_perpustakaan as $perpus)
        {
            echo nl2br("Mediator: Menghubungkan pada perpustakaan $perpus->nama \n");
            $found = $perpus->cari_buku($nama_buku);
            echo nl2br("Mediator: Menerima hasil pencarian dari perpustakaan $perpus->nama\n\n");
            if($found)
            {
                array_push($list_perpus, $perpus->nama);
                $jumlah_perpus++;
            }
        }

        if($jumlah_perpus==0)
        {
            echo nl2br("Mediator    : Buku tidak ditemukan di perpustakaan manapun.\n");
        }
        else{
            print("Mediator     : Buku yang anda cari ada di\n");

            foreach($list_perpus as $p)
            {
                echo nl2br("$p\n");
            }
        }
    }
}