<?php $active = $_SERVER["REQUEST_URI"]; ?>

<nav>
    <a class="logo" href="/">Scoala</a>
    <ul class="main-menu">
        <li class="item">
            <a <?= $active == '/elevi.php'?"class='active'":"";?> href="elevi.php">Elevi</a>
        </li>
        <li class="item">
            <a <?= $active == '/grupe.php'?"class='active'":"";?> href="grupe.php">Grupe</a>
        </li>
        <li class="item">
            <a <?= $active == '/inmatriculare.php'?"class='active'":"";?> href="inmatriculare.php">Inmatriculare</a>
        </li>
    </ul>
</nav>