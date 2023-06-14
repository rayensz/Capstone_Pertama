<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ $title === 'Halaman Home' ? '' : 'collapsed' }}  " href="/">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link  {{ $title === 'Form Penghitungan' ? '' : 'collapsed' }}" data-bs-target="#forms-nav"
                data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content {{ $title === 'Form Penghitungan' ? 'collapse show' : 'collapse' }} "
                data-bs-parent="#sidebar-nav">
                <li>
                    <a class="{{ $title === 'Form Penghitungan' ? 'active' : '' }} " href="formpenghitungan">
                        <i class="bi bi-circle"></i><span>Form Layouts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->
        <li class="nav-item">
            <a class="nav-link {{ $title === 'Profil' ? '' : 'collapsed' }}" href="/profil">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->


    </ul>

</aside><!-- End Sidebar-->
