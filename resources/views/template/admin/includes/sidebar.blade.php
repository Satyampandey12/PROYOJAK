
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('/bower_components/admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <li class="header">MAIN NAVIGATION</li>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
         <li class="active treeview">
            <a href="{{route('home')}}">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

             <ul class="treeview-menu">
                 <li class="active"><a href="{{route('home')}}"><i class="fa fa-circle-o"></i> home</a></li>
            </ul>
          </li>


        
        @if (Auth::user()->getOriginal('role_id') == 2)
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Events</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
              <li class="active"><a href="{{ route('event-add') }}"><i class="fa fa-plus"></i> Add Events</a></li>
              <li><a href="{{route('event-list')}}"><i class="fa fa-circle-o"></i> List Events</a></li>
              <li><a href="{{route('my-invited-events')}}"><i class="fa fa-circle-o"></i> My invited Events </a></li>
            </ul>
          </li>
        @endif 

        @if (Auth::user()->getOriginal('role_id') == 1)
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Events</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
              <li><a href="{{route('event-list')}}"><i class="fa fa-circle-o"></i> List Events</a></li>
            </ul>
          </li>
        @endif 
      </ul>
    </section>
