<?php

namespace App\Http\Controllers;

use App\Models\PublicService;
use App\Models\SubdistrictProfile;
use App\Models\SuperiorCommodity;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

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

    public function wisata(Request $request)
    {
        $data = Tour::all();
        return view('homepage.potensi-dan-wisata.wisata', compact('data'));
    }

    public function komoditasUnggulan(Request $request)
    {
        $superiorCommodity = SuperiorCommodity::all()->groupBy('location');
        $page = $request->get('page') ?? 1;
        $perPage = 10;
        $total = $superiorCommodity->count();
        $data = new LengthAwarePaginator(
            $superiorCommodity->forPage($page, $perPage),
            $total,
            $perPage,
            $page,
            ['path' => $request->url()]
        );

        return view('homepage.potensi-dan-wisata.komoditas-unggulan', compact('data'));
    }

    public function produkLayanan(Request $request)
    {
        $data = PublicService::all();
        return view('homepage.layanan-publik.produk-layanan', compact('data'));
    }

    public function pengaduanPublik(Request $request)
    {
        return view('homepage.layanan-publik.pengaduan-publik');
    }
}
