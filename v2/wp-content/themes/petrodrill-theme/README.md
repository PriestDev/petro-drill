# Petrodrill Modern WordPress Theme

A clean, modern WordPress theme for Petrodrill Global, built from scratch with contemporary design principles.

## Features

✨ **Modern Design**
- Responsive layout that works on desktop, tablet, and mobile
- Clean, professional color scheme with gradients and shadows
- Smooth animations and transitions
- Accessible HTML5 semantic markup

🎨 **Built-in Bootstrap Framework**
- Bootstrap 3.4.1 CSS included for responsive grid system
- Mobile-first approach with responsive utilities
- Pre-built UI components ready to use

📱 **Fully Responsive**
- Mobile-first design approach
- Breakpoints optimized for all devices
- Touch-friendly navigation and buttons

⚡ **Performance**
- Clean, efficient code
- Optimized CSS and JavaScript
- Fast loading times
- SEO-friendly structure

## Theme Files Included

### Copied Assets
This theme includes the best assets from your original Petrodrill template:

**CSS Files:**
- `bootstrap.min.css` - Responsive grid and components
- `bootstrap-responsive.min.css` - Mobile responsive utilities
- `template.css` - Original template styles (60KB+)
- `mobile-menu.css` - Mobile menu styling
- `k2.css` - Blog/content styling
- `style.css` - Modern theme overrides (loaded last)

**JavaScript Files:**
- `jquery.inview.min.js` - Scroll animation trigger
- `helix.core.js` - Menu and navigation functionality
- `template-main.js` - Original template JavaScript
- `main.js` - Modern theme enhancements

**Images:**
- 50+ images from your project (heroes, clients, testimonials, etc.)
- Demo images for slider, testimonials, and clients
- Organized in subfolders matching original structure

## Theme Structure

```
petrodrill-theme/
├── style.css                    # Main stylesheet with all theme styles
├── functions.php                # Theme setup, menus, scripts
├── header.php                   # Header, navigation, opening HTML
├── footer.php                   # Footer, closing HTML, widgets
├── home.php                     # Homepage with hero, services, posts
├── index.php                    # Blog listing page
├── page.php                     # Single page template (optional)
├── single.php                   # Single post template (optional)
├── README.md                    # This file
│
└── assets/                      # All theme assets (CSS, JS, images)
    ├── css/                     # Additional CSS files
    │   ├── custom.css           # Your custom styles (optional)
    │   └── responsive.css       # Mobile/responsive overrides (optional)
    │
    ├── js/                      # JavaScript files
    │   ├── main.js              # Main theme JavaScript
    │   └── custom.js            # Your custom scripts (optional)
    │
    └── images/                  # Images used in the theme
        ├── logo.png             # Theme logo
        ├── favicon.ico          # Favicon
        └── [other images]       # Hero images, backgrounds, etc.
```

## Installation

1. **Activate** the theme in WordPress Admin → Appearance → Themes
2. **Set up menus** in WordPress Admin → Appearance → Menus
   - Create a "Primary Menu" for main navigation
   - Create a "Social Menu" for social links (optional)
3. **Hard refresh** your browser (Ctrl+Shift+R) to see the new styles

## Assets Organization

All copied assets are in the `assets/` folder:

### CSS Files - How They're Loaded

The `functions.php` file automatically loads CSS in this order:
1. **bootstrap.min.css** - Bootstrap 3.4.1 grid and components
2. **bootstrap-responsive.min.css** - Mobile responsive overrides
3. **template.css** - Original Petrodrill template styles
4. **mobile-menu.css** - Mobile menu styles
5. **k2.css** - Blog/content item styling
6. **style.css** - Modern theme overrides (loaded last, highest priority)

This means your modern `style.css` will override any Bootstrap or template styles when needed!

### JavaScript Files - How They're Loaded

The `functions.php` loads JavaScript in this order:
1. **jQuery** - WordPress built-in jQuery
2. **jquery.inview.min.js** - Detects when elements scroll into view (used for animations)
3. **helix.core.js** - Menu, navigation, and interactive functionality
4. **template-main.js** - Original template JavaScript functionality
5. **main.js** - Modern theme enhancements and custom code

### Images

All 50+ project images are ready to use in `assets/images/`:

```
assets/images/
├── [40+ product/hero images]
├── demo/
│   ├── slide/           (slider images: s1.jpg, oilb.jpg, home-tab.jpg)
│   ├── clients/         (client logos: baywaterlogo.jpg, Geoexploration.png, etc.)
│   └── testimonial/     (testimonial avatars: testimonial1.png, testimonial3.png)
└── [other: hse.jpg, landrig.jpg, barge_rig.jpg, etc.]
```

**Usage in templates:**
```php
<!-- Background image with inline CSS -->
<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/slide/s1.jpg');">
</div>

<!-- Regular image tag -->
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/landrig.jpg" alt="Land Rig">

<!-- Or use WordPress image handling -->
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hse.jpg" alt="HSE">
```

## Asset Management

### How Styles & Scripts Are Loaded

The `functions.php` file automatically loads:
- **style.css** - Main theme stylesheet (rendered in the `<head>`)
- **assets/js/main.js** - Main theme JavaScript (loaded in footer with jQuery dependency)

### Adding Custom CSS

#### Option 1: Add to style.css
Edit `style.css` directly. Keep all styles in one file for simplicity.

#### Option 2: Create separate CSS files
1. Create a new file: `assets/css/custom.css`
2. Open `functions.php` and uncomment this line:
   ```php
   wp_enqueue_style( 'petrodrill-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all' );
   ```
3. Save and reload your site

**Example custom.css:**
```css
/* Your custom styles here */
.my-custom-class {
    background: #007bff;
    padding: 20px;
    border-radius: 5px;
}
```

### Adding Custom JavaScript

#### Option 1: Add to assets/js/main.js
Edit the existing main.js file in the assets/js folder.

#### Option 2: Create separate JS files
1. Create a new file: `assets/js/custom.js`
2. Open `functions.php` and uncomment this line:
   ```php
   wp_enqueue_script( 'petrodrill-custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1.0', true );
   ```
3. Save and reload your site

**Example custom.js:**
```javascript
jQuery(document).ready(function($) {
    // Your custom jQuery code here
    console.log('Custom JavaScript loaded!');
});
```

### Adding Images

#### For Theme Logo/Assets
1. Add your images to `assets/images/`
2. Reference them in your templates:
   ```php
   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
   ```

#### For Post/Page Content Images
Use WordPress Media Library:
1. In post/page editor, click "Add Media"
2. Upload images
3. Insert into content

### Loading External Libraries

To add Bootstrap, Font Awesome, or other libraries:

```php
// In functions.php, add to the petrodrill_scripts() function:
wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3' );
wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.1.3', true );
```

### Debugging Assets

If styles/scripts don't appear:

1. **Check Console** - Open browser DevTools (F12) → Console for errors
2. **Hard Refresh** - Press Ctrl+Shift+R (Cmd+Shift+R on Mac)
3. **Check Enqueue** - Verify the file path in functions.php
4. **Check Dependencies** - Make sure parent scripts are loaded (e.g., jQuery)
5. **Check Permissions** - Ensure files are readable by the web server

## Customization


### Colors
Edit CSS variables in `style.css`:

```css
:root {
  --primary-color: #1e40af;      /* Blue */
  --secondary-color: #0f172a;    /* Dark blue */
  --accent-color: #f59e0b;       /* Amber/Gold */
  --light-bg: #f9fafb;           /* Light gray */
  --text-dark: #1f2937;          /* Dark text */
  --text-light: #6b7280;         /* Light text */
}
```

### Fonts
Update the font families in the `body` selector in `style.css`:

```css
body {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
}
```

### Homepage Content
Edit `home.php` to customize:
- Hero section title and subtitle
- Service cards content and icons
- About section text and image
- Call-to-action sections

### Navigation
Set up menus in WordPress Admin:
1. Create a menu with your pages
2. Assign it to "Primary Menu" location
3. Optionally create a "Social Menu" for social media links

## Page Templates

