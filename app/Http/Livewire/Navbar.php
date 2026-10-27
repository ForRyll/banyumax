<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $menus = [
        ['name' => 'Beranda', 'id' => 'beranda', 'href' => '#beranda'],
        ['name' => 'Tentang Kami', 'id' => 'tentang-kami', 'href' => '#tentang-kami'],
        ['name' => 'Solusi', 'id' => 'solusi', 'href' => '#solusi'],
        ['name' => 'Kemitraan', 'id' => 'kemitraan', 'href' => '#kemitraan'],
        ['name' => 'Kontak', 'id' => 'kontak', 'href' => '#kontak'],
        ['name' => 'Berita', 'id' => 'berita', 'href' => '#berita'],
    ];

    public function render()
    {
        return view('livewire.navbar');
    }
}
