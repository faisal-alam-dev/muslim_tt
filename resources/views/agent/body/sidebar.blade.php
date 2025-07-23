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

        </ul>

    </aside>

</div>
