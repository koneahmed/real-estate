<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class="nav-item active">
        <a class="d-flex align-items-center" href="{{ route('login') }}">
            <i data-feather='airplay'></i>
            <span class="menu-title text-truncate" data-i18n="Email">Tableau de bord</span>
        </a>
    </li>


    <li class=" navigation-header">
        <span data-i18n="Navigation">Comptes clients</span>
        <i data-feather="more-horizontal"></i>
    </li>

    <li class=" nav-item">
        <a class="d-flex align-items-center" href="#">
            <i data-feather='folder'></i>
            <span class="menu-title text-truncate" data-i18n="Dashboards">Comptes</span>
            {{-- <span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span> --}}
        </a>
        <ul class="menu-content">
            <li>
                <a class="d-flex align-items-center" href="{{ route('compte.index') }}">
                    <i data-feather="circle"></i>
                    <span class="menu-item text-truncate" data-i18n="Analytics">Tous les comptes</span>
                </a>
            </li>
            @foreach (\App\Models\Groupe::orderBy('name')->get() as $groupe)
                <li class="">
                    <a class="d-flex align-items-center" href="{{ route('compte.browse', $groupe->uuid) }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="eCommerce">{{ $groupe->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>


    <li class=" navigation-header">
        <span data-i18n="Navigation">Opérations sur comptes</span>
        <i data-feather="more-horizontal"></i>
    </li>

    <li class="nav-item">
        <a class="d-flex align-items-center" href="{{ route('operation.verifier') }}">
            <i data-feather='airplay'></i>
            <span class="menu-title text-truncate" data-i18n="Email">Vérification</span>
        </a>
    </li>
</ul>
