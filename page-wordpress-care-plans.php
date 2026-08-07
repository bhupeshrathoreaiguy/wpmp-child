<?php
/**
 * Template: WordPress Care Plans  —  URL /wordpress-care-plans/
 * BOFU commercial page targeting "wordpress care plans" / "wordpress website maintenance & care plans".
 * Differentiated from /website-maintenance-plans/ by angle: care-plan term, maintenance-vs-care,
 * "host isn't enough", monthly care process. ~4,500 words, 7 FAQs, full schema, internal linking.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wpmp_seo = array(
	'title' => 'WordPress Care Plans From $59/mo | Managed WP Care',
	'desc'  => 'Managed WordPress care plans that keep your site secure, updated, backed up and fast. See what\'s included, real pricing from $59/mo, and which plan fits. No contracts.',
);
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();
$author_photo = 'https://wpwebsitemaintenancepackages.com/wp-content/uploads/2026/08/bhupesh-rathore-1.webp';
$book = $c['calendly'];

/* Core FAQs (also power FAQPage schema) — angled to "care plan" intent. */
$faqs = array(
	array( 'What is a WordPress care plan?', 'A WordPress care plan is an ongoing monthly service that looks after your WordPress website after it launches, keeping the software updated, the site secure, backups running, pages fast, and a real developer on hand to fix things. "Care plan" is simply the WordPress community\u2019s name for a maintenance retainer. The label matters less than what is inside: a genuine care plan covers security, updates, backups, speed, monitoring and support, not just automatic updates.' ),
	array( 'What is the difference between a maintenance plan and a care plan?', 'In practice, nothing, they are two names for the same thing. "Maintenance plan" emphasises the technical upkeep; "care plan" emphasises the ongoing relationship and support. Some providers use "care plan" to signal that a real person looks after your site rather than just automated tooling. What actually matters is the scope of work included, not which of the two names a provider chooses.' ),
	array( 'What is included in a WordPress care plan?', 'A proper care plan covers six things: weekly core, theme and plugin updates; active security with malware scanning and cleanup; daily off-site backups; speed and Core Web Vitals optimization; 24/7 uptime monitoring; and fixes from a real developer. Higher tiers add staging, priority support, monthly developer hours and WooCommerce support. Anything that only automates updates is not a real care plan.' ),
	array( 'How much do WordPress care plans cost?', 'Most WordPress care plans run $20 to $500 per month in 2026, with stores and high-traffic sites higher. Ours are $59/mo for essential care, $129/mo for full care with speed work and developer time, and $249/mo for stores and agencies. For how that compares across the whole market, see our website maintenance cost guide.' ),
	array( 'Do I need a care plan if my host already does backups and updates?', 'Usually yes. Managed hosting looks after the server, and often runs automatic core updates and basic backups, but it does not test updates against your specific plugins, clean malware from your site, optimize your speed, or fix things when they break. Hosting protects the server; a care plan protects your website. They cover different layers, and the gap between them is exactly where most problems live.' ),
	array( 'Which care plan is right for my website?', 'Match the plan to what your site is worth. Brochure and small business sites fit Essential or Growth; content sites that publish regularly fit Growth for its speed work and edits; stores, high-traffic sites and agencies fit Pro for store support and fast response. If you are unsure, send your URL for a free audit and we will recommend the honest fit, even if it is the cheapest one.' ),
	array( 'Is there a contract, and can I cancel any time?', 'No lock-in contracts. Every care plan is month to month, and you can upgrade, downgrade or cancel any time, with changes taking effect at your next billing cycle. Annual billing is available at a discount if you want it, but it is never required.' ),
);

