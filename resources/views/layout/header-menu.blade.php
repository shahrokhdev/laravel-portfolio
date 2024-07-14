<nav class="header-menu p-2">
    <ul class="d-flex {{ session('locale') == 'fa' ? ' justify-content-start' : ' justify-content-end' }}">
        <li class="nav-link nav-settings mx-3">
            <div>
                <form action="{{ route('setLocale') }}" method="GET" id="formLocale">
                    <select name="locale" id="selectLocale" class="form-control text-center bg-danger text-light"
                        onchange="this.form.submit()">
                        <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>en
                        </option>
                        <option value="fa" {{ session('locale') == 'fa' ? 'selected' : '' }}>fa
                        </option>
                    </select>
                </form>
        </li>
    </ul>
</nav>
