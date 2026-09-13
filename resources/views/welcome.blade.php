<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Lakvion Technologies | Software Development Company in Sri Lanka</title>
<meta name="description" content="Lakvion Technologies is a Sri Lanka based software development company delivering web, mobile, and custom software solutions, UI/UX design, and IT support." />
<meta name="keywords" content="Lakvion Technologies, software development company Sri Lanka, web application development, mobile app development, custom software development, UI/UX design Sri Lanka, IT company Sri Lanka" />
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name="googlebot" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name="author" content="Lakvion Technologies" />
<meta name="theme-color" content="#060B18" />
<link rel="canonical" href="https://lakviontechnologies.jo3.org/" />

<!-- Open Graph -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://lakviontechnologies.jo3.org/" />
<meta property="og:site_name" content="Lakvion Technologies" />
<meta property="og:title" content="Lakvion Technologies | Software Development Company in Sri Lanka" />
<meta property="og:description" content="Lakvion Technologies is a Sri Lanka based software development company delivering web, mobile, and custom software solutions, UI/UX design, and IT support." />
<meta property="og:image" content="{{ asset('image/logo/logo.png') }}" />
<meta property="og:image:width" content="2146" />
<meta property="og:image:height" content="733" />
<meta property="og:image:alt" content="Lakvion Technologies logo" />
<meta property="og:locale" content="en_US" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Lakvion Technologies | Software Development Company in Sri Lanka" />
<meta name="twitter:description" content="Lakvion Technologies is a Sri Lanka based software development company delivering web, mobile, and custom software solutions, UI/UX design, and IT support." />
<meta name="twitter:image" content="{{ asset('image/logo/logo.png') }}" />
<meta name="twitter:image:alt" content="Lakvion Technologies logo" />

<link rel="icon" type="image/png" href="{{ asset('image/favicon/favicon.png') }}" />
<link rel="apple-touch-icon" href="{{ asset('image/favicon/favicon.png') }}" />

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ProfessionalService",
    "name": "Lakvion Technologies",
    "alternateName": "Lakvion",
    "url": "https://lakviontechnologies.jo3.org/",
    "logo": "{{ asset('image/logo/logo.png') }}",
    "image": "{{ asset('image/logo/logo.png') }}",
    "description": "Lakvion Technologies is a Sri Lanka based software development company delivering web, mobile, and custom software solutions, UI/UX design, and IT support.",
    "email": "lakviontechnologies@gmail.com",
    "telephone": "+94787595375",
    "address": {
        "@@type": "PostalAddress",
        "addressCountry": "LK"
    },
    "areaServed": "Sri Lanka",
    "priceRange": "$$",
    "sameAs": [
        "https://www.facebook.com/share/1d42XyPZXX/",
        "https://www.linkedin.com/company/lakvion-technologies/"
    ],
    "makesOffer": [
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Web Application Development" } },
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Custom Software Development" } },
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Mobile Application Development" } },
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Backend & API Development" } },
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "UI/UX Design" } },
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "E-commerce Solutions" } },
        { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Software Maintenance & Support" } }
    ]
}
</script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

<!-- Background ambient glow -->
<div class="fixed inset-0 -z-10 overflow-hidden">
  <div class="absolute -top-40 -left-40 w-[36rem] h-[36rem] rounded-full bg-blue/20 blur-[140px]"></div>
  <div class="absolute top-1/3 -right-32 w-[30rem] h-[30rem] rounded-full bg-cyan/10 blur-[160px]"></div>
  <div class="absolute inset-0 grain"></div>
</div>

<!-- ============ NAV ============ -->
<header id="top" class="fixed top-0 inset-x-0 z-50">
  <div class="mx-auto max-w-7xl px-6 lg:px-10">
    <div class="mt-4 flex items-center justify-between rounded-2xl glass px-5 py-3.5">
      <a href="#top" class="flex items-center rounded-lg bg-paper px-3 py-1.5">
        <img src="{{ asset('image/logo/logo.png') }}" alt="Lakvion Technologies" width="2146" height="733" class="h-7 w-auto" />
      </a>

      <nav class="hidden md:flex items-center gap-8 font-body text-sm text-mist">
        <a href="#home" class="nav-link hover:text-paper transition-colors">Home</a>
        <a href="#services" class="nav-link hover:text-paper transition-colors">Services</a>
        <a href="#about" class="nav-link hover:text-paper transition-colors">About</a>
        <a href="#portfolio" class="nav-link hover:text-paper transition-colors">Portfolio</a>
        <a href="#careers" class="nav-link hover:text-paper transition-colors">Careers</a>
        <a href="#contact" class="nav-link hover:text-paper transition-colors">Contact</a>
      </nav>

      <a href="#contact" class="hidden md:inline-flex btn-primary font-display font-semibold text-sm px-5 py-2.5 rounded-full">
        Get a Quote
      </a>

      <button id="menuBtn" aria-label="Open menu" aria-expanded="false" class="md:hidden text-paper p-1">
        <svg id="iconOpen" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round"/></svg>
        <svg id="iconClose" class="hidden" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 6l12 12M18 6L6 18" stroke-linecap="round"/></svg>
      </button>
    </div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="hidden md:hidden mt-2 rounded-2xl glass px-6 py-5 flex flex-col gap-4 font-body text-mist">
      <a href="#home" class="mobile-link hover:text-paper">Home</a>
      <a href="#services" class="mobile-link hover:text-paper">Services</a>
      <a href="#about" class="mobile-link hover:text-paper">About</a>
      <a href="#portfolio" class="mobile-link hover:text-paper">Portfolio</a>
      <a href="#careers" class="mobile-link hover:text-paper">Careers</a>
      <a href="#contact" class="mobile-link hover:text-paper">Contact</a>
      <a href="#contact" class="mobile-link btn-primary text-center font-display font-semibold px-5 py-2.5 rounded-full !text-[#051019]">Get a Quote</a>
    </div>
  </div>
