import os
from bs4 import BeautifulSoup
import glob

# Paths
input_dir = r"c:\Users\ankit\OneDrive\Desktop\Upside Down Project\Abiir\pages"
output_dir = r"c:\Users\ankit\OneDrive\Desktop\Upside Down Project\Abiir\extracted_pages"

if not os.path.exists(output_dir):
    os.makedirs(output_dir)

# Extract main content from each HTML file
for file_path in glob.glob(os.path.join(input_dir, "*.html")):
    filename = os.path.basename(file_path)
    print(f"Processing {filename}...")
    
    with open(file_path, "r", encoding="utf-8") as f:
        content = f.read()
        
    soup = BeautifulSoup(content, "html.parser")
    
    # Try to find the main content area
    main_tag = soup.find("main", id="MainContent")
    if not main_tag:
        main_tag = soup.find("main")
        
    if main_tag:
        # Remove empty scripts and stylistic elements from within main
        for tag in main_tag.find_all(['script', 'style', 'noscript', 'iframe']):
            tag.decompose()
            
        # Get the inner HTML of the main tag
        clean_html = main_tag.prettify()
        
        with open(os.path.join(output_dir, filename), "w", encoding="utf-8") as f:
            f.write(clean_html)
        print(f"  -> Extracted {len(clean_html)} characters.")
    else:
        print(f"  -> Could not find <main> tag in {filename}.")
