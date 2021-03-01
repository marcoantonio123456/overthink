@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
        <div class="overflow">
            <div class="global">
                <div class="html w-embed">
                    <style>
                        /* Add all your CSS below */

                        /* This converts everything that's EM to PX at 1440px & above screen sizes */
                        @media only screen and (min-width: 1440px) {
                            body {
                                font-size: 14px;
                            }
                        }

                        @media only screen and (min-width: 1920px) {
                            .container.is--hero {
                                min-height: auto;
                                height: 100vh;
                                max-height: 1000px;
                            }
                        }

                        /* Homepage CSS */
                        .hero__icon,
                        .hero__card-text,
                        .hero__gradient {
                            pointer-events: none;
                        }

                        .hero__card {
                            backdrop-filter: blur(2em);
                            -webkit-backdrop-filter: blur(2em);
                        }

                        .hero__card-content {
                            -webkit-mask-image: -webkit-radial-gradient(white, black);
                        }
                    </style>
                </div>
            </div>
            <nav class="section is--nav" style="opacity: 1; transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                <div class="container is--nav">
                    <a href="/" aria-current="page" class="nav__logo-link w-inline-block w--current">
                        <img src="https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffcd643561bc2585a7a87b3_logo.svg" loading="lazy" alt="" class="nav__logo-img" />
                    </a>
                    <div class="mav__right">
                        <div class="nav__menu">
                            <div class="nav__line" style="background-color: rgb(248, 140, 212); width: 61.421875px; transform: translateX(14px);"></div>
                            <a data-color="#f88cd4" href="/" aria-current="page" class="nav__link w-inline-block w--current"><p class="nav__link-text">About</p></a>
                            <a data-color="#def141" href="https://www.patreon.com/timothyricks" target="_blank" class="nav__link w-inline-block"><p class="nav__link-text">Patreon</p></a>
                            <a data-color="#f88cd4" href="https://dribbble.com/tricks" target="_blank" class="nav__link w-inline-block"><p class="nav__link-text">Dribbble</p></a>
                            <a data-color="#5c31ff" href="https://www.youtube.com/c/timothy-ricks" target="_blank" class="nav__link w-inline-block"><p class="nav__link-text">YouTube</p></a>
                            <a data-color="#def141" href="https://www.instagram.com/timricks/" target="_blank" class="nav__link w-inline-block"><p class="nav__link-text">Instagram</p></a>
                        </div>
                        <a href="#" class="nav__icon w-inline-block">
                            <div class="nav__icon-line"><div class="fill is--1" style="width: 0%; height: 100%;"></div></div>
                            <div class="nav__icon-line"><div class="fill is--2" style="width: 0%; height: 100%;"></div></div>
                        </a>
                    </div>
                </div>
            </nav>
            <section class="section is--hero">
                <div class="container is--hero">
                    <div class="hero__left">
                        <div class="hero__h-contain">
                            <img
                                src="https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffcd643561bc21ff17a87ad_icon.svg"
                                loading="lazy"
                                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                alt=""
                                class="hero__icon"
                            />
                            <h1 style="opacity: 1;" class="fade-up tricks">
                                <span class="tricksword">
                                    &nbsp;&nbsp;&nbsp;<span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">W</span><span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">E</span>
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">B</span><span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">F</span>
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">L</span><span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">O</span>
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">W</span>
                                </span>
                            </h1>
                            <h1 style="opacity: 1;" class="fade-up tricks">
                                <span class="tricksword">
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">T</span><span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">R</span>
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">I</span><span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">C</span>
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">K</span><span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">S</span>
                                </span>
                                <span class="tricksword">
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">A</span><span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">N</span>
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">D</span>
                                </span>
                                <br />
                            </h1>
                            <h1 style="opacity: 1;" class="fade-up tricks">
                                <span class="tricksword">
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">W</span><span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">i</span>
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">z</span><span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">a</span>
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">r</span><span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">d</span>
                                    <span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">r</span><span class="letter" style="opacity: 1; transform: translateY(0px) translateZ(0px);">y</span>
                                </span>
                            </h1>
                        </div>
                        <div class="hero__p-contain">
                            <p style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="is--p1">
                                Giving Webflow developers a competitive edge in<br />
                            </p>
                        </div>
                        <div class="hero__p-contain">
                            <p style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="is--p2">
                                the industry through interactive tutorials
                            </p>
                        </div>
                        <a style="" href="https://www.youtube.com/watch?v=gSWQPaybNiI" target="_blank" class="hero__button w-inline-block">
                            <div class="hero__button-t-contain"><p class="hero__button-text">Glassmorphism tutorial</p></div>
                            <div class="hero__button-icon"><img src="https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffcd643561bc2d91d7a87af_arrow.svg" loading="lazy" alt="" class="hero__button-arrow" /></div>
                        </a>
                    </div>
                    <div class="hero__right">
                        <div
                            data-poster-url="https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffcd85058323b1a1485dae4_blue-bg-poster-00001.jpg"
                            data-video-urls="https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffcd85058323b1a1485dae4_blue-bg-transcode.mp4,https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffcd85058323b1a1485dae4_blue-bg-transcode.webm"
                            data-autoplay="true"
                            data-loop="true"
                            data-wf-ignore="true"
                            class="hero__video w-background-video w-background-video-atom"
                        >
                            <video
                                autoplay=""
                                loop=""
                                style="background-image: url('https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffcd85058323b1a1485dae4_blue-bg-poster-00001.jpg');"
                                muted=""
                                playsinline=""
                                data-wf-ignore="true"
                                data-object-fit="cover"
                            >
                                <source src="https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffcd85058323b1a1485dae4_blue-bg-transcode.mp4" data-wf-ignore="true" />
                                <source src="https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffcd85058323b1a1485dae4_blue-bg-transcode.webm" data-wf-ignore="true" />
                            </video>
                        </div>
                        <div class="hero__gradient"></div>
                        <div class="hero__gradient is--other"></div>
                        <div class="hero__card-contain">
                            <div
                                class="hero__card"
                                style="will-change: transform; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(28.2882deg) rotateY(5.88936deg) rotateZ(-9deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            >
                                <div class="hero__card-content">
                                    <div class="hero__card-top">
                                        <img src="https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffd18789f2a80a641edb43b_white-logo.svg" loading="lazy" alt="" class="hero__card-logo" />
                                        <img src="https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffd1878846c12271da4ef13_white-icon.svg" loading="lazy" alt="" class="hero__card-icon" />
                                    </div>
                                    <div class="hero__card-bottom">
                                        <p class="hero__card-text">4323 7645 2828 0713</p>
                                        <img src="https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffd187853b7aaf987f0090d_white-bar.svg" loading="lazy" alt="" class="hero__card-bar" />
                                    </div>
                                    <div
                                        class="hero__card-shine"
                                        style="will-change: transform; transform: translate3d(23.85248em, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section is--pricing">
                <div class="container calc">
                    <h2>CMS&nbsp;Pricing calculator preview</h2>
                    <div class="w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <div class="calc__contain">
                                    <div id="w-node-_5564c128-dc74-c54c-2aa8-e2b69272430d-357a87a0" class="contain is--slider">
                                        <h3>Page Count</h3>
                                        <div class="slider__contain">
                                            <div class="w-embed">
                                                <input type="range" min="1" max="45" value="1" class="slider" id="myRange" />

                                                <style>
                                                    /* The slider itself */
                                                    .slider {
                                                        border-radius: 100vw;
                                                        -webkit-appearance: none; /* Override default CSS styles */
                                                        appearance: none;
                                                        width: 100%; /* Full-width */
                                                        height: 1em; /* Specified height */
                                                        background: #d3d3d3; /* Grey background */
                                                        outline: none; /* Remove outline */
                                                        opacity: 1; /* Set transparency (for mouse-over effects on hover) */
                                                        -webkit-transition: 0.2s; /* 0.2 seconds transition on hover */
                                                        transition: opacity 0.2s;
                                                    }

                                                    /* Mouse-over effects */
                                                    .slider:hover {
                                                        opacity: 1; /* Fully shown on mouse-over */
                                                    }

                                                    /* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
                                                    .slider::-webkit-slider-thumb {
                                                        border-radius: 100vw;
                                                        -webkit-appearance: none; /* Override default look */
                                                        appearance: none;
                                                        width: 6em; /* Set a specific slider handle width */
                                                        height: 4em; /* Slider handle height */
                                                        background: #1c1c1c; /* Green background */
                                                        cursor: pointer; /* Cursor on hover */
                                                    }

                                                    .slider::-moz-range-thumb {
                                                        border-radius: 100vw;
                                                        width: 6em; /* Set a specific slider handle width */
                                                        height: 4em; /* Slider handle height */
                                                        background: #1c1c1c; /* Green background */
                                                        cursor: pointer; /* Cursor on hover */
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                        <h3 id="slider-number">1</h3>
                                    </div>
                                    <div class="contain">
                                        <h3>Unique Concepts</h3>
                                        <div class="concepts__contain">
                                            <a href="#" class="concepts__button minus disabled w-inline-block"><h3 class="is--text">-</h3></a><a href="#" class="concepts__button plus w-inline-block"><h3 class="is--text">+</h3></a>
                                        </div>
                                        <h3 id="concepts-text">1</h3>
                                    </div>
                                    <div class="contain" style="background-color: rgb(238, 237, 242); color: rgb(28, 28, 28);">
                                        <h3>Include Development</h3>
                                        <a href="#" class="switch dev w-inline-block" style="background-color: rgb(28, 28, 28);">
                                            <div
                                                class="switch__circle"
                                                style="transform: translate3d(0em, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgb(222, 241, 65);"
                                            ></div>
                                        </a>
                                        <h3 id="dev-text">No thanks</h3>
                                    </div>
                                    <div class="contain" style="background-color: rgb(238, 237, 242); color: rgb(28, 28, 28);">
                                        <h3>Write Content</h3>
                                        <a href="#" class="switch content w-inline-block" style="background-color: rgb(28, 28, 28);">
                                            <div
                                                class="switch__circle"
                                                style="transform: translate3d(0em, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgb(222, 241, 65);"
                                            ></div>
                                        </a>
                                        <h3 id="content-text">No thanks</h3>
                                    </div>
                                    <div class="contain">
                                        <h3>Total</h3>
                                        <h2 id="my-total" class="total">$1,000</h2>
                                    </div>
                                </div>
                                <div class="pricing__button">
                                    <a style="" href="https://www.patreon.com/timothyricks" target="_blank" class="hero__button w-inline-block">
                                        <div class="hero__button-t-contain is--pricing"><p class="hero__button-text is--pricing">Working calculator tutorial</p></div>
                                        <div class="hero__button-icon is--pricing">
                                            <img src="https://assets.website-files.com/5ffcd643561bc26ed27a87a1/5ffcd643561bc2d91d7a87af_arrow.svg" loading="lazy" alt="" class="hero__button-arrow is--pricing" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection