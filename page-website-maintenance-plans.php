<?php
/**
 * Template: Website Maintenance Plans  —  URL /website-maintenance-plans/
 * Long-form BOFU commercial page targeting "website maintenance plan".
 * 4,500+ words, research-backed, 6 core FAQs, full schema, internal linking.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wpmp_seo = array(
	'title' => 'Website Maintenance Plans From $59/mo | Compare 2026 Plans',
	'desc'  => 'Compare 2026 website maintenance plans: exactly what each plan includes, real pricing from $59/mo, and how to pick the right one. WordPress specialists. No contracts.',
);
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();
$author_photo = 'https://wpwebsitemaintenancepackages.com/wp-content/uploads/2026/08/bhupesh-rathore-1.webp';
$book = $c['calendly'];

/* 6 core FAQs (also power the FAQPage schema). */
$faqs = array(
	array( 'What is a website maintenance plan?', 'A website maintenance plan is a fixed monthly service that keeps your website updated, secure, backed up, fast and working properly after it launches. Instead of you reacting to problems as they happen and paying emergency rates, a team handles the recurring technical work, updates, security, backups, speed, monitoring and fixes, on a schedule. It is the difference between a site that quietly earns for you and one that becomes an expensive emergency at the worst possible time.' ),
	array( 'How much does a website maintenance plan cost?', 'Most website maintenance plans cost between $20 and $500 per month in 2026, with ecommerce and high-traffic sites running higher. Ours start at $59/mo for essential care, $129/mo for full care with speed work and developer time, and $249/mo for stores and agencies. The biggest cost driver is not the provider, it is your site\u2019s complexity, especially the number of plugins and whether it takes payments. For the full market breakdown, see our website maintenance cost guide.' ),
	array( 'What is included in a website maintenance plan?', 'A real plan covers six core jobs: software updates (core, theme and plugins), security (firewall, monitoring, malware cleanup), daily off-site backups, speed and Core Web Vitals optimization, 24/7 uptime monitoring, and fixes from a real developer. Higher tiers add staging, priority support, monthly developer hours, and WooCommerce support. Any cheaper plan that only automates updates is not really maintenance, it just looks like it.' ),
	array( 'Do I really need a monthly website maintenance plan?', 'If your website brings in leads, bookings or sales, yes. In 2025 alone, security researchers logged more than 11,000 WordPress vulnerabilities, over 90% of them in plugins, and the median time from a flaw being disclosed to the first exploit attempt is about five hours. A monthly plan keeps you patched and monitored so those gaps never open. For a low-stakes personal site that earns nothing, basic DIY care can be enough.' ),
	array( 'Which plan is right for my website?', 'Match the plan to what your site is worth and how much it does. Brochure and small business sites usually fit Essential or Growth; content sites that publish regularly fit Growth for its speed work and edits; stores, high-traffic sites and agencies fit Pro for store support, fast response and white-label reporting. If you are unsure, send your URL for a free audit and we will recommend the honest fit, even if it is the cheapest plan.' ),
	array( 'Is there a contract, and can I cancel any time?', 'No lock-in contracts. Every plan is month to month, and you can upgrade, downgrade or cancel any time, with changes taking effect at your next billing cycle. We would rather earn your business every month than trap you in an annual commitment. Annual billing is available at a discount if you prefer, but it is never required.' ),
);

