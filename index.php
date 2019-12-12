<?php

    include 'perpustakaan.php';
    include 'perpustakaansekolah.php';
    include 'buku.php';
    include 'peminjaman.php';
    include 'anggota.php';
    include 'kategori.php';
    include 'kemitraan.php';
    include 'mediator.php';
    include 'perpustakaanUmum.php';
    include 'tamanbacamasyarakat.php';

    error_reporting(E_ERROR | E_PARSE);
    $buku1 = new Buku("Belajar HTML", "Komputer");
    $buku2 = new Buku("Belajar CSS", "Komputer");
    $buku3 = new Buku("Belajar JAVASCRIPT", "Komputer");
    $buku4 = new Buku("Belajar PHP", "Komputer");
    $buku5 = new Buku("Belajar LARAVEL", "Komputer");
    $buku6 = new Buku("Belajar React.js", "Komputer");
    $perpustakaan = new PerpustakaanSekolah("SMP N 2", "Jl. Darmo");
    $perpustakaan2 = new PerpustakaanUmum("Kota Surabaya", "Jl. Pahlawan");
    $perpustakaan3 = new PerpustakaanSekolah("SMA N 2", "Jl. Biliton");

    $perpustakaan->set('buku', $buku1);
    $perpustakaan->set('buku', $buku3);
    $perpustakaan->set('buku', $buku5);
    $perpustakaan2->set('buku', $buku2);
    $perpustakaan2->set('buku', $buku4);
    $perpustakaan2->set('buku', $buku6);
    $perpustakaan3->set('buku', $buku6);
    $perpustakaan3->set('buku', $buku3);

    $list_perpustakaan = [];
    array_push($list_perpustakaan, $perpustakaan, $perpustakaan2, $perpustakaan3);

    $mediator = new Mediator($list_perpustakaan);
    $mediator->send_request_cari("Belajar HTML");
    $mediator->send_request_pinjam("Belajar HTML", "SMP N 2", 0);
    // print($perpustakaan3->cari_buku("a"));