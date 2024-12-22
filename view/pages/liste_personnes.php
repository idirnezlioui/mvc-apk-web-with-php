<html lang="en">

<head>
    <?php
    include "../includs/head.php"
    ?>
</head>

<body>
    <h1>Liste des armes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">age</th>
                <th scope="col">Id de l'arme</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($personnes as $personnes) { ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $personnes->getid() ?></td>
                    <td><?php echo $personnes->getnom() ?></td>
                    <td><?php echo $personnes->getgetage() ?></td>
                    <td><?php echo $personnes->getidarms() ?></td>
                </tr>
            <?php } ?>



        </tbody>
    </table>

</body>

</html>