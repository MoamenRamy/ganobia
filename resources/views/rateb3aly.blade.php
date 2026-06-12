<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منظومة الراتب العالي</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<div class="portlet light rateb3aly" id="table-scrollable-page">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-shield font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">منظومة الراتب العالي</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-circle btn-danger" href="#">
                    <i class="glyphicon glyphicon-th-list"></i> المراجعه الشهرية
                </a>
            </div>
            <div class="btn-group">
                <a class="btn btn-circle btn-success" data-toggle="modal" data-target="#modal_change_unit">
                    <i class="fa fa-plus"></i> توليد يومية عددية
                </a>
            </div>
            <div class="btn-group">
                <a class="btn btn-circle btn-default" href="#">
                    <i class="glyphicon glyphicon-th-list"></i> استيراد نتائج
                </a>
            </div>
            <div class="btn-group">
                <a class="btn btn-circle btn-warning" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                <i class="glyphicon glyphicon-saved"></i> تصدير النتائج <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="#">
                        <i class="glyphicon glyphicon-list"></i> تصدير النتائج </a>
                    </li>
                    <li>
                        <a class="export_selected" href="#">
                        <i class="glyphicon glyphicon-list"></i>تصدير المحدد</a>
                    </li>
                </ul>
            </div>
            <div class="btn-group">
                <a class="btn btn-circle red" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                <i class="glyphicon glyphicon-saved"></i> طباعة المحدد <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a class="print_selected_all" href="#">
                        <i class="glyphicon glyphicon-list"></i> كشف أسماء </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="print_selected_tr7el" id="0" href="#">
                        <i class="glyphicon glyphicon-share-alt"></i> جوابات ترحيل جنود بالنماذج </a>
                    </li>
                    <li>
                        <a class='print_selected_tr7el' id="1" href="#">
                        <i class="glyphicon glyphicon-share-alt"></i>جوابات ترحيل جنود فقط</a>
                    </li>
                    <li>
                        <a class='print_selected_tr7el' id="2" href="#">
                        <i class="glyphicon glyphicon-share-alt"></i>جوابات ترحيل نماذج فقط</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class='print_selected_receipts' href="#">
                        <i class="glyphicon glyphicon-usd"></i>جواب ترحيل صرفيات</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class='print_selected_order_of_service' href="#">
                        <i class="glyphicon glyphicon-user"></i>أمر خدمة</a>
                    </li>
                    <li>
                        <a class='print_selected_end_of_service' href="#">
                        <i class="glyphicon glyphicon-remove"></i>إنهاء إلحاق</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="print_punishment" id="1" href="#">
                        <i class="glyphicon glyphicon-list"></i>نموذج عقوبة سلوك</a>
                    </li>
                    <li>
                        <a class="print_punishment" id="2" href="#">
                        <i class="glyphicon glyphicon-list"></i>نموذج عقوبة غياب</a>
                    </li>
                    <li>
                        <a class="print_punishment" id="3" href="#">
                        <i class="glyphicon glyphicon-list"></i>نموذج عقوبة تخلف عن طابور</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="print_detailed_page" id="2" href="#">
                        <i class="glyphicon glyphicon-list"></i>مذكرة تفصيلية</a>
                    </li>
                </ul>
            </div>
            <div class="btn-group">
                <a class="btn btn-circle red" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-print"></i> طباعة النتائج <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <div class="myDrop" style="color:#666; padding: 5px 10px">
                            <i class="glyphicon glyphicon-list"></i> طباعة كشف أسماء
                            <div class="myDropMenu" style="display:none">
                                <a style="display:block; padding:10px 0" target="_blank" href="#"> طباعة الكشف حسب الدرجه </a>
                                <a style="display:block; padding:10px 0" target="_blank" href="#"> طباعة الكشف حسب الوحدة </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a target="_blank" href="#">
                        <i class="glyphicon glyphicon-share-alt"></i> طباعة جوابات ترحيل جنود بالنماذج </a>
                    </li>
                    <li>
                        <a target="_blank" href="#">
                        <i class="glyphicon glyphicon-share-alt"></i>طباعة جوابات ترحيل جنود فقط</a>
                    </li>
                    <li>
                        <a target="_blank" href="#">
                        <i class="glyphicon glyphicon-share-alt"></i>طباعة جوابات ترحيل نماذج فقط</a>
                    </li>
                    <li>
                        <a target="_blank" href="#">
                        <i class="glyphicon glyphicon-usd"></i>طباعة جواب ترحيل صرفيات</a>
                    </li>
                </ul>
            </div>
            <div class="btn-group">
                <a class="btn btn-circle btn-success" href="#">
                    <i class="fa fa-plus"></i> إضافة جديد
                </a>
            </div>
            <div class="btn-group">
                <a class="btn btn-circle btn-info" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog"></i> الأدوات <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a id="edit_selected" href="javascript:;">
                        <i class="fa fa-pencil"></i> تعديل المحدد </a>
                    </li>
                    <li>
                        <a class='move_selected to-effects' href="javascript:;">
                        <i class="fa fa-arrows"></i> نقل إلي المؤثرات</a>
                    </li>
                    <li>
                        <a class='move_selected to-archive' href="javascript:;">
                        <i class="fa fa-eraser"></i> نقل إلي البواقي</a>
                    </li>
                </ul>
            </div>
            <div id="add_to" class="btn-group">
                <a class="btn btn-circle bg-green-jungle" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-check"></i> إضافة إلي <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a class="add_to" data-placeType="1" href="javascript:;">
                        <i class="fa fa-mail-forward"></i> الملاحق الداخلية</a>
                    </li>
                    <li>
                        <a class="add_to" data-placeType="2" href="javascript:;">
                        <i class="fa fa-mail-reply"></i> الملاحق الخارجية</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="add_to" data-placeType="3" href="javascript:;">
                        <i class="fa fa-sign-in"></i> حفظ سلام داخل البلاد</a>
                    </li>
                    <li>
                        <a class="add_to" data-placeType="4" href="javascript:;">
                        <i class="fa fa-sign-out"></i> حفظ سلام خارج البلاد</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="add_to" data-placeType="5" href="javascript:;">
                        <i class="fa fa-suitcase"></i> سفر خارج البلاد</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="add_to" data-placeType="6" href="javascript:;">
                        <i class="fa fa-taxi"></i> عرض + أجازة</a>
                    </li>
                    <li>
                        <a class="add_to" data-placeType="12" href="javascript:;">
                        <i class="fa fa-taxi"></i> تأهيل وتوصيات ترقي</a>
                    </li>
                    <li>
                        <a class="add_to" data-placeType="13" href="javascript:;">
                        <i class="fa fa-taxi"></i> مراجعة كروت واختبارات نفسية</a>
                    </li>
                    <li>
                        <a class="add_to" data-placeType="14" href="javascript:;">
                        <i class="fa fa-taxi"></i> أوامر النقل</a>
                    </li>
                    <li>
                        <a class="add_to" data-placeType="9" href="javascript:;">
                        <i class="fa fa-taxi"></i> إنهاء الخدمة</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="add_to_pickups" href="javascript:;">
                            <i class="fa fa-car"></i>
                            الانتقاء
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="add_to" data-placeType="133" href="javascript:;">
                        <i class="fa fa-rocket"></i> تأمين شمال سيناء</a>
                    </li>
                    <li>
                        <a class="add_to" data-placeType="174" href="javascript:;">
                        <i class="fa fa-map-marker"></i>باقى التأمينات</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="add_to" data-placeType="233" href="javascript:;">
                        <i class="fa fa-car"></i> آجازات فرع الأفراد</a>
                    </li>
                    <li>
                        <a class="add_to_injured" id="2" href="javascript:;">
                        <i class="fa fa-car"></i> المصابين والشهداء</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="add_to_other_mla7k" href="javascript:;">
                            <i class="fa fa-car"></i>
                            تمامات اخري
                        </a>
                    </li>
                </ul>
            </div>
            <a href="javascript:;" class="btn btn-circle btn-default btn-icon-only fullscreen" data-original-title="" title=""></a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <div class="col-md-12">
                <form id="search" data-scroll="scrollH" action="rateb3aly.php" method="get" class="alert alert-gray box alert-borderless">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="hidden" id="hidden_prim_unit" name="hidden_prim_unit">
                            <select name="unit_primary_id" multiple data-hilight="true" class="prim_unit_id form-control green btn input-circle-left">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" id="hidden_unit" name="hidden_unit">
                            <select name="unit_id" multiple data-hilight="true" class="unit_id form-control green-meadow btn">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" id="hidden_governorate" name="hidden_governorate">
                            <select name="governorate_id" multiple data-hilight="true" class="governorate form-control green-meadow btn">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" id="hidden_weapon" name="hidden_weapon">
                            <select name="weapon_id" multiple data-hilight="true" class="weapon_id form-control green-seagreen btn">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" id="hidden_class" name="hidden_class">
                            <select name="class_id" multiple data-hilight="true" class="class_id form-control green-haze btn">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" id="hidden_t5sos" name="hidden_t5sos">
                            <select name="t5sos_id" multiple data-hilight="true" class="t5sos_id form-control green-meadow btn">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" name="hidden_grade" id="hidden_grade">
                            <select name="grade" multiple data-hilight="true" class="grade form-control green-haze btn input-circle-right">
                                <option value="4">عريف</option>
                                <option value="5">رقيب</option>
                                <option value="6">رقيب أ</option>
                                <option value="7">مساعد</option>
                                <option value="8">مساعد أ</option>
                                <option value="9">صانع فني</option>
                                <option value="10">صانع دقيق</option>
                                <option value="11">صانع ممتاز</option>
                                <option value="12">صانع ماهر</option>
                                <option value="13">ملاحظ فني</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" name='hidden_parent_mkan_id' id='hidden_parent_mkan_id'>
                            <select multiple name="parent_mkan_id" data-hilight="true" class="parent_mkan_id form-control green-meadow btn">
                                <option value="1">الملاحق الداخلية</option>
                                <option value="2">الملاحق الخارجية</option>
                                <option value="629">مناطق اخري</option>
                                <optgroup label="قطاع تأمين شمال سيناء">
                                    <option value="474">قطاع بئر لحفن</option>
                                    <option value="470">قطاع العريش</option>
                                    <option value="473">قطاع الشيخ زويد</option>
                                    <option value="471">قطاع رفح</option>
                                    <option value="570">قطاع زجدان</option>
                                    <option value="1215">الإتجاه الساحلي</option>
                                    <option value="1287">الحمه</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" name='hidden_mkan_id' id='hidden_mkan_id'>
                            <select multiple name="mkan_id" data-hilight="true" class="mkan_id form-control green-meadow btn">
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <select name="search_by" id="search-select" class="form-control btn input-circle-left">
                                    <option value="1">الإسم</option>
                                    <option value="2">الرقم القومي</option>
                                    <option value="3">الرقم العسكري</option>
                                    <option value="5">تاريخ الترقى المنتظر</option>
                                    <option value="11">الملاحظات</option>
                                    <option value="80">تاريخ العرض</option>
                                    <option value="90">الحالة الصحية</option>
                                    <option value="91">الأمراض المزمنة</option>
                                    <option value="92">التشخيص</option>
                                    <option value="93">العلاج</option>
                                    <option value="94">العيادة الخارجية</option>
                                    <option value="95">اسم الدكتور</option>
                                    <option value="20">التمام</option>
                                    <option value="30">الحالة الاجتماعية</option>
                                    <option value="31">تاريخ الميلاد</option>
                                    <option value="35">العنوان</option>
                                    <option value="36">رقم التليفون</option>
                                    <option value="38">المؤهل</option>
                                    <option value="109">عدد الأخوة</option>
                                    <option value="110">عدد الابناء</option>
                                    <option value="40">الترتيب بين الاخوة</option>
                                    <option value="45">اقرب الاقارب</option>
                                    <option value="46">رقم اقرب الاقارب</option>
                                    <option value="49">الطول</option>
                                    <option value="50">الوزن</option>
                                    <option value="51">فصيلة الدم</option>
                                    <option value="101">تاريخ التطوع</option>
                                    <option value="102">تاريخ الترقي الحالي</option>
                                    <option value="103">تاريخ شغل الوظيفة</option>
                                    <option value="105">بيانات التجديد</option>
                                    <option value="106">الوحدات السابقة</option>
                                    <option value="107">صرف رع</option>
                                    <option value="108">العقوبات</option>
                                </select>
                            </div>
                            <div class="input-cont">
                                <input type="text" name="search_word" placeholder="كلمة البحث..." class="search_word form-control" value="">
                            </div>
                            <div class="input-group-btn">
                                <select name="likeness" class="likeness form-control btn">
                                    <option value="1">يحتوي</option>
                                    <option value="2">يبداً ب</option>
                                    <option value="3">ينتهي ب</option>
                                    <option value="4">يساوي</option>
                                </select>
                            </div>
                            <div class="input-group-btn">
                                <select name="order_by" id="order-select" class="form-control btn">
                                    <option value="1">ترتيب بـ</option>
                                    <option value="2">الاسم</option>
                                    <option value="3">الوحدة</option>
                                </select>
                            </div>
                            <span class="input-group-btn">
                            <button name="submit" type="submit" id="filter_search" data-type="gonood" class="btn blue">
                            عرض &nbsp; <i class="m-icon-swapleft m-icon-white"></i>
                            </button>
                            </span>
                            <span class="input-group-btn">
                                <button name="submit-all" type="submit" id="filter_search" data-type="gonood" class="btn red input-circle-right">
                                <i class="m-icon-swapright m-icon-white"></i> &nbsp; إلغاء
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="resultsCount alert alert-info text-center center-block">عدد النتائج : 0</div>
                </form>
            </div>
            <div class="col-md-12">
                <div class="table-scrollable rateb3aly-data table-selectable">
                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTable2">
                        <thead>
                            <tr class="info">
                                <th rowspan="3" scope="col" style="width:450px !important">
                                    <input name="select_all" type="checkbox" id="select_all" value="option1">
                                </th>
                                <th rowspan="3" scope="col">#</th>
                                <th rowspan="3" scope="col">الرقم العسكري</th>
                                <th rowspan="3" scope="col" style="min-width:80px">الدرجة</th>
                                <th rowspan="3" class="stickName" scope="col" style="min-width:200px">الإسم</th>
                                <th rowspan="3" scope="col" style="min-width:100px">الوحدة</th>
                                <th rowspan="3" scope="col" style="min-width:100px">الوحدة الفرعية</th>
                                <th rowspan="3" scope="col" style="min-width:100px">السلاح</th>
                                <th rowspan="3" scope="col" style="min-width:100px">الفئة</th>
                                <th rowspan="3" scope="col" style="min-width:100px">التخصص</th>
                                <th rowspan="3" scope="col" style="min-width:250px">التمام</th>
                                <th rowspan="3" scope="col">ملاحظات</th>
                                <th rowspan="3" scope="col">تاريخ التطوع</th>
                                <th rowspan="3" scope="col">تاريخ الترقي الحالي</th>
                                <th rowspan="3" scope="col">تاريخ شغل الوظيفة</th>
                                <th rowspan="2" colspan="3" style="min-width:100px">مدة الوظيفة</th>
                                <th rowspan="3" scope="col">تاريخ الترقي المنتظر</th>
                                <th rowspan="2" colspan="4" scope="col">التأهيل</th>
                                <th rowspan="1" colspan="5" scope="col" style="min-width:500px">بيانات التجديد</th>
                                <th rowspan="3" scope="col">الديانة</th>
                                <th rowspan="2" colspan="2" scope="col">الوحدات السابقة</th>
                                <th rowspan="3" scope="col">تاريخ الميلاد</th>
                                <th rowspan="3" scope="col">الرقم القومي</th>
                                <th rowspan="3" scope="col">المؤهل</th>
                                <th rowspan="3" scope="col">الحالة الإجتماعية</th>
                                <th rowspan="3" scope="col">اسم الأم</th>
                                <th rowspan="3" scope="col">وظيفة الأم</th>
                                <th rowspan="2" colspan="2" scope="col" style="min-width:300px">العنوان</th>
                                <th rowspan="2" colspan="2" scope="col">التناسق</th>
                                <th rowspan="3" scope="col">صرف ر ع</th>
                                <th rowspan="2" colspan="3" scope="col">العقوبات</th>
                                <th rowspan="3" scope="col">عدد الأخوة</th>
                                <th rowspan="3" scope="2">الترتيب بين الاخوه</th>
                                <th rowspan="3" scope="col">عدد الأبناء</th>
                                <th rowspan="3" scope="col">فصيلة الدم</th>
                                <th rowspan="2" colspan="2" scope="col">بيانات أقرب الأقارب</th>
                                <th rowspan="3" scope="col">رقم التليفون</th>
                                <th scope="col" rowspan="3" style="min-width:150px">الحاله الصحية</th>
                                <th scope="col" rowspan="3" style="min-width:150px">الامراض المزمنة</th>
                                <th scope="col" rowspan="3" style="min-width:150px">التشخيص</th>
                                <th scope="col" rowspan="3" style="min-width:150px">الملاحظات الطبية</th>
                                <th scope="col" rowspan="3" style="min-width:150px">العلاج</th>
                                <th scope="col" rowspan="3" style="min-width:150px">العيادة الخارجية</th>
                                <th scope="col" rowspan="3" style="min-width:150px">متابعة الحالة</th>
                                <th scope="col" rowspan="3" style="min-width:150px">اسم الدكتور</th>
                                <th scope="col" rowspan="3" style="min-width:150px"> تاريخ العرض</th>
                                <th rowspan="3" scope="col">روابط</th>
                            </tr>
                            <tr class="lvl2 info">
                                <th colspan="2" scope="col">مدة أولي</th>
                                <th colspan="2" scope="col">مدة ثانية</th>
                                <th rowspan="2" scope="col">سبب عدم التجديد</th>
                            </tr>
                            <tr class="lvl2 lvl3 info">
                                <th>يوم</th>
                                <th>شهر</th>
                                <th>سنة</th>
                                <th scope="col">تاريخ التأهيل</th>
                                <th scope="col">آخر فرقة</th>
                                <th scope="col">التقدير</th>
                                <th scope="col">سبب عدم التأهيل</th>
                                <th scope="col">من</th>
                                <th scope="col">إلي</th>
                                <th scope="col">من</th>
                                <th scope="col">إلي</th>
                                <th scope="col">اسم الوحدة</th>
                                <th scope="col">تاريخ الضم</th>
                                <th scope="col">المحافظة</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">الطول</th>
                                <th scope="col">الوزن</th>
                                <th scope="col">حجز</th>
                                <th scope="col">حبس</th>
                                <th scope="col">محكمة</th>
                                <th scope="col">أقرب الأقارب</th>
                                <th scope="col">رقم التليفون</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12"><button id="load_more_button" class='btn btn-info btn-block'><i class='fa fa-plus'></i> عرض المزيد </button></div>
                <div class="row" id="loader-wrapper"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_change_unit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title" id="exampleModalLongTitle">توليد يومية يدوية</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-3">الأعمدة</label>
                        <div class="col-md-9">
                            <select name="manual_columns" id="manual_columns" class="form-control">
                                <option value='grade'>الدرجة</option>
                                <option value='prim_unit_id'>الوحدة الرئيسية</option>
                                <option value='unit_id'>الوحدة الفرعية</option>
                                <option value='weapon_id'>السلاح</option>
                                <option value='class_id'>الفئة</option>
                                <option value='t5sos_id'>التخصص</option>
                                <option value='start_date'>تاريخ التطوع</option>
                                <option value='governorate_id'>المحافظة</option>
                                <option value='place_name'>اسم مكان الالحاق</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">الصفوف</label>
                        <div class="col-md-9">
                            <select name="manual_rows" id="manual_rows" class="form-control">
                                <option value='grade'>الدرجة</option>
                                <option value='prim_unit_id'>الوحدة الرئيسية</option>
                                <option value='unit_id'>الوحدة الفرعية</option>
                                <option value='weapon_id'>السلاح</option>
                                <option value='class_id'>الفئة</option>
                                <option value='t5sos_id'>التخصص</option>
                                <option value='start_date'>تاريخ التطوع</option>
                                <option value='governorate_id'>المحافظة</option>
                                <option value='place_name'>اسم مكان الالحاق</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">خروج</button>
                <button type="button" class="btn btn-primary generate_manual_3ddy" data-dismiss="modal">توليد</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
