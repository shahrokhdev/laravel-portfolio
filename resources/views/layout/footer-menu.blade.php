<nav class="menu bg-dark mt-5" dir="{{ session('locale') == 'fa' ? 'rtl' : 'ltr' }}">
    <ul class="nav d-flex justify-content-md-between justify-content-center">
        <li
            class="nav-item hvr-grow-shadow fs-5 px-5 py-3 text-center d-flex align-items-center justify-content-center flex-row-reverse">
            <a href="/" class="nav-link text-light d-flex justify-content-center align-items-center">
                <span class="d-md-block d-none mx-3">
                    {{ __('general.Home') }}
                </span>
                <i class="bi bi-house-door"></i>
            </a>
        </li>

        <li
            class="nav-item hvr-grow-shadow fs-5 px-5 py-3 text-center d-flex align-items-center justify-content-center flex-row-reverse">
            <a href="/about" class="nav-link text-light d-flex justify-content-center align-items-center">
                <span class="d-md-block d-none mx-3">{{ __('general.About') }}</span>
                <i class="bi bi-person-fill"></i>
            </a>

        </li>
        <li
            class="nav-item hvr-grow-shadow fs-5 px-5 py-3 text-center d-flex align-items-center justify-content-center flex-row-reverse">
            <a href="/projects" class="nav-link text-light d-flex justify-content-center align-items-center">
                <span class="d-md-block d-none mx-3">{{ __('general.Projects') }}</span>
                <i class="bi bi-window"></i>
            </a>

        </li>
        <li
            class="nav-item hvr-grow-shadow fs-5 px-5 py-3 text-center d-flex align-items-center justify-content-center flex-row-reverse ">
            <a href="/contact" class="nav-link text-light d-flex justify-content-center align-items-center">
                <span class="d-md-block d-none mx-3">{{ __('general.Contact') }}</span>
                <i class="bi bi-file-person-fill"></i>
            </a>
        </li>
    </ul>
</nav>
