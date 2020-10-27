@extends("frontend.layouts.app")

@section('title' , "homepage")

@section('content')
}
    <!-- agency_heading_start -->
    <div class="agency_heading">
        <div class="container">
            <div class="row">
                <div class="col-xl-10" style="text-align: right;">
                    <div class="agency_text">
                        <h4 style="font-size: 32px;font-family: 'Cairo', sans-serif;">{{ $settings->slider_title }}</h4>

                    </div>
                </div>
            </div>
        </div>
        <div class="animated_shape">
            <div class="anim_1">
                <img src="img/about/1.png" alt="">
            </div>
            <div class="anim_2">
                <img src="img/about/2.png" alt="">
            </div>
        </div>
    </div>
    <!-- agency_heading_end -->

    <!-- video_area_start -->
    <div class="video_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-12" style="background-image: url('{{ asset("storage/".$settings->video_background_image) }}')">
                    <div class="video_banner " style="background-image: url('{{ asset("storage/".$settings->video_background_image) }} ')">
                        <a class="popup-video" href="{{ $settings->video_link }}">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- "service_area_start -->
<div class="service_area black_bg">
    <h1 class="opacity_text d-none d-lg-block">Services</h1>
    <div class="container">
        <div class="row" style="text-align: right">
            <div class="col-xl-12">
                <div class="section_title white-color">
                    <h3>
                        استخدامات انترنت الاشياء
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($usages as $usage)
            <div class="col-xl-4 col-md-6">
                <div class="single_service text-center">
                    <div class="icon">
                        <img src="{{ asset('storage/'.$usage->image) }}" alt="" width="150px" height="150px">
                    </div>
                    <h3>{{ $usage->title }}</h3>
                    <p>
                        {{ $usage->descritpion }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- brand_area_start -->
    <div class="brand_area">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
    <!-- brand_area_end-->
</div>
    <!-- "service_area_end -->

    <!-- build_product_start -->
    <div class="build_product">
        <div class="container">
            <div class="row" style="text-align: right;">
                <div class="col-xl-12">
                    <div class="section_title white-color">
                        <h3 style=" color: #0A0A0A">
                            {{$settings->advantage_title}}
                        </h3>
                    </div>
                </div>
            </div>
            @foreach($advantages as $advantage)
            <div class="row align-items-center" style="text-align: right">
                <div class="col-xl-6 col-md-6">
                    <div class="build_img">
                        <img src="{{ asset('storage/'.$advantage->image) }}" alt="" width="150px">

                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="product_right">
                        <div class="section_title">
                            <h3>{{ $advantage->title }}</h3>
                        </div>
                        <p>{{ $advantage->description }}</p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- build_product_end -->

    <!-- counter_area_start -->
    <div class="counter_area">
        <h1 class="opacity_text d-none d-lg-block">
            Quick Fact
        </h1>
        <div class="container">
            <div class="row">
                @foreach($statistics as $statistic)
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3 class="counter">{{ $statistic->value }}</h3><p>{{ $statistic->color }}</p>
                        <span>{{ $statistic->title }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- counter_area_end -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
        @foreach($images as $image)
        <div class="single_instagram" >
            <img src="{{ asset('storage/'.$image->image) }}" alt="" >
            <div class="ovrelay">
                <a data-toggle="modal" data-target="#myModal{{$image->id}}" onclick="$('#myModal').modal({backdrop: 'static', keyboard: true})">
                    <i class="fa fa-hand-point-down"></i>
                </a>
            </div>
        </div>
            <div id="myModal{{$image->id}}" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">

                        <img src="{{ asset('storage/'.$image->image) }}" alt="" >
                    </div>

                </div>
            </div>
        @endforeach
    </div>
    <!-- instragram_area_end -->
    <div class="Visit_Work text-center">
        <a href="#" class="Visit_link">Visit Our Work</a>
    </div>


@endsection

@section('js')
    <script>
        $('#ModalForm').modal('show');
        // HIDE
        $('#ModalForm').modal('hide');

    </script>
@endsection
