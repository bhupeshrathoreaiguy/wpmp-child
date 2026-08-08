<?php
/**
 * Template: The Complete Website Maintenance Checklist  —  URL /website-maintenance-checklist/
 * TOFU informational pillar. Interactive checklist (localStorage progress + print), deep-dive prose,
 * maintenance calendar, variations, FAQ. Schema: Article + FAQPage + HowTo + Breadcrumb.
 * Honest signals only. Links down to commercial pages.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wpmp_seo = array(
	'title' => 'The Complete Website Maintenance Checklist (2026) | Free Interactive',
	'desc'  => 'The most complete WordPress website maintenance checklist for 2026: daily, weekly, monthly, quarterly and annual tasks, plus security, backup, speed, SEO and WooCommerce. Free, interactive, printable.',
);
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();
$author_photo = 'https://wpwebsitemaintenancepackages.com/wp-content/uploads/2026/08/bhupesh-rathore-1.webp';
$book = $c['calendly'];

// ---- Recurring checklists (item, why) ----
$recurring = array(
	'daily' => array( 'label' => 'Daily', 'note' => 'A few quick, mostly automated checks that catch disasters early.', 'items' => array(
		array( 'Confirm the site is online', 'A minute of downtime you catch beats an hour a customer catches for you.' ),
		array( 'Check uptime monitoring alerts', 'Act on any downtime or performance alert before it spreads.' ),
		array( 'Verify the daily backup ran', 'A backup that silently failed is worthless on the day you need it.' ),
		array( 'Review security scan alerts', 'Early detection is the difference between a small clean-up and a disaster.' ),
		array( 'Watch for failed-login spikes', 'A surge of failed logins is a brute-force attempt in progress.' ),
		array( 'Stores: confirm orders and payments are processing', 'A stalled checkout costs money silently while the site looks fine.' ),
	) ),
	'weekly' => array( 'label' => 'Weekly', 'note' => 'The core upkeep that keeps the site secure and current.', 'items' => array(
		array( 'Back up before making any changes', 'Every update should be reversible. Back up first, always.' ),
		array( 'Update plugins (tested)', 'Outdated plugins are the number-one way sites get hacked.' ),
		array( 'Update themes', 'Theme updates carry security and compatibility fixes too.' ),
		array( 'Apply minor WordPress core updates', 'Minor releases are usually security and maintenance patches.' ),
		array( 'Run a malware scan', 'Catch infections while they are small and easy to remove.' ),
		array( 'Test key forms and checkout', 'A broken form loses leads silently, with no error to warn you.' ),
		array( 'Spot-check speed on key pages', 'Catch a speed regression from a new plugin before it costs rankings.' ),
		array( 'Clear spam comments', 'Keeps the site clean and reduces a common spam vector.' ),
		array( 'Clear caches after updates', 'Ensures visitors see the current version, not a stale cached one.' ),
	) ),
	'monthly' => array( 'label' => 'Monthly', 'note' => 'Deeper health checks and optimization.', 'items' => array(
		array( 'Take a full backup and test a restore', 'A backup you have never restored is a hope, not a plan.' ),
		array( 'Review Core Web Vitals', 'Google uses real-world speed metrics as a ranking signal.' ),
		array( 'Optimize the database', 'Clear old revisions, transients and spam to keep queries fast.' ),
		array( 'Audit and compress new images', 'Uncompressed images are the most common cause of slow pages.' ),
		array( 'Run a full broken-link scan', 'Dead links hurt user experience and leak SEO value.' ),
		array( 'Review Google Search Console', 'Check coverage, indexing and any manual actions or errors.' ),
		array( 'Review Google Analytics trends', 'A sudden traffic drop can be the first sign of a problem.' ),
		array( 'Check the SSL certificate expiry', 'A lapsed certificate can take the site offline or scare visitors.' ),
		array( 'Review user accounts and roles', 'Remove old accounts and enforce least-privilege access.' ),
		array( 'Confirm plugin and theme licenses are active', 'Expired licenses stop security updates from arriving.' ),
	) ),
	'quarterly' => array( 'label' => 'Quarterly', 'note' => 'Bigger reviews you do a few times a year.', 'items' => array(
		array( 'Full security and hardening review', 'Re-check firewall, 2FA, permissions and login protection.' ),
		array( 'Audit plugins: remove unused, replace abandoned', 'Abandoned plugins are unpatched holes waiting to be found.' ),
		array( 'Test every critical user journey', 'Walk through checkout, signup and booking as a real user would.' ),
		array( 'Run an accessibility check', 'Improves reach for all users and reduces legal risk.' ),
		array( 'Review hosting resources vs needs', 'Confirm the plan still fits your traffic and speed needs.' ),
		array( 'Run a technical SEO audit', 'Check redirects, sitemap, robots.txt and indexing health.' ),
		array( 'Content audit for thin or outdated pages', 'Refresh or prune pages that are dragging quality down.' ),
		array( 'Rotate passwords and API keys where needed', 'Limits the damage if a credential was ever exposed.' ),
	) ),
	'annual' => array( 'label' => 'Annual', 'note' => 'The once-a-year essentials that are costly to forget.', 'items' => array(
		array( 'Renew your domain(s)', 'Letting a domain lapse can mean losing it entirely.' ),
		array( 'Review and renew hosting', 'Reassess cost, performance and whether it still fits.' ),
		array( 'Check PHP and major-version compatibility', 'Plan major WordPress and PHP upgrades on staging first.' ),
		array( 'Run a full website audit', 'Review design, UX and conversion, not just the technical health.' ),
		array( 'Review all third-party integrations', 'Confirm payment, email and API connections still work.' ),
		array( 'Review legal pages', 'Keep privacy, terms and cookie notices current and compliant.' ),
		array( 'Run a full disaster-recovery drill', 'Prove you can rebuild from backup before you have to.' ),
		array( 'Refresh cornerstone content', 'Update your most important pages for the new year.' ),
	) ),
);

// ---- Specialized checklists (item only) ----
$special = array(
	'security'    => array( 'label' => 'Security', 'items' => array( 'Web application firewall active', 'Two-factor authentication on all admins', 'Strong, unique passwords', 'Login attempt limits enabled', 'Core, plugins and themes up to date', 'Malware scanning scheduled', 'File-integrity monitoring on', 'Unused plugins and themes removed', 'Correct file permissions set', 'HTTPS enforced site-wide', 'Dashboard file editing disabled', 'Off-site backups in place', 'Least-privilege user roles', 'Security headers / Cloudflare configured' ) ),
	'backup'      => array( 'label' => 'Backup', 'items' => array( 'Automated daily backups', 'Stored off-site, not on the same server', 'Full site: files and database', 'A restore has actually been tested', 'Multiple restore points retained', 'Backup taken before every update', 'Backup taken before any migration', 'Backup access documented' ) ),
	'performance' => array( 'label' => 'Performance', 'items' => array( 'Page and object caching enabled', 'CDN configured', 'Images compressed and modern formats', 'Lazy loading for images', 'CSS and JS minified', 'Database regularly optimized', 'Core Web Vitals in the green', 'Heavy or duplicate plugins limited', 'Current PHP version and good hosting', 'Mobile speed tested' ) ),
	'seo'         => array( 'label' => 'Technical SEO', 'items' => array( 'XML sitemap present and submitted', 'robots.txt correct', 'No accidental noindex on live pages', 'Canonical tags correct', '404s fixed or redirected', 'HTTPS everywhere, no mixed content', 'Titles and meta descriptions set', 'Structured data valid', 'Mobile-friendly', 'Internal links healthy', 'Broken links fixed' ) ),
	'woocommerce' => array( 'label' => 'WooCommerce', 'items' => array( 'Full checkout and payment tested', 'WooCommerce/extension updates tested on staging', 'Order confirmation emails verified', 'Payment gateways (Stripe/PayPal) working', 'Stock and inventory accurate', 'SSL valid on checkout', 'Checkout tested on mobile', 'Backups include orders and database', 'Peak-season load prepared', 'Tax and shipping calculators correct' ) ),
	'launch'      => array( 'label' => 'Launch', 'items' => array( 'Site set to indexable (noindex removed)', 'Backups and security configured', 'Sitemap submitted to Google and Bing', 'All forms and checkout tested', 'Analytics and Search Console set up', 'Redirects from old URLs in place', 'Speed and mobile tested', 'Legal pages live', 'SSL active and enforced' ) ),
	'emergency'   => array( 'label' => 'Emergency / recovery', 'items' => array( 'Stay calm, do not delete blindly', 'Snapshot the current (infected) state', 'Change passwords from a clean device', 'Contact your host', 'Scan to identify the infection', 'Restore from a clean backup if needed', 'Close the vulnerability behind it', 'Request blacklist review once clean' ) ),
	'migration'   => array( 'label' => 'Migration', 'items' => array( 'Take a full backup first', 'Set up the new host', 'Move files and database', 'Test on a staging or temporary URL', 'Update DNS to the new server', 'Confirm zero downtime during cutover', 'Test forms and checkout after moving', 'Update any hardcoded URLs' ) ),
);

$faqs = array(
	array( 'What is a website maintenance checklist?', 'It is a structured list of the recurring tasks that keep a website secure, fast, backed up and working, organised by how often each one needs doing. A good checklist turns website upkeep from a vague worry into a clear routine, so nothing important gets forgotten until it becomes a problem.' ),
	array( 'How often should I do website maintenance?', 'Maintenance happens on a schedule, not all at once. Some checks are daily (uptime, backups, security alerts), the core upkeep is weekly (updates, scans, form tests), deeper health checks are monthly, bigger reviews are quarterly, and a few essentials are annual (domain renewal, disaster-recovery drills). The checklist on this page is organised exactly that way.' ),
	array( 'What does WordPress website maintenance include?', 'The essentials are updates (core, plugins, themes), security (firewall, scanning, hardening), backups (daily, off-site, tested), speed optimization, uptime monitoring, and fixing problems as they appear. Around those sit periodic jobs like SEO checks, accessibility reviews, database cleanups and content refreshes.' ),
	array( 'Can I do website maintenance myself?', 'Yes, if you have the time and comfort to follow a checklist like this one consistently. The hard part is not any single task, it is doing them reliably every week and month without letting it slip. Many owners start DIY and later hand it over once they realise the upkeep keeps falling to the bottom of the to-do list.' ),
	array( 'How long does website maintenance take each month?', 'For a small site done properly, budget three to five hours a month across the weekly and monthly tasks, more for a store or a large site. Most of that is the disciplined, unglamorous work of testing updates safely and checking things actually still function.' ),
	array( 'What happens if I skip website maintenance?', 'Nothing, until suddenly something big goes wrong: an outdated plugin gets your site hacked, a slow site quietly loses rankings and customers, or a crash hits with no working backup to restore. The cost of neglect is invisible right up to the moment it becomes an expensive emergency.' ),
	array( 'How often should I update WordPress plugins?', 'Check weekly and apply updates promptly, but on a business site always back up first and ideally test on staging, since an update can occasionally conflict with another. Prompt-but-tested is the balance: fast enough to close security holes, careful enough not to break the live site.' ),
	array( 'How often should I back up my website?', 'Daily at minimum for most sites, stored off-site (not on the same server), and always immediately before any update or migration. Busy stores taking many orders a day benefit from more frequent backups so a restore costs fewer transactions.' ),
	array( 'What is the difference between weekly and monthly maintenance?', 'Weekly tasks are the frequent essentials that keep the site current and safe, updates, scans, form tests. Monthly tasks are deeper checks that do not need doing as often, like testing a full restore, reviewing Core Web Vitals, optimizing the database and reviewing Search Console.' ),
	array( 'Do static or small websites need maintenance?', 'Yes, arguably more, because a site nobody logs into is where a hack or a broken form goes unnoticed longest. Even a site whose content never changes still runs software that needs patching, backups that need taking, and security that needs monitoring.' ),
	array( 'What should be on an ecommerce maintenance checklist?', 'Everything on a standard checklist plus store-specific tasks: testing the full checkout and payment flow after every update, verifying order emails, confirming gateways and stock, and preparing for peak-traffic sales. See our ecommerce maintenance page for the full store version.' ),
	array( 'How do I know if my website needs maintenance right now?', 'Warning signs include a site that feels slow, uncertainty about when it was last backed up or updated, forms you have not tested recently, or nobody currently responsible for the site\u2019s upkeep. If any of those apply, running through this checklist is a good place to start.' ),
	array( 'Is a security plugin enough on its own?', 'No. A security plugin is a useful tool, but it only helps if someone acts on its alerts and keeps the rest of the site patched and backed up. Security is a maintained practice across several layers, not a single plugin you install and forget.' ),
	array( 'Should I use staging for updates?', 'For any site that earns money, yes. A staging site is a private copy where you can test updates before they touch the live site, which turns risky updates into safe, routine ones. It is the single biggest safeguard against an update breaking your live site.' ),
	array( 'What is the best way to keep track of maintenance?', 'A recurring checklist tied to a schedule, exactly like the interactive one on this page. Tick tasks as you complete them, and let the schedule (daily, weekly, monthly, quarterly, annual) tell you what is due. Or hand the whole routine to a maintenance plan so it simply gets done.' ),
	array( 'Do I still need this if I have a maintenance plan?', 'A good maintenance plan does all of this for you, so the checklist becomes a way to understand and verify what your provider should be handling. It is equally useful as a DIY routine or as a yardstick for judging whether your current provider is doing a thorough job.' ),
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
.fp .hero-btns{display:flex;gap:12px;flex-wrap:wrap;margin-top:22px;position:relative}
.fp .cg{max-width:920px;margin:0 auto}
.fp .cg h2{font-size:clamp(1.6rem,3vw,2.1rem);margin:8px 0 12px}
.fp .cg h3{font-size:1.22rem;margin:24px 0 8px}
.fp .cg p{color:#232a33;margin:0 0 16px}
.fp .cg ul.body{padding-left:20px;color:#232a33;margin:0 0 16px}.fp .cg ul.body li{margin-bottom:9px}
.fp .cg a.ilink{color:var(--accent-deep);font-weight:600;text-decoration:underline;text-decoration-color:rgba(14,159,110,.4);text-underline-offset:3px}
.fp .tldr{background:var(--surface);border:1px solid var(--line);border-left:4px solid var(--accent);border-radius:14px;padding:26px 28px;box-shadow:var(--shadow);margin:0 auto;max-width:920px}
.fp .tldr h2{font-size:1.2rem;margin-bottom:10px}
.fp .tbl-wrap{overflow-x:auto;border:1px solid var(--line);border-radius:14px;margin:18px 0}
.fp table.cg-tbl{width:100%;border-collapse:collapse;font-size:.94rem;min-width:520px}
.fp .cg-tbl th,.fp .cg-tbl td{text-align:left;padding:13px 16px;border-bottom:1px solid var(--line);vertical-align:top}
.fp .cg-tbl thead th{background:var(--ink);color:#fff;font-family:var(--display);font-weight:700;font-size:.88rem}
.fp .cg-tbl tbody tr:nth-child(even){background:#fbfbf7}
.fp .cg-tbl td:first-child{font-weight:700}
/* interactive checklist */
.fp .ck-top{background:var(--ink);color:#fff;border-radius:16px;padding:24px 26px;margin:0 auto 22px;max-width:920px}
.fp .ck-top .ck-h{display:flex;justify-content:space-between;align-items:center;gap:16px;flex-wrap:wrap}
.fp .ck-top h2{color:#fff;margin:0;font-size:1.3rem}
.fp .ck-top .ck-pct{font-family:var(--display);font-size:1.5rem;font-weight:800;color:#3fd9a3}
.fp .ck-bar{height:10px;border-radius:6px;background:#2a3340;margin-top:14px;overflow:hidden}
.fp .ck-bar span{display:block;height:100%;width:0;background:linear-gradient(90deg,#0e9f6e,#3fd9a3);transition:width .3s ease}
.fp .ck-actions{display:flex;gap:10px;flex-wrap:wrap;margin-top:16px}
.fp .ck-actions button{border:0;cursor:pointer;font-family:var(--display);font-weight:700;font-size:.86rem;border-radius:9px;padding:9px 16px}
.fp .ck-print{background:#3fd9a3;color:#08231a}.fp .ck-reset{background:transparent;color:#aeb8c2;border:1px solid #3a4450 !important}
.fp .clist{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:22px 24px;margin:0 auto 16px;max-width:920px}
.fp .clist-head{display:flex;justify-content:space-between;align-items:baseline;gap:12px}
.fp .clist-head h3{margin:0;font-size:1.15rem}
.fp .clist-head .cnt{font-size:.82rem;color:var(--muted);font-weight:700;font-family:var(--display)}
.fp .clist .note{color:var(--muted);font-size:.92rem;margin:4px 0 12px}
.fp .mini-bar{height:6px;border-radius:4px;background:#eef1ee;overflow:hidden;margin-bottom:14px}
.fp .mini-bar span{display:block;height:100%;width:0;background:var(--accent);transition:width .3s ease}
.fp .clist ul{list-style:none;padding:0;margin:0}
.fp .clist li{padding:9px 0;border-bottom:1px solid var(--line)}
.fp .clist li:last-child{border-bottom:0}
.fp .clist label{display:flex;gap:12px;align-items:flex-start;cursor:pointer}
.fp .clist input[type=checkbox]{margin-top:3px;width:18px;height:18px;accent-color:var(--accent-deep);flex:0 0 auto;cursor:pointer}
.fp .clist .it b{font-weight:700;color:var(--ink);display:block}
.fp .clist .it em{font-style:normal;color:var(--muted);font-size:.9rem}
.fp .clist input:checked + .it b{text-decoration:line-through;color:var(--muted)}
.fp .sp-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;max-width:920px;margin:0 auto}
.fp .sp-grid .clist{margin:0}
.fp .inc,.fp .svc{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:20px}
.fp .callout{border-radius:14px;padding:20px 24px;margin:22px 0}
.fp .callout.tip{background:var(--accent-soft);border:1px solid #cdeede}
.fp .callout.warn{background:#fff7ed;border:1px solid #fed7aa}
.fp .callout .ct-head{display:flex;align-items:center;gap:9px;font-weight:800;margin-bottom:6px;font-family:var(--display)}
.fp .callout.tip .ct-head{color:var(--accent-deep)}.fp .callout.warn .ct-head{color:#9a3412}
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
@media(max-width:640px){.fp .sp-grid{grid-template-columns:1fr}.fp .cg-author{flex-direction:column;align-items:center;text-align:center}}
@media print{.fp .site-header,.fp .site-footer,.fp .pl-hero .hero-btns,.fp .ck-actions,.fp .toc,.fp .cg-cta,.fp .emergency{display:none !important}.fp .clist,.fp .ck-top{break-inside:avoid;border:1px solid #ccc}}
</style>

<section class="pl-hero">
	<div class="wrap">
		<nav class="crumbs" aria-label="Breadcrumb" style="position:relative"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>Website Maintenance Checklist</nav>
		<span class="eyebrow" style="position:relative">Free &middot; interactive &middot; printable</span>
		<h1>The Complete Website Maintenance Checklist</h1>
		<p class="pl-lead">Every task that keeps a WordPress site secure, fast, backed up and working, organised by how often to do it. Tick items off as you go (your progress saves automatically), print it, or use it to check whether your current provider is doing a thorough job. Updated for 2026.</p>
		<div class="hero-btns">
			<a class="btn btn-primary" href="#checklist"><?php echo fp_icon( 'check' ); ?>Open the checklist</a>
			<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/website-maintenance-plans/' ) ); ?>">Or have us do it for you</a>
		</div>
		<div class="pl-meta">
			<span><?php echo fp_icon( 'user' ); ?>By Bhupesh Rathore, ThinkFlow Media</span>
			<span><?php echo fp_icon( 'clock' ); ?>Updated <?php echo esc_html( date( 'F Y' ) ); ?></span>
		</div>
	</div>
</section>

<section style="padding:34px 0 0">
	<div class="wrap">
		<div class="tldr">
			<h2>How to use this checklist</h2>
			<p>Maintenance is not one big job, it is a rhythm. Work through the <strong>daily, weekly, monthly, quarterly and annual</strong> lists below on their schedule, and use the specialized lists (security, backup, speed, SEO, WooCommerce) when you need a focused deep-dive. Tick boxes as you complete them, your progress is saved in your browser, and hit print to save a PDF copy. Prefer to skip the work entirely? Our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-plans/' ) ); ?>">maintenance plans</a> run this whole checklist for you from $59/mo.</p>
		</div>
		<div class="toc">
			<b>Jump to</b>
			<div class="toc-list">
				<a href="#schedule">The schedule</a>
				<a href="#why-matters">Why it matters</a>
				<a href="#checklist">Interactive checklist</a>
				<a href="#specialized">Specialized checklists</a>
				<a href="#deep">Task explanations</a>
				<a href="#calendar">Maintenance calendar</a>
				<a href="#variations">By business type</a>
				<a href="#routine">Make it stick</a>
				<a href="#faq">FAQ</a>
			</div>
		</div>
	</div>
</section>

<section id="schedule" style="padding-top:44px">
	<div class="wrap cg">
		<span class="eyebrow">The rhythm</span>
		<h2>The website maintenance schedule at a glance</h2>
		<p>Before the full interactive list, here is the shape of a healthy maintenance routine. The core idea is simple: frequent, low-effort checks catch problems early, while deeper reviews happen less often. Match the effort to the risk and nothing important gets neglected.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>Frequency</th><th>Focus</th><th>Roughly</th></tr></thead>
				<tbody>
					<tr><td>Daily</td><td>Uptime, backups ran, security alerts</td><td>Minutes, mostly automated</td></tr>
					<tr><td>Weekly</td><td>Updates, scans, form and speed checks</td><td>The core upkeep</td></tr>
					<tr><td>Monthly</td><td>Restore test, Core Web Vitals, database, Search Console</td><td>Deeper health checks</td></tr>
					<tr><td>Quarterly</td><td>Security audit, plugin cleanup, SEO and content audits</td><td>Bigger reviews</td></tr>
					<tr><td>Annually</td><td>Domain and hosting renewal, disaster-recovery drill, full audit</td><td>The costly-to-forget essentials</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<section id="why-matters" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Why bother</span>
		<h2>Why website maintenance matters</h2>
		<p>It is worth being clear about why any of this matters before you start ticking boxes, because the payoff is easy to underrate. Maintenance is invisible when it works. Nobody praises a website for not getting hacked or for loading quickly, so the temptation is always to skip it and hope. The problem is that the cost of skipping does not disappear, it accumulates quietly and then arrives all at once.</p>
		<p>The security picture makes the point plainly. Researchers logged more than eleven thousand WordPress vulnerabilities in 2025, and over ninety percent of them were in plugins and themes rather than the core software. Once a vulnerability is public, automated attacks often begin probing for it within hours, and bots make up a large share of all web traffic, scanning constantly for sites that have not patched. None of that is targeted or personal; it is just machines finding the sites that fell behind. The maintenance tasks on this page, especially updates, backups and a firewall, are what keep your site out of that group.</p>
		<p>And it is not only security. A site that is not maintained gets slower as it accumulates images, plugins and database bloat, and a slower site both ranks lower and converts fewer of the visitors it does get. Links break, forms silently stop working, SSL certificates lapse. Each of these is small on its own and quietly costly in aggregate. Maintenance is how you stop a hundred small neglects from compounding into one expensive emergency, and it keeps the site fast enough to actively earn while it protects. That is the case for the checklist below: a small, regular investment that prevents disproportionately large problems.</p>
	</div>
</section>

<section id="checklist" style="padding-top:20px">
	<div class="wrap">
		<div class="ck-top">
			<div class="ck-h">
				<h2>Your interactive maintenance checklist</h2>
				<span class="ck-pct" id="ckPct">0%</span>
			</div>
			<div class="ck-bar"><span id="ckBar"></span></div>
			<div class="ck-actions">
				<button type="button" class="ck-print" onclick="window.print()">Print / save as PDF</button>
				<button type="button" class="ck-reset" id="ckReset">Reset progress</button>
			</div>
		</div>
		<?php
		foreach ( $recurring as $key => $sec ) :
			$n = count( $sec['items'] );
			?>
			<div class="clist" data-sec="<?php echo esc_attr( $key ); ?>">
				<div class="clist-head"><h3><?php echo esc_html( $sec['label'] ); ?> tasks</h3><span class="cnt" data-cnt>0/<?php echo (int) $n; ?></span></div>
				<p class="note"><?php echo esc_html( $sec['note'] ); ?></p>
				<div class="mini-bar"><span data-mini></span></div>
				<ul>
					<?php foreach ( $sec['items'] as $i => $it ) : $id = 'ck-' . $key . '-' . $i; ?>
						<li><label><input type="checkbox" id="<?php echo esc_attr( $id ); ?>"><span class="it"><b><?php echo esc_html( $it[0] ); ?></b><em><?php echo esc_html( $it[1] ); ?></em></span></label></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endforeach; ?>
	</div>
</section>

<section id="specialized" style="padding-top:20px">
	<div class="wrap cg" style="margin-bottom:8px">
		<span class="eyebrow">Focused deep-dives</span>
		<h2>Specialized checklists</h2>
		<p>Use these when you want to focus on one area, a security review, a backup check, a speed pass, or before a launch or migration. They feed into the same overall progress above.</p>
	</div>
	<div class="wrap">
		<div class="sp-grid">
			<?php
			foreach ( $special as $key => $sec ) :
				$n = count( $sec['items'] );
				?>
				<div class="clist" data-sec="sp-<?php echo esc_attr( $key ); ?>">
					<div class="clist-head"><h3><?php echo esc_html( $sec['label'] ); ?></h3><span class="cnt" data-cnt>0/<?php echo (int) $n; ?></span></div>
					<div class="mini-bar"><span data-mini></span></div>
					<ul>
						<?php foreach ( $sec['items'] as $i => $it ) : $id = 'ck-sp-' . $key . '-' . $i; ?>
							<li><label><input type="checkbox" id="<?php echo esc_attr( $id ); ?>"><span class="it"><b><?php echo esc_html( $it ); ?></b></span></label></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="deep" style="padding-top:34px">
	<div class="wrap cg">
		<span class="eyebrow">Why each task matters</span>
		<h2>The key tasks explained</h2>
		<p>Ticking boxes is easy; understanding why each one matters is what turns a checklist into good judgement. Here are the tasks that do the most to keep a site healthy, and why they earn their place.</p>

		<h3>Updates: core, plugins and themes</h3>
		<p>Updates are the single most important maintenance task, because outdated software is how the overwhelming majority of sites get hacked. WordPress core is very secure; the risk lives in plugins and themes, where thousands of vulnerabilities are found every year. The nuance is that updating carelessly on a live site can occasionally break something, so the professional approach is prompt but tested: back up first, ideally apply updates on a staging copy, then test the live site after. Fast enough to close security holes, careful enough not to cause the very outage you are trying to prevent.</p>

		<h3>Backups: your ultimate safety net</h3>
		<p>Backups are what make everything else survivable. A daily, off-site, tested backup means that whatever goes wrong, a bad update, a hack, a server failure, you can get back to a working site fast. Two details separate a real backup from a false sense of security: it must be stored somewhere other than the server it protects, and it must actually have been restored at least once to prove it works. A backup nobody has ever tested is a guess, and the day you need it is the worst day to discover it was empty.</p>

		<h3>Security: layered and ongoing</h3>
		<p>Security is not one setting, it is a stack of protections maintained over time: a firewall filtering bad traffic, patched software, strong logins with two-factor authentication, malware scanning, and hardening of the parts attackers target. No single layer makes a site secure, but together and kept current they make it a hard, unrewarding target. Guidance from sources like WordPress.org, OWASP and Cloudflare underpins the practices in the security checklist above. For a deeper treatment, see our <a class="ilink" href="<?php echo esc_url( home_url( '/wordpress-malware-removal-security/' ) ); ?>">malware removal and security</a> guide.</p>

		<h3>Speed and Core Web Vitals</h3>
		<p>A fast site keeps visitors and ranks better, and Google measures real-world speed through Core Web Vitals, which feed into rankings. Sites slow down naturally as they accumulate images, plugins and database bloat, so speed is a maintenance task, not a one-time setup. Caching, image compression, a lean database and a good host do most of the work; measuring against PageSpeed Insights keeps the gains honest.</p>

		<h3>SEO and technical health</h3>
		<p>Maintenance protects the SEO you have worked for. Broken links leak authority, a slow or hacked site loses rankings, and an accidental noindex or a broken sitemap can quietly de-index pages. The monthly and quarterly SEO checks, Search Console review, broken-link scans, redirect and sitemap checks, catch these before they cost you traffic. Maintenance and SEO are not separate disciplines; a well-maintained site is a foundation that makes every other marketing effort work harder.</p>

		<h3>Ecommerce and WooCommerce</h3>
		<p>Stores carry extra risk because a broken checkout costs money immediately and silently. The WooCommerce checklist adds the store-specific essentials: test the full purchase flow after every update, verify order emails and payment gateways, and prepare for peak-traffic sales. For the complete store version, see our <a class="ilink" href="<?php echo esc_url( home_url( '/ecommerce-website-maintenance/' ) ); ?>">ecommerce maintenance</a> guide.</p>
		<div class="callout warn">
			<div class="ct-head"><?php echo fp_icon( 'shield' ); ?>Most common mistake</div>
			<p>Auto-updating a live site with no backup. It works fine ninety-nine times, and the hundredth takes your site down with no way back. Always back up first, and test on staging for anything that earns money.</p>
		</div>
	</div>
</section>

<section id="mistakes" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Learn from these</span>
		<h2>Common website maintenance mistakes</h2>
		<p>Even people who mean to maintain their site well tend to trip on the same handful of mistakes. Knowing them is half the battle.</p>
		<ul class="body">
			<li><strong>Updating on the live site with no backup.</strong> The most common and most damaging. It works fine almost every time, and the one time it does not, you have no way back. Back up first, and test on staging for anything that earns money.</li>
			<li><strong>Trusting backups you have never restored.</strong> A backup that has never been tested is a hope. Restore one occasionally to prove it actually works, because the day you need it is the wrong day to find out it does not.</li>
			<li><strong>Treating security as a plugin.</strong> Installing a security plugin and never reading its alerts is like fitting a smoke alarm and taking the battery out. Security is a maintained practice, not a one-time install.</li>
			<li><strong>Letting the routine slip.</strong> The tasks are easy; doing them consistently is hard. Maintenance almost always loses to more urgent work until something breaks. A schedule, a reminder, or a provider solves this.</li>
			<li><strong>Ignoring the quiet failures.</strong> A broken contact form or a lapsed SSL certificate throws no obvious error. Regular testing is the only way to catch the failures that do not announce themselves.</li>
			<li><strong>Keeping abandoned plugins.</strong> A plugin whose developer stopped updating it is an open hole waiting to be found. Audit and replace them before they become the breach.</li>
		</ul>
	</div>
</section>

<section id="calendar" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Plan the year</span>
		<h2>Your annual maintenance calendar</h2>
		<p>Zooming out, here is how the routine spreads across a year, so the bigger tasks have a home and never pile up unexpectedly.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>When</th><th>What to focus on</th></tr></thead>
				<tbody>
					<tr><td>Every week</td><td>Updates, backups, malware scan, form and speed checks</td></tr>
					<tr><td>Start of each month</td><td>Restore test, Core Web Vitals, database cleanup, Search Console review</td></tr>
					<tr><td>Q1</td><td>Full security audit; review last year\u2019s analytics; set goals</td></tr>
					<tr><td>Q2</td><td>Plugin audit and cleanup; accessibility review</td></tr>
					<tr><td>Q3</td><td>Technical SEO and content audit; hosting resource review</td></tr>
					<tr><td>Q4</td><td>Peak-season readiness (especially stores); disaster-recovery drill</td></tr>
					<tr><td>Annually</td><td>Domain and hosting renewal; legal pages review; major-version planning</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<section id="variations" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Tailor it</span>
		<h2>How the checklist changes by business type</h2>
		<p>The core routine is the same for everyone, but where you put the emphasis shifts with the kind of site you run.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>Type</th><th>Extra emphasis</th></tr></thead>
				<tbody>
					<tr><td>Small business / local</td><td>Uptime and working forms, so every lead gets through. See <a class="ilink" href="<?php echo esc_url( home_url( '/small-business-website-maintenance/' ) ); ?>">small business maintenance</a>.</td></tr>
					<tr><td>Ecommerce / WooCommerce</td><td>Checkout and payment testing, peak-traffic prep, more frequent backups.</td></tr>
					<tr><td>Blogs / content sites</td><td>Speed, broken links, content freshness and SEO health.</td></tr>
					<tr><td>Agencies</td><td>A repeatable process across many client sites; white-label reporting.</td></tr>
					<tr><td>Membership / SaaS marketing</td><td>Careful restore strategy and update timing around release cycles.</td></tr>
				</tbody>
			</table>
		</div>
		<div class="callout tip">
			<div class="ct-head"><?php echo fp_icon( 'check' ); ?>Expert tip</div>
			<p>If you only ever do three things from this entire checklist, make them: daily off-site backups, prompt tested updates, and a firewall. Those three prevent the large majority of website disasters on their own.</p>
		</div>
	</div>
</section>

<section id="routine" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Make it stick</span>
		<h2>Building a maintenance routine that actually happens</h2>
		<p>A checklist only helps if you use it, and the honest truth is that most DIY maintenance fails not because the tasks are hard but because they slip. Here is how to make the routine stick. Tie each group of tasks to a fixed trigger rather than good intentions: the weekly list to a set day (many owners pick Monday morning or Friday afternoon), the monthly list to the first of the month, the quarterly and annual reviews to calendar reminders you actually keep. Attach the work to a time, not to a mood.</p>
		<p>Second, lower the effort. Automate what can be automated, backups, uptime monitoring and scanning should all run on their own, so your active time goes to the checks that need judgement. Use the interactive checklist above so you can see progress and pick up where you left off. And be realistic about your own follow-through: if you already know the weekly update never quite happens, that is not a character flaw, it is a sign the job belongs with someone whose actual job it is. There is no prize for doing this yourself, only for it getting done.</p>
	</div>
</section>

<section id="diy" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Do it or delegate</span>
		<h2>DIY vs a maintenance plan</h2>
		<p>This checklist works whether you do the work yourself or hand it over, and both are legitimate choices. Doing it yourself makes sense if you have the time, the comfort with the technical side, and the discipline to keep it up every week and month without fail. The checklist is your complete playbook for that.</p>
		<p>A maintenance plan makes sense when your time is worth more spent on your business than on WordPress upkeep, when the technical side is not something you want to own, or when you have simply watched the routine slip one too many times. In that case the checklist becomes something else useful: a yardstick. It tells you exactly what a good provider should be doing, so you can judge whether the one you have (or are considering) is thorough or cutting corners. Our own <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-plans/' ) ); ?>">maintenance plans</a> run this entire checklist for you from $59/mo, and you can compare the wider market in our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-cost/' ) ); ?>">cost guide</a>. Either way, the goal is the same: a site that stays secure, fast and working.</p>
	</div>
</section>

<section id="faq" style="padding-top:20px" class="cg-faq">
	<div class="wrap cg">
		<span class="eyebrow">Answers</span>
		<h2>Website maintenance checklist FAQ</h2>
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
		<span class="eyebrow" style="color:#3fd9a3;justify-content:center">Skip the checklist</span>
		<h2>Let us run this checklist for you</h2>
		<p>Every task on this page, done for you every week and month, from $59/mo. No contracts, and a free audit to start.</p>
		<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/website-maintenance-plans/' ) ); ?>"><?php echo fp_icon( 'check' ); ?>See maintenance plans</a>
	</div>
</section>

<script>
(function(){
	var KEY='wpmpChecklist';
	var boxes=[].slice.call(document.querySelectorAll('.fp .clist input[type=checkbox]'));
	if(!boxes.length)return;
	var state={};
	try{state=JSON.parse(localStorage.getItem(KEY))||{};}catch(e){state={};}
	boxes.forEach(function(b){if(state[b.id])b.checked=true;});
	function update(){
		document.querySelectorAll('.fp .clist[data-sec]').forEach(function(sec){
			var bs=[].slice.call(sec.querySelectorAll('input[type=checkbox]'));
			var done=bs.filter(function(b){return b.checked;}).length;
			var cnt=sec.querySelector('[data-cnt]'); var mini=sec.querySelector('[data-mini]');
			if(cnt)cnt.textContent=done+'/'+bs.length;
			if(mini)mini.style.width=(bs.length?Math.round(done/bs.length*100):0)+'%';
		});
		var total=boxes.length, done=boxes.filter(function(b){return b.checked;}).length;
		var pct=total?Math.round(done/total*100):0;
		var bar=document.getElementById('ckBar'), lab=document.getElementById('ckPct');
		if(bar)bar.style.width=pct+'%'; if(lab)lab.textContent=pct+'%';
	}
	function save(){
		state={}; boxes.forEach(function(b){if(b.checked)state[b.id]=1;});
		try{localStorage.setItem(KEY,JSON.stringify(state));}catch(e){}
	}
	boxes.forEach(function(b){b.addEventListener('change',function(){save();update();});});
	var reset=document.getElementById('ckReset');
	if(reset)reset.addEventListener('click',function(){
		boxes.forEach(function(b){b.checked=false;});
		try{localStorage.removeItem(KEY);}catch(e){} update();
	});
	update();
})();
</script>

<script type="application/ld+json">
<?php
$page_url = home_url( '/website-maintenance-checklist/' );
$howto_steps = array();
foreach ( $recurring as $sec ) {
	$howto_steps[] = array( '@type' => 'HowToSection', 'name' => $sec['label'] . ' tasks',
		'itemListElement' => array_map( function( $it ) {
			return array( '@type' => 'HowToStep', 'name' => $it[0], 'text' => $it[1] );
		}, $sec['items'] ) );
}
$ld = array(
	'@context' => 'https://schema.org',
	'@graph'   => array(
		array(
			'@type' => 'Article',
			'headline' => 'The Complete Website Maintenance Checklist',
			'description' => $wpmp_seo['desc'],
			'url' => $page_url,
			'author' => array( '@type' => 'Person', 'name' => 'Bhupesh Rathore', 'url' => home_url( '/author-profile/' ) ),
			'publisher' => array( '@type' => 'Organization', 'name' => $c['brand'], 'url' => home_url( '/' ) ),
			'dateModified' => date( 'Y-m-d' ),
		),
		array(
			'@type' => 'HowTo',
			'name'  => 'How to maintain a WordPress website',
			'description' => 'A recurring website maintenance routine organised by daily, weekly, monthly, quarterly and annual tasks.',
			'step'  => $howto_steps,
		),
		array(
			'@type' => 'BreadcrumbList',
			'itemListElement' => array(
				array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => home_url( '/' ) ),
				array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Website Maintenance Checklist', 'item' => $page_url ),
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
