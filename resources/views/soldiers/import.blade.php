@extends('layouts.main')

@section('content')

<form action="{{ route('soldiers.import') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="file" name="file">

    <button type="submit">
        Import
    </button>
</form>

@endsection
