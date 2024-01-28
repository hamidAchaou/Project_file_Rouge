<form action="edit.php" method="post">
    
    <div class="form-group mb-3">
        <label for="editedStartDate">Date de début :</label>
        <!-- Les autres champs de saisie de date peuvent rester de type "date" avec des valeurs de date complètes si nécessaire -->
        <input class="form-control" type="date" value="2024-09-10" id="editedStartDate" name="editedStartDate" required><br>
    </div>

    <div class="form-group mb-3">
        <label for="editedEndDate">Date de fin :</label>
        <input class="form-control" type="date" value="2025-10-17" id="editedEndDate" name="editedEndDate" required><br>
    </div>

    <button type="submit" class="btn bg-teal mx-2">Ajouter</button>
</form>
