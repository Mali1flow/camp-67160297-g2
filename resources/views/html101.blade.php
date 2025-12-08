<!-- resources/views/html101.blade.php -->
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Workshop HTML</title>
        <link rel="stylsheet" href="css/bootstap.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    
<body>
    
    <div class="warpper d-flex justify-content-center ">
        
        <form>
            <h1>Register</h1>
            <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="ชื่อ" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="นามสกุล" aria-label="Last name">
  </div>
</div>
            <div class="form-grup">
                <div class="col">
    <input type="text" class="form-control" placeholder="วัน/เดือน/ปีเกิด" aria-label="Date of born">
  </div>
            </div>
            <div class="form-grup">
                <input type="text" class="form-control" placeholder="เพศ" aria-label="Sex">
            </div>
            <div class="form-grup">
                <label for="picture">รูป</label>
                <input type="picture" class="form-grup">
            </div>
            <div class="form-grup">
                <input type="text" class="form-control" placeholder="ที่อยู่" aria-label="Address">
            </div>
            <div class="form-grup">
                <label for="color">สีที่ชอบ</label>
                <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
            </div>
            <div class="form-grup">
                <input type="text" class="form-control" placeholder="แนวเพลงที่ชอบ" aria-label="Music type">
            </div>
            <div class="form-grup">
                
                <input type="checkbox" class="form-grup">
                <label for="checkbox"> ยินดีให้เก็บข้อมูล</label>
            </div>
            <div class="form-grup">
                <button type="button" class="btn btn-primary">reset</button>
<button type="button" class="btn btn-secondary">submit</button>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
    
</html>
