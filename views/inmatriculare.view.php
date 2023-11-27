<?php include 'partials/header.view.php'; ?>
<body>
    <?php include 'partials/nav.view.php'; ?>
    <div class="form">
        <form action="" method="post">
            <div class="mb-3">
                <label for="id_elev">Elev</label>
                <select name="id_elev" id="id_elev" >
                    <?php foreach($elevi as $elev): ?>
                        <option value="<?=$elev->id;?>">
                            <?= $elev->nume . " " .$elev->prenume; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_grupa">Grupa</label>
                <select name="id_grupa" id="id_grupa" >
                    <?php foreach($grupe as $grupa): ?>
                        <option value="<?=$grupa->id;?>">
                            <?=$grupa->nume; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn-save">Save</button>
        </form>
    </div>
    <div class="inmatriculari">
        <table border="1">
            <thead>
                <tr>
                    <th>Nr</th>
                    <th>Nume grupa</th>
                    <th>Nume elev</th>
                    <th>Prenume elev</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($inmatric as $nr => $inmatriculare): ?>
                    <tr>
                        <td><?= $nr + 1;  ?></td>
                        <td><?= $inmatriculare->nume_grupa;  ?></td>
                        <td><?= $inmatriculare->nume_elev;  ?></td>
                        <td><?= $inmatriculare->prenume_elev;  ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>