
text/x-generic menu.blade.php ( ASCII HTML document text )
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{ route('dashboard') }}"><i class="fa fa-tachometer-alt"></i> <span>Dashboard</span></a>
        </li>
        @if(Auth::user()->roles[0]->role_name=='admin')
        <li>
          <a href="{{ url('/my-admin/user/list') }}"><i class="fa fa-user"></i> <span>User</span></a>
        </li>
        @endif
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Member List</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{ route('useremail.index') }}"><i class="fa fa-user"></i> <span>Email List</span></a></li>
          <li><a href="{{ route('emailcategory.index') }}"><i class="fa fa-list-alt"></i> <span>Member type</span></a></li>
          
          </ul>
        </li>

        <li class="treeview">  
            <a href="{{ route('mail.index') }}"><i class="fas fa-mail-bulk"></i> <span>Sent Bulk Email</span></a>
        </li>
        <li class="treeview">  
          <a href="{{ route('news-event.index') }}"><i class="fa fa-rss-square"></i> <span>Blogs</span></a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-clipboard"></i>
            <span>Project</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{ route('project.index') }}"><i class="fa fa-clipboard"></i> <span>Project List</span></a></li>
          <li><a href="{{ route('category.index') }}"><i class="fa fa-list-alt"></i> <span>Project Category</span></a></li>
          <li><a href="{{ route('district.index') }}"><i class="fa fa-map-marked-alt"></i> <span>Project District</span></a></li>
          <li><a href="{{ route('state.index') }}"><i class="fa fa-map-marked-alt"></i> <span>Project State</span></a></li>
          </ul>
        </li>

        
        <li class="treeview">
          <a href="{{ route('charity.index') }}"><i class="fa fa-tree"></i> <span>Charity Trek</span></a>
        </li>
        <li class="treeview">
          <a href="{{ route('pages.index') }}"><i class="fa fa-file-alt"></i> <span>Pages</span></a>
        </li>
        <li class="treeview">
          <a href="{{ route('menu') }}"><i class="fa fa-bars"></i> <span>Menu Management</span></a>
        </li>
        <li class="treeview">
          <a href="{{ route('gallery.index') }}"><i class="fa fa-sliders-h"></i> <span>Slider</span></a>
        </li>
        <li class="treeview">
          <a href="{{ route('partners.index') }}"><i class="fa fa-hands-helping"></i> <span>Partners Logo</span></a>
        </li>

        <li class="treeview">
          <a href="{{ route('popup.index') }}"><i class="fab fa-buysellads"></i> <span>Pop Up</span></a>
        </li>
        <li class="treeview">
          <a href="{{ route('year.index') }}"><i class="fa fa-plus-square"></i> <span>Year</span></a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->


  </aside>