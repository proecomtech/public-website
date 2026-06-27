# H3 Techs — IT Services Website (PHP / HTML / CSS / JS)

A clean, fully responsive multi-page website for an IT / tech-services company.
Built with plain PHP (shared header/footer via includes), vanilla CSS, and vanilla
JavaScript — no frameworks, no build step.

## What's inside

```
h3techs-site/
├── index.php              # Home (hero, services, stats, why-us, testimonials, CTA)
├── about.php              # About page
├── services.php           # Services + process
├── contact.php            # Contact page with form
├── process-contact.php    # Handles the contact form (email + log backup)
├── includes/
│   ├── config.php         # ★ EDIT THIS — all your content/colors/contact info
│   ├── header.php         # Shared header + responsive nav
│   ├── footer.php         # Shared footer
│   └── icons.php          # Inline SVG icon helper
└── assets/
    ├── css/style.css      # All styles (theme variables at the top)
    └── js/main.js         # Nav, scroll reveal, count-up, form validation
```

## How to run it locally

You need PHP installed. The simplest way:

```bash
cd h3techs-site
php -S localhost:8000
```

Then open http://localhost:8000 in your browser.

(Or drop the folder into XAMPP/MAMP's `htdocs` and visit http://localhost/h3techs-site/.)

## How to make YOUR changes

**1. Company name, contact info, services, stats, testimonials**
Open `includes/config.php`. Everything is in plain arrays at the top — change the
text and it updates everywhere on the site automatically.

**2. Colors / theme**
Open `assets/css/style.css`. The first block (`:root { ... }`) holds every color.
Change `--primary`, `--accent`, `--ink`, etc. and the whole site re-themes.

```css
--primary: #1e5eff;   /* main brand color */
--accent:  #00c2a8;   /* secondary accent */
--ink:     #0b1b33;   /* headings / dark sections */
```

**3. Logo**
The logo is a text mark ("H3" + name) in `includes/header.php`. To use an image
instead, replace the `.brand-mark` / `.brand-name` markup with an `<img src="assets/img/logo.png">`.

**4. Contact form delivery**
In `process-contact.php`, submissions are emailed to the address in `config.php`
(`$SITE['email']`) and also saved to `contact-submissions.log` as a backup.
`mail()` requires a configured mail server — on shared hosting it usually works
out of the box. For reliable delivery, switch to PHPMailer with SMTP.

## Notes

- Responsive: works from large desktops down to small phones (mobile menu included).
- Accessibility: keyboard focus styles, ARIA labels on the menu, reduced-motion respected.
- Anti-spam: hidden honeypot field on the contact form.
- This is an original template — replace the placeholder copy and images with your own.
