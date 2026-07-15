@extends('layouts.main')
@section('content')
<div class="ald-portlet w-full">
    <div class="ald-portlet-title">
        <span>المحافظات</span>
    </div>

    <div class="ald-portlet-body">
        <a href="{{ route('governments.create') }}" class="ald-btn-add">
            + إضافة جديد
        </a>

        <table class="ald-weapons-table">
            <thead>
                <tr>
                    <th class="ald-col-id">م</th>
                    <th>اسم المحافظة</th>
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($governments as $gov)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $gov->name }}</td>
                    <td>
                        <a href="{{ route('governments.edit', $gov->id) }}">
                            <button class="place-btn-edit">تعديل</button>
                        </a>
                        <form action="{{ route('governments.destroy', $gov->id) }}" method="POST" style="display:inline;">
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
