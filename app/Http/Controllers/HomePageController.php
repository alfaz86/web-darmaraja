<?php

namespace App\Http\Controllers;

use App\Models\SubdistrictProfile;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    protected string $sejarah = 'sejarah';
    protected string $luasWilayah = 'luas-wilayah';
    protected string $strukturOrganisasi = 'struktur-organisasi';
    protected string $tupoksi = 'tupoksi';
    protected string $visiMisi = 'visi-misi';


    public function sejarah(Request $request)
    {
        $data = SubdistrictProfile::where('menu', $this->sejarah)
            ->where('status', 1)
            ->first();
        return view('homepage.profil-kecamatan.sejarah', compact('data'));
    }

    public function luasWilayah(Request $request)
    {
        $data = SubdistrictProfile::where('menu', $this->luasWilayah)
            ->where('status', 1)
            ->first();
        return view('homepage.profil-kecamatan.luas-wilayah', compact('data'));
    }

    public function strukturOrganisasi(Request $request)
    {
        $data = SubdistrictProfile::where('menu', $this->strukturOrganisasi)
            ->where('status', 1)
            ->first();
        return view('homepage.profil-kecamatan.struktur-organisasi', compact('data'));
    }

    public function tupoksi(Request $request)
    {
        $data = SubdistrictProfile::where('menu', $this->tupoksi)
            ->where('status', 1)
            ->first();
        return view('homepage.profil-kecamatan.tupoksi', compact('data'));
    }

    public function visimisi(Request $request)
    {
        $data = SubdistrictProfile::where('menu', $this->visiMisi)
            ->where('status', 1)
            ->first();
        return view('homepage.profil-kecamatan.visi-misi', compact('data'));
    }
}