</header>

<!-- ============ HERO ============ -->
<section id="home" class="relative pt-40 pb-28 px-6 lg:px-10 overflow-hidden">
  <div class="mx-auto max-w-7xl grid lg:grid-cols-[1.1fr_0.9fr] gap-16 items-center">

    <div>
      <div class="inline-flex items-center gap-2 rounded-full glass px-4 py-1.5 text-xs mono-label text-mist mb-8">
        <span class="w-1.5 h-1.5 rounded-full bg-cyan"></span>
        Software studio, based in Sri Lanka
      </div>

      <h1 class="font-display text-[2.6rem] leading-[1.08] sm:text-6xl lg:text-[3.4rem] font-semibold tracking-tight text-paper glow-text">
        Lakvion Technologies
        <br/>
        <span class="bg-gradient-to-r from-cyan to-blue bg-clip-text text-transparent">Building Ideas. Powering Tomorrow.</span>
      </h1>

      <p class="mt-7 max-w-lg text-base sm:text-lg text-mist leading-relaxed">
        Delivering modern, reliable, and scalable digital solutions that help businesses turn ideas into reality.
      </p>

      <div class="mt-10 flex flex-wrap gap-4">
        <a href="#services" class="btn-primary font-display font-semibold px-7 py-3.5 rounded-full text-sm">Explore Services</a>
        <a href="#contact" class="font-display font-semibold px-7 py-3.5 rounded-full text-sm border border-line text-paper hover:border-cyan/60 transition-colors">Contact Us</a>
      </div>

      <div class="mt-14 grid grid-cols-3 gap-6 max-w-md">
        <div>
          <p class="font-display text-2xl font-semibold text-paper">30+</p>
          <p class="text-xs text-mist mt-1">Projects delivered</p>
        </div>
        <div>
          <p class="font-display text-2xl font-semibold text-paper">4</p>
          <p class="text-xs text-mist mt-1">Core disciplines</p>
        </div>
        <div>
          <p class="font-display text-2xl font-semibold text-paper">24/7</p>
          <p class="text-xs text-mist mt-1">Support coverage</p>
        </div>
      </div>
    </div>

    <!-- Orbit graphic + product mockup -->
    <div class="relative flex items-center justify-center">
      <svg viewBox="0 0 420 420" class="w-full max-w-md">
        <circle cx="210" cy="210" r="170" stroke="rgba(140,190,255,0.15)" stroke-width="1" fill="none" class="orbit-ring"/>
        <circle cx="210" cy="210" r="130" stroke="rgba(38,229,208,0.28)" stroke-width="1" fill="none" class="orbit-ring rev"/>

        <circle cx="210" cy="40" r="4" fill="#26E5D0" class="pulse-dot"/>
        <circle cx="380" cy="210" r="4" fill="#4C8DFF" class="pulse-dot"/>
        <circle cx="80" cy="300" r="4" fill="#26E5D0" class="pulse-dot"/>

        <g stroke="rgba(140,190,255,0.2)" stroke-width="1">
          <line x1="210" y1="80" x2="210" y2="130"/>
          <line x1="340" y1="210" x2="290" y2="210"/>
          <line x1="115" y1="280" x2="150" y2="255"/>
        </g>
      </svg>

      <!-- Floating dashboard mockup card -->
      <div class="absolute w-[78%] max-w-[19rem] rounded-2xl glass shadow-2xl shadow-black/40 overflow-hidden">
        <div class="flex items-center gap-1.5 px-4 py-2.5 border-b border-line">
          <span class="w-2 h-2 rounded-full bg-[#FF5F57]"></span>
          <span class="w-2 h-2 rounded-full bg-[#FEBC2E]"></span>
          <span class="w-2 h-2 rounded-full bg-[#28C840]"></span>
          <span class="ml-2 text-[10px] text-mist mono-label">lakvion — build</span>
        </div>
        <div class="p-4 space-y-2.5">
          <div class="flex items-center justify-between">
            <div class="h-2 w-16 rounded bg-cyan/40"></div>
            <div class="h-5 w-5 rounded-full bg-blue/30"></div>
          </div>
          <div class="grid grid-cols-3 gap-2 pt-1">
            <div class="h-14 rounded-lg bg-white/5 border border-line"></div>
            <div class="h-14 rounded-lg bg-cyan/10 border border-cyan/30"></div>
            <div class="h-14 rounded-lg bg-white/5 border border-line"></div>
          </div>
          <div class="flex items-end gap-1.5 h-12 pt-2">
            <div class="w-3 rounded-t bg-blue/50" style="height:40%"></div>
            <div class="w-3 rounded-t bg-blue/60" style="height:65%"></div>
            <div class="w-3 rounded-t bg-cyan/70" style="height:90%"></div>
            <div class="w-3 rounded-t bg-blue/50" style="height:55%"></div>
            <div class="w-3 rounded-t bg-blue/40" style="height:30%"></div>
            <div class="w-3 rounded-t bg-cyan/60" style="height:75%"></div>
          </div>
          <div class="h-1.5 w-3/4 rounded bg-white/10"></div>
          <div class="h-1.5 w-1/2 rounded bg-white/10"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ ABOUT ============ -->
