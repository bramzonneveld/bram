<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ Bram Intro</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            width: 100vw;
            background: black;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        img {
            width: 100vw;      /* FULLSCREEN BREEDTE */
            height: 100vh;     /* FULLSCREEN HOOGTE */
            object-fit: contain; /* Behoud vorm logo */
            opacity: 1;
        }

        @keyframes dissolve {
            0% {
                filter: blur(0px);
                opacity: 1;
            }
            50% {
                filter: blur(5px);
                opacity: 0.7;
            }
            100% {
                filter: blur(25px);
                opacity: 0;
                transform: scale(1.2);
            }
        }

        .dissolve {
            animation: dissolve 1.3s forwards;
        }
    </style>

</head>
<body>

    <img id="logo" src="/djbramlogo.png" alt="DJ Bram Logo">

    <script>
        // Eerst het logo laten dissolven
        setTimeout(() => {
            document.getElementById("logo").classList.add("dissolve");
        }, 2000);

        // Dan naar homepagina
        setTimeout(() => {
            window.location.href = "/home";
        }, 3500);
    </script>

</body>
</html>