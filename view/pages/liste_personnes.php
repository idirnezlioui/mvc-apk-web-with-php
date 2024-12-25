<html lang="en">

<head>
    <?php
    include "../view/includs/head.php";
    ?>
</head>
<nav>
    <?php
    include "../view/includs/nav_personne.php";
    ?>
</nav>

<body>
    <h2>Liste des personnes</h2>

    <main>
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">age</th>
                    <th scope="col">Id de l'arme</th>
                    <th scope="col">Edite</th>
                    <th scope="col">Supprime</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($perselect as $personne) { ?>
                    <tr>
                        <td></td>
                        <td><?php echo $personne->getid() ?></td>
                        <td><?php echo $personne->getnom() ?></td>
                        <td><?php echo $personne->getage() ?></td>
                        <td><?php echo $personne->getidarms() ?></td>
                        <td><i class="fa-solid fa-pen-to-square"></i></td>
                        <td><i class="fa-solid fa-trash"></i></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>



</body>

</html>