<section id="about" class="relative py-24 px-6 lg:px-10 border-t border-line">
  <div class="mx-auto max-w-7xl grid lg:grid-cols-[0.8fr_1.2fr] gap-14 items-start">
    <div>
      <h2 class="font-display text-3xl sm:text-4xl font-semibold text-paper leading-tight">
        Who we are
      </h2>

      <!-- Code editor illustration -->
      <div class="mt-8 rounded-2xl glass overflow-hidden max-w-sm">
        <div class="flex items-center gap-1.5 px-4 py-2.5 border-b border-line">
          <span class="w-2 h-2 rounded-full bg-[#FF5F57]"></span>
          <span class="w-2 h-2 rounded-full bg-[#FEBC2E]"></span>
          <span class="w-2 h-2 rounded-full bg-[#28C840]"></span>
          <span class="ml-2 text-[10px] text-mist mono-label">app.ts</span>
        </div>
        <div class="p-5 font-mono text-[11px] leading-relaxed">
          <p><span class="text-[#C792EA]">function</span> <span class="text-[#82AAFF]">launch</span>(<span class="text-[#F78C6C]">idea</span>) {</p>
          <p class="pl-4"><span class="text-[#C792EA]">const</span> product = build(idea);</p>
          <p class="pl-4"><span class="text-[#C792EA]">return</span> product.<span class="text-cyan">ship</span>();</p>
          <p>}</p>
          <p class="mt-2 text-mist">// tested. scalable. yours.</p>
          <p class="mt-1"><span class="inline-block w-2 h-4 bg-cyan align-middle animate-pulse"></span></p>
        </div>
      </div>
    </div>
    <div class="space-y-5 text-mist text-base sm:text-lg leading-relaxed max-w-2xl">
      <p>
        Lakvion Technologies is a forward-thinking software development company that transforms ideas into practical digital solutions. We work with startups and established businesses alike, turning early concepts into products that drive real growth and efficiency.
      </p>
      <p>
        From the first line of code to long-term maintenance, our team stays close to the problem you're solving — not just the technology. That's how we keep every build purposeful, well-engineered, and built to last.
      </p>
      <div class="flex flex-wrap gap-3 pt-2">
        <span class="rounded-full glass px-4 py-1.5 text-xs mono-label text-paper">Web</span>
        <span class="rounded-full glass px-4 py-1.5 text-xs mono-label text-paper">Mobile</span>
        <span class="rounded-full glass px-4 py-1.5 text-xs mono-label text-paper">Cloud &amp; APIs</span>
        <span class="rounded-full glass px-4 py-1.5 text-xs mono-label text-paper">Product Design</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section id="services" class="relative py-24 px-6 lg:px-10 border-t border-line">
  <div class="mx-auto max-w-7xl">
    <div class="max-w-xl mb-14">
      <h2 class="font-display text-3xl sm:text-4xl font-semibold text-paper leading-tight">What we build</h2>
      <p class="mt-4 text-mist text-base sm:text-lg">A focused set of services covering the full lifecycle of a digital product.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

      <!-- Service card template x7 -->
      <div class="glass card-hover rounded-2xl p-7">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.5"><rect x="2" y="4" width="20" height="14" rx="2"/><path d="M8 21h8M12 18v3" stroke-linecap="round"/></svg>
        <h3 class="font-display text-lg font-semibold text-paper mt-5">Web Application Development</h3>
        <p class="text-sm text-mist mt-2.5 leading-relaxed">Fast, scalable web apps built on modern frameworks, tailored to how your business actually works.</p>
      </div>

      <div class="glass card-hover rounded-2xl p-7">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.5"><path d="M12 2l3 6 6 1-4.5 4.5L18 20l-6-3-6 3 1.5-6.5L3 9l6-1 3-6z"/></svg>
        <h3 class="font-display text-lg font-semibold text-paper mt-5">Custom Software Development</h3>
        <p class="text-sm text-mist mt-2.5 leading-relaxed">Purpose-built systems designed around your workflows, not the other way around.</p>
      </div>

      <div class="glass card-hover rounded-2xl p-7">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.5"><rect x="7" y="2" width="10" height="20" rx="2"/><path d="M11 18h2" stroke-linecap="round"/></svg>
        <h3 class="font-display text-lg font-semibold text-paper mt-5">Mobile Application Development</h3>
        <p class="text-sm text-mist mt-2.5 leading-relaxed">Native and cross-platform apps for iOS and Android, built for real-world usage patterns.</p>
      </div>

      <div class="glass card-hover rounded-2xl p-7">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.5"><path d="M4 17V7a2 2 0 012-2h5l2 2h5a2 2 0 012 2v8a2 2 0 01-2 2H6a2 2 0 01-2-2z"/></svg>
        <h3 class="font-display text-lg font-semibold text-paper mt-5">Backend &amp; API Development</h3>
        <p class="text-sm text-mist mt-2.5 leading-relaxed">Reliable server architecture and clean APIs that keep your systems talking to each other.</p>
      </div>

      <div class="glass card-hover rounded-2xl p-7">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1" stroke-linecap="round"/></svg>
        <h3 class="font-display text-lg font-semibold text-paper mt-5">UI/UX Design</h3>
        <p class="text-sm text-mist mt-2.5 leading-relaxed">Interfaces that are easy to use from day one, grounded in how your users actually think.</p>
      </div>

      <div class="glass card-hover rounded-2xl p-7">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.5"><circle cx="9" cy="20" r="1.4"/><circle cx="18" cy="20" r="1.4"/><path d="M2 3h2l2.4 12.2a2 2 0 002 1.6h8.6a2 2 0 002-1.6L21 7H5.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <h3 class="font-display text-lg font-semibold text-paper mt-5">E-commerce Solutions</h3>
        <p class="text-sm text-mist mt-2.5 leading-relaxed">Storefronts and checkout systems built to convert, scale, and stay secure.</p>
      </div>

      <div class="glass card-hover rounded-2xl p-7 sm:col-span-2 lg:col-span-1">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.5"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z"/><path d="M19.4 15a1.7 1.7 0 00.3 1.9l.1.1a2 2 0 11-2.9 2.9l-.1-.1a1.7 1.7 0 00-1.9-.3 1.7 1.7 0 00-1 1.6V21a2 2 0 11-4 0v-.1a1.7 1.7 0 00-1-1.6 1.7 1.7 0 00-1.9.3l-.1.1a2 2 0 11-2.9-2.9l.1-.1a1.7 1.7 0 00.3-1.9 1.7 1.7 0 00-1.6-1H3a2 2 0 110-4h.1a1.7 1.7 0 001.6-1 1.7 1.7 0 00-.3-1.9l-.1-.1a2 2 0 112.9-2.9l.1.1a1.7 1.7 0 001.9.3H9a1.7 1.7 0 001-1.6V3a2 2 0 114 0v.1a1.7 1.7 0 001 1.6 1.7 1.7 0 001.9-.3l.1-.1a2 2 0 112.9 2.9l-.1.1a1.7 1.7 0 00-.3 1.9V9a1.7 1.7 0 001.6 1h.1a2 2 0 110 4h-.1a1.7 1.7 0 00-1.6 1z"/></svg>
        <h3 class="font-display text-lg font-semibold text-paper mt-5">Software Maintenance &amp; Support</h3>
        <p class="text-sm text-mist mt-2.5 leading-relaxed">Ongoing monitoring, updates, and fixes so your product stays fast and dependable.</p>
      </div>

    </div>
  </div>
