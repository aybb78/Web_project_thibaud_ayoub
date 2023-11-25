<html lang="fr">
<head>
    <title>MASTER'S TREASURE</title>

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <div id="title" class=texte>Chrono</div>
    
    <div id="son">   
    <button id="speakerButton" onclick="toggleAudio()">🔊</button>
    <audio id="myAudio" loop>
        <source src="assets/audio/intro.m4a" type="audio/mp3">
        Votre navigateur ne supporte pas l'élément audio.
    </audio>
    </div>
    


    <script>
        var audio = document.getElementById("myAudio");
        function toggleAudio() {
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
        }
    </script>
</body>
</html>