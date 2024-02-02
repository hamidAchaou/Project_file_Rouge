<form action="./index.php" method="POST">

    <div class="mb-3 form-group">
        <label for="filier" class="form-label">Filière:</label>
        <select class="form-control" id="filier" name="filier" required>
            <option value="Floor1" selected>Dev Mobile</option>
            <option value="Floor2">Dev Web</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="groupe" class="form-label">Groupe:</label>
        <input type="text" class="form-control" id="groupe" name="groupe" value="Salle 1" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn bg-teal">Créer</button>
    </div>
</form>