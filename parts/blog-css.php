<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<style>
.fp .blog-hero{padding:56px 0 34px;position:relative;overflow:hidden;background:linear-gradient(180deg,var(--accent-soft),transparent)}
.fp .blog-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(50% 60% at 88% 0%,rgba(14,159,110,.12),transparent 60%);pointer-events:none}
.fp .blog-hero h1{max-width:22ch;position:relative}
.fp .blog-hero .lead{margin-top:14px;position:relative;max-width:64ch}
.fp .crumbs{font-size:.85rem;color:var(--muted);font-weight:600;position:relative;margin-bottom:12px}
.fp .crumbs a{color:var(--accent-deep)}.fp .crumbs .sep{margin:0 8px;color:var(--line)}
.fp .blog-wrap{padding:44px 0 76px}
.fp .post-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;align-items:start}
.fp .post-card{background:var(--surface);border:1px solid var(--line);border-radius:16px;box-shadow:var(--shadow);overflow:hidden;display:flex;flex-direction:column;transition:transform .15s,box-shadow .15s}
.fp .post-card:hover{transform:translateY(-3px);box-shadow:0 10px 30px rgba(16,20,26,.10)}
.fp .pc-img{display:block;aspect-ratio:16/9;overflow:hidden;background:var(--accent-soft)}
.fp .pc-img img{width:100%;height:100%;object-fit:cover;display:block}
.fp .pc-body{padding:22px;display:flex;flex-direction:column;gap:10px;flex:1}
.fp .pc-cat{font-size:.72rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:var(--accent-deep)}
.fp .pc-title{font-family:var(--display);font-weight:700;font-size:1.2rem;line-height:1.25;letter-spacing:-.01em;margin:0}
.fp .pc-title a:hover{color:var(--accent-deep)}
.fp .pc-meta{font-size:.82rem;color:var(--muted);font-weight:600}
.fp .pc-excerpt{color:var(--muted);font-size:.94rem;flex:1;margin:0}
.fp .pc-more{margin-top:2px;font-weight:700;color:var(--accent-deep);display:inline-flex;align-items:center;gap:7px;font-size:.9rem}
.fp .pc-more svg{width:16px;height:16px}
.fp .pagination{display:flex;gap:8px;justify-content:center;margin-top:44px;flex-wrap:wrap}
.fp .pagination .page-numbers{display:inline-flex;align-items:center;justify-content:center;min-width:42px;height:42px;padding:0 14px;border:1px solid var(--line);border-radius:10px;background:var(--surface);font-weight:700;color:var(--ink);font-size:.92rem}
.fp .pagination .page-numbers.current{background:var(--ink);color:#fff;border-color:var(--ink)}
.fp .pagination a.page-numbers:hover{border-color:var(--accent);color:var(--accent-deep)}
.fp .blog-empty{text-align:center;padding:60px 20px;color:var(--muted);background:var(--surface);border:1px solid var(--line);border-radius:16px}
.fp .blog-cta{background:var(--ink);color:#fff;border-radius:18px;padding:36px;text-align:center;margin-top:48px}
.fp .blog-cta h2{color:#fff;font-size:1.5rem;margin:0 auto 10px;max-width:24ch}
.fp .blog-cta p{color:#aeb8c2;margin:0 auto 20px;max-width:52ch}
@media(max-width:900px){.fp .post-grid{grid-template-columns:1fr 1fr}}
@media(max-width:600px){.fp .post-grid{grid-template-columns:1fr}}
</style>
