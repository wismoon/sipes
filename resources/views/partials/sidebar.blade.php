<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">Wisnu</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <img>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="{{ request()->is('surat') ? 'active' : '' }}"><a class="nav-link" href="{{ url('surat') }}"><i class="fas fa-columns"></i> <span>Tambah Surat</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fas fa-table"></i> <span>Tables</span></a></li>
    <li class="{{ request()->is('arsip') ? 'active' : '' }}"><a href="{{ url('arsip') }}"><i class="fas fa-table"></i> <span>Arsip</span></a></li>
    <li class="menu-header">Users</li>
    <li class="{{ request()->is('admin') ? 'active' : '' }} "><a class="nav-link nav-link-user" href="{{route('admin')}}"><i class="fas fa-users"></i> <span>Users</span></a></li>
    <li class="{{ request()->is('logout') ? 'active' : '' }}"><a class="text-danger" href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
  </ul>
</aside>
