@php
    $site_setting = siteSetting();

    use App\Models\OurContents;
    $our_mission = OurContents::where('id', 1)->latest()->first();
    $our_vision = OurContents::where('id', 2)->latest()->first();
@endphp


<div class="main-sidebar sidebar-style-2">

    <aside id="sidebar-wrapper">

        {{-- Admin Sidebar Logo --}}
        <div class="sidebar-brand mt-3">
            <a href="{{ route('admin.dashboard') }}">
                <img alt="image" src="{{ asset($site_setting->header_logo) }}" class="Site Logo" alt="Site Logo" style="width: 80px; height: 80px;" />
                {{-- <span class="logo-name">Muslim TT</span> --}}
            </a>
        </div>

        {{-- Admin Sidebar Menus --}}
        <ul class="sidebar-menu mt-4">

            <li class="menu-header">Main</li>

            {{-- Dashboard --}}
            <li class="dropdown {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i data-feather="monitor"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- Sliders --}}
            <li class="dropdown {{ request()->routeIs('admin.slider.list') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Sliders</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.slider.list') }}">Slider List</a></li>
                </ul>
            </li>

            {{-- About Us --}}
            <li class="dropdown {{ request()->routeIs(['admin.about-us.list', 'admin.enlistment.list', 'admin.successful_portfolios.list', 'admin.about-message.list', 'admin.our-team.list', 'admin.our-contents.edit']) ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>About Us</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->routeIs('admin.about-us.list') ? 'active' : '' }}" href="{{ route('admin.about-us.list') }}">About Us</a></li>
                    {{-- <li><a class="nav-link" href="{{ route('admin.our-contents.list') }}">Our Contents</a></li> --}}
                    @if ($our_mission)
                        <li><a class="nav-link {{ request()->routeIs('admin.our-contents.edit') && $our_mission->id == request()->route('id') ? 'active' : '' }}" href="{{ route('admin.our-contents.edit', $our_mission->id) }}">Our Mission</a></li>
                    @endif
                    @if ($our_vision)
                        <li><a class="nav-link {{ request()->routeIs('admin.our-contents.edit') && $our_vision->id == request()->route('id') ? 'active' : '' }}" href="{{ route('admin.our-contents.edit', $our_vision->id) }}">Our Vision</a></li>
                    @endif
                    {{-- <li><a class="nav-link" href="{{ route('admin.enlistment.list') }}">Important Enlistment</a></li> --}}
                    {{-- <li><a class="nav-link" href="{{ route('admin.successful_portfolios.list') }}">Firm Profile</a></li> --}}
                    {{-- <li><a class="nav-link" href="{{ route('admin.about-message.list') }}">Managing Partner Message</a></li> --}}
                    <li><a class="nav-link {{ request()->routeIs('admin.our-team.list') ? 'active' : '' }}" href="{{ route('admin.our-team.list') }}">Board Of Director</a></li>
                </ul>
            </li>

            {{-- Packages --}}
            <li class="dropdown {{ request()->routeIs(['admin.package.list', 'admin.package.confirmation.message']) ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Packages</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.package.list') }}">Package List</a></li>
                    <li><a class="nav-link" href="{{ route('admin.package.confirmation.message') }}">Package Booking</a></li>
                </ul>
            </li>

            {{-- Blog --}}
            <li class="dropdown {{ request()->routeIs(['admin.blog-category.list', 'admin.blog.list']) ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Blog</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.blog-category.list') }}">Blog Category List</a></li>
                    <li><a class="nav-link" href="{{ route('admin.blog.list') }}">Blog List</a></li>
                </ul>
            </li>

            {{-- <li class="dropdown {{ request()->routeIs(['admin.service.list', 'admin.client.list']) ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Services</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.service.list') }}">Services</a></li>
                    <li><a class="nav-link" href="{{ route('admin.client.list') }}">Our Clients</a></li>
                </ul>
            </li> --}}

            {{-- <li class="dropdown {{ request()->routeIs(['admin.publications.list', 'admin.circular.list', 'admin.gallery.list']) ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Resources</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.publications.list') }}">Publications</a></li>
                    <li><a class="nav-link" href="{{ route('admin.circular.list') }}">Notice/Circular</a></li>
                    <li><a class="nav-link" href="{{ route('admin.gallery.list') }}">Gallery</a></li>
                </ul>
            </li> --}}

            {{-- <li class="dropdown {{ request()->routeIs('admin.career.list') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Careers</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.career.list') }}">Job Post</a></li>
                    <li><a class="nav-link" href="{{ route('admin.job_apply.list') }}">Job Application</a></li>
                </ul>
            </li> --}}

            {{-- Contact Message --}}
            <li class="dropdown {{ request()->routeIs('admin.contact.list') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Contact</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.contact.list') }}">Contact Message</a></li>
                </ul>
            </li>

            {{-- Site Settings --}}
            <li class="dropdown {{ request()->routeIs('admin.setting.font-awesome') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="settings"></i>
                    <span>Settings</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.setting.edit', siteSetting()->id) }}">Site Setting</a></li>
                    <li><a class="nav-link" href="{{ route('admin.setting.font-awesome') }}">FontAwesome</a></li>
                </ul>
            </li>

        </ul>

    </aside>

</div>