</section>

<!-- ============ WHY CHOOSE US ============ -->
<section class="relative py-24 px-6 lg:px-10 border-t border-line">
  <div class="mx-auto max-w-7xl">
    <div class="max-w-xl mb-14">
      <h2 class="font-display text-3xl sm:text-4xl font-semibold text-paper leading-tight">Why teams choose Lakvion</h2>
      <p class="mt-4 text-mist text-base sm:text-lg">Four principles that shape every project we take on.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-px rounded-2xl overflow-hidden border border-line">
      <div class="bg-panel p-8">
        <p class="font-display text-cyan text-sm mb-4">Quality</p>
        <h3 class="font-display text-lg font-semibold text-paper">Focussed on Quality</h3>
        <p class="text-sm text-mist mt-3 leading-relaxed">Every release goes through careful review, so what ships is built to hold up.</p>
      </div>
      <div class="bg-panel p-8">
        <p class="font-display text-cyan text-sm mb-4">Partnership</p>
        <h3 class="font-display text-lg font-semibold text-paper">Client-Centric Approach</h3>
        <p class="text-sm text-mist mt-3 leading-relaxed">We build around your goals and stay in close contact from kickoff to launch.</p>
      </div>
      <div class="bg-panel p-8">
        <p class="font-display text-cyan text-sm mb-4">Ideas</p>
        <h3 class="font-display text-lg font-semibold text-paper">Innovative Solutions</h3>
        <p class="text-sm text-mist mt-3 leading-relaxed">We reach for the approach that fits the problem, not just the familiar one.</p>
      </div>
      <div class="bg-panel p-8">
        <p class="font-display text-cyan text-sm mb-4">Trust</p>
        <h3 class="font-display text-lg font-semibold text-paper">Reliable &amp; Trusted</h3>
        <p class="text-sm text-mist mt-3 leading-relaxed">Clear communication and dependable delivery, project after project.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ PORTFOLIO ============ -->
