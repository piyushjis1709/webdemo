<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JIS AI Assistant</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap');

        :root {
            --jis-navy: #092844;
            --jis-blue: #1268b3;
            --jis-blue-2: #2186df;
            --jis-gold: #d4a017;
            --jis-ink: #142536;
            --jis-muted: #6f7f90;
            --jis-bg: #f5f8fc;
            --jis-card: #ffffff;
            --jis-border: #e5ebf2;
            --jis-success: #18a86b;
            --jis-shadow: 0 28px 80px rgba(7, 35, 62, .22), 0 8px 24px rgba(7, 35, 62, .10);
            --jis-radius: 24px;
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            margin: 0;
            min-height: 100%;
            font-family: 'Manrope', Arial, sans-serif;
            color: var(--jis-ink);
            -webkit-font-smoothing: antialiased
        }

        button,
        input,
        select,
        textarea {
            font: inherit
        }

        button {
            appearance: none
        }

        /* Floating launcher */
        .jis-chat-launcher {
            position: fixed;
            right: 24px;
            bottom: 24px;
            width: 62px;
            height: 62px;
            border: 1px solid rgba(255, 255, 255, .35);
            border-radius: 20px;
            background: linear-gradient(145deg, var(--jis-blue), var(--jis-navy));
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            cursor: pointer;
            z-index: 999999;
            box-shadow: 0 18px 42px rgba(9, 40, 68, .28);
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .jis-chat-launcher:hover {
            transform: translateY(-3px);
            box-shadow: 0 22px 50px rgba(9, 40, 68, .34)
        }

        .jis-online-dot {
            position: absolute;
            right: 2px;
            top: 2px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #27c982;
            border: 3px solid #fff
        }

        /* Main panel */
        .jis-chat-window {
            position: fixed;
            right: 24px;
            bottom: 98px;
            width: 420px;
            height: 690px;
            max-width: calc(100vw - 30px);
            max-height: calc(100vh - 120px);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            background: var(--jis-card);
            border: 1px solid rgba(9, 40, 68, .08);
            border-radius: var(--jis-radius);
            box-shadow: var(--jis-shadow);
            z-index: 999998;
            opacity: 0;
            visibility: hidden;
            transform: translateY(18px) scale(.97);
            transition: opacity .25s ease, visibility .25s ease, transform .25s ease;
        }

        .jis-chat-window.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1)
        }

        /* Header */
        .jis-chat-header {
            position: relative;
            padding: 20px 20px 18px;
            color: #fff;
            background: linear-gradient(135deg, #071d32 0%, #092844 58%, #1268b3 140%);
            overflow: hidden
        }

        .jis-chat-header:after {
            content: '';
            position: absolute;
            width: 180px;
            height: 180px;
            right: -70px;
            top: -100px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .08)
        }

        .jis-header-top {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px
        }

        .jis-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 0
        }

        .jis-avatar {
            width: 48px;
            height: 48px;
            flex: 0 0 48px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(145deg, rgba(255, 255, 255, .18), rgba(255, 255, 255, .07));
            border: 1px solid rgba(255, 255, 255, .18);
            font-weight: 800;
            letter-spacing: -.5px;
            font-size: 14px
        }

        .jis-profile h3 {
            margin: 0;
            font-size: 15px;
            font-weight: 800;
            letter-spacing: -.2px;
            color: #fff
        }

        .jis-profile p {
            margin: 4px 0 0;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .1px;
            color: rgba(255, 255, 255, .72)
        }

        .jis-status-dot {
            color: #43dfa0;
            margin-right: 2px
        }

        .jis-header-buttons {
            display: flex;
            gap: 6px;
            position: relative;
            z-index: 2
        }

        .jis-header-buttons button {
            width: 34px;
            height: 34px;
            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: 10px;
            background: rgba(255, 255, 255, .09);
            color: #fff;
            font-size: 19px;
            line-height: 1;
            cursor: pointer;
            transition: .2s ease
        }

        .jis-header-buttons button:hover {
            background: rgba(255, 255, 255, .18)
        }

        .jis-header-text {
            position: relative;
            z-index: 1;
            margin-top: 14px;
            max-width: 330px;
            font-size: 11px;
            line-height: 1.65;
            font-weight: 500;
            color: rgba(255, 255, 255, .76)
        }

        /* Body */
        .jis-chat-body {
            flex: 1;
            overflow-y: auto;
            padding: 18px 15px 14px;
            background: linear-gradient(180deg, #f7f9fc 0%, #f3f7fb 100%);
            scroll-behavior: smooth
        }

        .jis-chat-body::-webkit-scrollbar {
            width: 5px
        }

        .jis-chat-body::-webkit-scrollbar-thumb {
            background: #cbd5df;
            border-radius: 20px
        }

        .jis-message {
            display: flex;
            margin-bottom: 13px;
            animation: jisMessageIn .22s ease both
        }

        .jis-message.user {
            justify-content: flex-end
        }

        @keyframes jisMessageIn {
            from {
                opacity: 0;
                transform: translateY(5px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .jis-bubble {
            max-width: 84%;
            padding: 12px 14px;
            border-radius: 16px;
            font-size: 12px;
            line-height: 1.7;
            letter-spacing: -.05px
        }

        .jis-message.bot .jis-bubble {
            background: #fff;
            color: var(--jis-ink);
            border: 1px solid var(--jis-border);
            border-bottom-left-radius: 6px;
            box-shadow: 0 5px 18px rgba(9, 40, 68, .045)
        }

        .jis-message.user .jis-bubble {
            background: linear-gradient(135deg, var(--jis-blue), var(--jis-navy));
            color: #fff;
            border-bottom-right-radius: 6px;
            box-shadow: 0 6px 16px rgba(18, 104, 179, .18)
        }

        .jis-bubble strong {
            color: var(--jis-navy);
            font-weight: 800
        }

        .jis-message.user strong {
            color: #fff
        }

        .jis-bubble a {
            color: var(--jis-blue);
            font-weight: 700;
            text-decoration: none
        }

        .jis-bubble a:hover {
            text-decoration: underline
        }

        /* Typing */
        .jis-typing {
            display: flex;
            gap: 5px;
            align-items: center;
            min-width: 52px;
            justify-content: center
        }

        .jis-typing span {
            width: 6px;
            height: 6px;
            background: #8fa0b0;
            border-radius: 50%;
            animation: jisTyping 1.2s infinite
        }

        .jis-typing span:nth-child(2) {
            animation-delay: .15s
        }

        .jis-typing span:nth-child(3) {
            animation-delay: .3s
        }

        @keyframes jisTyping {

            0%,
            60%,
            100% {
                transform: translateY(0);
                opacity: .35
            }

            30% {
                transform: translateY(-4px);
                opacity: 1
            }
        }

        /* Quick action bar */
        .jis-quick-area {
            padding: 10px 13px 9px;
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            background: #fff;
            border-top: 1px solid var(--jis-border);
            max-height: 122px;
            overflow-y: auto
        }

        .jis-quick-area::-webkit-scrollbar {
            height: 3px;
            width: 3px
        }

        .jis-quick-area::-webkit-scrollbar-thumb {
            background: #d5dde5;
            border-radius: 10px
        }

        .jis-quick {
            border: 1px solid #dce5ed;
            background: #fff;
            color: var(--jis-navy);
            border-radius: 999px;
            padding: 8px 11px;
            font-size: 10px;
            font-weight: 700;
            line-height: 1;
            cursor: pointer;
            transition: all .2s ease;
            white-space: nowrap
        }

        .jis-quick:hover {
            background: #edf5fc;
            border-color: #b9d3e9;
            color: var(--jis-blue);
            transform: translateY(-1px)
        }

        /* Service cards */
        .jis-service-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
            margin-top: 9px
        }

        .jis-service-card {
            width: 100%;
            border: 1px solid var(--jis-border);
            background: #fff;
            border-radius: 13px;
            padding: 12px;
            text-align: left;
            cursor: pointer;
            transition: .22s ease
        }

        .jis-service-card:hover {
            border-color: #bdd7ed;
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(9, 40, 68, .07)
        }

        .jis-service-icon {
            font-size: 19px;
            margin-bottom: 7px
        }

        .jis-service-card strong {
            display: block;
            color: var(--jis-navy);
            font-size: 10px;
            line-height: 1.35;
            font-weight: 800
        }

        .jis-service-card small {
            display: block;
            color: var(--jis-muted);
            font-size: 8px;
            line-height: 1.45;
            margin-top: 4px;
            font-weight: 500
        }

        /* Lead form */
        .jis-lead-form {
            margin-top: 9px;
            background: #fbfcfe;
            border: 1px solid var(--jis-border);
            padding: 12px;
            border-radius: 14px
        }

        .jis-field {
            margin-bottom: 9px
        }

        .jis-field label {
            display: block;
            color: #526273;
            font-size: 9px;
            font-weight: 800;
            margin-bottom: 5px
        }

        .jis-field input,
        .jis-field select,
        .jis-field textarea {
            width: 100%;
            border: 1px solid #dce4ec;
            background: #fff;
            border-radius: 9px;
            padding: 9px 10px;
            font-size: 10px;
            color: var(--jis-ink);
            outline: none;
            transition: .2s ease
        }

        .jis-field textarea {
            min-height: 60px;
            resize: vertical;
            line-height: 1.5
        }

        .jis-field input::placeholder,
        .jis-field textarea::placeholder {
            color: #a2afbb
        }

        .jis-field input:focus,
        .jis-field select:focus,
        .jis-field textarea:focus {
            border-color: #7eb3dc;
            box-shadow: 0 0 0 3px rgba(33, 134, 223, .08)
        }

        .jis-submit {
            width: 100%;
            border: 0;
            border-radius: 10px;
            padding: 11px;
            background: linear-gradient(135deg, var(--jis-blue), var(--jis-navy));
            color: #fff;
            font-size: 10px;
            font-weight: 800;
            cursor: pointer;
            box-shadow: 0 8px 18px rgba(18, 104, 179, .16);
            transition: .2s ease
        }

        .jis-submit:hover {
            transform: translateY(-1px)
        }

        /* Contact cards */
        .jis-contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
            margin-top: 9px
        }

        .jis-contact-card {
            padding: 11px;
            border: 1px solid var(--jis-border);
            background: #fff;
            border-radius: 12px;
            text-decoration: none;
            color: var(--jis-navy);
            font-size: 9px;
            transition: .2s ease
        }

        .jis-contact-card:hover {
            border-color: #bdd7ed;
            transform: translateY(-1px)
        }

        .jis-contact-card span {
            display: block;
            font-size: 17px;
            margin-bottom: 6px
        }

        .jis-contact-card strong {
            display: block;
            font-size: 9px;
            color: var(--jis-navy);
            font-weight: 800
        }

        /* Input */
        .jis-input-area {
            display: flex;
            gap: 8px;
            padding: 10px;
            background: #fff;
            border-top: 1px solid var(--jis-border)
        }

        .jis-input {
            flex: 1;
            min-width: 0;
            border: 1px solid #dbe4ec;
            background: #f9fbfd;
            border-radius: 12px;
            padding: 11px 12px;
            outline: none;
            font-size: 11px;
            color: var(--jis-ink);
            transition: .2s ease
        }

        .jis-input::placeholder {
            color: #98a6b3
        }

        .jis-input:focus {
            background: #fff;
            border-color: #80b5de;
            box-shadow: 0 0 0 3px rgba(33, 134, 223, .07)
        }

        .jis-send {
            width: 42px;
            height: 42px;
            flex: 0 0 42px;
            border: 0;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--jis-blue), var(--jis-navy));
            color: #fff;
            font-size: 15px;
            cursor: pointer;
            box-shadow: 0 7px 16px rgba(18, 104, 179, .16);
            transition: .2s ease
        }

        .jis-send:hover {
            transform: translateY(-1px)
        }

        .jis-chat-footer {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 6px;
            background: #fff;
            color: #9aa6b2;
            font-size: 8px;
            font-weight: 500
        }

        .jis-chat-footer a {
            color: var(--jis-blue);
            text-decoration: none;
            font-weight: 800
        }

        @media(max-width:520px) {
            .jis-chat-launcher {
                right: 15px;
                bottom: 15px;
                width: 58px;
                height: 58px;
                border-radius: 18px
            }

            .jis-chat-window {
                right: 8px;
                bottom: 82px;
                width: calc(100vw - 16px);
                height: calc(100vh - 100px);
                max-height: none;
                border-radius: 20px
            }

            .jis-chat-header {
                padding: 17px 16px 15px
            }

            .jis-chat-body {
                padding: 15px 11px 12px
            }

            .jis-bubble {
                max-width: 89%;
                font-size: 11px
            }

            .jis-quick-area {
                max-height: 115px;
                padding: 9px 10px
            }

            .jis-quick {
                font-size: 9px;
                padding: 8px 10px
            }

            .jis-service-grid {
                gap: 7px
            }

            .jis-service-card {
                padding: 10px
            }

            .jis-profile h3 {
                font-size: 14px
            }
        }
    </style>
