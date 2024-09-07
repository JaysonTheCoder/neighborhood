<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../styles/Landingpage.css">
    <style>
        :root {
            /* CSS HSL */
            --russian-violet: hsla(262, 100%, 8%, 1);
            --russian-violet-2: hsla(271, 100%, 14%, 1);
            --persian-indigo: hsla(271, 85%, 23%, 1);
            --tekhelet: hsla(270, 73%, 35%, 1);
            --french-violet: hsla(272, 63%, 46%, 1);
            --amethyst: hsla(273, 68%, 59%, 1);
            --heliotrope: hsla(274, 100%, 75%, 1);
            --mauve: hsla(278, 100%, 83%, 1);

            /* CSS HSL */
            --columbia-blue: hsla(213, 59%, 85%, 1);
            --powder-blue: hsla(216, 43%, 81%, 1);
            --powder-blue-2: hsla(221, 34%, 76%, 1);
            --cool-gray: hsla(232, 22%, 66%, 1);
            --ultra-violet: hsla(255, 20%, 44%, 1);

            /* blob radius */
            --radius-1: 70%;
            --radius-2: 30%;
            --radius-3: 30%;
            --radius-4: 70%;
            --radius-5: 60%;
            --radius-6: 40%;
            --radius-7: 60%;
            --radius-8: 40%;

            /* Container size*/
            --height-container: 100vh;
            --width-container: 100vw;

            /* content screen size*/
            --content-screen-height: 100vh;
        }
        @font-face {
            font-family: "Roboto-Regular";
            src: url("../assets/Fonts/Roboto-Regular.ttf");
        }
        @font-face {
            font-family: "Roboto-Bold";
            src: url("../assets/Fonts/Roboto-Bold.ttf");
        }
        @font-face {
            font-family: "Poppins-Regular";
            src: url("../assets/Fonts/Poppins-Regular.ttf");
        }
        * {
            margin: 0;
            padding: 0;
        }

        @keyframes autoAnimate {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                opacity: 90%;
            }
            100% {
                transform: scale(1);
                opacity: 100%;
            }
        }
        @keyframes nav {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                opacity: 90%;
            }
            100% {
                transform: scale(1);
                opacity: 100%;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="landing-screen">
            <div class="blob"></div>
            <div class="top-bar">
                <div class="platform-profile">
                    <div class="logo">
                        <img src="../assets/20230305_165843.jpg" alt="" title="Community Platform Logo">
                    </div>
                    <div class="platform-name">
                        <h3>Neighborhood Sharing Platform</h3>
                    </div>
                </div>
            </div>
            <div class="landing-definition flex-center">
                <div class="message">
                    <h3 class="text-lg">Welcome to Our Community Platform! </h3>
                    <p class="text-mid">Your community’s go-to place for sharing, connecting, and growing together.<p class="text-sm font-roboto">Join us in building a stronger, more supportive community where everyone has something to give and receive. Let's share the love, right here, right now!</p></p>
                    <button type="button">
                        <a href="../Pages/ContentPage.php">Get started</a>
                    </button>
                </div>
                <div class="landing-illustration">
                    <img src="../assets/Illustrations/3d_guy_woman.png" alt="">
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>