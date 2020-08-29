<div class="app-sidebar__user">
  <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    <div>
      <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
      <p class="app-sidebar__user-designation">{{ Auth::user()->email }}r</p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="{{ route('home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
   
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Location</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{ route('backend.division.index') }}"><i class="icon fa fa-circle-o"></i> Division</a></li>
        <li><a class="treeview-item" href="{{ route('backend.district.index') }}"><i class="icon fa fa-circle-o"></i> District</a></li>
        <li><a class="treeview-item"  href="{{ route('backend.upazila.index') }}"><i class="icon fa fa-circle-o"></i> Upazila</a></li>
      </ul>
    </li>
    <li>
      <a class="app-menu__item" href="{{ route('backend.blood.index') }}">
        <i class="app-menu__icon fa fa-file-code-o"></i>
        <span class="app-menu__label">Blood Group</span>
      </a>
    </li>
  </ul>