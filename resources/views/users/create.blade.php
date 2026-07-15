@extends('layouts.main')

@section('content')

    <div class="form-container" style="width: 60%">
        <div class="form-header">
            <h2>إضافة مستخدم جديد</h2>
            <p>يرجى إدخال البيانات بعناية قبل الحفظ</p>
        </div>

        @if ($errors->any())
            <div style="background:red;color:white;padding:10px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.store') }}" method="POST" class="weapons-form">
            @csrf
            <div class="" style="width: 50%">
                {{-- الاسم --}}
                <div class="form-group">
                    <label for="name">الإسم</label>
                    <input type="text" id="name" name="name" class="form-input" value="{{ old('name') }}"
                        placeholder="أدخل الاسم ">
                </div>

                {{-- البريد الإلكترونى --}}
                <div class="form-group">
                    <label for="email">البريد الإلكترونى</label>
                    <input type="text" id="email" name="email" class="form-input" value="{{ old('email') }}"
                        placeholder="أدخل البريد الإلكترونى">
                </div>

                {{-- كلمة المرور --}}
                <div class="form-group">
                    <label for="password">كلمة المرور</label>
                    <input type="password" id="password" name="password" class="form-input" value="{{ old('password') }}"
                        placeholder="أدخل كلمة المرور">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">تأكيد كلمة المرور</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="form-input"
                        placeholder="أعد إدخال كلمة المرور">
                </div>

                <!-- الصلاحية -->
                    <div class="form-group">
                        <label for="role_id">الصلاحية</label>
                        <select id="role_id" name="role_id" class="form-select">
                            <option value="">اختر الصلاحية</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}"
                                    {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

            </div>
            <div class="form-actions">
                <button type="submit" class="btn-submit">
                    حفظ البيانات
                </button>
            </div>
        </form>
    </div>

@endsection