<section id="portfolio" class="relative py-24 px-6 lg:px-10 border-t border-line">
  <div class="mx-auto max-w-7xl">
    <div class="max-w-xl mb-14">
      <h2 class="font-display text-3xl sm:text-4xl font-semibold text-paper leading-tight">Recent work</h2>
      <p class="mt-4 text-mist text-base sm:text-lg">A sample of products we've designed and built.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="portfolio-card rounded-2xl overflow-hidden border border-line">
        <div class="h-44 bg-gradient-to-br from-panel2 to-panel p-4 relative">
          <div class="flex gap-1.5 mb-3">
            <span class="w-1.5 h-1.5 rounded-full bg-white/20"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-white/20"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-white/20"></span>
          </div>
          <div class="grid grid-cols-3 gap-2">
            <div class="rounded-lg bg-white/[0.04] border border-line h-16 flex items-end p-1.5"><div class="h-1 w-full rounded bg-cyan/50"></div></div>
            <div class="rounded-lg bg-cyan/10 border border-cyan/30 h-16 flex items-end p-1.5"><div class="h-1 w-full rounded bg-cyan/60"></div></div>
            <div class="rounded-lg bg-white/[0.04] border border-line h-16 flex items-end p-1.5"><div class="h-1 w-full rounded bg-cyan/50"></div></div>
          </div>
          <div class="mt-2.5 h-6 w-20 rounded-full bg-cyan/20 border border-cyan/40 flex items-center justify-center">
            <span class="text-[9px] text-cyan mono-label">Checkout</span>
          </div>
        </div>
        <div class="p-6">
          <p class="text-xs text-cyan mono-label">Retail</p>
          <h3 class="font-display text-lg font-semibold text-paper mt-1.5">Ceylon Market — E-commerce Platform</h3>
          <p class="text-sm text-mist mt-2">A multi-vendor storefront with real-time inventory and local payment integration.</p>
        </div>
      </div>

      <div class="portfolio-card rounded-2xl overflow-hidden border border-line">
        <div class="h-44 bg-gradient-to-br from-panel2 to-panel relative">
          <svg viewBox="0 0 320 176" class="w-full h-full">
            <path d="M0 140 Q60 60 130 110 T320 40" stroke="rgba(140,190,255,0.18)" stroke-width="14" fill="none"/>
            <path d="M0 140 Q60 60 130 110 T320 40" stroke="#4C8DFF" stroke-width="2" stroke-dasharray="6 6" fill="none"/>
            <circle cx="0" cy="140" r="5" fill="#26E5D0"/>
            <circle cx="130" cy="110" r="5" fill="#4C8DFF"/>
            <circle cx="290" cy="48" r="7" fill="#26E5D0"/>
            <circle cx="290" cy="48" r="12" fill="none" stroke="#26E5D0" stroke-width="1.5" opacity="0.5"/>
          </svg>
          <div class="absolute top-4 left-4 rounded-lg bg-panel/80 border border-line px-3 py-1.5 text-[10px] mono-label text-paper">ETA 12 min</div>
        </div>
        <div class="p-6">
          <p class="text-xs text-cyan mono-label">Logistics</p>
          <h3 class="font-display text-lg font-semibold text-paper mt-1.5">RouteWise — Delivery Tracking App</h3>
          <p class="text-sm text-mist mt-2">A mobile app for live fleet tracking, driver routing, and delivery confirmations.</p>
        </div>
      </div>

      <div class="portfolio-card rounded-2xl overflow-hidden border border-line">
        <div class="h-44 bg-gradient-to-br from-panel2 to-panel p-5 relative flex flex-col justify-between">
          <div class="flex items-center justify-between">
            <div class="h-2 w-14 rounded bg-white/15"></div>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="2"><rect x="4" y="10" width="16" height="10" rx="2"/><path d="M8 10V7a4 4 0 018 0v3"/></svg>
          </div>
          <div class="flex items-end gap-2 h-16">
            <div class="w-4 rounded-t bg-blue/40" style="height:35%"></div>
            <div class="w-4 rounded-t bg-blue/55" style="height:55%"></div>
            <div class="w-4 rounded-t bg-cyan/70" style="height:85%"></div>
            <div class="w-4 rounded-t bg-blue/50" style="height:65%"></div>
            <div class="w-4 rounded-t bg-cyan/60" style="height:95%"></div>
            <div class="w-4 rounded-t bg-blue/40" style="height:45%"></div>
          </div>
          <p class="text-[10px] text-mist mono-label">Transaction volume · live</p>
        </div>
        <div class="p-6">
          <p class="text-xs text-cyan mono-label">FinTech</p>
          <h3 class="font-display text-lg font-semibold text-paper mt-1.5">PayLine API — Payment Gateway</h3>
          <p class="text-sm text-mist mt-2">A secure REST API layer connecting merchants to multiple payment providers.</p>
        </div>
      </div>

      <div class="portfolio-card rounded-2xl overflow-hidden border border-line">
        <div class="h-44 bg-gradient-to-br from-panel2 to-panel p-5 relative">
          <div class="flex items-center justify-between mb-3">
            <div class="h-2 w-16 rounded bg-white/15"></div>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4C8DFF" stroke-width="1.8"><path d="M12 8v8M8 12h8" stroke-linecap="round"/><circle cx="12" cy="12" r="9"/></svg>
          </div>
          <div class="grid grid-cols-7 gap-1.5">
            <div class="h-4 rounded bg-white/[0.05]"></div><div class="h-4 rounded bg-white/[0.05]"></div><div class="h-4 rounded bg-blue/30 border border-blue/50"></div><div class="h-4 rounded bg-white/[0.05]"></div><div class="h-4 rounded bg-white/[0.05]"></div><div class="h-4 rounded bg-cyan/30 border border-cyan/50"></div><div class="h-4 rounded bg-white/[0.05]"></div>
            <div class="h-4 rounded bg-white/[0.05]"></div><div class="h-4 rounded bg-blue/30 border border-blue/50"></div><div class="h-4 rounded bg-white/[0.05]"></div><div class="h-4 rounded bg-white/[0.05]"></div><div class="h-4 rounded bg-white/[0.05]"></div><div class="h-4 rounded bg-white/[0.05]"></div><div class="h-4 rounded bg-white/[0.05]"></div>
          </div>
          <p class="text-[10px] text-mist mono-label mt-3">Next appointment · 3:30 PM</p>
        </div>
        <div class="p-6">
          <p class="text-xs text-cyan mono-label">Healthcare</p>
          <h3 class="font-display text-lg font-semibold text-paper mt-1.5">MediConnect — Clinic Management</h3>
          <p class="text-sm text-mist mt-2">Appointment scheduling and patient records for a network of local clinics.</p>
        </div>
      </div>

      <div class="portfolio-card rounded-2xl overflow-hidden border border-line">
        <div class="h-44 bg-gradient-to-br from-panel2 to-panel p-4 relative">
          <div class="grid grid-cols-2 gap-2 h-full">
            <div class="rounded-lg bg-white/[0.04] border border-line flex items-center justify-center">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="#26E5D0"><path d="M8 5v14l11-7z"/></svg>
            </div>
            <div class="rounded-lg bg-cyan/10 border border-cyan/30 flex items-center justify-center">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="#26E5D0"><path d="M8 5v14l11-7z"/></svg>
            </div>
            <div class="rounded-lg bg-white/[0.04] border border-line flex items-center justify-center col-span-2">
              <div class="h-1.5 w-2/3 rounded bg-white/15"></div>
            </div>
          </div>
        </div>
        <div class="p-6">
          <p class="text-xs text-cyan mono-label">Education</p>
          <h3 class="font-display text-lg font-semibold text-paper mt-1.5">LearnSphere — LMS Platform</h3>
          <p class="text-sm text-mist mt-2">A learning management system with course tracking and live class scheduling.</p>
        </div>
      </div>

      <div class="portfolio-card rounded-2xl overflow-hidden border border-line">
        <div class="h-44 bg-gradient-to-br from-panel2 to-panel relative">
          <svg viewBox="0 0 320 176" class="w-full h-full opacity-70">
            <g stroke="rgba(140,190,255,0.18)" stroke-width="1">
              <line x1="0" y1="44" x2="320" y2="44"/><line x1="0" y1="88" x2="320" y2="88"/><line x1="0" y1="132" x2="320" y2="132"/>
              <line x1="80" y1="0" x2="80" y2="176"/><line x1="160" y1="0" x2="160" y2="176"/><line x1="240" y1="0" x2="240" y2="176"/>
            </g>
          </svg>
          <div class="absolute top-6 left-8 w-4 h-4 rounded-full bg-cyan shadow-[0_0_12px_2px_rgba(38,229,208,0.6)]"></div>
          <div class="absolute bottom-10 right-16 w-3 h-3 rounded-full bg-blue shadow-[0_0_10px_2px_rgba(76,141,255,0.6)]"></div>
          <div class="absolute bottom-6 left-1/3 rounded-lg bg-panel/85 border border-line px-3 py-2 text-[10px] mono-label text-paper">
            3 bed · Colombo 05
          </div>
        </div>
        <div class="p-6">
          <p class="text-xs text-cyan mono-label">Real Estate</p>
          <h3 class="font-display text-lg font-semibold text-paper mt-1.5">HomeGrid — Property Dashboard</h3>
          <p class="text-sm text-mist mt-2">A listings dashboard with map search, lead capture, and agent workflows.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============ CAREERS ============ -->
