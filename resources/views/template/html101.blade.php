@extends('template.default')

@section('content')

<div class="warpper d-flex justify-content-center">
    <form id="registrationForm" novalidate>
        <h1>Register</h1>

        {{-- ชื่อ / นามสกุล --}}
        <div class="row">
            <div class="col">
                <input type="text"
                       class="form-control"
                       placeholder="ชื่อ"
                       id="firstName"
                       name="first_name"
                       required>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ไม่ได้ระบุชื่อ</div>
            </div>

            <div class="col">
                <input type="text"
                       class="form-control"
                       placeholder="นามสกุล"
                       id="lastName"
                       name="last_name"
                       required>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ไม่ได้ระบุนามสกุล</div>
            </div>
        </div>
        <br>

        {{-- วันเกิด --}}
        <div class="mb-3">
            <input type="date"
                   class="form-control"
                   name="birth_date"
                   required>
            <div class="invalid-feedback">กรุณาเลือกวันเกิด</div>
        </div>

        {{-- เพศ --}}
        <div class="mb-3">
            <select class="form-select" name="gender" required>
                <option value="">เลือกเพศ</option>
                <option value="male">ชาย</option>
                <option value="female">หญิง</option>
                <option value="other">อื่น ๆ</option>
            </select>
            <div class="invalid-feedback">กรุณาเลือกเพศ</div>
        </div>

        {{-- รูป --}}
        <div class="mb-3">
            <label class="form-label">รูป</label>
            <input type="file"
                   class="form-control"
                   name="user_picture"
                   accept="image/*"
                   required>
            <div class="invalid-feedback">กรุณาอัปโหลดรูป</div>
        </div>

        {{-- ที่อยู่ --}}
        <div class="mb-3">
            <input type="text"
                   class="form-control"
                   placeholder="ที่อยู่"
                   name="address"
                   required>
            <div class="invalid-feedback">กรุณากรอกที่อยู่</div>
        </div>

        {{-- สีที่ชอบ --}}
        <div class="mb-3">
            <label class="form-label">สีที่ชอบ</label>
            <select class="form-select" name="favorite_color" required>
                <option value="">เลือกสี</option>
                <option value="ม่วง">ม่วง</option>
                <option value="น้ำเงิน">น้ำเงิน</option>
                <option value="ฟ้า">ฟ้า</option>
                <option value="ส้ม">ส้ม</option>
                <option value="แดง">แดง</option>
                <option value="เขียว">เขียว</option>
                <option value="เหลือง">เหลือง</option>
            </select>
            <div class="invalid-feedback">กรุณาเลือกสีที่ชอบ</div>
        </div>

        {{-- แนวเพลง --}}
        <div class="mb-3">
            <input type="text"
                   class="form-control"
                   placeholder="แนวเพลงที่ชอบ"
                   name="music_type"
                   required>
            <div class="invalid-feedback">กรุณากรอกแนวเพลงที่ชอบ</div>
        </div>

        {{-- ยินยอมข้อมูล --}}
        <div class="form-check mb-3">
            <input class="form-check-input"
                   type="checkbox"
                   id="dataConsent"
                   required>
            <label class="form-check-label" for="dataConsent">
                ยินดีให้เก็บข้อมูล
            </label>
            <div class="invalid-feedback">ต้องยินยอมก่อนส่งข้อมูล</div>
        </div>

        {{-- ปุ่ม --}}
        <button type="reset" class="btn btn-primary">Reset</button>
        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>
</div>

@endsection

@push('scripts')
<script>
    const form = document.getElementById('registrationForm');

    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    }, false);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
@endpush
