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
                        <li> <a href="{{ route('units') }}">الوحدات</a> </li>

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
                        <li> <a href="{{ route('weapons') }}"> الأسلحة </a> </li>
                        <li><a href=" {{ route('specialtie') }} ">التخصصات</a></li>
                        <li><a href="{{ route('Trainingcenters') }}">مراكز التدريب</a></li>

                    </ul>

                </li>
                <li class="has-sub">
                    <div class="menu-title sub-title">
                        <span class="icon"></span> المحافظات
                        <span class="arrow">⌄</span>
                    </div>

                    <ul class="sub">
                        <li> <a href="{{ route('government') }}"> اضافة محافظة </a> </li>
                        <li><a href=" {{ route('Alldata') }}  ">عرض الكل</a></li>

                    </ul>



                </li>


                <li class="has-sub">
                    <div class="menu-title sub-title">
                        <span class="icon"> <a href="{{ route('place') }}"></a> </span>الاماكن
                        <span class="arrow">⌄</span>

                    </div>


                      <ul class="sub">
                        <li> <a href="{{ route('place') }}"> الأماكن </a> </li>


                    </ul>
                </li>




                <li class="has-sub">
                    <div class="menu-title sub-title">
                        <span class="icon"></span>الوظائف
                        <span class="arrow">⌄</span>
                    </div>

                    <ul class="sub">
                        <li> <a href="{{ route('Addjob') }}"> اضافة وظيفة </a> </li>
                        <li><a href=" {{ route('Viewall') }} ">عرض الكل</a></li>

                    </ul>
                </li>
            </ul>
        </ul>
    </li>

    <!--قائد الفرقة -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️ قائد الفرقة</span>
        </div>

    </li>

    <!-- جهاز الأفراد -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️جهاز الأفراد</span>
        </div>

    </li>

    <!-- جهاز الارشيف -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️جهاز الارشيف</span>
        </div>

    </li>

    <!-- جهاز البيانات -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️جهاز البيانات</span>
        </div>

    </li>

    <!-- جهاز القطاع -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️جهاز القطاع</span>
        </div>

    </li>

    <!-- جهاز شئون ضباط -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️جهاز شئون ضباط</span>
        </div>

    </li>

    <!-- جهاز الادارة العسكرية -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️جهاز الادارة العسكرية</span>
        </div>

    </li>

    <!-- جهاز الافراد  -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️ جهاز الافراد 2</span>
        </div>

    </li>

    <!-- منظومة 2  -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon"> 🖥️منظومة 2 </span>
        </div>

    </li>

    <!-- منظومة 3  -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon"> 🖥️ منظومة 3 </span>
        </div>

    </li>

    <!-- منظومة 4  -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon">🖥️ منظومة 4 </span>
        </div>

    </li>


    <!-- منظومة 5  -->

    <li class="has-sub">

        <div class="menu-title sub-title">
            <span class="icon"> 🖥️ منظومة 5 </span>
        </div>

    </li>

    <!--  الكتيبة الطبية  -->
    <li class="has-sub">
        <div class="menu-title sub-title">
            <span class="icon"> 🖥️ الكتيبة الطبية </span>
        </div>
    </li>
    <!-- سجل التعديلات -->
    <li class="has-sub">
        <div class="menu-title sub-title">
            <span class="icon">سجل التعديلات ⏱️</span>
        </div>
    </li>
    <!-- قسم الاداره العسكريه -->
    <li class="has-sub">
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

    <!-- أجهزة الفرع (من الكود الأصلي العلوي) -->
    <li class="has-sub">
        <div class="menu-title">
            <div>
                <span class="icon">🖥️</span>
                أجهزة الفرع
            </div>
            <span class="arrow">⌄</span>
        </div>
        <ul class="sub">
            <li><a href="#">قائد الفرقة</a></li>
            <li><a href="#">جهاز الأفراد</a></li>
            <li><a href="#">جهاز الأرشيف</a></li>
            <li><a href="#">جهاز البيانات</a></li>
            <li><a href="#">جهاز القطاع</a></li>
            <li><a href="#">جهاز شئون ضباط</a></li>
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
                    <li><a href="#">عرض الفاكسات</a></li>
                    <li><a href="#">أرشيف الفاكسات</a></li>
                    <li><a href="#">إضافة فاكس</a></li>
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
    </ul>

    </li>


    </ul>

</div>
