<form action="process.php" method="post">
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
        <input type="checkbox" class="form-control-check" id="html" name="skills[]" value="HTML">
        <label for="html" class="form-label">HTML</label>

        <input type="checkbox" class="form-control-check" id="css" name="skills[]" value="CSS">
        <label for="css" class="form-label">CSS</label>

        <input type="checkbox" class="form-control-check" id="js" name="skills[]" value="JavaScript">
        <label for="js" class="form-label">JavaScript</label>

        <input type="checkbox" class="form-control-check" id="php" name="skills[]" value="PHP">
        <label for="php" class="form-label">PHP</label>
    </div>
    <div class="mb-3">
        <input type="radio" class="form-control-check" id="Female" name="gender" value="Female">
        <label for="Female" class="form-label">Female</label>

        <input type="radio" class="form-control-check" id="Male" name="gender" value="Male">
        <label for="Male" class="form-label">Male</label>
    </div>
   
    <div class="d-grid">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>