<?php

class Peminjaman
{
    private $id_peminjaman, $id_user, $tglPinjam, $deadline, $tglKembali, $bukuTerpinjam;

    public function __constructor($nama_buku, $id_user)
    {
        $this->bukuTerpinjam = $nama_buku;
        $this->id_user = $id_user;
        $this->tglPinjam = TIMESTAMP;
        $this->deadline = $this->tglPinjam;
        date_add($this->deadline , date_interval_create_from_date_string("7 days"));
    }

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

    public function setTanggalKembali()
    {
        $this->tglKembali=TIMESTAMP;
    }

}