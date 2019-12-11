<?php

class Peminjaman
{
    private $id_peminjaman, $tglPinjam, $deadline, $tglKembali, $bukuTerpinjam;

    public function __get($choice)
    {
        switch($choice) 
        {
            case 'tglPinjam':
                return $this->tglPinjam;
            case 'deadline':
                return $this->deadline;
            case 'tglKembali':
                return $this->tglKembali;
        }
    }

}