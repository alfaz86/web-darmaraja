
<li class="nav-title">Menu</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
@if (backpack_user()->role === 'admin')
<x-backpack::menu-item title="Pengguna" icon="la la-user" :link="backpack_url('user')" />
@endif

<li class="nav-title">Profil Kecamatan</li>
<x-backpack::menu-item title="Profil Kecamatan" icon="la la-list" :link="backpack_url('subdistrict-profile')" />

<li class="nav-title">Layanan Publik</li>
<x-backpack::menu-item title="Produk Layanan" icon="la la-book" :link="backpack_url('public-service')" />
<x-backpack::menu-item title="Pengaduan Publik" icon="la la-comment" :link="backpack_url('public-complaint')" />

<li class="nav-title">Potensi dan Wisata</li>
<x-backpack::menu-item title="Komoditas Unggulan" icon="la la-newspaper" :link="backpack_url('superior-comodity')" />
<x-backpack::menu-item title="Wisata" icon="la la-ribbon" :link="backpack_url('tour')" />