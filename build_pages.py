import os
import shutil
import re
import json
from bs4 import BeautifulSoup

base_dir = r"c:\Users\ankit\OneDrive\Desktop\Upside Down Project\Abiir"
template_dir = os.path.join(base_dir, "cozy_candle_store")
extracted_dir = os.path.join(base_dir, "extracted_pages")
output_dir = os.path.join(base_dir, "website_build")

# --- Define Unified Components based on home_page.html ---
head_content = """
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link rel="icon" href="favicon.svg" type="image/svg+xml">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Inter:wght@100..900&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
tailwind.config = {
  theme: {
    extend: {
      colors: {
        'cozy-green': '#375243',
        'cozy-cream': '#efece7',
        'cozy-beige': '#f5f4ef',
        'cozy-text': '#222222',
        'cozy-muted': '#666666',
        
        /* Aliases for other templates to adapt to home_page style */
        "primary": "#375243",
        "primary-container": "#375243",
        "on-primary": "#ffffff",
        "on-primary-container": "#efece7",
        "secondary": "#375243",
        "secondary-container": "#f5f4ef",
        "on-secondary": "#ffffff",
        "tertiary": "#666666",
        "surface": "#efece7",
        "background": "#efece7",
        "on-surface": "#222222",
        "on-surface-variant": "#666666",
        "on-background": "#222222",
        "surface-container": "#f5f4ef",
        "outline": "#d1d5db",
        "outline-variant": "#e5e7eb"
      },
      fontFamily: {
        serif: ['"EB Garamond"', 'serif'],
        sans: ['Inter', 'sans-serif'],
        
        /* Aliases for other templates */
        "display-lg": ['"EB Garamond"', 'serif'],
        "headline-md": ['"EB Garamond"', 'serif'],
        "body-lg": ['Inter', 'sans-serif'],
        "body-sm": ['Inter', 'sans-serif'],
        "label-uppercase": ['Inter', 'sans-serif']
      }
    }
  }
}
</script>
<style>
    body { background-color: theme('colors.cozy-cream'); color: theme('colors.cozy-text'); }
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24; }
</style>
"""

header_template = """
  <!-- BEGIN: MainHeader -->
  <header class="bg-cozy-cream sticky top-0 z-50 border-b border-gray-200">
  <div class="container mx-auto px-4 lg:px-8 py-4 flex items-center justify-between">
  <!-- Mobile Menu Button -->
  <button class="lg:hidden text-gray-800 focus:outline-none" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
  </button>
<!-- Logo & Navigation -->
<div class="flex items-center space-x-8">
<a class="text-2xl font-serif font-bold tracking-tight text-gray-900 flex items-center" href="index.html">
<span class="mr-2 lg:hidden">
<svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</span>
          <div class="w-8 h-8 rounded-full bg-cozy-green text-white flex items-center justify-center mr-2 font-serif font-bold text-lg">A</div>
          Abiir
        </a>
<nav class="hidden lg:flex space-x-6 text-xs uppercase tracking-widest font-semibold text-gray-700">
<a class="hover:text-cozy-green transition-colors {home_active}" href="index.html">Home</a>
<a class="hover:text-cozy-green transition-colors {shop_active}" href="shop.html">Shop</a>
<a class="hover:text-cozy-green transition-colors {about_active}" href="about.html">About</a>
<a class="hover:text-cozy-green transition-colors {contact_active}" href="contact.html">Contact</a>
</nav>
</div>
<!-- Utilities -->
<div class="flex items-center space-x-4 lg:space-x-6 text-xs font-semibold text-gray-700">
<div class="hidden md:flex items-center space-x-4 border-r border-gray-300 pr-4">
<a class="hover:text-cozy-green transition-colors flex items-center" href="#">
<svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            My Account
</a>
</div>
<div class="flex items-center space-x-3 lg:space-x-4">
<button class="hover:text-cozy-green transition-colors"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></button>
<button class="hover:text-cozy-green transition-colors relative">
<svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
  <span class="absolute -top-1 -right-2 bg-cozy-green text-white rounded-full w-4 h-4 flex items-center justify-center text-[10px]">0</span>
  </button>
  </div>
  </div>
  </div>
  
  <!-- Mobile Dropdown Menu -->
  <div id="mobile-menu" class="hidden lg:hidden w-full bg-cozy-cream border-t border-gray-200 absolute left-0 top-full">
    <nav class="flex flex-col space-y-4 px-6 py-6 text-sm font-semibold text-gray-700 uppercase tracking-widest shadow-lg">
      <a class="hover:text-cozy-green transition-colors {home_active}" href="index.html">Home</a>
      <a class="hover:text-cozy-green transition-colors {shop_active}" href="shop.html">Shop</a>
      <a class="hover:text-cozy-green transition-colors {about_active}" href="about.html">About</a>
      <a class="hover:text-cozy-green transition-colors {contact_active}" href="contact.html">Contact</a>
      <a class="hover:text-cozy-green transition-colors border-t border-gray-200 pt-4 mt-2" href="#">My Account</a>
    </nav>
  </div>
  </header>
  <!-- END: MainHeader -->
  """