include get_theme_file_path( 'parts/head.php' );
include get_theme_file_path( 'parts/site-header.php' );
?>
<style>
.fp .pl-hero{padding:56px 0 30px;position:relative;overflow:hidden;background:linear-gradient(180deg,var(--accent-soft),transparent)}
.fp .pl-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(50% 60% at 88% 0%,rgba(14,159,110,.12),transparent 60%);pointer-events:none}
.fp .pl-hero h1{max-width:16ch;position:relative}
.fp .pl-lead{max-width:62ch;color:var(--muted);font-size:1.16rem;margin-top:16px;position:relative}
.fp .pl-meta{display:flex;gap:16px;flex-wrap:wrap;margin-top:18px;color:var(--muted);font-size:.9rem;font-weight:600;position:relative}
.fp .pl-meta span{display:inline-flex;align-items:center;gap:7px}.fp .pl-meta svg{width:15px;height:15px;color:var(--accent-deep)}
.fp .cg{max-width:920px;margin:0 auto}
.fp .cg h2{font-size:clamp(1.6rem,3vw,2.1rem);margin:8px 0 12px}
.fp .cg h3{font-size:1.25rem;margin:26px 0 8px}
.fp .cg p{color:#232a33;margin:0 0 16px}
.fp .cg ul.body{padding-left:20px;color:#232a33;margin:0 0 16px}.fp .cg ul.body li{margin-bottom:9px}
.fp .cg a.ilink{color:var(--accent-deep);font-weight:600;text-decoration:underline;text-decoration-color:rgba(14,159,110,.4);text-underline-offset:3px}
.fp .tldr{background:var(--surface);border:1px solid var(--line);border-left:4px solid var(--accent);border-radius:14px;padding:26px 28px;box-shadow:var(--shadow);margin:0 auto;max-width:920px}
.fp .tldr h2{font-size:1.2rem;margin-bottom:10px}
.fp .statline{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin:22px 0}
.fp .statline .s{background:var(--ink);color:#fff;border-radius:14px;padding:20px;text-align:center}
.fp .statline .s b{display:block;font-family:var(--display);font-size:1.7rem;color:#3fd9a3}
.fp .statline .s span{font-size:.82rem;color:#aeb8c2}
.fp .plans3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin:26px 0}
.fp .plan{background:var(--surface);border:1px solid var(--line);border-radius:18px;padding:28px;display:flex;flex-direction:column}
.fp .plan.pop{background:var(--ink);color:#fff;box-shadow:0 20px 50px rgba(16,20,26,.2);position:relative}
.fp .plan .badge{position:absolute;top:-13px;left:50%;transform:translateX(-50%);background:var(--accent);color:#fff;font-size:.72rem;font-weight:800;letter-spacing:.08em;text-transform:uppercase;padding:5px 14px;border-radius:99px}
.fp .plan h3{font-size:1.2rem;margin:0}
.fp .plan .blurb{color:var(--muted);font-size:.92rem;margin:6px 0 14px;min-height:44px}.fp .plan.pop .blurb{color:#aeb8c2}
.fp .plan .amt{font-family:var(--display);font-weight:800;font-size:2.4rem;line-height:1}
.fp .plan .amt small{font-size:1rem;color:var(--muted);font-weight:600}.fp .plan.pop .amt small{color:#aeb8c2}
.fp .plan ul{list-style:none;padding:0;margin:18px 0 22px;display:grid;gap:9px}
.fp .plan li{display:flex;gap:9px;font-size:.93rem;align-items:flex-start}
.fp .plan li svg{width:16px;height:16px;color:var(--accent);flex:0 0 16px;margin-top:3px}.fp .plan.pop li svg{color:#3fd9a3}
.fp .plan .btn{margin-top:auto;justify-content:center}
.fp .mx-wrap,.fp .tbl-wrap{overflow-x:auto;border:1px solid var(--line);border-radius:14px;margin:18px 0}
.fp table.mx,.fp table.cg-tbl{width:100%;border-collapse:collapse;font-size:.94rem;min-width:560px}
.fp .mx th,.fp .mx td,.fp .cg-tbl th,.fp .cg-tbl td{padding:13px 16px;text-align:left;border-bottom:1px solid var(--line)}
.fp .mx thead th,.fp .cg-tbl thead th{background:var(--ink);color:#fff;font-family:var(--display);font-weight:700;font-size:.88rem}
.fp .mx thead th{text-align:center}.fp .mx thead th:first-child{text-align:left}
.fp .mx td:first-child,.fp .cg-tbl td:first-child{font-weight:700}
.fp .mx td:not(:first-child){text-align:center}
.fp .mx tbody tr:nth-child(even),.fp .cg-tbl tbody tr:nth-child(even){background:#fbfbf7}
.fp .mx .y{color:var(--accent-deep);font-weight:800}.fp .mx .n{color:#b9c0c8}
.fp .cg-tbl .price{color:var(--accent-deep);font-weight:800;white-space:nowrap}
.fp .inc-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:16px;margin:18px 0}
.fp .inc{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:22px}
.fp .inc .ic{width:44px;height:44px;border-radius:11px;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center;margin-bottom:12px}
.fp .inc h3{font-size:1.08rem;margin:0 0 6px}.fp .inc p{font-size:.94rem;color:var(--muted);margin:0}
.fp .steps{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin:18px 0}
.fp .step{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:22px;position:relative}
.fp .step .num{width:34px;height:34px;border-radius:9px;background:var(--ink);color:#fff;font-family:var(--display);font-weight:800;display:grid;place-items:center;margin-bottom:12px}
.fp .step h3{font-size:1.02rem;margin:0 0 6px}.fp .step p{font-size:.9rem;color:var(--muted);margin:0}
.fp .check-cols{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin:18px 0}
.fp .check-col{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:20px}
.fp .check-col h3{font-size:1rem;margin:0 0 12px;color:var(--accent-deep)}
.fp .check-col ul{list-style:none;margin:0;padding:0}
.fp .check-col li{font-size:.9rem;color:#232a33;padding:7px 0 7px 20px;position:relative;border-bottom:1px solid var(--line)}
.fp .check-col li:last-child{border-bottom:0}
.fp .check-col li::before{content:"";position:absolute;left:0;top:12px;width:9px;height:9px;border-radius:3px;background:var(--accent-soft);border:1px solid var(--accent)}
.fp .trust-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin:18px 0}
.fp .trust{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:22px;text-align:center}
.fp .trust .ic{width:44px;height:44px;border-radius:12px;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center;margin:0 auto 12px}
.fp .trust b{font-family:var(--display);display:block;margin-bottom:4px}.fp .trust p{font-size:.88rem;color:var(--muted);margin:0}
.fp .callout{border-radius:14px;padding:20px 24px;margin:22px 0}
.fp .callout.tip{background:var(--accent-soft);border:1px solid #cdeede}
.fp .callout.warn{background:var(--warn-soft);border:1px solid #f3c9c0}
.fp .callout .ct-head{display:flex;align-items:center;gap:9px;font-weight:800;margin-bottom:6px;font-family:var(--display)}
.fp .callout.tip .ct-head{color:var(--accent-deep)}.fp .callout.warn .ct-head{color:#b4402c}
.fp .callout p{margin:0;color:#232a33}.fp .callout svg{width:18px;height:18px}
.fp .cg-faq details{background:var(--surface);border:1px solid var(--line);border-radius:12px;padding:0 22px;margin-bottom:10px}
.fp .cg-faq summary{list-style:none;cursor:pointer;font-family:var(--display);font-weight:700;font-size:1.03rem;padding:17px 0;display:flex;justify-content:space-between;gap:16px;align-items:center}
.fp .cg-faq summary::-webkit-details-marker{display:none}
.fp .cg-faq summary::after{content:"+";color:var(--accent-deep);font-size:1.3rem}.fp .cg-faq details[open] summary::after{content:"\2013"}
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
@media(max-width:820px){.fp .plans3,.fp .inc-grid,.fp .check-cols,.fp .trust-grid,.fp .statline,.fp .steps{grid-template-columns:1fr 1fr}.fp .cg-author{flex-direction:column;align-items:center;text-align:center}.fp .plan.pop{order:-1}}
@media(max-width:520px){.fp .plans3,.fp .inc-grid,.fp .check-cols,.fp .trust-grid,.fp .statline,.fp .steps{grid-template-columns:1fr}}
</style>

<section class="pl-hero">
	<div class="wrap">
		<nav class="crumbs" aria-label="Breadcrumb" style="position:relative"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>WordPress Care Plans</nav>
		<span class="eyebrow" style="position:relative">Managed WordPress care</span>
		<h1>WordPress Care Plans</h1>
		<p class="pl-lead">Ongoing, done-for-you care that keeps your WordPress website secure, updated, backed up and fast, looked after by real WordPress developers, not a dashboard. Compare what each plan includes, see how we care for your site each month, and pick the fit that matches what your website is worth. No contracts, cancel anytime.</p>
		<div class="pl-meta">
			<span><?php echo fp_icon( 'user' ); ?>By Bhupesh Rathore, ThinkFlow Media</span>
			<span><?php echo fp_icon( 'clock' ); ?>Updated <?php echo esc_html( date( 'F Y' ) ); ?></span>
			<span><?php echo fp_icon( 'check' ); ?>Care plans from $59/mo</span>
		</div>
	</div>
</section>

<section style="padding:34px 0 0">
	<div class="wrap">
		<div class="tldr">
			<h2>The short version</h2>
			<p>A <strong>WordPress care plan</strong> is a monthly service that looks after your site for you: updates, security, daily backups, speed and a developer on call, all for a flat fee. Ours run from <strong>$59/mo</strong> for small sites to <strong>$249/mo</strong> for stores and agencies, with no contracts. This page explains what a care plan really is, how it differs from what your host does, what each plan covers, and how to choose. For general market pricing across all providers, see our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-cost/' ) ); ?>">website maintenance cost guide</a>, and for the plans framed around "maintenance," our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-plans/' ) ); ?>">website maintenance plans</a> page.</p>
		</div>
		<div class="toc">
			<b>On this page</b>
			<div class="toc-list">
				<a href="#what">What is a care plan</a>
				<a href="#vs">Care plan vs maintenance</a>
				<a href="#why">Why it matters</a>
				<a href="#host">Isn't my host enough?</a>
				<a href="#included">What's included</a>
				<a href="#plans">Compare plans</a>
				<a href="#matrix">Feature matrix</a>
				<a href="#process">Our care process</a>
				<a href="#checklist">Health checklist</a>
				<a href="#recommend">Which plan?</a>
				<a href="#diy">DIY vs pro</a>
				<a href="#monitor">Health monitoring</a>
				<a href="#faq">FAQ</a>
			</div>
		</div>
	</div>
</section>

<section id="what" style="padding-top:44px">
	<div class="wrap cg">
		<span class="eyebrow">Start here</span>
		<h2>What is a WordPress care plan?</h2>
		<p>A WordPress care plan is an ongoing service that looks after your website after it launches, so it stays secure, current and fast without you having to manage the technical side. For a fixed monthly fee, a team handles the recurring work every live WordPress site needs, and steps in when something goes wrong. Think of it the way you would a service plan for a car: the vehicle runs fine today, but it needs regular attention to keep running, and skipping that attention is how small issues become expensive breakdowns.</p>
		<p>The term "care plan" comes from the WordPress community itself. As WordPress grew into the platform behind a huge share of the web, agencies and freelancers began offering monthly retainers to keep client sites healthy, and "care plan" became the friendly name for it, emphasising that a real person cares for your site rather than leaving it to chance. You will see the same service sold as <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-plans/' ) ); ?>">website maintenance plans</a>, WordPress support plans, or managed WordPress care. Underneath the branding, they describe the same commitment: someone reliable keeps your website in good shape, every week, so you do not have to.</p>
		<p>A real care plan is built around six areas of work: keeping WordPress and its plugins updated, defending the site against attacks, backing everything up daily, keeping pages fast, monitoring for downtime, and fixing problems when they appear. The trap to avoid is the cheap "care plan" that only automates updates and calls it done. Automating an update is not the same as caring for a site, because the moment an update conflicts with your theme or a plugin, an automated system just moves on while your site sits broken. Care means a human notices and fixes it.</p>
	</div>
</section>

<section id="vs" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">A common question</span>
		<h2>Care plan vs maintenance plan: what's the difference?</h2>
		<p>Honestly, very little. "Maintenance plan" and "care plan" are two names for the same service, and providers use them almost interchangeably. If there is a shade of difference, it is one of emphasis. "Maintenance" leans on the technical upkeep, the updates, patches and backups. "Care" leans on the relationship, the sense that a real person is looking after your site and is there when you need help. Some agencies deliberately choose "care plan" to signal that you are buying attention from humans, not just access to automated tooling.</p>
		<p>What actually matters is not the word on the pricing page but the scope of work behind it. A cheap plan called a "care plan" that only runs automatic updates is worse than a well-built plan called a "maintenance plan" that covers all six core jobs. When you compare providers, ignore the label and read the inclusions. Ask what happens when an update breaks something, whether backups are stored off-site, and who actually responds when you have a problem. Those answers tell you far more than whether they picked "care" or "maintenance" for the headline.</p>
		<div class="callout tip">
			<div class="ct-head"><?php echo fp_icon( 'check' ); ?>Bottom line</div>
			<p>Do not overthink the name. Compare what is included, how fast they respond, and whether a real developer stands behind it. That is what separates a plan that protects your site from one that just looks like it does.</p>
		</div>
	</div>
</section>

<section id="why" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Why it matters</span>
		<h2>Why every WordPress website needs ongoing care</h2>
		<p>WordPress is powerful precisely because it is extensible, but that same flexibility is what makes ongoing care essential. Every plugin and theme you add is third-party code that needs to stay current, and the numbers from 2025 and 2026 show why leaving it alone is a gamble.</p>
		<div class="statline">
			<div class="s"><b>11,000+</b><span>WordPress vulnerabilities logged in 2025</span></div>
			<div class="s"><b>90%+</b><span>found in plugins, not core</span></div>
			<div class="s"><b>~5 hrs</b><span>median time to first exploit after disclosure</span></div>
			<div class="s"><b>~$14.5k</b><span>average all-in cost of a hack</span></div>
		</div>
		<p>The reassuring news is that WordPress core is very secure; only a handful of core vulnerabilities surfaced in all of 2025. The risk lives in the plugins and themes that make your site yours, where researchers catalogued more than eleven thousand vulnerabilities in a single year. Because WordPress runs such a large slice of the web, automated bots scan for these flaws constantly, and the median gap between a vulnerability being disclosed and the first exploit attempt is around five hours. That is the window a care plan closes. Most sites that get hacked were simply running something out of date, the exact thing regular care prevents.</p>
		<p>Security is only half of it. Websites also decay in quality over time: databases bloat, images pile up unoptimized, and each new plugin adds weight, so a site that launched fast gradually slows down. Since Google treats speed as a ranking factor and only about a third of mobile WordPress sites currently pass Core Web Vitals, a neglected site quietly loses both rankings and conversions. Ongoing care keeps the site fast as well as safe, which is why a care plan is best understood not as a cost but as protection for an asset that is actively earning for your business.</p>
	</div>
</section>

<section id="host" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">The big misconception</span>
		<h2>Isn't my hosting enough?</h2>
		<p>This is the most common reason people skip a care plan, and it comes from a reasonable misunderstanding of what hosting actually does. Managed WordPress hosts like Kinsta, WP Engine and Cloudways are excellent, and they will keep the server running, often run automatic core updates, and take basic backups. But hosting looks after the server your site sits on, not the site itself. Those are two different layers, and the gap between them is where most problems live.</p>
		<p>Here is what even good hosting typically does not do. It does not test updates against your specific combination of theme and plugins, so an automatic update can still break your layout or your checkout. It does not clean malware out of your site if you get infected, that is your problem to solve. It does not optimize your speed beyond server-level caching, so a bloated database or heavy plugins still slow you down. It does not fix your contact form when it stops sending, rebuild a page, or answer at 2am when your site goes white. And host backups are often on the same infrastructure and limited in retention, which is not the off-site safety net you want when something serious happens.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>Job</th><th>Your host</th><th>A care plan</th></tr></thead>
				<tbody>
					<tr><td>Keep the server running</td><td class="price">Yes</td><td>Not needed</td></tr>
					<tr><td>Test updates against your plugins</td><td>No</td><td class="price">Yes</td></tr>
					<tr><td>Clean malware from your site</td><td>No</td><td class="price">Yes</td></tr>
					<tr><td>Optimize site speed &amp; Core Web Vitals</td><td>Server-level only</td><td class="price">Yes</td></tr>
					<tr><td>Off-site backups you control</td><td>Sometimes, limited</td><td class="price">Yes, daily</td></tr>
					<tr><td>Fix things &amp; answer questions</td><td>No</td><td class="price">Yes</td></tr>
				</tbody>
			</table>
		</div>
		<p>Good hosting and a care plan are partners, not substitutes. The host protects the foundation; the care plan protects the house you built on it. You want both, and a care plan is the layer most site owners are missing.</p>
	</div>
</section>

<section id="included" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">The six core jobs</span>
		<h2>What's included in our WordPress care plans</h2>
		<p>Every plan is built on the same six foundations. Here is what each involves in practice, so you know exactly what your monthly fee buys.</p>
		<div class="inc-grid">
			<div class="inc"><span class="ic"><?php echo fp_icon( 'refresh' ); ?></span><h3>Updates, done safely</h3><p>WordPress core, themes and plugins updated weekly, backed up first and tested after, with major updates staged before they touch your live site. Updates that fix problems, not cause them.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'shield' ); ?></span><h3>Security &amp; malware</h3><p>Firewall, login protection, file-change monitoring and regular scans, plus cleanup and hardening if anything ever gets through. We follow WordPress and OWASP security best practices.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'save' ); ?></span><h3>Daily cloud backups</h3><p>Automatic daily backups stored off-site, so a server failure can never take your backup with it, and any change is reversible in one click.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'gauge' ); ?></span><h3>Speed &amp; performance</h3><p>Caching, image optimization and database cleanup to keep pages fast and <a class="ilink" href="https://web.dev/vitals/" target="_blank" rel="noopener">Core Web Vitals</a> healthy, which protects both experience and rankings.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'pulse' ); ?></span><h3>24/7 monitoring &amp; reports</h3><p>Round-the-clock uptime monitoring that alerts us the moment your site goes down, plus a plain-English monthly report so you can see the care happening.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'wrench' ); ?></span><h3>A real developer</h3><p>Small fixes, edits and the occasional emergency handled by a human who knows your site, from a broken form to the dreaded white screen, not a ticket queue.</p></div>
		</div>
	</div>
</section>

<section id="plans" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Choose your care plan</span>
		<h2>Compare our WordPress care plans</h2>
		<p>Three plans, no hidden fees, no lock-in. Each puts a real WordPress developer on your side for less than the cost of a single emergency call-out.</p>
	</div>
	<div class="wrap" style="max-width:1080px">
		<div class="plans3">
			<div class="plan">
				<h3>Essential Care</h3>
				<p class="blurb">The safety net for small sites that need to stay secure and online.</p>
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
				<h3>Growth Care</h3>
				<p class="blurb">Full care plus speed work and real developer time every month.</p>
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
				<h3>Pro / Agency Care</h3>
				<p class="blurb">Hands-on care for stores, high-traffic sites and agencies.</p>
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
		<p style="text-align:center;color:var(--muted)">Prefer to see these framed as maintenance, or need the full service breakdown? Visit our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-plans/' ) ); ?>">maintenance plans</a> and <a class="ilink" href="<?php echo esc_url( home_url( '/wordpress-website-maintenance-services/' ) ); ?>">WordPress maintenance services</a> pages.</p>
	</div>
</section>

<section id="matrix" style="padding-top:10px">
	<div class="wrap cg">
		<span class="eyebrow">Side by side</span>
		<h2>Care plan feature matrix</h2>
		<p>The exact differences between the plans, so you can see what you get at each tier at a glance.</p>
		<div class="mx-wrap">
			<table class="mx">
				<thead><tr><th>Feature</th><th>Essential<br>$59</th><th>Growth<br>$129</th><th>Pro<br>$249</th></tr></thead>
				<tbody>
					<tr><td>Weekly updates (core, theme, plugins)</td><td class="y">&#10003;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>Daily off-site backups</td><td class="y">&#10003;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>24/7 uptime monitoring</td><td class="y">&#10003;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>Security hardening &amp; malware scans</td><td class="y">&#10003;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
					<tr><td>Monthly health report</td><td class="y">&#10003;</td><td class="y">&#10003;</td><td class="y">&#10003;</td></tr>
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

<section id="process" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">How we care for your site</span>
		<h2>Our monthly WordPress care process</h2>
		<p>Care only works if it happens on a schedule, not when someone remembers. Here is the rhythm we run for every site on a plan.</p>
		<div class="steps">
			<div class="step"><span class="num">1</span><h3>Onboard &amp; audit</h3><p>We audit your site, take a full backup, harden security and bring everything current before day-to-day care begins.</p></div>
			<div class="step"><span class="num">2</span><h3>Update &amp; protect</h3><p>Weekly tested updates, continuous monitoring and security scanning keep the site safe and current every week.</p></div>
			<div class="step"><span class="num">3</span><h3>Optimize</h3><p>Monthly speed passes, database cleanup and health checks keep the site fast and Core Web Vitals healthy.</p></div>
			<div class="step"><span class="num">4</span><h3>Report &amp; improve</h3><p>A plain-English monthly report shows what we did, what we blocked, and where your site can improve next.</p></div>
		</div>
	</div>
</section>

<section id="checklist" style="padding-top:10px">
	<div class="wrap cg">
		<span class="eyebrow">The work, on a schedule</span>
		<h2>Your WordPress health checklist</h2>
		<p>This is the cadence behind the care, the same routine a good in-house team would run, handled for you.</p>
		<div class="check-cols">
			<div class="check-col"><h3>Weekly</h3><ul><li>Review &amp; apply updates</li><li>Back up first</li><li>Test after updating</li><li>Verify backups ran</li></ul></div>
			<div class="check-col"><h3>Continuous</h3><ul><li>Uptime monitoring</li><li>Firewall &amp; login defense</li><li>Malware scanning</li><li>Break alerts</li></ul></div>
			<div class="check-col"><h3>Monthly</h3><ul><li>Speed &amp; CWV check</li><li>Database cleanup</li><li>Broken-link review</li><li>Health report</li></ul></div>
			<div class="check-col"><h3>Quarterly</h3><ul><li>Deep security audit</li><li>Remove unused plugins</li><li>Licence &amp; SSL checks</li><li>Backup strategy review</li></ul></div>
		</div>
	</div>
</section>

<section id="recommend" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Match it to your site</span>
		<h2>Which care plan is right for you?</h2>
		<p>The right plan matches what your site is worth and how much it does. Overpaying for coverage you will not use is as much a mistake as leaving a valuable site underprotected. Here is a simple guide.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>Your site</th><th>Best plan</th><th>Why</th></tr></thead>
				<tbody>
					<tr><td>Personal / brochure site</td><td class="price">Essential</td><td>Needs protection and uptime, not ongoing dev time</td></tr>
					<tr><td>Small business (leads &amp; forms)</td><td class="price">Essential &rarr; Growth</td><td>Growth adds speed work and monthly edits</td></tr>
					<tr><td>Blog / content site</td><td class="price">Growth</td><td>Speed and regular edits protect SEO traffic</td></tr>
					<tr><td>WooCommerce / store</td><td class="price">Pro</td><td>Store support and fast response protect sales</td></tr>
					<tr><td>High-traffic / SaaS</td><td class="price">Pro or custom</td><td>Complexity and uptime stakes justify hands-on care</td></tr>
					<tr><td>Agency (many client sites)</td><td class="price">Pro / Agency</td><td>White-label reports and volume-friendly care</td></tr>
				</tbody>
			</table>
		</div>
		<p>Still unsure? Send your URL for a free audit and we will recommend the honest fit, even if that is the cheapest plan. To sanity-check the price against the wider market first, our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-cost/' ) ); ?>">cost guide</a> lays out 2026 pricing by site type.</p>
	</div>
</section>

<section id="diy" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Care plan vs going it alone</span>
		<h2>DIY vs a professional care plan</h2>
		<p>You can care for a WordPress site yourself, and for a low-stakes personal project that is a fine choice. The question for a business site is whether DIY is actually cheaper once you count your time and the risk. Proper care runs around five hours a month: reviewing and testing updates, checking backups, running scans, cleaning the database and handling small fixes. Valued at even a modest rate for your own time, that is $250 or more a month, and it assumes nothing goes wrong. One untested update on a live site, or one missed patch during that five-hour exploit window, can turn a quiet afternoon into a paid emergency.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>What you get</th><th>Professional care plan</th><th>DIY</th></tr></thead>
				<tbody>
					<tr><td>Weekly tested updates</td><td class="price">Included</td><td>Your time, ~5 hrs/mo</td></tr>
					<tr><td>Daily off-site backups</td><td class="price">Included</td><td>Plugin + setup + checks</td></tr>
					<tr><td>24/7 monitoring</td><td class="price">Included</td><td>Rarely set up properly</td></tr>
					<tr><td>Same-day fix when it breaks</td><td class="price">Included</td><td>Panic + paid emergency</td></tr>
					<tr><td>Real cost</td><td class="price">From $59/mo</td><td>$250&ndash;$500/mo of your time + risk</td></tr>
				</tbody>
			</table>
		</div>
		<p>For a site that earns money, a care plan almost always costs less than your own hours and removes the downside entirely. That is why most owners who start out doing it themselves eventually hand it over.</p>
	</div>
</section>

<section id="monitor" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Website health monitoring</span>
		<h2>What we watch on your site, around the clock</h2>
		<p>A big part of care is catching problems before they become emergencies, and that only works if someone is actually watching the right signals. Automated monitoring runs continuously in the background, and anything that looks wrong triggers an alert to a real person, not just a log entry nobody reads. Here is what we keep an eye on.</p>
		<ul class="body">
			<li><strong>Uptime.</strong> We check that your site is online from multiple locations around the clock, so an outage is caught in minutes, usually before a customer ever sees it.</li>
			<li><strong>Malware and file changes.</strong> Continuous scanning flags injected code, suspicious files or unexpected changes, the early warning signs of a compromise.</li>
			<li><strong>Core, theme and plugin versions.</strong> We track what is out of date and what has a known vulnerability, so nothing sits unpatched during that critical five-hour exploit window.</li>
			<li><strong>SSL certificate and domain.</strong> Certificates and domains expire quietly and take the whole site down when they do. We watch the dates so they never catch you out.</li>
			<li><strong>Performance and Core Web Vitals.</strong> We monitor load times and page-experience scores so we can act when the site starts to slow, rather than after rankings drop.</li>
			<li><strong>Backups.</strong> We confirm every scheduled backup actually completed, because an untested backup that silently failed is worse than none at all.</li>
		</ul>
		<p>Monitoring is the difference between a care plan that reacts and one that prevents. Most of the problems we handle are resolved before the site owner is even aware anything happened, which is exactly how good care should feel: quiet.</p>
	</div>
</section>

<section id="report" style="padding-top:10px">
	<div class="wrap cg">
		<span class="eyebrow">Proof it's working</span>
		<h2>What's in your monthly care report</h2>
		<p>Care you cannot see is easy to doubt, so every month you get a plain-English report, no jargon, that shows exactly what happened and where your site stands. It is a one-page answer to "what am I actually paying for?" and it typically covers:</p>
		<ul class="body">
			<li>Every update applied that month: core, themes and plugins, with anything that needed extra testing noted.</li>
			<li>Security activity: threats blocked, login attacks stopped, and scan results.</li>
			<li>Backup status: how many ran, and confirmation they are restorable.</li>
			<li>Uptime for the month, and details of any downtime and how fast it was resolved.</li>
			<li>Performance and Core Web Vitals scores, with any speed work we did.</li>
			<li>Fixes and edits completed, plus a short note on what we recommend improving next.</li>
		</ul>
		<p>The report does two jobs. It proves the work is happening, and it keeps a running record of your site's health over time, which is invaluable if you ever sell the site, switch providers, or just want to understand how it is trending.</p>
	</div>
</section>

<section id="payoff" style="padding-top:10px">
	<div class="wrap cg">
		<span class="eyebrow">The long game</span>
		<h2>What consistent care does over a year</h2>
		<p>The value of a care plan is easy to miss month to month, because when it is working, nothing dramatic happens. That is the point. Zoom out to a year, though, and the compounding effect is real. A cared-for site stays continuously patched, so it never joins the majority of hacked sites that were simply running something out of date. It stays fast, so it holds or improves its search rankings instead of slowly sliding as competitors speed up. It accumulates a year of clean, tested backups, so any mistake is a one-click fix rather than a crisis. And it avoids the expensive catch-up work, the several thousand dollars it typically takes to safely revive a site neglected for six months or more.</p>
		<p>Put simply, a year of care costs a predictable, modest amount and quietly prevents the handful of expensive, stressful events that hit neglected sites. It is the cheapest insurance a business website buys, and unlike insurance, it also actively improves the asset it protects. For most owners, the honest math is not "can I afford a care plan?" but "can I afford the emergency that a care plan would have prevented?"</p>
	</div>
</section>

<section id="who" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Is it for you?</span>
		<h2>Who needs a WordPress care plan?</h2>
		<p>If your website does a job for your business, it needs care, and the more directly it touches revenue, the more that care matters. <strong>Local service businesses</strong> (HVAC, plumbing, dental, legal) depend on their site to capture leads, so uptime and working forms are critical. <strong>WooCommerce stores</strong> have the most at stake, since every minute of downtime is lost sales and checkout has many moving parts. <strong>Content and blog sites</strong> rely on speed and consistency to protect hard-won SEO traffic. <strong>Membership, LMS and booking sites</strong> have complex integrations that break quietly without upkeep. And <strong>agencies</strong> need reliable white-label care so they can look after client sites without doing every update themselves.</p>
		<p>The honest exception: a low-stakes personal site that earns nothing and rarely changes may not need a paid plan at all. Do not buy care out of guilt, buy it when the site is worth protecting. For everyone whose website is part of how they make money, a care plan is one of the highest-return, lowest-drama expenses in the business.</p>
	</div>
</section>

<section style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Why us</span>
		<h2>Why choose our WordPress care plans</h2>
		<div class="trust-grid">
			<div class="trust"><span class="ic"><?php echo fp_icon( 'shield' ); ?></span><b>WordPress specialists</b><p>We work on WordPress and WooCommerce only, so we catch what generalists miss.</p></div>
			<div class="trust"><span class="ic"><?php echo fp_icon( 'check' ); ?></span><b>No contracts</b><p>Month to month, cancel anytime. We earn your business every month.</p></div>
			<div class="trust"><span class="ic"><?php echo fp_icon( 'clock' ); ?></span><b>Fast response</b><p>Priority and same-day support on higher plans, with monitoring that catches issues first.</p></div>
			<div class="trust"><span class="ic"><?php echo fp_icon( 'user' ); ?></span><b>Real developers</b><p>A human who knows your site handles fixes, not a ticket queue or a bot.</p></div>
		</div>
		<div class="callout" style="background:var(--ink);color:#fff;border-radius:16px;padding:26px;text-align:center">
			<b style="font-family:var(--display);font-size:1.2rem;color:#fff">Our promise: if we break it, we fix it. Same day. No charge.</b>
			<p style="color:#aeb8c2;margin:10px auto 0;max-width:52ch">Every update is backed up and tested. If anything ever goes wrong on our watch, we roll it back and make it right at no cost, every plan, every time.</p>
		</div>
	</div>
</section>

<section id="best-practices" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">How we work</span>
		<h2>The best practices behind our care</h2>
		<p>Good care is not just doing the tasks; it is doing them the right way, so the work never becomes the thing that breaks your site. A few principles guide everything we do, and they are worth asking any provider about before you hand over your website.</p>
		<ul class="body">
			<li><strong>Back up before we touch anything.</strong> Every update run starts with a fresh off-site backup, so there is always a clean restore point moments before any change.</li>
			<li><strong>Stage major updates first.</strong> Significant updates are tested on a staging copy before they reach your live site, following <a class="ilink" href="https://wordpress.org/" target="_blank" rel="noopener">WordPress</a> best practice, so visitors never see a broken page.</li>
			<li><strong>Harden security to recognised standards.</strong> We apply the kind of protections outlined by security bodies like OWASP: least-privilege access, strong login defence, and removing unused code that widens your attack surface.</li>
			<li><strong>Measure speed with real tools.</strong> Performance work is checked against Google PageSpeed Insights and <a class="ilink" href="https://web.dev/vitals/" target="_blank" rel="noopener">Core Web Vitals</a>, not guesswork, so improvements are real and measurable.</li>
			<li><strong>Keep access clean.</strong> We use secure, least-privilege access and remove credentials when work is complete. Your site and data stay yours.</li>
		</ul>
		<p>These are not glamorous, but they are exactly what separates care that protects a site from care that occasionally breaks one. The discipline is the product.</p>
	</div>
</section>

<section id="start" style="padding-top:10px">
	<div class="wrap cg">
		<span class="eyebrow">Getting started</span>
		<h2>How to start a care plan</h2>
		<p>Onboarding is simple and takes about a day, with no long forms and no pressure.</p>
		<div class="steps">
			<div class="step"><span class="num">1</span><h3>Free audit</h3><p>Send your URL. We run a full health, security and speed check and tell you honestly what shape your site is in.</p></div>
			<div class="step"><span class="num">2</span><h3>Pick a plan</h3><p>Choose the tier that fits, or take our recommendation. Month to month, no contracts.</p></div>
			<div class="step"><span class="num">3</span><h3>We take over</h3><p>Give us secure access. Within 24 hours we audit, back up, harden and bring everything current.</p></div>
			<div class="step"><span class="num">4</span><h3>You relax</h3><p>We care for the site on autopilot, and you get your time back plus a clear report each month.</p></div>
		</div>
		<p style="color:var(--muted)">Only need one thing fixed? We also handle one-time WordPress fixes from $99, no plan required.</p>
	</div>
</section>

<section id="faq" style="padding-top:20px" class="cg-faq">
	<div class="wrap cg">
		<span class="eyebrow">Answers</span>
		<h2>WordPress care plan FAQ</h2>
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
				<p>These care plans reflect years of looking after real WordPress sites across business, ecommerce and content niches, built around the six jobs every live site needs and the 2026 threat data that makes ongoing care non-negotiable.</p>
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
		<h2>Give your WordPress site the care it needs</h2>
		<p>Send us your URL for a free health, security and speed audit, and we'll recommend the care plan that actually fits, even if it's the cheapest one.</p>
		<a class="btn btn-primary" href="<?php echo esc_url( $book ); ?>" target="_blank" rel="noopener"><?php echo fp_icon( 'cal' ); ?>Get a free site audit</a>
	</div>
</section>

<script type="application/ld+json">
<?php
$page_url = home_url( '/wordpress-care-plans/' );
$ld = array(
	'@context' => 'https://schema.org',
	'@graph'   => array(
		array(
			'@type'       => 'Service',
			'serviceType' => 'WordPress Care Plans',
			'name'        => 'WordPress Care Plans',
			'url'         => $page_url,
			'description' => $wpmp_seo['desc'],
			'provider'    => array( '@type' => 'Organization', 'name' => $c['brand'], 'url' => home_url( '/' ), 'email' => $c['email'] ),
			'areaServed'  => array( '@type' => 'Country', 'name' => 'United States' ),
			'author'      => array( '@type' => 'Person', 'name' => 'Bhupesh Rathore', 'url' => home_url( '/author-profile/' ), 'sameAs' => array( $c['linkedin'], $c['x'] ) ),
			'hasOfferCatalog' => array(
				'@type' => 'OfferCatalog',
				'name'  => 'WordPress Care Plans',
				'itemListElement' => array(
					array( '@type' => 'Offer', 'name' => 'Essential Care', 'price' => '59', 'priceCurrency' => 'USD' ),
					array( '@type' => 'Offer', 'name' => 'Growth Care', 'price' => '129', 'priceCurrency' => 'USD' ),
					array( '@type' => 'Offer', 'name' => 'Pro / Agency Care', 'price' => '249', 'priceCurrency' => 'USD' ),
				),
			),
		),
		array(
			'@type' => 'BreadcrumbList',
			'itemListElement' => array(
				array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => home_url( '/' ) ),
				array( '@type' => 'ListItem', 'position' => 2, 'name' => 'WordPress Care Plans', 'item' => $page_url ),
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
