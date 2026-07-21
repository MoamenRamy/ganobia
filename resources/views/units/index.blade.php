@extends('layouts.main')
@section('content')
<div class="place-portlet w-full">
    <div class="place-portlet-title">
        <span>الوحدات</span>
    </div>

    <div class="place-portlet-body">

        <a href="{{ route('units.create') }}" class="place-btn-add">
            + إضافة جديد
        </a>

        <table class="place-table">

            <thead>
                <tr>
                    <th class="place-col-id">م</th>
                    <th>اسم الوحدة</th>
                    <th>السياسة</th>
                    <th>المرتب</th>
                    <th>جنود</th>
                    <th>راتب عالى</th>
                    <th>إجمالى</th>
                    <th>نسبة الاستكمال (سياسة)</th>
                    <th>نسبى الاستكمال (مرتب)</th>
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($units as $unit)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="{{ route('units.show', $unit->id) }}">
                            {{ $unit->name }}</td>
                        </a>
                    </td>
                    <td>{{ $unit->seasa }}</td>
                    <td>{{ $unit->moratab }}</td>
                    <td>{{ $unit->soldiers }}</td>
                    <td>{{ $unit->volunteers }}</td>
                    <td>{{ $unit->total }}</td>
                    <td>{{ $unit->nesbat_estkmal_seasa }}</td>
                    <td>{{ $unit->nesbat_estkmal_moratab }}</td>
                    <td>
                        <a href="{{ route('units.edit', $unit->id) }}">
                            <button class="place-btn-edit">تعديل</button>
                        </a>
                        <form action="{{ route('units.destroy', $unit->id) }}" method="POST" style="display:inline;">
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
        {{ $units->links() }}
    </div>
</div>
@endsection