footer_template = """
<!-- BEGIN: Footer -->
<footer class="bg-cozy-beige border-t border-gray-200 mt-16">
  <div class="container mx-auto px-4 lg:px-8 py-12 lg:py-16">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      
      <!-- Brand & Newsletter -->
      <div class="col-span-1 md:col-span-2">
        <h2 class="text-2xl font-serif font-bold text-gray-900 mb-4">Abiir</h2>
        <p class="text-gray-600 mb-6 text-sm max-w-sm">
          Premium aroma diffusers, scented candles, and essential oils to elevate your home.
        </p>
        <div class="flex max-w-md">
          <input type="email" placeholder="Your email address" class="w-full bg-white border border-gray-300 px-4 py-2 text-sm focus:outline-none focus:border-cozy-green">
          <button class="bg-cozy-green text-white px-6 py-2 text-xs uppercase tracking-widest font-semibold hover:bg-gray-800 transition-colors whitespace-nowrap">Subscribe</button>
        </div>
      </div>

      <!-- Links -->
      <div class="col-span-1">
        <h3 class="text-xs uppercase tracking-widest font-semibold text-gray-900 mb-4">Shop</h3>
        <ul class="space-y-3 text-sm text-gray-600">
          <li><a href="shop.html" class="hover:text-cozy-green transition-colors">All Products</a></li>
          <li><a href="about.html" class="hover:text-cozy-green transition-colors">About Us</a></li>
          <li><a href="contact.html" class="hover:text-cozy-green transition-colors">Contact</a></li>
          <li><a href="faq.html" class="hover:text-cozy-green transition-colors">FAQ</a></li>
          <li><a href="order-tracking.html" class="hover:text-cozy-green transition-colors">Order Tracking</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div class="col-span-1">
        <h3 class="text-xs uppercase tracking-widest font-semibold text-gray-900 mb-4">Support</h3>
        <ul class="space-y-3 text-sm text-gray-600">
          <li><a href="privacy-policy.html" class="hover:text-cozy-green transition-colors">Privacy Policy</a></li>
          <li><a href="terms-of-services.html" class="hover:text-cozy-green transition-colors">Terms of Service</a></li>
          <li><a href="refund-policy.html" class="hover:text-cozy-green transition-colors">Refund Policy</a></li>
          <li><a href="return-policy.html" class="hover:text-cozy-green transition-colors">Return Policy</a></li>
        </ul>
      </div>
      
    </div>
    
    <div class="border-t border-gray-200 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
      <p>&copy; 2026 Abiir. All rights reserved.</p>
      <div class="flex space-x-4 mt-4 md:mt-0">
        <a href="#" class="hover:text-cozy-green">Instagram</a>
        <a href="#" class="hover:text-cozy-green">Facebook</a>
        <a href="#" class="hover:text-cozy-green">Pinterest</a>
      </div>
    </div>
  </div>
</footer>
<!-- END: Footer -->
"""

