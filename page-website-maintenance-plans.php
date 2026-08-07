<?php
/**
 * Template: Website Maintenance Plans  —  URL /website-maintenance-plans/
 * BOFU commercial landing page targeting "website maintenance plan".
 * Design-rich: plan cards, feature matrix, plan example, recommendation guide,
 * checklist, 21 FAQ, Service + Offer + FAQPage + Breadcrumb schema, author box.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wpmp_seo = array(
	'title' => 'Website Maintenance Plans | From $59/mo',
	'desc'  => 'Compare monthly website maintenance plans: updates, security, backups, speed and support. See what each plan includes, real pricing, and which fits your site. No contracts.',
);
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();
$author_photo = 'https://wpwebsitemaintenancepackages.com/wp-content/uploads/2026/08/bhupesh-rathore-1.webp';
$book = $c['calendly'];

$faqs = array(
	array( 'What is a website maintenance plan?', 'A website maintenance plan is a fixed monthly service that keeps your website updated, secure, backed up, fast and working, handled by a team on a schedule instead of you reacting to problems after they happen. It bundles the recurring technical work every live site needs into one predictable fee.' ),
	array( 'What is included in a website maintenance plan?', 'A proper plan covers six core jobs: software updates, security, daily backups, speed optimization, uptime monitoring, and fixes. Higher tiers add developer hours, priority support, staging, and store support. Anything that only does one or two of these is not really a maintenance plan.' ),
	array( 'How much does a website maintenance plan cost?', 'Most plans run $20 to $500 per month, with ecommerce and high-traffic sites higher. Ours start at $59/mo for essential care and go to $249/mo for stores and agencies. For the full market breakdown, see our website maintenance cost guide.' ),
	array( 'What is an example of a website maintenance plan?', 'A typical small business plan includes weekly WordPress updates, daily off-site backups, 24/7 uptime monitoring, security hardening, a monthly speed check and a plain-English report, for around $59 to $129 a month. See the worked example on this page for exactly what a month looks like.' ),
	array( 'Do I need a monthly website maintenance plan?', 'If your site brings in leads, bookings or sales, yes. WordPress and its plugins release security patches constantly, and skipping them is the top cause of hacked sites. A monthly plan keeps that handled on a schedule rather than leaving gaps.' ),
	array( 'Is a monthly or annual plan better?', 'Monthly gives you flexibility and no lock-in. Annual usually saves 10 to 20 percent if you are committed. The work is identical; the choice is about cash flow and commitment, not coverage.' ),
	array( 'What is the difference between your plans?', 'Essential Care covers the fundamentals for small sites. Growth adds speed work and monthly developer time for sites that earn their keep. Pro / Agency adds store support, unlimited small edits and white-label reporting for complex sites and agencies. The feature matrix on this page shows the exact differences.' ),
	array( 'What is a managed website maintenance plan?', 'Managed means a real team handles everything for you, rather than you installing plugins and doing the work yourself. You get scheduled care, monitoring and a human to call, all under one flat fee. That is what all of our plans are.' ),
	array( 'Which plan is right for my website?', 'Match the plan to what your site is worth. Brochure and small business sites usually fit Essential or Growth; content sites that publish often fit Growth; stores, high-traffic sites and agencies fit Pro. Our recommendation guide on this page maps site types to plans.' ),
	array( 'Do your plans include hosting?', 'Hosting is separate by default, which keeps your plan price clean and lets you keep the host you already have. If your host is holding you back, we can help you move to a better one during onboarding.' ),
	array( 'Do plans cover WooCommerce and online stores?', 'Yes. Our Pro / Agency plan includes WooCommerce support: keeping checkout, payment gateways and extensions current, and the store fast and stable during high-traffic periods.' ),
	array( 'What if I need more than my plan includes?', 'Any work beyond your plan is quoted upfront at a fair rate, or you upgrade to a higher tier if it is a recurring need. You are never surprised by a bill.' ),
	array( 'Do you offer custom or enterprise plans?', 'Yes. For large, high-traffic or complex sites with specific requirements, we build a custom plan around your needs and SLAs. Book a call and we will scope it.' ),
	array( 'Can I change or cancel my plan?', 'Any time. Everything is month to month with no lock-in contracts. Upgrade, downgrade or cancel whenever you need; changes take effect at your next billing cycle.' ),
	array( 'Do plans include emergency support?', 'Yes. If your site goes down, gets hacked or breaks, higher plans include priority and same-day response, and our monitoring often catches issues before you notice them.' ),
	array( 'What happens if my site gets hacked while on a plan?', 'We clean the infection, remove backdoors, restore a clean version from backup where needed, and close the hole that let it in, at no extra cost on your plan. This alone often pays for a year of maintenance.' ),
	array( 'Do plans include content edits or developer time?', 'Growth includes two hours of edits and dev work per month; Pro includes unlimited small edits. Essential is focused on protection and monitoring rather than ongoing edits.' ),
	array( 'Can agencies get a white-label plan?', 'Yes. Our Pro / Agency plan includes white-label monthly reports so you can maintain client sites under your own brand while we do the work behind the scenes.' ),
	array( 'How do I get started with a plan?', 'Send us your URL for a free site audit, pick the plan that fits, give us secure access, and we take over within 24 hours. No long forms, no pressure.' ),
	array( 'Is a website maintenance plan worth it?', 'For any site that earns money, yes. One hack cleanup, a day of downtime, or a slow slide down the rankings usually costs more than a year of a plan. Maintenance is insurance that also improves the site by keeping it fast.' ),
	array( 'What platforms do your plans support?', 'We specialise in WordPress and WooCommerce, and support every major host including Kinsta, WP Engine, Cloudways, SiteGround and Bluehost. Focused expertise means we catch problems a maintain-anything provider misses.' ),
);

include get_theme_file_path( 'parts/head.php' );
include get_theme_file_path( 'parts/site-header.php' );
?>
<style>
.fp .pl-hero{padding:56px 0 30px;position:relative;overflow:hidden;background:linear-gradient(180deg,var(--accent-soft),transparent)}
.fp .pl-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(50% 60% at 88% 0%,rgba(14,159,110,.12),transparent 60%);pointer-events:none}
.fp .pl-hero h1{max-width:18ch;position:relative}
.fp .pl-lead{max-width:60ch;color:var(--muted);font-size:1.16rem;margin-top:16px;position:relative}
.fp .pl-meta{display:flex;gap:16px;flex-wrap:wrap;margin-top:18px;color:var(--muted);font-size:.9rem;font-weight:600;position:relative}
.fp .pl-meta span{display:inline-flex;align-items:center;gap:7px}.fp .pl-meta svg{width:15px;height:15px;color:var(--accent-deep)}
.fp .cg{max-width:920px;margin:0 auto}
.fp .cg h2{font-size:clamp(1.6rem,3vw,2.1rem);margin:8px 0 12px}
.fp .cg h3{font-size:1.25rem;margin:26px 0 8px}
.fp .cg p{color:#232a33;margin:0 0 16px}
.fp .cg a.ilink{color:var(--accent-deep);font-weight:600;text-decoration:underline;text-decoration-color:rgba(14,159,110,.4);text-underline-offset:3px}
.fp .tldr{background:var(--surface);border:1px solid var(--line);border-left:4px solid var(--accent);border-radius:14px;padding:26px 28px;box-shadow:var(--shadow);margin:0 auto;max-width:920px}
.fp .tldr h2{font-size:1.2rem;margin-bottom:10px}
/* plan cards */
.fp .plans3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin:26px 0}
.fp .plan{background:var(--surface);border:1px solid var(--line);border-radius:18px;padding:28px;display:flex;flex-direction:column}
.fp .plan.pop{background:var(--ink);color:#fff;box-shadow:0 20px 50px rgba(16,20,26,.2);position:relative}
.fp .plan .badge{position:absolute;top:-13px;left:50%;transform:translateX(-50%);background:var(--accent);color:#fff;font-size:.72rem;font-weight:800;letter-spacing:.08em;text-transform:uppercase;padding:5px 14px;border-radius:99px}
.fp .plan h3{font-size:1.2rem;margin:0}
.fp .plan .blurb{color:var(--muted);font-size:.92rem;margin:6px 0 14px;min-height:44px}
.fp .plan.pop .blurb{color:#aeb8c2}
.fp .plan .amt{font-family:var(--display);font-weight:800;font-size:2.4rem;line-height:1}
.fp .plan .amt small{font-size:1rem;color:var(--muted);font-weight:600}
.fp .plan.pop .amt small{color:#aeb8c2}
.fp .plan ul{list-style:none;padding:0;margin:18px 0 22px;display:grid;gap:9px}
.fp .plan li{display:flex;gap:9px;font-size:.93rem;align-items:flex-start}
.fp .plan li svg{width:16px;height:16px;color:var(--accent);flex:0 0 16px;margin-top:3px}
.fp .plan.pop li svg{color:#3fd9a3}
.fp .plan .btn{margin-top:auto;justify-content:center}
/* feature matrix */
.fp .mx-wrap{overflow-x:auto;border:1px solid var(--line);border-radius:14px;margin:18px 0}
.fp table.mx{width:100%;border-collapse:collapse;font-size:.94rem;min-width:600px}
.fp .mx th,.fp .mx td{padding:13px 16px;text-align:left;border-bottom:1px solid var(--line)}
.fp .mx thead th{background:var(--ink);color:#fff;font-family:var(--display);font-weight:700;font-size:.88rem;text-align:center}
.fp .mx thead th:first-child{text-align:left}
.fp .mx td:first-child{font-weight:700}
.fp .mx td:not(:first-child){text-align:center}
.fp .mx tbody tr:nth-child(even){background:#fbfbf7}
.fp .mx .y{color:var(--accent-deep);font-weight:800}
.fp .mx .n{color:#b9c0c8}
/* generic table */
.fp .tbl-wrap{overflow-x:auto;border:1px solid var(--line);border-radius:14px;margin:18px 0}
.fp table.cg-tbl{width:100%;border-collapse:collapse;font-size:.95rem;min-width:520px}
.fp .cg-tbl th,.fp .cg-tbl td{text-align:left;padding:13px 16px;border-bottom:1px solid var(--line)}
.fp .cg-tbl thead th{background:var(--ink);color:#fff;font-family:var(--display);font-weight:700;font-size:.9rem}
.fp .cg-tbl tbody tr:nth-child(even){background:#fbfbf7}
.fp .cg-tbl td:first-child{font-weight:700}
.fp .cg-tbl .price{color:var(--accent-deep);font-weight:800;white-space:nowrap}
/* included cards */
.fp .inc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin:18px 0}
.fp .inc{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:20px}
.fp .inc .ic{width:42px;height:42px;border-radius:11px;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center;margin-bottom:12px}
.fp .inc h3{font-size:1.03rem;margin:0 0 6px}.fp .inc p{font-size:.92rem;color:var(--muted);margin:0}
/* example plan */
.fp .example{background:var(--surface);border:1px solid var(--line);border-radius:18px;box-shadow:var(--shadow);padding:26px;margin:18px 0}
.fp .example h3{margin:0 0 4px}.fp .example .sub{color:var(--muted);font-size:.92rem;margin-bottom:16px}
.fp .example ul{list-style:none;padding:0;margin:0}
.fp .example li{display:flex;gap:11px;padding:9px 0;border-bottom:1px dashed var(--line);font-size:.95rem;align-items:flex-start}
.fp .example li:last-child{border-bottom:0}
.fp .example li svg{width:17px;height:17px;color:var(--accent);flex:0 0 17px;margin-top:3px}
/* checklist */
.fp .check-cols{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin:18px 0}
.fp .check-col{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:20px}
.fp .check-col h3{font-size:1rem;margin:0 0 12px;color:var(--accent-deep)}
.fp .check-col ul{list-style:none;margin:0;padding:0}
.fp .check-col li{font-size:.9rem;color:#232a33;padding:7px 0 7px 20px;position:relative;border-bottom:1px solid var(--line)}
.fp .check-col li:last-child{border-bottom:0}
.fp .check-col li::before{content:"";position:absolute;left:0;top:12px;width:9px;height:9px;border-radius:3px;background:var(--accent-soft);border:1px solid var(--accent)}
/* trust */
.fp .trust-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin:18px 0}
.fp .trust{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:22px;text-align:center}
.fp .trust .ic{width:44px;height:44px;border-radius:12px;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center;margin:0 auto 12px}
.fp .trust b{font-family:var(--display);display:block;margin-bottom:4px}
.fp .trust p{font-size:.88rem;color:var(--muted);margin:0}
/* faq + author + cta (shared look) */
.fp .cg-faq details{background:var(--surface);border:1px solid var(--line);border-radius:12px;padding:0 22px;margin-bottom:10px}
.fp .cg-faq summary{list-style:none;cursor:pointer;font-family:var(--display);font-weight:700;font-size:1.03rem;padding:17px 0;display:flex;justify-content:space-between;gap:16px;align-items:center}
.fp .cg-faq summary::-webkit-details-marker{display:none}
.fp .cg-faq summary::after{content:"+";color:var(--accent-deep);font-size:1.3rem}
.fp .cg-faq details[open] summary::after{content:"\2013"}
.fp .cg-faq details p{color:var(--muted);padding:0 0 18px;margin:0}
.fp .cg-author{display:flex;gap:20px;align-items:flex-start;background:var(--surface);border:1px solid var(--line);border-radius:16px;box-shadow:var(--shadow);padding:26px;max-width:820px;margin:0 auto}
.fp .cg-author img,.fp .cg-author .ph{flex:0 0 88px;width:88px;height:88px;border-radius:14px;object-fit:cover;border:1px solid var(--line)}
.fp .cg-author .ph{display:grid;place-items:center;background:var(--accent-soft);color:var(--accent-deep)}
.fp .cg-author .k{font-size:.76rem;font-weight:800;letter-spacing:.08em;text-transform:uppercase;color:var(--accent-deep)}
.fp .cg-author h3{font-size:1.2rem;margin:6px 0 2px}.fp .cg-author .role{color:var(--accent-deep);font-weight:600;font-size:.9rem;margin:0 0 8px}
.fp .cg-author p{font-size:.95rem;color:var(--muted);margin:0 0 10px}.fp .cg-author a{color:var(--accent-deep);font-weight:700;font-size:.9rem;margin-right:14px}
.fp .cg-cta{background:var(--ink);color:#fff;text-align:center}
.fp .cg-cta h2{color:#fff;max-width:22ch;margin:0 auto 12px}.fp .cg-cta p{color:#aeb8c2;max-width:54ch;margin:0 auto 24px}
.fp .toc{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:20px 24px;margin:24px auto 0;max-width:920px}
.fp .toc b{font-family:var(--display)}.fp .toc-list{display:flex;flex-wrap:wrap;gap:8px 18px;margin-top:10px}
.fp .toc-list a{color:var(--accent-deep);font-weight:600;font-size:.92rem}
@media(max-width:820px){.fp .plans3,.fp .inc-grid,.fp .check-cols,.fp .trust-grid{grid-template-columns:1fr}.fp .cg-author{flex-direction:column;align-items:center;text-align:center}.fp .plan.pop{order:-1}}
@media(max-width:520px){.fp .trust-grid,.fp .check-cols{grid-template-columns:1fr}}
</style>

<section class="pl-hero">
	<div class="wrap">
		<nav class="crumbs" aria-label="Breadcrumb" style="position:relative"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>Website Maintenance Plans</nav>
		<span class="eyebrow" style="position:relative">Plans &amp; pricing</span>
		<h1>Website Maintenance Plans</h1>
		<p class="pl-lead">Flat monthly plans that keep your website secure, fast and online, handled by real WordPress developers. Compare what each plan includes, see exactly what a month looks like, and pick the one that fits your site. No contracts, cancel anytime.</p>
		<div class="pl-meta">
			<span><?php echo fp_icon( 'user' ); ?>By Bhupesh Rathore, ThinkFlow Media</span>
			<span><?php echo fp_icon( 'clock' ); ?>Updated <?php echo esc_html( date( 'F Y' ) ); ?></span>
			<span><?php echo fp_icon( 'check' ); ?>No lock-in contracts</span>
		</div>
	</div>
</section>

<section style="padding:34px 0 0">
	<div class="wrap">
		<div class="tldr">
			<h2>In short</h2>
			<p>A <strong>website maintenance plan</strong> is a fixed monthly service that keeps your site updated, secure, backed up, fast and working, so you never have to think about the technical side. Ours run from <strong>$59/mo</strong> for small sites to <strong>$249/mo</strong> for stores and agencies, with no contracts. Not sure what a plan should cost in general? See our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-cost/' ) ); ?>">website maintenance cost guide</a>.</p>
		</div>
		<div class="toc">
			<b>On this page</b>
			<div class="toc-list">
				<a href="#plans">Compare plans</a>
				<a href="#matrix">Feature matrix</a>
				<a href="#included">What's included</a>
				<a href="#example">Plan example</a>
				<a href="#recommend">Which plan?</a>
				<a href="#monthly-annual">Monthly vs annual</a>
				<a href="#diy">DIY vs a plan</a>
				<a href="#checklist">Monthly checklist</a>
				<a href="#faq">FAQ</a>
			</div>
		</div>
	</div>
</section>

<section id="plans" style="padding-top:44px">
	<div class="wrap cg">
		<span class="eyebrow">Choose your plan</span>
		<h2>Our website maintenance plans</h2>
		<p>Three plans, no hidden fees, no lock-in. Every plan puts a real WordPress developer on your side for less than the cost of a single emergency call-out.</p>
	</div>
	<div class="wrap" style="max-width:1080px">
		<div class="plans3">
			<div class="plan">
				<h3>Essential Care</h3>
				<p class="blurb">The safety net for small sites that need to stay updated, secure and online.</p>
				<div class="amt">$59<small>/mo</small></div>
				<ul>
					<li><?php echo fp_icon( 'check' ); ?>Weekly core, theme &amp; plugin updates</li>
					<li><?php echo fp_icon( 'check' ); ?>Daily off-site backups</li>
					<li><?php echo fp_icon( 'check' ); ?>24/7 uptime monitoring</li>
					<li><?php echo fp_icon( 'check' ); ?>Security hardening &amp; malware scans</li>
					<li><?php echo fp_icon( 'check' ); ?>Monthly health report</li>
					<li><?php echo fp_icon( 'check' ); ?>1 SEO blog post per month</li>
				</ul>
				<a class="btn btn-dark" href="<?php echo esc_url( $book ); ?>" target="_blank" rel="noopener">Start Essential</a>
			</div>
			<div class="plan pop">
				<span class="badge">Most popular</span>
				<h3>Growth</h3>
				<p class="blurb">Full maintenance plus speed work and real developer time every month.</p>
				<div class="amt">$129<small>/mo</small></div>
				<ul>
					<li><?php echo fp_icon( 'check' ); ?>Everything in Essential</li>
					<li><?php echo fp_icon( 'check' ); ?>Speed &amp; Core Web Vitals tuning</li>
					<li><?php echo fp_icon( 'check' ); ?>Advanced firewall + same-day malware cleanup</li>
					<li><?php echo fp_icon( 'check' ); ?>Priority support (under 4-hr response)</li>
					<li><?php echo fp_icon( 'check' ); ?>2 hours of edits / dev work monthly</li>
					<li><?php echo fp_icon( 'check' ); ?>Staging-tested updates + 2 blog posts</li>
				</ul>
				<a class="btn btn-primary" href="<?php echo esc_url( $book ); ?>" target="_blank" rel="noopener">Start Growth</a>
			</div>
			<div class="plan">
				<h3>Pro / Agency</h3>
				<p class="blurb">Hands-on care for stores, high-traffic sites and agencies at scale.</p>
				<div class="amt">$249<small>/mo</small></div>
				<ul>
					<li><?php echo fp_icon( 'check' ); ?>Everything in Growth</li>
					<li><?php echo fp_icon( 'check' ); ?>Unlimited small content edits</li>
					<li><?php echo fp_icon( 'check' ); ?>WooCommerce &amp; payment gateway support</li>
					<li><?php echo fp_icon( 'check' ); ?>Dedicated account manager</li>
					<li><?php echo fp_icon( 'check' ); ?>White-label monthly reports</li>
					<li><?php echo fp_icon( 'check' ); ?>Priority emergency support + 3 blog posts</li>
				</ul>
				<a class="btn btn-dark" href="<?php echo esc_url( $book ); ?>" target="_blank" rel="noopener">Talk to us</a>
			</div>
		</div>
		<p style="text-align:center;color:var(--muted)">Just need one thing fixed? We do one-time WordPress fixes from $99, no plan required. Prefer the full done-for-you service overview? See our <a class="ilink" href="<?php echo esc_url( home_url( '/wordpress-website-maintenance-services/' ) ); ?>">WordPress website maintenance services</a>.</p>
	</div>
</section>

<section id="matrix" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Side by side</span>
		<h2>Plan feature matrix</h2>
		<p>The exact differences between the plans, so you can see what you get at each tier without reading the fine print.</p>
		<div class="mx-wrap">
			<table class="mx">
				<thead><tr><th>Feature</th><th>Essential<br>$59</th><th>Growth<br>$129</th><th>Pro<br>$249</th></tr></thead>
				<tbody>
					<tr><td>Weekly updates (core, theme, plugins)</td><td class="y">&#10003;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>Daily off-site backups</td><td class="y">&#10003;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>24/7 uptime monitoring</td><td class="y">&#10003;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>Security hardening &amp; malware scans</td><td class="y">&#10003;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>Monthly performance report</td><td class="y">&#10003;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>Speed &amp; Core Web Vitals tuning</td><td class="n">&mdash;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>Same-day malware cleanup</td><td class="n">&mdash;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>Priority support (under 4 hrs)</td><td class="n">&mdash;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>Staging-tested updates</td><td class="n">&mdash;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>Developer / edit time</td><td class="n">&mdash;</td><td>2 hrs/mo</td><td class="y">Unlimited small</td></tr>
					<tr><td>WooCommerce / store support</td><td class="n">&mdash;</td><td class="n">&mdash;</td><td class="y">&#10003;</td></tr>
					<tr><td>Dedicated account manager</td><td class="n">&mdash;</td><td class="n">&mdash;</td><td class="y">&#10003;</td></tr>
					<tr><td>White-label reports (agencies)</td><td class="n">&mdash;</td><td class="n">&mdash;</td><td class="y">&#10003;</td></tr>
					<tr><td>SEO blog posts / month</td><td>1</td><td>2</td><td>3</td></tr>
					<tr><td>Contract</td><td class="y">None</td><td class="y">None</td><td class="y">None</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<section id="included" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">What every plan does</span>
		<h2>What's included in a website maintenance plan</h2>
		<p>Whatever tier you choose, a real maintenance plan covers six core jobs. Cheaper "plans" that only automate one or two of these are not really protecting your site.</p>
		<div class="inc-grid">
			<div class="inc"><span class="ic"><?php echo fp_icon( 'refresh' ); ?></span><h3>Updates</h3><p>Core, theme and plugin updates, backed up first and tested, so nothing breaks on update day.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'shield' ); ?></span><h3>Security</h3><p>Firewall, login protection, malware scanning and same-day cleanup if you ever get hit.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'save' ); ?></span><h3>Backups</h3><p>Automatic daily off-site backups, so any change is reversible and a server failure can't wipe you out.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'gauge' ); ?></span><h3>Speed</h3><p>Caching, image and database optimization to keep pages fast and <a class="ilink" href="https://web.dev/vitals/" target="_blank" rel="noopener">Core Web Vitals</a> healthy.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'pulse' ); ?></span><h3>Monitoring</h3><p>24/7 uptime checks that alert us the moment your site goes down, usually before a customer notices.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'wrench' ); ?></span><h3>Fixes &amp; support</h3><p>A real developer to handle edits, breakages and the dreaded white screen, not a ticket bot.</p></div>
		</div>
	</div>
</section>

<section id="example" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">A worked example</span>
		<h2>What a website maintenance plan looks like in a month</h2>
		<p>Plans can feel abstract until you see the month-to-month reality. Here is exactly what a small business on our Growth plan gets in a typical month, the kind of "website maintenance plan example" people search for before buying.</p>
		<div class="example">
			<h3>Growth plan &mdash; a typical month</h3>
			<div class="sub">Small business WordPress site, ~15 plugins, contact forms, moderate traffic</div>
			<ul>
				<li><?php echo fp_icon( 'check' ); ?>4 weekly update cycles: core, theme and plugins reviewed, backed up and tested</li>
				<li><?php echo fp_icon( 'check' ); ?>30 daily off-site backups taken and verified</li>
				<li><?php echo fp_icon( 'check' ); ?>Continuous uptime monitoring and malware scanning, with one blocked login-attack spike</li>
				<li><?php echo fp_icon( 'check' ); ?>One speed pass: caching refreshed, three oversized images optimized, database cleaned</li>
				<li><?php echo fp_icon( 'check' ); ?>2 hours of developer time used to update a services page and fix a form styling bug</li>
				<li><?php echo fp_icon( 'check' ); ?>A plain-English monthly report: what changed, what was blocked, uptime and speed scores</li>
			</ul>
		</div>
		<p>That is roughly five to seven hours of skilled work spread across the month, for $129. Doing it yourself would cost that much in your own time, without the monitoring, the backups infrastructure, or the safety net when something breaks. See how that maps to market rates in our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-cost/' ) ); ?>">cost guide</a>.</p>
	</div>
</section>

<section id="recommend" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Not sure which?</span>
		<h2>Which plan is right for your site?</h2>
		<p>Match the plan to what your site is worth and how much it does. Here is a simple guide by site type.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>Your site</th><th>Best plan</th><th>Why</th></tr></thead>
				<tbody>
					<tr><td>Personal / brochure site</td><td class="price">Essential</td><td>Needs protection and uptime, not ongoing dev time</td></tr>
					<tr><td>Small business (leads/forms)</td><td class="price">Essential &rarr; Growth</td><td>Growth if you want speed work and monthly edits</td></tr>
					<tr><td>Blog / content site</td><td class="price">Growth</td><td>Speed and regular edits matter for SEO traffic</td></tr>
					<tr><td>WooCommerce / store</td><td class="price">Pro</td><td>Store support and fast response protect sales</td></tr>
					<tr><td>High-traffic / SaaS</td><td class="price">Pro or custom</td><td>Complexity and uptime stakes justify hands-on care</td></tr>
					<tr><td>Agency (many client sites)</td><td class="price">Pro / Agency</td><td>White-label reports and volume-friendly care</td></tr>
				</tbody>
			</table>
		</div>
		<p>Still unsure? Send your URL for a free audit and we'll recommend the honest fit, even if it's the cheapest plan.</p>
	</div>
</section>

<section id="monthly-annual" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">How you pay</span>
		<h2>Monthly vs annual plans</h2>
		<p>The coverage is identical either way; the choice is about flexibility versus a discount.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th></th><th>Monthly</th><th>Annual</th></tr></thead>
				<tbody>
					<tr><td>Price</td><td class="price">Standard</td><td class="price">10&ndash;20% off</td></tr>
					<tr><td>Commitment</td><td>Month to month</td><td>One year, prepaid</td></tr>
					<tr><td>Flexibility</td><td>Cancel anytime</td><td>Best if you're committed</td></tr>
					<tr><td>Best for</td><td>Trying us out, cash-flow flexibility</td><td>Established sites, lowest total cost</td></tr>
				</tbody>
			</table>
		</div>
		<p>We keep every plan month to month by default, no lock-in, so you can start on monthly and switch to annual once you see the value.</p>
	</div>
</section>

<section id="diy" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Plan vs no plan</span>
		<h2>DIY vs a managed maintenance plan</h2>
		<p>You can maintain a site yourself. The question is whether it's cheaper once you count your time and the risk.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>What you get</th><th>Managed plan</th><th>DIY</th></tr></thead>
				<tbody>
					<tr><td>Weekly tested updates</td><td class="price">Included</td><td>Your time, ~5 hrs/mo</td></tr>
					<tr><td>Daily off-site backups</td><td class="price">Included</td><td>Plugin + setup + checks</td></tr>
					<tr><td>24/7 monitoring</td><td class="price">Included</td><td>Rarely set up properly</td></tr>
					<tr><td>Same-day fix when it breaks</td><td class="price">Included</td><td>Panic + paid emergency</td></tr>
					<tr><td>Real cost</td><td class="price">From $59/mo</td><td>$250&ndash;$500/mo of your time</td></tr>
				</tbody>
			</table>
		</div>
		<p>For a low-stakes personal site, DIY is fine. For a site that earns money, a plan usually costs less than your own hours and removes the risk entirely.</p>
	</div>
</section>

<section id="checklist" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">The work behind the plan</span>
		<h2>What your plan does, and when</h2>
		<p>A real plan runs on a schedule, not on "when we remember." This is the rhythm every plan follows.</p>
		<div class="check-cols">
			<div class="check-col"><h3>Weekly</h3><ul><li>Review &amp; apply updates</li><li>Back up first</li><li>Test after updating</li><li>Verify backups ran</li></ul></div>
			<div class="check-col"><h3>Continuous</h3><ul><li>Uptime monitoring</li><li>Firewall &amp; login defense</li><li>Malware scanning</li><li>Break alerts</li></ul></div>
			<div class="check-col"><h3>Monthly</h3><ul><li>Speed &amp; CWV check</li><li>Database cleanup</li><li>Broken-link review</li><li>Plain-English report</li></ul></div>
			<div class="check-col"><h3>Quarterly</h3><ul><li>Deep security audit</li><li>Remove unused plugins</li><li>Licence &amp; domain checks</li><li>Backup strategy review</li></ul></div>
		</div>
	</div>
</section>

<section style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Why us</span>
		<h2>Why choose our maintenance plans</h2>
		<div class="trust-grid">
			<div class="trust"><span class="ic"><?php echo fp_icon( 'shield' ); ?></span><b>WordPress specialists</b><p>We work on WordPress and WooCommerce only, so we catch what generalists miss.</p></div>
			<div class="trust"><span class="ic"><?php echo fp_icon( 'check' ); ?></span><b>No contracts</b><p>Month to month, cancel anytime. We earn your business every month.</p></div>
			<div class="trust"><span class="ic"><?php echo fp_icon( 'clock' ); ?></span><b>Fast response</b><p>Priority and same-day support on higher plans, with monitoring that catches issues first.</p></div>
			<div class="trust"><span class="ic"><?php echo fp_icon( 'user' ); ?></span><b>Real developers</b><p>A human who knows your site handles fixes, not a ticket queue or a bot.</p></div>
		</div>
		<div class="callout" style="background:var(--ink);color:#fff;border-radius:16px;padding:26px;margin-top:8px;text-align:center">
			<b style="font-family:var(--display);font-size:1.2rem;color:#fff">Our promise: if we break it, we fix it. Same day. No charge.</b>
			<p style="color:#aeb8c2;margin:10px auto 0;max-width:52ch">Every update is backed up and tested. If anything goes wrong on our watch, we roll it back and make it right at no cost, every plan, every time.</p>
		</div>
	</div>
</section>

<section id="faq" style="padding-top:20px" class="cg-faq">
	<div class="wrap cg">
		<span class="eyebrow">Answers</span>
		<h2>Website maintenance plan FAQ</h2>
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
				<span class="ph"><?php echo fp_icon( 'user' ); ?></span>
			<?php endif; ?>
			<div>
				<span class="k">Written &amp; reviewed by</span>
				<h3>Bhupesh Rathore</h3>
				<p class="role">Founder, ThinkFlow Media &amp; Linkflow.agency &middot; 8+ years in WordPress &amp; SEO</p>
				<p>These plans reflect years of maintaining real WordPress sites across business, ecommerce and content niches, structured around the six jobs every live site actually needs.</p>
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
		<h2>Ready to stop worrying about your website?</h2>
		<p>Send us your URL for a free health, security and speed audit, and we'll recommend the plan that actually fits, even if it's the cheapest one.</p>
		<a class="btn btn-primary" href="<?php echo esc_url( $book ); ?>" target="_blank" rel="noopener"><?php echo fp_icon( 'cal' ); ?>Get a free site audit</a>
	</div>
</section>

<script type="application/ld+json">
<?php
$page_url = home_url( '/website-maintenance-plans/' );
$ld = array(
	'@context' => 'https://schema.org',
	'@graph'   => array(
		array(
			'@type'       => 'Service',
			'serviceType' => 'Website Maintenance Plans',
			'name'        => 'Website Maintenance Plans',
			'url'         => $page_url,
			'description' => $wpmp_seo['desc'],
			'provider'    => array( '@type' => 'Organization', 'name' => $c['brand'], 'url' => home_url( '/' ), 'email' => $c['email'] ),
			'areaServed'  => array( '@type' => 'Country', 'name' => 'United States' ),
			'author'      => array( '@type' => 'Person', 'name' => 'Bhupesh Rathore', 'url' => home_url( '/author-profile/' ), 'sameAs' => array( $c['linkedin'], $c['x'] ) ),
			'hasOfferCatalog' => array(
				'@type' => 'OfferCatalog',
				'name'  => 'Website Maintenance Plans',
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
				array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Website Maintenance Plans', 'item' => $page_url ),
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
