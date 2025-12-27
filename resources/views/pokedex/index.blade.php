@extends('template.default')

@section('content')
<div class="container-fluid py-5" style="background-color: #e3f2fd; min-height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">

            {{-- ส่วนหัว --}}
            <div class="d-flex align-items-center mb-4">
                <div class="bg-primary rounded-3 p-2 text-white me-3 shadow-sm">
                    <i class="bi bi-plus-circle-fill" style="font-size: 1.5rem;"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-0 text-dark">เพิ่มโปเกมอนใหม่ (Pokedex)</h2>
                    <p class="text-muted mb-0">กรอกรายละเอียดเพื่อบันทึกลงในฐานข้อมูล</p>
                </div>
            </div>

            {{-- ฟอร์มการ์ด --}}
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-5">
                <div class="card-body p-4 p-md-5 bg-white">
                    {{-- แก้ไข Action: เติม s ให้ตรงกับ Route (/pokedexs) --}}
                    <form action="{{ url('/pokedexs') }}" method="POST">
                        @csrf

                        <h5 class="text-primary fw-bold mb-4 border-bottom pb-2">
                            <i class="bi bi-info-circle me-2"></i>ข้อมูลทั่วไป
                        </h5>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-secondary">ชื่อโปเกมอน</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="text" name="name"
                                       placeholder="เช่น Pikachu" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-secondary">ประเภท</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="text" name="type"
                                       placeholder="เช่น Electric / Flying">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-semibold text-secondary">สายพันธุ์</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="text" name="species"
                                       placeholder="เช่น Mouse Pokémon">
                            </div>
                        </div>

                        <h5 class="text-primary fw-bold mb-4 border-bottom pb-2">
                            <i class="bi bi-bar-chart me-2"></i>ค่าพลังและสัดส่วน
                        </h5>

                        <div class="row g-3 mb-4">
                            <div class="col-6 col-md-3">
                                <label class="form-label fw-semibold text-secondary">ส่วนสูง</label>
                                <div class="input-group">
                                    <input class="form-control bg-light border-0 py-2 shadow-none" type="number" step="0.1" name="height" placeholder="0.0">
                                    <span class="input-group-text border-0 bg-light text-muted small">m</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label fw-semibold text-secondary">น้ำหนัก</label>
                                <div class="input-group">
                                    <input class="form-control bg-light border-0 py-2 shadow-none" type="number" step="0.1" name="weight" placeholder="0.0">
                                    <span class="input-group-text border-0 bg-light text-muted small">kg</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-2">
                                <label class="form-label fw-semibold text-secondary">HP</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="number" name="hp" placeholder="0">
                            </div>
                            <div class="col-4 col-md-2">
                                <label class="form-label fw-semibold text-secondary">ATK</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="number" name="attack" placeholder="0">
                            </div>
                            <div class="col-4 col-md-2">
                                <label class="form-label fw-semibold text-secondary">DEF</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="number" name="defense" placeholder="0">
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="form-label fw-semibold text-secondary">รูปภาพ (Image URL)</label>
                            <input class="form-control bg-light border-0 py-2 shadow-none" type="text" name="image_url"
                                   placeholder="ระบุลิงก์รูปภาพ เช่น https://...">
                        </div>

                        {{-- ปุ่มกด --}}
                        <div class="d-flex gap-2 justify-content-end border-top pt-4">
                            <button type="reset" class="btn btn-light px-4 py-2 fw-bold text-secondary">ล้างข้อมูล</button>
                            <button class="btn btn-primary px-5 py-2 fw-bold shadow-sm" type="submit">
                                <i class="bi bi-save me-2"></i>บันทึกโปเกมอน
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- ส่วนตารางด้านล่าง --}}
            <div class="bg-white p-4 rounded-4 shadow-sm">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold text-dark mb-0">
                        <i class="bi bi-list-ul me-2"></i>รายการทั้งหมดในระบบ
                    </h5>
                    {{-- ตรวจสอบว่ามีตัวแปร $pokedexs หรือ $pokedex ส่งมาจาก Controller หรือไม่ --}}
                    <span class="badge bg-primary rounded-pill">Total: {{ isset($pokedexs) ? count($pokedexs) : (isset($pokedex) ? count($pokedex) : 0) }}</span>
                </div>
                @include('pokedex.table')
            </div>

        </div>
    </div>
</div>
@endsection
