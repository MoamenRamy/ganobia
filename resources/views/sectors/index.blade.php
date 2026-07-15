@extends('layouts.main')
@section('content')
<div class="place-portlet w-full">
    <div class="place-portlet-title">
        <span>القطاعات / اللواءات</span>
    </div>

    <div class="place-portlet-body">

        <a href="{{ route('sectors.create') }}" class="place-btn-add">
            + إضافة جديد
        </a>

        <table class="place-table">

            <thead>
                <tr>
                    <th class="place-col-id">م</th>
                    <th>اسم القطاع</th>
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($sectors as $sector)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="{{ route('sectors.show', $sector->id) }}">
                            {{ $sector->name }}</td>
                        </a>
                    <td>

                        <a href="{{ route('sectors.edit', $sector->id) }}">
                            <button class="place-btn-edit">تعديل</button>
                        </a>
                        <form action="{{ route('sectors.destroy', $sector->id) }}" method="POST" style="display:inline;">
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
