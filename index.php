<?php
$PAGE_TITLE = 'Smart IT Solutions for Growing Businesses';
require_once __DIR__ . '/includes/icons.php';
include __DIR__ . '/includes/header.php';
?>
<a id="top"></a>

<!-- HERO -->
<section class="hero">
    <div class="container hero-inner">
        <div class="hero-copy reveal">
            <p class="eyebrow">Technology Partner</p>
            <h1><?= htmlspecialchars($SITE['tagline']) ?></h1>
            <p class="lead"><?= htmlspecialchars($SITE['description']) ?> From custom software to cloud and security, we help you build the right thing and keep it running.</p>
            <div class="hero-actions">
                <a href="contact.php" class="btn btn-primary btn-lg">Start a Project</a>
                <a href="services.php" class="btn btn-ghost btn-lg">Explore Services</a>
            </div>
            <div class="hero-trust">
                <span><?= icon('check') ?> Trusted by 120+ companies</span>
                <span><?= icon('check') ?> 99% client retention</span>
            </div>
        </div>

        <div class="hero-visual reveal">
            <div class="hero-card hero-card--main">
                <div class="hero-card-row">
                    <span class="dot"></span><span class="dot"></span><span class="dot"></span>
                </div>
                <div class="bar bar--1"></div>
                <div class="bar bar--2"></div>
                <div class="bar bar--3"></div>
                <div class="hero-card-grid">
                    <div></div><div></div><div></div><div></div>
                </div>
            </div>
            <div class="hero-card hero-card--float">
                <strong>+60%</strong>
                <span>Faster load times</span>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="section" id="services">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">What We Do</p>
            <h2>Services built around your business</h2>
            <p class="section-sub">End-to-end technology services, from first idea to long-term support.</p>
        </div>

        <div class="cards">
            <?php foreach ($SERVICES as $s): ?>
                <article class="card reveal">
                    <div class="card-icon"><?= icon($s['icon']) ?></div>
                    <h3><?= htmlspecialchars($s['title']) ?></h3>
                    <p><?= htmlspecialchars($s['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="section section--dark">
    <div class="container">
        <div class="stats">
            <?php foreach ($STATS as $st): ?>
                <div class="stat reveal">
                    <span class="stat-num" data-count="<?= htmlspecialchars($st['number']) ?>"><?= htmlspecialchars($st['number']) ?></span>
                    <span class="stat-label"><?= htmlspecialchars($st['label']) ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- WHY US -->
<section class="section">
    <div class="container why-grid">
        <div class="why-copy reveal">
            <p class="eyebrow">Why Choose Us</p>
            <h2>A partner that sticks around</h2>
            <p class="section-sub">We are not a build-and-vanish shop. We care about outcomes and we are here for the long run.</p>
            <a href="about.php" class="btn btn-primary">More About Us</a>
        </div>
        <div class="why-list">
            <?php foreach ($WHY as $w): ?>
                <div class="why-item reveal">
                    <div class="why-check"><?= icon('check') ?></div>
                    <div>
                        <h3><?= htmlspecialchars($w['title']) ?></h3>
                        <p><?= htmlspecialchars($w['text']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="section section--soft">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Testimonials</p>
            <h2>What our clients say</h2>
        </div>
        <div class="cards">
            <?php foreach ($TESTIMONIALS as $t): ?>
                <figure class="quote-card reveal">
                    <blockquote>&ldquo;<?= htmlspecialchars($t['quote']) ?>&rdquo;</blockquote>
                    <figcaption>
                        <strong><?= htmlspecialchars($t['name']) ?></strong>
                        <span><?= htmlspecialchars($t['role']) ?></span>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-band">
    <div class="container cta-inner reveal">
        <div>
            <h2>Ready to build something great?</h2>
            <p>Tell us about your project and we will get back within one business day.</p>
        </div>
        <a href="contact.php" class="btn btn-light btn-lg">Get a Free Quote</a>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
