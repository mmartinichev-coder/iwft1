<?php
/**
 * Theme assets + Retainer Lender page shortcode (legacy tag: iwft_banks).
 */
function iwft_theme_enqueue_assets() {
	wp_enqueue_style(
		'iwft-google-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Montserrat:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap',
		array(),
		null
	);
	$style_path = get_stylesheet_directory() . '/style.css';
	$style_ver  = file_exists( $style_path ) ? (string) filemtime( $style_path ) : wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'iwft-style', get_stylesheet_uri(), array( 'iwft-google-fonts' ), $style_ver );
}
add_action( 'wp_enqueue_scripts', 'iwft_theme_enqueue_assets' );

add_shortcode( 'iwft_banks', 'iwft_shortcode_banks_page' );
function iwft_shortcode_banks_page() {
	ob_start();
	?>
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>
<nav>
<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>#iwft-banks-hero">IWould<em>Fund</em>That <span class="logo-tag">Lender Network</span></a>
<ul>
<li><a href="#returns">Your Returns</a></li>
<li><a href="#how">How It Works</a></li>
<li><a href="#deals">Open Deals</a></li>
<li><a class="nav-btn" href="#join">Become a Lender</a></li>
</ul>
</nav>
<section class="hero" style="margin-top:72px;">
<div class="hero-radial"></div>
<div class="hero-lines"></div>
<div class="hero-inner">
<div class="eyebrow"><span class="eyebrow-line"></span> The Retainer Lending Network · IWouldFundThat</div>
<h1>
      Lend the Retainer.<br/>
<strong>Earn the Interest.</strong><br/>
<em>Own a Piece.</em>
</h1>
<div class="hero-rule"></div>
<p class="hero-sub">
      When a founder gets matched with an institutional bank through IWouldFundThat, they need capital to pay the retainer and start the raise. <strong>That's where you come in.</strong> Retainer Lenders fund that bridge — earning a <strong>fixed interest carry</strong> plus <strong>negotiated founder equity</strong> in every company they back. You don't just lend money. You buy into the upside.
    </p>
<div class="hero-actions">
<a class="btn-teal" href="#join">Apply to Lend →</a>
<a class="btn-ghost" href="#how">See How It Works</a>
</div>
<div class="hero-proof">
<div class="proof-item">
<span class="proof-num teal">8–12%</span>
<span class="proof-label">Interest Carry (Annualized)</span>
</div>
<div class="proof-divider"></div>
<div class="proof-item">
<span class="proof-num">2%</span>
<span class="proof-label">Founder Equity Stake</span>
</div>
<div class="proof-divider"></div>
<div class="proof-item">
<span class="proof-num teal">180</span>
<span class="proof-label">Day Avg. Loan Term</span>
</div>
<div class="proof-divider"></div>
<div class="proof-item">
<span class="proof-num">$50K</span>
<span class="proof-label">Minimum to Participate</span>
</div>
</div>
</div>
</section>

<div class="ticker-wrap">
<div class="ticker-track">
<span class="ticker-item"><b>✦</b> Lender earned 11.2% carry + 1.5% equity · FinTech Series B · $42M raised</span>
<span class="ticker-item"><b>✦</b> Lender earned 9.8% carry + 0.75% equity · CleanTech Growth · $180M raised</span>
<span class="ticker-item"><b>✦</b> Lender earned 13.5% carry + 2% equity · HealthTech Series C · $82M raised</span>
<span class="ticker-item"><b>✦</b> Lender earned 10.1% carry + 1% equity · SaaS M&amp;A · $310M raised</span>
<span class="ticker-item"><b>✦</b> Lender earned 12.0% carry + 1.25% equity · Real Estate Debt · $60M raised</span>
<span class="ticker-item"><b>✦</b> Lender earned 11.2% carry + 1.5% equity · FinTech Series B · $42M raised</span>
<span class="ticker-item"><b>✦</b> Lender earned 9.8% carry + 0.75% equity · CleanTech Growth · $180M raised</span>
<span class="ticker-item"><b>✦</b> Lender earned 13.5% carry + 2% equity · HealthTech Series C · $82M raised</span>
<span class="ticker-item"><b>✦</b> Lender earned 10.1% carry + 1% equity · SaaS M&amp;A · $310M raised</span>
<span class="ticker-item"><b>✦</b> Lender earned 12.0% carry + 1.25% equity · Real Estate Debt · $60M raised</span>
</div>
</div>

<section class="section" id="returns">
<div class="section-eyebrow reveal">Your Returns</div>
<div class="section-h2 reveal">Two Ways You <em>Win</em><br/><strong>on Every Deal.</strong></div>
<p class="section-sub reveal reveal-delay-1">Unlike traditional lending, Retainer Lenders on IWouldFundThat earn on both sides of the transaction — short-term income and long-term upside.</p>
<div class="returns-grid">
<div class="returns-card reveal">
<span class="rc-icon"></span>
<div class="rc-label">Return Stream One</div>
<h3 class="rc-title">Interest Carry on the Retainer Loan</h3>
<p class="rc-body">You lend the retainer amount the founder needs to engage their chosen investment bank and the marketing support system. That loan earns a fixed interest rate — agreed upfront — over a 180 day term. Short, predictable, secured against the raise milestone.</p>
<div class="rc-highlight">
<div class="rc-highlight-num">8 – 12%</div>
<div class="rc-highlight-label">Annualized Interest Rate · Paid at Loan Maturity</div>
</div>
<div class="rc-bg-icon">%</div>
</div>
<div class="returns-card reveal reveal-delay-1">
<span class="rc-icon"></span>
<div class="rc-label">Return Stream Two</div>
<h3 class="rc-title">Negotiated Founder Equity in the Company</h3>
<p class="rc-body">In addition to your interest, you receive a negotiated equity stake in the company you fund — agreed directly with the founder as part of the lending terms. When the company grows, your equity grows with it. You're not just a lender. You're a stakeholder.</p>
<div class="rc-highlight">
<div class="rc-highlight-num">2%</div>
<div class="rc-highlight-label">Equity Stake · Negotiated Per Deal · You Keep It Forever</div>
</div>
<div class="rc-bg-icon">%</div>
</div>
</div>
</section>

<section class="section section-alt" id="how">
<div class="section-eyebrow reveal">The Process</div>
<div class="section-h2 reveal">From Application<br/>to <em>Earning</em> in <strong>Days.</strong></div>
<p class="section-sub reveal reveal-delay-1">The process is straightforward by design. We do the hard work vetting deals — you choose what you want to fund.</p>
<div class="process">
<div class="process-spine"></div>
<div class="step reveal">
<div class="step-num">01</div>
<div class="step-content">
<h3>Apply &amp; Get Approved as a Lender</h3>
<p>Submit your lender application. We verify your accredited investor status, review your lending preferences (deal size, sector, risk appetite), and onboard you into the Lender Network. Approval typically takes 3–5 business days.</p>
<span class="step-tag">Accredited Investors Only · KYC/AML Verified</span>
</div>
</div>
<div class="step reveal reveal-delay-1">
<div class="step-num">02</div>
<div class="step-content">
<h3>Browse Open Retainer Lending Opportunities</h3>
<p>Once approved, you receive access to our live deal board. Each listing shows the founder's company summary, the raise details, the bank selected, proposed interest rate, and proposed equity stake. Full transparency before you commit a dollar.</p>
<span class="step-tag">Real-Time Deal Board · Full Diligence Package Included</span>
</div>
</div>
<div class="step reveal reveal-delay-2">
<div class="step-num">03</div>
<div class="step-content">
<h3>Fund the Retainer. Sign the Agreement.</h3>
<p>Commit to a deal after you’ve reviewed and approved the terms. A legally binding loan and equity agreement is executed between you and the founder — your equity stake is formally registered with the company's cap table, documented, signed, and stored on our platform. Payment of the retainer to the bank follows the schedule and conditions in your agreements, including kickoff confirmation where applicable.</p>
<span class="step-tag">Signed Agreements · Legally Executed · Platform-Documented</span>
</div>
</div>
<div class="step reveal reveal-delay-3">
<div class="step-num">04</div>
<div class="step-content">
<h3>Earn Your Interest. Hold Your Equity.</h3>
<p>At loan maturity — or upon successful fundraise completion, whichever comes first — your principal plus interest carry is returned. Your short-term loan just became a long-term position.</p>
<span class="step-tag">Principal + Interest Returned · Equity Registered on Cap Table</span>
</div>
</div>
</div>
</section>

<section class="deals-section" id="deals">
<div class="section-eyebrow reveal">Live Opportunities</div>
<div class="section-h2 reveal">Open Retainer<br/><em>Lending</em> <strong>Deals.</strong></div>
<p class="section-sub reveal reveal-delay-1">A sample of deals currently seeking retainer funding on our platform. All have been reviewed and approved by our team.</p>
<div class="deals-grid">
<div class="deal-card reveal">
<div class="deal-status open"><span class="pulse-dot"></span>Open</div>
<div class="deal-sector">FinTech · Series B</div>
<h3>Payment Infrastructure SaaS</h3>
<p class="deal-desc">B2B payments platform serving mid-market retailers. $2.5M ARR. Raising $2M.</p>
<div class="deal-metrics">
<div><div class="deal-metric-label">Retainer Needed</div><div class="deal-metric-val gold">$200,000</div></div>
<div><div class="deal-metric-label">Loan Term</div><div class="deal-metric-val">365 Days</div></div>
<div><div class="deal-metric-label">Interest Rate</div><div class="deal-metric-val teal">4% p.a.</div></div>
<div><div class="deal-metric-label">Equity Offered</div><div class="deal-metric-val teal">2%</div></div>
</div>
<div class="deal-bar">
<div class="deal-bar-label"><span>Funded</span><b>74%</b></div>
<div class="deal-progress"><div class="deal-fill" style="width:74%"></div></div>
</div>
</div>
<div class="deal-card reveal reveal-delay-1">
<div class="deal-status closing">Closing Soon</div>
<div class="deal-sector">CleanTech · Growth Equity</div>
<h3>Modular Solar Infrastructure</h3>
<p class="deal-desc">Utility-scale solar panel manufacturing with patented assembly tech. $1M revenue. Raising $2M.</p>
<div class="deal-metrics">
<div><div class="deal-metric-label">Retainer Needed</div><div class="deal-metric-val gold">$200,000</div></div>
<div><div class="deal-metric-label">Loan Term</div><div class="deal-metric-val">365 Days</div></div>
<div><div class="deal-metric-label">Interest Rate</div><div class="deal-metric-val teal">4% p.a.</div></div>
<div><div class="deal-metric-label">Equity Offered</div><div class="deal-metric-val teal">2%</div></div>
</div>
<div class="deal-bar">
<div class="deal-bar-label"><span>Funded</span><b>91%</b></div>
<div class="deal-progress"><div class="deal-fill" style="width:91%"></div></div>
</div>
</div>
<div class="deal-card reveal reveal-delay-2">
<div class="deal-status open"><span class="pulse-dot"></span>Open</div>
<div class="deal-sector">HealthTech · Series C</div>
<h3>AI-Assisted Diagnostics Platform</h3>
<p class="deal-desc">FDA-cleared radiology AI deployed across 38 hospital networks. $1.5M ARR. Raising $2M.</p>
<div class="deal-metrics">
<div><div class="deal-metric-label">Retainer Needed</div><div class="deal-metric-val gold">$200,000</div></div>
<div><div class="deal-metric-label">Loan Term</div><div class="deal-metric-val">365 Days</div></div>
<div><div class="deal-metric-label">Interest Rate</div><div class="deal-metric-val teal">4% p.a.</div></div>
<div><div class="deal-metric-label">Equity Offered</div><div class="deal-metric-val teal">2%</div></div>
</div>
<div class="deal-bar">
<div class="deal-bar-label"><span>Funded</span><b>38%</b></div>
<div class="deal-progress"><div class="deal-fill" style="width:38%"></div></div>
</div>
</div>
</div>
</section>

<section class="section">
<div class="section-eyebrow reveal">Lender Protections</div>
<div class="section-h2 reveal">Built for Lenders<br/>Who <em>Mean Business.</em></div>
<p class="section-sub reveal reveal-delay-1">Every deal on our platform carries structural protections for lenders. We do the diligence so you don't have to start from zero.</p>
<div class="protect-grid">
<div class="protect-card reveal">
<span class="protect-icon"></span>
<h3>Agreement-Driven Funding</h3>
<p>Nothing moves until documents are signed. Your capital is released according to the milestones in your loan agreement. If a deal falls through before launch, how principal is handled is defined in your contract — we help keep the process clear and documented.</p>
</div>
<div class="protect-card reveal reveal-delay-1">
<span class="protect-icon"></span>
<h3>Legally Executed Agreements</h3>
<p>Every retainer loan is backed by a formal loan agreement and equity side letter, drafted by our legal team and executed by both parties before any funds move.</p>
</div>
<div class="protect-card reveal reveal-delay-2">
<span class="protect-icon"></span>
<h3>Pre-Vetted Companies Only</h3>
<p>Only founders who passed our deal review process appear on the lender board. We screen for financials, team credibility, market viability, and bank match quality before listing.</p>
</div>
<div class="protect-card reveal reveal-delay-3">
<span class="protect-icon"></span>
<h3>Full Diligence Package</h3>
<p>Every listing includes the company's financials, the raise thesis, the selected bank's proposal, and a platform risk rating — before you commit.</p>
</div>
<div class="protect-card reveal reveal-delay-1">
<span class="protect-icon"></span>
<h3>Cap Table Registration</h3>
<p>Your equity stake is formally filed with the company's cap table management system at deal close. It's yours — not a handshake agreement, a legal instrument.</p>
</div>
<div class="protect-card reveal reveal-delay-2">
<span class="protect-icon"></span>
<h3>Platform-Managed Repayment</h3>
<p>Loan repayment is handled automatically through our platform at maturity. No chasing founders. No awkward calls. We manage collections and enforce the timeline.</p>
</div>
</div>
</section>

<section class="section section-alt">
<div class="section-eyebrow reveal">Lender Stories</div>
<div class="section-h2 reveal">Lenders Who've<br/><em>Already</em> <strong>Won.</strong></div>
<div class="testi-grid">
<div class="testi-card reveal">
<span class="testi-return">+11.2% carry + 1.5% equity</span>
<div class="testi-stars">★★★★★</div>
<blockquote>"I've done angel investing for years. This is the most efficient structure I've seen — short loan term, guaranteed interest, and I end up with equity in a company that just closed a $42M round. The risk/reward is unlike anything else."</blockquote>
<div class="testi-divider"></div>
<div class="testi-author">
<div class="testi-avatar">D</div>
<div>
<div class="testi-name">David Kowalski</div>
<div class="testi-role">Private Investor · 6 deals funded · Chicago, IL</div>
</div>
</div>
</div>
<div class="testi-card reveal reveal-delay-1">
<span class="testi-return">+13.5% carry + 2% equity</span>
<div class="testi-stars">★★★★★</div>
<blockquote>"What got me was the transparency. Before I committed a dollar, I had the company financials, the bank proposal, the equity terms, and a platform risk score. I felt like an institutional investor — not a gambler."</blockquote>
<div class="testi-divider"></div>
<div class="testi-author">
<div class="testi-avatar">P</div>
<div>
<div class="testi-name">Priya Nandakumar</div>
<div class="testi-role">Family Office Manager · 11 deals funded · Austin, TX</div>
</div>
</div>
</div>
<div class="testi-card reveal reveal-delay-2">
<span class="testi-return">+9.8% carry + 0.75% equity</span>
<div class="testi-stars">★★★★★</div>
<blockquote>"The loan came back in 87 days with full interest. I'm still holding the equity. One of those companies just closed their Series D at $180M. That 0.75% stake is looking very interesting right now."</blockquote>
<div class="testi-divider"></div>
<div class="testi-author">
<div class="testi-avatar">M</div>
<div>
<div class="testi-name">Marcus Elton</div>
<div class="testi-role">Accredited Investor · 4 deals funded · Miami, FL</div>
</div>
</div>
</div>
</div>
</section>

<section class="cta-section" id="join">
<div class="cta-radial"></div>
<div class="cta-border-top"></div>
<div class="cta-label reveal">Join the Lender Network</div>
<div class="cta-h2 reveal">Lend Smart.<br/><em>Earn Interest.</em><br/><strong>Own Equity.</strong></div>
<p class="cta-sub reveal">We match you to deals within your preferred size range, sector, and risk profile. You approve every deal before a dollar moves.</p>

<div class="tiers reveal iwft-tiers-lender-wrap">
  <div class="tier featured iwft-tier-core">
    <div class="tier-label" style="color:var(--gold)">Core Lender · Most Popular</div>
    <div class="tier-amount">$50K – $200K</div>
    <div class="tier-range">Per deal commitment</div>
    <ul>
      <li>Priority deal access</li>
      <li><b>4–8%</b> interest carry</li>
      <li><b>2%</b> total equity per deal</li>
      <li>365 day loan terms</li>
      <li>Dedicated deal advisor</li>
    </ul>
  </div>
</div>

<div class="signup-form signup-form--wide reveal">
  <iframe
    data-tally-src="https://tally.so/embed/68vdNO?alignLeft=1&amp;hideTitle=1&amp;transparentBackground=1&amp;dynamicHeight=1"
    loading="lazy"
    width="100%"
    height="600"
    frameborder="0"
    marginheight="0"
    marginwidth="0"
    title="Become a Lender - IWouldFundThat"></iframe>
</div>
</section>

<footer>
  <div class="footer-logo">IWould<em>Fund</em>That</div>
  <p>© 2026 IWouldFundThat.com · Investment Bank Matchmaking Platform</p>
  <div class="footer-links">
    <a href="#" class="iwft-legal-open" data-legal-target="privacy">Privacy Policy</a>
    <a href="#" class="iwft-legal-open" data-legal-target="terms">Terms of Service</a>
    <a href="mailto:hello@iwouldfundthat.com">Contact</a>
  </div>
</footer>
<div id="iwft-legal-modal" class="legal-modal" hidden aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="iwft-legal-modal-title">
  <div class="legal-modal__backdrop" data-legal-close></div>
  <div class="legal-modal__panel">
    <div class="legal-modal__head">
      <h2 id="iwft-legal-modal-title" class="legal-modal__title">IWouldFundThat — Legal &amp; Privacy</h2>
      <p class="legal-modal__meta">Effective Date: March 28, 2026 · Website: <a href="https://iwouldfundthat.com" target="_blank" rel="noopener noreferrer">iwouldfundthat.com</a> · Contact: <a href="mailto:hello@iwouldfundthat.com">hello@iwouldfundthat.com</a></p>
      <nav class="legal-modal__toc" aria-label="Legal sections">
        <a href="#iwft-legal-privacy" class="legal-modal__toc-link">Privacy Policy</a>
        <a href="#iwft-legal-terms" class="legal-modal__toc-link">Terms of Service</a>
        <a href="#iwft-legal-summary" class="legal-modal__toc-link">Summary</a>
      </nav>
      <button type="button" class="legal-modal__close" data-legal-close aria-label="Close">&times;</button>
    </div>
    <div class="legal-modal__body">
      <div class="legal-modal__inner">

        <section id="iwft-legal-privacy" class="legal-section" tabindex="-1">
          <h3 class="legal-h3">1. Privacy Policy</h3>
          <h4 class="legal-h4">Overview</h4>
          <p>IWouldFundThat (“Company,” “we,” “our,” or “us”) provides a platform connecting companies with investors, lenders, and capital partners. This Privacy Policy explains how we collect, use, and protect your information.</p>
          <h4 class="legal-h4">Information We Collect</h4>
          <p><strong>Information You Provide</strong></p>
          <ul class="legal-ul">
            <li>Name, email, phone number</li>
            <li>Company and financial information</li>
            <li>Funding requirements and deal data</li>
            <li>Investor/lender accreditation details</li>
          </ul>
          <p><strong>Automatically Collected</strong></p>
          <ul class="legal-ul">
            <li>IP address</li>
            <li>Device and browser data</li>
            <li>Usage activity (pages visited, session data)</li>
          </ul>
          <p><strong>Third-Party Sources</strong></p>
          <p>We may receive data from verification partners, analytics providers, and compliance vendors.</p>
          <h4 class="legal-h4">How We Use Information</h4>
          <ul class="legal-ul">
            <li>Match users with funding opportunities</li>
            <li>Facilitate introductions and transactions</li>
            <li>Verify identity and eligibility</li>
            <li>Improve platform performance</li>
            <li>Communicate updates and support</li>
          </ul>
          <h4 class="legal-h4">Sharing of Information</h4>
          <p>We may share data with:</p>
          <ul class="legal-ul">
            <li>Investors, lenders, and partners (for deal matching)</li>
            <li>Service providers (legal, hosting, compliance)</li>
            <li>Authorities if required by law</li>
          </ul>
          <p>We <strong>do not sell</strong> personal information.</p>
          <h4 class="legal-h4">California Privacy Rights (CCPA/CPRA)</h4>
          <p>If you are a California resident, you have the right to:</p>
          <ul class="legal-ul">
            <li><strong>Know</strong> what personal data we collect and how it’s used</li>
            <li><strong>Access</strong> your personal data</li>
            <li><strong>Delete</strong> your data (subject to legal exceptions)</li>
            <li><strong>Correct</strong> inaccurate data</li>
            <li><strong>Opt-out</strong> of sale/sharing (we do not sell data)</li>
            <li><strong>Limit</strong> use of sensitive data</li>
            <li><strong>Non-discrimination</strong> for exercising rights</li>
          </ul>
          <h4 class="legal-h4">How to Exercise Rights</h4>
          <p>Email: <a href="mailto:hello@iwouldfundthat.com">hello@iwouldfundthat.com</a></p>
          <p>We may verify your identity before processing requests.</p>
          <h4 class="legal-h4">Cookies &amp; Tracking</h4>
          <p>We use cookies and analytics tools to improve user experience. You may control cookies through your browser settings.</p>
          <h4 class="legal-h4">Data Retention</h4>
          <p>We retain data only as long as necessary for:</p>
          <ul class="legal-ul">
            <li>Business operations</li>
            <li>Legal and regulatory compliance</li>
          </ul>
          <h4 class="legal-h4">Security</h4>
          <p>We use reasonable safeguards, but no system is fully secure.</p>
          <h4 class="legal-h4">Children’s Privacy</h4>
          <p>Not intended for users under 18.</p>
          <h4 class="legal-h4">Updates</h4>
          <p>We may update this policy periodically.</p>
        </section>

        <section id="iwft-legal-terms" class="legal-section" tabindex="-1">
          <h3 class="legal-h3">2. Terms of Service</h3>
          <h4 class="legal-h4">Overview</h4>
          <p>By using IWouldFundThat, you agree to these Terms.</p>
          <h4 class="legal-h4">Eligibility</h4>
          <p>You must:</p>
          <ul class="legal-ul">
            <li>Be 18+</li>
            <li>Provide accurate information</li>
            <li>Comply with applicable laws</li>
          </ul>
          <h4 class="legal-h4">Platform Role</h4>
          <p>IWouldFundThat:</p>
          <ul class="legal-ul">
            <li>Is a <strong>technology and matchmaking platform</strong></li>
            <li>Is <strong>not</strong> a bank, broker-dealer, or financial advisor</li>
            <li>Does <strong>not</strong> guarantee funding or returns</li>
          </ul>
          <p>We are not a party to transactions between users.</p>
          <h4 class="legal-h4">No Investment Advice</h4>
          <p>All content is informational only and does not constitute financial, legal, or investment advice.</p>
          <h4 class="legal-h4">User Responsibilities</h4>
          <p><strong>Companies</strong></p>
          <ul class="legal-ul">
            <li>Provide accurate disclosures</li>
            <li>Use funds appropriately</li>
            <li>Honor agreements</li>
          </ul>
          <p><strong>Investors / Lenders</strong></p>
          <ul class="legal-ul">
            <li>Conduct independent due diligence</li>
            <li>Understand risks</li>
            <li>Comply with securities laws</li>
          </ul>
          <h4 class="legal-h4">Transactions</h4>
          <p>All deals:</p>
          <ul class="legal-ul">
            <li>Occur directly between users</li>
            <li>May involve third-party legal or payment providers</li>
            <li>Are not guaranteed or facilitated as a brokered transaction</li>
          </ul>
          <h4 class="legal-h4">Fees</h4>
          <p>We may charge:</p>
          <ul class="legal-ul">
            <li>Listing or application fees</li>
            <li>Success or facilitation fees</li>
          </ul>
          <p>All fees will be disclosed in advance.</p>
          <h4 class="legal-h4">Risk Disclosure</h4>
          <p>Participation involves risk, including:</p>
          <ul class="legal-ul">
            <li>Loss of capital</li>
            <li>Illiquidity</li>
            <li>Business failure</li>
          </ul>
          <p>No guarantees of returns.</p>
          <h4 class="legal-h4">Securities Compliance</h4>
          <p>IWouldFundThat does not:</p>
          <ul class="legal-ul">
            <li>Act as a registered broker-dealer</li>
            <li>Recommend securities</li>
            <li>Execute transactions</li>
          </ul>
          <p>Some opportunities may be limited to <strong>accredited investors</strong> under Regulation D.</p>
          <h4 class="legal-h4">Prohibited Conduct</h4>
          <p>Users may not:</p>
          <ul class="legal-ul">
            <li>Submit false information</li>
            <li>Commit fraud</li>
            <li>Circumvent platform processes</li>
            <li>Use platform unlawfully</li>
          </ul>
          <h4 class="legal-h4">Limitation of Liability</h4>
          <p>The platform is provided “as is”. We are not liable for:</p>
          <ul class="legal-ul">
            <li>Financial losses</li>
            <li>Failed deals</li>
            <li>User actions</li>
          </ul>
          <h4 class="legal-h4">Indemnification</h4>
          <p>You agree to indemnify IWouldFundThat from claims related to your use of the platform.</p>
          <h4 class="legal-h4">Dispute Resolution (California)</h4>
          <p>Disputes will be resolved through <strong>binding arbitration</strong> in California, where permitted. Users waive participation in class actions.</p>
          <h4 class="legal-h4">California Consumer Notice (Section 1789.3)</h4>
          <p>Contact: <a href="mailto:hello@iwouldfundthat.com">hello@iwouldfundthat.com</a></p>
          <p>California Department of Consumer Affairs<br>1625 North Market Blvd., Suite N 112<br>Sacramento, CA 95834<br>(800) 952-5210</p>
          <h4 class="legal-h4">Termination</h4>
          <p>We may suspend or terminate access at any time.</p>
          <h4 class="legal-h4">Governing Law</h4>
          <p>California, United States.</p>
        </section>

        <section id="iwft-legal-summary" class="legal-section" tabindex="-1">
          <h3 class="legal-h3">3. Short-Form (User-Friendly Summary)</h3>
          <h4 class="legal-h4">What We Do</h4>
          <p>IWouldFundThat connects companies with investors and lenders through a transparent, structured platform.</p>
          <h4 class="legal-h4">Your Data</h4>
          <p>We collect basic personal, business, and usage information to:</p>
          <ul class="legal-ul">
            <li>Match you with funding opportunities</li>
            <li>Improve the platform</li>
            <li>Verify eligibility</li>
          </ul>
          <p>We <strong>do not sell</strong> your data.</p>
          <h4 class="legal-h4">Your Rights (California Users)</h4>
          <p>You can:</p>
          <ul class="legal-ul">
            <li>Request your data</li>
            <li>Ask us to delete or correct it</li>
            <li>Understand how it’s used</li>
          </ul>
          <p>Email: <a href="mailto:hello@iwouldfundthat.com">hello@iwouldfundthat.com</a></p>
          <h4 class="legal-h4">Important Disclaimers</h4>
          <ul class="legal-ul">
            <li>We are <strong>not</strong> a broker-dealer or financial advisor</li>
            <li>We do <strong>not</strong> guarantee funding or returns</li>
            <li>All investments carry risk</li>
          </ul>
          <h4 class="legal-h4">Your Responsibility</h4>
          <ul class="legal-ul">
            <li>Provide accurate information</li>
            <li>Do your own due diligence</li>
            <li>Comply with laws</li>
          </ul>
          <h4 class="legal-h4">Bottom Line</h4>
          <p>We provide the platform and connections; you make the decisions.</p>
        </section>

      </div>
    </div>
  </div>
</div>

<script>
(function(){
var cursor=document.getElementById('cursor');
var ring=document.getElementById('cursorRing');
if(cursor&&ring&&window.matchMedia('(hover: hover) and (pointer: fine)').matches){
var mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',function(e){mx=e.clientX;my=e.clientY;});
(function loop(){
  cursor.style.transform='translate('+(mx-5)+'px,'+(my-5)+'px)';
  rx+=(mx-rx)*.1;ry+=(my-ry)*.1;
  ring.style.transform='translate('+(rx-18)+'px,'+(ry-18)+'px)';
  requestAnimationFrame(loop);
})();
}
const obs=new IntersectionObserver(entries=>{
  entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('visible');});
},{threshold:.1});
document.querySelectorAll('.reveal').forEach(el=>obs.observe(el));
const lb=document.getElementById('lenderBtn');
if(lb){
lb.addEventListener('click',function(){
  const name=document.getElementById('lname');
  const email=document.getElementById('lemail');
  if(!name||!email)return;
  const nv=name.value.trim();
  const ev=email.value.trim();
  if(!nv||!ev){
    this.style.background='#7A2040';
    this.textContent='Please complete all required fields';
    setTimeout(()=>{this.style.background='';this.style.color='';this.textContent='Apply to Join the Lender Network →';},2200);
    return;
  }
  this.style.background='var(--green)';
  this.style.color='#0B0D18';
  this.textContent='✓ Application Received — We\'ll Be in Touch Within 3–5 Days';
  name.value='';
  email.value='';
  var sector=document.getElementById('lsector');
  if(sector) sector.value='';
});
}
var _lm=document.getElementById('iwft-legal-modal');
if(_lm){
var _lb=_lm.querySelector('.legal-modal__body');
function _ls(id){
var el=document.getElementById(id);
if(!el||!_lb)return;
var t=el.getBoundingClientRect().top-_lb.getBoundingClientRect().top+_lb.scrollTop;
_lb.scrollTop=Math.max(0,t-8);
}
function _lo(tg){
_lm.hidden=false;
_lm.setAttribute('aria-hidden','false');
document.body.style.overflow='hidden';
var m={privacy:'iwft-legal-privacy',terms:'iwft-legal-terms',summary:'iwft-legal-summary'};
_ls(m[tg]||'iwft-legal-privacy');
var cb=_lm.querySelector('.legal-modal__close');
if(cb)cb.focus();
}
function _lc(){
_lm.hidden=true;
_lm.setAttribute('aria-hidden','true');
document.body.style.overflow='';
}
document.querySelectorAll('.iwft-legal-open').forEach(function(a){
a.addEventListener('click',function(e){e.preventDefault();_lo(a.getAttribute('data-legal-target')||'privacy');});
});
_lm.querySelectorAll('[data-legal-close]').forEach(function(el){el.addEventListener('click',_lc);});
document.addEventListener('keydown',function(e){if(e.key==='Escape'&&!_lm.hidden)_lc();});
_lm.querySelectorAll('.legal-modal__toc-link').forEach(function(link){
link.addEventListener('click',function(e){
e.preventDefault();
var id=(link.getAttribute('href')||'').replace(/^#/,'');
if(id)_ls(id);
});
});
}
})();
(function(){
var d=document,w='https://tally.so/widgets/embed.js',v=function(){
if(typeof Tally!=='undefined'){Tally.loadEmbeds();}
else{d.querySelectorAll('iframe[data-tally-src]:not([src])').forEach(function(e){e.src=e.dataset.tallySrc;});}
};
if(typeof Tally!=='undefined'){v();}
else if(d.querySelector('script[src="'+w+'"]')===null){
var s=d.createElement('script');
s.src=w;s.onload=v;s.onerror=v;d.body.appendChild(s);
}
})();
</script>
	<?php
	return ob_get_clean();
}