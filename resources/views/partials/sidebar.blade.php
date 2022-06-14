<aside id="sidebar-wrapper">
  <div class="sidebar text-center mt-2">
    <img href="" src="{{asset('image/logo_rokan_hilir.png')}}" style="width: 120px; height: 180px">
  </div>
  <br>
  <div>
    <ul class="sidebar-menu">
        <li class="menu-header">Menu</li>
        <li class="{{ request()->is('surat/daftarsurat') ? 'active' : '' }}"><a class="nav-link" href="{{ route('surat.index') }}"><i class="fas fa-columns"></i> <span>Buat Pengajuan Surat</span></a></li>
        <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fas fa-table"></i> <span>Daftar Pengajuan Surat</span></a></li>
        <li class="{{ request()->is('arsip') ? 'active' : '' }}"><a href="{{ url('arsip') }}"><i class="fas fa-table"></i> <span>Arsip Surat</span></a></li>
        <li class="menu-header">Users</li>
        <li class="{{ request()->is('admin') ? 'active' : '' }} "><a class="nav-link nav-link-user" href="{{route('admin')}}"><i class="fas fa-users"></i> <span>Dashboard</span></a></li>
        <li class="{{ request()->is('logout') ? 'active' : '' }}"><a class="text-danger" href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
    </ul>
  </div>
</aside>
