<?php
session_start();
include('header.php');
?>

<section class="section-sol">

    <div class="container-fluid">
        <h1>Notre Système Solaire</h1>

        <p class="mt-5 mb-5">
            Le Système Solaire,<br>
            Portrait de groupe, aperçu,il se compose du<br>
            soleil et de la multitude des corps (planètes, astéroïdes,<br>
            comètes, poussières), qui tournent autour de lui, dans le vide<br>
            de l'espace. Ces corps, constitués de matière solide, que ce soit de roches<br>
            (principalement des silicates), de glace (majoritairement d'eau), sont très petits par<br>
            rapport à l'étoile.Quand ils ont une production interne d'énergie, elle est incomparablement<br>
            plus faible que celle du Soleil,et pour l'essentiel c'est à lui qu'ils doivent l'énergie. Formés tous à<br>
            peu près à la même époque, c'est-à-dire, il y a un peu plus de 4,5 milliards d'années, les divers corps<br>
            qui gravitent autour du Soleil peuvent être considérés comme des sous-produits de la formation de l'étoile<br>
            notre Monde étant vaste et passionnant, je vous propose de le découvrir ou de le redécouvrir à travers mon site.
        </p>

        <div class="row">

            <div class="col-4 text-center">
                <a href="mercure.php">
                    <p>Mercure</p>
                    <img src="./assets/image/mercure.png" class="img-fluid" style="width: 70%;">
                </a>
            </div>

            <div class="col-4 text-center">

                <a href="venus.php">
                    <p>Vénus</p>
                    <img src="./assets/image/venus-zeze.png" class="img-fluid" style="width: 70%;">
                </a>
            </div>

            <div class="col-4 text-center">

                <a href="terre.php">
                    <p>Terre</p>
                    <img src="./assets/image/terre-rot.png" class="img-fluid" style="width: 70%;">
                </a>
            </div>

            <div class="col-4 text-center">

                <a href="mars.php">
                    <p>Mars</p>
                    <img src="./assets/image/mars-rouge.png" class="img-fluid" style="width: 70%;">
                </a>
            </div>

            <div class="col-4 text-center">

                <a href="jupiter.php">
                    <p>Jupiter</p>
                    <img src="./assets/image/Jupiter.png" class="img-fluid" style="width: 70%;">
                </a>
            </div>

            <div class="col-4 text-center">

                <a href="saturne.php">
                    <p>Saturne</p>
                    <img src="./assets/image/Saturne.png" class="img-fluid" style="width: 75%;">
                </a>
            </div>

            <div class="col-4 text-center">

                <a href="uranus.php">
                    <p>Uranus</p>
                    <img src="./assets/image/uranus-planete.png" class="img-fluid" style="width: 70%;">
                </a>
            </div>

            <div class="col-4 text-center">

                <a href="neptune.php">
                    <p>Neptune</p>
                    <img src="./assets/image/neptune-planete.png" class="img-fluid" style="width: 70%;">
                </a>
            </div>

            <div class="col-4 text-center">

                <a href="pluton.php">
                    <p>Pluton</p>
                    <img src="./assets/image/pluton-planete.png" class="img-fluid" style="width: 70%;">
                </a>
            </div>

        </div>

        <div class="mt-2">
            <a class="button" href="http://www.astronoo.com/en/articles/positions-of-the-planets.html">Simulateur 3D (position des planètes)</a>
        </div>

    </div>

</section>

<?php
include('footer.php');
?>