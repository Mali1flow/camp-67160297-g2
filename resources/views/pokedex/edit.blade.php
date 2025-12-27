@extends('template.default')

@section('content')
<div class="container-fluid py-5" style="background-color: #e3f2fd; min-height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">

            {{-- ส่วนหัว --}}
            <div class="d-flex align-items-center mb-4">
                <div class="bg-warning rounded-3 p-2 text-white me-3 shadow-sm">
                    <i class="bi bi-pencil-square" style="font-size: 1.5rem;"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-0 text-dark">แก้ไขข้อมูลโปเกมอน</h2>
                    <p class="text-muted mb-0">ปรับเปลี่ยนรายละเอียดของ {{ $pokedex_update->name }}</p>
                </div>
            </div>

            {{-- ฟอร์มการ์ด --}}
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-5">
                <div class="card-body p-4 p-md-5 bg-white">
                    <form action="{{ url('/pokedexs/' . $pokedex_update->id) }}" method="POST">
                        @csrf
                        @method('PUT') {{-- สำคัญมากสำหรับการ Update --}}

                        <h5 class="text-primary fw-bold mb-4 border-bottom pb-2">
                            <i class="bi bi-info-circle me-2"></i>ข้อมูลพื้นฐาน
                        </h5>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-secondary">ชื่อโปเกมอน</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="text" name="name"
                                       value="{{ $pokedex_update->name }}" placeholder="เช่น Pikachu" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-secondary">ประเภท</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="text" name="type"
                                       value="{{ $pokedex_update->type }}" placeholder="เช่น Electric">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-semibold text-secondary">สายพันธุ์</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="text" name="species"
                                       value="{{ $pokedex_update->species }}" placeholder="เช่น Mouse Pokémon">
                            </div>
                        </div>

                        <h5 class="text-primary fw-bold mb-4 border-bottom pb-2">
                            <i class="bi bi-bar-chart me-2"></i>ค่าพลังและสัดส่วน
                        </h5>

                        <div class="row g-3 mb-4">
                            <div class="col-6 col-md-3">
                                <label class="form-label fw-semibold text-secondary">ส่วนสูง</label>
                                <div class="input-group">
                                    <input class="form-control bg-light border-0 py-2 shadow-none" type="number" step="0.1" name="height"
                                           value="{{ $pokedex_update->height }}">
                                    <span class="input-group-text border-0 bg-light text-muted small">m</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label fw-semibold text-secondary">น้ำหนัก</label>
                                <div class="input-group">
                                    <input class="form-control bg-light border-0 py-2 shadow-none" type="number" step="0.1" name="weight"
                                           value="{{ $pokedex_update->weight }}">
                                    <span class="input-group-text border-0 bg-light text-muted small">kg</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-2">
                                <label class="form-label fw-semibold text-secondary">HP</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="number" name="hp"
                                       value="{{ $pokedex_update->hp }}">
                            </div>
                            <div class="col-4 col-md-2">
                                <label class="form-label fw-semibold text-secondary">ATK</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="number" name="attack"
                                       value="{{ $pokedex_update->attack }}">
                            </div>
                            <div class="col-4 col-md-2">
                                <label class="form-label fw-semibold text-secondary">DEF</label>
                                <input class="form-control bg-light border-0 py-2 shadow-none" type="number" name="defense"
                                       value="{{ $pokedex_update->defense }}">
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="form-label fw-semibold text-secondary">รูปภาพ (Image URL)</label>
                            <input class="form-control bg-light border-0 py-2 shadow-none" type="text" name="image_url"
                                   value="{{ $pokedex_update->image_url }}" placeholder="ระบุลิงก์รูปภาพ">
                        </div>

                        {{-- ปุ่มกด --}}
                        <div class="d-flex gap-2 justify-content-end border-top pt-4">
                            <a href="{{ url('/pokedexs') }}" class="btn btn-light px-4 py-2 fw-bold text-secondary">ยกเลิก</a>
                            <button class="btn btn-warning px-5 py-2 fw-bold shadow-sm text-dark" type="submit">
                                <i class="bi bi-check-circle-fill me-2"></i>อัปเดตข้อมูล
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- ส่วนตารางด้านล่าง --}}
            <div class="bg-white p-4 rounded-4 shadow-sm">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold text-dark mb-0">
                        <i class="bi bi-list-ul me-2"></i>รายการทั้งหมด
                    </h5>
                </div>
                @include('pokedex.table')
            </div>

        </div>
    </div>
</div>
@endsection
