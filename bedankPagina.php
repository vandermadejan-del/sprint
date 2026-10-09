<?php
session_start();
$naam = $_SESSION['naam'] ?? 'bezoeker';
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <?php
    require_once 'repeatedstructures/head.php'
    ?>
</head>

<body>
    <header>
        <?php
        require_once 'repeatedstructures/header.php';
        ?>



    </header>

    <main>
        <div class="RedGreenNeonText">
            <div class="Neon green">
                <h1>Bedankt voor je aanmelding</h1>
            </div>
            <div class="Neon red">
                <div class="Neon red">
                    <h1><?= htmlspecialchars($naam) ?></h1>
                </div>

            </div>
        </div>
    </main>

    <footer>
        <?php
        require_once 'repeatedstructures/footer.php'
        ?>
    </footer>
</body>



</html>