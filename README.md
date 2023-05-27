# WordPress Boilerplate Theme

This WordPress boilerplate theme provides a solid starting point for developing custom WordPress themes. It includes a basic folder structure, essential template files, and common assets to help you kickstart your theme development process.

## Features

- Clean and organized folder structure
- Basic template files following WordPress template hierarchy
- Reusable template parts for header, footer, and sidebar
- Custom page templates support
- Enqueued styles and scripts
- Custom functions file for theme-specific functions

## Folder Structure
```
theme-name/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   └── img/
├── inc/
│   └── main/
│      ├── reg-scripts.php
│      ├── reg-widgets.php
│      ├── theme-fucntions.php
│      └── theme-setup.php
│
├── template-parts/
│   ├── header/
│   └── footer/
│
├── languages/
├── 404.php
├── archive.php
├── category.php
├── tag.php
├── footer.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── single.php
├── style.css
└── screenshot.png
```

## Getting Started

1. Clone or download this repository.
2. Rename the theme folder to your desired theme name.
3. Update the `style.css` file with your theme's information.
4. Customize the template files, styles, and scripts as needed.
5. Upload the theme folder to your WordPress installation's `wp-content/themes/` directory.
6. Activate the theme from the WordPress admin dashboard.

## Customization

- Modify the template files in the root directory to customize the layout and structure of your theme.
- Add or modify template parts in the `template-parts/` folder for reusable components.
- Add your theme-specific functions to the `inc/main/theme-functions.php` file.
- Customize the styles in the `assets/css/` folder.
- Add or modify JavaScript files in the `assets/js/` folder.
- Replace or add images in the `assets/img/` folder.

## Contributing

Contributions are welcome! Please submit a pull request with your changes or improvements, and we'll review them as soon as possible.

## License

This WordPress boilerplate theme is released under the [GNU General Public License v2.0](https://www.gnu.org/licenses/gpl-2.0.html).
