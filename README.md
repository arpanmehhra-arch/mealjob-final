# MealJob Hostinger build

This is a responsive, Hostinger-ready PHP/PWA interface for the vegetarian MealJob service. Open `index.php` through a PHP-capable server to view the role-specific app.

## Included now

- A responsive sign-in entry screen and four role views: Owner/Admin, Customer, Cook and Rider.
- Owner dashboard and **Owner-only Menu Manager**. It supports the UI flow to add a vegetarian dish and publish a menu.
- Customer meal, calendar, wallet/deposit and delivery-tracking surfaces.
- Elara Nights vegetarian à-la-carte catalogue. Alcohol and non-vegetarian menu items are deliberately excluded.
- PWA manifest and service worker support for mobile installation and push-notification delivery.
- Cook production/packing board and Rider route/delivery-exception surface.
- `database/schema.sql`: the MySQL tables needed to replace all demo data with secure server-side records.

## Before launch

1. Install Laravel locally or deploy this folder to a Hostinger PHP plan, then create a Laravel application around the schema.
2. Implement real authentication with password hashing and email verification; enable OTP only after selecting an Indian SMS provider.
3. Make owner-created staff invitations mandatory for Cook, Rider and Admin roles. Never keep a demo password or browser-stored roles.
4. Configure Cashfree credentials in server environment variables; process payment webhooks server-side before crediting wallets or activating subscriptions.
5. Protect delivery evidence in a private upload location and serve it only through authorized requests.

## Deployment note

For an early visual review, upload the folder to Hostinger's `public_html` and ensure PHP is enabled. Copy `app/config.example.php` to a private `app/config.php`, import `database/schema.sql`, then run `app/seed-owner.php` once with the owner credentials stored in Hostinger environment variables. This interface uses no build step.
