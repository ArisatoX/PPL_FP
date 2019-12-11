<?php

class Anggota
{
    private $id_user, $nama, $email, $telp, $alamat;

    public function __get($choice)
    {
        switch($choice) 
        {
            case 'nama':
                return $this->nama;
            case 'email':
                return $this->email;
            case 'telp':
                return $this->telp;
            case 'alamat':
                return $this->alamat;
        }
    }

    public function __set($choice, $value)
    {
        switch($choice) 
        {
            case 'nama':
                $this->nama = $value;
                break;
            case 'email':
                $this->email = $value;
                break;
            case 'telp':
                $this->telp = $value;
                break;
            case 'alamat':
                $this->alamat = $value;
                break;
        }
    }
}