include get_theme_file_path( 'parts/head.php' );
include get_theme_file_path( 'parts/site-header.php' );
?>
<style>
.fp .pl-hero{padding:56px 0 30px;position:relative;overflow:hidden;background:linear-gradient(180deg,var(--accent-soft),transparent)}
.fp .pl-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(50% 60% at 88% 0%,rgba(14,159,110,.12),transparent 60%);pointer-events:none}
.fp .pl-hero h1{max-width:18ch;position:relative}
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
.fp .example{background:var(--surface);border:1px solid var(--line);border-radius:18px;box-shadow:var(--shadow);padding:26px;margin:18px 0}
.fp .example h3{margin:0 0 4px}.fp .example .sub{color:var(--muted);font-size:.92rem;margin-bottom:16px}
.fp .example ul{list-style:none;padding:0;margin:0}
.fp .example li{display:flex;gap:11px;padding:9px 0;border-bottom:1px dashed var(--line);font-size:.95rem;align-items:flex-start}
.fp .example li:last-child{border-bottom:0}.fp .example li svg{width:17px;height:17px;color:var(--accent);flex:0 0 17px;margin-top:3px}
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
@media(max-width:820px){.fp .plans3,.fp .inc-grid,.fp .check-cols,.fp .trust-grid,.fp .statline{grid-template-columns:1fr 1fr}.fp .cg-author{flex-direction:column;align-items:center;text-align:center}.fp .plan.pop{order:-1}}
@media(max-width:520px){.fp .plans3,.fp .inc-grid,.fp .check-cols,.fp .trust-grid,.fp .statline{grid-template-columns:1fr}}
</style>

<section class="pl-hero">
	<div class="wrap">
		<nav class="crumbs" aria-label="Breadcrumb" style="position:relative"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>Website Maintenance Plans</nav>
		<span class="eyebrow" style="position:relative">Plans, pricing &amp; what's included</span>
		<h1>Website Maintenance Plans That Keep Your Site Safe</h1>
		<p class="pl-lead">Flat monthly plans that keep your website updated, secure, fast and online, handled by real WordPress developers so you never have to think about the technical side. Compare exactly what each plan includes, see what a month actually looks like, and pick the one that fits your site. No contracts, cancel anytime.</p>
		<div class="pl-meta">
			<span><?php echo fp_icon( 'user' ); ?>By Bhupesh Rathore, ThinkFlow Media</span>
			<span><?php echo fp_icon( 'clock' ); ?>Updated <?php echo esc_html( date( 'F Y' ) ); ?></span>
			<span><?php echo fp_icon( 'check' ); ?>Plans from $59/mo</span>
		</div>
	</div>
</section>

<section style="padding:34px 0 0">
	<div class="wrap">
		<div class="tldr">
			<h2>The short version</h2>
			<p>A <strong>website maintenance plan</strong> is a fixed monthly service that keeps your site updated, secure, backed up, fast and working, so you never have to think about the technical side of running it. Ours run from <strong>$59/mo</strong> for small sites to <strong>$249/mo</strong> for stores and agencies, all with no contracts. This page walks through what a plan should include, what each of our plans covers, how to choose, and what it all really costs. If you want general market pricing across every provider, start with our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-cost/' ) ); ?>">website maintenance cost guide</a>, and WordPress owners can compare <a class="ilink" href="<?php echo esc_url( home_url( '/wordpress-care-plans/' ) ); ?>">WordPress care plans</a>.</p>
		</div>
		<div class="toc">
			<b>On this page</b>
			<div class="toc-list">
				<a href="#what">What is a plan</a>
				<a href="#why">Why you need one</a>
				<a href="#included">What's included</a>
				<a href="#plans">Compare our plans</a>
				<a href="#matrix">Feature matrix</a>
				<a href="#tiers">Plan tiers explained</a>
				<a href="#example">A month on a plan</a>
				<a href="#recommend">Which plan?</a>
				<a href="#who-needs">Who needs one</a>
				<a href="#pricing-models">Monthly vs annual</a>
				<a href="#diy">DIY vs a plan</a>
				<a href="#choose">What to look for</a>
				<a href="#start">How to start</a>
				<a href="#faq">FAQ</a>
			</div>
		</div>
	</div>
</section>

