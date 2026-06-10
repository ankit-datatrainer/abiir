@extends('layouts.app')

@section('content')

 Top Navigation Bar 
 BEGIN: MainHeader 

 END: MainHeader 
 Main Content Canvas 
<main class="w-full max-w-[1440px] mx-auto">
<!-- Hero Section: Narrative Intro -->
<section class="px-margin-mobile md:px-margin-desktop py-16 md:py-section-gap relative overflow-hidden">
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
<!-- Text Content -->
<div class="md:col-span-5 md:col-start-2 z-10 flex flex-col items-start gap-8">
<div class="flex flex-col gap-4">
<span class="font-label-uppercase text-label-uppercase text-secondary tracking-widest">
        Our Philosophy
       </span>
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary">
        The Bio Herbal Difference.
       </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-md mt-4">
        About Us\n\nOur journey began with a simple vision: to craft candles that inspire, uplift, and evoke a sense of tranquility.\n\nAbout Us\n\nAt Abiir, we don’t just sell products—we create experiences. Rooted in elegance, authenticity, and craftsmanship, Abiir brings you a world of fragrances and décor that transform everyday living into moments of luxury.\n\nFrom scented candles, diffusers, and aroma oils to handcrafted pooja essentials, incense, and home décor, every creation at Abiir is thoughtfully designed to connect with your emotions and surroundings. We offer more than variety—we offer quality that resonates with your lifestyle and enhances your personal spaces.\n\nOur philosophy is simple: luxury should be soulful and accessible. Every product, whether it’s a candle that lights up your evenings, a diffuser that elevates your mood, or handcrafted décor that adds warmth to your home, is made with care, precision, and a passion for excellence.\n\nWhat Makes Abiir Different?\n\nCraftsmanship with Purpose – Each product is meticulously created, blending design and fragrance into timeless pieces that are both functional and artistic.\n\nInspired by Culture &amp; Modernity – Our collections are influenced by India’s heritage while embracing contemporary aesthetics, making them perfect for every home and personality.\n\nBeyond Products, A Brand Experience – We don’t just offer candles, oils, and décor—we deliver a sense of belonging, serenity, and charm that stays with you.\n\nWhether it’s the calming glow of our candles, the refreshing mist of our diffusers, the soulful fragrance of our incense, or the artistry of our handicrafts, Abiir is a celebration of refined living.\n\nAbiir is not just about what you buy—it’s about what you feel.\n\nA brand that connects, resonates, and truly becomes a part of your world.
       </p>
</div>
<a class="inline-block bg-primary text-on-primary font-label-uppercase text-label-uppercase tracking-widest px-8 py-4 hover:bg-primary-container transition-colors duration-300" href="#process">
       Discover Our Process
      </a>
</div>
<!-- Hero Image Asymmetric -->
<div class="md:col-span-5 md:col-start-8 mt-12 md:mt-0 relative">
<div class="aspect-[3/4] w-full relative overflow-hidden image-overlay shadow-lg">
<img alt="Artisanal pouring of natural soy wax into amber glass jars in a sunlit studio, embodying the bio herbal philosophy of Cozy Candle Co." class="w-full h-full object-cover" data-alt="A close-up, high-quality lifestyle photograph showing the artisanal process of making candles. Golden hour sunlight streams into a rustic studio setting, illuminating an amber glass jar. A hand is pouring pure, melted soy wax into the jar. Surrounding the jar are scattered dried herbs and a wooden wick. The overall mood is warm, organic, and luxurious, emphasizing natural ingredients and slow craftsmanship, fitting a minimalist editorial aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgv6WRbexxiUmIp-iJBjOxEsS0vUrQkX1vWJvYHDK-qTif9iiKmKg31iP6OnL1vMiuKE_DzTvU_j9dW0entyffH_Y6-8FC_j2_Qzt_D3k_CFrYgGt3Jx7k9wTzi-TlCkqUQeMZzjKiq1aPzFpRAGVBIcO_k3cvJMfYtldLobQt8Z-FFWJOBgNDBegRNCZb32j4iyrEM_YP-nMeCuBhoOzRUxQUku-ZZo2R5hKX82KI_AyXHC9wcX86pXrxslSQcDTJ_Lkd-Duf4oI"/>
</div>
<!-- Decorative Badge -->
<div class="absolute -bottom-10 -left-10 w-32 h-32 bg-surface-container-lowest rounded-full flex items-center justify-center shadow-md animate-spin-slow z-20">
<svg class="w-24 h-24 text-primary" viewbox="0 0 100 100">
<defs>
<path d="M 50, 50 m -35, 0 a 35,35 0 1,1 70,0 a 35,35 0 1,1 -70,0" id="circlePath">
</path>
</defs>
<text class="font-label-uppercase text-[10px] tracking-widest fill-current">
<textpath href="#circlePath" startoffset="0%">
          100% NATURAL • BIO HERBAL • ARTISANAL •
         </textpath>
