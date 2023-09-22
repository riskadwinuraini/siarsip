<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" 
          @role('admin') href="{{ route('admin.dashboard') }}" @endrole
          @role('employee') href="{{ route('employee.dashboard') }}" @endrole
          >
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
  @role('admin')
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">Master Data</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin.archive.index') }}"> Jenis Berkas </a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin.loan.index') }}"> Transaksi </a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin.employee.index') }}"> User </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#history" aria-expanded="false" aria-controls="history">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">History</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="history">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="/admin/history-pinjaman"> History Pinjaman </a></li>
              <li class="nav-item"> <a class="nav-link" href="/admin/history-pengembalian"> History Pengembalian </a></li>
            </ul>
          </div>
        </li>
    @endrole

    </ul>
  </nav>