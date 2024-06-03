<!-- resources/views/components/slider.blade.php -->
<section class="home_section_1_margin" style="margin-bottom:36px">
    <div class="section_slider swiper-button">
        <div class="home-slider swiper-container swiper-data swiper-container-initialized swiper-container-horizontal swiper-container-autoheight"
            data-drag="true" data-xl="1" data-lg="1" data-md="1" data-xs="1" data-x="1"
            data-autoplay="3000" data-height="true" data-space="0" style="cursor: grab;">
            <div class="swiper-wrapper">
                @foreach($banners as $banner)
                <div class="swiper-slide" role="group" aria-label="{{ $loop->index + 1 }} / {{ $banners->count() }}">
                    <a href="{{ $banner->link }}" class="clearfix" title="{{ $banner->title }}">
                        <picture>
                            <img src="{{ $banner->image }}" alt="{{ $banner->title }}" class="img-responsive">
                        </picture>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                aria-controls="swiper-wrapper" aria-disabled="false">
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#previcon"></use>
                </svg>
            </div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                aria-controls="swiper-wrapper" aria-disabled="false">
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nexticon"></use>
                </svg>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>
