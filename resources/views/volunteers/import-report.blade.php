@extends('layouts.main')

{{-- @section('title', 'تقرير الاستيراد') --}}

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">
                تقرير استيراد بيانات المجندين
            </h4>
        </div>

        <div class="card-body">

            {{-- Summary --}}

            <div class="row text-center">

                <div class="col-md-3 mb-3">
                    <div class="card border-primary">
                        <div class="card-body">
                            <h6>إجمالي الصفوف</h6>
                            <h2>{{ $statistics->totalRows }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card border-success">
                        <div class="card-body">
                            <h6>تمت الإضافة</h6>
                            <h2 class="text-success">
                                {{ $statistics->insertedRows }}
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card border-warning">
                        <div class="card-body">
                            <h6>تم التحديث</h6>
                            <h2 class="text-warning">
                                {{ $statistics->updatedRows }}
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card border-secondary">
                        <div class="card-body">
                            <h6>تم التخطي</h6>
                            <h2>
                                {{ $statistics->skippedRows }}
                            </h2>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row text-center">

                <div class="col-md-3 mb-3">
                    <div class="card border-danger">
                        <div class="card-body">
                            <h6>أخطاء قاعدة البيانات</h6>
                            <h2 class="text-danger">
                                {{ $statistics->databaseErrors }}
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card border-danger">
                        <div class="card-body">
                            <h6>أخطاء التحقق</h6>
                            <h2 class="text-danger">
                                {{ $statistics->validationErrors }}
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card border-info">
                        <div class="card-body">
                            <h6>أخطاء Lookup</h6>
                            <h2 class="text-info">
                                {{ $statistics->lookupErrors }}
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card border-success">
                        <div class="card-body">
                            <h6>نسبة النجاح</h6>
                            <h2 class="text-success">
                                {{ $statistics->successRate() }} %
                            </h2>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Lookup Errors --}}

            @if(count($statistics->lookupMessages))

                <hr>

                <h4 class="text-danger mb-3">
                    أخطاء البيانات المرجعية (Lookup)
                </h4>

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">

                    <tr>

                        <th>#</th>

                        <th>الصف</th>

                        <th>الحقل</th>

                        <th>القيمة</th>

                    </tr>

                    </thead>

                    <tbody>

                    @foreach($statistics->lookupMessages as $i=>$item)

                        <tr>

                            <td>{{ $i+1 }}</td>

                            <td>{{ $item['row'] }}</td>

                            <td>{{ $item['field'] }}</td>

                            <td>{{ $item['value'] }}</td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

            @endif

            {{-- Validation Errors --}}

            @if(count($statistics->validationMessages))

                <hr>

                <h4 class="text-danger mb-3">
                    أخطاء التحقق
                </h4>

                <table class="table table-bordered">

                    <thead class="table-dark">

                    <tr>

                        <th>#</th>

                        <th>الصف</th>

                        <th>الحقل</th>

                        <th>الرسالة</th>

                    </tr>

                    </thead>

                    <tbody>

                    @foreach($statistics->validationMessages as $i=>$item)

                        <tr>

                            <td>{{ $i+1 }}</td>

                            <td>{{ $item['row'] }}</td>

                            <td>{{ $item['column'] }}</td>

                            <td>{{ $item['message'] }}</td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

            @endif

            {{-- Database Errors --}}

            @if(count($statistics->databaseMessages))

                <hr>

                <h4 class="text-danger mb-3">
                    أخطاء قاعدة البيانات
                </h4>

                <table class="table table-bordered">

                    <thead class="table-dark">

                    <tr>

                        <th>#</th>

                        <th>الصف</th>

                        <th>الرسالة</th>

                    </tr>

                    </thead>

                    <tbody>

                    {{-- @foreach($statistics->databaseMessages as $i=>$item)

                        <tr>

                            <td>{{ $i+1 }}</td>

                            <td>{{ $item['row'] }}</td>

                            <td style="direction:ltr;text-align:left">

                                {{ $item['message'] }}

                            </td>

                        </tr>

                    @endforeach --}}

                    @foreach($statistics['lookup_messages'] as $error)

                    <tr>
                        <td>{{ $error['field'] }}</td>

                        <td>{{ $error['value'] }}</td>

                        <td>أول ظهور فى الصف {{ $error['row'] }}</td>

                        <td>{{ $error['count'] }} مرة</td>
                    </tr>

                    @endforeach

                    </tbody>

                </table>

            @endif

        </div>

    </div>

</div>

@endsection
