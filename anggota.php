<?php

class Anggota
{
    private $id_user, $nama, $email, $telp, $alamat;

    public function __get($category)
    {
        switch($category) 
        {
            case 'id_user':
                return $this->id_user;
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

    public function __set($category, $value)
    {
        switch($category) 
        {
            case 'id_user':
                $this->id_user = $value;
            break;
            case 'nama':
                $this->nama = $value;
            case 'email':
                $this->email = $value;
            case 'telp':
                $this->telp = $value;
            case 'alamat':
                $this->alamat = $value;
        }
    }

}