</text>
<circle cx="50" cy="50" fill="currentColor" r="4">
</circle>
</svg>
</div>
</div>
</div>
</section>
<!-- The Process (Bento Grid Style) -->
<section class="bg-primary-container text-on-primary-fixed py-16 md:py-section-gap px-margin-mobile md:px-margin-desktop" id="process">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
<div class="max-w-2xl">
<span class="font-label-uppercase text-label-uppercase text-inverse-primary tracking-widest block mb-4">
       Craftsmanship
      </span>
<h2 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-primary">
       Rooted in Nature,
       <br/>
       Hand-poured with Care.
      </h2>
</div>
<p class="font-body-lg text-body-lg text-on-primary-fixed-variant max-w-md">
      Our process is deliberately unhurried. We source raw, unrefined ingredients to ensure each scent tells a true botanical story.
     </p>
</div>
<div class="flex flex-col md:grid md:grid-cols-12 gap-6 md:gap-gutter md:auto-rows-[300px]">
<!-- Grid Item 1 (Wide) -->
<div class="md:col-span-8 md:row-span-2 relative overflow-hidden group bg-surface-tint min-h-[300px] md:min-h-0">
<img alt="Dried herbs and botanical elements used in Cozy Candle Co products." class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 mix-blend-luminosity" data-alt="A flat lay photograph on a textured stone surface featuring an array of dried botanicals, herbs, and spices used for candle making. Elements include lavender sprigs, dried citrus slices, eucalyptus leaves, and cinnamon sticks. The lighting is soft and diffused, creating subtle shadows that enhance the texture. The color palette is earthy and muted, reflecting an organic, minimalist editorial style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBacaS6bPT5XcCXE76Z_48LMbA7ScfMEO0B30XVrc7_USCMndZx4yz5TiCeeZ8Cipdj2yD4CTA-6Mf2G5zsfFNBwTcfCfVrfhbe1zlGSSKOh73jzsgqZE7-yj8s1Ah-PsJwZhGWUU57CeqdeZvgxeW_u4vX6lZ3Y_Rgq9hIxLb4gty9W5ik0wqD24CAWEql-MB6o0JgwQLZPKyol0oBeli7zWE4vhMW7j957Xpzj4SXSnuCVc6fCZX6EsFFKRlvbFPDxsOb1RJ38rU"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent">
</div>
<div class="absolute bottom-0 left-0 p-8">
<h3 class="font-headline-md text-headline-md text-on-primary mb-2">
        Botanical Sourcing
       </h3>
<p class="font-body-sm text-body-sm text-inverse-primary max-w-md">
        We partner with independent herbals gardens to harvest ingredients at their peak potency.
       </p>
</div>
</div>
<!-- Grid Item 2 (Square) -->
<div class="md:col-span-4 bg-surface-container-low p-8 flex flex-col justify-center text-on-surface min-h-[250px] md:min-h-0">
<span class="material-symbols-outlined text-4xl text-tertiary mb-6">
       eco
      </span>
<h3 class="font-headline-md text-headline-md mb-2">
       Vegan Wax Blend
      </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
       A proprietary blend of coconut and soy wax ensures a clean, sustainable burn without toxins.
      </p>
</div>
<!-- Grid Item 3 (Square Image) -->
<div class="md:col-span-4 relative overflow-hidden group bg-surface-dim min-h-[300px] md:min-h-0">
<img alt="Wooden wicks and essential oils." class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-90" data-alt="A close-up shot of a wooden candle wick resting next to small amber glass dropper bottles filled with essential oils. The setting is a clean, minimalist wooden workbench. Soft, natural light highlights the grain of the wood and the rich amber color of the bottles. The atmosphere is quiet, artisanal, and focused on natural ingredients." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCk98TH4Rkk9KYH9ESiIUTaRN_ECvEDLeQw0R9wz7wXIehneTOGDeelh84ma_cz67SmcJF7kb9JObJ_fYStChKWUmYrZymc9kOYPvI5pmdj4JE1RsjJoZXVcaoOsJBwfBZ86SznNzbCiqZq2yVACGVN7qyXVvCG1hV63o_QizquybBPidtEJIM05eHj8HTavGEtiaFCDiiiGHHOTmJC7GELoqVmlTWbae3kRxxKQBPkqFDFRUiDLW9w-dwYLufuLghimAfIk6cp_bQ"/>
<div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-300">
</div>
</div>
</div>
</section>
<!-- Custom Services Section (Asymmetric Editorial) -->
<section class="py-16 md:py-section-gap px-margin-mobile md:px-margin-desktop bg-surface">
<div class="text-center mb-16 md:mb-24">
<span class="font-label-uppercase text-label-uppercase text-secondary tracking-widest block mb-4">
      Tailored Experiences
     </span>
<h2 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary">
      Custom Services
     </h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-y-16 md:gap-gutter items-center">
