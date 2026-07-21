<!-- SIDEBAR -->
<div id="sidebar" class="sidebar">

    <ul class="menu">

        <!-- الصفحة الرئيسية -->
        <li>
            <a href="#">
                <span class="icon">🏠</span>
                <span>الصفحة الرئيسية</span>
            </a>
        </li>

        <!-- قسم الأفراد (القسم الرئيسي المدمج) -->

        {{-- <li class="has-sub">
            <div class="menu-title sub-title">
                <span class="icon">🔄</span> لوحة التحكم
                <span class="arrow">⌄</span>
            </div> --}}
            <ul class="no-sub" style="margin-top: 20px">
                @can('view-admin')
                <li> <a href="{{ route('users.index') }}">المستخدمين</a> </li>
                @endcan
                @can('view-moganaden')
                <li> <a href="{{ route('soldiers.index') }}">الجنود</a> </li>
                <li> <a href="{{ route('archives.index') }}">أرشيف الجنود</a> </li>
                @endcan
                @can('view-rateb3aly')
                <li> <a href="{{ route('volunteers.index') }}">الراتب العالى</a> </li>
                <li> <a href="{{ route('archive-volunteers.index') }}">ارشيف الراتب العالى</a> </li>
                @endcan
                <li> <a href="{{ route('sectors.index') }}">القطاعات</a> </li>
                <li> <a href="{{ route('units.index') }}">الوحدات</a> </li>
                <li> <a href="{{ route('specialties.index') }}">التخصصات</a> </li>
                <li> <a href="{{ route('weapons.index') }}">الأسلحة</a> </li>
                <li> <a href="{{ route('governments.index') }}">المحافظات</a> </li>
                <li> <a href="{{ route('attachment-places.index') }}">اماكن الالحاق (مقسمة)</a> </li>
                <li> <a href="{{ route('places.index') }}">كل اماكن الالحاق</a> </li>
            </ul>
        {{-- </li> --}}

        <li class="has-sub">
            <div class="menu-title">
                <div>
                    <span class="icon">👥</span>
                    لوحة التحكم
                </div>
                <span class="arrow">⌄</span>
            </div>

            <ul class="sub">
                <!-- 1. منظومة الجنود -->
                <li class="has-sub">
                    <div class="menu-title sub-title">
                        <span class="icon">🛡️</span> التحكم بالأعضاء
                        <span class="arrow">⌄</span>
                    </div>

                    <ul class="sub">
                        <li><a href="#">اضافة عضو جديد</a></li>
                        <li> <a href="{{ route('sectors.index') }}">الوحدات</a> </li>

                        <li class="has-sub">
                            <div class="menu-title sub-title">
                                <span class="icon"></span> الجنود
                                <span class="arrow">⌄</span>
                            </div>

                            <ul class="sub">
                                <li> <a href="#"> الدوارات </a> </li>
                                <li><a href="#">الأعدادت</a></li>
                            </ul>

                        </li>

                    </ul>

                </li>

                <li class="has-sub">
                    <div class="menu-title sub-title">
                        <span class="icon"></span> الأسلحة
                        <span class="arrow">⌄</span>
                    </div>

                    <ul class="sub">
                        <li> <a href="{{ route('weapons.index') }}"> الأسلحة </a> </li>
                        <li><a href=" {{ route('specialties.index') }} ">التخصصات</a></li>
                        <li><a href="{{ route('Trainingcenters') }}">مراكز التدريب</a></li>

                    </ul>

                </li>
                <li class="has-sub">
                    <div class="menu-title sub-title">
                        <span class="icon"></span> المحافظات
                        <span class="arrow">⌄</span>
                    </div>

                    <ul class="sub">
                        <li> <a href="{{ route('governments.create') }}"> اضافة محافظة </a> </li>
                        <li><a href=" {{ route('governments.index') }}  ">عرض الكل</a></li>

                    </ul>

                </li>


                <li class="has-sub">
                    <div class="menu-title sub-title">
                        <span class="icon"> <a href="{{ route('attachment-places.index') }}"></a> </span>الاماكن
                        <span class="arrow">⌄</span>

                    </div>


                    <ul class="sub">
                        <li> <a href="{{ route('attachment-places.index') }}"> الأماكن </a> </li>


                    </ul>
                </li>


                {{-- <li class="has-sub">
                    <div class="menu-title sub-title">
                        <span class="icon"></span>الوظائف
                        <span class="arrow">⌄</span>
                    </div>

                    <ul class="sub">
                        <li> <a href="{{ route('Addjob') }}"> اضافة وظيفة </a> </li>
                        <li><a href=" {{ route('Viewall') }} ">عرض الكل</a></li>

                    </ul>
                </li> --}}
            </ul>
    </ul>
    </li>

    <!--قائد الفرقة -->

    {{-- <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️ رئيس الفرع </span>
        </div>

    </li> --}}

    <!-- جهاز الأفراد -->

    {{-- <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️جهاز البيانات</span>
        </div>

    </li> --}}

    <!-- جهاز الارشيف -->

    {{-- <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️جهاز الراتب العالى</span>
        </div>

    </li> --}}

    <!-- جهاز البيانات -->

    {{-- <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️جهاز الملفات</span>
        </div>

    </li> --}}

    <!-- جهاز القطاع -->

    {{-- <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️جهاز السجلات</span>
        </div>

    </li> --}}

    <!-- جهاز شئون ضباط -->

    {{-- <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️جهاز شئون ضباط</span>
        </div>

    </li>--}}

    <!-- سجل التعديلات -->
    {{-- <li class="has-sub">
        <div class="menu-title sub-title">
            <span class="icon">سجل التعديلات ⏱️</span>
        </div>
    </li> --}}
    <!-- قسم الاداره العسكريه -->
    {{-- <li class="has-sub">
        <div class="menu-title sub-title">
            <span class="icon">قسم الادارة العسكرية</span>
            <span class="arrow">⌄</span>
        </div>
        <ul class="sub">
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">🛡️</span> الشهداء والمصابين
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">
                    <li><a href="#"> الشهداء والمصابين </a></li>
                    <li><a href="#"> يوميات عددية </a></li>
                    <li><a href="#"> المتواجدين بالمستشفيات </a></li>
                </ul>
            </li>
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">🛡️</span> المخططات
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">
                    <li><a href="#"> دور غرفة حبس / توليب / بوابة رئيسية </a></li>
                    <li><a href="#"> دورات الانضباطية لواءات </a></li>
                    <li><a href="#"> الدوريات الانضباطية الشعبة </a></li>
                    <li><a href="#"> مخطط مساعد ضابط نوبتجي </a></li>
                    <li><a href="#"> مخطط حكمدار ذخيرة </a></li>
                </ul>
            </li>
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">🛡️</span> اجازات الصف / الجنود
                    <span class="arrow">⌄</span>
                </div>

                <ul class="sub">
                    <li><a href="#"> يومية سير الجنود </a></li>
                    <li><a href="#"> ارشيف يوميات سير الجنود </a></li>
                    <li><a href="#"> يومية سير راتب عالى </a></li>
                    <li><a href="#"> ارشيف يوميات سير راتب عالي </a></li>
                    <li><a href="#"> مخطط اجازات الجنود </a></li>
                    <li><a href="#"> مخطط اجازات جنود الافرغ </a></li>
                    <li><a href="#"> مخطط اجازات جنود الافراد </a></li>
                    <li><a href="#"> مخطط اجازات 5 دفع </a></li>
                    <li><a href="#"> مخطط اجازات راتب عالي </a></li>
                    <li><a href="#"> مخطط اجازات راتب 4 دفع </a></li>
                    <li><a href="#"> مخطط اجازات صف فرع افراد </a></li>
                    <li><a href="#"> </a></li>
                </ul>
            </li>
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">🛡️</span> مكاتبات
                    <span class="arrow">⌄</span>
                </div>

                <ul class="sub">
                    <li><a href="#"> مكاتبة توقيع رئيس فرع</a></li>
                    <li> <a href="#"> مكاتبة توقيع رئيس اركان </a> </li>

                </ul>
            </li>

            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">🛡️</span> يوميات عددية
                    <span class="arrow">⌄</span>
                </div>

                <ul class="sub">
                    <li><a href="#"> عرض اليوميات</a></li>
                    <li> <a href="#"> أضافة يوميه جديدة </a> </li>

                </ul>
            <li class="has-sub">

                <div class="menu-title sub-title">
                    <span class="icon">الكمائن الخارجية</span>
                </div>
            </li>
        </ul>
    </li> --}}

    <!-- 3. الملاحق -->
    <li class="has-sub">
        <div class="menu-title sub-title">
            <span class="icon">🔄</span> الملاحق
            <span class="arrow">⌄</span>
        </div>
        <ul class="sub">

            <li> <a href="{{ route('mala7e2dakhly') }}"> الملاحق الداخلية </a> </li>
            <li> <a href="{{ route('mala7e25argy') }}"> الملاحق الخارجية </a> </li>
            <li> <a href="{{ route('inside7efzsalam') }}"> حفظ سلام داخل البلاد</a> </li>
            <li> <a href="{{ route('outside7efzsalam') }}"> حفظ سلام خارج البلاد</a> </li>
            <li> <a href="{{ route('3rdwagaza') }}"> عرض + أجازة</a> </li>
        </ul>
    </li>

    <!-- 4. مكاتبات -->
    <li class="has-sub">
        <div class="menu-title sub-title">
            <span class="icon">✉️</span> مكاتبات
            <span class="arrow">⌄</span>
        </div>
        <ul class="sub">
            <li><a href="#">مكاتبة توقيع رئيس فرع</a></li>
            <li><a href="#">مكاتبة توقيع رئيس أركان</a></li>
        </ul>
    </li>

    <!-- 5. الرفت -->
    <li class="has-sub">
        <div class="menu-title sub-title">
            <span class="icon">📈</span> الرفتّ
            <span class="arrow">⌄</span>
        </div>
        <ul class="sub">
            <li><a href="#">الرفت راتب عالي</a></li>
            <li><a href="#">الرفت جنود</a></li>

            <!-- مستوى ثالث: أرشيف الرفت -->
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">🗄️</span> أرشيف الرفت
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">
                    <li><a href="#">أرشيف الرفت راتب عالي</a></li>
                    <li><a href="#">أرشيف الرفت جنود</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <!-- 6. يوميات عددية -->
    <li class="has-sub">
        <div class="menu-title sub-title">
            <span class="icon">📅</span> يوميات عددية
            <span class="arrow">⌄</span>
        </div>
        <ul class="sub">

            <!-- مستوى ثالث: الملاحق (تحت اليوميات) -->
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">📑</span> الملاحق
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">
                    <li><a href=" {{ route('totalmala7e2') }} ">إجمالي الملاحق</a></li>
                    <li><a href=" {{ route('insidemal7e22') }} ">الملاحق الداخلية</a></li>
                    <li><a href=" {{ route('outsidemal7e22') }} ">الملاحق الخارجية</a></li>
                    <li><a href=" {{ route('3ddy7efzsalam') }} "> حفظ سلام داخل البلاد </a></li>
                    <li><a href=" {{ route('7efzsalam5areg') }} "> حفظ سلام خارج البلاد </a></li>
                    <li><a href=" {{ route('3ddysafr') }} "> سفر خارج البلاد </a></li>
                    <li><a href=" {{ route('3ddy3ardwagaza') }} ">عرض + أجازة </a></li>
                </ul>
            </li>

            <li><a href=" {{ route('2mdadyaomee') }} "> الامداد اليومى </a></li>
            <li><a href=" {{ route('egmalymar7ala') }} "> إجمالي المرحلة </a></li>
        </ul>
    </li>

    </ul>
    </li>

    <li class="has-sub">
        <div class="menu-title">
            <div>
                <span class="icon">👥</span>
                قسم الأفراد
            </div>
            <span class="arrow">⌄</span>
        </div>

        <ul class="sub">

            <!-- 1. منظومة الجنود -->
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">🛡️</span> منظومة الجنود
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">
                    <li><a href="#">منظومة الجنود</a></li>
                    <li><a href="#">أداة متطورة</a></li>
                    <li><a href="#">البواقي</a></li>
                    <li><a href="#">المؤثرات</a></li>
                    <li><a href="#">إضافة جنود</a></li>
                    <li><a href="#">يوميات السير</a></li>
                </ul>
            </li>

            <!-- 2. منظومة الراتب العالي -->
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">💰</span> منظومة الراتب العالي
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">
                    <li><a href="#">منظومة الراتب العالى</a></li>
                    <li><a href="#">أداة متطورة</a></li>
                    <li><a href="#">البواقي</a></li>
                    <li><a href="#">المؤثرات</a></li>
                    <li><a href="#">إضافة راتب عالي</a></li>
                </ul>
            </li>

            <!-- 3. الملاحق -->
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">🔄</span> الملاحق
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">
                    <li><a href="#">الملاحق الداخلية</a></li>
                    <li><a href="#">الملاحق الخارجية</a></li>
                    <li><a href="#">حفظ سلام داخل البلاد</a></li>
                    <li><a href="#">حفظ سلام خارج البلاد</a></li>
                    <li><a href="#">سفر خارج البلاد</a></li>
                    <li><a href="#">عرض + أجازة</a></li>
                </ul>
            </li>

            <!-- 4. مكاتبات -->
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">✉️</span> مكاتبات
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">
                    <li><a href="#">مكاتبة توقيع رئيس فرع</a></li>
                    <li><a href="#">مكاتبة توقيع رئيس أركان</a></li>
                </ul>
            </li>

            <!-- 5. الرفت -->
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">📈</span> الرفت
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">
                    <li><a href="#">الرفت راتب عالي</a></li>
                    <li><a href="#">الرفت جنود</a></li>

                    <!-- مستوى ثالث: أرشيف الرفت -->
                    <li class="has-sub">
                        <div class="menu-title sub-title">
                            <span class="icon">🗄️</span> أرشيف الرفت
                            <span class="arrow">⌄</span>
                        </div>
                        <ul class="sub">
                            <li><a href="#">أرشيف الرفت راتب عالي</a></li>
                            <li><a href="#">أرشيف الرفت جنود</a></li>
                        </ul>
                    </li>
                </ul>
            </li>


            <!-- 6. يوميات عددية -->
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">📅</span> يوميات عددية
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">

                    <!-- مستوى ثالث: الملاحق (تحت اليوميات) -->
                    <li class="has-sub">
                        <div class="menu-title sub-title">
                            <span class="icon">📑</span> الملاحق
                            <span class="arrow">⌄</span>
                        </div>
                        <ul class="sub">
                            <li><a href="#">إجمالي الملاحق</a></li>
                            <li><a href="#">الملاحق الداخلية</a></li>
                            <li><a href="#">الملاحق الخارجية</a></li>
                            <li><a href="#">حفظ سلام داخل البلاد</a></li>
                            <li><a href="#">حفظ سلام خارج البلاد</a></li>
                            <li><a href="#">سفر خارج البلاد</a></li>
                            <li><a href="#">عرض + أجازة</a></li>
                        </ul>
                    </li>

                    <li><a href="#">الامداد باليوم</a></li>
                    <li><a href="#">إجمالي المرحلة</a></li>
                </ul>
            </li>

            <!-- 7. الانتقاء (رابط مباشر بدون قائمة فرعية) -->
            <li>
                <a href="#">
                    <span class="icon">🎯</span>
                    <span>الانتقاء</span>
                </a>
            </li>

        </ul>
    </li>


    <!-- قسم الأرشيف (من الكود الأصلي العلوي) -->
    <li class="has-sub">
        <div class="menu-title">
            <div>
                <span class="icon">📂</span>
                قسم الأرشيف
            </div>
            <span class="arrow">⌄</span>
        </div>
        <ul class="sub">
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">📠</span> الفاكسات
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">
                    <li> <a href="{{ route('3rdfaxat') }}"> عرض الفاكسات </a> </li>
                    <li> <a href="{{ route('archivefaxat') }}"> ارشيف الفاكسات </a> </li>
                    <li> <a href="{{ route('newfile') }}"> إضافة فاكس </a> </li>




                </ul>
            </li>
            <li class="has-sub">
                <div class="menu-title sub-title">
                    <span class="icon">⏳</span> المتأخرات
                    <span class="arrow">⌄</span>
                </div>
                <ul class="sub">
                    <li><a href="#">عرض المتأخرات</a></li>
                    <li><a href="#">أرشيف المتأخرات</a></li>
                    <li><a href="#">إضافة متأخرات</a></li>
                </ul>
            </li>






        </ul>



    </li>

    <li class="has-sub">
        <div class="menu-title sub-title">
            <span class="icon">⏳</span> المتأخرات
            <span class="arrow">⌄</span>
        </div>
        <ul class="sub">
            <li><a href="#">عرض المتأخرات</a></li>
            <li><a href="#">أرشيف المتأخرات</a></li>
            <li><a href="#">إضافة متأخرات</a></li>
        </ul>
    </li>



    <li class="has-sub">
        <div class="menu-title sub-title">
            <span class="icon">⏳</span> البيانات
            <span class="arrow">⌄</span>
        </div>
        <ul class="sub">
            <li><a href=" {{ route('mawkefshary') }}  "> الموقف الشهري </a></li>
            <li><a href=" {{ route('moratb7arb') }}  "> مرتبات الحرب </a></li>
            <li><a href=" {{ route('moratbeslm') }}  "> مرتبات السلم </a></li>

        </ul>
    </li>



    {{-- <li class="has-sub">
        <div class="menu-title sub-title">
            <span class="icon">⏳</span> المتابعة
            <span class="arrow">⌄</span>
        </div>
        <ul class="sub">


            <li><a href=" {{ route('elraftrateb3aly') }}  "> الرفت - راتب عالي </a></li>
            <li><a href=" {{ route('elraftgnood') }}  "> الرفت - جنود</a></li>

        </ul>
    </li> --}}
    </ul>
    </li>
    </ul>
</div>
