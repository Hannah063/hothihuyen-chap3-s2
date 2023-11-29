<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
 crossorigin="anonymous">
<form action="process.php" method="post">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter Name" name="name">
        </div>
        <div class="col">
            <input type="number" class="form-control" placeholder="Enter number" name="phone">
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="email" class="form-control" placeholder="Enter email" name="email">
        </div>
        <div class="col">
            <input type="password" class="form-control" placeholder="Enter password" name="password">
        </div>
    </div>
    <div class="mb-3">
        <textarea  placeholder="Enter message" class="form-control" name="message"></textarea>
    </div>
    <div class="mb-3">
        <select class="form-control" name="province">
            <option selected disabled>Choose province</option>
            <option value="Banteay Mean Chey">Banteay Mean Chey</option>
            <option value="Battambang">Battambang</option>
            <option value="Siem Riep">Siem Riep</option>
            <option value="Prey Veng">Prey Veng</option>
        </select>
    </div>
    <div class="mb-3">
    <input type="checkbox" class="form-control-check" id="html" value="HTML" name="HTML">
        <label for="html" class="form-label">HTML</label>

        <input type="checkbox" class="form-control-check" id="css" value="CSS" name="CSS">
        <label for="css" class="form-label">CSS</label>

        <input type="checkbox" class="form-control-check" id="js" value="JavaScript" name="JavaScript">
        <label for="js" class="form-label">Javascript</label>

        <input type="checkbox" class="form-control-check" id="php" value="PHP" name="PHP">
        <label for="php" class="form-label">PHP</label>

    </div>
    <div class="mb-3">
        <input type="radio" class="form-control-check" id="Female"  value="Female" name="gender">
        <label for="Female" class="form-label">Female</label>

        <input type="radio" class="form-control-check" id="Male"  value="Male" name="gender">
        <label for="Male" class="form-label">Male</label>
    </div>
   
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>