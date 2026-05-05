<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a href="{{route('dashboard')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
    </li>

    <!-- Blog -->
    <li class="menu-item {{ request()->is('admin/blog*') ? 'active' : '' }}">
        <a href="{{ route('admin.blog.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-news"></i>
            <div data-i18n="Blog">Blog Management</div>
        </a>
    </li>

</ul>