<section id="careers" class="relative py-24 px-6 lg:px-10 border-t border-line">
  <div class="mx-auto max-w-7xl">
    <div class="max-w-xl mb-14">
      <h2 class="font-display text-3xl sm:text-4xl font-semibold text-paper leading-tight">Careers at Lakvion</h2>
      <p class="mt-4 text-mist text-base sm:text-lg">We're always looking for driven people who want to build things that matter.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-8">
      <div class="glass card-hover rounded-2xl p-7">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.5"><path d="M2 12h4l3 9 4-18 3 9h6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <h3 class="font-display text-lg font-semibold text-paper mt-5">Remote-Friendly</h3>
        <p class="text-sm text-mist mt-2.5 leading-relaxed">Work from anywhere in Sri Lanka, with flexible hours built around real output.</p>
      </div>

      <div class="glass card-hover rounded-2xl p-7">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.5"><path d="M3 3v18h18" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 15l4-5 3 3 5-7" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <h3 class="font-display text-lg font-semibold text-paper mt-5">Room to Grow</h3>
        <p class="text-sm text-mist mt-2.5 leading-relaxed">Hands-on projects from day one, with mentorship and a clear path to take on more.</p>
      </div>

      <div class="glass card-hover rounded-2xl p-7 sm:col-span-2 lg:col-span-1">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <h3 class="font-display text-lg font-semibold text-paper mt-5">Real Ownership</h3>
        <p class="text-sm text-mist mt-2.5 leading-relaxed">Small teams, direct client contact, and work that actually ships to production.</p>
      </div>
    </div>

    <div class="glass rounded-2xl p-8 sm:p-10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
      <div>
        <h3 class="font-display text-xl font-semibold text-paper">Don't see an open role?</h3>
        <p class="text-sm text-mist mt-2 max-w-md">Send us your CV and a bit about what you'd like to work on — we review every submission.</p>
      </div>
      <a href="mailto:lakviontechnologies@gmail.com?subject=Career%20Application" class="btn-primary font-display font-semibold px-7 py-3.5 rounded-full text-sm whitespace-nowrap">Send Your CV</a>
    </div>
  </div>
