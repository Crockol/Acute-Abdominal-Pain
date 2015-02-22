<!DOCTYPE html>

<html>

    <head>

        <link href="../public/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../public/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="../public/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>AAP-roots: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>AAP-roots</title>
        <?php endif ?>

        <script src="../public/js/jquery-1.10.2.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <a href="/project/public"><img src="../public/img/logo.gif" alt="AAP-roots"/></a>
            </div>

            <div id="middle">
