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
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin.loan.index') }}"> Transaksi </a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin.employee.index') }}"> User </a></li>

            </ul>
          </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pemberkasan" aria-expanded="false" aria-controls="pemberkasan">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Pemberkasan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pemberkasan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.filing.index') }}"> PNS </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.filing.index') }}"> PPPK </a></li>

              </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#jenisBerkas" aria-expanded="false" aria-controls="jenisBerkas">
              <i class="icon-folder menu-icon"></i>
              <span class="menu-title">Jenis Berkas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="jenisBerkas">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.jenis-pns.index') }}"> PNS </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.jenis-pppk.index') }}"> PPPK </a></li>

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
              <li class="nav-item"> <a class="nav-link" href="/admin/history-pinjaman">Pinjaman </a></li>
              <li class="nav-item"> <a class="nav-link" href="/admin/history-pengembalian">Pengembalian </a></li>
            </ul>
          </div>
        </li>
    @endrole
    @role('employee')
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">Master Data</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.filing.index') }}"> Pemberkasan </a></li>
            </ul>
            </div>
        </li>
    @endrole

    </ul>
  </nav>
