@extends('layouts.main')
@section('content')
<div class="place-portlet w-full">
    <div class="place-portlet-title">
        <span>الملاحق</span>
    </div>

    <div class="place-portlet-body">

        <a href="{{ route('attachment-places.create') }}" class="place-btn-add">
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
                @foreach ($attachmentPlaces as $attachmentPlace)
                <tr>
                    <td class="place-col-id">{{ $attachmentPlace->id }}</td>
                    <td>
                        <a href="{{ route('attachment-places.show', $attachmentPlace->id) }}">
                            {{ $attachmentPlace->name }}</td>
                        </a>
                    <td>

                        <a href="{{ route('attachment-places.edit', $attachmentPlace->id) }}">
                            <button class="place-btn-edit">تعديل</button>
                        </a>
                        <form action="{{ route('attachment-places.destroy', $attachmentPlace->id) }}" method="POST" style="display:inline;">
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
</div>
@endsection
