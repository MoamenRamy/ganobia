@section('content')
<div class="mh-page-container">
    <div class="mh-page-header">
        <h2>📊 مرتبات الحرب – الوحدات الرئيسية</h2>
    </div>

    <div class="mh-table-wrapper">
        <table class="mh-table">
            <thead>
                <tr>
                    <th class="mh-col-num">م</th>
                    <th>اسم الوحدة</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="mh-col-num">١</td>
                    <td><a href="{{ route('qyadatmante2a') }}">قيادة المنطقة الجنوبية العسكرية</a></td>
                </tr>
                <tr>
                    <td class="mh-col-num">٢</td>
                    <td><a href="{{ route('lewa305') }}">اللواء 305 مش مقل</a></td>
                </tr>
                <tr>
                    <td class="mh-col-num">٣</td>
                    <td><a href="{{ route('lewa117') }}">اللواء 117 مش مقل</a></td>
                </tr>
                <tr>
                    <td class="mh-col-num">٤</td>
                    <td><a href="{{ route('lewa166') }}">اللواء 166 مش مقل</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
