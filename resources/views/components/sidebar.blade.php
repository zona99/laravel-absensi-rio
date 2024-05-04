<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">SIAPA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}"><i class="fas fa-thumbtack"></i> SIAPA</a>
        </div>
        <ul class="sidebar-menu">

            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link "><i class="fas fa-users"></i><span>Users</span></a>
            </li>

            <li class="{{ Request::is('companies/*') ? 'active' : '' }}">
                <a href="{{ route('companies.show', 1) }}" class="nav-link"><i class="fas fa-building"></i><span>Company</span></a>
            </li>
            <li class="{{ Request::is('attendances') ? 'active' : '' }}">
                <a href="{{ route('attendances.index') }}" class="nav-link"><i class="fas fa-fingerprint"></i><span>Attendances</span></a>
            </li>

            <li class="{{ Request::is('permissions') ? 'active' : '' }}">
                <a href="{{ route('permissions.index') }}" class="nav-link"><i class="fas fa-book-open"></i><span>Permission</span></a>
            </li>

    </aside>
</div>
