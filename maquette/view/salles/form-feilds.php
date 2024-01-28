<form action="../process_create.php" method="POST">
    <div class="mb-3">
        <label for="salle_name" class="form-label">Nom de la salle:</label>
        <input type="text" class="form-control" id="salle_name" name="salle_name" value="Salle 1" required>
    </div>
    <div class="mb-3">
        <label for="capacity" class="form-label">Capacité:</label>
        <input type="number" class="form-control" id="capacity" name="capacity" value="20" required>
    </div>


    <div class="mb-3 form-group">
        <label for="emplacement" class="form-label">Emplacement:</label>
        <select class="form-control" id="emplacement" name="emplacement" required>
            <option value="Floor1" selected>Étage 1</option>
            <option value="Floor2">Étage 2</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <div class="mb-3">
        <label for="afecter" class="form-label">Afecter:</label>
        <input type="text" class="form-control" id="afecter" name="afecter">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn bg-teal">Créer</button>
    </div>
</form>