<section id="what" style="padding-top:44px">
	<div class="wrap cg">
		<span class="eyebrow">Start here</span>
		<h2>What is a website maintenance plan?</h2>
		<p>A website maintenance plan is an ongoing, done-for-you service that keeps your website healthy after it goes live. Rather than treating your site as a finished product the day it launches, a plan treats it for what it actually is: software connected to the internet that needs regular care to stay secure, fast and functional. For a fixed monthly fee, a team handles the recurring technical work on a schedule, and steps in when something breaks.</p>
		<p>The work falls into six areas that every serious plan should cover: keeping the software updated, defending the site against attacks, backing everything up daily, keeping pages fast, watching for downtime around the clock, and fixing problems when they appear. Cheaper offers that only automate one or two of these, usually just updates, are marketed as maintenance but leave you exposed on everything else. The label matters far less than what is actually inside.</p>
		<p>People search for this service under several names. You will see it sold as website maintenance plans, <a class="ilink" href="<?php echo esc_url( home_url( '/#pricing' ) ); ?>">website maintenance packages</a>, WordPress care plans, support plans, or website management plans. Underneath the branding, they are the same thing: a monthly arrangement that trades a predictable fee for the assurance that the boring, critical work gets done every week whether or not you are watching. That predictability is the whole point. A plan turns an unpredictable stream of emergencies and hourly bills into one line item you can budget for.</p>
		<p>The alternative to a plan is not "no maintenance." It is reactive maintenance: doing nothing until something breaks, then paying emergency rates to fix it. That model feels cheaper right up until the day it is dramatically more expensive, which is exactly why maintenance exists as a category.</p>
	</div>
</section>

<section id="why" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Why it matters</span>
		<h2>Why you need a website maintenance plan</h2>
		<p>The honest way to judge a plan is against the cost of not having one. That cost is easy to underestimate because neglect stays invisible right up until it lands, and when it lands, it is expensive. The numbers from 2025 and 2026 make the case better than any sales pitch.</p>
		<div class="statline">
			<div class="s"><b>11,000+</b><span>WordPress vulnerabilities logged in 2025</span></div>
			<div class="s"><b>90%+</b><span>of them in plugins, not core</span></div>
			<div class="s"><b>~5 hrs</b><span>median time to first exploit after disclosure</span></div>
			<div class="s"><b>~$14.5k</b><span>average all-in cost of a hack</span></div>
		</div>
		<p>WordPress powers well over 40% of the web, which makes it the single most attractive target for attackers, not because it is uniquely insecure, but because attacking it at scale is economical. Build one scanner, run it against the internet, and almost every site it finds is WordPress. The reassuring part is that WordPress core is very well maintained; only a handful of core vulnerabilities appeared in all of 2025. The risk lives almost entirely in plugins and themes, where security researchers logged more than eleven thousand vulnerabilities in a single year, over ninety percent of the total.</p>
		<p>The speed is what makes maintenance non-negotiable. Once a vulnerability is publicly disclosed, the median time to the first exploit attempt is roughly five hours. By the time you read about a new flaw, automated bots are already scanning for it, and around half of all web traffic now comes from bots. A meaningful share of these vulnerabilities require no login at all to exploit. This is why "I'll update when I get around to it" is a genuine gamble: the window between a patch being announced and your site being probed is measured in hours, not weeks.</p>
		<p>When a site does get compromised, the bill is rarely just cleanup. Studies of hacked WordPress sites put the average all-in cost, malware removal, emergency developer time, downtime, lost revenue and the months of SEO work to recover from a Google security flag, at around fourteen thousand dollars. The average hacked site is offline for a day or two during cleanup, and Google's "this site may be hacked" warning can linger in search results for weeks afterward. Recovering a site that has been neglected for six months typically runs several thousand dollars; one left more than a year often needs dozens of professional hours to bring back safely. Notably, the majority of hacked sites in 2025 had at least one plugin running an outdated version, the exact thing a maintenance plan prevents.</p>
		<p>Security is only half the story. Speed decays too. Databases fill with clutter, images get uploaded oversized, and plugins pile scripts onto every page, so a site that launched fast slowly slows down. Only about a third of mobile WordPress sites currently pass Google's Core Web Vitals, and since Google uses page speed as a ranking factor, a neglected slow site quietly loses rankings and conversions while you focus on running the business. A plan keeps both the security and the speed handled, which is why maintenance is best understood as insurance that also improves the thing it protects.</p>
		<div class="callout tip">
			<div class="ct-head"><?php echo fp_icon( 'check' ); ?>The simplest way to think about it</div>
			<p>A plan from $59/mo costs a fraction of a single hack cleanup, a day of downtime, or the lost revenue from a slow site. You are not really buying software. You are buying the assurance that the expensive day never comes.</p>
		</div>
	</div>
