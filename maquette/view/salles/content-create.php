<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-navy text-light">
                    <h3 class="card-title">Créer une nouvelle salle</h3>
                </div>
                <div class="card-body">
                    <form action="process_create.php" method="POST">
                        <div class="mb-3">
                            <label for="salle_name" class="form-label">Nom de la salle:</label>
                            <input type="text" class="form-control" id="salle_name" name="salle_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="capacity" class="form-label">Capacité:</label>
                            <input type="number" class="form-control" id="capacity" name="capacity" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Créer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
