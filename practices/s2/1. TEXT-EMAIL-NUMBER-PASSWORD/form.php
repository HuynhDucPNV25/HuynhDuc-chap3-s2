<form action="process.php" method="post">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter Name" name="name">
        </div>
        <div class="col">
            <input type="number" class="form-control" placeholder="Enter number" name="number">
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="email" class="form-control" placeholder="Enter email" name="email">
        </div>
        <div class="col">
            <input type="password" class="form-control" placeholder="Enter password" name="psw" >
        </div>
    </div>
    <div class="mb-3">
        <textarea  placeholder="Enter message" class="form-control" name="msg"></textarea>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>