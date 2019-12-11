<?php

class Mediator
{
    public function pinjam($nama_buku, $lokasi_buku)
    {
        switch($lokasi_buku) 
        {
            case $perpustakaan_A.get('nama'):
                return $perpustakaan_A.catat_peminjaman($nama_buku);
        }
    }
}