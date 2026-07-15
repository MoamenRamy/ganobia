@extends('layouts.main')
@section('content')
<div class="weapons-portlet w-full">
    <div class="weapons-portlet-title">
        <span>الأسلحة</span>
    </div>

    <div class="weapons-portlet-body">
        <a href="{{ route('weapons.create') }}" class="weapons-btn-add">
            + إضافة جديد
        </a>

        <table class="weapons-table">
            <thead>
                <tr>
                    <th>م</th>
                    <th>اسم السلاح</th>
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($weapons as $weapon)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $weapon->name }}</td>
                    <td>
                        <a href="{{ route('weapons.edit', $weapon->id) }}">
                            <button class="place-btn-edit">تعديل</button>
                        </a>
                        <form action="{{ route('weapons.destroy', $weapon->id) }}" method="POST" style="display:inline;">
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