</section>

<section id="included" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">The six core jobs</span>
		<h2>What's included in a website maintenance plan</h2>
		<p>Whatever tier you choose, a genuine plan covers six jobs. Here is what each actually involves, so you know what you are paying for and what to demand from any provider.</p>
		<div class="inc-grid">
			<div class="inc"><span class="ic"><?php echo fp_icon( 'refresh' ); ?></span><h3>Software updates</h3><p>WordPress core, themes and plugins update constantly, often to patch security holes attackers already know about. A plan applies those updates on a schedule, backing up first and testing after, and on higher tiers staging major updates before they touch your live site, so an update never quietly breaks something.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'shield' ); ?></span><h3>Security</h3><p>Active defence, not just hope: a firewall filtering malicious traffic, protection against automated login attacks, file-change monitoring, and regular malware scans. It also means a plan for when something gets through, cleaning the infection, restoring clean files, and closing the hole that let it in.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'save' ); ?></span><h3>Daily backups</h3><p>Automatic daily backups stored off-site, away from your host, because a backup on the same server disappears if that server fails. Backups are also what make everything else safe: every update and change is reversible because a clean copy always exists from moments before.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'gauge' ); ?></span><h3>Speed &amp; Core Web Vitals</h3><p>Caching, image optimization, database cleanup and front-end tuning to keep pages fast and <a class="ilink" href="https://web.dev/vitals/" target="_blank" rel="noopener">Core Web Vitals</a> healthy. This is not just about experience: speed is a Google ranking factor, so a well-maintained fast site quietly earns better rankings than a neglected one.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'pulse' ); ?></span><h3>Uptime monitoring</h3><p>Continuous checks that alert the team the moment your site goes down, usually before a single customer notices. Without monitoring, downtime often gets discovered by an angry visitor long after it started; with it, most outages are caught and resolved before they cost you anything.</p></div>
			<div class="inc"><span class="ic"><?php echo fp_icon( 'wrench' ); ?></span><h3>Fixes &amp; support</h3><p>The part you feel day to day: a real developer to handle the content change, the new section, the plugin acting up, or the dreaded blank white screen, ideally someone who already knows how your site is built, not a ticket bot.</p></div>
		</div>
		<p>Two extras separate a good plan from a great one. A <strong>monthly report</strong> in plain English proves the work is actually happening, what was updated, what was blocked, uptime and speed scores, and backup status. And <strong>developer time</strong> included in the plan means small edits and fixes do not turn into separate invoices. Our <a class="ilink" href="<?php echo esc_url( home_url( '/wordpress-website-maintenance-services/' ) ); ?>">WordPress website maintenance services</a> page goes deeper on how each job is performed.</p>
	</div>
</section>

<section id="plans" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Choose your plan</span>
		<h2>Compare our website maintenance plans</h2>
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
	</div>
</section>

<section id="matrix" style="padding-top:10px">
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

<section id="tiers" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">In plain English</span>
		<h2>Which plan does what</h2>
		<h3>Essential Care ($59/mo) &mdash; the safety net</h3>
		<p>Essential is built for sites that need to stay protected and online without a lot of ongoing changes: brochure sites, small local business sites, and simple blogs. It covers the four things that prevent disasters, weekly tested updates, daily off-site backups, 24/7 monitoring and baseline security, plus a monthly report so you can see it is working. What it does not include is hands-on developer time or speed optimization; it is protection, not a retainer for regular edits. For a low-maintenance site that mainly needs to not get hacked and not go down, it is often all you need.</p>
		<h3>Growth ($129/mo) &mdash; the most popular</h3>
		<p>Growth is the tier most business sites land on, because it adds the judgment layer on top of the fundamentals. You get everything in Essential plus active speed and Core Web Vitals work, advanced security with same-day malware cleanup, priority support with an under-four-hour response, staging-tested updates, and two hours of developer or edit time every month. That developer time is the difference maker: small content changes, a new page section or a quick fix get handled inside your plan instead of becoming separate invoices. If your site drives leads or sales, this is usually the right balance of protection, performance and hands-on help.</p>
		<h3>Pro / Agency ($249/mo) &mdash; for complexity and scale</h3>
		<p>Pro is for sites where the stakes and the moving parts are higher: WooCommerce stores, high-traffic content sites, and agencies maintaining many client sites. On top of everything in Growth, it adds full store support (keeping checkout, payment gateways and extensions current), unlimited small content edits, a dedicated account manager, priority emergency support, and white-label monthly reports so agencies can deliver maintenance under their own brand. When downtime means direct lost sales, or when you are responsible for other people's sites, the faster response and deeper coverage pay for themselves quickly.</p>
	</div>
