# Laravel Stubs

A Laravel package for pre-built layout and page stubs that save time when developing Laravel applications.

## Description

The Laravel Stubs package provides pre-built Blade templates and PHP components for fast web development with Laravel. It includes professional layout templates with SEO optimization, responsive design, and modern web standards.

## Features

- 🎨 **Professional Layout Templates** with SEO optimization
- 📱 **Responsive Design** with modern meta tags
- 🔍 **SEO-optimized** with Open Graph and Twitter Card support
- 🎯 **Multi-Language Support** with Hreflang tags
- ⚡ **Vite Integration** for modern asset bundling
- 🍪 **Smooth Scrolling** JavaScript functionality

## Installation

Add the package to your `composer.json`:

```bash
composer require componist/laravel-stubs
```

## Usage

### Available Stub Tags

The package offers two different stub tags:

#### 1. Publish Page Stub

Publishes a new page template file:

```bash
php artisan vendor:publish --tag=componist-page-stub
```

**Result**: Creates `resources/views/page/page.blade.php`

#### 2. Publish Layout Stub

Publishes the layout template and PHP component:

```bash
php artisan vendor:publish --tag=componist-page-layout
```

**Results:**
- `resources/views/layouts/app.blade.php`
- `app/View/AppLayout.php`

## Template Structure

### Layout Template (`layout.blade.php`)

The layout template contains:

- **Complete HTML structure** with DOCTYPE and meta tags
- **SEO optimization**:
  - Meta description, keywords, robots
  - Open Graph tags for social media
  - Twitter Card Meta tags
  - Canonical URL
  - Hreflang for multi-language
- **Favicon configuration** for all device sizes
- **Vite integration** for modern asset bundling
- **Smooth scrolling** JavaScript functionality

### Page Template (`page.blade.php`)

The page template offers:

- Extension of the layout template
- SEO section configuration
- Content area for page-specific content
- Debug output for development

### PHP Layout Component (`layout.php`)

Laravel Blade component for flexible template usage in Livewire or other Laravel components.

## SEO Features

The layout template supports extensive SEO functionality:

```php
@section('title', 'Page Title')
@section('description', 'Page Description')
@section('keywords', 'Keywords')
@section('og_type', 'website')
@section('og_image', asset('image/logo.png'))
@section('robots', 'index, follow')
```

## Vite Integration

The template is prepared for Laravel Vite:

```php
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

## JavaScript Features

- **Hash anchor navigation**: Automatic scrolling to hash links
- **Scroll to element**: `window.scrollToElement(idName)` function

## Developed for

- Laravel

## License

MIT - see [LICENSE](LICENSE) file for details.

## Support

For questions or issues visit [componist.dev](https://componist.dev).

---

**Developed by Componist** - Modern Laravel Tools for Developers