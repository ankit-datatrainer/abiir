import requests, json
from bs4 import BeautifulSoup

def scrape_products():
    r = requests.get('https://abiir.in/')
    soup = BeautifulSoup(r.text, 'html.parser')
    products = []
    
    # Try different common Shopify product card selectors
    cards = soup.select('.card-wrapper, .product-card, .grid__item')
    
    for card in cards:
        # Title
        title_elem = card.select_one('.card__heading, .full-unstyled-link, .product-title')
        if not title_elem:
            continue
        title = title_elem.text.strip()
        
        # Price
        price_elem = card.select_one('.price-item--regular, .price')
        price = price_elem.text.strip() if price_elem else ''
        
        # Image
        img_elem = card.select_one('img')
        img = img_elem['src'] if img_elem and img_elem.has_attr('src') else ''
        if img and img.startswith('//'):
            img = 'https:' + img
            
        if title and price and img and title not in [p['title'] for p in products]:
            products.append({
                'title': title,
                'price': price,
                'image': img
            })
            
        if len(products) == 4:
            break
            
    with open('scraped_products.json', 'w') as f:
        json.dump(products, f, indent=2)
    print(json.dumps(products, indent=2))

if __name__ == '__main__':
    scrape_products()
