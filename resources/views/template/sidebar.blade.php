<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a href="{{route('dashboard')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Menu Leads</span>
    </li>

    <li class="menu-item {{ request()->routeIs('leads.index') ? 'active' : '' }}">
        <a href="" class="menu-link">
            <i class="menu-icon tf-icons bx bx-search"></i>
            <div data-i18n="Search Leads">Search Leads</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('leads.data') ? 'active' : '' }}">
        <a href="" class="menu-link">
            <i class="menu-icon tf-icons bx bx-data"></i>
            <div data-i18n="Data Leads">Data Leads</div>
        </a>
    </li>




    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Marketing</span>
    </li>

    <li class="menu-item {{ request()->routeIs('whatsapp.devices') ? 'active' : '' }}">
        <a href="" class="menu-link">
            <i class="menu-icon tf-icons bx bx-devices"></i>
            <div data-i18n="Devices">WhatsApp Devices</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('whatsapp.templates') ? 'active' : '' }}">
        <a href="" class="menu-link">
            <i class="menu-icon tf-icons bx bx-message-square-detail"></i>
            <div data-i18n="Template Pesan">Template Pesan</div>
        </a>
    </li>


</ul>