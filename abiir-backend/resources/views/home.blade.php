@extends('layouts.app')

@section('content')

 BEGIN: AnnouncementBar 
<div class="bg-cozy-green text-white text-xs text-center py-2 px-4 tracking-wider">
   Get 10% off your next order using the coupon code "SAVE10" during checkout.
  </div>
 END: AnnouncementBar 
 BEGIN: MainHeader 
 BEGIN: MainHeader 

 END: MainHeader 
 END: MainHeader 
 BEGIN: HeroSection 
<section class="bg-cozy-cream">
<div class="flex flex-col md:flex-row h-auto md:h-[600px]">
<!-- Left Image -->
<div class="md:w-1/2 relative h-64 md:h-full">
<img alt="Santos Hay &amp; Honey Candle" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJshOCVBLu6f162Dnqh7SlM_bi_icgXEBJBpDGor988QdajtiJ6jzT6VpZflKIV_iiX2AVVJERnaq-X8Q0srp9y5FfhxWRIg4Jg95IqmVSRKHv2mqcTnyJ4WDjV5o8ZYchXCFW0xbBzn55mWGLUC-7tB5m9E6GzbAaOT2IX3k2_niAzpBmqNn_mwZJ6oQssGT0ddmdPD7KAxROnbDD32J3gUQm4avcEO_orCEsQziglkUvfegm1-A99whZAfnp2IhL853rwnCHBLc"/>
</div>
<!-- Right Content -->
<div class="md:w-1/2 flex items-center justify-center p-6 md:p-16 relative bg-cozy-beige">
<div class="max-w-md text-center md:text-left z-10 relative">
<h1 class="font-serif text-4xl md:text-5xl lg:text-6xl text-gray-900 leading-tight mb-4">
       Bois Vert Scented
       <br/>
       Candle White
      </h1>
<p class="text-xs uppercase tracking-widest text-gray-500 mb-8 font-semibold">
       Products that harness the power of 100% natural.
      </p>
<a class="inline-block bg-cozy-green text-white px-8 py-3 text-xs uppercase tracking-widest font-semibold hover:bg-gray-800 transition-colors" href="#">
       Shop Now
      </a>
</div>
</div>
</div>
</section>
 END: HeroSection 
 BEGIN: BestOfCollection 
<section class="bg-cozy-green text-white py-12 md:py-20 relative overflow-hidden">
<!-- Abstract Leaf Vectors (Simplified as CSS) -->
<div class="absolute inset-0 opacity-10 pointer-events-none">
<svg class="absolute top-10 left-10 w-64 h-64" fill="none" stroke="currentColor" stroke-width="1" viewbox="0 0 100 100">
<path d="M10,90 Q40,40 90,10 Q80,60 10,90">
</path>
</svg>
<svg class="absolute bottom-10 right-10 w-64 h-64" fill="none" stroke="currentColor" stroke-width="1" viewbox="0 0 100 100">
<path d="M90,90 Q40,40 10,10 Q20,60 90,90">
</path>
</svg>
</div>
<div class="container mx-auto px-4 lg:px-8">
<div class="flex flex-col lg:flex-row items-center justify-between gap-12">
<!-- Left Floating Image -->
<div class="w-full lg:w-1/3 flex justify-center lg:justify-start lg:-mt-24 relative z-10">
<img alt="Pouring wax" class="w-48 h-64 object-cover shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9if4Id6IMERTGHMnrwT3DslUhU91eboGgrt8aLZi77oLNhrKJvcLqxu6aTcFyhdP3zrukzVLNvXEXHeVAKJbnHkIQXZL4nzcEeYghxGeDaqaTxXelJ6S4tIBHhfNWc4V6VNlHiYE--NaaWmB2kHq314in_mKMTLrHMdrZ-ZGfb4iXu375H_XC4KJZSOzLPoXBWsv76kDwnDXrePwWFRu1dXm0Me_GTwCT6BsSQh-3WfAeD9Rm_GXqMawkPuSjkSLumJflKQbPww4"/>
<img alt="Small amber candle" class="absolute -bottom-16 right-0 lg:right-10 w-32 h-32 object-cover shadow-lg border-4 border-cozy-green" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8qfwC5hRe09WbiNriozQ2D3Y7hfEbAKLQuaNoB0H5zcpkkk841Wn-JYKA_4XUSQicloTzMxohxk8qM4861_29Z6882nZX4FjAOcBnOwKHTgMdx5Pe0Pfj0tH4SpwKMx7pECIZzJ6Lv-9x6k3xR6OODo-rzK8Iohc0naPAwdZMV77TU2sGvhnaTr8eWD6K1k218mErhZeO2mlAXA9mKNL7YK2VZRuUUo2r3tMjf-A5iXoyzij3LvKepKLeY9qdbENGbDj4VuEnedU"/>
</div>
<!-- Center Text -->
<div class="w-full lg:w-1/3 text-center z-10">
<p class="text-xs uppercase tracking-[0.2em] mb-4 text-cozy-cream/80">
       Best of Collection 2022
      </p>
<h2 class="font-serif text-3xl md:text-4xl lg:text-5xl mb-6 leading-tight">
       Discover a Best of the
       <br/>
       Best world of Candle
      </h2>
<p class="text-sm text-cozy-cream/70 mb-8 max-w-md mx-auto italic">
       Our company announced a new tagline and manifesto, to enforce our dedication to fostering belonging among all clients.
      </p>
<a class="inline-block bg-white text-cozy-green px-6 py-3 text-xs uppercase tracking-widest font-semibold hover:bg-cozy-cream transition-colors" href="#">
       Read More
      </a>
</div>
<!-- Right Floating Image -->
<div class="w-full lg:w-1/3 flex justify-center lg:justify-end lg:mt-24 z-10">
<img alt="Holding candle" class="w-64 h-80 object-cover shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwDDtcWhmRnbnzh9pR3XrTUoUsIjeEKNuZwgDB-G4XCS6atkkQToUpC9K8oDks1LtYBDuPJfMu8rildvd66ieTpB6wntnolUr4KpCYreYxoziIKDx9M6oXvHWn9_ZQDhJIxjWxEpgKZBOTHhBvkHNN-yW1g2l9j5t3pq-odECNemPY506OSDe_9zlBKamWDi-pDsOMO-AG-fpCvGK2ZcjVvPiu_w2XK0nz1wJmk0OaNBC5OG9kVn9bw5BUs7-BUOKkV9AkNs_CW5E"/>
</div>
</div>
</div>
</section>
 END: BestOfCollection 
 BEGIN: TrendingProducts 
<section class="py-12 md:py-24 bg-cozy-cream">
<div class="container mx-auto px-4 lg:px-8">
<!-- Section Header -->
<div class="text-center mb-16">
<!-- Logo / Stamp Placeholder -->
<div class="w-24 h-24 mx-auto mb-6 border border-gray-300 rounded-full flex items-center justify-center relative">
<svg class="w-full h-full animate-[spin_20s_linear_infinite]" viewbox="0 0 100 100">
<path d="M 50 10 A 40 40 0 1 1 49.9 10" fill="transparent" id="curve">
</path>
<text class="text-[9px] tracking-widest fill-gray-500 uppercase font-semibold">
<textpath href="#curve">
         BIO HERBAL • BIO HERBAL • BIO HERBAL •
        </textpath>
</text>
</svg>
<div class="w-2 h-2 bg-gray-500 rounded-full absolute">
</div>
</div>
<p class="text-xs uppercase tracking-[0.2em] text-gray-500 mb-4 font-semibold">
      Trending Products
     </p>
<h2 class="font-serif text-2xl md:text-3xl text-gray-900 max-w-2xl mx-auto leading-relaxed">
      Having a place set aside for an activity you love makes it more likely you'll do it.
     </h2>
</div>
<!-- Product Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-12">
@foreach($products as $product)
<div class="group relative flex flex-col cursor-pointer">
    <div class="relative w-full aspect-[4/5] bg-surface-container-low mb-6 overflow-hidden flex items-center justify-center">
        <div class="absolute inset-x-0 bottom-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
            <button class="w-full bg-primary/95 hover:bg-primary text-on-primary py-3 font-label-uppercase text-label-uppercase uppercase tracking-widest transition-colors shadow-lg">
                Add to Cart
            </button>
        </div>
        <div class="absolute inset-0 bg-surface-container-low opacity-0 group-hover:opacity-10 transition-opacity duration-300 z-10"></div>
        <img alt="{{ $product->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" src="{{ $product->image_url }}"/>
    </div>
    <div class="flex flex-col flex-grow relative z-30 bg-sand-50">
        <div class="flex items-center gap-1 mb-2">
            <span class="material-symbols-outlined text-[14px] text-amber-400" style="font-variation-settings: 'FILL' 1;">star</span>
            <span class="material-symbols-outlined text-[14px] text-amber-400" style="font-variation-settings: 'FILL' 1;">star</span>
            <span class="material-symbols-outlined text-[14px] text-amber-400" style="font-variation-settings: 'FILL' 1;">star</span>
            <span class="material-symbols-outlined text-[14px] text-amber-400" style="font-variation-settings: 'FILL' 1;">star</span>
            <span class="material-symbols-outlined text-[14px] text-amber-400" style="font-variation-settings: 'FILL' 1;">star</span>
            <span class="text-xs text-gray-400 ml-1">(12)</span>
        </div>
        <h3 class="font-serif text-xl text-gray-900 mb-2 leading-tight pr-8">{{ $product->title }}</h3>
        <div class="mt-auto flex items-end justify-between">
            <div class="flex items-center gap-3">
                <span class="text-lg font-serif tracking-wide text-gray-900">Rs. {{ number_format($product->price) }}</span>
                @if($product->original_price)
                <span class="text-sm text-gray-400 line-through">Rs. {{ number_format($product->original_price) }}</span>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
</div>
</section>
 END: TrendingProducts 
 BEGIN: Footer 

 END: Footer 

@endsection
