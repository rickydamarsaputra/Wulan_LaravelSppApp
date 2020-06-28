<div class="main-sidebar" tabindex="1" style="overflow: hidden; outline: none;">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{route('view.dashboard')}}">Laravel App</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{route('view.dashboard')}}">LA</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li><a class="nav-link" href="{{route('view.dashboard')}}"><i class="fas fas fa-th mr-2"></i> <span>Dashboard</span></a></li>
      <li><a class="nav-link" href="{{route('view.manageclass')}}"><i class="fas fa-pencil-ruler mr-2"></i> <span>Manage Class</span></a></li>
      <li><a class="nav-link" href="{{route('view.managespp')}}"><i class="far fa-file-alt mr-2"></i> <span>Manage Spp</span></a></li>
      <li><a class="nav-link" href="{{route('view.managestudent')}}"><i class="far fa-user mr-2"></i> <span>Manage Students</span></a></li>
      <li><a class="nav-link" href="{{route('view.managehistory')}}"><i class="far fa-bookmark mr-2"></i> <span>History Payments</span></a></li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-tags"></i> Make Payments
      </a>
    </div>
  </aside>
</div>