<!DOCTYPE html>
<html
    data-wf-domain=""
    data-wf-page="5ffcd643561bc237357a87a0"
    data-wf-site="5ffcd643561bc26ed27a87a1"
    class="w-mod-js w-mod-ix wf-dmsans-n4-active wf-dmsans-n5-active wf-dmsans-n7-active wf-fahkwang-n7-active wf-dmsans-i4-active wf-fahkwang-n4-active wf-fahkwang-n5-active wf-fahkwang-n6-active wf-active"
>
    <head>
        <meta charset="utf-8" />
        <title>@yield('title') - OVERTHINK STUDIO</title>
        <meta content="" name="description" />
        <meta content="OVERTHINK STUDIO" property="og:title" />
        <meta content="" property="og:description" />
        <meta content="" property="og:image" />
        <meta content="OVERTHINK STUDIO" property="twitter:title" />
        <meta content="" property="twitter:description" />
        <meta content="" property="twitter:image" />
        <meta property="og:type" content="website" />
        <meta content="summary_large_image" name="twitter:card" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <style>
            /* This CSS was added to fix missing styles. Republish your site to fix your styles. */
            #w-node-_5564c128-dc74-c54c-2aa8-e2b69272430d-357a87a0 {
                -ms-grid-column-span: 2;
                grid-column-end: 3;
                -ms-grid-column: 1;
                grid-column-start: 1;
                -ms-grid-row-span: 1;
                grid-row-end: 2;
                -ms-grid-row: 1;
                grid-row-start: 1;
            }
            @media screen and (max-width: 479px) {
                #w-node-_5564c128-dc74-c54c-2aa8-e2b69272430d-357a87a0 {
                    -ms-grid-column: span 1;
                    grid-column-start: span 1;
                    -ms-grid-column-span: 1;
                    grid-column-end: span 1;
                    -ms-grid-row: span 1;
                    grid-row-start: span 1;
                    -ms-grid-row-span: 1;
                    grid-row-end: span 1;
                }
            }
        </style>
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:regular,italic,500,700%7CFahkwang:regular,500,600,700" media="all" />
        <script type="text/javascript">
            WebFont.load({ google: { families: ["DM Sans:regular,italic,500,700", "Fahkwang:regular,500,600,700"] } });
        </script>
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
        <script type="text/javascript">
            !(function (o, c) {
                var n = c.documentElement,
                    t = " w-mod-";
                (n.className += t + "js"), ("ontouchstart" in o || (o.DocumentTouch && c instanceof DocumentTouch)) && (n.className += t + "touch");
            })(window, document);
        </script>
        <link href="" rel="shortcut icon" type="image/x-icon" />
        <link href="" rel="apple-touch-icon" />
        <style>
            ::selection {
                background-color: rgba(92, 49, 255, 0.99);
                color: #ffffff;
                text-shadow: none;
            }
        </style>
    </head>
    <body>
        @yield('content')
        <script
            src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5ffcd643561bc26ed27a87a1"
            type="text/javascript"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
        ></script>
        <script src="/js/overthink.js" type="text/javascript"></script>
        <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
        <script>
            function moveLine(myLine) {
                var myDistance = myLine.offset().left - $(".nav__menu").offset().left;
                var myWidth = myLine.width();
                var myColor = myLine.parent().data("color");

                $(".nav__line").css({ "background-color": myColor, width: myWidth + "px", transform: "translateX(" + myDistance + "px)" });
            }

            if ($(".w--current p").length > 0) {
                moveLine($(".w--current p"));
            }

            window.onresize = function () {
                if ($(".w--current p").length > 0) {
                    moveLine($(".w--current p"));
                }
            };

            $(".nav__link").mouseenter(function () {
                moveLine($(this).find("p"));
            });

            $(".nav__link").mouseleave(function () {
                if ($(".w--current p").length > 0) {
                    moveLine($(".w--current p"));
                } else {
                    $(".nav__line").css("width", "0px");
                }
            });
        </script>

        <main role="main" class="main-content">
            <canvas id="noise" class="noise" width="1440" height="814"></canvas>
        </main>
        <style>
            .main-content {
                z-index: 9999999999;
                position: fixed;
                top: 0;
                left: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-flow: column;
                height: 100vh;
                background: transparent;
            }
            .noise {
                z-index: 9999999999;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                pointer-events: none;
                opacity: 0.05;
            }
        </style>
        <script>
            const noise = () => {
                let canvas, ctx;
                let wWidth, wHeight;
                let noiseData = [];
                let frame = 0;
                let loopTimeout;
                // Create Noise
                const createNoise = () => {
                    const idata = ctx.createImageData(wWidth, wHeight);
                    const buffer32 = new Uint32Array(idata.data.buffer);
                    const len = buffer32.length;
                    for (let i = 0; i < len; i++) {
                        if (Math.random() < 0.1) {
                            buffer32[i] = 0xff000000;
                        }
                    }
                    noiseData.push(idata);
                };
                // Play Noise
                const paintNoise = () => {
                    if (frame === 9) {
                        frame = 0;
                    } else {
                        frame++;
                    }
                    ctx.putImageData(noiseData[frame], 0, 0);
                };
                // Loop
                const loop = () => {
                    paintNoise(frame);
                    loopTimeout = window.setTimeout(() => {
                        window.requestAnimationFrame(loop);
                    }, 1000 / 25);
                };
                // Setup
                const setup = () => {
                    wWidth = window.innerWidth;
                    wHeight = window.innerHeight;
                    canvas.width = wWidth;
                    canvas.height = wHeight;
                    for (let i = 0; i < 10; i++) {
                        createNoise();
                    }
                    loop();
                };
                // Reset
                let resizeThrottle;
                const reset = () => {
                    window.addEventListener(
                        "resize",
                        () => {
                            window.clearTimeout(resizeThrottle);
                            resizeThrottle = window.setTimeout(() => {
                                window.clearTimeout(loopTimeout);
                                setup();
                            }, 200);
                        },
                        false
                    );
                };
                // Init
                const init = (() => {
                    canvas = document.getElementById("noise");
                    ctx = canvas.getContext("2d");
                    setup();
                })();
            };
            noise();
        </script>

        <style>
            .letter {
                display: inline-block;
                opacity: 0;
            }
            .tricksword {
                white-space: nowrap;
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

        <script>
            var tricksWord = document.getElementsByClassName("tricks");
            for (var i = 0; i < tricksWord.length; i++) {
                var wordWrap = tricksWord.item(i);
                wordWrap.innerHTML = wordWrap.innerHTML.replace(/(^|<\/?[^>]+>|\s+)([^\s<]+)/g, '$1<span class="tricksword">$2</span>');
            }

            var tricksLetter = document.getElementsByClassName("tricksword");
            for (var i = 0; i < tricksLetter.length; i++) {
                var letterWrap = tricksLetter.item(i);
                letterWrap.innerHTML = letterWrap.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
            }

            // Fade Up Animation
            var fadeUp = anime.timeline({
                loop: false,
                autoplay: false,
            });

            fadeUp.add({
                targets: ".fade-up .letter",
                translateY: [100, 0],
                translateZ: 0,
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 1400,
                delay: (el, i) => 300 + 40 * i,
            });

            fadeUp.play();
        </script>
    </body>
</html>

