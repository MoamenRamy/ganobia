@extends('layouts.main')
@section('content')
<div class="weapons-portlet w-full">
    <div class="weapons-portlet-title">
        <span>الصلاحيات</span>
    </div>

    <div class="weapons-portlet-body">
        <a href="{{ route('specialties.create') }}" class="weapons-btn-add">
            + إضافة جديد
        </a>

        <table class="weapons-table">
            <thead>
                <tr>
                    <th>م</th>
                    <th>اسم التخصص</th>
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($specialties as $specialtie)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $specialtie->name }}</td>
                    <td>
                        <a href="{{ route('specialties.edit', $specialtie->id) }}">
                            <button class="place-btn-edit">تعديل</button>
                        </a>
                        <form action="{{ route('specialties.destroy', $specialtie->id) }}" method="POST" style="display:inline;">
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
