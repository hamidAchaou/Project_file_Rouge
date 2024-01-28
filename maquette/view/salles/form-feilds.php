<form action="../process_create.php" method="POST">
    <div class="mb-3">
        <label for="salle_name" class="form-label">Nom de la salle:</label>
        <input type="text" class="form-control" id="salle_name" name="salle_name" required>
    </div>
    <div class="mb-3">
        <label for="capacity" class="form-label">Capacité:</label>
        <input type="number" class="form-control" id="capacity" name="capacity" required>
    </div>


    <div class="mb-3 form-group">
        <label for="emplacement" class="form-label">Emplacement:</label>
        <select class="form-control" id="emplacement" name="emplacement" required>
            <option value="Floor1">Étage 1</option>
            <option value="Floor2">Étage 2</option>
            <!-- Add more options as needed -->
        </select>
    </div>
    <div class="mb-3 form-group">
        <label for="class" class="form-label">Classe:</label>
        <select class="form-control" id="class" name="class" required>
            <option value="ClassA">Dev web</option>
            <option value="ClassB">Dev mobile</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <div class="mb-3 form-group">
        <label for="groupe" class="form-label">Groupe:</label>
        <select class="form-control" id="groupe" name="groupe" required>
            <option value="101">101</option>
            <option value="102">102</option>
            <option value="103">103</option>
            <option value="104">104</option>
            <option value="105">105</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn bg-teal">Créer</button>
    </div>
</form>