</section>

<!-- ============ CONTACT ============ -->
<section id="contact" class="relative py-24 px-6 lg:px-10 border-t border-line">
  <div class="mx-auto max-w-7xl grid lg:grid-cols-[0.8fr_1.2fr] gap-14">

    <div>
      <h2 class="font-display text-3xl sm:text-4xl font-semibold text-paper leading-tight">Let's build something</h2>
      <p class="mt-4 text-mist text-base leading-relaxed max-w-sm">Tell us about your project and we'll get back to you within one business day.</p>

      <div class="mt-10 space-y-6">
        <div class="flex items-start gap-4">
          <div class="w-10 h-10 rounded-full glass flex items-center justify-center shrink-0">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.6"><path d="M4 6h16v12H4z"/><path d="M4 7l8 6 8-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <div>
            <p class="text-xs text-mist mono-label">Email</p>
            <a href="mailto:lakviontechnologies@gmail.com" class="text-paper hover:text-cyan transition-colors">lakviontechnologies@gmail.com</a>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="w-10 h-10 rounded-full glass flex items-center justify-center shrink-0">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.6"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.8 19.8 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.9.34 1.85.57 2.81.7a2 2 0 011.72 2.03z" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <div>
            <p class="text-xs text-mist mono-label">Phone</p>
            <a href="tel:+94787595375" class="text-paper hover:text-cyan transition-colors">+94 78 759 5375</a>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="w-10 h-10 rounded-full glass flex items-center justify-center shrink-0">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18" /></svg>
          </div>
          <div>
            <p class="text-xs text-mist mono-label">Website</p>
            <a href="https://lakviontechnologies.jo3.org" class="text-paper hover:text-cyan transition-colors">lakviontechnologies.jo3.org</a>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="w-10 h-10 rounded-full glass flex items-center justify-center shrink-0">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#26E5D0" stroke-width="1.6"><path d="M12 21s-7-6.1-7-11a7 7 0 0114 0c0 4.9-7 11-7 11z"/><circle cx="12" cy="10" r="2.4"/></svg>
          </div>
          <div>
            <p class="text-xs text-mist mono-label">Location</p>
            <p class="text-paper">Sri Lanka</p>
          </div>
        </div>
      </div>
    </div>

    <form id="contactForm" action="{{ route('contact.store') }}" method="POST" class="glass rounded-2xl p-7 sm:p-9 space-y-5" novalidate>
      @csrf
      <div class="grid sm:grid-cols-2 gap-5">
        <div>
          <label for="name" class="text-xs text-mist mono-label">Name</label>
          <input id="name" name="name" type="text" required placeholder="Your full name"
            class="field w-full mt-2 rounded-lg px-4 py-3 text-sm text-paper placeholder:text-mist/60" />
        </div>
        <div>
          <label for="email" class="text-xs text-mist mono-label">Email</label>
          <input id="email" name="email" type="email" required placeholder="you@company.com"
            class="field w-full mt-2 rounded-lg px-4 py-3 text-sm text-paper placeholder:text-mist/60" />
        </div>
      </div>

      <div>
        <label for="projectType" class="text-xs text-mist mono-label">Project Type</label>
        <select id="projectType" name="projectType" required
          class="field w-full mt-2 rounded-lg px-4 py-3 text-sm text-paper">
          <option value="" disabled selected>Select a project type</option>
          <option>Web Application</option>
          <option>Mobile Application</option>
          <option>Custom Software</option>
          <option>UI/UX Design</option>
          <option>E-commerce</option>
          <option>Maintenance &amp; Support</option>
          <option>Other</option>
        </select>
      </div>

      <div>
        <label for="message" class="text-xs text-mist mono-label">Message</label>
        <textarea id="message" name="message" required rows="4" placeholder="Tell us a bit about your project"
          class="field w-full mt-2 rounded-lg px-4 py-3 text-sm text-paper placeholder:text-mist/60 resize-none"></textarea>
      </div>

      <button type="submit" class="btn-primary w-full font-display font-semibold text-sm py-3.5 rounded-lg">
        Send Message
      </button>

      <p id="formStatus" class="text-sm text-cyan hidden" role="status"></p>
    </form>

  </div>