generic_page_template = """<!DOCTYPE html>
<html lang="en">
<head>
<title>{title} | Abiir</title>
{head}
</head>
<body class="font-sans antialiased text-sm bg-cozy-cream text-cozy-text min-h-screen flex flex-col">
{header}
<main class="flex-grow w-full max-w-[1000px] mx-auto px-4 lg:px-8 py-16">
    <div class="prose prose-stone lg:prose-xl max-w-none">
        <h1 class="font-serif text-4xl text-gray-900 mb-8">{title}</h1>
        <div class="space-y-6">
            {content}
        </div>
    </div>
</main>
{footer}
</body>
</html>
"""

def get_header(active_page="home"):
    return header_template.format(
        home_active="text-cozy-green border-b-2 border-cozy-green pb-1" if active_page=="home" else "",
        shop_active="text-cozy-green border-b-2 border-cozy-green pb-1" if active_page=="shop" else "",
        about_active="text-cozy-green border-b-2 border-cozy-green pb-1" if active_page=="about" else "",
        contact_active="text-cozy-green border-b-2 border-cozy-green pb-1" if active_page=="contact" else "",
    )

def build_template_page(template_file, output_file, active_page="home"):
    with open(os.path.join(template_dir, template_file), "r", encoding="utf-8") as f:
        soup = BeautifulSoup(f.read(), "html.parser")
    
    # Replace Head content (except title)
    title_tag = soup.find("title")
    if title_tag:
        title_tag.string = title_tag.string.replace("Cozy Candle Co.", "Abiir")
        
    for tag in soup.head.find_all(True):
        if tag.name != "title":
            tag.decompose()
            
    soup.head.append(BeautifulSoup(head_content, "html.parser"))
    
    # Replace Header (only target the actual main navigation bar)
    main_header = soup.find(lambda tag: tag.name in ['header', 'nav'] and 
                            ('sticky' in tag.get('class', []) or 
                             'fixed' in tag.get('class', []) or 
                             tag.get('id') == 'navbar' or
                             'z-50' in tag.get('class', [])))
    if main_header:
        main_header.replace_with(BeautifulSoup(get_header(active_page), "html.parser"))
        
    # Replace or Add Footer
    footer = soup.find("footer")
    if footer:
        footer.replace_with(BeautifulSoup(footer_template, "html.parser"))
    else:
        # Append to body if missing
        if soup.body:
            soup.body.append(BeautifulSoup(footer_template, "html.parser"))
        
    # Inject Custom Data for About and Contact Pages
    if output_file == "about.html":
        old_about_path = os.path.join(extracted_dir, "about.html")
        if os.path.exists(old_about_path):
            with open(old_about_path, "r", encoding="utf-8") as f:
                old_soup = BeautifulSoup(f.read(), "html.parser")
                text = old_soup.get_text(separator='\\n\\n', strip=True)
                p_tag = soup.find(string=re.compile("We believe in the restorative power of nature"))
                if p_tag:
                    p_tag.replace_with(text)

    if output_file == "contact.html":
        email_tag = soup.find(string=re.compile("hello@cozycandle.co"))
        if email_tag:
            email_tag.replace_with("abiir1806@gmail.com")
        
    # Update text references to Cozy Candle Co.
    for text_node in soup.find_all(string=re.compile(r"Cozy Candle Co\.")):
        new_text = text_node.replace("Cozy Candle Co.", "Abiir")
        text_node.replace_with(new_text)

    # Convert generic body classes to make it sticky footer compatible
    if soup.body:
        classes = soup.body.get("class", [])
        if "flex" not in classes:
            classes.extend(["flex", "flex-col", "min-h-screen"])
            soup.body["class"] = classes

    # Fix hero text overlapping issue (Issue 1)
    # The text container needs 'relative' to establish a z-index context against the absolute image
    if output_file == "index.html":
        z10_div = soup.find("div", class_=lambda x: x and "z-10" in x)
        if z10_div:
            cls = z10_div.get("class", [])
            if "relative" not in cls:
                cls.append("relative")
                z10_div["class"] = cls

    # --- Product Injection (from scraped_products.json) ---
    if output_file in ["index.html", "shop.html"]:
        try:
            with open("scraped_products.json", "r", encoding="utf-8") as pf:
                products = json.load(pf)
                
            def clean_price(raw_price):
                prices = re.findall(r'Rs\.\s*[\d,]+\.\d+', raw_price)
                return prices[-1] if prices else ""
                
            products_html = ""
            for p in products:
                title = p.get('title', '')
                price = clean_price(p.get('price', ''))
                img = p.get('image', '')
                products_html += f'''
<div class="group relative flex flex-col cursor-pointer">
<div class="relative w-full aspect-[4/5] bg-surface-container-low mb-6 overflow-hidden flex items-center justify-center">
<div class="absolute inset-x-0 bottom-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
<button class="w-full bg-primary/95 hover:bg-primary text-on-primary py-3 font-label-uppercase text-label-uppercase uppercase tracking-widest transition-colors shadow-lg">
                                    Add to Cart
                                </button>
</div>
<img alt="{title}" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-in-out" src="{img}"/>
<div class="absolute inset-0 bg-primary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
</div>
<div class="text-center">
<div class="flex justify-center text-tertiary-fixed-dim mb-2">
<span class="material-symbols-outlined text-[16px]" data-weight="fill">star</span>
<span class="material-symbols-outlined text-[16px]" data-weight="fill">star</span>
<span class="material-symbols-outlined text-[16px]" data-weight="fill">star</span>
<span class="material-symbols-outlined text-[16px]" data-weight="fill">star</span>
<span class="material-symbols-outlined text-[16px]" data-weight="fill">star</span>
</div>
<h3 class="font-headline-md text-[22px] text-primary mb-1">{title}</h3>
<p class="font-body-lg text-body-lg text-primary">{price}</p>
</div>
</div>
'''
            # Find grids
            grids = soup.find_all("div", class_=lambda x: x and ("lg:grid-cols-4" in x or "xl:grid-cols-3" in x) and "grid" in x)
            for grid in grids:
                grid.clear()
                grid.append(BeautifulSoup(products_html, "html.parser"))
        except Exception as e:
            print("Error injecting products:", e)

    with open(os.path.join(output_dir, output_file), "w", encoding="utf-8") as f:
        f.write(soup.prettify())

