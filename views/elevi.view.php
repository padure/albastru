<?php include 'partials/header.view.php'; ?>
<body>
    <?php include 'partials/nav.view.php'; ?>
    <div class="container">
        <div class="form">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nume">Nume</label>
                    <input type="text" name="nume" id="nume">
                </div>
                <div class="mb-3">
                    <label for="prenume">Prenume</label>
                    <input type="text" name="prenume" id="prenume">
                </div>
                <button type="submit" class="btn-save">Save</button>
            </form>
        </div>
        <div class="elevi">
            <h4>Lista elevilor</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nume</th>
                        <th>Prenume</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($query as $elev): ?>
                        <tr>
                            <td><?= $elev->id; ?></td>
                            <td><?= $elev->nume; ?></td>
                            <td><?= $elev->prenume; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>