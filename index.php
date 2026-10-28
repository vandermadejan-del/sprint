<!DOCTYPE html>
<html lang="nl">

<head>
    <?php
    include 'repeatedstructures/head.php'
    ?>
</head>

<body>
    <header>
        <?php
        include 'repeatedstructures/header.php';
        ?>



    </header>

    <main>
        <div id="popUp">
            <h2>Inschrijf Formulier popUp</h2>
            <div id="popupContent">
                <form method="POST" action="data/Verwerken.php">
                    <div>
                        <label for="Name">Naam</label>
                        <input type="text" id="Name" name="naam" required>
                    </div>
                    <div>
                        <label for="email">email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="buttons">
                        <button type="button" id="close">Close</button>
                        <button type="submit">Submit</button>
                    </div>
                </form>



            </div>

        </div>

        <?php
        include 'repeatedstructures/menubutton.php'
        ?>

        <div class="RedGreenNeonText">
            <div class="Neon green">
                <h1>High end Gaming</h1>
            </div>
            <div class="Neon red">
                <h1>In Breda</h1>
            </div>
        </div>
        <div class="wrapper">
            <div class="Section">
                <div class="TextSeperator">
                    <p>Bij LevelUp Hardware draait alles om performance. Of je nu op zoek bent naar een nieuwe laptop
                        die de nieuwste AAA-titels moeiteloos draait, of je huidige rig een professionele
                        onderhoudsbeurt nodig heeft: wj staan voor je klaar.</p>
                    <p>In onze fysieke winkel combinieren we de nostalgische sfeer van de jaren '80 arcades met de brute
                        kracht van hardware van morgen.</p>
                </div>

                <img class="PlainImage" src="Img/laptop.webp" alt="GameLaptop">
            </div>
            <div class="Section">
                <div class="PwithT">
                    <H2>Waarom kiezen voor ons?</H2>
                    <img class="StoreFrontImg GreenNeonBorder" src="Img/storefront.png" alt="storeFront">
                </div>

                <ul>
                    <li>
                        <H3>Curated Selectie</H3>
                        <p>Wij verkopen alleen laptops waar we zelf achter staan. Geen concessies op
                            bouwkwalititeitof koeling. </p>
                    </li>
                    <li>
                        <h3>Expert Onderhoud</h3>
                        <p>Van het vervangen van koelpasta tot complexe hardware-upgrades wij verlengen de
                            levensduur an je machine.</p>
                    </li>
                    <li>
                        <h3>PersoonlijkAdvies</h3>
                        <p>Geen standaard verkooppraatjes, maar eerlijk advies gebaseerd op jouw favoriete games en
                            workflow</p>
                    </li>
                </ul>



            </div>
        </div>
        <div class="nieuws-brief">
            <h2>Schrijf
                je in voor de nieuwsbrief</h2>
            <button id="button" class="nieuwsbrief-button"> MELD JE AAN</button>

        </div>





        <div class="map">

            <h2>locatie winkel</h2>
            <iframe style="border:0" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBVizdQeh3udy11xDc5Ao2YStR2gLc-rfc&amp;q=terheidenseweg%20%20350&amp;maptype=roadmap&amp;zoom=14"></iframe>
        </div>

    </main>

    <footer>
        <?php
        include 'repeatedstructures/footer.php'
        ?>
    </footer>
</body>
<script>
    const button = document.getElementById('button')
    const popUp = document.getElementById('popUp')
    const close = document.getElementById('close')
    let open = false
    button.addEventListener('click', () => {
        if (open === false) {
            popUp.style.display = 'flex';
            open = true
        } else {
            popUp.style.display = 'none';
            open = false
        }
    })
    close.addEventListener('click', () => {
        popUp.style.display = 'none';
        open = false

    })
</script>


</html>