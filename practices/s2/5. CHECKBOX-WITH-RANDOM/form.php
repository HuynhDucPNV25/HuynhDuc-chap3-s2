
<form action="process.php" method="post">
    
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" id="html" name="skills[]" value="HTML">
        <label for="html" class="form-label">HTML</label>

        <input type="checkbox" class="form-control-check" id="css" name="skills[]" value="CSS">
        <label for="css" class="form-label">CSS</label>

        <input type="checkbox" class="form-control-check" id="js" name="skills[]"  value="JavaScript">
        <label for="js" class="form-label">Javascript</label>

        <input type="checkbox" class="form-control-check" id="php" name="skills[]"  value="PHP">
        <label for="php" class="form-label">PHP</label>

    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>