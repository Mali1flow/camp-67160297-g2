<div class="mt-3 col-12">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Type</th>
                <th>Species</th>
                <th>Stats (HP/ATK/DEF)</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pokedex as $items)
            <tr>
                <td>{{ $items->id }}</td>
                <td>
                    @if($items->image_url)
                        <img src="{{ $items->image_url }}" alt="{{ $items->name }}" style="width: 50px; height: 50px; object-fit: contain;">
                    @else
                        <span class="text-muted">No Image</span>
                    @endif
                </td>
                <td><strong>{{ $items->name }}</strong></td>
                <td><span class="badge bg-info text-dark">{{ $items->type }}</span></td>
                <td>{{ $items->species }}</td>
                <td>
                    <small>
                        HP: {{ $items->hp }} |
                        ATK: {{ $items->attack }} |
                        DEF: {{ $items->defense }}
                    </small>
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <a class="btn btn-warning btn-sm" href="/pokedex/{{ $items->id }}/edit">
                            แก้ไข
                        </a>
                        <form action="/pokedex/{{ $items->id }}" method="post" onsubmit="return confirm('ยืนยันการลบข้อมูล?')">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">ลบ</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
