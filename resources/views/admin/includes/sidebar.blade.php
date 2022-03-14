<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
      <a class="sidebar-brand" href="index.html">
        <span class="align-middle">Admin</span>
      </a>
  
      <ul class="sidebar-nav">
        <li class="sidebar-header">
          Pages
        </li>
  
        <li class="sidebar-item {{ (request()->routeIs('admin.dashboard')) ? 'active' : '' }}">
          <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
          </a>
        </li>
  
        @can('show employee')
        <li class="sidebar-item {{ (request()->routeIs('admin.karyawan')) ? 'active' : '' }}">
          <a class="sidebar-link" href="{{ route('admin.karyawan') }}">
            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Karyawan</span>
          </a>
        </li>
        @endcan
        
        @can('show salary')
        <li class="sidebar-item {{ (request()->routeIs('admin.gaji')) ? 'active' : '' }}">
          <a class="sidebar-link" href="{{ route('admin.gaji') }}">
            <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Gaji</span>
          </a>
        </li>
        @endcan

        @can('show attendence')
        <li class="sidebar-item {{ (request()->routeIs('admin.absensi')) ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('admin.absensi') }}">
              <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Absensi</span>
            </a>
          </li>
        @endcan
  
      </ul>
    </div>
  </nav>