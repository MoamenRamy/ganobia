@extends('layouts.main')
@section('content')

    <body>
        <div class="home-layout">
            <!-- BODY -->
            <div class="home-body">
                <!-- MAIN -->
                <main class="home-main">
                    <!-- CARDS -->
                    <div class="home-cards">
                        @can('view-rateb3aly')
                        <a href="{{ route('volunteers.index') }}" target="_blank">
                            <div class="home-card home-c1">
                                <h2>120</h2>
                                <p>الراتب العالى</p>
                                <button class="home-details-btn">اعرض التفاصيل</button>
                            </div>
                        </a>
                        @endcan

                        @can('view-moganaden')
                        <a href="{{ route('soldiers.index') }}" target="_blank">
                            <div class="home-card home-c2">
                                <h2>90</h2>
                                <p>الجنود</p>
                                <button class="home-details-btn">اعرض التفاصيل</button>
                            </div>
                        </a>
                        @endcan
                        
                        <a href="{{ route('3rdfaxat') }}" target="_blank">
                            <div class="home-card home-c3">
                                <h2>45</h2>
                                <p>الفاكسات</p>
                                <button class="home-details-btn">اعرض التفاصيل</button>
                            </div>
                        </a>

                        <a href="{{ route('mala7e2dakhly') }}" target="_blank">
                            <div class="home-card home-c4">
                                <h2>10</h2>
                                <p>الملاحق الداخلية</p>
                                <button class="home-details-btn">اعرض التفاصيل</button>
                            </div>
                        </a>

                        <a href="{{ route('mala7e25argy') }}" target="_blank">
                            <div class="home-card home-c5">
                                <h2>300</h2>
                                <p>الملاحق الخارجية</p>
                                <button class="home-details-btn">اعرض التفاصيل</button>
                            </div>
                        </a>

                        <a href="{{ route('2mdadyaomee') }}" target="_blank">
                            <div class="home-card home-c6">
                                <h2>20</h2>
                                <p>الإمداداليومى</p>
                                <button class="home-details-btn">اعرض التفاصيل</button>
                            </div>
                        </a>

                        <a href="{{ route('soldiers.index') }}" target="_blank">
                            <div class="home-card home-c7">
                                <h2>55</h2>
                                <p>التوصيات</p>
                                <button class="home-details-btn">اعرض التفاصيل</button>
                            </div>
                        </a>

                        <a href="{{ route('soldiers.index') }}" target="_blank">
                            <div class="home-card home-c8">
                                <h2>18</h2>
                                <p>الإنتقاء</p>
                                <button class="home-details-btn">اعرض التفاصيل</button>
                            </div>
                        </a>

                        <a href="{{ route('soldiers.index') }}" target="_blank">
                            <div class="home-card home-c9">
                                <h2>7</h2>
                                <p>ما تم تسجيله</p>
                                <button class="home-details-btn">اعرض التفاصيل</button>
                            </div>
                        </a>
                    </div>

                    <div class="home-row">
                        <a href="{{ route('soldiers.index') }}" class="home-btn home-btn-circle home-btn-success"
                            style="margin-bottom:5">يومية عددية للجنود</a>
                        <a href="{{ route('soldiers.index') }}" class="home-btn home-btn-circle home-btn-success"
                            style="margin-bottom:5">يومية عددية للراتب العالى</a>
                        <a href="{{ route('soldiers.index') }}"class="home-btn home-btn-circle home-btn-success"
                            style="margin-bottom:5">يومية عددية بفئات
                            الراتب العالى</a>
                        <a href="{{ route('soldiers.index') }}" class="home-btn home-btn-circle home-btn-success"
                            style="margin-bottom:5">يومية عددية بدرجات الراتب العالى</a>
                        <a href="{{ route('soldiers.index') }}" class="home-btn home-btn-circle home-btn-success"
                            style="margin-bottom:5">يومية عددية بفئات الجنود</a>
                        <a href="{{ route('soldiers.index') }}" class="home-btn home-btn-circle home-btn-success"
                            style="margin-bottom:5">يومية الضم والشطب</a>
                    </div>

                    <!-- DAILY BOX -->
                    <section class="home-attendance-section">
                        <div class="home-attendance-header">
                            التمام اليومي
                        </div>

                        <!-- الدرجات الأخرى -->
                        <div class="home-attendance-card">
                            <div class="home-card-header">
                                الدرجات الأخرى
                            </div>

                            <div class="home-card-body">
                                <button class="home-pill home-blue">إجمالي تمام الفرقة</button>
                                <button class="home-pill home-blue">راج</button>
                                <button class="home-pill home-green">57 ل</button>
                                <button class="home-pill home-blue">2 ل</button>
                                <button class="home-pill home-yellow">16 ل</button>
                                <button class="home-pill home-green home-long-btn">قيادة الفرقة 1 مش ميجا</button>
                                <button class="home-pill home-green">يومية تمام إدارة عسكرية</button>
                            </div>
                        </div>

                        <!-- الضباط -->
                        <div class="home-attendance-card">
                            <div class="home-card-header">
                                الضباط
                            </div>

                            <div class="home-card-body">
                                <button class="home-pill home-blue">إجمالي تمام الفرقة</button>
                                <button class="home-pill home-blue">راج</button>
                                <button class="home-pill home-green">57 ل</button>
                                <button class="home-pill home-blue">2 ل</button>
                                <button class="home-pill home-yellow">16 ل</button>
                                <button class="home-pill home-green home-long-btn">قيادة الفرقة 1 مش ميجا</button>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </body>
@endsection