</head>

<body>

    <!-- =========================================================
     CHAT BUTTON
========================================================= -->

    <button
        class="jis-chat-launcher"
        id="jisOpenChat"
        aria-label="Open JIS Chatbot">

        💬

        <span class="jis-online-dot"></span>

    </button>


    <!-- =========================================================
     CHAT WINDOW
========================================================= -->

    <div
        class="jis-chat-window"
        id="jisChatWindow">

        <!-- HEADER -->

        <div class="jis-chat-header">

            <div class="jis-header-top">

                <div class="jis-profile">

                    <div class="jis-avatar">JIS</div>

                    <div>

                        <h3>
                            JIS AI Assistant
                        </h3>

                        <p>
                            <span class="jis-status-dot">●</span>
                            Online · Jharkhand IT Services
                        </p>

                    </div>

                </div>


                <div class="jis-header-buttons">

                    <button
                        id="jisMinimize"
                        aria-label="Minimize">
                        −
                    </button>

                    <button
                        id="jisClose"
                        aria-label="Close">
                        ×
                    </button>

                </div>

            </div>


            <div class="jis-header-text">

                👋 Hello! I can help you understand our
                services, pricing, project requirements,
                contact details and more.

            </div>

        </div>


        <!-- CHAT BODY -->

        <div
            class="jis-chat-body"
            id="jisChatBody">
        </div>


        <!-- QUICK BUTTONS -->

        <div
            class="jis-quick-area"
            id="jisQuickArea">
        </div>


        <!-- INPUT -->

        <div class="jis-input-area">

            <input
                type="text"
                id="jisInput"
                class="jis-input"
                placeholder="Ask about our services..."
                autocomplete="off">

            <button
                id="jisSend"
                class="jis-send">

                ➤

            </button>

        </div>


        <div class="jis-chat-footer">

            <span>
                Jharkhand IT Services
            </span>

            <a
                href="tel:+916209009007">
                📞 Call
            </a>

        </div>

    </div>


    <script>
        /* =========================================================
   JIS CHATBOT DATA
========================================================= */

        const JIS_SERVICES = {

            website: {

                name: "Website Development",

                icon: "🌐",

                keywords: [
                    "website",
                    "web",
                    "web design",
                    "web development",
                    "wordpress",
                    "html",
                    "css",
                    "business website"
                ],

                answer: `
        We create modern, responsive and
        SEO-friendly websites for businesses,
        companies, institutions and organizations.

        <br><br>

        <strong>We can help with:</strong>

        <br>
        • Corporate Website<br>
        • Business Website<br>
        • WordPress Website<br>
        • Custom Web Application<br>
        • Landing Page<br>
        • E-Commerce Website<br>
        • Website Maintenance
        `
            },


            software: {

                name: "Custom Software Development",

                icon: "⚙️",

                keywords: [
                    "software",
                    "custom software",
                    "business software",
                    "erp",
                    "crm",
                    "management software",
                    "automation"
                ],

                answer: `
        We develop customized software according
        to your business process and requirements.

        <br><br>

        <strong>Solutions include:</strong>

        <br>
        • CRM<br>
        • ERP<br>
        • Business Management Software<br>
        • Billing Software<br>
        • Inventory Software<br>
        • Dashboard<br>
        • Workflow Automation
        `
            },


            app: {

                name: "Mobile App Development",

                icon: "📱",

                keywords: [
                    "app",
                    "mobile app",
                    "android",
                    "ios",
                    "flutter",
                    "mobile application"
                ],

                answer: `
        We develop modern mobile applications
        for Android, iOS and cross-platform
        requirements.

        <br><br>

        <strong>Our process includes:</strong>

        <br>
        • UI/UX Design<br>
        • App Development<br>
        • API Integration<br>
        • Backend Development<br>
        • Testing<br>
        • Deployment & Support
        `
            },


            seo: {

                name: "SEO Services",

                icon: "🔎",

                keywords: [
                    "seo",
                    "google ranking",
                    "ranking",
                    "search engine",
                    "keyword",
                    "local seo",
                    "technical seo"
                ],

                answer: `
        Our SEO services help businesses improve
        their search visibility and organic traffic.

        <br><br>

        <strong>SEO services:</strong>

        <br>
        • Technical SEO<br>
        • On-Page SEO<br>
        • Off-Page SEO<br>
        • Local SEO<br>
        • Keyword Research<br>
        • Competitor Analysis<br>
        • Content Optimization
        `
            },


            marketing: {

                name: "Digital Marketing",

                icon: "📈",

                keywords: [
                    "digital marketing",
                    "marketing",
                    "social media",
                    "facebook",
                    "instagram",
                    "google ads",
                    "advertising",
                    "lead generation"
                ],

                answer: `
        We provide complete digital marketing
        solutions to help businesses generate
        visibility, leads and customers.

        <br><br>

        <strong>Services include:</strong>

        <br>
        • Social Media Marketing<br>
        • Google Ads<br>
        • SEO<br>
        • Content Marketing<br>
        • Lead Generation<br>
        • Campaign Management
        `
            },


            branding: {

                name: "Graphic Design & Branding",

                icon: "🎨",

                keywords: [
                    "graphic",
                    "graphics",
                    "branding",
                    "logo",
                    "poster",
                    "banner",
                    "creative",
                    "ui ux",
                    "design"
                ],

                answer: `
        We create professional visual identities
        and marketing creatives for businesses.

        <br><br>

        <strong>Design services:</strong>

        <br>
        • Logo Design<br>
        • Brand Identity<br>
        • Social Media Creatives<br>
        • Banner Design<br>
        • Brochure Design<br>
        • UI/UX Design<br>
        • Marketing Materials
        `
            },


            ecommerce: {

                name: "E-Commerce Development",

                icon: "🛒",

                keywords: [
                    "ecommerce",
                    "e-commerce",
                    "online store",
                    "online shop",
                    "shopping website",
                    "woocommerce",
                    "payment gateway"
                ],

                answer: `
        We build responsive and scalable
        e-commerce websites.

        <br><br>

        Features can include:

        <br>
        • Product Management<br>
        • Shopping Cart<br>
        • Online Payment<br>
        • Order Management<br>
        • Customer Management<br>
        • Admin Dashboard<br>
        • Mobile Responsive Design
        `
            },


            crm: {

                name: "CRM & ERP",

                icon: "📊",

                keywords: [
                    "crm",
                    "erp",
                    "customer management",
                    "business management",
                    "enterprise"
                ],

                answer: `
        We develop CRM and ERP systems that
        help businesses manage customers,
        employees, operations and reports.

        <br><br>

        Modules can be customized according
        to your organization.
        `
            },


            hosting: {

                name: "Domain & Hosting",

                icon: "☁️",

                keywords: [
                    "hosting",
                    "domain",
                    "server",
                    "vps",
                    "ssl",
                    "web hosting"
                ],

                answer: `
        We can assist with domain, hosting,
        SSL, server and website deployment
        requirements.
        `
            }

        };


        /* =========================================================
           ELEMENTS
        ========================================================= */

        const openChat =
            document.getElementById("jisOpenChat");

        const chatWindow =
            document.getElementById("jisChatWindow");

        const closeChat =
            document.getElementById("jisClose");

        const minimizeChat =
            document.getElementById("jisMinimize");

        const chatBody =
            document.getElementById("jisChatBody");

        const quickArea =
            document.getElementById("jisQuickArea");

        const input =
            document.getElementById("jisInput");

        const send =
            document.getElementById("jisSend");


        /* =========================================================
           OPEN CHAT
        ========================================================= */

        openChat.addEventListener(
            "click",
            function() {

                chatWindow.classList.add("active");

                if (
                    !chatBody.dataset.started
                ) {

                    startChat();

                }

                setTimeout(
                    () => input.focus(),
                    300
                );

            }
        );


        /* =========================================================
           CLOSE
        ========================================================= */

        function closeChatWindow() {

            chatWindow.classList.remove(
                "active"
            );

        }

        closeChat.addEventListener(
            "click",
            closeChatWindow
        );

        minimizeChat.addEventListener(
            "click",
            closeChatWindow
        );


        /* =========================================================
           ADD MESSAGE
        ========================================================= */

        function addMessage(
            text,
            type = "bot"
        ) {

            const row =
                document.createElement(
                    "div"
                );

            row.className =
                "jis-message " + type;


            const bubble =
                document.createElement(
                    "div"
                );

            bubble.className =
                "jis-bubble";

            bubble.innerHTML =
                text;


            row.appendChild(
                bubble
            );


            chatBody.appendChild(
                row
            );


            scrollChat();

        }


        /* =========================================================
           SCROLL
        ========================================================= */

        function scrollChat() {

            chatBody.scrollTop =
                chatBody.scrollHeight;

        }


        /* =========================================================
           TYPING
        ========================================================= */

        function showTyping() {

            const row =
                document.createElement(
                    "div"
                );

            row.className =
                "jis-message bot";

            row.id =
                "jisTyping";

            row.innerHTML = `

        <div class="jis-bubble jis-typing">

            <span></span>
            <span></span>
            <span></span>

        </div>

    `;


            chatBody.appendChild(
                row
            );


            scrollChat();

        }


        /* =========================================================
           BOT REPLY
        ========================================================= */

        function botReply(
            text,
            delay = 600
        ) {

            showTyping();


            setTimeout(
                function() {

                    const typing =
                        document.getElementById(
                            "jisTyping"
                        );

                    if (typing) {

                        typing.remove();

                    }


                    addMessage(
                        text,
                        "bot"
                    );

                },
                delay
            );

        }


        /* =========================================================
           START CHAT
        ========================================================= */

        function startChat() {

            chatBody.dataset.started =
                "true";


            addMessage(`

        <strong>
        Hi! 👋 Welcome to Jharkhand IT Services.
        </strong>

        <br><br>

        I'm your service assistant.

        You can ask me about:

        <br><br>

        🌐 Website<br>
        📱 Mobile App<br>
        ⚙️ Software<br>
        🔎 SEO<br>
        📈 Digital Marketing<br>
        🎨 Branding<br>
        🛒 E-Commerce<br>
        📊 CRM / ERP

    `);


            setTimeout(
                function() {

                    addMessage(
                        "What would you like to know?"
                    );


                    showQuickButtons();

                },
                500
            );

        }


        /* =========================================================
           QUICK BUTTONS
        ========================================================= */

        function showQuickButtons() {

            quickArea.innerHTML = "";


            const buttons = [

                [
                    "🌐 Website",
                    "I want a website"
                ],

                [
                    "📱 Mobile App",
                    "I need a mobile app"
                ],

                [
                    "⚙️ Software",
                    "I need custom software"
                ],

                [
                    "🔎 SEO",
                    "Tell me about SEO"
                ],

                [
                    "📈 Digital Marketing",
                    "Tell me about digital marketing"
                ],

                [
                    "💰 Pricing",
                    "What is your pricing?"
                ],

                [
                    "📞 Contact",
                    "How can I contact you?"
                ],

                [
                    "📍 Location",
                    "What is your office location?"
                ]

            ];


            buttons.forEach(
                function(item) {

                    const button =
                        document.createElement(
                            "button"
                        );

                    button.className =
                        "jis-quick";

                    button.textContent =
                        item[0];

                    button.onclick =
                        function() {

                            handleUserMessage(
                                item[1]
                            );

                        };


                    quickArea.appendChild(
                        button
                    );

                }
            );

        }


        /* =========================================================
           SERVICE BUTTONS
        ========================================================= */

        function showServices() {

            quickArea.innerHTML = "";


            Object.keys(
                JIS_SERVICES
            ).forEach(
                function(key) {

                    const service =
                        JIS_SERVICES[key];


                    const card =
                        document.createElement(
                            "button"
                        );

                    card.className =
                        "jis-quick";


                    card.textContent =
                        service.icon +
                        " " +
                        service.name;


                    card.onclick =
                        function() {

                            handleUserMessage(
                                service.name
                            );

                        };


                    quickArea.appendChild(
                        card
                    );

                }
            );

        }


        /* =========================================================
           SERVICE RESPONSE
        ========================================================= */

        function serviceResponse(
            service
        ) {

            botReply(`

        <strong>
        ${service.icon}
        ${service.name}
        </strong>

        <br><br>

        ${service.answer}

        <br><br>

        Would you like our team to
        discuss your requirement?

    `);


            setTimeout(
                function() {

                    quickArea.innerHTML = "";

                    addActionButton(
                        "📋 Get a Quote",
                        function() {

                            showLeadForm(
                                service.name
                            );

                        }
                    );


                    addActionButton(
                        "📞 Contact Team",
                        function() {

                            showContact();

                        }
                    );


                    addActionButton(
                        "🔙 All Services",
                        function() {

                            showServices();

                        }
                    );

                },
                900
            );

        }


        /* =========================================================
           ACTION BUTTON
        ========================================================= */

        function addActionButton(
            text,
            action
        ) {

            const button =
                document.createElement(
                    "button"
                );

            button.className =
                "jis-quick";

            button.textContent =
                text;

            button.onclick =
                action;


            quickArea.appendChild(
                button
            );

        }


        /* =========================================================
           FIND SERVICE
        ========================================================= */

        function findService(
            text
        ) {

            const lower =
                text.toLowerCase();


            let best =
                null;


            let score =
                0;


            Object.keys(
                JIS_SERVICES
            ).forEach(
                function(key) {

                    const service =
                        JIS_SERVICES[key];


                    let current =
                        0;


                    service.keywords.forEach(
                        function(keyword) {

                            if (
                                lower.includes(
                                    keyword.toLowerCase()
                                )
                            ) {

                                current +=
                                    keyword.length > 4 ?
                                    3 :
                                    1;

                            }

                        }
                    );


                    if (
                        current > score
                    ) {

                        score =
                            current;

                        best =
                            service;

                    }

                }
            );


            return best;

        }


        /* =========================================================
           CONTACT INFORMATION
        ========================================================= */

        function showContact() {

            addMessage(`

        <strong>
        📞 Contact Jharkhand IT Services
        </strong>

        <br><br>

        <strong>Phone:</strong><br>

        <a
            href="tel:+916209009007">
            +91 6209009007
        </a>

        <br><br>

        <strong>Email:</strong><br>

        <a
            href="mailto:info@jharkhanditservices.com">
            info@jharkhanditservices.com
        </a>

        <br><br>

        <strong>Office:</strong><br>

        3rd Floor, Janki Tower,
        Tagore Hill Road,
        Morabadi, Ranchi,
        Jharkhand-834008.

    `);


            quickArea.innerHTML = "";


            addActionButton(
                "📋 Send Enquiry",
                function() {

                    showLeadForm(
                        "General Enquiry"
                    );

                }
            );


            addActionButton(
                "💬 WhatsApp",
                function() {

                    window.open(
                        "https://wa.me/916209009007",
                        "_blank"
                    );

                }
            );

        }


        /* =========================================================
           LEAD FORM
        ========================================================= */

        function showLeadForm(
            selectedService = "General Enquiry"
        ) {

            quickArea.innerHTML = "";


            const row =
                document.createElement(
                    "div"
                );

            row.className =
                "jis-message bot";


            row.innerHTML = `

        <div
            class="jis-bubble"
            style="
                max-width:95%;
                width:100%;
            "
        >

            <strong>
                📋 Project Enquiry
            </strong>

            <br><br>

            Please share your details
            and our team can contact you.

            <div class="jis-lead-form">

                <form
                    id="jisLeadForm"
                >

                    <div class="jis-field">

                        <label>
                            Name *
                        </label>

                        <input
                            id="jisName"
                            type="text"
                            placeholder="Your full name"
                            required
                        >

                    </div>


                    <div class="jis-field">

                        <label>
                            Mobile Number *
                        </label>

                        <input
                            id="jisMobile"
                            type="tel"
                            placeholder="+91 XXXXX XXXXX"
                            required
                        >

                    </div>


                    <div class="jis-field">

                        <label>
                            Email *
                        </label>

                        <input
                            id="jisEmail"
                            type="email"
                            placeholder="your@email.com"
                            required
                        >

                    </div>


                    <div class="jis-field">

                        <label>
                            Service *
                        </label>

                        <select
                            id="jisService"
                        >

                            <option>
                                ${selectedService}
                            </option>

                            <option>
                                Website Development
                            </option>

                            <option>
                                Mobile App Development
                            </option>

                            <option>
                                Custom Software Development
                            </option>

                            <option>
                                SEO Services
                            </option>

                            <option>
                                Digital Marketing
                            </option>

                            <option>
                                Graphic Design & Branding
                            </option>

                            <option>
                                E-Commerce Development
                            </option>

                            <option>
                                CRM & ERP
                            </option>

                            <option>
                                Domain & Hosting
                            </option>

                            <option>
                                Other
                            </option>

                        </select>

                    </div>


                    <div class="jis-field">

                        <label>
                            Requirement
                        </label>

                        <textarea
                            id="jisRequirement"
                            placeholder="Tell us about your requirement..."
                        ></textarea>

                    </div>


                    <button
                        class="jis-submit"
                        type="submit"
                    >

                        Send Enquiry →

                    </button>

                </form>

            </div>

        </div>

    `;


            chatBody.appendChild(
                row
            );


            scrollChat();


            document
                .getElementById(
                    "jisLeadForm"
                )
                .addEventListener(
                    "submit",
                    function(e) {

                        e.preventDefault();


                        const lead = {

                            name: document
                                .getElementById(
                                    "jisName"
                                )
                                .value
                                .trim(),

                            mobile: document
                                .getElementById(
                                    "jisMobile"
                                )
                                .value
                                .trim(),

                            email: document
                                .getElementById(
                                    "jisEmail"
                                )
                                .value
                                .trim(),

                            service: document
                                .getElementById(
                                    "jisService"
                                )
                                .value,

                            requirement: document
                                .getElementById(
                                    "jisRequirement"
                                )
                                .value
                                .trim(),

                            date: new Date()
                                .toISOString()

                        };


                        /* SAVE LOCALLY */

                        localStorage.setItem(
                            "JIS_LATEST_LEAD",
                            JSON.stringify(
                                lead
                            )
                        );


                        /* WHATSAPP */

                        const whatsappMessage =

                            `New Website Enquiry\n\n` +

                            `Name: ${lead.name}\n` +

                            `Mobile: ${lead.mobile}\n` +

                            `Email: ${lead.email}\n` +

                            `Service: ${lead.service}\n` +

                            `Requirement: ${
                        lead.requirement ||
                        "Not provided"
                    }`;


                        const whatsappURL =

                            "https://wa.me/916209009007?text=" +

                            encodeURIComponent(
                                whatsappMessage
                            );


                        row.innerHTML = `

                    <div
                        class="jis-bubble"
                        style="max-width:95%;"
                    >

                        <div class="jis-success">

                            <strong>
                            Thank you,
                            ${lead.name}! 🎉
                            </strong>

                            <br><br>

                            Your enquiry details
                            have been captured.

                            <br><br>

                            You can send the
                            enquiry directly to
                            our team on WhatsApp.

                            <br><br>

                            <a
                                href="${whatsappURL}"
                                target="_blank"
                                style="
                                    display:inline-block;
                                    background:#159957;
                                    color:#fff;
                                    padding:9px 12px;
                                    border-radius:8px;
                                    text-decoration:none;
                                    font-size:10px;
                                    font-weight:bold;
                                "
                            >

                                💬 Send on WhatsApp

                            </a>

                        </div>

                    </div>

                `;


                        addMessage(
                            "Is there anything else I can help you with?"
                        );


                        showQuickButtons();

                    }
                );

        }


        /* =========================================================
           USER MESSAGE PROCESSOR
        ========================================================= */

        function handleUserMessage(
            text
        ) {

            if (!text) {
                return;
            }


            addMessage(
                text,
                "user"
            );


            input.value = "";


            quickArea.innerHTML = "";


            const lower =
                text.toLowerCase();


            /* GREETING */

            if (
                /^(hi|hello|hey|hii|helo|namaste)\b/
                .test(lower)
            ) {

                botReply(`

            Hello! 👋

            How can I help you today?

        `);


                setTimeout(
                    showQuickButtons,
                    800
                );

                return;

            }


            /* CONTACT */

            if (
                /contact|phone|mobile|call|email|reach/
                .test(lower)
            ) {

                botReply(
                    "Sure! Let me show you our contact information.",
                    350
                );


                setTimeout(
                    showContact,
                    800
                );

                return;

            }


            /* LOCATION */

            if (
                /location|address|office|ranchi|where/
                .test(lower)
            ) {

                botReply(`

            📍 Our office is located at:

            <br><br>

            <strong>
            3rd Floor, Janki Tower,
            Tagore Hill Road,
            Morabadi, Ranchi,
            Jharkhand-834008
            </strong>

            <br><br>

            📞
            <a href="tel:+916209009007">
            +91 6209009007
            </a>

        `);


                setTimeout(
                    showQuickButtons,
                    900
                );

                return;

            }


            /* PRICING */

            if (
                /price|pricing|cost|charge|budget|rate|quotation|quote|kitna|charges/
                .test(lower)
            ) {

                botReply(`

            💰 Our pricing depends on the
            project scope, features,
            technology and timeline.

            <br><br>

            For an accurate quotation,
            please share your requirement
            and contact details.

        `);


                setTimeout(
                    function() {

                        showLeadForm(
                            "Pricing / Quotation"
                        );

                    },
                    900
                );

                return;

            }


            /* ALL SERVICES */

            if (
                /all services|services|what services|what do you do/
                .test(lower)
            ) {

                botReply(
                    "Here are our main services:",
                    400
                );


                setTimeout(
                    showServices,
                    800
                );

                return;

            }


            /* SERVICE */

            const service =
                findService(
                    lower
                );


            if (service) {

                serviceResponse(
                    service
                );

                return;

            }


            /* QUOTE / CONSULTATION */

            if (
                /enquiry|inquiry|consultation|consult|project|requirement|need|want to build/
                .test(lower)
            ) {

                botReply(`

            Absolutely! 🤝

            Please share your project
            details and our team can
            understand your requirement.

        `);


                setTimeout(
                    function() {

                        showLeadForm(
                            "Project Consultation"
                        );

                    },
                    800
                );

                return;

            }


            /* DEFAULT */

            botReply(`

        I can help you with our
        digital services.

        <br><br>

        Try asking:

        <br>

        • Website development<br>
        • Mobile app development<br>
        • Software development<br>
        • SEO service<br>
        • Digital marketing<br>
        • CRM / ERP<br>
        • E-commerce<br>
        • Branding<br>
        • Pricing<br>
        • Contact details

    `);


            setTimeout(
                showQuickButtons,
                900
            );

        }


        /* =========================================================
           SEND MESSAGE
        ========================================================= */

        function sendMessage() {

            const text =
                input.value.trim();


            if (!text) {
                return;
            }


            handleUserMessage(
                text
            );

        }


        send.addEventListener(
            "click",
            sendMessage
        );


        input.addEventListener(
            "keydown",
            function(e) {

                if (
                    e.key === "Enter"
                ) {

                    e.preventDefault();

                    sendMessage();

                }

            }
        );


        /* =========================================================
           ESC CLOSE
        ========================================================= */

        document.addEventListener(
            "keydown",
            function(e) {

                if (
                    e.key === "Escape"
                ) {

                    closeChatWindow();

                }

            }
        );
    </script>

</body>

</html>