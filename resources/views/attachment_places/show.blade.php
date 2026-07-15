@extends('layouts.main')

@section('content')
<div class="place-portlet w-full">
    <div class="place-portlet-title">
        <a href="{{ route('attachment-places.index') }}">
            <span>{{ $attachmentPlace->name }}</span>
        </a>
    </div>


<div class="place-portlet-body">

        <a href="{{ route('places.create', ['attachmentPlace' => $attachmentPlace->id]) }}" class="place-btn-add">
            + إضافة جديد
        </a>
        @if($attachmentPlace->places->count())
        <table class="place-table">

            <thead>
                <tr>
                    <th class="place-col-id">م</th>
                    <th>اسم المكان</th>
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($attachmentPlace->places as $place)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="{{ route('places.show', $place->id) }}">
                            {{ $place->name }}
                        </a>
                    </td>
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
        @else
            <p>لا توجد أماكن تابعة.</p>
        @endif

    </div>
    </div>

@endsection
