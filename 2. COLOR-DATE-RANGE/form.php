<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
 crossorigin="anonymous">
<form action="process.php" method="post">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="color" class="form-range" name="color">
        </div>
        <div class="col">
            <input type="range" class="form-range" max="100" min="1" name="range">
        </div>
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" name="date">
    </div>
    <div class="d-grid">
        <button  class="btn btn-primary">Submit</button>
    </div>
</form>