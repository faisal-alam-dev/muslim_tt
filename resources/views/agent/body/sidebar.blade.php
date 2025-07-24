@php
    $site_setting = siteSetting();
@endphp


<div class="main-sidebar sidebar-style-2">

    <aside id="sidebar-wrapper">

        {{-- Agent Sidebar Logo --}}
        <div class="sidebar-brand">
            <a href="{{ route('agent.dashboard') }}">
                <img alt="image" src="{{ asset($site_setting->header_logo) }}" class="Site Logo" alt="Site Logo" style="width: 50px;" />
                <span class="logo-name">Muslim TT</span>
            </a>
        </div>

        {{-- Agent Sidebar Menus --}}
        <ul class="sidebar-menu">

            <li class="menu-header">Main</li>

            {{-- Dashboard --}}
            <li class="dropdown {{ request()->routeIs('agent.dashboard') ? 'active' : '' }}">
                <a href="{{ route('agent.dashboard') }}" class="nav-link">
                    <i data-feather="monitor"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- Agent Package List --}}
            <li class="dropdown {{ request()->routeIs('agent.package.list') ? 'active' : '' }}">
                <a href="{{ route('agent.package.list') }}" class="nav-link">
                    <i data-feather="list"></i>
                    <span>Package List</span>
                </a>
            </li>

            {{-- Agent Package Booking List --}}
            <li class="dropdown {{ request()->routeIs(['agent.package_booking.list', 'agent.package_booking.add']) ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Packages Booking</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('agent.package_booking.list') }}">Package Booking List</a></li>
                    <li><a class="nav-link" href="{{ route('agent.package_booking.add') }}">Package Booking Add</a></li>
                </ul>
            </li>

        </ul>

    </aside>

</div>
