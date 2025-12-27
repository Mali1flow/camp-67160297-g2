@extends('template.default')

@section('content')
{{-- ใช้ bg-light เพื่อให้พื้นหลังต่างจากตัวการ์ด --}}
<div class="container-fluid bg-light py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            {{-- ตัวการ์ดฟอร์ม --}}
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">

                    <div class="text-center mb-4">
                        <h2 class="fw-bold">ลงทะเบียนสมาชิก</h2>
                        <p class="text-muted">กรอกข้อมูลให้ครบถ้วนเพื่อดำเนินการต่อ</p>
                    </div>

                    <form id="registrationForm" novalidate action="/showinfo" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- ชื่อ และ นามสกุล --}}
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">ชื่อ</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0 shadow-none"
                                       placeholder="ชื่อ" name="first_name" required>
                                <div class="invalid-feedback small">กรุณาระบุชื่อ</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">นามสกุล</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0 shadow-none"
                                       placeholder="นามสกุล" name="last_name" required>
                                <div class="invalid-feedback small">กรุณาระบุนามสกุล</div>
                            </div>
                        </div>

                        {{-- วันเกิด และ เพศ --}}
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">วันเกิด</label>
                                <input type="date" class="form-control form-control-lg bg-light border-0 shadow-none"
                                       name="birth_date" required>
                                <div class="invalid-feedback small">กรุณาเลือกวันเกิด</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">เพศ</label>
                                <select class="form-select form-select-lg bg-light border-0 shadow-none"
                                        name="gender" required>
                                    <option value="" selected disabled>เลือกเพศ...</option>
                                    <option value="male">ชาย</option>
                                    <option value="female">หญิง</option>
                                    <option value="other">อื่น ๆ</option>
                                </select>
                                <div class="invalid-feedback small">กรุณาเลือกเพศ</div>
                            </div>
                        </div>

                        {{-- รูปถ่าย --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">รูปถ่ายโปรไฟล์</label>
                            <input type="file" class="form-control bg-light border-0 shadow-none"
                                   name="user_picture" accept="image/*" required>
                            <div class="invalid-feedback small">กรุณาอัปโหลดรูป</div>
                        </div>

                        {{-- ที่อยู่ --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">ที่อยู่</label>
                            <textarea class="form-control bg-light border-0 shadow-none"
                                      rows="3" placeholder="ระบุที่อยู่ที่สามารถติดต่อได้" name="address" required></textarea>
                            <div class="invalid-feedback small">กรุณากรอกที่อยู่</div>
                        </div>

                        {{-- สี และ แนวเพลง --}}
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">สีที่ชอบ</label>
                                <select class="form-select bg-light border-0 shadow-none" name="favorite_color" required>
                                    <option value="" selected disabled>เลือกสี...</option>
                                    <option value="ม่วง">ม่วง</option>
                                    <option value="น้ำเงิน">น้ำเงิน</option>
                                    <option value="เขียว">เขียว</option>
                                    <option value="แดง">แดง</option>
                                </select>
                                <div class="invalid-feedback small">กรุณาเลือกสีที่ชอบ</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">แนวเพลงที่ชอบ</label>
                                <input type="text" class="form-control bg-light border-0 shadow-none"
                                       placeholder="เช่น Pop, Rock" name="music_type" required>
                                <div class="invalid-feedback small">กรุณาระบุแนวเพลง</div>
                            </div>
                        </div>

                        {{-- Checkbox ยินยอม --}}
                        <div class="form-check mb-5">
                            <input class="form-check-input shadow-none" type="checkbox" id="dataConsent" required>
                            <label class="form-check-label text-muted small" for="dataConsent">
                                ฉันยินยอมให้เก็บรวบรวมข้อมูลส่วนบุคคล
                            </label>
                        </div>

                        {{-- ปุ่มกด --}}
                        <div class="d-flex gap-3">
                            <button type="reset" class="btn btn-light w-100 fw-bold py-3 rounded-3">ล้างค่า</button>
                            <button type="submit" class="btn btn-dark w-100 fw-bold py-3 rounded-3 shadow">บันทึกข้อมูล</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