</section>

<!-- ============ FOOTER ============ -->
<footer class="relative border-t border-line px-6 lg:px-10 py-12">
  <div class="mx-auto max-w-7xl flex flex-col md:flex-row md:items-center md:justify-between gap-8">

    <div>
      <div class="inline-flex items-center rounded-lg bg-paper px-3 py-1.5">
        <img src="{{ asset('image/logo/logo.png') }}" alt="Lakvion Technologies" width="2146" height="733" loading="lazy" class="h-8 w-auto" />
      </div>
      <p class="text-sm text-mist mt-3 max-w-xs">Building Ideas. Powering Tomorrow.</p>
    </div>

    <nav class="flex flex-wrap gap-x-8 gap-y-3 text-sm text-mist">
      <a href="#home" class="hover:text-paper transition-colors">Home</a>
      <a href="#services" class="hover:text-paper transition-colors">Services</a>
      <a href="#about" class="hover:text-paper transition-colors">About</a>
      <a href="#portfolio" class="hover:text-paper transition-colors">Portfolio</a>
      <a href="#careers" class="hover:text-paper transition-colors">Careers</a>
      <a href="#contact" class="hover:text-paper transition-colors">Contact</a>
    </nav>

    <div class="flex items-center gap-3">
      <a href="https://www.facebook.com/share/1d42XyPZXX/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="w-9 h-9 rounded-full glass flex items-center justify-center hover:border-cyan/50 transition-colors">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="#E9F0FB"><path d="M22 12.06C22 6.5 17.52 2 12 2S2 6.5 2 12.06c0 5 3.66 9.15 8.44 9.94v-7.03H7.9v-2.91h2.54V9.85c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.44 2.91h-2.34V22c4.78-.79 8.44-4.94 8.44-9.94z"/></svg>
      </a>
      <a href="https://www.linkedin.com/company/lakvion-technologies/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="w-9 h-9 rounded-full glass flex items-center justify-center hover:border-cyan/50 transition-colors">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="#E9F0FB"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-1 1.83-2.05 3.77-2.05 4.03 0 4.78 2.65 4.78 6.1V21H17.6v-5.6c0-1.34-.02-3.06-1.86-3.06-1.87 0-2.16 1.46-2.16 2.96V21H9z"/></svg>
      </a>
    </div>
  </div>

  <div class="mx-auto max-w-7xl mt-10 pt-6 border-t border-line text-xs text-mist flex flex-col sm:flex-row justify-between gap-2">
    <p>© <span id="year"></span> Lakvion Technologies. All rights reserved.</p>
    <p>Sri Lanka</p>
  </div>
</footer>

</body>
</html>
