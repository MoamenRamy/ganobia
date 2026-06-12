<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/solder.css') }}">
</head>

<div class="container">

    <div class="portlet">
        <div class="portlet-title">
            <div class="caption">
                <i class="bi bi-shield-fill-check"></i>
                <span>منظومة الجنود</span>
            </div>

            <div class="actions">
                <a class="btn btn-danger" href="#">
                    <i class="bi bi-list-check"></i> المراجعة الشهرية
                </a>

                <a class="btn btn-success" href="#"
                    onclick="document.getElementById('modal').classList.add('active')">
                    <i class="bi bi-plus-circle"></i> توليد يومية عددية
                </a>

                <a class="btn btn-default" href="#">
                    <i class="bi bi-upload"></i> استيراد نتائج
                </a>

                <div class="dropdown">
                    <a class="btn btn-warning" href="#">
                        <i class="bi bi-download"></i> تصدير النتائج <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#"><i class="bi bi-list"></i> تصدير النتائج</a>
                        <a href="#"><i class="bi bi-list-check"></i> تصدير المحدد</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a class="btn btn-danger" href="#">
                        <i class="bi bi-printer"></i> طباعة المحدد <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#"><i class="bi bi-list"></i> كشف أسماء</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-share"></i> جوابات ترحيل جنود بالنماذج</a>
                        <a href="#"><i class="bi bi-share"></i> جوابات ترحيل جنود فقط</a>
                        <a href="#"><i class="bi bi-share"></i> جوابات ترحيل نماذج فقط</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-cash"></i> جواب ترحيل صرفيات</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-person"></i> أمر خدمة</a>
                        <a href="#"><i class="bi bi-x-circle"></i> إنهاء إلحاق</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-list"></i> نموذج عقوبة سلوك</a>
                        <a href="#"><i class="bi bi-list"></i> نموذج عقوبة غياب</a>
                        <a href="#"><i class="bi bi-list"></i> نموذج عقوبة تخلف عن طابور</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-list"></i> مذكرة تفصيلية</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a class="btn btn-danger" href="#">
                        <i class="bi bi-printer-fill"></i> طباعة النتائج <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#"><i class="bi bi-list"></i> طباعة الكشف حسب الدرجة</a>
                        <a href="#"><i class="bi bi-list"></i> طباعة الكشف حسب الوحدة</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-share"></i> طباعة جوابات ترحيل جنود بالنماذج</a>
                        <a href="#"><i class="bi bi-share"></i> طباعة جوابات ترحيل جنود فقط</a>
                        <a href="#"><i class="bi bi-share"></i> طباعة جوابات ترحيل نماذج فقط</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-cash"></i> طباعة جواب ترحيل صرفيات</a>
                    </div>
                </div>

                <a class="btn btn-success" href="#">
                    <i class="bi bi-plus-circle"></i> إضافة جديد
                </a>

                <div class="dropdown">
                    <a class="btn btn-info" href="#">
                        <i class="bi bi-gear"></i> الأدوات <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#"><i class="bi bi-pencil"></i> تعديل المحدد</a>
                        <a href="#"><i class="bi bi-arrows-move"></i> نقل إلى المؤثرات</a>
                        <a href="#"><i class="bi bi-eraser"></i> نقل إلى البواقي</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a class="btn btn-green-jungle" href="#">
                        <i class="bi bi-check-circle"></i> إضافة إلى <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#"><i class="bi bi-arrow-left"></i> الملاحق الداخلية</a>
                        <a href="#"><i class="bi bi-arrow-right"></i> الملاحق الخارجية</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-car-front"></i> إنهاء الخدمة</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-car-front"></i> الانتقاء</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-car-front"></i> الخوارج القانونية</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-car-front"></i> التأمينات الداخلية</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-car-front"></i> اجازات الجنود المستجدين</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-rocket"></i> تأمين شمال سيناء</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-car-front"></i> المصابين والشهداء</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-car-front"></i> مشروع اجازات الجنود</a>
                        <div class="divider"></div>
                        <a href="#"><i class="bi bi-car-front"></i> تمامات أخرى</a>
                    </div>
                </div>

                <div class="btn  fullscreen-btn" href="#">
                </div>
            </div>
        </div>

        <div class="portlet-body">
            <form class="search-form">
                <div class="form-row">
                    <div class="form-group">
                        <select multiple>
                            <option value="">الوحدة الرئيسية</option>
                        </select>



                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">الوحدة الفرعية</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">الفئة</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">التخصص</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">تاريخ التسريح</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">مركز التدريب</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">المرحلة</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">المؤهل</option>
                            <option value="1">مؤهل عالي</option>
                            <option value="2">مؤهل فوق المتوسط</option>
                            <option value="3">مؤهل متوسط</option>
                            <option value="4">بدون مؤهل</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">المحافظة</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">السلاح</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">الأماكن</option>
                            <option value="1">الملاحق الداخلية</option>
                            <option value="2">الملاحق الخارجية</option>
                            <option value="716">الانتقاء</option>
                            <option value="629">مناطق أخرى</option>
                            <optgroup label="قطاع تأمين شمال سيناء">
                                <option value="474">قطاع بئر لحفن</option>
                                <option value="470">قطاع العريش</option>
                                <option value="473">قطاع الشيخ زويد</option>
                                <option value="471">قطاع رفح</option>
                                <option value="570">قطاع زجدان</option>
                                <option value="1215">الإتجاه الساحلي</option>
                                <option value="1287">الحمة</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">المكان الفرعي</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select multiple>
                            <option value="">درجة الرخصة</option>
                            <option value="1">درجة أولى</option>
                            <option value="2">درجة ثانية</option>
                        </select>
                    </div>
                </div>

                <div class="search-values">
                    <div class="input-group">
                        <select>
                            <option value="1">الإسم</option>
                            <option value="2">الرقم القومي</option>
                            <option value="3">الرقم العسكري</option>
                            <option value="4">تاريخ الامداد</option>
                            <option value="30">الحالة الإجتماعية</option>
                            <option value="31">تاريخ الميلاد</option>
                            <option value="32">رقم رخصة القيادة</option>
                            <option value="33">ملكية السيارة</option>
                            <option value="34">نوع السيارة</option>
                            <option value="35">العنوان</option>
                            <option value="36">رقم التليفون</option>
                            <option value="37">تاريخ الضم على القطاع/تاريخ الإلحاق</option>
                            <option value="38">المؤهل</option>
                            <option value="39">عدد الأخوة الذكور</option>
                            <option value="52">عدد الأخوة الإناث</option>
                            <option value="41">عدد الأبناء الذكور</option>
                            <option value="53">عدد الأبناء الإناث</option>
                            <option value="40">الترتيب بين الإخوة</option>
                            <option value="42">اسم الأم</option>
                            <option value="43">مهنة الأم</option>
                            <option value="44">مهنة الوالد</option>
                            <option value="45">أقرب الأقارب</option>
                            <option value="46">رقم أقرب الأقارب</option>
                            <option value="47">اسم الموصي</option>
                            <option value="48">رقم آخر صرفية</option>
                            <option value="100">مرتب الشهر</option>
                            <option value="49">الطول</option>
                            <option value="50">الوزن</option>
                            <option value="255">تاريخ التجنيد</option>
                            <option value="6">تاريخ التسريح</option>
                            <option value="12">تاريخ الترحيل</option>
                            <option value="10">التوصيات</option>
                            <option value="11">الملاحظات</option>
                            <option value="20">التمام</option>
                            <option value="25">الدورة</option>
                            <option value="80">تاريخ العرض</option>
                            <option value="90">الحالة الصحية</option>
                            <option value="91">الأمراض المزمنة</option>
                            <option value="92">التشخيص</option>
                            <option value="93">العلاج</option>
                            <option value="94">العيادة الخارجية</option>
                            <option value="95">اسم الدكتور</option>
                            <option value="26">المهنة قبل التجنيد</option>
                        </select>
                        <input type="text" placeholder="كلمة البحث...">
                        <select>
                            <option value="1">يحتوي</option>
                            <option value="2">يبدأ بـ</option>
                            <option value="3">ينتهي بـ</option>
                            <option value="4">يساوي</option>
                        </select>
                        <select>
                            <option value="1">ترتيب بـ</option>
                            <option value="2">الاسم</option>
                            <option value="3">الوحدة</option>
                        </select>
                        <button type="submit" class="btn btn-info">عرض</button>
                        <button type="reset" class="btn btn-danger">إلغاء</button>
                    </div>
                </div>

                <div class="add-new-search">+ إضافة خانة</div>

                <div class="resultsCount">عدد النتائج : 0</div>
            </form>

            <div class="table-scrollable">
                <table class="dataTable">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>#</th>
                            <th class="stickName">الإسم</th>
                            <th>الرقم العسكري</th>
                            <th>الدرجة</th>
                            <th>الوحدة</th>
                            <th>الوحدة الفرعية</th>
                            <th>السلاح</th>
                            <th>الفئة</th>
                            <th>التخصص</th>
                            <th>تاريخ الترحيل</th>
                            <th>التمام</th>
                            <th>تاريخ الضم على القطاع / تاريخ الإلحاق</th>
                            <th>ملاحظات</th>
                            <th>مركز التدريب</th>
                            <th>المرحلة التجنيدية</th>
                            <th>تاريخ التجنيد</th>
                            <th>تاريخ التسريح</th>
                            <th>تاريخ الميلاد</th>
                            <th>الرقم القومي</th>
                            <th>درجة الرخصة</th>
                            <th>نوع المؤهل</th>
                            <th>المؤهل</th>
                            <th>المهنة قبل التجنيد</th>
                            <th>الحالة الإجتماعية</th>
                            <th>ذكور</th>
                            <th>إناث</th>
                            <th>الترتيب بين الإخوة</th>
                            <th>ذكور</th>
                            <th>إناث</th>
                            <th>اسم الأم</th>
                            <th>مهنة الأم</th>
                            <th>مهنة الوالد</th>
                            <th>رقم التليفون</th>
                            <th>أقرب الأقارب</th>
                            <th>رقم أقرب الأقارب</th>
                            <th>المحافظة</th>
                            <th>العنوان</th>
                            <th>الطول</th>
                            <th>الوزن</th>
                            <th>ملكية السيارة</th>
                            <th>نوع السيارة</th>
                            <th>تاريخ الإمداد</th>
                            <th>التوصيات</th>
                            <th>اسم الموصي</th>
                            <th>ماتم حياله</th>
                            <th>رقم آخر صرفية</th>
                            <th>صرف مرتب الشهر</th>
                            <th>المستلم</th>
                            <th>صورة الصرفية</th>
                            <th>الدورة</th>
                            <th>الحالة الصحية</th>
                            <th>الأمراض المزمنة</th>
                            <th>التشخيص</th>
                            <th>العلاج</th>
                            <th>العيادة الخارجية</th>
                            <th>متابعة الحالة</th>
                            <th>اسم الدكتور</th>
                            <th>تاريخ العرض</th>
                            <th>الملاحظات الطبية</th>
                            <th>القائم بالتسجيل</th>
                            <th>القائم بالتعديل</th>
                            <th>روابط</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- البيانات تظهر هنا -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal" id="modal">
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">توليد يومية يدوية</div>
            <button class="modal-close"
                onclick="document.getElementById('modal').classList.remove('active')">×</button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>الأعمدة</label>
                <select>
                    <option value="grade">الدرجة</option>
                    <option value="prim_unit_id">الوحدة الرئيسية</option>
                    <option value="unit_id">الوحدة الفرعية</option>
                    <option value="weapon_id">السلاح</option>
                    <option value="class_id">الفئة</option>
                    <option value="t5sos_id">التخصص</option>
                    <option value="start_date">تاريخ التجنيد</option>
                    <option value="end_date">تاريخ التسريح</option>
                    <option value="birth_date">تاريخ الميلاد</option>
                    <option value="arrival_date">تاريخ الإمداد</option>
                    <option value="ardate">تاريخ الترحيل</option>
                    <option value="degree_type">نوع المؤهل</option>
                    <option value="degree">المؤهل</option>
                    <option value="job">الوظيفة</option>
                    <option value="governorate_id">المحافظة</option>
                    <option value="training_center">مركز التدريب</option>
                    <option value="place_name">اسم مكان الإلحاق</option>
                </select>
            </div>
            <div class="form-group">
                <label>الصفوف</label>
                <select>
                    <option value="grade">الدرجة</option>
                    <option value="prim_unit_id">الوحدة الرئيسية</option>
                    <option value="unit_id">الوحدة الفرعية</option>
                    <option value="weapon_id">السلاح</option>
                    <option value="class_id">الفئة</option>
                    <option value="t5sos_id">التخصص</option>
                    <option value="start_date">تاريخ التجنيد</option>
                    <option value="end_date">تاريخ التسريح</option>
                    <option value="birth_date">تاريخ الميلاد</option>
                    <option value="arrival_date">تاريخ الإمداد</option>
                    <option value="ardate">تاريخ الترحيل</option>
                    <option value="degree_type">نوع المؤهل</option>
                    <option value="degree">المؤهل</option>
                    <option value="job">الوظيفة</option>
                    <option value="governorate_id">المحافظة</option>
                    <option value="training_center">مركز التدريب</option>
                    <option value="place_name">اسم مكان الإلحاق</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default"
                onclick="document.getElementById('modal').classList.remove('active')">خروج</button>
            <button class="btn btn-success">توليد</button>
        </div>
    </div>
</div>

</body>

</html>

</html>