<!-- Service 1: Event Favors -->
<div class="md:col-span-5 md:col-start-2 order-2 md:order-1">
<h3 class="font-headline-md text-headline-md text-primary mb-4">
       Bespoke Event Favors
      </h3>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-8">
       Elevate your weddings, retreats, and corporate gatherings with custom-poured candles. We collaborate with you to select the vessel, design the label, and blend a scent that captures the essence of your event.
      </p>
<ul class="space-y-4 font-body-sm text-body-sm text-secondary mb-8">
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-tertiary" style="font-size: 18px;">
         check
        </span>
        Custom vessel selection
       </li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-tertiary" style="font-size: 18px;">
         check
        </span>
        Personalized typography &amp; labeling
       </li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-tertiary" style="font-size: 18px;">
         check
        </span>
        Minimum order: 50 units
       </li>
</ul>
<a class="inline-block border border-outline px-8 py-4 font-label-uppercase text-label-uppercase tracking-widest text-primary hover:bg-primary hover:text-on-primary transition-colors duration-300" href="#">
       Inquire Now
      </a>
</div>
<div class="md:col-span-5 md:col-start-8 order-1 md:order-2">
<div class="aspect-square bg-surface-container-low overflow-hidden image-overlay">
<img alt="Collection of beautifully packaged custom mini candles for a wedding." class="w-full h-full object-cover" data-alt="A curated collection of small, elegantly packaged candles arranged neatly on a light linen cloth. Each candle features a minimalist, custom label with elegant serif typography, typical of high-end wedding favors. Soft, diffused daylight casts gentle shadows, creating a romantic and sophisticated editorial mood. The color palette revolves around creams, soft whites, and natural textures." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwZbqqEmfs-D6G8Ocv4wUbxuiJ-Zqp_tzoddOC2mijpfKAhm10eklnkgiF7WpE-uUgZ6tFvLVoPygNpAgx7eNLa4NyME5Wh76J4MYGoptcOT1yZ8Vq8jrK-BPeNGny8ly0aQbhhRJ5vjtGQIEN20whRVw809jUqw5MuqcSCpUd7ygDEM-nDsW3b7uxwhb-6WOlENybXS_7EUx8_31EvVuUpL4NzbsmKiRrb6Wm5SJpxoexqSHhKnSyFsn9pSvmPRIYMusnIw5AimI"/>
</div>
</div>
<!-- Spacer -->
<div class="md:col-span-12 h-12 hidden md:block">
</div>
<!-- Service 2: Custom Scents -->
<div class="md:col-span-6 md:col-start-1 order-3">
<div class="aspect-[4/3] bg-surface-container-low overflow-hidden image-overlay relative">
<img alt="Blending custom fragrances in the studio." class="w-full h-full object-cover" data-alt="A focused shot of hands delicately mixing essential oils in a small glass beaker on a wooden table. The scene implies the creation of a custom fragrance blend. Surrounding the beaker are various natural elements like dried rose petals, a notebook with handwritten notes, and dark amber apothecary bottles. The lighting is moody and intimate, highlighting the artisanal and bespoke nature of the service." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVtUHE6EyCV_F3aL7cNO0NKAEaHrUqJN5R9hMmRfVcz-1adYZcFywOc-gG8hFPnEe_R7XXujoRg7urzKypvGynyZFEg3105ifJQ9N4jvlFB8nxq3XA1rsKQlsGsq4Qqf63yXYYPyn8HFjuor8zTCMiIydPKAMD8sxAHNSe6ZcGyElXDBBpoRuWvivDTDQ62_oyP7b9sfpWii2sn4p-7wbHvFzNeR3E667VKJEKwUph7d38SFztzTzp-2J_OOzY4vNIjiMvntuTOo4"/>
</div>
</div>
<div class="md:col-span-4 md:col-start-8 order-4">
<h3 class="font-headline-md text-headline-md text-primary mb-4">
       Signature Scent Design
      </h3>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-8">
       Work directly with our master blenders to develop a signature fragrance for your boutique, hotel, or personal sanctuary. A truly olfactory representation of your brand's identity.
      </p>
<a class="inline-flex items-center gap-2 font-label-uppercase text-label-uppercase tracking-widest text-primary hover:text-tertiary transition-colors duration-300 border-b border-primary hover:border-tertiary pb-1" href="#">
       Book a Consultation
       <span class="material-symbols-outlined" style="font-size: 16px;">
        arrow_forward
       </span>
</a>
</div>
</div>
</section>
</main>
 Footer Component 
 BEGIN: Footer 

 END: Footer 
 Minimal script for nav state if scrolled 
<script>
   document.addEventListener('scroll', () => {
            const nav = document.getElementById('main-nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-sm', 'bg-surface/95', 'backdrop-blur-sm');
                nav.classList.remove('bg-surface');
            } else {
                nav.classList.remove('shadow-sm', 'bg-surface/95', 'backdrop-blur-sm');
                nav.classList.add('bg-surface');
            }
        });
  </script>

@endsection
