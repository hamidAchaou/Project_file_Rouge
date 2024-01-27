<form action="edit.php" method="post">

<div class="form-group mb-3">
    <label for="editedYear">Academic Year:</label>
    <input class="form-control" type="text" pattern="\d{4}-\d{4}" placeholder="YYYY-YYYY" value="2024-2025" id="editedYear" name="editedYear" required><br>
</div>


    <div class="form-group mb-3">
        <label for="editedStartDate">Start Date:</label>
        <!-- Other date input fields can remain as type="date" with full date values if needed -->
        <input class="form-control" type="date" value="2024-09-10" id="editedStartDate" name="editedStartDate" required><br>
    </div>

    <div class="form-group mb-3">
        <label for="editedEndDate">End Date:</label>
        <input class="form-control" type="date" value="2025-10-17" id="editedEndDate" name="editedEndDate" required><br>
    </div>

    <button type="submit" class="btn bg-purple mx-2">Ajouter</button>
</form>
