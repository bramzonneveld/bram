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

        /* Fullscreen logo */
        #logo {
            width: 75vw;
            max-width: 850px;
            opacity: 0;
            transform: scale(1);
            transition: opacity 1.4s ease, transform 1.4s ease;
        }

        /* Fade-in effect */
        .fade-in {
            opacity: 1;
            transform: scale(1.03);
        }

        /* Fade-out effect */
        .fade-out {
            opacity: 0;
            transform: scale(1.15);
        }
    </style>
</head>
<body>

    <img id="logo" src="/djbramlogo.png" alt="DJ Bram Logo">

    <script>
        const logo = document.getElementById("logo");

        // Fade in
        setTimeout(() => {
            logo.classList.add("fade-in");
        }, 300);

        // Fade out
        setTimeout(() => {
            logo.classList.remove("fade-in");
            logo.classList.add("fade-out");
        }, 2200);

        // Go to homepage
        setTimeout(() => {
            window.location.href = "/home";
        }, 3600);
    </script>

</body>
</html>