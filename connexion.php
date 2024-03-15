<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <!-- ------------------------- PAGE PROFIL USER - début ------------------------- -->
    <main class="siteProfil">
        
        <!-- SECTION GAUCHE - INFO USER -->
        <section class="gaucheProfil">
            <div class="containerGauche">
                
            </div>
        </section>

        <!-- SECTION DROITE - IMAGE FIXE -->
        <section class="droitProfil">
            <div class="droitImg droitImgProfil"></div>
        </section>

    </main>
    <footer></footer>
    <script src="./js/nav_scroll2.js"></script>
    <script>
        function showList(listClassName){
            var allLists = document.querySelectorAll('.nav2_container div:not(.nav2_menu,.deconnexion,.profil_nav,.img_profil_nav)');
            allLists.forEach(function(list) {
                list.classList.add('hidden');
            });
    
            // Afficher la liste correspondante
            var selectedList = document.querySelector('.' + listClassName);
            selectedList.classList.remove('hidden');
        }
    </script>
</body>
</html>