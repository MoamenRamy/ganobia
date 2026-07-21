@extends('layouts.main')
@section('content')
<div class="place-portlet w-full">
    <div class="place-portlet-title">
        <span>كل اماكن الالحاق</span>
    </div>

    <div class="place-portlet-body">

        <a href="{{ route('places.create') }}" class="place-btn-add">
            + إضافة جديد
        </a>

        <table class="place-table">

            <thead>
                <tr>
                    <th class="place-col-id">م</th>
                    <th>اسم مكان الالحاق</th>
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($places as $place)
                <tr>
                    <td class="place-col-id">{{ $place->id }}</td>
                    <td>
                        {{-- <a href="{{ route('attachment-place.show', $place->id) }}"> --}}
                            {{ $place->name }}</td>
                        {{-- </a> --}}
                    <td>

                        <a href="{{ route('places.edit', $place->id) }}">
                            <button class="place-btn-edit">تعديل</button>
                        </a>
                        <form action="{{ route('places.destroy', $place->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="place-btn-delete" onclick="return confirm('حذف؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>

    </div>

    <div class="mt-3">
        {{ $places->links() }}
    </div>
</div>
@endsection
