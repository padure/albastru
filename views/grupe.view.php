<?php include 'partials/header.view.php'; ?>

<body>
    <?php include 'partials/nav.view.php'; ?>
    <div class="form">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nume">Nume</label>
                <input type="text" name="nume" id="nume">
            </div>
            <button type="submit" class="btn-save">Save</button>
        </form>
    </div>
    <div class="grupe">
        <h4>Lista grupelor</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nume</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query as $grupa) : ?>
                    <tr>
                        <td><?= $grupa->id; ?></td>
                        <td><?= $grupa->nume; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>