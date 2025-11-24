<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ Bram Intro</title>

    <style>
        body {
            margin: 0;
            background: black;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        #logo {
            position: absolute;
            width: 90vw;
            max-width: 900px;
            filter: brightness(1.2);
            opacity: 1;
            transition: opacity .5s;
        }

        /* --- GLITCH EFFECT --- */
        @keyframes glitch {
            0% { clip-path: inset(0 0 0 0); transform: translate(0); }
            20% { clip-path: inset(10% 0 85% 0); transform: translate(-10px); }
            40% { clip-path: inset(80% 0 5% 0); transform: translate(10px); }
            60% { clip-path: inset(40% 0 40% 0); transform: translate(-5px); }
            80% { clip-path: inset(5% 0 80% 0); transform: translate(5px); }
            100% { clip-path: inset(0 0 0 0); transform: translate(0); }
        }

        .glitch {
            animation: glitch 0.3s steps(2, end) 10;
        }

        /* --- ROOK / DISSOLVE --- */
        @keyframes smoke {
            0% { filter: blur(0px) opacity(1); transform: scale(1); }
            50% { filter: blur(10px) opacity(.6); transform: scale(1.1); }
            100% { filter: blur(30px) opacity(0); transform: scale(1.4); }
        }

        .smoke {
            animation: smoke 1.6s forwards;
        }

        /* --- PIXEL EXPLOSION --- */
        @keyframes pixelboom {
            0% { clip-path: circle(0% at center); opacity: 1; }
            100% { clip-path: circle(150% at center); opacity: 0; }
        }

        .boom {
            animation: pixelboom 0.8s forwards;
        }
    </style>
</head>
<body>

    <img id="logo" src="/djbramlogo.png" alt="DJ Bram Logo">

    <script>
        const logo = document.getElementById("logo");

        // 🔥 1) Glitch effect
        setTimeout(() => {
            logo.classList.add("glitch");
        }, 300);

        // 🔥 2) Rook/dissolve
        setTimeout(() => {
            logo.classList.remove("glitch");
            logo.classList.add("smoke");
        }, 1500);

        // 🔥 3) Pixel-explosion
        setTimeout(() => {
            logo.classList.remove("smoke");
            logo.classList.add("boom");
        }, 2800);

        // 🔥 4) Ga naar de homepage
        setTimeout(() => {
            window.location.href = "/home";
        }, 3800);
    </script>

</body>
</html>