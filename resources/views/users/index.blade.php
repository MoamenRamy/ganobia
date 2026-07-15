@extends('layouts.main')
@section('content')
<div class="weapons-portlet w-full">
    <div class="weapons-portlet-title">
        <span>المستخدمين</span>
    </div>

    <div class="weapons-portlet-body">
        <a href="{{ route('users.create') }}" class="weapons-btn-add">
            + إضافة جديد
        </a>

        <table class="weapons-table">
            <thead>
                <tr>
                    <th>م</th>
                    <th>اسم المستخدم</th>
                    <th>البريد الإلكترونى</th>
                    <th>الصلاحية</th>
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">
                            <button class="place-btn-edit">تعديل</button>
                        </a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
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