### Homepage (home.php)
- Hero section with featured image
- Services grid (4 columns)
- About section with image placeholder
- Latest blog posts (3 posts)
- Call-to-action section

### Blog Listing (index.php)
- Grid layout for posts
- Featured images
- Post meta (date, category)
- Read more links
- Pagination

### Single Post/Page (index.php serves as fallback)
To create custom templates, add `single.php` or `page.php`

## Editing Tips

### Service Cards (Homepage)
Edit in `home.php` - each card has:
- Icon (emoji or icon class)
- Title (h3)
- Description (p)

### Sections
Main sections in `home.php`:
1. `.hero-section` - Hero banner
2. `.services-section` - 4-column service cards
3. `.about-section` - About with image
4. `.blog-section` - Latest posts
5. `.cta-section` - Call to action

### Styling Custom Content
Add classes to your content:
- `.section-title` - Styled section headings
- `.cta-button` - Orange action buttons
- `.read-more-btn` - Primary blue buttons
- `service-card` - Service card styling

## Browser Support

- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Developer Notes

- **Responsive**: Uses CSS Grid and Flexbox (no Bootstrap dependency)
- **Semantic HTML**: Proper use of `<article>`, `<header>`, `<footer>`, etc.
- **CSS Utilities**: Single-purpose CSS classes for flexibility
- **Mobile First**: Styles start mobile, scale up for larger screens
- **Accessible**: ARIA labels, semantic buttons, keyboard navigation

## Next Steps

1. **Set WordPress Site Title** in Admin → Settings → General
2. **Create Navigation Menu** in Admin → Appearance → Menus
3. **Upload Logo** (optional) - modify header.php logo area
4. **Create Content** - Add pages and posts
5. **Customize Colors** - Edit `:root` variables in style.css
6. **Extend Functionality** - Add custom post types, custom fields, etc.

## Using Project Images

All 50+ images from your original project are copied and ready to use:

### Available Images

**Hero/Product Images:**
- `barge_rig.jpg`, `landrig.jpg`, `hydroscan.jpg`, `pd1.jpg`, `pd3.jpg`, `petd1.jpg` - Product/service images
- `hse.jpg`, `office.jpg`, `safety.jpg` - Company/operations images

**Client Logos:**
- `demo/clients/baywaterlogo.jpg`, `Geoexploration.png`, `parkerd-logo.png`, etc.

**Slide/Testimonial Images:**
- `demo/slide/s1.jpg`, `demo/slide/oilb.jpg` - Slider images
- `demo/testimonial/testimonial1.png`, `testimonial3.png` - Testimonial avatars

**Background Images:**
- `HSC_processing.png`, `EPM.jpg`, `hydroscan.jpg` - Technical/process images

### Example: Using Images in Templates

**Hero Section with Background Image:**
```php
<section class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/demo/slide/s1.jpg'); background-size: cover; background-position: center;">
    <!-- Your content here -->
</section>
```

**Service Card Icons:**
```php
<div class="service-icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hydroscan.jpg" alt="Hydroscan" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
</div>
```

**Client Logo Grid:**
```php
<?php
$logos = array(
    'demo/clients/Geoexploration.png',
    'demo/clients/baywaterlogo.jpg',
    'demo/clients/parkerd-logo.png'
);
foreach ($logos as $logo) {
    echo '<img src="' . get_template_directory_uri() . '/assets/images/' . $logo . '" alt="Client">';
}
?>
```

### Tips for Working with Images

1. **Use `get_template_directory_uri()`** - Always use this WordPress function for image paths (works on any site URL)
2. **Optimize for Web** - Consider compressing images for faster loading
3. **Add Alt Text** - Always include descriptive `alt` attributes for accessibility
4. **Responsive Images** - Use WordPress's `wp_get_image_editor()` for automatic image sizing
5. **Lazy Loading** - Add `loading="lazy"` to images for better performance

## Support

For questions or customizations, refer to WordPress documentation:
- [WordPress Theme Development](https://developer.wordpress.org/themes/)
- [WordPress Plugin Directory](https://wordpress.org/plugins/)

---

**Theme Version**: 1.0  
**WordPress Minimum**: 5.0  
**Last Updated**: 2026
