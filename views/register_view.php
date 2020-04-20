
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= $page ?></title>
</head>
<body>
    <div class="main-card d-flex justify-content-center align-items-center">
        <div class="box-form">
            <hr class="divider">
            <h3>Register</h3>
            <form action="">
                <input class="input-edit" type="text" name="" placeholder="Pseudo">
                <input type="email" name="" class="input-edit" id="" placeholder="Email">
                <input class="input-edit" type="password" name="" id="" placeholder="Password">
                <button type="submit" class="btn-edit">S'inscrire</button>
                <span>J'ai déja un compte me <a href="<?= $page = 'login' ?>">Connecter</a></span>
            </form>
        </div>
    </div>
</body>