def build_policy_page(extracted_file, output_file, title):
    content_path = os.path.join(extracted_dir, extracted_file)
    content_html = ""
    if os.path.exists(content_path):
        with open(content_path, "r", encoding="utf-8") as f:
            content = f.read()
            
        content_soup = BeautifulSoup(content, "html.parser")
        text_lines = content_soup.get_text(separator='\\n', strip=True).split('\\n')
        
        html_parts = []
        for line in text_lines:
            line = line.strip()
            if not line or line.lower() == title.lower() or line == "FAQ":
                continue
            if line.isupper() or line.endswith('?') or len(line) < 60:
                html_parts.append(f'<h2 class="font-serif text-2xl text-gray-900 mt-8 mb-4">{{line}}</h2>')
            else:
                html_parts.append(f'<p class="text-gray-600 leading-relaxed">{{line}}</p>')
        
        content_html = "".join(html_parts)
    else:
        content_html = "<p>Content coming soon.</p>"

    html = generic_page_template.format(
        title=title,
        head=head_content,
        header=get_header(""),
        content=content_html,
        footer=footer_template
    )
    with open(os.path.join(output_dir, output_file), "w", encoding="utf-8") as f:
        f.write(html)


print("Building template pages...")
build_template_page("home_page.html", "index.html", "home")
build_template_page("shop.html", "shop.html", "shop")
build_template_page("product_detail.html", "product.html", "shop")
build_template_page("about_us.html", "about.html", "about")
build_template_page("contact_us.html", "contact.html", "contact")

print("Building policy and info pages...")
build_policy_page("faq.html", "faq.html", "FAQ")
build_policy_page("privacy-policy.html", "privacy-policy.html", "Privacy Policy")
build_policy_page("refund-policy.html", "refund-policy.html", "Refund Policy")
build_policy_page("return-policy.html", "return-policy.html", "Return Policy")
build_policy_page("terms-of-services.html", "terms-of-services.html", "Terms of Service")
build_policy_page("order-tracking.html", "order-tracking.html", "Order Tracking")

print("Done building website.")