</section>

<section id="example" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">A worked example</span>
		<h2>What a website maintenance plan looks like in a month</h2>
		<p>Plans can feel abstract until you see the month-to-month reality, so here is exactly what a small business on our Growth plan gets in a typical month. This is the "website maintenance plan example" people look for before buying, the actual work behind the fee.</p>
		<div class="example">
			<h3>Growth plan &mdash; a typical month</h3>
			<div class="sub">Small business WordPress site, ~15 plugins, contact forms, moderate traffic</div>
			<ul>
				<li><?php echo fp_icon( 'check' ); ?>Four weekly update cycles: core, theme and plugins reviewed, backed up and tested before going live</li>
				<li><?php echo fp_icon( 'check' ); ?>Thirty daily off-site backups taken and verified, ready to restore in one click</li>
				<li><?php echo fp_icon( 'check' ); ?>Continuous uptime monitoring and malware scanning, with one blocked login-attack spike handled silently</li>
				<li><?php echo fp_icon( 'check' ); ?>One speed pass: caching refreshed, three oversized images optimized, the database cleaned of clutter</li>
				<li><?php echo fp_icon( 'check' ); ?>Two hours of developer time used to update a services page and fix a broken contact-form style</li>
				<li><?php echo fp_icon( 'check' ); ?>A plain-English monthly report: what changed, what was blocked, uptime and speed scores, backup status</li>
			</ul>
		</div>
		<p>That is roughly five to seven hours of skilled work spread across the month, for $129. Doing the same yourself would cost at least that much of your own time, and that is before the risk: one untested update on a live site can turn a quiet Tuesday into a scramble and a paid emergency fix. The plan is not just cheaper than your time in most cases, it removes the downside entirely. To see how that fee compares to the wider market, our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-cost/' ) ); ?>">website maintenance cost guide</a> breaks down real 2026 pricing by site type and provider.</p>
	</div>
</section>

<section id="recommend" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Match it to your site</span>
		<h2>Which plan is right for your website?</h2>
		<p>The right plan is the one that matches what your site is worth and how much it does. A brochure site and a busy store have very different needs, and paying for more than you need is as much a mistake as paying for too little. Here is a simple guide by site type.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>Your site</th><th>Best plan</th><th>Why</th></tr></thead>
				<tbody>
					<tr><td>Personal / brochure site</td><td class="price">Essential</td><td>Needs protection and uptime, not ongoing developer time</td></tr>
					<tr><td>Small business (leads &amp; forms)</td><td class="price">Essential &rarr; Growth</td><td>Growth if you want speed work and monthly edits handled</td></tr>
					<tr><td>Blog / content site</td><td class="price">Growth</td><td>Speed and regular edits matter for protecting SEO traffic</td></tr>
					<tr><td>WooCommerce / store</td><td class="price">Pro</td><td>Store support and fast response protect real-time sales</td></tr>
					<tr><td>High-traffic / SaaS</td><td class="price">Pro or custom</td><td>Complexity and uptime stakes justify hands-on care</td></tr>
					<tr><td>Agency (many client sites)</td><td class="price">Pro / Agency</td><td>White-label reports and volume-friendly coverage</td></tr>
				</tbody>
			</table>
		</div>
		<p>A useful rule of thumb: if losing your site for a day would cost you more than the annual price of a plan, you are underinsured on Essential and should be on Growth or Pro. If your site earns little or nothing and rarely changes, do not overpay, Essential or even careful DIY is fine. When you are genuinely unsure, send your URL for a free audit and we will tell you honestly which tier fits, including if that is the cheapest one.</p>
	</div>
