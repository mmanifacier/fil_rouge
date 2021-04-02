<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fil rouge</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Étudiant de la semaine</h1>
        <p>C'est le tour de <?= $studentOfTheWeek['prenom_e']; ?></p>

        <?php if(!empty($_SESSION['logged'])): ?>
            <hr/>

            <p>Éditer l'étudiant de la semaine</p>

            <form action="" method="POST">
                <input type="hidden" name="updateStudentOfTheWeek" value="true" />
                <button class="btn btn-secondary" type="submit">Mettre à jour l'étudiant</button>
            </form>
            <a class="btn btn-secondary" href="?page=logout">Se déconnecter</a>
        <?php else: ?>
            <a class="btn btn-secondary" href="?page=login">Se connecter</a>
        <?php endif; ?>
    </div>
</body>
</html>