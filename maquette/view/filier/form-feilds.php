<form action="./index.php" method="POST">

    <div class="mb-3">
        <label for="filier" class="form-label">Filier:</label>
        <input type="text" class="form-control" id="filier" name="filier" value="Salle 1" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn bg-teal">Créer</button>
    </div>
</form>