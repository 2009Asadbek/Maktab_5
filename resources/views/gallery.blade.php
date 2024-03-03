@extends('layouts.index')
@section('content')
<div class="mainContent withImage">
    <div class="imageHeader">
        <div class="container">
            <h1 class="pageTitle">@lang('words.gallery')</h1>
            <nav aria-label="breadcrumb">
                <ol id="w5" class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                    <li class="breadcrumb-item"><a href="/uz/news/index">@lang('words.axborotMarkaz')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('words.gallery')</li>
                </ol>
            </nav>
            <div class="imageBox">
                <img alt="." src="/img/schoolGirlWhite.jpg">
            </div>
        </div>
    </div>

    <div class="container">

        <div class="galleryFolders">
            <div class="item">
                <a href="/uploads/media//bed9cba1-e9e5-331d-6237-a43c96bbc0d5.jpg" data-fancybox="group_12">
                    <div class="imageBox">
                        <img src="/uploads/media//bed9cba1-e9e5-331d-6237-a43c96bbc0d5_mini.jpg">
                    </div>
                    <div class="descriptionBox">
                        <h1>Maktab ko'rinishidan fotolavhalar</h1>

                        <span>15 Mart 2022</span>

                        <div class="count">
                            <h1>6</h1>
                            <h2>Foto</h2>
                        </div>
                    </div>
                </a>

                <a href="/uploads/media//f5d99b2b-e730-519a-cfd5-9e4d1b6b40d5.jpg" data-fancybox="group_12"
                    class="hidden"><img src="/uploads/media//f5d99b2b-e730-519a-cfd5-9e4d1b6b40d5_mini.jpg"></a>

                <a href="/uploads/media//c9d12960-5215-ed45-46ec-3aae9b2fd319.jpg" data-fancybox="group_12"
                    class="hidden"><img src="/uploads/media//c9d12960-5215-ed45-46ec-3aae9b2fd319_mini.jpg"></a>

                <a href="/uploads/media//9eba06ce-34c1-c822-521a-0161497830b7.jpg" data-fancybox="group_12"
                    class="hidden"><img src="/uploads/media//9eba06ce-34c1-c822-521a-0161497830b7_mini.jpg"></a>

                <a href="/uploads/media//94af14b9-5109-220c-5986-a3f046fc5396.jpg" data-fancybox="group_12"
                    class="hidden"><img src="/uploads/media//94af14b9-5109-220c-5986-a3f046fc5396_mini.jpg"></a>

                <a href="/uploads/media//2ca3b0b7-6573-8dd1-10d5-f8c418ea685e.jpg" data-fancybox="group_12"
                    class="hidden"><img src="/uploads/media//2ca3b0b7-6573-8dd1-10d5-f8c418ea685e_mini.jpg"></a>
            </div>
        </div>
    </div>
</div>
@endsection
  
@section('js')
    <script>
        jQuery(function($) {

            $("document").ready(function() {
                $("[data-fancybox]").fancybox({
                    baseClass: "awesome-gally",
                    protect: true,
                    thumbs: {
                        autoStart: true,
                        axis: "x"
                    },
                    zoomOpacity: false,
                    animationEffect: false,
                    buttons: [
                        "close"
                    ],
                });
            });
        });
    </script>
@endsection
