@if (session('success'))
    <div style="width: 50%" class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
