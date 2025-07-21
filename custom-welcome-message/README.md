# Custom Welcome Message Plugin

A simple WordPress plugin that adds a customizable welcome message on the WordPress admin dashboard.

## Features

- Adds a welcome message on the admin dashboard.
- Admin can change the message from a settings page.
- Demonstrates WordPress hooks, Settings API, and sanitization.
- Secure and easy to extend.

## Installation

1. Upload the `custom-welcome-message` folder to your `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to **Settings > Welcome Message** to customize the message.

## Usage

Once activated, the welcome message appears on the WordPress dashboard for users with `manage_options` capability.

## Development

This plugin uses OOP principles and hooks such as:

- `admin_notices` to display messages.
- `admin_menu` to add settings page.
- `admin_init` for registering settings.

## Author

Your Name  
Your Email  
[Your GitHub Profile](https://github.com/prithi2004)

## License

MIT License
