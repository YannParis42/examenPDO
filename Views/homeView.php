<!-- Affiche la vue d'accueil -->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <h1 class="mt-4 text-success">PARIS Yann PDO</h1>
        <form class="d-flex" action="index.php">
            <input type="text" class="form-control me-2" name="nom" placeholder="Rechercher une planète">

            <input type="submit" class="btn btn-outline-success" value="Rechercher">
        </form>
    </div>
</nav>

<div class="m-2">
    <a class="btn btn-success" href="?page=planet">Liste des Planètes</a>
    <a class="btn btn-success" href="?page=tellurique">Liste des Planètes telluriques</a>
    <a class="btn btn-success" href="?page=gazeuse">Liste des Planètes gazeuses</a>
</div>