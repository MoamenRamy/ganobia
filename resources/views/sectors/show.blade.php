@extends('layouts.main')

@section('content')
<div class="place-portlet w-full">
    <div class="place-portlet-title">
        <a href="{{ route('sectors.index') }}">
            <span>{{ $sector->name }}</span>
        </a>
    </div>


<div class="place-portlet-body">

        <a href="{{ route('units.create', ['sector' => $sector->id]) }}" class="place-btn-add">
            + إضافة جديد
        </a>
        @if($sector->units->count())
        <table class="place-table">

            <thead>
                <tr>
                    <th class="place-col-id">م</th>
                    <th>اسم الوحدة</th>
                    {{-- <th>المرتب</th>
                    <th>السياسية</th>
                    <th>المجندين</th>
                    <th>راتب عالى</th>
                    <th>الاجمالى</th>
                    <th>نسبة استكمال السياسة</th>
                    <th>نسبة استكمال المرتب</th> --}}
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($sector->units as $unit)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{-- <a href="{{ route('units.show', $unit->id) }}"> --}}
                            {{ $unit->name }}
                        {{-- </a> --}}
                    </td>


                    {{-- <td>{{  $unit->moratab ?? 0  }}</td>
                    <td>{{ $unit->seasa ?? 0 }}</td>
                    <td>{{ $unit->soldiers ?? 0 }}</td>
                    <td>{{ $unit->volunteers ?? 0 }}</td>
                    <td>{{ $unit->total ?? 0 }}</td>
                    <td>{{ $unit->nesbat_estkmal_seasa ?? 0 }}%</td>
                    <td>{{ $unit->nesbat_estkmal_moratab ?? 0 }}%</td> --}}



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
        @else
            <p>لا توجد أماكن تابعة.</p>
        @endif

    </div>
    </div>

@endsection
