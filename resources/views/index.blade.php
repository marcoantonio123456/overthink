@extends('partials.master')
@section('title', 'HOME')
@section('content')
            <section class="section is--hero">
                <div class="container is--hero">
                    <div class="hero__left">
                        <div class="hero__h-contain">
                            <h1 style="opacity: 1;" class="fade-up">
                                <span class="">
                                    <span class="letter" style="opacity: 1; color: #B10000; transform: translateY(0px) translateZ(0px);">O</span>
                                    <span class="letter" style="opacity: 1; color: #B10000; transform: translateY(0px) translateZ(0px);">V</span>
                                    <span class="letter" style="opacity: 1; color: #B10000; transform: translateY(0px) translateZ(0px);">E</span>
                                    <span class="letter" style="opacity: 1; color: #B10000; transform: translateY(0px) translateZ(0px);">R</span>
                                    <span class="letter" style="opacity: 1; color: #B10000; transform: translateY(0px) translateZ(0px);">T</span>
                                    <span class="letter" style="opacity: 1; color: #B10000; transform: translateY(0px) translateZ(0px);">H</span>
                                    <span class="letter" style="opacity: 1; color: #B10000; transform: translateY(0px) translateZ(0px);">I</span>
                                    <span class="letter" style="opacity: 1; color: #B10000; transform: translateY(0px) translateZ(0px);">N</span>
                                    <span class="letter" style="opacity: 1; color: #B10000; transform: translateY(0px) translateZ(0px);">K</span>
                                </span>
                            </h1>
                        </div>
                        <div class="hero__p-contain" style="width:80%;">
                            <p style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="is--p1">
                                 We help develop foundation & fundamentals in branding, values & identity through distinct concepts.
                            </p>
                        </div>
                        <div class="hero__p-contain" style="width:80%;">
                            <p style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="is--p2">
                                <br>If we enticed you already and you want to work with us, get in touch or sign up below to get notified when we launch.
                            </p>
                        </div>
                <div class="flex-wrapper">
                    <div class="flex-form">
                        <form   
                                id="email-form"
                                name="email-form" 
                                data-name="Email Form" 
                                class="form"
                                action="/form/1"
                                method="POST"
                        >
                        @csrf
                            <input 
                                type="email" 
                                class="text-field w-input" 
                                maxlength="256" 
                                name="email-2" 
                                data-name="Email" 
                                data-ix="move-into-view-delay-2" 
                                placeholder="Email" 
                                id="email-2" 
                                required="" 
                                style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 1200ms, transform 1200ms;">

                            <input 
                                type="submit" 
                                value="Stay Tuned" 
                                data-wait="Please wait..." 
                                class="submit-button w-button" 
                                data-ix="move-into-view-delay-2" 
                                style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 1200ms, transform 1200ms;">
                        </form>
                        
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </div>
                </div>


                    </div>
                    <div class="hero__right">
                        <div
                            data-poster-url="videos/loop0001-poster-00001.jpg"
                            data-video-urls="videos/loop0001-transcode.mp4,videos/loop0001-transcode.webm"
                            data-autoplay="true"
                            data-loop="true"
                            data-wf-ignore="true"
                            class="hero__video w-background-video w-background-video-atom"
                        >
                            <video autoplay="" loop="" style="background-image: url('videos/loop0001-poster-00001.jpg');" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                <source src="videos/loop0001-transcode.mp4" data-wf-ignore="true" />
                                <source src="videos/loop0001-transcode.webm" data-wf-ignore="true" />
                            </video>
                        </div>
                        <div class="hero__gradient"></div>
                        <div class="hero__gradient is--other"></div>
                        <!-- <div class="hero__card-contain">
                            <div class="hero__card">
                            <div class="hero__card-content">
                                <div class="hero__card-text">
                                <div class="text-block">Sorry for the dust!<br>sit tight and we&#x27;ll be with you soon.</div>
                                </div>
                                <div class="hero__card-shine"></div>
                            </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
        </div>
@endsection