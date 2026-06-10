---
name: Bio Herbal Aesthetic
colors:
  surface: '#fbf9f5'
  surface-dim: '#dbdad6'
  surface-bright: '#fbf9f5'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f5f3ef'
  surface-container: '#f0eeea'
  surface-container-high: '#eae8e4'
  surface-container-highest: '#e4e2de'
  on-surface: '#1b1c1a'
  on-surface-variant: '#424843'
  inverse-surface: '#30312e'
  inverse-on-surface: '#f2f0ec'
  outline: '#727973'
  outline-variant: '#c2c8c1'
  surface-tint: '#466553'
  primary: '#163526'
  on-primary: '#ffffff'
  primary-container: '#2d4c3b'
  on-primary-container: '#99bca6'
  inverse-primary: '#accfb8'
  secondary: '#605e56'
  on-secondary: '#ffffff'
  secondary-container: '#e6e2d7'
  on-secondary-container: '#66645c'
  tertiary: '#432a11'
  on-tertiary: '#ffffff'
  tertiary-container: '#5d4025'
  on-tertiary-container: '#d4ac8a'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#c7ebd4'
  primary-fixed-dim: '#accfb8'
  on-primary-fixed: '#012113'
  on-primary-fixed-variant: '#2e4d3c'
  secondary-fixed: '#e6e2d7'
  secondary-fixed-dim: '#cac6bc'
  on-secondary-fixed: '#1c1c15'
  on-secondary-fixed-variant: '#48473f'
  tertiary-fixed: '#ffdcc0'
  tertiary-fixed-dim: '#e8bf9b'
  on-tertiary-fixed: '#2c1602'
  on-tertiary-fixed-variant: '#5e4126'
  background: '#fbf9f5'
  on-background: '#1b1c1a'
  surface-variant: '#e4e2de'
typography:
  display-lg:
    fontFamily: EB Garamond
    fontSize: 48px
    fontWeight: '400'
    lineHeight: '1.1'
    letterSpacing: -0.02em
  display-lg-mobile:
    fontFamily: EB Garamond
    fontSize: 32px
    fontWeight: '400'
    lineHeight: '1.2'
  headline-md:
    fontFamily: EB Garamond
    fontSize: 28px
    fontWeight: '400'
    lineHeight: '1.3'
  body-lg:
    fontFamily: Hanken Grotesk
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-sm:
    fontFamily: Hanken Grotesk
    fontSize: 14px
    fontWeight: '400'
    lineHeight: '1.5'
  label-uppercase:
    fontFamily: Hanken Grotesk
    fontSize: 12px
    fontWeight: '600'
    lineHeight: '1'
    letterSpacing: 0.1em
spacing:
  base: 8px
  margin-mobile: 20px
  margin-desktop: 80px
  gutter: 24px
  section-gap: 120px
---

## Brand & Style

The visual identity of this design system is rooted in the "Cozy Bio Herbal" philosophy. It targets a discerning audience that values slow living, sustainability, and artisanal craftsmanship. The emotional response is one of tranquility, warmth, and organic luxury.

The design style is **Minimalist Editorial**. It prioritizes high-quality lifestyle photography and intentional whitespace to allow the product story to breathe. Unlike standard e-commerce, this system uses asymmetric layouts and refined serif typography to create a high-end, boutique atmosphere that feels more like a physical lookbook than a digital store.

## Colors

The palette is a sophisticated extraction of botanical and earth elements. 

- **Primary (Forest Green):** A deep, muted green used for hero sections, primary actions, and branding to ground the interface in nature.
- **Secondary (Warm Cream):** A soft, tactile off-white used as the primary background to reduce eye strain and provide a "paper-like" quality.
- **Tertiary (Cedar Brown):** A warm, woody tone reserved for subtle accents, links, or price points.
- **Neutral (Soft Stone):** Used for secondary backgrounds and subtle container separation.

Text should primarily be set in the Primary green or a near-black charcoal for legibility, avoiding pure black to maintain the soft, organic feel.

## Typography

This design system employs a classic high-contrast pairing: 
- **EB Garamond** (Serif) conveys heritage, authority, and literary elegance. It is used exclusively for headlines and display text.
- **Hanken Grotesk** (Sans-serif) provides a clean, modern counterpoint for body copy and UI elements, ensuring functional clarity.

Vertical rhythm is crucial; line heights are generous to evoke a sense of calm. All labels use increased letter spacing and uppercase styling to provide a structured, "catalog" feel.

## Layout & Spacing

The layout utilizes a **Fixed Grid** on desktop (max-width 1440px) and a fluid layout on mobile. 

- **Desktop:** 12-column grid with wide 80px margins to frame the content like a magazine spread. 
- **Mobile:** Single column with 20px margins.
- **Rhythm:** Spacing between sections is intentionally large (120px+) to prevent the "clutter" typical of e-commerce. 

Elements often break the grid slightly—such as overlapping images or offset text blocks—to mimic a hand-crafted scrapbook or editorial lookbook.

## Elevation & Depth

To maintain the natural, artisanal feel, this design system avoids heavy shadows. Depth is achieved through **Tonal Layering** and **Contextual Overlays**.

- **Surfaces:** Most surfaces are flat cream (#E8E4D9) or muted green (#2D4C3B).
- **Overlays:** When depth is required (e.g., modals or hover states), use a very soft, low-opacity tint of the Primary color rather than a gray shadow. 
- **Borders:** Use thin, low-contrast lines (0.5pt) in a slightly darker version of the background color for subtle containment without visual noise.

## Shapes

The shape language is strictly **Sharp (0)**. 

To reinforce the premium, "architectural" quality of high-end candle packaging, the UI uses crisp 90-degree corners for buttons, image containers, and input fields. Roundness is only permitted in the products themselves (circular candles, labels) to create a pleasing contrast between the rigid digital frame and the soft organic products.

## Components

- **Buttons:** Rectangular with 0px radius. Primary buttons are Forest Green with Cream text. Ghost buttons use a 1px border. All text inside buttons is uppercase with tracking.
- **Cards:** Product cards are borderless. The image occupies the full width of the card, with product details (Title, Price) centered below in a clean, typographic stack.
- **Inputs:** Minimalist bottom-border only or thin 1px full-stroke. Use Hanken Grotesk for placeholder text.
- **Chips/Labels:** Small, uppercase tags for "New In" or "Organic" using a thin border or a subtle fill of the Tertiary color.
- **Special Elements:** Include "Seal of Quality" circular badges that rotate slowly or botanical line-art illustrations as background decorations to reinforce the bio-herbal theme.
