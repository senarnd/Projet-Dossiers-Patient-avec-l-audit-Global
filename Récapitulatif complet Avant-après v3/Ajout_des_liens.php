🔗 AJOUT DES LIENS VERS L'AUDIT GLOBAL
Voici exactement où ajouter les liens dans chaque fichier :

📄 DANS patients.php
Partie 1 : Dans la barre d'outils (RECOMMANDÉ)
Cherchez cette section (~ligne 130) :

php
<div class="toolbar">
    <form method="GET" class="search-form">
        <input type="text" name="search" placeholder="Rechercher un patient..." value="<?php echo htmlspecialchars($search); ?>">
        <button type="submit">Rechercher</button>
    </form>
    <a href="patient_form.php" class="btn-success">Nouveau Patient</a>
</div>
AJOUTEZ la ligne en jaune :

php
<div class="toolbar">
    <form method="GET" class="search-form">
        <input type="text" name="search" placeholder="Rechercher un patient..." value="<?php echo htmlspecialchars($search); ?>">
        <button type="submit">Rechercher</button>
    </form>
    <div style="display: flex; gap: 1rem;">
        <a href="patient_form.php" class="btn-success">Nouveau Patient</a>
        <a href="audit_global.php" class="btn-primary">📊 Audit Global</a>
    </div>
</div>
Partie 2 : Dans le header (Alternative)
Cherchez cette section (~ligne 100) :

php
<div class="user-info">
    <span>Bonjour, <?php echo $_SESSION['full_name']; ?> (<?php echo $_SESSION['role']; ?>)</span>
    <a href="dashboard.php" class="btn-primary">Tableau de Bord</a>
    <a href="logout.php" class="btn-logout">Déconnexion</a>
</div>
AJOUTEZ la ligne en jaune :

php
<div class="user-info">
    <span>Bonjour, <?php echo $_SESSION['full_name']; ?> (<?php echo $_SESSION['role']; ?>)</span>
    <a href="dashboard.php" class="btn-primary">Tableau de Bord</a>
    <a href="audit_global.php" class="btn-primary">📊 Audit</a>
    <a href="logout.php" class="btn-logout">Déconnexion</a>
</div>
📄 DANS patient_history.php
Partie 1 : Dans le header (RECOMMANDÉ)
Cherchez cette section (~ligne 120) :

php
<div class="user-info">
    <span>Bonjour, <?php echo $_SESSION['full_name']; ?> (<?php echo $_SESSION['role']; ?>)</span>
    <a href="patients.php" class="btn-primary">Liste des Patients</a>
    <a href="logout.php" class="btn-logout">Déconnexion</a>
</div>
AJOUTEZ la ligne en jaune :

php
<div class="user-info">
    <span>Bonjour, <?php echo $_SESSION['full_name']; ?> (<?php echo $_SESSION['role']; ?>)</span>
    <a href="patients.php" class="btn-primary">Liste des Patients</a>
    <a href="audit_global.php" class="btn-primary">📊 Audit Global</a>
    <a href="logout.php" class="btn-logout">Déconnexion</a>
</div>
Partie 2 : Avant le bouton retour (Alternative)
Cherchez cette section (~ligne 250) :

php
<div class="back-link">
    <a href="patients.php" class="btn-primary">Retour à la liste</a>
</div>
AJOUTEZ le nouveau bouton :

php
<div class="back-link" style="display: flex; gap: 1rem; justify-content: center;">
    <a href="patients.php" class="btn-primary">Retour à la liste</a>
    <a href="audit_global.php" class="btn-primary">📊 Voir Audit Global</a>
</div>
📄 DANS dashboard.php (POUR COMPLÉTER)
Partie : Actions Rapides
Cherchez cette section (~ligne 150) :

php
<div class="action-buttons">
    <a href="patients.php" class="btn-primary">Voir tous les patients</a>
    <a href="patient_form.php" class="btn-success">Nouveau patient</a>
</div>
AJOUTEZ la ligne en jaune :

php
<div class="action-buttons">
    <a href="patients.php" class="btn-primary">Voir tous les patients</a>
    <a href="patient_form.php" class="btn-success">Nouveau patient</a>
    <a href="audit_global.php" class="btn-primary">📊 Audit Global</a>
</div>
