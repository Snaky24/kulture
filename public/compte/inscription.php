<?php $niveau = "../"; ?>
<?php include($niveau . "liaisons/php/config.inc.php"); ?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'ajouter') {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $motDePasse = password_hash(trim($_POST['mot_de_passe']), PASSWORD_BCRYPT);

    if ($nom && $email && $motDePasse) {
        try {
            $requete = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (:nom, :email, :mot_de_passe)";
            $requete->bindParam(":nom", $nom);
            $requete->bindParam(":email", $email);
            $requete->bindParam(":mot_de_passe", $motDePasse);
            header("Location: ../index.php?message=" . urlencode("Liste ajoutée avec succès."));
            exit();
        } catch (PDOException $e) {
            echo "Erreur SQL : " . htmlspecialchars($e->getMessage());
        }
    } else {
        $message = "Veuillez remplir tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <link class="favicon" rel="icon" type="image/x-icon" href="liaisons/images/svg/favicon.svg">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Accueil | GO-ALL</title>
    <?php include($niveau . "liaisons/fragments/headlinks.inc.php"); ?>
</head>

<body class="body__inscription">

    <?php include($niveau . "liaisons/fragments/entete.inc.php"); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-li"><a class="breadcrumb-li__lien" href="<?php echo $niveau; ?>index.php">Accueil</a></li>
        <li class="breadcrumb-li">Modifier une liste</li>
    </ul>

    <div class="div__ajoutliste">
        <h1 class="div__ajoutliste-h1">Ajouter une nouvelle liste</h1>

        <?php if ($message): ?>
            <p class="message"><?= htmlspecialchars($message) ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <input type="hidden" name="action" value="ajouter">
            <label>Nom :</label>
            <input type="text" name="nom" required>
            <label>Email :</label>
            <input type="email" name="email" required>
            <label>Mot de passe :</label>
            <input type="password" name="mot_de_passe" required>
            <button type="submit">Ajouter</button>
        </form>
    </div>


    <?php include($niveau . "liaisons/fragments/piedDePage.inc.php"); ?>