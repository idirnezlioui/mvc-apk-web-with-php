<html lang="en">

<head>
    <?php
    include "../view/includs/head.php";
    ?>
</head>

<body>
    <nav>
        <?php
        include "../view/includs/nav_arms.php";
        ?>
    </nav>
    <h2>Liste des arms</h2>
    <main>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Puissance</th>
                    <th scope="col">description</th>
                    <th scope="col">Edite</th>
                    <th scope="col">Supprime</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($selectarms as $arms) {?>
                    <tr>
                        <td><?php echo $arms->getid()?></td>
                        <td><?php echo $arms->getname()?></td>
                        <td><?php echo $arms->gettype()?></td>
                        <td><?php echo $arms->getpuis()?></td>
                        <td><?php echo $arms->getdesc()?></td>
                        <td><i class="fa-solid fa-pen-to-square"></i></td>
                        <td><i class="fa-solid fa-trash"></i></td>
                    </tr>
                 <?php } ?>
                

            </tbody>
        </table>
    </main>
</body>

</html>