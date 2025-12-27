@extends('template.default')

@section('content')
<div class="container-fluid bg-light py-5" style="min-height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-5">

            {{-- ส่วนหัวข้อ --}}
            <div class="text-center mb-4">
                <h2 class="fw-bold">ตรวจสอบข้อมูล</h2>
                <p class="text-muted">บันทึกข้อมูลสำเร็จแล้ว นี่คือข้อมูลของคุณ</p>
            </div>

            {{-- Card แสดงผล --}}
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                {{-- ส่วนหัวสีเข้ม --}}
                <div class="bg-dark py-4 text-center">
                    <div class="bg-secondary rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm" style="width: 100px; height: 100px; border: 4px solid white;">
                        <span class="text-white fw-bold h2 m-0">{{ mb_substr($fname, 0, 1) }}</span>
                    </div>
                    <h4 class="text-white mt-3 mb-0">{{ $fname }} {{ $lname }}</h4>
                    <p class="text-white-50 small">สมาชิกใหม่</p>
                </div>

                <div class="card-body p-4 p-md-5">
                    <div class="row g-4">
                        {{-- ข้อมูลพื้นฐาน --}}
                        <div class="col-6">
                            <label class="text-muted small d-block">วันเกิด</label>
                            <span class="fw-semibold">{{ $born }}</span>
                        </div>
                        <div class="col-6">
                            <label class="text-muted small d-block">เพศ</label>
                            <span class="fw-semibold">{{ $Sex == 'male' ? 'ชาย' : ($Sex == 'female' ? 'หญิง' : 'อื่นๆ') }}</span>
                        </div>

                        <hr class="my-2 opacity-10">

                        <div class="col-12">
                            <label class="text-muted small d-block">ที่อยู่ปัจจุบัน</label>
                            <span class="fw-semibold">{{ $Address }}</span>
                        </div>

                        <div class="col-6">
                            <label class="text-muted small d-block">สีที่ชอบ</label>
                            <span class="badge rounded-pill px-3 py-2" style="background-color: #6c757d;">{{ $Favorite_color }}</span>
                        </div>
                        <div class="col-6">
                            <label class="text-muted small d-block">แนวเพลงที่ชอบ</label>
                            <span class="fw-semibold text-primary">{{ $Type_of_music }}</span>
                        </div>

                        {{-- ชื่อไฟล์รูปภาพ --}}
                        <div class="col-12 mt-4">
                            <div class="alert alert-secondary border-0 rounded-3 mb-0 p-2">
                                <small class="d-block text-muted">ชื่อไฟล์รูปภาพที่อัปโหลด:</small>
                                <code class="text-dark small">{{ $Picture }}</code>
                            </div>
                        </div>
                    </div>

                    {{-- ปุ่มย้อนกลับ --}}
                    <div class="mt-5">
                        <a href="{{ url()->previous() }}" class="btn btn-outline-dark w-100 fw-bold py-2 rounded-3">
                             กลับไปแก้ไขข้อมูล
                        </a>
                    </div>
                </div>
            </div>

            <p class="text-center mt-4 text-muted small">© 2024 Your Application Name</p>
        </div>
    </div>
</div>
@endsection
