@if (session('message'))
<div class="alert {{ session('alert-class', 'alert-success') }}">
    <span class="lead"> {{ session('message') }}</span>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif