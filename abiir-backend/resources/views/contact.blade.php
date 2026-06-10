@extends('layouts.app')

@section('content')

 TopNavBar 
 BEGIN: MainHeader 

 END: MainHeader 
 Main Content 
<main class="flex-grow pt-[120px] pb-16 md:pb-section-gap px-margin-mobile md:px-margin-desktop max-w-[1440px] mx-auto w-full">
<!-- Page Header -->
<div class="text-center mb-16 md:mb-section-gap max-w-2xl mx-auto px-4 md:px-0">
<h1 class="font-display-lg-mobile md:font-display-lg text-primary mb-4">
     Contact Us
    </h1>
<p class="font-body-lg text-secondary">
     We'd love to hear from you. Reach out with any questions, wholesale inquiries, or just to say hello.
    </p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter lg:gap-16 items-start">
<!-- Contact Form Area -->
<div class="lg:col-span-7 bg-surface-container-lowest p-6 md:p-12 border border-outline-variant/30">
<h2 class="font-headline-md text-primary mb-8">
      Send a Message
     </h2>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="block font-label-uppercase text-on-surface mb-2" for="name">
         Name
        </label>
<input class="w-full bg-transparent border-0 border-b border-outline focus:border-primary focus:ring-0 px-0 py-2 font-body-sm placeholder:text-outline-variant transition-colors" id="name" placeholder="Your full name" type="text"/>
</div>
<div>
<label class="block font-label-uppercase text-on-surface mb-2" for="email">
         Email
        </label>
<input class="w-full bg-transparent border-0 border-b border-outline focus:border-primary focus:ring-0 px-0 py-2 font-body-sm placeholder:text-outline-variant transition-colors" id="email" placeholder="Your email address" type="email"/>
</div>
</div>
<div>
<label class="block font-label-uppercase text-on-surface mb-2" for="subject">
        Subject
       </label>
<input class="w-full bg-transparent border-0 border-b border-outline focus:border-primary focus:ring-0 px-0 py-2 font-body-sm placeholder:text-outline-variant transition-colors" id="subject" placeholder="What is this regarding?" type="text"/>
</div>
<div>
<label class="block font-label-uppercase text-on-surface mb-2" for="message">
        Message
       </label>
<textarea class="w-full bg-transparent border-0 border-b border-outline focus:border-primary focus:ring-0 px-0 py-2 font-body-sm placeholder:text-outline-variant transition-colors resize-none" id="message" placeholder="Write your message here..." rows="5"></textarea>
</div>
<div class="pt-4">
<button class="bg-primary text-on-primary font-label-uppercase tracking-widest py-4 px-10 hover:bg-primary-container hover:text-on-primary-container transition-colors duration-300" type="submit">
        Submit Message
       </button>
</div>
</form>
</div>
<!-- Contact Info & Map Area -->
<div class="lg:col-span-5 space-y-12">
<!-- Info Block -->
<div class="bg-primary-container text-on-primary-container p-6 md:p-12 relative overflow-hidden">
<!-- Decorative subtle element -->
<div class="absolute -bottom-10 -right-10 opacity-10 pointer-events-none">
<span class="material-symbols-outlined text-[200px]" style="font-variation-settings: 'FILL' 1;">
        eco
       </span>
</div>
<h3 class="font-headline-md mb-8">
       Get in Touch
      </h3>
<div class="space-y-6">
<div class="flex items-start gap-4">
<span class="material-symbols-outlined mt-1">
         location_on
        </span>
<div>
<p class="font-label-uppercase tracking-widest mb-1 opacity-80">
          Studio
         </p>
<p class="font-body-lg">
          123 Artisan Way
          <br/>
          Portland, OR 97204
         </p>
</div>
</div>
<div class="flex items-start gap-4">
<span class="material-symbols-outlined mt-1">
         mail
        </span>
<div>
<p class="font-label-uppercase tracking-widest mb-1 opacity-80">
          Email
         </p>
<a class="font-body-lg hover:opacity-70 transition-opacity" href="mailto:hello@cozycandle.co">
          abiir1806@gmail.com
         </a>
</div>
</div>
<div class="flex items-start gap-4">
<span class="material-symbols-outlined mt-1">
         call
        </span>
<div>
<p class="font-label-uppercase tracking-widest mb-1 opacity-80">
          Phone
         </p>
<p class="font-body-lg">
          +1 (555) 123-4567
         </p>
</div>
</div>
</div>
<div class="mt-12 pt-8 border-t border-on-primary-container/20 flex gap-6">
<a class="hover:opacity-70 transition-opacity" href="#">
<span class="material-symbols-outlined">
         share
        </span>
</a>
<a class="font-label-uppercase tracking-widest hover:opacity-70 transition-opacity pt-1" href="#">
        Instagram
       </a>
<a class="font-label-uppercase tracking-widest hover:opacity-70 transition-opacity pt-1" href="#">
        Pinterest
       </a>
</div>
</div>
<!-- Map Placeholder -->
<div class="h-64 bg-surface-variant w-full border border-outline-variant/30 overflow-hidden relative group">
<img alt="A minimalist, monochromatic map of Portland, Oregon highlighting the Pearl District, designed in a muted beige and sage green color palette. The map style is clean, abstract, and editorial, lacking standard busy labels, perfect for a high-end boutique location aesthetic." class="w-full h-full object-cover grayscale opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700" data-location="Portland, OR" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbYtAgI3Ja8Niv0a8a9xevN3UHJZW2JINkbBoXqdUUeOQDxIaacCtZj2N73eilLdG0DtpzcBBJYVRRz0kTHROicRsnh0o1B5h_Lee7yDLcfigiLwr6ZN7ans-QF--duTVpRn_ggPal9olRpm2KFYugtnVuIjy1OkSDweDjJ6SKK2CohSsi1CRMOLLM6z4glRTQvBLhSAxemi083dfseykf3wUwRf5KJYOlZLN3leLQCDSnTdtzRRlk6hkUKRdhqSLyzkl1SBPNnY8"/>
</div>
</div>
</div>
</main>
 Footer 
 BEGIN: Footer 

 END: Footer 

@endsection
