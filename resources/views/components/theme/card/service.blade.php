<div class="tp-service-3-item p-relative mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="height: 417px;">
    <div class="tp-service-3-icon">
        <span>
            {{-- <i class="flaticon-livingroom"></i> --}}
            <img src="{{asset($image)}}" alt="{{$title}}" width="55">
        </span>
    </div>
    <div class="tp-service-3-content">
        <h4 class="tp-service-3-title"><a href="service-details.html">{{ $title }}</a></h4>
        @if($description !== '')
        <p>{{ $description }}</p>
        @endif
        @if($link !== '')
        <div class="tp-service-3-btn">
            <a href="{{$link}}">
                <span><i class="fa-regular fa-arrow-right"></i></span>
            </a>
        </div>
        @endif
    </div>
</div>
