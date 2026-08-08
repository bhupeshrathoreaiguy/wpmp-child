<?php
/**
 * Template: Small Business Website Maintenance  —  URL /small-business-website-maintenance/
 * BOFU page targeting "small business website maintenance". Non-technical, plain-language, affordability/ROI angle.
 * Honest signals only. Schema: Organization + Service + FAQ + Breadcrumb.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wpmp_seo = array(
	'title' => 'Small Business Website Maintenance | Affordable Plans From $59/mo',
	'desc'  => 'Affordable website maintenance for small businesses. We keep your site secure, updated, backed up and fast so you can run your business. Plain English, no contracts. From $59/mo.',
);
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();
$author_photo = 'https://wpwebsitemaintenancepackages.com/wp-content/uploads/2026/08/bhupesh-rathore-1.webp';
$book = $c['calendly'];

$faqs = array(
	array( 'What is small business website maintenance?', 'It is a service that takes care of your business website for you after it is built: keeping the software updated, protecting it from hackers, backing it up daily, keeping it fast, and fixing things when they break. Instead of learning to do all that yourself or hiring a developer every time something goes wrong, you pay a flat monthly fee and a team handles it in the background.' ),
	array( 'Why does a small business website need maintenance?', 'Because a website is live software connected to the internet, and software left alone breaks or gets attacked. Most sites that get hacked were simply running something out of date. For a small business, your site is often your best salesperson, working 24/7 to bring in calls, bookings and orders. Maintenance keeps that salesperson online and working instead of quietly costing you leads.' ),
	array( 'How much does website maintenance cost for a small business?', 'For a typical small business site, expect $50 to $150 per month for solid, managed care. Our plans start at $59/mo for essential care and $129/mo for full care with developer time. That is less than most businesses spend on coffee, and far less than a single emergency fix or a lost week of downtime. See our cost guide for the full breakdown.' ),
	array( 'Is website maintenance really worth it for a small business?', 'Yes, and the math is simple. One serious problem, a hacked site, a broken contact form nobody noticed, days of downtime, easily costs more than a year of maintenance. Maintenance turns those unpredictable, expensive emergencies into a small, predictable monthly cost, and keeps your site fast enough to actually win customers. For most small businesses it pays for itself the first time it prevents a single incident.' ),
	array( 'My website rarely changes. Do I still need maintenance?', 'Yes, arguably more than a busy site. A site nobody logs into for months is exactly where a hack or a broken form goes unnoticed the longest. Updates, security and backups are needed whether or not you are changing content, because the threats do not pause just because your site is quiet. A quiet site still needs the locks checked.' ),
	array( 'Can I just maintain the website myself?', 'You can, if you have the time and comfort to do it properly and consistently: regular backups, tested updates, security monitoring, and speed checks, every month without fail. The trouble is not the first month, it is the twelfth, when it slips down the priority list and the site quietly falls behind. Most owners find their time is worth more spent on the business than on WordPress upkeep.' ),
	array( 'What happens if I don\u2019t maintain my website?', 'It gets slower, less secure and more likely to break over time. Outdated plugins are the most common way sites get hacked, a slow site loses visitors and slips in Google, and without backups a single bad moment can wipe out the site with no way back. The damage is invisible right up until it is not, and by then it is an expensive emergency instead of a cheap routine.' ),
	array( 'Do you work with small local businesses in my industry?', 'Almost certainly. We maintain WordPress sites for restaurants, contractors, dentists and medical practices, law firms, real estate and accounting offices, consultants, salons, nonprofits and local service businesses of every kind. If your business runs on a WordPress website, you are a good fit, the core care is the same, tuned to what matters most for your type of business.' ),
	array( 'Do you help with Google Business Profile and local SEO?', 'We keep the website side of your local presence healthy, fast pages, working forms, consistent business name, address and phone details, and the technical basics Google looks for. We can advise on your Google Business Profile, though the profile itself is managed in Google\u2019s own tools. A well-maintained, fast site supports your local rankings; a slow or broken one undermines them.' ),
	array( 'What if my website isn\u2019t built on WordPress?', 'Our specialty is WordPress, which powers a huge share of small business sites and is where we deliver the most value. If your site is on another platform, get in touch and we will tell you honestly whether we are the right fit or point you in a better direction.' ),
	array( 'How fast do you respond if my site goes down?', 'Our monitoring often catches problems before you even notice. When you do need us, response time depends on your plan and how urgent the issue is, critical problems like a site being down get same-day or priority response on our higher plans. And every plan is backed by our same-day fix guarantee if we ever break something.' ),
	array( 'Do I have to sign a long contract?', 'No. Every plan is month to month with no lock-in. You can upgrade, downgrade or cancel any time. We would rather keep your business by doing good work than by tying you into a contract you cannot leave.' ),
	array( 'How do I get started?', 'Send us your website URL for a free audit. We check its health, security and speed, tell you plainly what shape it is in, and recommend the right plan, no pressure, no jargon. Once you are ready, we take over within 24 hours and you can stop worrying about your website.' ),
);

include get_theme_file_path( 'parts/head.php' );
include get_theme_file_path( 'parts/site-header.php' );
?>
<style>
.fp .pl-hero{padding:56px 0 30px;position:relative;overflow:hidden;background:linear-gradient(180deg,var(--accent-soft),transparent)}
.fp .pl-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(50% 60% at 88% 0%,rgba(14,159,110,.12),transparent 60%);pointer-events:none}
.fp .pl-hero h1{max-width:20ch;position:relative}
.fp .pl-lead{max-width:64ch;color:var(--muted);font-size:1.16rem;margin-top:16px;position:relative}
.fp .pl-meta{display:flex;gap:16px;flex-wrap:wrap;margin-top:18px;color:var(--muted);font-size:.9rem;font-weight:600;position:relative}
.fp .pl-meta span{display:inline-flex;align-items:center;gap:7px}.fp .pl-meta svg{width:15px;height:15px;color:var(--accent-deep)}
.fp .cg{max-width:920px;margin:0 auto}
.fp .cg h2{font-size:clamp(1.6rem,3vw,2.1rem);margin:8px 0 12px}
.fp .cg h3{font-size:1.22rem;margin:24px 0 8px}
.fp .cg p{color:#232a33;margin:0 0 16px}
.fp .cg ul.body{padding-left:20px;color:#232a33;margin:0 0 16px}.fp .cg ul.body li{margin-bottom:9px}
.fp .cg a.ilink{color:var(--accent-deep);font-weight:600;text-decoration:underline;text-decoration-color:rgba(14,159,110,.4);text-underline-offset:3px}
.fp .tldr{background:var(--surface);border:1px solid var(--line);border-left:4px solid var(--accent);border-radius:14px;padding:26px 28px;box-shadow:var(--shadow);margin:0 auto;max-width:920px}
.fp .tldr h2{font-size:1.2rem;margin-bottom:10px}
.fp .statline{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin:22px 0}
.fp .statline .s{background:var(--ink);color:#fff;border-radius:14px;padding:20px;text-align:center}
.fp .statline .s b{display:block;font-family:var(--display);font-size:1.4rem;color:#3fd9a3}
.fp .statline .s span{font-size:.82rem;color:#aeb8c2}
.fp .tbl-wrap{overflow-x:auto;border:1px solid var(--line);border-radius:14px;margin:18px 0}
.fp table.cg-tbl{width:100%;border-collapse:collapse;font-size:.94rem;min-width:520px}
.fp .cg-tbl th,.fp .cg-tbl td{text-align:left;padding:13px 16px;border-bottom:1px solid var(--line);vertical-align:top}
.fp .cg-tbl thead th{background:var(--ink);color:#fff;font-family:var(--display);font-weight:700;font-size:.88rem}
.fp .cg-tbl tbody tr:nth-child(even){background:#fbfbf7}
.fp .cg-tbl td:first-child{font-weight:700}
.fp .cg-tbl .price{color:var(--accent-deep);font-weight:800;white-space:nowrap}
.fp .inc-grid,.fp .svc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin:18px 0}
.fp .inc,.fp .svc{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:20px}
.fp .inc .ic,.fp .svc .ic{width:42px;height:42px;border-radius:11px;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center;margin-bottom:12px}
.fp .inc h3,.fp .svc h3{font-size:1.03rem;margin:0 0 6px}.fp .inc p,.fp .svc p{font-size:.92rem;color:var(--muted);margin:0}
.fp .steps{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin:18px 0}
.fp .step{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:22px}
.fp .step .num{width:34px;height:34px;border-radius:9px;background:var(--ink);color:#fff;font-family:var(--display);font-weight:800;display:grid;place-items:center;margin-bottom:12px}
.fp .step h3{font-size:1rem;margin:0 0 6px}.fp .step p{font-size:.9rem;color:var(--muted);margin:0}
.fp .trust-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin:18px 0}
.fp .trust{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:22px;text-align:center}
.fp .trust .ic{width:44px;height:44px;border-radius:12px;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center;margin:0 auto 12px}
.fp .trust b{font-family:var(--display);display:block;margin-bottom:4px}.fp .trust p{font-size:.88rem;color:var(--muted);margin:0}
.fp .callout{border-radius:14px;padding:20px 24px;margin:22px 0}
.fp .callout.tip{background:var(--accent-soft);border:1px solid #cdeede}
.fp .callout .ct-head{display:flex;align-items:center;gap:9px;font-weight:800;margin-bottom:6px;font-family:var(--display);color:var(--accent-deep)}
.fp .callout p{margin:0;color:#232a33}.fp .callout svg{width:18px;height:18px}
.fp .cg-faq details{background:var(--surface);border:1px solid var(--line);border-radius:12px;padding:0 22px;margin-bottom:10px}
.fp .cg-faq summary{list-style:none;cursor:pointer;font-family:var(--display);font-weight:700;font-size:1.03rem;padding:17px 0;display:flex;justify-content:space-between;gap:16px;align-items:center}
.fp .cg-faq summary::-webkit-details-marker{display:none}
.fp .cg-faq summary::after{content:"+";color:var(--accent-deep);font-size:1.3rem}.fp .cg-faq details[open] summary::after{content:"\2013"}
.fp .cg-faq details p{color:var(--muted);padding:0 0 18px;margin:0}
.fp .cg-author{display:flex;gap:20px;align-items:flex-start;background:var(--surface);border:1px solid var(--line);border-radius:16px;box-shadow:var(--shadow);padding:26px;max-width:820px;margin:0 auto}
.fp .cg-author img,.fp .cg-author .ph2{flex:0 0 88px;width:88px;height:88px;border-radius:14px;object-fit:cover;border:1px solid var(--line)}
.fp .cg-author .ph2{display:grid;place-items:center;background:var(--accent-soft);color:var(--accent-deep)}
.fp .cg-author .k{font-size:.76rem;font-weight:800;letter-spacing:.08em;text-transform:uppercase;color:var(--accent-deep)}
.fp .cg-author h3{font-size:1.2rem;margin:6px 0 2px}.fp .cg-author .role{color:var(--accent-deep);font-weight:600;font-size:.9rem;margin:0 0 8px}
.fp .cg-author p{font-size:.95rem;color:var(--muted);margin:0 0 10px}.fp .cg-author a{color:var(--accent-deep);font-weight:700;font-size:.9rem;margin-right:14px}
.fp .cg-cta{background:var(--ink);color:#fff;text-align:center}
.fp .cg-cta h2{color:#fff;max-width:24ch;margin:0 auto 12px}.fp .cg-cta p{color:#aeb8c2;max-width:54ch;margin:0 auto 24px}
.fp .toc{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:20px 24px;margin:24px auto 0;max-width:920px}
.fp .toc b{font-family:var(--display)}.fp .toc-list{display:flex;flex-wrap:wrap;gap:8px 18px;margin-top:10px}
.fp .toc-list a{color:var(--accent-deep);font-weight:600;font-size:.92rem}
@media(max-width:820px){.fp .inc-grid,.fp .svc-grid,.fp .steps,.fp .trust-grid,.fp .statline{grid-template-columns:1fr 1fr}.fp .cg-author{flex-direction:column;align-items:center;text-align:center}}
@media(max-width:520px){.fp .inc-grid,.fp .svc-grid,.fp .steps,.fp .trust-grid,.fp .statline{grid-template-columns:1fr}}
</style>

<section class="pl-hero">
	<div class="wrap">
		<nav class="crumbs" aria-label="Breadcrumb" style="position:relative"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>Small Business Website Maintenance</nav>
		<span class="eyebrow" style="position:relative">Affordable &middot; plain English &middot; no contracts</span>
		<h1>Small Business Website Maintenance</h1>
		<p class="pl-lead">Your website should be bringing in customers, not causing you stress. We keep small business websites secure, updated, backed up and fast for a flat, affordable monthly fee, so you can get back to running your business. No jargon, no contracts, and a free audit to start. Plans from $59/mo.</p>
		<div class="pl-meta">
			<span><?php echo fp_icon( 'user' ); ?>By Bhupesh Rathore, ThinkFlow Media</span>
			<span><?php echo fp_icon( 'clock' ); ?>Updated <?php echo esc_html( date( 'F Y' ) ); ?></span>
			<span><?php echo fp_icon( 'check' ); ?>Built for small businesses</span>
		</div>
	</div>
</section>

<section style="padding:34px 0 0">
	<div class="wrap">
		<div class="tldr">
			<h2>In short</h2>
			<p>Your website is often your hardest-working salesperson, and like anything that works hard, it needs looking after. <strong>Small business website maintenance</strong> means we handle the updates, security, backups, speed and fixes for you, so your site stays online and bringing in business instead of quietly breaking. It is affordable (from <strong>$59/mo</strong>), it is month to month, and it is explained in plain English. Compare our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-plans/' ) ); ?>">plans</a> or see the full <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-cost/' ) ); ?>">cost guide</a>.</p>
		</div>
		<div class="statline">
			<div class="s"><b>From $59</b><span>Affordable monthly plans</span></div>
			<div class="s"><b>24/7</b><span>Monitoring &amp; backups</span></div>
			<div class="s"><b>No jargon</b><span>Plain-English updates</span></div>
			<div class="s"><b>No lock-in</b><span>Cancel anytime</span></div>
		</div>
		<div class="toc">
			<b>On this page</b>
			<div class="toc-list">
				<a href="#why">Why you need it</a>
				<a href="#when">When to start</a>
				<a href="#problems">Common problems</a>
				<a href="#cost-of">The real cost of neglect</a>
				<a href="#included">What's included</a>
				<a href="#pricing">Affordable pricing</a>
				<a href="#roi">Is it worth it?</a>
				<a href="#checklist">Monthly checklist</a>
				<a href="#mobile">Mobile &amp; accessibility</a>
				<a href="#industries">Industries we help</a>
				<a href="#process">How it works</a>
				<a href="#diy">DIY vs professional</a>
				<a href="#benefits">Benefits</a>
				<a href="#faq">FAQ</a>
			</div>
		</div>
	</div>
</section>

<section id="why" style="padding-top:44px">
	<div class="wrap cg">
		<span class="eyebrow">Start here</span>
		<h2>Why small businesses need website maintenance</h2>
		<p>For a small business, your website is not a brochure that sits still. It is working around the clock, showing up when someone searches for what you do, answering questions, taking bookings, and turning strangers into customers while you sleep. When it is fast and working, it quietly earns. When it breaks, it quietly costs you, and you often do not find out until a customer tells you they could not reach you.</p>
		<p>The reason maintenance matters is simple once you see it: a website is live software, and software that is left alone falls behind. The tools your site is built on release updates constantly, partly to fix security holes. Skip those updates and your site becomes an easy target, which is how the vast majority of hacked sites got hacked, not through some clever attack, but by running something out of date. Add in the fact that pages get slower over time, forms silently stop working, and backups are forgotten until the day they are desperately needed, and you have a website that is slowly working against you instead of for you.</p>
		<p>Maintenance flips that. Someone is responsible for keeping the site secure, quick and working, every week, whether or not you remember it exists. For a small business owner wearing ten hats already, that is not a luxury, it is taking one important job off your plate and making sure it actually gets done. It is the difference between a website you worry about and one you can forget about because it is handled.</p>
	</div>
</section>

<section id="when" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Timing</span>
		<h2>When should a small business start maintenance?</h2>
		<p>The honest answer is the day your website goes live, because that is the day it becomes live software that needs looking after. But most owners do not think about it until later, so here are the moments when it genuinely stops being optional.</p>
		<p>Start now if your site takes bookings, payments or leads, because every hour of downtime is real money and every unpatched week is real risk. Start now if you do not know when your site was last backed up or updated, that uncertainty is itself the warning sign. Start now if the person who built your site has moved on and nobody is watching it anymore, which is the single most common way small business sites drift into neglect. And definitely start before a busy season rather than during it, since the worst time to discover a problem is when you can least afford the site to be down. If any of those describe you, waiting only increases the odds that your first serious website event is an emergency instead of a routine.</p>
	</div>
</section>

<section id="problems" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Sound familiar?</span>
		<h2>Common website problems small businesses face</h2>
		<p>Most small business owners we talk to have run into at least one of these. The good news is that every one of them is preventable with regular care.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>The problem</th><th>What maintenance does about it</th></tr></thead>
				<tbody>
					<tr><td>Contact form quietly stopped working</td><td>Regular testing catches broken forms before you lose leads you never knew about</td></tr>
					<tr><td>Site got hacked or shows spam</td><td>Security, updates and monitoring prevent it; same-day cleanup if it ever happens</td></tr>
					<tr><td>Website feels slow</td><td>Speed optimization keeps pages quick, so visitors stay and Google ranks you higher</td></tr>
					<tr><td>Scared to click "update" in case it breaks</td><td>We back up first, test, and update safely, so you never have to touch it</td></tr>
					<tr><td>No idea when the site was last backed up</td><td>Daily off-site backups mean you are always one click from a working site</td></tr>
					<tr><td>Something broke and you can\u2019t reach your web guy</td><td>A reliable team and a real response time, not a freelancer who vanished</td></tr>
					<tr><td>Site looks broken on phones</td><td>Mobile checks keep it working where most of your customers actually are</td></tr>
				</tbody>
			</table>
		</div>
		<p>If you recognised your business in that list, you are exactly who this service is for. None of these are your fault, they are just what happens to a website nobody is maintaining.</p>
	</div>
</section>

<section id="cost-of" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">The hidden bill</span>
		<h2>How neglect quietly hurts a small business</h2>
		<p>The tricky thing about skipping maintenance is that nothing bad happens, right up until something bad happens all at once. The cost builds invisibly, then arrives as a single expensive, stressful event at the worst possible time.</p>
		<p><strong>Downtime</strong> means customers who search for you, find your site down or broken, and simply call the next business instead. You never see those lost customers, but they are gone. <strong>A hack</strong> is worse: cleanup costs, days offline, and a real risk that Google flags your site with a scary warning that turns visitors away for weeks even after it is fixed. Industry figures put the average cost of a hacked site in the thousands of dollars once you add up cleanup, lost business and recovery time, a genuinely painful number for a small business. And <strong>slow decay</strong> is the quietest of all: as your site gets slower, fewer visitors stick around and your Google ranking slips, so you get less traffic and convert less of it, month after month, without any single obvious cause.</p>
		<p>Set against all of that, a maintenance plan is a small, predictable cost that makes the big unpredictable ones far less likely. That is really what you are buying: not just updates and backups, but the peace of mind that the expensive, business-disrupting website disaster is somebody\u2019s job to prevent.</p>
	</div>
</section>

<section id="included" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">What we do for you</span>
		<h2>What's included in your plan</h2>
		<p>Every plan covers the core jobs your website needs, all handled for you, all explained in plain language in your monthly report.</p>
		<div class="inc-grid">
			<div class="inc"><span class="ic"><?php echo fp_icon( 'refresh' ); ?></span><h3>Updates</h3><p>We keep your site\u2019s software current and safe, backed up first and checked after.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'shield' ); ?></span><h3>Security</h3><p>Protection, monitoring and malware cleanup so your site stays safe and trusted.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'save' ); ?></span><h3>Daily backups</h3><p>A fresh copy saved safely every day, so nothing is ever truly lost.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'gauge' ); ?></span><h3>Speed</h3><p>We keep pages loading quickly so visitors stay and Google ranks you well.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'pulse' ); ?></span><h3>Monitoring</h3><p>We watch your site around the clock and act fast if anything goes down.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'wrench' ); ?></span><h3>Support &amp; fixes</h3><p>A real person to make small changes and fix problems when you need it.</p></div>
		</div>
		<p>For the full technical detail of how each job is done, see our <a class="ilink" href="<?php echo esc_url( home_url( '/wordpress-website-maintenance-services/' ) ); ?>">maintenance services</a> and <a class="ilink" href="<?php echo esc_url( home_url( '/wordpress-care-plans/' ) ); ?>">care plans</a> pages. Run an online store? See <a class="ilink" href="<?php echo esc_url( home_url( '/ecommerce-website-maintenance/' ) ); ?>">ecommerce maintenance</a>.</p>
	</div>
</section>

<section id="pricing" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Affordable, transparent</span>
		<h2>Affordable small business pricing</h2>
		<p>We built these plans to be genuinely affordable for a small business, with flat pricing and no surprise bills. Emergency fixes are included, not charged extra, so a bad day does not become a big invoice.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>Plan</th><th>Price</th><th>Best for</th></tr></thead>
				<tbody>
					<tr><td>Essential Care</td><td class="price">$59/mo</td><td>Most small business &amp; local sites needing protection</td></tr>
					<tr><td>Growth</td><td class="price">$129/mo</td><td>Busier sites wanting speed work &amp; developer time</td></tr>
					<tr><td>Pro / Agency</td><td class="price">$249/mo</td><td>Stores, high-traffic sites &amp; agencies</td></tr>
				</tbody>
			</table>
		</div>
		<p>Most small businesses are perfectly served by the $59 or $129 plan. See everything each includes on the <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-plans/' ) ); ?>">plans</a> page, or understand the wider market in our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-cost/' ) ); ?>">cost guide</a>.</p>
	</div>
</section>

<section id="roi" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">The honest math</span>
		<h2>Is website maintenance worth it? The real numbers</h2>
		<p>The best way to judge maintenance is to compare its cost against the cost of the problems it prevents. Here is that comparison, honestly laid out.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>Scenario</th><th>Rough cost</th><th>With maintenance</th></tr></thead>
				<tbody>
					<tr><td>A year of Essential Care</td><td class="price">~$708/yr</td><td>Covered</td></tr>
					<tr><td>One emergency hack cleanup</td><td>$500 to several thousand</td><td>Prevented / included cleanup</td></tr>
					<tr><td>A week of downtime in lost leads</td><td>Varies, often $1,000s</td><td>Caught fast by monitoring</td></tr>
					<tr><td>Rebuilding a site with no backup</td><td>$3,000 to $10,000+</td><td>One-click restore</td></tr>
					<tr><td>Lost sales from a slow site</td><td>Ongoing, invisible</td><td>Kept fast</td></tr>
				</tbody>
			</table>
		</div>
		<p>You do not need every one of these to happen for maintenance to pay off, you need it to prevent <em>one</em> of them across a year, and it almost always does. That is why, for a small business, maintenance is one of the cheapest forms of insurance you can buy, with the bonus that it also keeps the site actively earning while it protects.</p>
		<div class="callout tip">
			<div class="ct-head"><?php echo fp_icon( 'check' ); ?>Expert tip</div>
			<p>If budget is tight, the single most valuable thing you can have is reliable off-site backups. Everything else can be recovered if you can restore a clean copy of your site. Our entry plan includes exactly that, which is why $59/mo is genuinely enough protection for many small businesses.</p>
		</div>
	</div>
</section>

<section id="checklist" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">What good care looks like</span>
		<h2>The small business maintenance checklist</h2>
		<p>This is the routine a well-cared-for small business site actually follows. If you handle it yourself, this is the bar to hit; if we handle it, this is what runs quietly in the background for you.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>How often</th><th>What gets done</th></tr></thead>
				<tbody>
					<tr><td>Daily</td><td>Off-site backup taken; uptime and security monitored; alerts checked</td></tr>
					<tr><td>Weekly</td><td>Back up, then update software safely; scan for malware; test that key pages and forms work</td></tr>
					<tr><td>Monthly</td><td>Speed check; database tidy-up; test a backup restore; check for broken links; plain-English report sent to you</td></tr>
					<tr><td>Quarterly</td><td>Review plugins for ones no longer maintained; check mobile experience; confirm SSL and domain are not about to expire</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<section id="mobile" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Where your customers actually are</span>
		<h2>Mobile and accessibility checks</h2>
		<p>For most small businesses, more than half of visitors arrive on a phone, often a local customer looking you up on the go. If your site is slow or awkward on mobile, those are exactly the ready-to-buy people you lose. Part of ongoing maintenance is making sure the site stays fast and usable on phones, not just on the desktop where it was probably built and tested.</p>
		<p>Accessibility is the other side of the same coin. Keeping your site usable for people with visual, motor or other impairments is simply good business, it widens your audience and improves the experience for everyone, and it also reduces a growing area of legal risk for small businesses. We can run basic accessibility checks, flag common issues like missing image descriptions or poor colour contrast, and advise on fixes. To be clear and honest: we help improve accessibility, we do not certify formal legal compliance, which is a separate determination. But a site that is well maintained on this front is both fairer and safer than one nobody has ever checked.</p>
	</div>
</section>

<section id="industries" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Who we help</span>
		<h2>Small businesses we help</h2>
		<p>We look after WordPress sites for small businesses of every kind. The core care is the same; what changes is where the pressure sits for each type of business.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>Business</th><th>What matters most</th></tr></thead>
				<tbody>
					<tr><td>Restaurants &amp; cafes</td><td>Menus, hours and booking links always working, fast on mobile</td></tr>
					<tr><td>Contractors &amp; home services</td><td>Quote forms that never break, fast pages for people ready to call</td></tr>
					<tr><td>Dentists &amp; medical practices</td><td>Security, reliable booking, and steady uptime for patients</td></tr>
					<tr><td>Law &amp; accounting firms</td><td>A professional, secure, fast site that protects a serious reputation</td></tr>
					<tr><td>Real estate agents</td><td>Listings and enquiry forms working, quick pages for busy buyers</td></tr>
					<tr><td>Consultants &amp; salons</td><td>Bookings, contact forms and a fast first impression</td></tr>
					<tr><td>Nonprofits</td><td>Donation and contact flows kept working and secure</td></tr>
					<tr><td>Local shops &amp; small stores</td><td>Reliable, secure pages and working checkout where relevant</td></tr>
				</tbody>
			</table>
		</div>
		<p>Whatever your trade, if your business runs on a WordPress website, we can keep it healthy. Not local-focused? See our nationwide <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-company/' ) ); ?>">website maintenance company</a> page.</p>
	</div>
</section>

<section id="process" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">How it works</span>
		<h2>Getting started is easy</h2>
		<p>No long forms, no technical homework. We make onboarding painless and take over within 24 hours.</p>
		<div class="steps">
			<div class="step"><span class="num">1</span><h3>Free audit</h3><p>Send your website address. We check it over and tell you plainly what shape it is in.</p></div>
			<div class="step"><span class="num">2</span><h3>Pick a plan</h3><p>We recommend the right plan for your business. Month to month, cancel anytime.</p></div>
			<div class="step"><span class="num">3</span><h3>We take over</h3><p>Give us access. Within 24 hours we back up, secure and bring your site up to date.</p></div>
			<div class="step"><span class="num">4</span><h3>Relax</h3><p>We handle everything from there and send a simple report each month. You get back to business.</p></div>
		</div>
	</div>
</section>

<section id="diy" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Compare your options</span>
		<h2>Doing it yourself vs having us handle it</h2>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>What matters</th><th>With us</th><th>Doing it yourself</th></tr></thead>
				<tbody>
					<tr><td>Your time each month</td><td class="price">Zero, we handle it</td><td>Several hours, if you keep up</td></tr>
					<tr><td>Updates done safely</td><td class="price">Backed up &amp; tested</td><td>Update and hope</td></tr>
					<tr><td>If something breaks</td><td class="price">We fix it, same-day guarantee</td><td>You fix it or pay someone urgently</td></tr>
					<tr><td>Backups you can trust</td><td class="price">Daily, off-site</td><td>Easy to forget or misconfigure</td></tr>
					<tr><td>Peace of mind</td><td class="price">It\u2019s handled</td><td>Always on your to-do list</td></tr>
					<tr><td>Cost</td><td class="price">From $59/mo</td><td>Free, until something goes wrong</td></tr>
				</tbody>
			</table>
		</div>
		<p>Doing it yourself genuinely can work if you are comfortable with the technical side and disciplined enough to keep it up every single month. For most owners, though, the honest truth is that website upkeep is the task that always slips, and the small monthly cost of having it handled buys back both the time and the worry.</p>
	</div>
</section>

<section id="what-to-look-for" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Choose well</span>
		<h2>What to look for in a maintenance service</h2>
		<p>If you are comparing providers, the marketing all sounds the same, so judge them on the things that actually matter to a small business. These are the questions worth asking anyone you consider, including us.</p>
		<ul class="body">
			<li><strong>Are backups daily and stored off-site?</strong> This is your ultimate safety net. A backup on the same server that just failed is worthless, and one nobody has tested is a guess.</li>
			<li><strong>Is a real person handling my site, or just a script?</strong> Automated updates with nobody checking the result is not the same as a human who tests changes and fixes what breaks.</li>
			<li><strong>What exactly happens if I get hacked?</strong> Is cleanup included, or billed as an expensive extra when you are most vulnerable? Get the answer before you need it.</li>
			<li><strong>Is the pricing flat and clear?</strong> A low headline price that bills every little fix by the hour can cost more than an all-in plan. Look for emergencies included.</li>
			<li><strong>Can I actually understand the reports?</strong> As a non-technical owner, you want plain-English updates, not a jargon dump you cannot act on.</li>
			<li><strong>Can I leave whenever I want?</strong> Month-to-month terms mean they keep you by doing good work. Long lock-ins usually protect the provider, not you.</li>
		</ul>
	</div>
</section>

<section id="mistakes" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Avoid these</span>
		<h2>Common mistakes small business owners make</h2>
		<p>Nearly every website emergency we are called into started with one of these very human, very avoidable mistakes.</p>
		<ul class="body">
			<li><strong>Assuming "set and forget."</strong> A website is not a printed brochure. Build it and ignore it, and it slowly falls behind on security and speed until something breaks.</li>
			<li><strong>Thinking a quiet site is a safe site.</strong> Low traffic does not mean low risk. Automated bots attack every site regardless of how busy it is, and a neglected quiet site is the easiest target of all.</li>
			<li><strong>No backups, or backups never tested.</strong> Discovering your backup does not work on the day you need it is one of the worst moments in small business website ownership. It is also completely preventable.</li>
			<li><strong>Clicking update on a live site with no backup.</strong> One incompatible update can take the site down with no way back. Always back up and test first, or have someone who does.</li>
			<li><strong>Only reacting after something breaks.</strong> Waiting for a disaster is the most expensive strategy. Routine prevention costs a fraction of an emergency fix.</li>
			<li><strong>Ignoring the site because it is not your expertise.</strong> Understandable, but the fix is not to learn WordPress, it is to hand it to someone whose job it is.</li>
		</ul>
	</div>
</section>

<section id="benefits" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">What you actually get</span>
		<h2>What maintenance really gives a small business</h2>
		<p>It is easy to see maintenance as a list of technical tasks. What it actually buys you as a business owner is more valuable than the tasks themselves, and worth being clear about.</p>
		<p><strong>Your time back.</strong> The hours you would spend wrestling with updates, backups and mysterious errors go back into running and growing your business, which is where your time is genuinely worth the most. <strong>Peace of mind.</strong> The nagging worry that your site might be out of date, unprotected or one bad click from disaster simply goes away, because it is handled by someone whose job it is. <strong>More customers.</strong> A fast, always-online site ranks better in Google and converts more of the visitors it gets, so good maintenance quietly earns rather than just protects. <strong>A professional image.</strong> A site that is quick, secure and never showing errors tells customers you are a serious, trustworthy business, while a slow or broken one says the opposite before you get a chance to. And <strong>protection from the expensive surprise,</strong> the hack, the lost site, the week of downtime, which for a small business can be the difference between a minor cost and a genuine crisis.</p>
		<p>Put simply, you are not really buying updates and backups. You are buying a website that works, and the freedom to stop thinking about it. For most small business owners, that trade, a small predictable fee for one less thing to worry about, is an easy one to make.</p>
	</div>
</section>

<section id="choose" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Why us</span>
		<h2>Why small businesses choose us</h2>
		<div class="trust-grid">
			<div class="trust"><span class="ic"><?php echo fp_icon( 'check' ); ?></span><b>Actually affordable</b><p>Real protection from $59/mo, priced for a small business budget.</p></div>
			<div class="trust"><span class="ic"><?php echo fp_icon( 'user' ); ?></span><b>Plain English</b><p>No jargon. We explain what we did in words that make sense.</p></div>
			<div class="trust"><span class="ic"><?php echo fp_icon( 'shield' ); ?></span><b>WordPress specialists</b><p>We do this all day, so your site is in experienced hands.</p></div>
			<div class="trust"><span class="ic"><?php echo fp_icon( 'refresh' ); ?></span><b>No contracts</b><p>Month to month, cancel anytime. We earn your business every month.</p></div>
		</div>
		<div class="callout" style="background:var(--ink);color:#fff;border-radius:16px;padding:26px;text-align:center">
			<b style="font-family:var(--display);font-size:1.2rem;color:#fff">Our promise: if we break it, we fix it. Same day. No charge.</b>
			<p style="color:#aeb8c2;margin:10px auto 0;max-width:52ch">Every change is backed up and tested. If anything ever goes wrong on our watch, we put it right at no cost. That is the whole point of having us.</p>
		</div>
	</div>
</section>

<section id="faq" style="padding-top:20px" class="cg-faq">
	<div class="wrap cg">
		<span class="eyebrow">Answers</span>
		<h2>Small business website maintenance FAQ</h2>
		<?php foreach ( $faqs as $q ) : ?>
			<details><summary><?php echo esc_html( $q[0] ); ?></summary><p><?php echo esc_html( $q[1] ); ?></p></details>
		<?php endforeach; ?>
	</div>
</section>

<section style="padding-top:10px">
	<div class="wrap">
		<div class="cg-author">
			<?php if ( $author_photo ) : ?>
				<img src="<?php echo esc_url( $author_photo ); ?>" alt="Bhupesh Rathore, founder of ThinkFlow Media" width="88" height="88" loading="lazy">
			<?php else : ?>
				<span class="ph2"><?php echo fp_icon( 'user' ); ?></span>
			<?php endif; ?>
			<div>
				<span class="k">Written &amp; reviewed by</span>
				<h3>Bhupesh Rathore</h3>
				<p class="role">Founder, ThinkFlow Media &amp; Linkflow.agency &middot; 8+ years in WordPress &amp; SEO</p>
				<p><?php echo esc_html( $c['author_bio'] ); ?></p>
				<a href="<?php echo esc_url( home_url( '/author-profile/' ) ); ?>">Full profile</a>
				<a href="<?php echo esc_url( $c['linkedin'] ); ?>" target="_blank" rel="noopener">LinkedIn</a>
				<a href="<?php echo esc_url( $c['x'] ); ?>" target="_blank" rel="noopener">X</a>
			</div>
		</div>
	</div>
</section>

<section class="cg-cta">
	<div class="wrap">
		<span class="eyebrow" style="color:#3fd9a3;justify-content:center">Free, no obligation</span>
		<h2>Stop worrying about your website</h2>
		<p>Send us your URL for a free health and security check. We'll tell you plainly what your site needs and which affordable plan fits, no pressure and no jargon.</p>
		<a class="btn btn-primary" href="<?php echo esc_url( $book ); ?>" target="_blank" rel="noopener"><?php echo fp_icon( 'cal' ); ?>Get a free website audit</a>
	</div>
</section>

<script type="application/ld+json">
<?php
$page_url = home_url( '/small-business-website-maintenance/' );
$ld = array(
	'@context' => 'https://schema.org',
	'@graph'   => array(
		array(
			'@type' => 'Organization',
			'@id'   => home_url( '/#organization' ),
			'name'  => $c['brand'],
			'url'   => home_url( '/' ),
			'email' => $c['email'],
			'areaServed' => array( '@type' => 'Country', 'name' => 'United States' ),
			'sameAs' => array( $c['linkedin'], $c['x'] ),
		),
		array(
			'@type'       => 'Service',
			'serviceType' => 'Small Business Website Maintenance',
			'name'        => 'Small Business Website Maintenance',
			'url'         => $page_url,
			'description' => $wpmp_seo['desc'],
			'provider'    => array( '@id' => home_url( '/#organization' ) ),
			'areaServed'  => array( '@type' => 'Country', 'name' => 'United States' ),
			'hasOfferCatalog' => array(
				'@type' => 'OfferCatalog',
				'name'  => 'Small Business Maintenance Plans',
				'itemListElement' => array(
					array( '@type' => 'Offer', 'name' => 'Essential Care', 'price' => '59', 'priceCurrency' => 'USD' ),
					array( '@type' => 'Offer', 'name' => 'Growth', 'price' => '129', 'priceCurrency' => 'USD' ),
					array( '@type' => 'Offer', 'name' => 'Pro / Agency', 'price' => '249', 'priceCurrency' => 'USD' ),
				),
			),
		),
		array(
			'@type' => 'BreadcrumbList',
			'itemListElement' => array(
				array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => home_url( '/' ) ),
				array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Small Business Website Maintenance', 'item' => $page_url ),
			),
		),
		array(
			'@type' => 'FAQPage',
			'mainEntity' => array_map( function( $q ) {
				return array( '@type' => 'Question', 'name' => $q[0], 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $q[1] ) );
			}, $faqs ),
		),
	),
);
echo wp_json_encode( $ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
?>
</script>

<?php include get_theme_file_path( 'parts/site-footer.php' ); wp_footer(); ?>
</body></html>
