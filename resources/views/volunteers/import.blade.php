@extends('layouts.main')

@section('content')

<form

    action="{{ route('volunteers.import') }}"

    method="POST"

    enctype="multipart/form-data">

    @csrf

    <input

        type="file"

        name="file"

        accept=".xlsx,.xls,.csv"

        required>

    <button type="submit">

        استيراد

    </button>

</form>

@endsection
