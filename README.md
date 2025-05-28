# WP Load Font

A simple WordPress plugin that automatically loads custom fonts from a local directory into your WordPress site.

## Description

WP Load Font is a lightweight WordPress plugin that scans a designated directory for font files and automatically generates the necessary `@font-face` declarations. It supports multiple font formats including WOFF, WOFF2, TTF, OTF, and EOT.

## Features

- Automatically loads all fonts from the `my-fonts` directory
- Supports multiple font formats (WOFF, WOFF2, TTF, OTF, EOT)
- No configuration needed - just drop your fonts in the directory
- Proper font display optimization with `font-display: swap`
- Secure implementation with proper WordPress coding standards

## Installation

1. Download the plugin files
2. Upload the `wp-load-font` folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Create a `my-fonts` directory inside the plugin folder if it doesn't exist
5. Add your font files to the `my-fonts` directory

## Usage

1. Place your font files in the `wp-content/plugins/wp-load-font/my-fonts/` directory
2. The plugin will automatically detect and load all supported font files
3. Use the font in your CSS using the font filename (without extension) as the font-family name

Example:
```css
.your-element {
    font-family: 'your-font-name', sans-serif;
}
```

## Supported Font Formats

- WOFF (.woff)
- WOFF2 (.woff2)
- TrueType (.ttf)
- OpenType (.otf)
- Embedded OpenType (.eot)

## Security

The plugin implements several security measures:
- Direct file access prevention
- Proper escaping of font names and URLs
- WordPress coding standards compliance

## Requirements

- WordPress 5.0 or higher
- PHP 7.0 or higher

## License

This plugin is licensed under the GPL v2 or later.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## Changelog

### 1.0.0
- Initial release 