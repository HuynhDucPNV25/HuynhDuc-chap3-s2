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
        <button class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>