
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="{{route('admin.index.index')}}"><i class="icon icon-home"></i> <span>Trang chủ</span></a> </li>
    <li class="{{ request()->is('admin/tag*') ? 'active' : '' }}"> <a href="{{route('admin.tag.index')}}"><i class="icon icon-signal"></i> <span>Quản lý tag tin tức</span></a> </li>
    <li class="{{ request()->is('admin/news*') ? 'active' : '' }}"> <a href="{{route('admin.news.index')}}"><i class="icon icon-inbox"></i> <span>Quản lý tin tức</span></a> </li>
    <li class="{{ request()->is('admin/stick*') ? 'active' : '' }}"> <a href="{{route('admin.stick.index')}}"><i class="icon icon-signal"></i> <span>Quản lý stick tour</span></a> </li>
    <li class="{{ request()->is('admin/tour*') ? 'active' : '' }}"> <a href="{{ route('admin.tour.index') }}"><i class="icon icon-inbox"></i> <span>Quản lý tour du lịch</span></a></li>
    <li class="{{ request()->is('admin/travel*') ? 'active' : '' }}"><a href="{{ route('admin.travel.index') }}"><i class="icon icon-th"></i> <span>Quản lý giá xe</span></a></li>
    <li class="{{ request()->is('admin/users*') ? 'active' : '' }}"><a href="{{ route('admin.users.index') }}"><i class="icon icon-user"></i> <span>Quản lý admin</span></a></li>
    <li class="{{ request()->is('admin/contact*') ? 'active' : '' }}"><a href="{{ route('admin.contact.index') }}"><i class="icon icon-fullscreen"></i> <span>Quản lý liên hệ</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->