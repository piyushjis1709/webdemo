<?php
$pageTitle = 'Business Solutions | Jharkhand IT Services';
$pageDescription = 'Explore business-ready CRM, ERP, billing, portals, education, travel and inventory solutions from Jharkhand IT Services.';
$currentPage = 'solutions';
include __DIR__ . '/includes/header.php';
?>

<main class="solutionsPage">
    <section class="solutionsHero">
        <div class="solutionsHeroGlow"></div>
        <div class="container solutionsHeroGrid">
            <div class="solutionsHeroCopy reveal">
                <span class="eyebrow"><i></i> Systems that move work forward</span>
                <h1>Turn complex operations into <span>clear momentum.</span></h1>
                <p>Connected software for the work your business does every day: sales, billing, inventory, education, travel and customer experiences.</p>
                <div class="solutionsHeroActions"><a class="btn btnPrimary" href="#solutionCatalog">Explore solutions &#8595;</a><a class="btn btnGhost" href="contact.php">Talk to an expert</a></div>
                <div class="solutionsProof">
                    <div><strong>300+</strong><span>projects shipped</span></div>
                    <div><strong>10+</strong><span>years of learning</span></div>
                    <div><strong>24x7</strong><span>support mindset</span></div>
                </div>
            </div>
            <div class="solutionsCommand reveal" aria-label="Business operations dashboard preview">
                <div class="commandTop"><span><i></i><i></i><i></i></span><b>JIS / OPERATIONS OS</b><small>LIVE VIEW</small></div>
                <div class="commandBody">
                    <div class="commandIntro"><small>Business pulse</small><strong>Everything in motion.</strong><span>One connected view for better decisions.</span></div>
                    <div class="commandChart"><span class="chartLabel">Growth signal <b>+28.4%</b></span>
                        <div class="chartLines"><i></i><i></i><i></i><i></i><i></i>
                            <div class="chartPath"></div>
                        </div>
                    </div>
                    <div class="commandMetrics">
                        <div><span>Active orders</span><strong>1,284</strong><b>+12.8%</b></div>
                        <div><span>Team efficiency</span><strong>92%</strong><b>+8.6%</b></div>
                        <div><span>Open leads</span><strong>248</strong><b>+19.2%</b></div>
                    </div>
                </div>
                <div class="commandFloat commandFloatOne"><span class="signalIcon">&#10003;</span>
                    <div><small>System health</small><strong>All systems ready</strong></div>
                </div>
                <div class="commandFloat commandFloatTwo"><span class="signalIcon">&#8593;</span>
                    <div><small>This month</small><strong>More clarity, less friction</strong></div>
                </div>
            </div>
        </div>
    </section>

    <section class="solutionIntro" id="solutionCatalog">
        <div class="container">
            <div class="sectionHead solutionSectionHead reveal"><span class="kicker">Built for the real world</span>
                <h2>Choose the system your next stage needs.</h2>
                <p>Start with one focused workflow or connect multiple solutions into a single digital operating layer.</p>
            </div>
            <div class="solutionFilters reveal" role="tablist" aria-label="Filter solutions"><button class="solutionFilter active" type="button" data-solution-filter="all" role="tab" aria-selected="true">All solutions</button><button class="solutionFilter" type="button" data-solution-filter="business" role="tab" aria-selected="false">Business</button><button class="solutionFilter" type="button" data-solution-filter="customer" role="tab" aria-selected="false">Customer experience</button><button class="solutionFilter" type="button" data-solution-filter="industry" role="tab" aria-selected="false">Industry</button></div>
            <div class="solutionGrid">
                <article class="solutionCard solutionCardFeatured reveal" data-solution-type="business">
                    <div class="solutionCardVisual solutionVisualBlue"><span class="solutionCardNumber">01</span>
                        <div class="visualWindow">
                            <div class="visualWindowBar"><i></i><i></i><i></i><span>LEAD PIPELINE</span></div>
                            <div class="pipeline"><b>New lead <em>24</em></b><b>In progress <em>12</em></b><b>Won this month <em>08</em></b></div>
                        </div>
                    </div>
                    <div class="solutionCardBody"><span class="solutionTag">Business control</span>
                        <h3>CRM & ERP Platform</h3>
                        <p>Bring leads, teams, operations and reporting into one dependable workspace.</p><a href="contact.php?solution=crm-erp">Design your workspace <b>&#8594;</b></a>
                    </div>
                </article>
                <article class="solutionCard reveal" data-solution-type="business">
                    <div class="solutionCardVisual solutionVisualGold"><span class="solutionCardNumber">02</span><span class="visualIcon">&#8377;</span><span class="visualLine lineOne"></span><span class="visualLine lineTwo"></span><span class="visualLine lineThree"></span><strong class="visualBill">&#8377; 84,650<small>monthly revenue</small></strong></div>
                    <div class="solutionCardBody"><span class="solutionTag">Finance workflow</span>
                        <h3>GST Billing & Finance</h3>
                        <p>Invoices, customers, stock and reports made easier for growing teams.</p><a href="contact.php?solution=billing">Simplify billing <b>&#8594;</b></a>
                    </div>
                </article>
                <article class="solutionCard reveal" data-solution-type="business">
                    <div class="solutionCardVisual solutionVisualGreen"><span class="solutionCardNumber">03</span>
                        <div class="stockRows"><b><i></i> Wireless Headphones <em>84</em></b><b><i></i> Office Chair <em>42</em></b><b><i></i> Smart Watch <em>126</em></b><b><i></i> Running Shoes <em>19</em></b></div>
                    </div>
                    <div class="solutionCardBody"><span class="solutionTag">Operations</span>
                        <h3>Inventory Management</h3>
                        <p>Know what is moving, what is waiting and what needs attention next.</p><a href="contact.php?solution=inventory">Organize inventory <b>&#8594;</b></a>
                    </div>
                </article>
                <article class="solutionCard reveal" data-solution-type="customer">
                    <div class="solutionCardVisual solutionVisualPink"><span class="solutionCardNumber">04</span>
                        <div class="portalNodes"><i>Customer</i><i>Orders</i><i>Support</i><i>Team</i><span></span></div>
                    </div>
                    <div class="solutionCardBody"><span class="solutionTag">Digital ecosystem</span>
                        <h3>B2B / B2C Portals</h3>
                        <p>Build better journeys for buyers, partners and the teams who serve them.</p><a href="contact.php?solution=portal">Plan your portal <b>&#8594;</b></a>
                    </div>
                </article>
                <article class="solutionCard reveal" data-solution-type="industry">
                    <div class="solutionCardVisual solutionVisualViolet"><span class="solutionCardNumber">05</span>
                        <div class="educationVisual"><span>01</span><b>Learning that<br>keeps moving.</b><small>Admissions · Exams · Results</small></div>
                    </div>
                    <div class="solutionCardBody"><span class="solutionTag">Education</span>
                        <h3>Education & Exam Portals</h3>
                        <p>Make admissions, learning, examinations and student workflows feel simple.</p><a href="contact.php?solution=education">Build a better campus <b>&#8594;</b></a>
                    </div>
                </article>
                <article class="solutionCard reveal" data-solution-type="industry">
                    <div class="solutionCardVisual solutionVisualOrange"><span class="solutionCardNumber">06</span>
                        <div class="travelVisual"><span>&#9992;</span><b>Explore further</b><small>Bookings · Stays · Experiences</small></div>
                    </div>
                    <div class="solutionCardBody"><span class="solutionTag">Travel & hospitality</span>
                        <h3>Travel & Hotel Systems</h3>
                        <p>Connect discovery, booking and management into one welcoming experience.</p><a href="contact.php?solution=travel">Plan the journey <b>&#8594;</b></a>
                    </div>
                </article>
            </div>
            <div class="solutionEmpty" hidden>No solutions match this view yet.</div>
        </div>
    </section>

    <section class="solutionFlow">
        <div class="container solutionFlowGrid">
            <div class="solutionFlowCopy reveal"><span class="kicker">One connected approach</span>
                <h2>Start small. Connect when you are ready.</h2>
                <p>Every business has a different rhythm. Our solutions are designed to work independently today and share data tomorrow.</p><a class="textLink" href="contact.php">Map your workflow <b>&#8594;</b></a>
            </div>
            <div class="flowDiagram reveal">
                <div class="flowLine"></div>
                <div class="flowNode flowNodeOne"><span>&#128100;</span><strong>People</strong><small>Teams and customers</small></div>
                <div class="flowNode flowNodeTwo"><span>&#9881;</span><strong>Process</strong><small>Workflows and data</small></div>
                <div class="flowNode flowNodeThree"><span>&#9733;</span><strong>Progress</strong><small>Insight and growth</small></div>
            </div>
        </div>
    </section>

    <section class="solutionIndustries">
        <div class="container">
            <div class="industryTop reveal"><span class="kicker">Made to fit</span>
                <h2>Useful across the way you work.</h2>
            </div>
            <div class="industryList"><span class="reveal">Retail & commerce</span><span class="reveal">Education</span><span class="reveal">Travel & hospitality</span><span class="reveal">Healthcare</span><span class="reveal">Growing enterprises</span></div>
        </div>
    </section>

    <section class="ctaSection solutionCta">
        <div class="container">
            <div class="ctaBox reveal">
                <div><span class="kicker" style="color:#6bd7ff">Your next system starts here</span>
                    <h2>Have a workflow worth improving?</h2>
                    <p>Tell us where the friction is. We will help you shape a solution that earns its place.</p>
                </div><a class="btn" href="contact.php">Start a conversation &#8594;</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
<script>
    document.querySelectorAll('.solutionFilter').forEach(button => button.addEventListener('click', () => {
        const filter = button.dataset.solutionFilter;
        document.querySelectorAll('.solutionFilter').forEach(item => {
            item.classList.toggle('active', item === button);
            item.setAttribute('aria-selected', item === button ? 'true' : 'false');
        });
        let visible = 0;
        document.querySelectorAll('.solutionCard').forEach(card => {
            const show = filter === 'all' || card.dataset.solutionType === filter;
            card.hidden = !show;
            if (show) visible++;
        });
        document.querySelector('.solutionEmpty').hidden = visible !== 0;
    }));
</script>