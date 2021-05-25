<!DOCTYPE html>
<html>

<head>
    <title>AJAX - Je suis un Putain de génie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <div class="container mt-5" style="max-width: 555px">
        <form method="post" id="upForm">
          <input type="text" class="form-control mb-1" name="name" id="name" placeholder="Votre nom...">
          <input type="button" name="save" class="btn btn-primary mb-5" value="Envoyer dans la DB" id="butsave">
        </form>


        <div class="card-header alert alert-warning text-center mb-3">
            <h2>Recherche d'utilisateur</h2>
        </div>
        <input type="text" class="form-control" name="live_search" id="live_search" autocomplete="off"
            placeholder="Recherche ici...">
        <div id="search_result"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>