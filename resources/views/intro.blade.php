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
            background: black;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        img {
            width: 35%;
            opacity: 1;
            transition: opacity 1s ease-out;
        }

        .fade-out {
            opacity: 0;
        }
    </style>

    <script>
        setTimeout(() => {
            document.querySelector("img").classList.add("fade-out");
        }, 2500); // fade na 2.5 sec

        setTimeout(() => {
            window.location.href = "/home"; 
        }, 3500); // redirect na 3.5 sec
    </script>
</head>
<body>
    <img src="/djbramlogo.png" alt="DJ Bram Logo">
</body>
</html>