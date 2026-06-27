<?php
/**
 * SITE CONFIG — Edit everything here.
 * Change your company name, contact info, navigation, services, etc.
 * in this one file and it updates across the whole site.
 */

// ---- Brand / Company ----
$SITE = [
    'name'        => 'H3 Techs',
    'tagline'     => 'Smart IT Solutions for Growing Businesses',
    'description' => 'We design, build, and support technology that helps your business move faster.',
    'email'       => 'info@yourdomain.com',
    'phone'       => '+1 (555) 123-4567',
    'address'     => '123 Business Ave, Suite 100, Your City',
    'year'        => date('Y'),
];

// ---- Social links (leave '' to hide) ----
$SOCIAL = [
    'linkedin' => '#',
    'twitter'  => '#',
    'facebook' => '#',
    'instagram'=> '',
];

// ---- Navigation ----
$NAV = [
    'index.php'    => 'Home',
    'services.php' => 'Services',
    'about.php'    => 'About',
    'contact.php'  => 'Contact',
];

// ---- Services (icon is an inline SVG name handled in the page) ----
$SERVICES = [
    [
        'icon'  => 'code',
        'title' => 'Software Development',
        'text'  => 'Custom web and mobile applications built with modern, scalable technology tailored to your workflow.',
    ],
    [
        'icon'  => 'cloud',
        'title' => 'Cloud Solutions',
        'text'  => 'Migration, hosting, and management on AWS, Azure, and Google Cloud — secure and cost-efficient.',
    ],
    [
        'icon'  => 'shield',
        'title' => 'Cybersecurity',
        'text'  => 'Protect your data and systems with audits, monitoring, and proactive threat protection.',
    ],
    [
        'icon'  => 'users',
        'title' => 'IT Staffing',
        'text'  => 'Connect with vetted tech talent for contract, contract-to-hire, and full-time roles.',
    ],
    [
        'icon'  => 'chart',
        'title' => 'Data & Analytics',
        'text'  => 'Turn raw data into clear dashboards and insights that drive better decisions.',
    ],
    [
        'icon'  => 'support',
        'title' => 'Managed IT Support',
        'text'  => '24/7 monitoring and helpdesk so your team stays productive and your systems stay online.',
    ],
];

// ---- Stats ----
$STATS = [
    ['number' => '250+', 'label' => 'Projects Delivered'],
    ['number' => '120+', 'label' => 'Happy Clients'],
    ['number' => '15',   'label' => 'Years Experience'],
    ['number' => '99%',  'label' => 'Client Retention'],
];

// ---- Why choose us ----
$WHY = [
    ['title' => 'Experienced Team',   'text' => 'Senior engineers and consultants who have shipped real products at scale.'],
    ['title' => 'Transparent Pricing','text' => 'Clear estimates and no surprise fees — you always know what you are paying for.'],
    ['title' => 'On-Time Delivery',   'text' => 'We plan realistically and communicate early, so deadlines are met.'],
    ['title' => 'Ongoing Support',    'text' => 'We do not disappear after launch. We support what we build.'],
];

// ---- Testimonials ----
$TESTIMONIALS = [
    [
        'quote' => 'They rebuilt our platform from the ground up and our load times dropped by 60%. Genuinely a pleasure to work with.',
        'name'  => 'Sarah Mitchell',
        'role'  => 'CTO, Brightline Retail',
    ],
    [
        'quote' => 'The team felt like an extension of our own. Fast, clear, and they actually understood our business.',
        'name'  => 'David Okafor',
        'role'  => 'Founder, NorthGate Logistics',
    ],
    [
        'quote' => 'Their managed support gave us peace of mind. Issues get solved before we even notice them.',
        'name'  => 'Priya Nair',
        'role'  => 'Operations Lead, Vault Finance',
    ],
];

// Helper: figure out the current page filename for nav highlighting
$CURRENT = basename($_SERVER['PHP_SELF']);
