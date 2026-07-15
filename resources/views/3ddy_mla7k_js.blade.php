@extends('layouts.main')
@section('content')
<div class="mlj-page-container">
    <div class="mlj-page-header">
        <h2>📋 يومية كمائن سيناء</h2>
    </div>

    <div class="mlj-actions">
        <div class="mlj-btn-group">
            <a class="mlj-btn mlj-btn-circle mlj-btn-info" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                <i class="mlj-icon-flag"></i> الإجمالي <i class="mlj-fa-angle-down"></i>
            </a>
            <ul class="mlj-dropdown-menu">
                <li>
                    <a href="sinai_ywmyt_kmayn_prim_units.php">
                        <i class="mlj-fa-check"></i> الإجمالي
                    </a>
                </li>
                <li>
                    <a href="sinai_ywmyt_kmayn_units.php?id=1">
                        <i class="mlj-fa-check"></i> ملاحق داخلية
                    </a>
                </li>
                <li>
                    <a href="sinai_ywmyt_kmayn_units.php?id=2">
                        <i class="mlj-fa-check"></i> ملاحق خارجية
                    </a>
                </li>
                <li>
                    <a href="sinai_ywmyt_kmayn_units.php?id=3">
                        <i class="mlj-fa-check"></i> تمامت اخري
                    </a>
                </li>
                <li>
                    <a href="sinai_ywmyt_kmayn_units.php?id=4">
                        <i class="mlj-fa-check"></i> الانتقاء
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
