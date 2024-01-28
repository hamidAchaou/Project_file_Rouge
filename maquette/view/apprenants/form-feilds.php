<form action="#" method="POST" class="row g-3">

    <!-- Nom (french) -->
    <div class="col-md-6 pt-3">
        <label for="nom" class="form-label">Nom:</label>
        <input type="text" class="form-control" id="nom" name="nom" value="Achaou" required>
    </div>

    <!-- Nom (Arabic) -->
    <div class="col-md-6 pt-3">
        <label for="nom-arab" class="form-label d-flex flex-row-reverse">: النسب</label>
        <input type="text" class="form-control" id="nom-arab" name="nom-arab" value="اشعو" required>
    </div>

    <!-- Prénom (French) -->
    <div class="col-md-6 pt-3">
        <label for="prenom" class="form-label">Prénom:</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="Hamid" required>
    </div>

    <!-- Prénom (Arabic) -->
    <div class="col-md-6 pt-3">
        <label for="prenom-arab" class="form-label text-start d-flex flex-row-reverse"> : الاسم</label>
        <input type="text" class="form-control text-end d-flex flex-row-reverse" id="prenom-arab" name="prenom-arab" placeholder="أدخل الاسم هنا" value="حميد" required>
    </div>

    <!-- Gender (French) -->
    <div class="col-md-6 pt-3">
        <label for="gender" class="form-label">Sexe:</label>
        <select class="form-control" id="gender" name="gender" required>
            <option value="male">Masculin</option>
            <option value="female">Féminin</option>
        </select>
    </div>

    <!-- Gender (Arabic) -->
    <div class="col-md-6 pt-3">
        <label for="gender" class="form-label d-flex flex-row-reverse">الجنس :</label>
        <select class="form-control d-flex flex-row-reverse" id="gender" name="gender" required>
            <option value="male">ذكر</option>
            <option value="female">أنثى</option>
        </select>
    </div>

    <!-- Matricule d'etudion -->
    <div class="col-md-6 pt-3">
        <label for="matricule" class="form-label">Matricule d'étudiant:</label>
        <input type="text" class="form-control" id="matricule" name="matricule" value="12353" required>
    </div>

    <!-- Niveau Scolaire -->
    <div class="col-md-6 pt-3">
        <label for="niveau" class="form-label">Niveau Scolaire:</label>
        <select class="form-control" id="niveau" name="niveau" required>
            <option value="Baccalauréat" selected>
                Baccalauréat
            </option>
            <option value="master">
                master
            </option>
            <option value="doctorant">
                doctorant
            </option>
            <option value="6 eme">
                6 eme
            </option>
            <option value="4 eme">
                4 eme
            </option>
        </select>
    </div>

    <!-- Etudtion Actif -->
    <div class="col-md-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="etudtion_actif" name="etudtion_actif">
            <label class="form-check-label" for="etudtion_actif">Étudiant Actif</label>
        </div>
    </div>

    <!-- Filière -->
    <div class="col-md-6 pt-3">
        <label for="filiere" class="form-label">Filière:</label>
        <select class="form-control" id="filiere" name="filiere" required>
            <option value="Dev web">Dev web</option>
            <option value="Dev mobile">Dev mobile</option>
        </select>
    </div>

    <!-- Groupe -->
    <div class="col-md-6 pt-3">
        <label for="groupe" class="form-label">Groupe:</label>
        <select class="form-control" id="groupe" name="groupe" required>
            <option value="101">101</option>
            <option value="102">102</option>
            <option value="103">103</option>
            <option value="104">104</option>
            <option value="105">105</option>
        </select>
    </div>

    <!-- Date de Naissance -->
    <div class="col-md-6 pt-3">
        <label for="date_naissance" class="form-label">Date de Naissance:</label>
        <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="1999-08-02" required>
    </div>


    <!-- Date d'Inscription -->
    <div class="col-md-6 pt-3">
        <label for="date_inscription" class="form-label">Date d'Inscription:</label>
        <input type="date" class="form-control" id="date_inscription" name="date_inscription" value="2022-08-02" required>
    </div>

    <!-- Nom d'établissement -->
    <div class="col-md-6 pt-3">
        <label for="etablissement" class="form-label">Nom d'établissement:</label>
        <select class="form-control" id="etablissement" name="etablissement" required>
            <option value="Solicode">Solicode</option>
        </select>
    </div>

    <!-- Date de Confirmation (Nhar Jab Dossier) -->
    <div class="col-md-6 pt-3">
        <label for="date_confirmation" class="form-label">Date de Confirmation:</label>
        <input type="date" class="form-control" id="date_confirmation" name="date_confirmation" value="2022-09-12" required>
    </div>

    <!-- CIN -->
    <div class="col-md-6 pt-3">
        <label for="cin" class="form-label">CIN:</label>
        <input type="text" class="form-control" id="cin" name="cin" value="EB76383" required>
    </div>

    <!-- Numéro de Téléphone -->
    <div class="col-md-6 pt-3">
        <label for="telephone" class="form-label">Numéro de Téléphone:</label>
        <input type="tel" class="form-control" id="telephone" name="telephone" value="074234223" required>
    </div>

    <!-- Lieu de Naissance -->
    <div class="col-md-6 pt-3">
        <label for="lieu_naissance" class="form-label">Lieu de Naissance:</label>
        <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" value="imintanout" required>
    </div>

    <!-- Adresse -->
    <div class="col-md-6 pt-3">
        <label for="adresse" class="form-label">Adresse:</label>
        <input type="text" class="form-control" id="adresse" name="adresse" value="Tange Complex hassani" required>
    </div>

    <!-- Adresse Postal -->
    <div class="col-md-6 pt-3">
        <label for="adresse_postal" class="form-label">Adresse Postal:</label>
        <input type="text" class="form-control" id="adresse_postal" name="adresse_postal" value="90000" required>
    </div>

    <!-- Email -->
    <div class="col-md-6 pt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="achaou.hamid.solicode@gmail.com" required>
    </div>

    <!-- Ville -->
    <div class="col-md-6 pt-3">
        <label for="ville" class="form-label">Ville:</label>
        <select class="form-control" id="ville" name="ville" required>
            <option value="tanger" selected>Tanger</option>
            <option value="casablanca">Casablanca</option>
            <option value="rabat">Rabat</option>
            <option value="marrakech">Marrakech</option>
            <option value="fes">Fès</option>
            <option value="agadir">Agadir</option>
            <option value="imintanout">Imintanout</option>
            <option value="essaouira">Essaouira</option>
            <option value="meknes">Meknès</option>
        </select>
    </div>

    <!-- Submit Button -->
    <div class="col-12 mt-4">
        <button type="submit" class="btn bg-teal">Enregistrer</button>
    </div>

</form>