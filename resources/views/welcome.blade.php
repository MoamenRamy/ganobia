@extends('layouts.main')

@section('content')
<body>

    <div class="layout">


        <!-- BODY -->
        <div class="body">



            <!-- MAIN -->
            <main class="main">

                <!-- CARDS (زودنا عدد + ألوان مختلفة) -->
                <div class="cards">

                    <div class="card c1">
                        <h2>120</h2>
                        <p>الضباط</p><button class="details-btn">اعرض التفاصيل</button>
                    </div>
                    <a href="{{ route('soldiers') }}" target="_blank">
                        <div class="card c2">
                            <h2>90</h2>
                            <p>Users</p><button class="details-btn">اعرض التفاصيل</button>
                        </div>
                    </a>
                    <div class="card c3">
                        <h2>45</h2>
                        <p>Orders</p><button class="details-btn">اعرض التفاصيل</button>
                    </div>
                    <div class="card c4">
                        <h2>10</h2>
                        <p>Reports</p><button class="details-btn">اعرض التفاصيل</button>
                    </div>
                    <div class="card c5">
                        <h2>300</h2>
                        <p>Visits</p><button class="details-btn">اعرض التفاصيل</button>
                    </div>
                    <div class="card c6">
                        <h2>20</h2>
                        <p>Feedback</p><button class="details-btn">اعرض التفاصيل</button>
                    </div>

                    <!-- زيادة Cards -->
                    <div class="card c7">
                        <h2>55</h2>
                        <p>Tasks</p><button class="details-btn">اعرض التفاصيل</button>
                    </div>
                    <div class="card c8">
                        <h2>18</h2>
                        <p>Projects</p><button class="details-btn">اعرض التفاصيل</button>
                    </div>
                    <div class="card c9">
                        <h2>7</h2>
                        <p>Alerts</p><button class="details-btn">اعرض التفاصيل</button>
                    </div>

                </div>
                @php
                    $buttons = [
                        'يوميات عددية بالاسلحة',
                        'يوميات عددية بالاسلحة',
                        'يوميات عددية بدرجات صف الضباط',
                        'يوميات عددية بفئات الجنود ',
                        'يومية الضم والشطب',
                        'يوميات عددية برتب الضباط والفئات',
                        'يوميات عددية مداهمة ودعم',
                        'يوميات عددية الحمة ',
                        'يوميات ببيان قطع الجنزير وعناصر المدرعات',
                    ];
                @endphp
                <section class="btn-section">

                    @foreach ($buttons as $i => $name)
                        <button class="round-btn c{{ $i + 1 }}">{{ $name }}</button>
                    @endforeach

                </section>

                <!-- DAILY BOX -->
                <section class="attendance-section">

                    <div class="attendance-header">
                        التمام اليومي
                    </div>

                    <!-- الدرجات الأخرى -->
                    <div class="attendance-card">

                        <div class="card-header">
                            الدرجات الأخرى
                        </div>

                        <div class="card-body">

                            <button class="pill blue">
                                إجمالي تمام الفرقة
                            </button>

                            <button class="pill blue">
                                راج
                            </button>

                            <button class="pill green">
                                57 ل
                            </button>

                            <button class="pill blue">
                                2 ل
                            </button>

                            <button class="pill yellow">
                                16 ل
                            </button>

                            <button class="pill green long-btn">
                                قيادة الفرقة 1 مش ميجا
                            </button>

                            <button class="pill green">
                                يومية تمام إدارة عسكرية
                            </button>

                        </div>

                    </div>

                    <!-- الضباط -->
                    <div class="attendance-card">

                        <div class="card-header">
                            الضباط
                        </div>

                        <div class="card-body">

                            <button class="pill blue">
                                إجمالي تمام الفرقة
                            </button>

                            <button class="pill blue">
                                راج
                            </button>

                            <button class="pill green">
                                57 ل
                            </button>

                            <button class="pill blue">
                                2 ل
                            </button>

                            <button class="pill yellow">
                                16 ل
                            </button>

                            <button class="pill green long-btn">
                                قيادة الفرقة 1 مش ميجا
                            </button>

                        </div>

                    </div>

                </section>

            </main>

        </div>

    </div>

</body>

@endsection

</html>