</section>

<section id="who-needs" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Is it for you?</span>
		<h2>Who needs a website maintenance plan?</h2>
		<p>The clearest signal is simple: if your website does a job for your business, it needs maintenance. The more directly it touches money, the more a plan matters, because the cost of it failing is higher and the failure always seems to arrive at the worst moment.</p>
		<p><strong>Local service businesses</strong> like HVAC, plumbing, roofing and dental practices rely on their site to capture leads. A broken contact form or a day of downtime is a day of missed calls, so uptime, working forms and fast response are the priority. <strong>Ecommerce and WooCommerce stores</strong> have the most to lose: every minute of downtime is lost sales, and checkout, payment gateways and inventory add moving parts that need constant attention. <strong>Content and blog sites</strong> live and die by SEO traffic, which means speed and consistent updates protect the rankings you have worked to build. <strong>Professional services</strong>, legal, medical, financial, carry reputation risk where a hacked or defaced site damages trust with high-value clients. And <strong>agencies and freelancers</strong> who manage sites for others need reliable, white-label maintenance so they can offer care without doing every update themselves at 2am.</p>
		<p>There is an honest flip side. If your site is a low-stakes personal project that earns nothing, rarely changes, and you enjoy the upkeep, you may not need a paid plan at all, careful DIY can be enough. Do not buy maintenance out of guilt. Buy it when the site is worth protecting, and you will always come out ahead.</p>
	</div>
</section>

<section id="vs-other" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Don't confuse these</span>
		<h2>A plan vs one-time fixes vs a redesign</h2>
		<p>Three different things get lumped together, and mixing them up leads to buying the wrong one. A <strong>maintenance plan</strong> is ongoing, recurring care that keeps your current site healthy month after month, from $59. A <strong>one-time fix</strong> solves a single problem right now, a hacked site, a broken feature, a failed update, with no commitment, from $99; it is the right call when you have one specific issue and do not want a plan. A <strong>redesign</strong> is a one-time project that rebuilds how your site looks or works, typically $2,000 to $15,000 or more, and you only need it every few years.</p>
		<p>Here is the connection worth knowing: good maintenance actually delays the need for a redesign. A site kept fast, updated and secure ages far more gracefully than one left to rot, so you rebuild less often and protect the larger investment you already made. A plan is not competing with a redesign; it is what makes your redesign last. If you are weighing the pure economics of each option, our <a class="ilink" href="<?php echo esc_url( home_url( '/website-maintenance-cost/' ) ); ?>">cost guide</a> lays out the numbers side by side.</p>
	</div>
</section>

<section id="pricing-models" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">How you pay</span>
		<h2>Monthly vs annual plans</h2>
		<p>The coverage is identical whichever way you pay; the choice is about flexibility versus a discount. Monthly billing keeps you flexible with no commitment, which is ideal when you are trying a provider or want to manage cash flow. Annual billing typically saves ten to twenty percent and suits established sites where you already know you want ongoing care. We keep every plan month to month by default, with no lock-in, so you can start on monthly and switch to annual once you have seen the value first-hand.</p>
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
		<p>One thing to check with any provider, us included, is whether hosting is bundled or separate, because it materially changes the total. Our plans keep hosting separate by default so the price stays clean and you keep the host you already have; if your host is holding the site back, we can help you move during onboarding.</p>
	</div>
</section>

