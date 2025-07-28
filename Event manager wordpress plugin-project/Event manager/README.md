# Custom Event Management Plugin for WordPress

![Plugin Banner](https://yourdomain.com/path-to-banner-image.png)

## Description

The **Custom Event Management Plugin** is a lightweight and user-friendly WordPress plugin that allows website owners to create, display, and manage events easily from the WordPress dashboard. It supports one-time and recurring events, RSVP and guest management, calendar views, and email notifications.

This plugin is designed to be flexible and scalable for small businesses, clubs, nonprofits, and event organizers who want a simple yet powerful event management tool integrated into their WordPress site.

---

## Features

- **Custom Events Post Type:** Easily create and manage events with all the necessary details.
- **Recurring Events Support:** Schedule events to repeat daily, weekly, or monthly.
- **Front-end Event Display:** Display event lists or calendar views anywhere using shortcodes or widgets.
- **RSVP & Guest Management:** Allow visitors to register or RSVP for events.
- **Email Notifications:** Automated email reminders to attendees and organizers.
- **Easy to Use Admin UI:** Manage all event data within the WordPress dashboard.
- **Shortcodes and Widgets:** Easily embed events and calendars on pages and posts.
- **Security:** Uses WordPress best practices to sanitize and validate all inputs.
- **Extensible:** Well-structured codebase for further enhancements.

---

## Installation

1. Download or clone this repository.
2. Upload the `wp-event-manager` folder to your WordPress `/wp-content/plugins/` directory.
3. Activate the plugin through the WordPress Admin Plugins page.
4. Navigate to the "Events" menu in the dashboard to start adding events.

---

## Usage

### Adding Events

- Go to **Events > Add New** in the WordPress admin.
- Fill out event details including title, date/time, location, and description.
- Set recurrence options if needed.
- Publish the event.

### Displaying Events

Use the following shortcodes to display events on any page or post:

- `[event_list]` – Displays a list of upcoming events.
- `[event_calendar]` – Displays a monthly calendar view of events.
- `[event_rsvp event_id="123"]` – Displays RSVP form for the event with ID 123.

### Widgets

Add event list or calendar widgets to your sidebar or footer via Appearance > Widgets.

---

## Screenshots

1. Admin dashboard with event list  
2. Add/Edit event page  
3. Frontend calendar view  
4. Event RSVP form

---

## Contributing

Contributions, issues, and feature requests are welcome!

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/new-feature`)
3. Commit your changes (`git commit -m 'Add new feature'`)
4. Push to the branch (`git push origin feature/new-feature`)
5. Open a pull request

Please ensure code quality and WordPress coding standards compliance.

---

## Frequently Asked Questions (FAQ)

**Q:** Can I customize the event display templates?  
**A:** Yes, you can override the plugin templates by placing your custom template files in your active theme’s folder following the plugin’s structure.

**Q:** Does the plugin support payments or ticketing?  
**A:** Not in this version, but payment integration is planned for future releases.

---

## Changelog

### Version 1.0.0 (2025-07-28)
- Initial release with event creation, recurring events, RSVP management, and shortcode support.

---

## License

This plugin is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## Credits

Developed by [Your Name](https://github.com/yourusername)

---

## Contact

For help or support, please open an issue on GitHub or contact me at your.email@example.com.

