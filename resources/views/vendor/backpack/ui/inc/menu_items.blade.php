
<li class="nav-title">Menu</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<x-backpack::menu-item title="Pengguna" icon="la la-user" :link="backpack_url('user')" />

<li class="nav-title">Profil Kecamatan</li>
<x-backpack::menu-item title="Profil Kecamatan" icon="la la-question" :link="backpack_url('subdistrict-profile')" />

<li class="nav-title">Layanan Publik</li>
<x-backpack::menu-item title="Produk Layanan" icon="la la-question" :link="backpack_url('#')" />
<x-backpack::menu-item title="Pengaduan Publik" icon="la la-question" :link="backpack_url('#')" />

<li class="nav-title">Potensi dan Wisata</li>
<x-backpack::menu-item title="Komoditas Unggulan" icon="la la-question" :link="backpack_url('superior-comodity')" />
<x-backpack::menu-item title="Wisata" icon="la la-question" :link="backpack_url('tour')" />