<section id="diy" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Plan vs no plan</span>
		<h2>DIY vs a managed maintenance plan</h2>
		<p>You can absolutely maintain a WordPress site yourself. The real question is whether it is cheaper once you count your own time and the risk of getting it wrong. Done properly, maintenance on a typical business site is around five hours of work a month: reviewing and testing updates, checking backups, running security scans, cleaning the database, and handling small fixes. Priced at even a modest hourly rate for your own time, that is $250 or more a month, before you factor in the risk. One bad update on a live site, or a missed security patch during that five-hour exploit window, can turn into a lost weekend and a paid rescue.</p>
		<div class="tbl-wrap">
			<table class="cg-tbl">
				<thead><tr><th>What you get</th><th>Managed plan</th><th>DIY</th></tr></thead>
				<tbody>
					<tr><td>Weekly tested updates</td><td class="price">Included</td><td>Your time, ~5 hrs/mo</td></tr>
					<tr><td>Daily off-site backups</td><td class="price">Included</td><td>Plugin + setup + checks</td></tr>
					<tr><td>24/7 monitoring</td><td class="price">Included</td><td>Rarely set up properly</td></tr>
					<tr><td>Same-day fix when it breaks</td><td class="price">Included</td><td>Panic + paid emergency</td></tr>
					<tr><td>Real cost</td><td class="price">From $59/mo</td><td>$250&ndash;$500/mo of your time + risk</td></tr>
				</tbody>
			</table>
		</div>
		<p>DIY genuinely makes sense for a low-stakes personal site, or for an owner who is technical and enjoys the upkeep. For a site that earns money, a plan almost always costs less than your own hours and removes the risk entirely, which is why most business owners eventually switch.</p>
	</div>
</section>

<section id="choose" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Buy smart</span>
		<h2>What to look for in a good maintenance plan</h2>
		<p>Not every plan at the same price is equal, and the cheapest one is rarely the right one. Before you sign anything, check these five things, they separate real protection from a plan that only looks like protection.</p>
		<ul class="body">
			<li><strong>What's actually included.</strong> All six core jobs, or just automatic updates? Vague inclusions usually mean the gaps are real.</li>
			<li><strong>Backups and a restore promise.</strong> Daily, off-site, and a clear answer to "how would you put my site back after a bad update?" If they cannot answer that, they cannot really protect you.</li>
			<li><strong>Response time.</strong> A commitment like same-day or under four hours, especially for a site that drives leads or sales. "We'll get to it" is not support.</li>
			<li><strong>Who does the work.</strong> A real developer who tests updates and fixes what breaks, or a dashboard and a ticket queue? Automated updates are not the same as maintenance.</li>
			<li><strong>Contract terms.</strong> Month to month with the freedom to cancel is a sign of confidence. Be cautious of anyone who ties you into a year before you have seen their work.</li>
		</ul>
		<div class="callout warn">
			<div class="ct-head"><?php echo fp_icon( 'alert' ); ?>Red flag</div>
			<p>A plan that only runs automatic updates and calls itself "maintenance" leaves you exposed on security, backups and real support, the exact things that matter when something goes wrong. A slightly higher price that covers all six jobs almost always beats a cheap plan that covers one; the first emergency erases the saving.</p>
		</div>
	</div>
</section>

<section id="start" style="padding-top:20px">
	<div class="wrap cg">
		<span class="eyebrow">Getting started</span>
		<h2>How to start a plan with us</h2>
		<p>Onboarding is deliberately simple, and there is no long form or hard sell. It runs in four steps and we take over within 24 hours.</p>
		<ul class="body">
			<li><strong>Free site audit.</strong> Send us your URL. We run a full health, security and speed check and tell you exactly what shape your site is in, at no charge and no obligation.</li>
			<li><strong>Pick your plan.</strong> Choose the tier that fits, or take our recommendation. Month to month, no contracts, change or cancel any time.</li>
			<li><strong>We take over.</strong> Give us secure access. Within 24 hours we audit, back up, harden and bring everything current.</li>
			<li><strong>You stop worrying.</strong> We update, monitor, back up and fix on autopilot, and you get a clear report each month and your time back.</li>
		</ul>
		<p>If you only need one thing fixed rather than ongoing care, that is fine too, we handle one-time WordPress fixes from $99, no plan required. And if a plan would genuinely serve you better, we will say so honestly rather than sell you a one-off.</p>
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
		<div class="callout" style="background:var(--ink);color:#fff;border-radius:16px;padding:26px;text-align:center">
			<b style="font-family:var(--display);font-size:1.2rem;color:#fff">Our promise: if we break it, we fix it. Same day. No charge.</b>
			<p style="color:#aeb8c2;margin:10px auto 0;max-width:52ch">Every update is backed up and tested. If anything ever goes wrong on our watch, we roll it back and make it right at no cost, every plan, every time.</p>
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
