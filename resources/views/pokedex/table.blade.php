<div class="mt-4 table-responsive rounded-4 shadow-sm bg-white p-3">
    <table class="table table-hover align-middle mb-0">
        {{-- หัวตารางธีมสีฟ้าอ่อน --}}
        <thead style="background-color: #e3f2fd; color: #0d6efd;">
            <tr>
                <th class="border-0 px-3 py-3 text-center" style="width: 60px;">ID</th>
                <th class="border-0 py-3">Image</th>
                <th class="border-0 py-3">Name</th>
                <th class="border-0 py-3">Type</th>
                <th class="border-0 py-3">Species</th>
                <th class="border-0 py-3">Stats</th>
                <th class="border-0 py-3 text-center">Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pokedex as $items)
            <tr class="border-bottom">
                <td class="text-center text-muted fw-bold">{{ $items->id }}</td>
                <td>
                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 50px; height: 50px;">
                        @if($items->image_url)
                            <img src="{{ $items->image_url }}" alt="{{ $items->name }}" style="width: 40px; height: 40px; object-fit: contain;">
                        @else
                            <i class="bi bi-question text-muted"></i>
                        @endif
                    </div>
                </td>
                <td>
                    <span class="fw-bold text-dark d-block">{{ $items->name }}</span>
                </td>
                <td>
                    <span class="badge rounded-pill px-3 py-2" style="background-color: #e0f2f1; color: #00897b; border: 1px solid #b2dfdb;">
                        {{ $items->type }}
                    </span>
                </td>
                <td class="text-secondary small">{{ $items->species }}</td>
                <td>
                    <div class="d-flex gap-2">
                        <span class="badge bg-light text-primary border border-primary-subtle fw-normal">HP: {{ $items->hp }}</span>
                        <span class="badge bg-light text-danger border border-danger-subtle fw-normal">ATK: {{ $items->attack }}</span>
                        <span class="badge bg-light text-success border border-success-subtle fw-normal">DEF: {{ $items->defense }}</span>
                    </div>
                </td>
                <td>
                    <div class="d-flex justify-content-center gap-1">
                        {{-- ปุ่มแก้ไข --}}
                        <a class="btn btn-outline-primary btn-sm border-0 rounded-3 p-2" href="/pokedex/{{ $items->id }}/edit" title="แก้ไข">
                             <span class="fw-bold">แก้ไข</span>
                        </a>

                        {{-- ปุ่มลบ --}}
                        <form action="/pokedex/{{ $items->id }}" method="post" onsubmit="return confirm('ยืนยันการลบข้อมูล?')">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger btn-sm border-0 rounded-3 p-2" type="submit" title="ลบ">
                                <span class="fw-bold">ลบ</span>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
