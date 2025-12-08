@extends('template.default')

@section('content')

    <div class="warpper d-flex justify-content-center ">
        
        <form>
            <h1>Register</h1>
            <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="ชื่อ" aria-label="First name">
    <div class="valid-feedback">
                       ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                       ไม่ได้ระบุชื่อ
                    </div>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="นามสกุล" aria-label="Last name">
  </div><div class="valid-feedback">
                       ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                       ไม่ได้ระบุนามสกุล
                    </div>
</div><br>
            <div class="form-grup">
                <div class="col">
    <input type="text" class="form-control" placeholder="วัน/เดือน/ปีเกิด" aria-label="Date of born">
  </div>
            </div><br>
            <div class="form-grup">
                <input type="text" class="form-control" placeholder="เพศ" aria-label="Sex">
            </div><br>
            <div class="mb-3 d-flex align-items-center">
    <label for="fileUpload" class="form-label me-3 mb-0">รูป</label>
    
    <input 
        class="form-control flex-grow-1"  type="file" 
        id="fileUpload" 
        name="user_picture"
        accept="image/*"
    >
</div><br>
            <div class="form-grup">
                <input type="text" class="form-control" placeholder="ที่อยู่" aria-label="Address">
            </div><br>
            <div class="mb-3 d-flex align-items-center">
    <label for="favoriteColor" class="form-label me-3 mb-0">สีที่ชอบ</label>
    
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="colorDropdownButton" data-bs-toggle="dropdown" aria-expanded="false">
            เลือกสี
        </button>
        <ul class="dropdown-menu" aria-labelledby="colorDropdownButton">
            <li><a class="dropdown-item" href="#">ม่วง</a></li>
            <li><a class="dropdown-item" href="#">น้ำเงิน</a></li>
            <li><a class="dropdown-item" href="#">ฟ้า</a></li>
            <li><a class="dropdown-item" href="#">ส้ม</a></li>
            <li><a class="dropdown-item" href="#">แดง</a></li>
            <li><a class="dropdown-item" href="#">เขียว</a></li>
            <li><a class="dropdown-item" href="#">เหลือง</a></li>
        </ul>
    </div>
</div>
            <div class="form-grup">
                <input type="text" class="form-control" placeholder="แนวเพลงที่ชอบ" aria-label="Music type">
            </div><br>
            <div class="form-grup">
                
                <input type="checkbox" class="form-grup">
                <label for="checkbox"> ยินดีให้เก็บข้อมูล</label>
            </div><br>
            <div class="form-grup">
                <button type="reset" class="btn btn-primary">reset</button>
                <button type="button" onclick="checkValidate()" class="btn btn-secondary">submit</button>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

@endsection

@push("scripts")
<script>
    console.log("it's work")
    checkValidate = () =>{
        let name = document.getElementById('name')
        if(name.value == ""){
            name.classList.remove("is-valid")
            name.classList.add("is-invalid")
        }else {
                name.classList.remove("is-invalid")
                name.classList.add("is-valid")
            }
    }
</script>
@endpush