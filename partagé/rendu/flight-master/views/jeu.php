<html>
    <head>

        <title>MASTER'S TREASURE</title>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
        <link rel="stylesheet" href="assets/style.css">

        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    </head>
    <body id="app">

    <div id="popup-container">
        <div id="popup-contenu">
            <img src="assets/images/lettre_maitre.avif" alt="Image Pop-up">
            <p id="image-text">Lettre d'adieux. <br>
                Cher <?php echo isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : ''; ?>
                si tu lis cette lettre c'est que j'ai pris ma retraite. Je vis désormais reclus de la société, n'essaie pas de me retrouver. <br>
                Je tiens à t'informer néanmois que je t'ai laissé un grand trésor, afin que tu puisse un jours prendre la relève. <br>
                Voici le premier indice dont tu aura besoin pour retrouver mon plus grand trésor. <br>
                Signé <br>
                ton maître <?php echo isset($_POST['mentor']) ? htmlspecialchars($_POST['mentor']) : ''; ?> 

            </p>
            <button id="close-button" onclick="démarrer()">Commencer</button>
        </div>
    </div>

        <div id="title" class=texte>Chrono</div>

        <div id="map">   
            
        </div>

        <div id="inventaire" class=texte>Inventaire</div>

        <script src="assets/jeu.js"></script>
    </body>
</html>