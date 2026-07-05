-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2026 at 01:28 AM
-- Server version: 11.4.12-MariaDB-cll-lve-log
-- PHP Version: 8.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibravphe_inoodex`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `body` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `category`, `body`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'How to Protect a Website from Hackers?', 'how-to-protect-a-website-from-hackers', NULL, '<p><p><span style=\"font-size: 14px;\">In today’s digital world, a website is often the face of a business, a community, or a personal brand. Unfortunately, it can also be a target for hackers. Cyberattacks are no longer limited to big companies—small websites and personal blogs are often attacked simply because they are easier to break into. The good news is that protecting a website does not require expert-level knowledge. With the right habits and tools, you can significantly reduce the risk of being hacked.</span></p></p><p><span style=\"color: inherit; font-family: inherit; font-size: 18px;\">1. Keep Everything Updated</span></p><p>One of the most common reasons websites get hacked is outdated software. Content management systems (CMS) like WordPress, along with their themes and plugins, regularly release updates to fix security weaknesses.</p><p>When updates are ignored, hackers can exploit known vulnerabilities. Make it a habit to:</p><p>* Update your CMS as soon as a new version is released</p><p>* Remove unused plugins or themes</p><p>* Only install plugins from trusted sources</p><p>Regular updates act like locking doors that hackers already know how to open.</p><p><span style=\"color: inherit; font-family: inherit; font-size: 18px;\">2. Use Strong Passwords and Authentication</span></p><p>Weak passwords are an open invitation to attackers. Many hacks succeed simply because someone used “123456” or “password” as their login credentials.</p><p>To strengthen access security:</p><p>* Use long, unique passwords with a mix of letters, numbers, and symbols</p><p>* Avoid reusing passwords across multiple accounts</p><p>* Enable two-factor authentication (2FA) whenever possible</p><p>Two-factor authentication adds an extra layer of protection by requiring a second verification step, such as a code sent to your phone.</p><p><span style=\"color: inherit; font-family: inherit; font-size: 18px;\">3. Secure Your Hosting Environment</span></p><p>Your web hosting provider plays a major role in website security. Cheap or unreliable hosting often lacks proper security measures.</p><p>A good hosting provider should offer:</p><p>* Firewall protection</p><p>* Regular malware scanning</p><p>* Automatic backups</p><p>* Secure server configurations</p><p>Choosing quality hosting is like building your house in a safe neighborhood rather than leaving it unguarded.</p><p><span style=\"color: inherit; font-family: inherit; font-size: 18px;\">4. Install an SSL Certificate</span></p><p>An SSL certificate encrypts data exchanged between your website and its visitors. This protects sensitive information like login details and contact forms.</p><p>Websites with SSL use “https” instead of “http,” which also improves trust and search engine rankings. Most modern hosting providers offer free SSL certificates, so there’s no reason not to use one.</p><p><span style=\"color: inherit; font-family: inherit; font-size: 18px;\">5. Limit User Permissions</span></p><p>Not everyone needs full control over your website. Giving too many people admin access increases the risk of mistakes or compromised accounts.</p><p>Follow the principle of least privilege:</p><p>* Give users only the permissions they need</p><p>* Regularly review and remove inactive user accounts</p><p>* Monitor login activity for suspicious behavior</p><p>This reduces damage even if one account is compromised.</p><h4 class=\"\">6. Use a Web Application Firewall (WAF)</h4><p>A web application firewall acts as a shield between your website and incoming traffic. It filters out malicious requests before they can reach your site.</p><p>A WAF can help block:</p><p>* SQL injection attacks</p><p>* Cross-site scripting (XSS)</p><p>* Brute-force login attempts</p><p>Many security plugins and hosting services offer firewall protection that is easy to set up.</p><h4 class=\"\">7. Back Up Your Website Regularly</h4><p>Even with strong security, no website is 100% safe. That’s why backups are essential. If your site is hacked, a recent backup allows you to restore everything quickly.</p><h4 class=\"\">Best practices include:</h4><p>* Automatic daily or weekly backups</p><p>* Storing backups off the main server</p><p>* Testing backups to ensure they work</p><p>Backups turn a disaster into a temporary inconvenience.</p><h4 class=\"\">8. Monitor and Scan for Threats</h4><p>Security is not a one-time task. Regular monitoring helps you catch problems early before they become serious.</p><p>Use security tools to:</p><p>* Scan for malware</p><p>* Track file changes</p><p>* Alert you about suspicious activity</p><p>Early detection can prevent data loss and downtime.</p><p><span style=\"color: inherit; font-family: inherit; font-size: 18px;\">Conclusion</span></p><p>Protecting a website from hackers is about awareness, consistency, and smart choices. Keeping software updated, using strong passwords, securing hosting, and backing up data are simple steps that make a big difference. Cybersecurity may seem complex, but most attacks succeed because of basic oversights. By taking security seriously and staying proactive, you can keep your website safe, reliable, and trustworthy for everyone who visits it.</p><div><br></div>', 'blogs/jZvDNjftecE2zd4wmq6kpvuGNsBrwgv7VnQwrIel.jpg', 'active', '2025-10-14 22:23:54', '2026-01-13 13:45:00'),
(9, 'How Hyper-Personalization Increases Customer Loyalty', 'how-hyper-personalization-increases-customer-loyalty', NULL, '<p>In the rapidly evolving world of digital retail, the \"one-size-fits-all\" approach hasn\'t just become outdated—it’s become a liability. As we move through 2026, the noise in the digital marketplace is louder than ever. To stand out, businesses are shifting from standard personalization to Hyper-Personalization.</p><p><span style=\"font-size: 14px;\">But what exactly is hyper-personalization, and how can it turn a one-time shopper into a lifelong brand advocate? In this guide, we explore why this trend is the heartbeat of future e-commerce success.</span><span style=\"font-size: 14px; color: inherit; font-family: inherit;\"><br></span></p><h3 class=\"\">What is Hyper-Personalization?</h3><p>While traditional personalization might address a customer by their first name in an email, hyper-personalization goes deeper. It uses Artificial Intelligence (AI), machine learning, and real-time data to provide products, services, and content specifically tailored to an individual\'s current context.</p><p><span style=\"font-size: 14px;\">It analyzes:</span></p><ul><li>Real-time browsing behavior</li><li>Geographic location and local weather</li><li>Purchase history and frequency</li><li>Time of day and device usage</li><li>Predictive intent (what they are likely to need next)</li></ul><p><br></p><h3 class=\"\">Why Hyper-Personalization is the Ultimate Loyalty Driver</h3><p>Customer loyalty is no longer just about points and discounts; it’s about relevance. Here is how hyper-personalization builds that bond:</p><p><span style=\"font-size: 14px;\">1. It Eliminates \"Decision Fatigue\"</span></p><p>The modern shopper is overwhelmed by choice. Hyper-personalization acts as a digital concierge, filtering thousands of products to show the user exactly what they are looking for. When a customer finds what they need effortlessly, they associate your brand with convenience.</p><p><span style=\"font-size: 14px;\">2. It Creates an Emotional Connection</span></p><p>When a website \"remembers\" a user\'s preferences—such as their preferred clothing fit or their dietary restrictions—it creates a sense of being understood. This emotional resonance is the foundation of brand loyalty.</p><p><span style=\"font-size: 14px;\">3. Predictive Replenishment</span></p><p>Imagine a customer who buys coffee beans every 30 days. A hyper-personalized system doesn\'t just wait for them to return; it sends a tailored reminder or a one-click reorder notification on day 28. You aren\'t just selling a product; you\'re providing a service that simplifies their life.</p><p><span style=\"font-size: 14px;\">The Technical Pillars: How to Implement It</span></p><p>To achieve this level of sophistication, your e-commerce platform needs a robust technical foundation. This is where the expertise of a digital partner like Inoodex becomes essential.</p><p><span style=\"font-size: 14px;\">Unified Data Platforms (CDP): To personalize, you must break down data silos. Your website, mobile app, and email marketing must share a single \"source of truth\" for every customer.</span></p><p><span style=\"font-size: 14px;\">AI and Machine Learning Algorithms: These engines analyze vast amounts of data in milliseconds to decide which banner or product recommendation to show a specific visitor.</span></p><p><span style=\"font-size: 14px;\">API-First Architecture: Using a \"headless\" e-commerce setup allows you to push personalized content to any device—from a smartphone to a smart fridge—with total consistency.</span></p><h3 class=\"\">SEO Fast-Track: 3 Tips for E-Commerce Owners in 2026</h3><p>If you want your store to rank higher while implementing these strategies, keep these SEO trends in mind:</p><p><span style=\"font-size: 14px;\">AEO (Answer Engine Optimization): As users ask AI bots (like Gemini or ChatGPT) for shopping advice, ensure your product descriptions are written to answer specific \"How-to\" and \"What is the best...\" questions.</span></p><p><span style=\"font-size: 14px;\">Core Web Vitals: Hyper-personalization scripts can sometimes slow down a site. Ensure your IT team optimizes for speed, as Google continues to penalize slow-loading pages.</span></p><p><span style=\"font-size: 14px;\">Zero-Party Data Transparency: With privacy laws tightening, be transparent about the data you collect. Customers are willing to trade their data for a better experience, but only if they trust you.</span></p><p><span style=\"font-size: 14px;\">The Bottom Line: Personalize or Perish</span></p><p>The future of e-commerce is not about selling to masses; it’s about serving the individual. Hyper-personalization is the bridge between a transaction and a relationship. By leveraging AI and real-time data, you don\'t just increase your conversion rate—you build a moat around your brand that competitors can\'t cross.</p><p><span style=\"font-size: 14px;\">Ready to transform your e-commerce experience? At <a href=\"http://www.inoodex.com\" target=\"_blank\">Inoodex</a>, we specialize in building high-performance digital solutions that leverage the latest in AI and data integration. <a href=\"http://www.inoodex.com\" target=\"_blank\">Contact us</a> today to discuss how we can help you implement a hyper-personalization strategy that drives real growth.</span></p>', 'blogs/EHdwbyBCz9G9KW723wqy6n51FZ6X6f52Lm8LGHET.jpg', 'active', '2026-01-13 11:15:27', '2026-01-13 13:48:42'),
(10, 'How to Optimize Your Business for AI Search Engines', 'how-to-optimize-your-business-for-ai-search-engines', NULL, '<p data-path-to-node=\"3\">In 2026, the way people find information has fundamentally changed. The era of scrolling through \"10 blue links\" is being replaced by <b data-path-to-node=\"3\" data-index-in-node=\"134\">Answer Engines</b> and <b data-path-to-node=\"3\" data-index-in-node=\"153\">Generative Overviews</b>. Whether your customers use Google Gemini, Perplexity, or ChatGPT, they are increasingly looking for instant, summarized answers rather than clicking through to multiple websites.</p><p data-path-to-node=\"4\">For your business to remain visible, you must move beyond traditional SEO and embrace <b data-path-to-node=\"4\" data-index-in-node=\"86\">AEO (Answer Engine Optimization)</b> and <b data-path-to-node=\"4\" data-index-in-node=\"123\">GEO (Generative Engine Optimization)</b>.</p><h2 data-path-to-node=\"9\">5 Strategies to Optimize for AI Search Engines</h2><h3 data-path-to-node=\"10\">1. Master Structured Data (Schema Markup)</h3><p data-path-to-node=\"11\">AI models are excellent at reading code even when they struggle with creative prose. By using <b data-path-to-node=\"11\" data-index-in-node=\"94\">Schema Markup</b>, you provide a \"machine-readable\" map of your content.</p><ul data-path-to-node=\"12\"><li><p data-path-to-node=\"12,0,0\"><b data-path-to-node=\"12,0,0\" data-index-in-node=\"0\">FAQ Schema:</b> Directly answers common questions.</p></li><li><p data-path-to-node=\"12,1,0\"><b data-path-to-node=\"12,1,0\" data-index-in-node=\"0\">Organization Schema:</b> Clearly defines who you are and what you do.</p></li><li><p data-path-to-node=\"12,2,0\"><b data-path-to-node=\"12,2,0\" data-index-in-node=\"0\">Product Schema:</b> Feeds AI shopping assistants with real-time price and availability data.</p></li><li><p data-path-to-node=\"12,3,0\"><b data-path-to-node=\"12,3,0\" data-index-in-node=\"0\">HowTo Schema:</b> Breaks down complex processes into steps that AI can summarize easily.</p></li></ul><h3 data-path-to-node=\"13\">2. The \"Direct Answer\" Content Structure</h3><p data-path-to-node=\"14\">AI engines like Google’s \"AI Mode\" prioritize content that is easy to digest. To win the citation, follow the <b data-path-to-node=\"14\" data-index-in-node=\"110\">inverted pyramid</b> style:</p><ul data-path-to-node=\"15\"><li><p data-path-to-node=\"15,0,0\"><b data-path-to-node=\"15,0,0\" data-index-in-node=\"0\">The Header:</b> Use a clear question as your H2 (e.g., <i data-path-to-node=\"15,0,0\" data-index-in-node=\"51\">\"How do I choose an IT partner?\"</i>).</p></li><li><p data-path-to-node=\"15,1,0\"><b data-path-to-node=\"15,1,0\" data-index-in-node=\"0\">The Answer:</b> Provide a concise 40–60 word summary immediately after the header.</p></li><li><p data-path-to-node=\"15,2,0\"><b data-path-to-node=\"15,2,0\" data-index-in-node=\"0\">The Depth:</b> Follow up with the detailed explanation, data points, and nuances below.</p></li></ul><h3 data-path-to-node=\"16\">3. Build Topical Clusters and Depth</h3><p data-path-to-node=\"17\">AI models prefer <b data-path-to-node=\"17\" data-index-in-node=\"17\">Topical Authority</b> over scattered keywords. Instead of writing isolated blog posts, create a content ecosystem. If you are an expert in \"Custom Software,\" you should have a main pillar page linked to dozens of \"cluster\" articles covering everything from AI integration to legacy system migration.</p><h3 data-path-to-node=\"18\">4. Optimize for \"E-E-A-T\" (Experience, Expertise, Authoritativeness, Trustworthiness)</h3><p data-path-to-node=\"19\">AI search engines are increasingly cautious about \"hallucinating.\" They cite sources that prove they are real humans with real experience.</p><ul data-path-to-node=\"20\"><li><p data-path-to-node=\"20,0,0\"><b data-path-to-node=\"20,0,0\" data-index-in-node=\"0\">Include Author Bios:</b> Showcase the credentials of your team.</p></li><li><p data-path-to-node=\"20,1,0\"><b data-path-to-node=\"20,1,0\" data-index-in-node=\"0\">Case Studies:</b> Share real-world results and proprietary data that AI can\'t invent.</p></li><li><p data-path-to-node=\"20,2,0\"><b data-path-to-node=\"20,2,0\" data-index-in-node=\"0\">Digital PR:</b> Unlinked brand mentions on high-authority sites (like news outlets or industry journals) act as trust signals that tell AI you are a leader in your field.</p></li></ul><h3 data-path-to-node=\"21\">5. Multimodal Optimization</h3><p data-path-to-node=\"22\">Search is no longer just text. In 2026, AI engines \"watch\" videos and \"listen\" to podcasts to find answers.</p><ul><li><span style=\"font-size: 14px;\">Transcripts: Always provide full transcripts for your videos and podcasts.</span></li><li>Descriptive Alt-Text: Use detailed descriptions for images so AI image-recognition models can index them.</li><li>Video Chapters: Use YouTube chapters to help AI pinpoint the exact moment a question is answered.</li></ul><div><p data-path-to-node=\"26\">In the AI era, you might see fewer clicks to your website, but the visitors you <i data-path-to-node=\"26\" data-index-in-node=\"80\">do</i> get will be higher intent. When an AI cites <b data-path-to-node=\"26\" data-index-in-node=\"127\">Inoodex</b> as the expert source for a problem, the user who clicks through is already halfway through the sales funnel.</p><p data-path-to-node=\"27\">Optimizing for AI isn\'t about \"gaming the system\"—it’s about being the most helpful, clear, and authoritative voice in your industry.</p></div>', 'blogs/Z1arAm6VWDP1TfNYGiVYifKBTnOs95sTU9B2ZFO4.webp', 'active', '2026-01-13 13:43:51', '2026-01-13 13:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@admin.com|37.77.150.123', 'i:3;', 1772172255),
('admin@admin.com|37.77.150.123:timer', 'i:1772172255;', 1772172255),
('admin@example.com|103.174.189.241', 'i:2;', 1775139157),
('admin@example.com|103.174.189.241:timer', 'i:1775139157;', 1775139157),
('admin@example.com|103.88.140.177', 'i:1;', 1774957504),
('admin@example.com|103.88.140.177:timer', 'i:1774957504;', 1774957504),
('admin@example.com|103.88.140.183', 'i:1;', 1774714657),
('admin@example.com|103.88.140.183:timer', 'i:1774714657;', 1774714657),
('admin@gmail.com|103.154.159.166', 'i:1;', 1773573248),
('admin@gmail.com|103.154.159.166:timer', 'i:1773573248;', 1773573248),
('admin@gmail.com|103.154.159.167', 'i:2;', 1774204441),
('admin@gmail.com|103.154.159.167:timer', 'i:1774204441;', 1774204441),
('admin@gmail.com|103.174.189.241', 'i:2;', 1771822590),
('admin@gmail.com|103.174.189.241:timer', 'i:1771822590;', 1771822590),
('admin@gmail.com|103.198.132.209', 'i:1;', 1774546123),
('admin@gmail.com|103.198.132.209:timer', 'i:1774546123;', 1774546123),
('admin@gmail.com|103.88.140.183', 'i:3;', 1774714598),
('admin@gmail.com|103.88.140.183:timer', 'i:1774714598;', 1774714598),
('admin@gmail.com|180.149.234.21', 'i:3;', 1774633185),
('admin@gmail.com|180.149.234.21:timer', 'i:1774633185;', 1774633185),
('admin@inoodex.com|37.77.150.123', 'i:1;', 1770702473),
('admin@inoodex.com|37.77.150.123:timer', 'i:1770702473;', 1770702473),
('admin@inoodex.com|37.77.150.124', 'i:1;', 1777196370),
('admin@inoodex.com|37.77.150.124:timer', 'i:1777196370;', 1777196370),
('hello@inoodex.com|103.154.159.166', 'i:3;', 1773573209),
('hello@inoodex.com|103.154.159.166:timer', 'i:1773573209;', 1773573209),
('hello@inoodex.com|103.88.140.182', 'i:1;', 1774754465),
('hello@inoodex.com|103.88.140.182:timer', 'i:1774754465;', 1774754465),
('hello@inoodex.com|103.88.140.183', 'i:1;', 1774714679),
('hello@inoodex.com|103.88.140.183:timer', 'i:1774714679;', 1774714679),
('jqadmin@admin.com|37.77.150.123', 'i:3;', 1772172246),
('jqadmin@admin.com|37.77.150.123:timer', 'i:1772172246;', 1772172246),
('jqadmin@inoodex.com|37.77.150.123', 'i:1;', 1770702466),
('jqadmin@inoodex.com|37.77.150.123:timer', 'i:1770702466;', 1770702466),
('jqadmin@inoodex.com|37.77.150.124', 'i:1;', 1777196364),
('jqadmin@inoodex.com|37.77.150.124:timer', 'i:1777196364;', 1777196364);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Software', 'software', NULL, NULL, '2025-09-29 06:46:32', '2025-11-16 22:01:05'),
(2, 'Hospitals', 'hospitals', NULL, NULL, '2025-09-29 22:33:35', '2025-09-29 22:33:35'),
(5, 'Corporate', 'corporate', NULL, NULL, '2025-11-16 21:59:54', '2025-11-16 21:59:54'),
(6, 'Blog', 'blog', NULL, NULL, '2025-11-16 22:00:08', '2025-11-16 22:00:08'),
(7, 'E-commerce', 'e-commerce', NULL, NULL, '2025-11-16 22:00:33', '2025-11-16 22:00:33'),
(9, 'Education', 'education', '<p>Education</p>', NULL, '2025-12-31 20:09:06', '2025-12-31 20:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(2, '<p>House: E1, Road: 16, Pallabi(2nd Phase), Dhaka-1216</p>', 'hello@inoodex.com', '+880 1531 385988', '2026-03-22 22:40:46', '2026-03-31 15:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'Hasan', 'hasan@inoodex.com', '01234567890', 'Test', 'Testing', 1, '2025-11-02 01:50:06', '2025-11-02 04:21:25'),
(5, 'Mike Matias Johnson', 'mike@monkeydigital.co', '87652252895', 'Monkey Digital - SEO for AI discovery platforms', 'Hi, \r\n \r\nSearch is changing faster than most businesses realize. \r\n \r\nMore buyers are now discovering products and services through AI-driven platforms — not only traditional search results. This is why we created the AI Rankings SEO Plan at Monkey Digital. \r\n \r\nIt’s designed to help websites become clear, trusted, and discoverable by AI systems that increasingly influence how people find and choose businesses. \r\n \r\nYou can view the plan here: \r\nhttps://www.monkeydigital.co/ai-rankings/ \r\n \r\nIf you’d like to see whether this approach makes sense for your site, feel free to reach out directly — even a quick question is fine. Whatsapp: https://wa.link/b87jor \r\n \r\n \r\n \r\nBest regards, \r\nMike Matias Johnson\r\n \r\nMonkey Digital \r\nmike@monkeydigital.co \r\nPhone/Whatsapp: +1 (775) 314-7914', 1, '2025-12-31 01:41:42', '2026-02-23 10:06:41'),
(6, 'Oliver', 'sales@inoodex.com', '3984136982', 'Oliver Stallworth', 'Hi, \r\n\r\nI hope this email finds you well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nThe bags are waterproof and anti-theft, and have a built-in USB cable that can recharge your phone while you\'re on the go.\r\n\r\nBoth bags are made of durable and high-quality materials, and are perfect for everyday use or travel.\r\n\r\nOrder yours now at 50% OFF with FREE Shipping: http://bangeshop.com\r\n\r\nBest,\r\n\r\nOliver', 0, '2025-12-31 05:36:32', '2025-12-31 05:36:32'),
(7, 'SimonIners', 'dinanikolskaya99@gmail.com', '83625917726', 'Hallo, i write about your   prices', 'Ciao, volevo sapere il tuo prezzo.', 1, '2025-12-31 13:21:24', '2026-02-23 10:05:57'),
(8, 'Ameliabon4581', 'ameliaDaype77131@yahoo.com', '82713346131', '\"Desperate for intimacy now!\"', '\"Sensual vixen longs for tantalizing ecstasy.\"  Here  -- https://Kj3fz2f.short.gy/ueeSek?Scona', 0, '2025-12-31 19:54:57', '2025-12-31 19:54:57'),
(9, 'Samuel Everett', 'samuel.everett@jmailservice.com', '8054002077', 'Quick Online Exposure for Your Business', 'We can position your brand above competitors within 24 hours - no waiting, no complicated setup.\r\nWould you like to see a sample?', 0, '2026-01-02 00:53:33', '2026-01-02 00:53:33'),
(10, 'LeeIners', 'zekisuquc419@gmail.com', '86146917867', 'Aloha  i writing about     price', 'Ndewo, achọrọ m ịmara ọnụahịa gị.', 0, '2026-01-02 05:11:20', '2026-01-02 05:11:20'),
(11, 'Hannah Melotto', 'hannah@punave.com', '(401) 366-2156', 'Inquiry', 'Happy New Year! Have you tried Punave yet? It’s our AI sales assistant built for unlimited lead generation, real-time company enrichment, email verification, and full API access — everything you expect from tools like ZoomInfo or Apollo, but faster and simpler. Try Punave before Jan 15 and unlock a full 1-year free trial with unlimited leads for all of 2026. Please give it a try and see how it works for your team. https://go.punave.com/2026', 0, '2026-01-03 13:09:08', '2026-01-03 13:09:08'),
(12, 'cvhsCEnqzkKawbKtq', 'hisezukodine83@gmail.com', '5571218004', 'oQNKSmJsLJSIJZPImSzI', 'rDrqBNeRsbsZJGrZtQz', 0, '2026-01-03 21:55:43', '2026-01-03 21:55:43'),
(13, 'Hannah Melotto', 'melotto@turbojot.com', '(215) 821-8810', 'Inquiry', 'Hey! We help teams streamline outreach with TurboJot, our AI-powered tool that automates form submissions using personalized, natural messaging. To make it easy to try, we’re offering 5,000 free submissions as we head into 2026. You can book a time on my calendar here: https://calendly.com/melottogroup/30min', 0, '2026-01-04 00:38:17', '2026-01-04 00:38:17'),
(14, 'LeeIners', 'zekisuquc419@gmail.com', '81875661143', 'Hi  i am write about your   prices', 'Hi, I wanted to know your price.', 1, '2026-01-04 04:36:06', '2026-03-31 15:47:14'),
(15, 'Mike Walther Svensson', 'info@strictlydigital.net', '85478781488', 'Semrush links for inoodex.com', 'Hello, \r\n \r\nGetting some bunch of links redirecting to inoodex.com may result in 0 value or negative impact for your website. \r\n \r\nIt really makes no difference the number of backlinks you have, what is crucial is the amount of search terms those domains are optimized for. \r\n \r\nThat is the key thing. \r\nNot the meaningless third-party metrics or Domain Rating. \r\nThat anyone can do these days. \r\nBUT the number of Google-ranked terms the websites that link to you rank for. \r\nThat’s it. \r\n \r\nMake sure these backlinks link to your domain and you will ROCK! \r\n \r\nWe are offering this exclusive service here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nHave questions, or want clarification, chat with us here: \r\nhttps://www.strictlydigital.net/whatsapp-us/ \r\n \r\nKind regards, \r\nMike Walther Svensson\r\n \r\nstrictlydigital.net \r\nPhone/WhatsApp: +1 (877) 566-3738', 0, '2026-01-04 08:22:51', '2026-01-04 08:22:51'),
(16, 'Emmabon4107', 'ameliaDaype445195@hotmail.com', '89836737813', '\"Sexy vixen seeks thrill!\"', '\"Enchanting nymphomaniac seeks steamy indulgence.\"  Here  --  https://Kj3fz2f.short.gy/ueeSek?Scona', 0, '2026-01-05 06:18:02', '2026-01-05 06:18:02'),
(17, 'GeorgeIners', 'dinanikolskaya99@gmail.com', '89967633742', 'Hi, i am wrote about     price', 'Ndewo, achọrọ m ịmara ọnụahịa gị.', 0, '2026-01-05 09:02:01', '2026-01-05 09:02:01'),
(18, 'Hannah Melotto', 'h.melotto@melottogroup.com', '(215) 821-8810', 'Inquiry', 'I’m a freelance content writer with 10+ years of experience helping businesses grow through clear, engaging content. I’m currently available for new projects and would love to support your team if you’re hiring or need writing assistance. Looking forward to connecting!', 0, '2026-01-06 15:37:38', '2026-01-06 15:37:38'),
(19, 'Roxanna Stonehaven', 'roxanna.stonehaven@gmail.com', '2189689757', 'need assistance', 'Ever stop to think how much you\'re spending on marked-up CPMs for Connected TV ads?\r\nIf you\'re using “premium” audience segments without verifying who you\'re actually reaching, that money is likely feeding someone else\'s family.\r\nNo pressure. Here’s the site if you\'re open to see a revolutionary vision for digital advertising\r\ntopshelfaudience.com using real-time Intent data from an Integration in our platform to Lotame.com. You can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', 0, '2026-01-07 00:32:00', '2026-01-07 00:32:00'),
(20, 'LeeIners', 'zekisuquc419@gmail.com', '86379946292', 'Hallo    wrote about   the prices', 'Sawubona, bengifuna ukwazi intengo yakho.', 0, '2026-01-07 03:54:52', '2026-01-07 03:54:52'),
(21, 'Laura', 'sales@inoodex.com', '6764115385', 'Laura Muhammad', 'Hello there \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF: https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nBest regards, \r\n\r\nLaura', 0, '2026-01-07 05:07:45', '2026-01-07 05:07:45'),
(22, 'Hermine Wymer', 'wymer.hermine@yahoo.com', '733797108', 'Get a Cheap Web, VPS, Dedicated Hosting...?', 'Best and affordable hosting service at https://myskyhost.com\r\n\r\n  _Our 50% off lifetime just $1/month for Web Site hosting. Use code: 50%wb\r\n  _Our 10% off lifetime for VPS hosting. Use code: vps10%off\r\n  _Our budget dedicated starting from $15/month', 0, '2026-01-07 15:28:54', '2026-01-07 15:28:54'),
(23, 'Ameliabon8056', 'emmaDaype214111@gmail.com', '86184318138', '\"Wild girl craves passion!\"', '\"Carnal temptress demands irresistible passion.\"  Here  -- https://Kj3fz2f.short.gy/ueeSek?Scona', 0, '2026-01-08 15:15:09', '2026-01-08 15:15:09'),
(24, 'Mike Keill Wagner', 'info@speed-seo.net', '86776166166', 'Find inoodex.com SEO Issues totally free', 'Hi, \r\nWorried about hidden SEO issues on your website? Let us help — completely free. \r\nRun a 100% free SEO check and discover the exact problems holding your site back from ranking higher on Google. \r\n \r\nRun Your Free SEO Check Now \r\nhttps://www.speed-seo.net/check-site-seo-score/ \r\n \r\nOr chat with us and our agent will run the report for you: https://www.speed-seo.net/whatsapp-with-us/ \r\n \r\nBest regards, \r\n \r\n \r\nMike Keill Wagner\r\n \r\nSpeed SEO Digital \r\nEmail: info@speed-seo.net \r\nPhone/WhatsApp: +1 (833) 454-8622', 0, '2026-01-09 20:36:11', '2026-01-09 20:36:11'),
(25, 'BxrNCzyFoOazPOkH', 's.iqe.b.ap.oj.u.g.e4.6@gmail.com', '8279977188', 'opjpyMxrNZwQanZXvaFPu', 'hHFnRUGzPwJlTItNgT', 0, '2026-01-10 16:23:22', '2026-01-10 16:23:22'),
(26, 'BoveEledo', 'qt9336h1@yahoo.com', '86231427338', 'I promised.', 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/yc6z2v2a', 0, '2026-01-11 09:01:46', '2026-01-11 09:01:46'),
(27, 'RobertIners', 'zekisuquc419@gmail.com', '84211871798', 'Hello    writing about your the price for reseller', 'Hæ, ég vildi vita verð þitt.', 0, '2026-01-11 14:36:36', '2026-01-11 14:36:36'),
(28, 'Emmabon2283', 'isabellaDaype575255@yahoo.com', '87685615989', '\"Come and awaken my deepest desires.\"', '\"I\'m feeling so frisky tonight. Join me for a steamy adventure?\"   -  https://Fun123.short.gy/OvDYjS?Scona', 0, '2026-01-12 03:47:44', '2026-01-12 03:47:44'),
(29, 'SimonIners', 'zekisuquc419@gmail.com', '86238665184', 'Hi,   wrote about     price for reseller', 'Hej, jeg ønskede at kende din pris.', 0, '2026-01-12 08:39:17', '2026-01-12 08:39:17'),
(30, 'Ruben', 'ruben@inoodex.com', '98775708', 'Ruben Tran', 'Tired of spending hours on your hair? Get professional results in minutes with Airluxe™.\r\n\r\nOur best-selling high-speed dryers and 4-in-1 stylers are now on sale! Shop our sitewide discount and upgrade your routine today.\r\n\r\nStart your transformation now: https://clarimart.com\r\n\r\nDesigned for all hair types and busy lifestyles.', 0, '2026-01-13 02:04:24', '2026-01-13 02:04:24'),
(31, 'LeeIners', 'zekisuquc419@gmail.com', '83414166917', 'Hallo    wrote about your the prices', 'Прывітанне, я хацеў даведацца Ваш прайс.', 0, '2026-01-13 03:26:49', '2026-01-13 03:26:49'),
(32, 'BoveEledo', '9j8gxfdo@gmail.com', '83461233412', 'I promised.', 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/4fvusyud', 0, '2026-01-13 05:18:16', '2026-01-13 05:18:16'),
(33, 'Cathy Steinman', 'steinman.cathy69@gmail.com', NULL, 'Request for information', 'Save Thousands on Real Estate Sales — FSBO Advertising with 4u2 Inc.\r\nDear C.E.O. and Valued Staff,\r\nWarm New Year greetings.\r\n4u2 Inc. is a locally based, globally accessible For Sale by Owner (FSBO) real estate advertising platform (Government of Alberta Corporate Access Number: 2024873339). We help property owners market and sell their homes privately—without agents, without commissions, and with the potential to save thousands of U.S. dollars.\r\nIf you or someone you know is considering selling a property, we invite you to visit www.4u2incfsbo.com. After reviewing the information, simply email info@4u2incfsbo.com to begin.\r\nOur Price Guarantee:\r\n4u2 Inc. will match the lowest price offered by any competing FSBO platform—and then beat it with an additional 12% discount for the same level of service. If you can find a lower price, we will do better. Guaranteed.\r\nIf you prefer to work with a licensed professional, we can also connect you with a fully licensed, bonded, and insured Real Estate Agent in your area who can meet your specific needs.\r\n\r\nNow Hiring: English-Speaking Commissioned Account Executives\r\nPositions available immediately.\r\nResume/CV required.\r\nApply at info@4u2incfsbo.com', 0, '2026-01-13 06:52:22', '2026-01-13 06:52:22'),
(34, 'BoveEledo', 'fobv1in6@icloud.com', '82332749711', 'I promised.', 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/4xtjdes9', 0, '2026-01-13 08:05:15', '2026-01-13 08:05:15'),
(35, 'Isabellabon1967', 'avaDaype667411@hotmail.com', '83848463486', '\"Carpe Noctem вЂ“ Seize the Night\"', 'We should definitely try something new   - https://girlsfun.short.gy/Ju0Xdq?Scona', 0, '2026-01-14 04:22:03', '2026-01-14 04:22:03'),
(36, 'Markus Askins', 'askins.markus@gmail.com', '9178661747', '[85% SAVINGS] inoodex.com Daily Seo Backlinks + Website Clicks To Grow Your Website Every Day', 'Upgrade inoodex.com rankings, increase your online exposure and grow powerful backlinks! \r\nBonusBacklinks.com - we provide daily backlinks and bring website visits to your page EVERY DAY:\r\n\r\n+ Take 85% OFF\r\n+ Trusted daily backlinks\r\n+ Organic web traffic\r\n+ Price cheap as $1\r\n+ Bonus coupon codes:\r\n\r\nhttps://BonusBacklinks.com/85Bonus\r\n\r\nBonusBacklinks.com - daily seo backlinks and website visits to skyrocket your website everyday', 0, '2026-01-14 16:17:35', '2026-01-14 16:17:35'),
(37, 'BoveEledo', 'aw8naxh8@icloud.com', '81921873356', 'I promised.', 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/4weawc74', 0, '2026-01-15 00:18:46', '2026-01-15 00:18:46'),
(38, 'BoveEledo', 'tmlrog5x@hotmail.com', '88264784889', 'I promised.', 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/yfafmjfh', 0, '2026-01-16 12:32:56', '2026-01-16 12:32:56'),
(39, 'Mike Christopher Evans', 'info@professionalseocleanup.com', '89116516155', 'Fix August Google Spam update ranking problems for free', 'Hi, \r\nWhile reviewing inoodex.com, we spotted toxic backlinks that could put your site at risk of a Google penalty. Especially that this Google SPAM update had a high impact in ranks. This is an easy and quick fix for you. Totally free of charge. No obligations. \r\n \r\nFix it now: \r\nhttps://www.professionalseocleanup.com/ \r\n \r\nNeed help or questions? Chat here: \r\nhttps://www.professionalseocleanup.com/whatsapp/ \r\n \r\nBest, \r\nMike Christopher Evans\r\n \r\n+1 (855) 221-7591 \r\ninfo@professionalseocleanup.com', 0, '2026-01-17 00:38:27', '2026-01-17 00:38:27'),
(40, 'Oliviabon6441', 'emmaDaype3661@yahoo.com', '83219834886', '\"Passion\'s Hungry Mauling\"', 'What are we waiting for? Let\'s get started   -    2fsa23.short.gy/WPsjv3?bon', 0, '2026-01-17 17:37:23', '2026-01-17 17:37:23'),
(41, 'RobertIners', 'zekisuquc419@gmail.com', '81465893161', 'Hi, i wrote about   the prices', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', 0, '2026-01-20 07:41:52', '2026-01-20 07:41:52'),
(42, 'Seymour Tiegs', 'tiegs.seymour@googlemail.com', '316244758', 'Small update', 'Happy New Year!\r\nIf you or someone you know is thinking about selling a property, 4u2 Inc. can help you save thousands by selling privately—no agents, no commissions. We’re a local Alberta‑registered FSBO advertising platform (Corporate Access #2024873339).\r\nCheck out www.4u2incfsbo.com and email info@4u2incfsbo.com to get started.\r\nWe also offer a 12% price‑beat guarantee on any competing FSBO platform.\r\nPlus, we’re hiring English‑speaking commissioned Account Executives. Send your resume to info@4u2incfsbo.com.', 0, '2026-01-20 14:57:18', '2026-01-20 14:57:18'),
(43, 'Ameliabon5429', 'emmaDaype416713@hotmail.com', '87216432917', '\"Intimate Pleasures Unveiled\"', 'Meet me for a passionate interlude   -    2fsa23.short.gy/WPsjv3?bon', 0, '2026-01-21 07:10:14', '2026-01-21 07:10:14'),
(44, 'Stephenitelp', 'jacksrenome@gmx.com', '89763578188', 'Derefhefjwdkifhgijfkwoddjeifj jiwdokdiwfheijfwjdiw jidjwksaodjegfijwokdaijdfe', 'Vertyowdiwjodko kofkosfjwgojfsjf oijwfwsfjowehgewjiofwj jewfkwkfdoeguhrfkadwknfew ijedkaoaswnfeugjfkadcajsfn inoodex.com', 0, '2026-01-22 20:18:28', '2026-01-22 20:18:28'),
(45, 'David Turner', 'david.turner@jmailservice.com', '8054002077', 'Top of Google - Without the Hassle', 'We make it easy to capture customers at the exact moment they\'re searching online. Our system places your brand at the top of search results within a single day, and all clicks lead directly to your website.\r\nYou can track everything yourself inside Google Analytics.\r\nWould you like a short overview of how it works?', 0, '2026-01-23 04:08:04', '2026-01-23 04:08:04'),
(46, 'GeorgeIners', 'zekisuquc419@gmail.com', '87144997962', 'Hallo  i am wrote about   the price for reseller', 'Γεια σου, ήθελα να μάθω την τιμή σας.', 0, '2026-01-23 07:17:22', '2026-01-23 07:17:22'),
(47, 'Mike Gerard Taylor', 'mike@monkeydigital.co', '88688137615', 'Grow Your Website Traffic with Country-Specific Social Ads – Only $10 for 10K Visits!', 'Hello, \r\n \r\nI wanted to connect with something that could seriously improve your website’s visitor count. We work with a trusted ad network that allows us to deliver genuine, country-targeted social ads traffic for just $10 per 10,000 visits. \r\n \r\nThis isn\'t junk clicks—it’s real visitors, tailored to your target country and niche. \r\n \r\nWhat you get: \r\n \r\n10,000+ real visitors for just $10 \r\nGeo-targeted traffic for your chosen location \r\nLarger traffic packages available based on your needs \r\nProven to work—we even use this for our SEO clients! \r\n \r\nInterested? Check out the details here: \r\nhttps://www.monkeydigital.co/product/country-targeted-traffic/ \r\n \r\nOr connect instantly on WhatsApp: \r\nhttps://monkeydigital.co/whatsapp-us/ \r\n \r\nLet\'s get started today! \r\n \r\nBest, \r\nMike Gerard Taylor\r\n \r\nPhone/whatsapp: +1 (775) 314-7914', 0, '2026-01-23 15:19:53', '2026-01-23 15:19:53'),
(48, 'eDkYpukMFNWoYHHsNg', 'xu.qe.vo.l.i8.1@gmail.com', '4322022118', 'WNGjmaYHpamSYUwHhkT', 'blqJcyjfhchdtuXwBAFOcY', 0, '2026-01-24 06:45:43', '2026-01-24 06:45:43'),
(49, 'Saraharict', 'bsara5865@gmail.com', '84349227368', 'Backing Informative Websites', 'Warm greetings! Hope you\'re doing well. \r\n \r\nDear Site Owner, I provide non-repayable grants to support web projects. Your website shows potential. Would you like to discuss financial backing? Please contact me on WhatsApp +380938820856', 0, '2026-01-24 07:36:32', '2026-01-24 07:36:32'),
(50, 'Saraharict', 'bsara5865@gmail.com', '89318399931', 'Grant for Website Expansion and Development', 'Good day! Hope this message finds you well. \r\n \r\nHello, I offer financial grants to quality web projects. Your site has potential. Interested in discussing backing opportunities? Please contact me on WhatsApp +380990640376', 0, '2026-01-24 10:26:57', '2026-01-24 10:26:57'),
(51, 'Charolette', 'sales@inoodex.com', '104065727', 'Charolette Macredie', 'Hello, \r\n\r\nJust a quick heads-up — we’re running a short promotion on our EliteNook™ Premium Executive Office Chair right now.\r\n\r\nFree 2-5 day Fast Delivery: https://luxcollection.it.com\r\n\r\nThis chair is built for all-day comfort with ergonomic support, premium leather feel, and smooth swivel wheels — perfect for home or office work.\r\n\r\nWe’re offering a limited-time discount, so it’s worth a quick look.\r\n\r\nRegards,\r\n\r\nEliteNook™ Team', 0, '2026-01-24 14:23:48', '2026-01-24 14:23:48'),
(52, 'Mike Lars-Erik Schulz', 'info@digital-x-press.com', '87148139838', 'Add AEO to your SEO strategies today !', 'Hi, \r\nI recognize that some companies find it challenging understanding that Answer Engine Optimization (AEO) is a long-term game and a carefully organized regular commitment. \r\n \r\nUnfortunately, very few marketers have the dedication to observe the progressive yet significant results that can completely boost their search performance. \r\n \r\nWith constant algorithm changes, a reliable, long-term strategy including Answer Engine Optimization (AEO) is critical for achieving a positive ROI. \r\n \r\nIf you agree this as the ideal strategy, partner with us! \r\n \r\nDiscover Our Monthly SEO Services https://www.digital-x-press.com/unbeatable-seo/ \r\n \r\nChat With Us on Instant Messaging https://www.digital-x-press.com/whatsapp-us/ \r\n \r\nWe provide unbeatable results for your resources, and you will enjoy choosing us as your digital marketing ally. \r\n \r\nBest regards, \r\nDigital X SEO Experts \r\nPhone/WhatsApp: +1 (844) 754-1148', 0, '2026-01-25 01:36:25', '2026-01-25 01:36:25'),
(53, 'Emmabon2561', 'emmaDaype918014@yahoo.com', '89524893161', '\"Sensual Seduction Beckons\"', 'Come over and letвЂ™s create some heat   -   https://nMm5id.short.gy/Osi49c?Scona', 0, '2026-01-25 09:24:08', '2026-01-25 09:24:08'),
(54, 'Mike Sem Richard', 'mike@monkeydigital.co', '83852734639', 'Monkey Digital - visibility for AI search & discovery platforms', 'Hi, \r\n \r\nSearch is changing faster than most businesses realize. \r\n \r\nMore buyers are now discovering products and services through AI-driven platforms — not only traditional search results. This is why we created the AI Rankings SEO Plan at Monkey Digital. \r\n \r\nIt’s designed to help websites become clear, trusted, and discoverable by AI systems that increasingly influence how people find and choose businesses. \r\n \r\nYou can view the plan here: \r\nhttps://www.monkeydigital.co/ai-rankings/ \r\n \r\nIf you’d like to see whether this approach makes sense for your site, feel free to reach out directly — even a quick question is fine. Whatsapp: https://wa.link/b87jor \r\n \r\n \r\n \r\nBest regards, \r\nMike Sem Richard\r\n \r\nMonkey Digital \r\nmike@monkeydigital.co \r\nPhone/Whatsapp: +1 (775) 314-7914', 0, '2026-01-27 21:24:20', '2026-01-27 21:24:20'),
(55, 'Tyrone', 'sales@inoodex.com', '92341651', 'Worth a quick look', 'Hello,\r\n\r\nJust sharing something you might find useful.\r\n\r\nWe’re offering a special price for our FitRx™ Wireless Muscle Massager.\r\n\r\nhttps://easerelief.net\r\n\r\nIt’s fully wireless with smart control and works great for muscle relief, recovery, and relaxation.\r\n\r\nThis offer is only available for a short time, so now’s a great time to check it out.\r\n\r\nBest,\r\nTeam FitRx™', 0, '2026-01-28 14:27:28', '2026-01-28 14:27:28'),
(56, 'Ella Gatty', 'ella.gatty@gmail.com', '318482647', 'Mind if I ask something?', 'Your Business Is Losing Customers You Never Even Knew About A single negative review can push customers to your competitors. I use a tool called MaxReviewFlow that automates the whole process and filters out negative feedback before it goes public. It’s simple and makes a huge difference. Build your reputation on autopilot at MaxReviewFlow.com', 0, '2026-01-29 18:16:53', '2026-01-29 18:16:53'),
(57, 'Saraharict', 'bsara5865@gmail.com', '86943969565', 'Supporting Niche Websites and Blogs', 'Hi there! Wishing you a great day ahead. \r\n \r\nHello, I\'m writing to selected site administrators about grant opportunities. Your platform shows potential for growth. Open to discussion? Please contact me on WhatsApp +79964497753', 0, '2026-01-29 21:17:19', '2026-01-29 21:17:19'),
(58, 'Emmabon4210', 'emmaDaype325992@yahoo.com', '84984174338', 'Feeling dangerous tonight', 'Let\'s get intimate right now, I\'m live and waiting for you.   -  Go23c12.short.gy/fghQba?bon', 0, '2026-01-29 23:07:42', '2026-01-29 23:07:42'),
(59, 'Mike Matias Bernard', 'info@strictlydigital.net', '84358454425', 'Semrush links for inoodex.com', 'Hi there, \r\n \r\nHaving some bunch of links linking to inoodex.com could have no value or worse for your website. \r\n \r\nIt really doesn’t matter how many external links you have, what matters is the total of search terms those domains rank for. \r\n \r\nThat is the critical element. \r\nNot the fake Domain Authority or ahrefs DR score. \r\nThat anyone can do these days. \r\nBUT the amount of Google-ranked terms the sites that point to your site contain. \r\nThat’s it. \r\n \r\nGet these quality links link to your domain and your rankings will skyrocket! \r\n \r\nWe are offering this special service here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nIn doubt, or need more information, chat with us here: \r\nhttps://www.strictlydigital.net/whatsapp-us/ \r\n \r\nSincerely, \r\nMike Matias Bernard\r\n \r\nstrictlydigital.net \r\nPhone/WhatsApp: +1 (877) 566-3738', 0, '2026-01-31 20:54:31', '2026-01-31 20:54:31'),
(60, 'Michael Williams', 'michaelswills2022@gmail.com', '82676551471', 'Re: Explore Funding Opportunities', 'Greetings, Mr./Ms., \r\n \r\nI’m Michael Williams from an investment consultancy. We connect clients globally with low interest loans to help achieve your goals. Whether for personal, business or project funding, we collaborate with reputable investors to turn your proposals into reality. Share your business plan and executive summary with us at: michael.williams@lotusfinconsults.com to explore funding options. \r\n \r\nSincerely, Michael Williams \r\nSenior Financial Consultant \r\nhttp://www.lotusfinanceconsults.com/', 0, '2026-02-02 06:13:55', '2026-02-02 06:13:55'),
(61, 'Ameliabon9242', 'avaDaype505367@gmail.com', '87712394918', 'Feeling very naughty today', 'IвЂ™m wearing my favorite lingerie, want to see it on the floor?   -  https://telegra.ph/Enter-01-31?Scona', 0, '2026-02-03 08:13:49', '2026-02-03 08:13:49'),
(62, 'Cecila Drennen', 'cecila.drennen@gmail.com', '745786976', 'Hello inoodex.com Administrator!', 'Hi,\r\n\r\nI am a senior web developer, highly skilled and with 10+ years of collective web design and development experience, I work in one of the best web development company.\r\n\r\nMy hourly rate is $8\r\n\r\nMy expertise includes:\r\n\r\nWebsite design - custom mockups and template designs\r\nWebsite design and development - theme development, backend customisation\r\nResponsive website - on all screen sizes and devices\r\nPlugins and Extensions Development\r\nWebsite speed optimisation and SEO on-page optimisation\r\nWebsite security\r\nWebsite migration, support and maintenance\r\nIf you have a question or requirement to discuss, I would love to help and further discuss it. Please email me at e.solus@gmail.com\r\n\r\nRegards,\r\nSachin\r\ne.solus@gmail.com', 0, '2026-02-03 19:47:29', '2026-02-03 19:47:29'),
(63, 'Souvik Das', 'souvikdas1415@gmail.com', '01627670533', 'React developer internship', 'Dear Hiring Manager,\r\n\r\nI am writing to apply for the React Developer Internship position. I am a frontend web developer with hands-on experience in React.js,   TypeScript ,  Next.js , JavaScript, HTML, CSS, Tailwind, and Bootstrap.\r\n\r\nThank you for your time and consideration.\r\n\r\nBest regards,\r\nSouvik Das', 0, '2026-02-04 19:29:04', '2026-02-04 19:29:04'),
(64, 'Saraharict', 'bsara5865@gmail.com', '87376486637', 'Partnership: Developing Your Digital Asset', 'Hi there! Wishing you a great day ahead. \r\n \r\nHello, I\'m contacting website administrators about development grants. No obligations or repayment. If this interests you, please reply with your availability. Please contact me on WhatsApp +66928160350', 0, '2026-02-05 02:18:07', '2026-02-05 02:18:07'),
(65, 'Mike Gabriel Wilson', 'info@speed-seo.net', '82894714542', 'Find inoodex.com SEO Issues totally free', 'Hi, \r\nWorried about hidden SEO issues on your website? Let us help — completely free. \r\nRun a 100% free SEO check and discover the exact problems holding your site back from ranking higher on Google. \r\n \r\nRun Your Free SEO Check Now \r\nhttps://www.speed-seo.net/check-site-seo-score/ \r\n \r\nOr chat with us and our agent will run the report for you: https://www.speed-seo.net/whatsapp-with-us/ \r\n \r\nBest regards, \r\n \r\n \r\nMike Gabriel Wilson\r\n \r\nSpeed SEO Digital \r\nEmail: info@speed-seo.net \r\nPhone/WhatsApp: +1 (833) 454-8622', 0, '2026-02-06 19:23:52', '2026-02-06 19:23:52'),
(66, 'Emmabon4830', 'isabellaDaype463969@yahoo.com', '81468415894', 'I want it now', 'IвЂ™ve got a very thirsty surprise waiting for you on my profile.   -  telegra.ph/Enter-01-31?bon', 1, '2026-02-06 21:24:25', '2026-02-23 10:05:37'),
(67, 'Eugenio McCash', 'mccash.eugenio90@gmail.com', '610293666', 'Short note', 'Quick note,\r\n\r\nCame across your site and figured this was worth sending.\r\n\r\nThere’s a 100% free tool that lets you get listed fast across multiple classified sites with one form.\r\n\r\nUse this:\r\nhttps://sitesubmitterpro.com\r\n\r\nIt’s a free traffic booster and takes seconds.\r\n\r\nHappy to share more free exposure tools.', 0, '2026-02-07 08:41:04', '2026-02-07 08:41:04'),
(68, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:07:35', '2026-02-10 22:07:35'),
(69, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:07:54', '2026-02-10 22:07:54'),
(70, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:07:54', '2026-02-10 22:07:54'),
(71, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:08:01', '2026-02-10 22:08:01'),
(72, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:08:04', '2026-02-10 22:08:04'),
(73, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:08:08', '2026-02-10 22:08:08'),
(74, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:08:36', '2026-02-10 22:08:36'),
(75, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:08:41', '2026-02-10 22:08:41'),
(76, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:08:44', '2026-02-10 22:08:44'),
(77, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:08:48', '2026-02-10 22:08:48'),
(78, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:08:53', '2026-02-10 22:08:53'),
(79, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:08:56', '2026-02-10 22:08:56'),
(80, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:09:06', '2026-02-10 22:09:06'),
(81, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:09:15', '2026-02-10 22:09:15'),
(82, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:09:26', '2026-02-10 22:09:26'),
(83, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:09:30', '2026-02-10 22:09:30'),
(84, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:09:33', '2026-02-10 22:09:33'),
(85, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:09:36', '2026-02-10 22:09:36'),
(86, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:09:40', '2026-02-10 22:09:40'),
(87, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:09:44', '2026-02-10 22:09:44'),
(88, 'efyhdgnekj', 'eokmwrlm@checkyourform.xyz', '+1-335-049-3043', 'mmsgnsehfq', 'joixowuoozhjvsimfuqwqrmuteoklr', 0, '2026-02-10 22:09:50', '2026-02-10 22:09:50'),
(89, 'William Grant', 'william.grant@jmailservice.com', '8054002077', 'Get More Clicks Without Waiting Weeks', 'Most businesses struggle to get noticed online. We solve that by putting your brand above the competition on major search pages for the exact keywords your customers are typing.\r\nSetup takes less than a day, and you\'ll start seeing traffic immediately in your analytics.\r\nWould you like me to send a few keyword suggestions for your business?', 0, '2026-02-13 04:51:46', '2026-02-13 04:51:46'),
(90, 'Mike John Dubois', 'info@professionalseocleanup.com', '88798823728', 'Fix August Google Spam update ranking problems for free', 'Hi, \r\nWhile reviewing inoodex.com, we spotted toxic backlinks that could put your site at risk of a Google penalty. Especially that this Google SPAM update had a high impact in ranks. This is an easy and quick fix for you. Totally free of charge. No obligations. \r\n \r\nFix it now: \r\nhttps://www.professionalseocleanup.com/ \r\n \r\nNeed help or questions? Chat here: \r\nhttps://www.professionalseocleanup.com/whatsapp/ \r\n \r\nBest, \r\nMike John Dubois\r\n \r\n+1 (855) 221-7591 \r\ninfo@professionalseocleanup.com', 0, '2026-02-13 15:38:53', '2026-02-13 15:38:53'),
(91, 'Nickolas Scroggins', 'nickolas.scroggins@hotmail.com', '21631784', 'question', 'Ever stop to think how much you\'re spending on marked-up CPMs for Connected TV ads?\r\nIf you\'re using “premium” audience segments without verifying who you\'re actually reaching, that money is likely feeding someone else\'s family.\r\nNo pressure. Here’s the site if you\'re open to see a revolutionary vision for digital advertising\r\ntopshelfaudience.com using real-time Intent data from an Integration in our platform to Lotame.com. You can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', 1, '2026-02-13 23:32:07', '2026-02-23 10:06:11'),
(92, 'Roxanne Patnode', 'roxanne.patnode@msn.com', '3381806440', 'Quick question', 'Good day,\r\n\r\nNot sure if you\'re promoting your site right now, but this could help.\r\n\r\nHere’s a free service that can help you boost your online visibility across multiple classified sites with almost no effort.\r\n\r\nIf you want an easy traffic lift, here’s the page:\r\nwww.sitesubmitterpro.com\r\n\r\nIt’s a free way to get more exposure and takes seconds.\r\n\r\nLet me know if you want a quick breakdown of how it works.', 0, '2026-02-14 15:50:17', '2026-02-14 15:50:17'),
(93, 'Nikitaarict', 'nikitafofanov46@gmail.com', '87629114462', 'Supporting Helpful Online Resources', 'Hi there! Wishing you a great day ahead. \r\n \r\nGreetings, I\'m writing to selected administrators about financial sponsorship. This is a development grant opportunity. Interested in learning more? Please contact me on WhatsApp +79178327866', 0, '2026-02-14 23:56:51', '2026-02-14 23:56:51'),
(94, 'Nikitaarict', 'nikitafofanov46@gmail.com', '89391863236', 'Inquiry Regarding Financial Sponsorship', 'Good day! Hope this message finds you well. \r\n \r\nHello, I\'m reaching out to selected website administrators with an offer of financial sponsorship. If interested in a grant for your platform, please reply. Please contact me on WhatsApp +79053757145', 0, '2026-02-15 16:00:41', '2026-02-15 16:00:41'),
(95, 'Geneva Halpern', 'halpern.geneva@gmail.com', '3457263007', 'Quick question', 'Quick note,\r\n\r\nSaw your website and thought this could help.\r\n\r\nThere’s a completely free tool that lets you get more exposure across multiple classified sites with a single submission.\r\n\r\nHere’s the link:\r\nsitesubmitterpro.com\r\n\r\nIt’s a free traffic booster and takes almost no time.\r\n\r\nIf you want more free tools, let me know.', 0, '2026-02-16 14:23:44', '2026-02-16 14:23:44'),
(96, 'RobertIners', 'zekisuquc419@gmail.com', '89937647365', 'Hi,   write about your the prices', 'Hai, saya ingin tahu harga Anda.', 0, '2026-02-21 22:56:38', '2026-02-21 22:56:38'),
(98, 'Joseph Matthews', 'joseph.matthews@jmailservice.com', '8054002077', 'Show Up First When Customers Search', 'We place your business directly in front of people already searching for what you sell - and it\'s live within 24 hours.\r\nWould you like me to show you a quick demo?', 0, '2026-02-23 12:17:17', '2026-02-23 12:17:17'),
(99, 'RobertIners', 'zekisuquc419@gmail.com', '84251146648', 'Hello,   write about your the price for reseller', 'Hai, saya ingin tahu harga Anda.', 0, '2026-02-24 19:17:43', '2026-02-24 19:17:43'),
(100, 'RobertIners', 'zekisuquc419@gmail.com', '83643972612', 'Hello  i am wrote about   the prices', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', 0, '2026-02-27 04:57:43', '2026-02-27 04:57:43'),
(101, 'RobertIners', 'zekisuquc419@gmail.com', '88238382537', 'Aloha,   wrote about your the price', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', 0, '2026-03-02 07:44:22', '2026-03-02 07:44:22'),
(102, 'Simone Zhang', 'simone.zhang@gmail.com', '267873308', 'Note for you', 'Quick note,\r\n\r\nSaw your site and figured this might be valuable.\r\n\r\nHere’s a free service that can help you get more exposure for your business across multiple classified sites with just a few clicks.\r\n\r\nIf you want a simple visibility bump, check this out:\r\nhttps://websubmitterpro.com\r\n\r\nIt’s free to use and takes under a minute.\r\n\r\nIf you want, I can show you more free ways to get visibility.', 0, '2026-03-02 20:55:59', '2026-03-02 20:55:59'),
(103, 'RobertIners', 'zekisuquc419@gmail.com', '81633245638', 'Aloha  i am writing about your the prices', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', 0, '2026-03-02 22:16:59', '2026-03-02 22:16:59'),
(104, 'Brentmooff', 'jacksrenome@gmx.com', '86943374296', 'Hfegufwhduw ujdjwuwh ijwdjwjiqwqr hriqwhfiqu hrqwejrqwhrfweuih jiqhwiuqhwuih', 'Cvbnifwjidhwfijwoj ihiwdqjfjewhifhqwhfqwuifhuieh uhuifhqwidjqwihiqwufgewygh uiheuifhqwuifgquehdqwui inoodex.com', 0, '2026-03-04 21:42:51', '2026-03-04 21:42:51'),
(105, 'Leonida', 'sales@inoodex.com', '128311727', 'Leonida Threlfall', 'Hi \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF: https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nAll the best, \r\n\r\nLeonida', 0, '2026-03-06 14:35:17', '2026-03-06 14:35:17'),
(106, 'Nikitaarict', 'nikitafofanov46@gmail.com', '82318971349', 'Collaboration: Strengthening Your Online Presence', 'Hi there! Wishing you a great day ahead. \r\n \r\nDear Site Administrator, I\'m reaching out to offer financial backing for your web initiative. This is a genuine grant opportunity. Would you like to discuss? Please contact me on WhatsApp +66952562329', 0, '2026-03-07 00:23:30', '2026-03-07 00:23:30'),
(107, 'Arielle Witt', 'arielle.witt@gmail.com', '7771469448', 'Heads up', 'Hello,\r\n\r\nCame across your site and figured this was worth sending.\r\n\r\nThere’s a free tool that lets you get listed fast across multiple classified sites with a single submission.\r\n\r\nGo here:\r\nclassifiedsubmitter.com\r\n\r\nIt’s free to use and takes seconds.\r\n\r\nI can send more free traffic resources.', 0, '2026-03-07 12:00:39', '2026-03-07 12:00:39'),
(108, 'RobertIners', 'zekisuquc419@gmail.com', '81875893636', 'Aloha,   wrote about your   price', 'Dia duit, theastaigh uaim do phraghas a fháil.', 0, '2026-03-07 18:42:36', '2026-03-07 18:42:36'),
(109, 'RobertIners', 'zekisuquc419@gmail.com', '84752313411', 'Aloha  i writing about your the prices', 'Salam, qiymətinizi bilmək istədim.', 0, '2026-03-09 01:27:10', '2026-03-09 01:27:10'),
(110, 'Cecila', 'sales@solberg.bangeshop.com', '499322519', 'Cecila Solberg', 'Hey there, \r\n\r\nI hope you\'re doing well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nThe bags are waterproof and anti-theft, and have a built-in USB cable that can recharge your phone while you\'re on the go.\r\n\r\nBoth bags are made of durable and high-quality materials, and are perfect for everyday use or travel.\r\n\r\nOrder yours now at 50% OFF with FREE Shipping: http://bangeshop.com\r\n\r\nSincerely,\r\n\r\nCecila', 0, '2026-03-09 17:46:45', '2026-03-09 17:46:45'),
(111, 'RobertIners', 'zekisuquc419@gmail.com', '84241455171', 'Hello, i write about     price', 'Hi, kam dashur të di çmimin tuaj', 0, '2026-03-10 12:07:00', '2026-03-10 12:07:00'),
(112, 'Anh Kenyon', 'turnerfisher348.382+anh.kenyon@gmail.com', '2159669728', 'Contact for inoodex.com regarding traffic', 'Want better search rankings for Inoodex Com?\r\n\r\nOur team offers high-impact marketing tools built to scale your business. Our solutions include Organic Website Traffic and diverse link building such as Web 2.0, Wiki, and Blog Comments. Our services are optimized to increase your domain authority at the best prices.\r\n\r\nGet started today: https://rb.gy/t7gc5i\r\n\r\nThank you, Anh\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nTo unsubscribe, please reply with subject:  Unsubscribe !inoodex.com', 0, '2026-03-10 22:29:14', '2026-03-10 22:29:14'),
(113, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:42', '2026-03-11 21:33:42'),
(114, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:43', '2026-03-11 21:33:43'),
(115, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:43', '2026-03-11 21:33:43'),
(116, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:44', '2026-03-11 21:33:44'),
(117, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:45', '2026-03-11 21:33:45'),
(118, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:45', '2026-03-11 21:33:45'),
(119, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:46', '2026-03-11 21:33:46'),
(120, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:47', '2026-03-11 21:33:47'),
(121, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:47', '2026-03-11 21:33:47'),
(122, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:48', '2026-03-11 21:33:48'),
(123, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:48', '2026-03-11 21:33:48'),
(124, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:49', '2026-03-11 21:33:49'),
(125, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:49', '2026-03-11 21:33:49'),
(126, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:50', '2026-03-11 21:33:50'),
(127, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:50', '2026-03-11 21:33:50'),
(128, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:51', '2026-03-11 21:33:51'),
(129, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:51', '2026-03-11 21:33:51'),
(130, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:52', '2026-03-11 21:33:52'),
(131, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:52', '2026-03-11 21:33:52'),
(132, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:53', '2026-03-11 21:33:53'),
(133, 'jpmkqqofwv', 'ggnkygjh@checkyourform.xyz', '+1-355-820-2068', 'ndqzxrvqfq', 'gsvohhgpkwgnmdulwqqesilrryhzky', 0, '2026-03-11 21:33:53', '2026-03-11 21:33:53'),
(134, 'Alexander Reid', 'alexander.reid@jmailservice.com', '8054002077', 'Turn Searchers Into Customers', 'Let me be direct.\r\n\r\nEvery day people are searching for your services.\r\nSomeone is getting that traffic.\r\n\r\nIt can be you.\r\n\r\nWe allow you to secure specific keyword phrases in your industry. When someone searches that term, your banner appears and sends them straight to your website.\r\n\r\nKeyword placements are limited. Once secured, they are no longer available to competitors.\r\n\r\nIf you\'re serious about growth, send me:\r\n - Your website\r\n - The keywords you want to control\r\n\r\nI\'ll respond with availability and guaranteed traffic numbers.', 0, '2026-03-13 02:42:11', '2026-03-13 02:42:11'),
(135, 'Rex Sladen', 'rex.sladen@gmail.com', '661763624', 'query', 'Ever stop to think how much you\'re spending on marked-up CPMs for Connected TV ads?\r\nIf you\'re using “premium” audience segments without verifying who you\'re actually reaching, that money is likely feeding someone else\'s family.\r\nNo pressure. Here’s the site if you\'re open to see a revolutionary vision for digital advertising\r\ntopshelfaudience.com using real-time Intent data from an Integration in our platform to Lotame.com. You can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', 0, '2026-03-13 06:05:58', '2026-03-13 06:05:58'),
(136, 'Donna Nelms', 'donna.nelms@yahoo.com', NULL, 'A quick question', 'Quick note,\r\n\r\nNot sure if you\'re promoting your site right now, but this could help.\r\n\r\nThere\'s a free tool that lets you boost your online visibility across multiple classified sites with one simple form.\r\n\r\nIf you want a quick visibility boost, here’s the URL:\r\nhttps://websubmitterpro.com\r\n\r\nIt’s a free traffic booster and takes under a minute.\r\n\r\nI can send more ways to promote your site if you want.', 0, '2026-03-14 05:57:51', '2026-03-14 05:57:51'),
(137, 'Colette', 'sales@inoodex.com', '3754976153', 'Colette Barlee', 'Hi there \r\n\r\nLooking to improve your posture and live a healthier life? Our Medico Postura™ Body Posture Corrector is here to help!\r\n\r\nExperience instant posture improvement with Medico Postura™. This easy-to-use device can be worn anywhere, anytime – at home, work, or even while you sleep.\r\n\r\nMade from lightweight, breathable fabric, it ensures comfort all day long.\r\n\r\nGrab it today at a fantastic 60% OFF: https://medicopostura.com\r\n\r\nPlus, enjoy FREE shipping for today only!\r\n\r\nDon\'t miss out on this amazing deal. Get yours now and start transforming your posture!\r\n\r\nKind Regards, \r\n\r\nColette', 0, '2026-03-14 19:04:50', '2026-03-14 19:04:50'),
(138, 'RobertIners', 'zekisuquc419@gmail.com', '89911926522', 'Hallo    wrote about   the prices', 'Salut, ech wollt Äre Präis wëssen.', 0, '2026-03-14 20:47:10', '2026-03-14 20:47:10'),
(139, 'Laura Barth', 'barth.laura@gmail.com', '31933623', 'Sharing something useful', 'Hello,\r\n\r\nCame across your site and figured this was worth sending.\r\n\r\nThere’s a 100% free tool that lets you get more exposure across multiple classified sites with one form.\r\n\r\nGo here:\r\nhttps://classifiedsubmitter.com\r\n\r\nIt’s free to use and takes almost no time.\r\n\r\nHappy to share more free exposure tools.', 0, '2026-03-16 01:34:48', '2026-03-16 01:34:48'),
(140, 'Thomas Binford', 'thomas.binford@yahoo.com', '3406602167', 'Premium Quality Private Proxy', 'Greetings from DreamProxies.com\r\n\r\nFresh proxies offer: elite, ultra speed and unlimited private proxies now even lower price!\r\n50% Deals - for all private proxies:\r\n\r\nhttps://tiny.cc/DreamProxies-Deal\r\n\r\nBrowse top features and advantages:\r\nComplete Anonymity, Ultimate Quality, Lightning-fast Speed, Unlimited Data, Reliable Servers, Low Prices, Additional Offers and much more\r\n\r\n50% Savings for all proxies packages - on DreamProxies.com', 0, '2026-03-16 02:12:30', '2026-03-16 02:12:30'),
(141, 'Denis Grayson', 'grayson.denis@gmail.com', '2137326528', 'Something I wanted to ask', 'Want your message to reach real businesses without relying on unpredictable algorithms?  \r\nContact form blasting delivers your offer directly through website contact forms — fast, controlled, and impossible to ignore.\r\n\r\nNo algorithms. No ad auctions. No waiting for organic reach.  \r\nJust guaranteed delivery straight to business inboxes and dashboards.\r\n\r\nWhether you’re promoting a service, launching a product, booking appointments, or generating leads, contact form blasting gives you real, scalable visibility.\r\n\r\nIf this message reached you, imagine what your message can do across thousands — or millions — of sites.\r\n\r\nStart your campaign at **contactpageads.com** and reach real decision‑makers.', 0, '2026-03-16 14:41:00', '2026-03-16 14:41:00');
INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(142, 'RobertIners', 'zekisuquc419@gmail.com', '87512884555', 'Hallo  i am writing about     price for reseller', 'Hallo, ek wou jou prys ken.', 0, '2026-03-17 15:39:48', '2026-03-17 15:39:48'),
(143, 'Sal', 'sales@inoodex.com', '40413459', 'Just reaching out', 'Hello,\r\n\r\nJust sharing something you might find useful.\r\n\r\nRight now we have a deal on our FitRx™ Wireless Muscle Massager.\r\n\r\nhttps://easerelief.net\r\n\r\nIt’s rechargeable and app-controlled and works great for soothing tired muscles after long days.\r\n\r\nStock at this price is limited, so it’s worth a quick look.\r\n\r\nThanks,\r\nFitRx™ Team', 0, '2026-03-17 19:24:41', '2026-03-17 19:24:41'),
(144, 'Andrew Bailey', 'baileyandrew755@yahoo.com', '82236772212', 'Buyers Required.', 'We are reputable \r\nbrokers for Jet A1, EN590, Tank Farms, Gasoline/Petrol, LNGs and your hydrocarbons and looking for prospective buyers in huge volumes. \r\n \r\nAndrew Bailey. \r\nbaileyandrew755@yahoo.com', 0, '2026-03-17 22:19:39', '2026-03-17 22:19:39'),
(145, 'Jayrn Smith', 'veta.rason@gmail.com', '7944564909', 'The $100 Million Advertorial Formula', 'Hi, it’s Jayrn.\r\n\r\nIf you want to scale your brand to $100M using high-converting paid traffic, you must stop sending visitors to standard product pages. \r\n\r\nThis blueprint is based on the proven formula used by Alex Fedotoff to achieve 25-30% profit margins at massive scale. \r\n\r\nBy the end of this guide, you will have the architecture for pages that “pre-sell” customers before they even see a price tag.\r\n\r\nLearn More: https://www.jayrn.com/million-advertorial-formula.php?refer=inoodex.com\r\n\r\nTo your success,\r\nJayrn\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://www.jayrn.com/unsubscribe.php?d=inoodex.com', 0, '2026-03-18 05:40:13', '2026-03-18 05:40:13'),
(146, 'Monserrate', 'sales@inoodex.com', '633268671', 'Monserrate Henninger', 'Hello there \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF: https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nMany Thanks, \r\n\r\nMonserrate', 0, '2026-03-19 15:12:01', '2026-03-19 15:12:01'),
(147, 'Keenan Summerfield', 'keenan.summerfield@gmail.com', '3122341642', 'Note for you', 'Hey,\r\n\r\nNot sure if you\'re promoting your site right now, but this could help.\r\n\r\nHere’s a free service that can help you submit your website across multiple classified sites with a single submission.\r\n\r\nIf you want fast exposure, here’s the link:\r\nwww.websubmitterpro.com\r\n\r\nIt’s a free traffic booster and takes almost no time.\r\n\r\nI can send more ways to promote your site if you want.', 0, '2026-03-21 00:52:42', '2026-03-21 00:52:42'),
(148, 'Carri Carr', 'carr.carri@googlemail.com', '3847396567', 'Dear inoodex.com Owner!', 'We are exploring investment opportunities and would be interested in supporting your current or upcoming projects. Our Gulf‑based investors are seeking viable ventures abroad and offer a straightforward funding process with competitive rates. If you’d like to discuss further, please contact Nassar Jaralla Al‑Marri at jaralla.nassar@dejlaconsulting.com for application details.', 0, '2026-03-21 06:42:59', '2026-03-21 06:42:59'),
(149, 'Camille Storm', 'storm.camille4@gmail.com', '2351828002', 'question for you', 'Ever stop to think how much you\'re spending on marked-up CPMs for Connected TV ads?\r\nIf you\'re using “premium” audience segments without verifying who you\'re actually reaching, that money is likely feeding someone else\'s family.\r\nNo pressure. Here’s the site if you\'re open to see a revolutionary vision for digital advertising\r\ntopshelfaudience.com using real-time Intent data from an Integration in our platform to Lotame.com. You can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', 0, '2026-03-21 06:59:20', '2026-03-21 06:59:20'),
(150, 'Bart Zarate', 'zarate.bart56@yahoo.com', NULL, 'Small question', 'Looking for a simple outreach method that doesn’t depend on social media?\r\nContact form blasting sends your message directly through website contact forms — fast, predictable, and impossible to ignore.\r\nNo algorithms. No bidding. No waiting for someone to scroll past.\r\nJust guaranteed delivery straight to business inboxes and dashboards.\r\nWhether you\'re promoting a service, launching a product, or generating leads, contact form blasting gives you dependable visibility.\r\nIf this message reached you, imagine what your message can do across thousands — or millions — of websites.\r\nStart your campaign at contactpageads.com and get your offer in front of real prospects.', 0, '2026-03-21 07:02:46', '2026-03-21 07:02:46'),
(151, 'RobertIners', 'zekisuquc419@gmail.com', '81886412458', 'Aloha  i wrote about     price for reseller', 'Прывітанне, я хацеў даведацца Ваш прайс.', 0, '2026-03-21 09:06:39', '2026-03-21 09:06:39'),
(152, 'Joe', 'sales@mattson.tidbuy.com', '3689950538', 'Joe Mattson', 'Hello there \r\n \r\nIs your dog\'s nails getting too long? If you\'re tired of going to the vet or groomer to get them trimmed, why not try PawSafer™? \r\nWith PawSafer™, you can trim your dog\'s nails from the comfort of your own home, and it only takes a few minutes!\r\n\r\nPawSafer™ is the safest and most convenient way to trim your dog\'s nails, and it\'s very affordable. \r\n\r\nGet it while it\'s still 50% OFF + FREE Shipping\r\n\r\nBuy here: https://tidbuy.com\r\n \r\nRegards, \r\n \r\nJoe', 0, '2026-03-21 17:53:23', '2026-03-21 17:53:23'),
(153, 'Jayrn Smith', 'cherie.mckeon29@googlemail.com', '883620693', '[From Jayrn] Magnetic Marketing Letter For inoodex.com Owner', 'Hi, it’s Jayrn.\r\n\r\nThe \"Cyclone of Change\" is hitting every industry right now—shaking up technology, media, customer preferences, and competition. \r\n\r\nMost business owners are reacting like \"fragile saplings\" in a storm, certain to be victims of the next big shift.\r\n\r\n\"But you don’t have to be one of them.\"\r\n\r\nI’m sending you a powerful resource from Dan Kennedy that breaks down exactly how to become a \"mighty oak\" that remains deeply rooted while others are being overwhelmed. \r\n\r\nInside this Magnetic Marketing Letter, you’ll discover:\r\n\r\n* The 5 Methods to Master Change: These are the specific strategies Dan uses to make change work for him, rather than letting change put him to work.\r\n\r\n* Two Master Keys to Riches: Two secret principles that Dan considers the most valuable advice he has shared in over a year.\r\n\r\n* The $440,000 Test: How one client spent $20,000 on a simple delivery change (without changing a single word of copy) and brought in nearly half a million dollars.\r\n\r\n* The \"Goldilocks Approach\" to Progress: Why leaping too fast to embrace change can lead you off a cliff, but resisting it too long will get you run over.\r\n\r\n* The \"Middled-Out\" Pyramid: Why you must change who you sell to right now as middle-income earners get \"slaughtered\" by current economic trends.\r\n\r\nYou’ll also read the incredible story of \"Preston Schmidli\", who went from \"selling his own plasma for gas money\" to building a growth machine generating \"nearly $5 million\" in less than seven years by using these exact tactics.\r\n\r\nDon’t let yourself be overwhelmed by circumstances when you can choose to master them instead.\r\n\r\nDownload/Read here: https://marketersmentor.com/magnetic-marketing-letter.php?refer=inoodex.com\r\n\r\nTo your success,\r\n\r\nJayrn\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=inoodex.com', 0, '2026-03-24 08:41:26', '2026-03-24 08:41:26'),
(154, 'Niklas', 'sales@inoodex.com', '664591057', 'Niklas Horgan', 'Hey \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF: https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nThanks and Best Regards, \r\n\r\nNiklas', 0, '2026-03-24 17:49:37', '2026-03-24 17:49:37'),
(155, 'RobertIners', 'zekisuquc419@gmail.com', '82429289889', 'Hi  i am write about     prices', 'Ola, quería saber o seu prezo.', 0, '2026-03-24 19:31:50', '2026-03-24 19:31:50'),
(156, 'RobertIners', 'zekisuquc419@gmail.com', '83746995679', 'Hi,   wrote about your the price', 'Salut, ech wollt Äre Präis wëssen.', 0, '2026-03-24 22:47:53', '2026-03-24 22:47:53'),
(157, 'Alyssa Stone', 'alyssa@turbojot.com', '2158218810', 'Please give it a try!', 'Hi! My name is Alyssa and I’d love to invite you to try TurboJot. I actually founded the company. It’s built to automate contact form submissions at scale. Simply upload a list of URLs and TurboJot automatically finds and submits contact forms on those sites. It beats cold email and paid ads on ROI and costs just $0.10 per submission. Powered by a rotating IP network, stealth browser, AI captcha solving, and human-like browsing behavior. You can sign up for free and give it a try here. I’d really appreciate the support! https://www.turbojot.com/', 0, '2026-03-24 22:48:52', '2026-03-24 22:48:52'),
(158, 'Kelli Storm', 'kelli.storm@googlemail.com', '7717492295', 'I\'m a bit confused', 'Every partial financing approval, every full credit decline, and every financed job with 5–15% merchant financing fees attached is quietly pulling revenue out of your business.\r\n\r\nMost contractors never calculate it.\r\n\r\nWhen they do, it\'s usually thousands of dollars a month in lost revenue and compressed margins.\r\n\r\nOur customer financing program recovers it. Here is what it delivers:\r\n\r\n+ 500 to 850 FICO: we approve the customers your current lender won\'t\r\n+ 0% for 21 months: the most competitive home improvement financing terms available\r\n+ Zero merchant fees: zero per-loan fees, your business keeps every dollar\r\n+ No need to switch: any contractor, any project, no restrictions of any kind\r\n\r\nWorks seamlessly alongside your existing lender or as your complete standalone program.\r\n\r\nSee full program info here: helloratesdealersolutions.com\r\nOr use the link in my signature. \r\n\r\nJames\r\nHelloRates Contractor Financing Solutions\r\nComplete financing coverage for any contractor\r\nCharleston, SC · helloratesdealersolutions.com\r\n\r\nIf you received this in error or would like to unsubscribe, visit helloratesdealersolutions.com/unsubscribe', 0, '2026-03-25 08:08:51', '2026-03-25 08:08:51'),
(159, 'Jesus Wreford', 'jesus.wreford@gmail.com', NULL, 'Wanted to reach out', 'Hello,\r\n\r\nI came across your website and wanted to share something useful.\r\n\r\nI wanted to share a free resource that helps you get more exposure for your business across multiple classified sites with one simple form.\r\n\r\nIf you want more eyes on your site, use this:\r\nwww.websubmitterpro.com\r\n\r\nIt’s free to use and takes under a minute.\r\n\r\nLet me know if you want a quick breakdown of how it works.', 1, '2026-03-25 10:10:53', '2026-03-31 15:46:28'),
(160, 'RobertIners', 'zekisuquc419@gmail.com', '81625712718', 'Aloha,   writing about   the price for reseller', 'Hi, kam dashur të di çmimin tuaj', 0, '2026-03-25 11:21:34', '2026-03-25 11:21:34'),
(161, 'Maximo Zahel', 'zahel.maximo@googlemail.com', '482816602', 'Something I wanted to ask', 'Hello,\r\n\r\nI noticed your business online and wanted to pass this along.\r\n\r\nHere’s a free service that can help you push your site out wider across multiple classified sites with just a few clicks.\r\n\r\nIf you want to get listed quickly, here’s the site:\r\nclassifiedsubmitter.com\r\n\r\nIt’s a free way to get more exposure and takes less effort than posting manually.\r\n\r\nJust reply if you want more ideas.', 0, '2026-03-25 22:26:01', '2026-03-25 22:26:01'),
(162, 'Charlesdealo', 'jccleal@gmail.com', '87983683394', 'THE SIMPLE WAY TO WIN $12,500.00 EVERY DAY', 'Why Wait When $12,500.00 Could Be Yours Today https://telegra.ph/Win-a-1250000-prize-every-day-Only-we-have-this--Message-ID-540050-03-25', 0, '2026-03-26 14:38:17', '2026-03-26 14:38:17'),
(163, 'Charlesdealo', 'jccleal@gmail.com', '81195982238', 'THE SIMPLE WAY TO WIN $12,500.00 EVERY DAY', 'Why Wait When $12,500.00 Could Be Yours Today https://telegra.ph/Win-a-1250000-prize-every-day-Only-we-have-this--Message-ID-540050-03-25', 0, '2026-03-26 14:38:18', '2026-03-26 14:38:18'),
(164, 'Charlesdealo', 'jccleal@gmail.com', '87287185199', 'THE SIMPLE WAY TO WIN $12,500.00 EVERY DAY', 'Why Wait When $12,500.00 Could Be Yours Today https://telegra.ph/Win-a-1250000-prize-every-day-Only-we-have-this--Message-ID-540050-03-25', 0, '2026-03-26 14:38:19', '2026-03-26 14:38:19'),
(165, 'Charlesdealo', 'jccleal@gmail.com', '86125993994', 'THE SIMPLE WAY TO WIN $12,500.00 EVERY DAY', 'Why Wait When $12,500.00 Could Be Yours Today https://telegra.ph/Win-a-1250000-prize-every-day-Only-we-have-this--Message-ID-540050-03-25', 0, '2026-03-26 14:38:20', '2026-03-26 14:38:20'),
(166, 'Charlesdealo', 'jccleal@gmail.com', '87969316569', 'THE SIMPLE WAY TO WIN $12,500.00 EVERY DAY', 'Why Wait When $12,500.00 Could Be Yours Today https://telegra.ph/Win-a-1250000-prize-every-day-Only-we-have-this--Message-ID-540050-03-25', 0, '2026-03-26 14:38:20', '2026-03-26 14:38:20'),
(167, 'Charlesdealo', 'leslie_barbara@yahoo.com', '86249923645', 'THE $3,500,000 JACKPOT IS A PROVEN WINNER GENERATOR', 'THE $3,500,000 JACKPOT IS UP FOR GRABS—STEP UP AND TAKE IT https://cut.gl/XVdYX', 0, '2026-03-28 15:08:52', '2026-03-28 15:08:52'),
(168, 'Charlesdealo', 'leslie_barbara@yahoo.com', '89167717649', 'THE $3,500,000 JACKPOT IS A PROVEN WINNER GENERATOR', 'THE $3,500,000 JACKPOT IS UP FOR GRABS—STEP UP AND TAKE IT https://cut.gl/XVdYX', 0, '2026-03-28 15:08:53', '2026-03-28 15:08:53'),
(169, 'Charlesdealo', 'leslie_barbara@yahoo.com', '87278446495', 'THE $3,500,000 JACKPOT IS A PROVEN WINNER GENERATOR', 'THE $3,500,000 JACKPOT IS UP FOR GRABS—STEP UP AND TAKE IT https://cut.gl/XVdYX', 0, '2026-03-28 15:08:54', '2026-03-28 15:08:54'),
(170, 'Charlesdealo', 'leslie_barbara@yahoo.com', '87829215777', 'THE $3,500,000 JACKPOT IS A PROVEN WINNER GENERATOR', 'THE $3,500,000 JACKPOT IS UP FOR GRABS—STEP UP AND TAKE IT https://cut.gl/XVdYX', 0, '2026-03-28 15:08:55', '2026-03-28 15:08:55'),
(171, 'Charlesdealo', 'leslie_barbara@yahoo.com', '84522819831', 'THE $3,500,000 JACKPOT IS A PROVEN WINNER GENERATOR', 'THE $3,500,000 JACKPOT IS UP FOR GRABS—STEP UP AND TAKE IT https://cut.gl/XVdYX', 0, '2026-03-28 15:08:55', '2026-03-28 15:08:55'),
(172, 'RobertIners', 'zekisuquc419@gmail.com', '88334743764', 'Hello,   write about your   price for reseller', 'Прывітанне, я хацеў даведацца Ваш прайс.', 0, '2026-03-29 04:54:03', '2026-03-29 04:54:03'),
(173, 'Kathlene Barraclough', 'barraclough.kathlene36@yahoo.com', '665912863', 'Trusted Fast Speed Private Proxies', 'Hello from DreamProxies.com\r\n\r\nAmazing proxy offer: elite, fast speed and unlimited private proxies now even better price!\r\n50% Discount - for all private proxies:\r\n\r\nhttps://tiny.cc/DreamProxies-Offers\r\n\r\nView features and advantages:\r\nFully Private, Ultimate Quality, Lightning-fast Speed, Unlimited Usage, Powerful Servers, Low Prices, Extra Discounts and many more\r\n\r\n50% Sales for all proxies packs - by DreamProxies.com', 0, '2026-03-29 07:46:48', '2026-03-29 07:46:48'),
(174, 'Ciara Lewers', 'lewers.ciara@gmail.com', '3340523393', 'Following up', 'Hey,\r\n\r\nI work with a lot of small businesses and thought you\'d appreciate this.\r\n\r\nHere’s a free service that can help you get seen on more platforms across multiple classified sites with no manual posting.\r\n\r\nIf you want an easy traffic lift, here’s the page:\r\nwww.websubmitterpro.com\r\n\r\nIt’s a free way to get more exposure and takes almost no time.\r\n\r\nHappy to share more free ways to get exposure.', 0, '2026-03-30 04:45:48', '2026-03-30 04:45:48'),
(175, 'Felix Sorrell', 'felix.sorrell@yahoo.com', '526429204', 'A quick question', 'Quick note,\r\n\r\nSaw your site and figured this might be valuable.\r\n\r\nThere\'s a free tool that lets you boost your online visibility across multiple classified sites with just a few clicks.\r\n\r\nIf you want to get listed quickly, here’s the site:\r\nhttps://classifiedsubmitter.com\r\n\r\nIt’s a free traffic booster and takes almost no time.\r\n\r\nJust reply if you want more ideas.', 0, '2026-03-30 16:06:31', '2026-03-30 16:06:31'),
(176, 'Marina', 'sales@swart.bangeshop.com', '5164283665', 'Marina Swart', 'Hello, \r\n\r\nI hope this email finds you well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nThe bags are waterproof and anti-theft, and have a built-in USB cable that can recharge your phone while you\'re on the go.\r\n\r\nBoth bags are made of durable and high-quality materials, and are perfect for everyday use or travel.\r\n\r\nOrder yours now at 50% OFF with FREE Shipping: http://bangeshop.com\r\n\r\nThe Best,\r\n\r\nMarina', 1, '2026-03-30 17:52:43', '2026-03-31 15:45:17'),
(177, 'RobertIners', 'zekisuquc419@gmail.com', '81382432425', 'Aloha  i am wrote about your the price', 'Ola, quería saber o seu prezo.', 0, '2026-03-31 07:00:40', '2026-03-31 07:00:40'),
(178, 'NARYTHY1179330NEYHRTGE', 'obmnxjsm@tacoblastmail.com', '83132957374', 'TOTUTYJ1179330TIRTYRTTR', 'MEYJYTJY1179330MARETRYTR', 0, '2026-03-31 07:53:58', '2026-03-31 07:53:58'),
(179, 'NAERTERHTE104587NERTYTRY', 'xlzatkum@tacoblastmail.com', '85619367241', 'TORTYT104587TIRTYTH', 'MERTYHR104587MARTHHDF', 0, '2026-03-31 19:39:03', '2026-03-31 19:39:03'),
(180, 'Minda Molineux', 'minda.molineux@gmail.com', '96676274', 'Hi inoodex.com Admin.', 'We improve MOZ  Domain authority 40+ in 25 Days its help to improve google rank, improve your website SEO, and you get traffic from google \r\n\r\nDA 40 - (Only $29) -\r\nDA 50 - (Only $79) -\r\nDA 60 - (Only $89) -\r\n\r\n\r\n Yes, Limited time !!\r\n\r\n>> 100% Guarantee \r\n>> Improve Ranking \r\n>> White Hat Process \r\n>> Permanent Work\r\n>> 100% Manual Work \r\n>> 0% Spam score increase \r\n\r\n\r\n⚡ From our work your website keyword get rank on google and get organic traffic from google through keywords\r\n\r\nContact now: intrug@gmail.com', 0, '2026-04-02 08:10:18', '2026-04-02 08:10:18'),
(181, 'Charlesdealo', 'thabisoevans34@gmail.com', '85725739881', 'URGENT! YOU\'VE GENERATED 1.3426 BTC NOW EXTRACT', 'IMPORTANT MESSAGE! The Play Withdraw 1.3426 BTC Right Away https://cu.tc/SfFrL', 0, '2026-04-03 02:50:01', '2026-04-03 02:50:01'),
(182, 'Charlesdealo', 'thabisoevans34@gmail.com', '82679518333', 'URGENT! YOU\'VE GENERATED 1.3426 BTC NOW EXTRACT', 'IMPORTANT MESSAGE! The Play Withdraw 1.3426 BTC Right Away https://cu.tc/SfFrL', 0, '2026-04-03 02:50:02', '2026-04-03 02:50:02'),
(183, 'Charlesdealo', 'thabisoevans34@gmail.com', '81992533428', 'URGENT! YOU\'VE GENERATED 1.3426 BTC NOW EXTRACT', 'IMPORTANT MESSAGE! The Play Withdraw 1.3426 BTC Right Away https://cu.tc/SfFrL', 0, '2026-04-03 02:50:03', '2026-04-03 02:50:03'),
(184, 'Charlesdealo', 'thabisoevans34@gmail.com', '81499914844', 'URGENT! YOU\'VE GENERATED 1.3426 BTC NOW EXTRACT', 'IMPORTANT MESSAGE! The Play Withdraw 1.3426 BTC Right Away https://cu.tc/SfFrL', 0, '2026-04-03 02:50:03', '2026-04-03 02:50:03'),
(185, 'Charlesdealo', 'thabisoevans34@gmail.com', '84347437711', 'URGENT! YOU\'VE GENERATED 1.3426 BTC NOW EXTRACT', 'IMPORTANT MESSAGE! The Play Withdraw 1.3426 BTC Right Away https://cu.tc/SfFrL', 0, '2026-04-03 02:50:04', '2026-04-03 02:50:04'),
(186, 'Sophie Lane', 'sophie@sendproud.com', '2155394452', 'Guaranteed results or your money back', 'Hi, I’m Sophie! I tried to find you on LinkedIn but couldn’t, so I’m reaching out here. I help businesses book meetings, drive traffic, and generate user sign ups through targeted outreach using my extensive private network, built over 12+ years, with access to over 100 million contacts. We’ll have a quick call to set a clear goal for your business, and I’ll personally work to make sure we reach it. You choose the result you want, whether that’s booked meetings, website traffic, user sign ups, or another measurable outcome, and if I fall short by even one, I’ll refund your money in full. Schedule a time with me here: https://calendly.com/sendproud/30min', 0, '2026-04-03 17:43:09', '2026-04-03 17:43:09'),
(187, 'Erika Macfarlan', 'erika.macfarlan@gmail.com', '914285056', 'Hello from a fellow entrepreneur', 'What\'s your fax number?\r\nBecause I need to fax you some info on business automation.\r\nJust kidding but  if you’re not using any kind of automation yet, it is the equivalent of still having a fax machine.\r\nThis automation gets leads followed up 24/7, automatically. Reviews requested after every job. Missed calls answered instantly. Invoices that chase themselves until you get paid.\r\nStart your free 14-day trial today: octopusdigitallabs.com\r\nZach \r\nOctopus Small Business Automation \r\nCharleston, SC \r\noctopusdigitallabs.com\r\n\r\nP.S. The fax machine had a good run. So did doing all of this manually. Both are officially retired.', 0, '2026-04-04 02:56:57', '2026-04-04 02:56:57'),
(188, 'Russellwaf', 'rtrservice@tiscali.it', '85791464942', 'THIS BOT EXPOSES WHAT EVERY OUTFIT HIDES', 'This Bot Works on Images With Complex Patterns and Textures https://telegra.ph/Undress-absolutely-any-photo-right-now--Message-ID-282871-04-02', 0, '2026-04-04 04:36:00', '2026-04-04 04:36:00'),
(189, 'Russellwaf', 'rtrservice@tiscali.it', '88927924517', 'THIS BOT EXPOSES WHAT EVERY OUTFIT HIDES', 'This Bot Works on Images With Complex Patterns and Textures https://telegra.ph/Undress-absolutely-any-photo-right-now--Message-ID-282871-04-02', 0, '2026-04-04 04:36:00', '2026-04-04 04:36:00'),
(190, 'Russellwaf', 'rtrservice@tiscali.it', '89118572453', 'THIS BOT EXPOSES WHAT EVERY OUTFIT HIDES', 'This Bot Works on Images With Complex Patterns and Textures https://telegra.ph/Undress-absolutely-any-photo-right-now--Message-ID-282871-04-02', 0, '2026-04-04 04:36:01', '2026-04-04 04:36:01'),
(191, 'Russellwaf', 'rtrservice@tiscali.it', '86587736287', 'THIS BOT EXPOSES WHAT EVERY OUTFIT HIDES', 'This Bot Works on Images With Complex Patterns and Textures https://telegra.ph/Undress-absolutely-any-photo-right-now--Message-ID-282871-04-02', 0, '2026-04-04 04:36:02', '2026-04-04 04:36:02'),
(192, 'Russellwaf', 'rtrservice@tiscali.it', '82136286586', 'THIS BOT EXPOSES WHAT EVERY OUTFIT HIDES', 'This Bot Works on Images With Complex Patterns and Textures https://telegra.ph/Undress-absolutely-any-photo-right-now--Message-ID-282871-04-02', 0, '2026-04-04 04:36:02', '2026-04-04 04:36:02'),
(193, 'Gabrielle Simmons', 'gabrielle.simmons@jmailservice.com', '8054002077', 'Turn Searchers Into Customers', 'If someone is searching for your exact service right now... are they finding you or your competitor?\r\n\r\nWe help businesses secure specific keywords so when prospects search, your brand shows up front and center.\r\n\r\nCampaigns go live fast. Traffic is guaranteed in writing. Everything is tracked in your Google Analytics.\r\n\r\nInterested?\r\n\r\nJust send me:\r\n - Your website\r\n - The keywords you care about most\r\n\r\nI\'ll take it from there.', 0, '2026-04-04 11:12:37', '2026-04-04 11:12:37'),
(194, 'Micheal Chapa', 'turnerfisher.348382+micheal.chapa@gmail.com', '7826859902', 'Traffic solutions for inoodex.com', 'Greetings, \r\n\r\nWe are the SEOByAxy team, and we can transform inoodex.com into a customer magnet with our complete SEO and web solutions:\r\n\r\n* Web Design: Professional presentation sites or full E-commerce stores built from scratch.\r\n* Google & YouTube Ranking: Top positions on Google Search, Maps, and YouTube.\r\n* Backlinks & Traffic: High-quality link building and real visitors ready to buy.\r\n* Social Media & Video: Social media management and high-impact video marketing.\r\n\r\nGet measurable growth at highly affordable rates. View our full agency plans here: \r\nhttps://rb.gy/t7gc5i\r\n\r\nRegards,\r\nMicheal\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nTo unsubscribe, please reply with subject:  Unsubscribe !inoodex.com', 0, '2026-04-04 14:44:01', '2026-04-04 14:44:01'),
(195, 'RobertIners', 'zekisuquc419@gmail.com', '86734585363', 'Hi,   wrote about     prices', 'Hi, ego volo scire vestri pretium.', 0, '2026-04-04 15:55:08', '2026-04-04 15:55:08'),
(196, 'RobertIners', 'zekisuquc419@gmail.com', '82256589365', 'Hallo,   write about your the prices', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', 0, '2026-04-04 18:33:02', '2026-04-04 18:33:02'),
(197, 'Astrid Zepps', 'astrid.zepps@msn.com', '221736964', 'A small request', 'Hope you\'re well,\r\n\r\nI work with a lot of small businesses and thought you\'d appreciate this.\r\n\r\nHere’s a free service that can help you submit your website across multiple classified sites with just a few clicks.\r\n\r\nIf you want an easy traffic lift, here’s the page:\r\nwww.websubmitterpro.com\r\n\r\nIt’s free to use and takes almost no time.\r\n\r\nLet me know if you want a quick breakdown of how it works.', 0, '2026-04-04 19:08:06', '2026-04-04 19:08:06'),
(198, 'Russellwaf', 'salvatorealarcon@yahoo.it', '84448334666', 'URGENT MESSAGE! You\'ve Got 1.3426 BTC Now Obtain', 'URGENT MESSAGE! You\'ve Accumulated 1.3426 BTC Now Retrieve https://pedalhub.store/ojAsE', 0, '2026-04-05 01:58:47', '2026-04-05 01:58:47'),
(199, 'Russellwaf', 'salvatorealarcon@yahoo.it', '87152482324', 'URGENT MESSAGE! You\'ve Got 1.3426 BTC Now Obtain', 'URGENT MESSAGE! You\'ve Accumulated 1.3426 BTC Now Retrieve https://pedalhub.store/ojAsE', 0, '2026-04-05 01:58:47', '2026-04-05 01:58:47'),
(200, 'Russellwaf', 'salvatorealarcon@yahoo.it', '81291374785', 'URGENT MESSAGE! You\'ve Got 1.3426 BTC Now Obtain', 'URGENT MESSAGE! You\'ve Accumulated 1.3426 BTC Now Retrieve https://pedalhub.store/ojAsE', 0, '2026-04-05 01:58:48', '2026-04-05 01:58:48'),
(201, 'Russellwaf', 'salvatorealarcon@yahoo.it', '82747297154', 'URGENT MESSAGE! You\'ve Got 1.3426 BTC Now Obtain', 'URGENT MESSAGE! You\'ve Accumulated 1.3426 BTC Now Retrieve https://pedalhub.store/ojAsE', 0, '2026-04-05 01:58:49', '2026-04-05 01:58:49'),
(202, 'Russellwaf', 'salvatorealarcon@yahoo.it', '89648691582', 'URGENT MESSAGE! You\'ve Got 1.3426 BTC Now Obtain', 'URGENT MESSAGE! You\'ve Accumulated 1.3426 BTC Now Retrieve https://pedalhub.store/ojAsE', 0, '2026-04-05 01:58:50', '2026-04-05 01:58:50'),
(203, 'RobertIners', 'zekisuquc419@gmail.com', '82273529561', 'Hallo    wrote about your   prices', 'Salam, qiymətinizi bilmək istədim.', 0, '2026-04-05 07:48:23', '2026-04-05 07:48:23'),
(204, 'Elmer Lampungmeiua', 'lampungmeiua.elmer@googlemail.com', '7801889126', 'Question', 'Hi,\r\n\r\nThought this might be useful for your website.\r\n\r\nHere’s a free service that can help you push your site out wider across multiple classified sites with no manual posting.\r\n\r\nIf you want more eyes on your site, use this:\r\nhttps://classifiedsubmitter.com\r\n\r\nIt’s completely free and takes less effort than posting manually.\r\n\r\nIf you want more free traffic tools, let me know.', 0, '2026-04-05 21:05:08', '2026-04-05 21:05:08'),
(205, 'RobertIners', 'zekisuquc419@gmail.com', '82861483151', 'Hallo,   writing about your   price for reseller', 'Hi, I wanted to know your price.', 0, '2026-04-06 19:14:13', '2026-04-06 19:14:13'),
(206, 'Dick', 'sales@inoodex.com', '3166805487', 'Dick Sorlie', 'Good day \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF: https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nHave a great time, \r\n\r\nDick', 0, '2026-04-07 12:21:13', '2026-04-07 12:21:13'),
(207, 'Joanna Riggs', 'joannariggs278@gmail.com', '201853569', 'Video for inoodex.com', 'Hi,\r\n\r\nI just visited inoodex.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur prices start from just $195 (USD).\r\n\r\nLet me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna', 0, '2026-04-07 19:35:07', '2026-04-07 19:35:07'),
(208, 'Arlie Stonor', 'arlie.stonor@gmail.com', '8128721974', 'looking for answers', 'Tired of wasting your budget on leads that aren\'t a fit? Our Wealth Filter automatically skips low-income areas so your ads only reach the people who can afford your premium services. Simple, transparent, and high-impact.  http://www.topshelfpromotion.com', 0, '2026-04-07 21:26:35', '2026-04-07 21:26:35'),
(209, 'Norma Freedman', 'norma.freedman25@hotmail.com', '8324421423', 'Requesting more information', 'Every partial financing approval, every full credit decline, and every financed job with 5–15% merchant financing fees attached is quietly pulling revenue out of your business.\r\n\r\nMost contractors never calculate it.\r\n\r\nWhen they do, it\'s usually thousands of dollars a month in lost revenue and compressed margins.\r\n\r\nOur customer financing program recovers it. Here is what it delivers:\r\n\r\n+ 500 to 850 FICO: we approve the customers your current lender won\'t\r\n+ 0% for 21 months: the most competitive home improvement financing terms available\r\n+ Zero merchant fees: zero per-loan fees, your business keeps every dollar\r\n+ No need to switch: any contractor, any project, no restrictions of any kind\r\n\r\nWorks seamlessly alongside your existing lender or as your complete standalone program.\r\n\r\nSee full program info here: helloratesdealersolutions.com\r\nOr use the link in my signature. \r\n\r\nJames\r\nHelloRates Contractor Financing Solutions\r\nComplete financing coverage for any contractor\r\nCharleston, SC · helloratesdealersolutions.com\r\n\r\nIf you received this in error or would like to unsubscribe, visit helloratesdealersolutions.com/unsubscribe', 0, '2026-04-07 21:50:56', '2026-04-07 21:50:56'),
(210, 'Leta De Neeve', 'leta.deneeve@gmail.com', '6803621679', 'Hi inoodex.com Webmaster.', 'Hi,\r\n\r\n\r\nIf you\'re looking to build or scale your website or mobile app, we can help.\r\n\r\n\r\n\r\nWe offer reliable developers for hire and end-to-end web development services—flexible, fast, and cost-effective.\r\n\r\nWould you be open to a quick discussion?\r\n\r\ncontact us now at virgo.t3@gmail.com', 0, '2026-04-08 12:13:53', '2026-04-08 12:13:53'),
(211, 'Gemma Marshall', 'gemmamarshall811@gmail.com', '682093524', 'Instagram Growth: 300+ High Quality Followers Per Month', 'Hi,\r\n\r\nWe run a hands-on agency that helps clients\' Instagram accounts build authority and reach new audiences. Rather than just \"adding numbers,\" we focus on tangible benefits:\r\n\r\n1. Cheaper than Ads: We deliver targeted eyes on your profile for a fraction of the cost of running Instagram Ads.\r\n2. Real Community: We target users genuinely interested in your niche, leading to higher engagement and potential sales.\r\n3. 100% Account Safety: We don\'t use bots. Our team performs every action manually on actual smartphones, keeping your account secure.\r\n4. Consistent Results: Expect 300+ new, high-quality followers every month who actually stick around.\r\n\r\nWe are currently offering spots starting at just $60/month with no long-term contracts.\r\n\r\nI\'d be happy to forward you some further information if that would be of interest?\r\n\r\nKind Regards,\r\nGemma\r\n\r\nP.S. If you don\'t have a profile yet, we can handle the full setup and optimization for you.\r\n\r\nhttps://unsubscribe.social/unsubscribe.php?d=inoodex.com', 0, '2026-04-08 20:03:38', '2026-04-08 20:03:38'),
(212, 'RobertIners', 'zekisuquc419@gmail.com', '89743877452', 'Aloha, i am wrote about your the prices', 'Прывітанне, я хацеў даведацца Ваш прайс.', 0, '2026-04-09 02:11:59', '2026-04-09 02:11:59'),
(213, 'Elizabeth Levvy', 'levvy.elizabeth45@gmail.com', '676664322', 'need help', 'Resurrect your old customer list\r\n\r\nThat list of old customers gathering dust is pure profit. We use those \"dead\" emails and show your professional commercials directly to those homeowners on the big screen.\r\n\r\nOur system blocks low-income areas, making sure your money is focused on wealthy clients. \r\n\r\nIt’s one flat rate with no hidden middleman costs. Every dollar goes directly toward your inventory to your target customers.\r\n\r\nCheck your area here:\r\n\r\nhttp://www.topshelfpromotion.com', 0, '2026-04-10 02:15:05', '2026-04-10 02:15:05'),
(214, 'David A', 'd11@cpaserviceshub.pro', '486937388', 'Support', 'Hi,\r\n\r\n\r\n\r\nI am reaching out here in case my previous email didn\'t go through.\r\n\r\n\r\n\r\nInoodex Com <> Reddit & Quora\r\n\r\n\r\nRight now, Reddit and Quora threads are dominating Google\'s front page for buying-intent searches. When prospects research your brand or look for alternatives, they trust these peer discussions over traditional ads. \r\nIf your brand is missing from these conversations, your competitors or random users are shaping your narrative for you.\r\n\r\n\r\nI run stealth visibility campaigns to fix this. We monitor high-intent discussions on both platforms, provide technical value, and naturally position your product as the top recommendation, ensuring prospects see authority instead of silence.\r\n\r\nYou can see exactly how the strategy works here:\r\n\r\n\r\n\r\nDeck: https://partner.mini-clip.org/deck1\r\n\r\n\r\n\r\n\r\nIf this looks like a fit, I’d be happy to show you a few live examples of how this applies to your specific market.\r\n\r\n\r\nBest,\r\n\r\n\r\nDavid', 0, '2026-04-10 16:19:18', '2026-04-10 16:19:18'),
(215, 'Angeline Alderson', 'alderson.angeline@gmail.com', NULL, 'Quick YouTube question (for inoodex.com)', 'Hi,\r\n\r\nI came across inoodex.com and wanted to run something by you.\r\n\r\nMy team recently finished an 81-page YouTube guide specifically for website owners—whether you’re launching from scratch or trying to scale an existing channel in 2026.\r\n\r\nWe’ve just moved the guide to a \"Pay What You Want\" model. It’s valued at $28, but I wanted to make sure it’s accessible to fellow site owners regardless of their budget. You can grab it for the full price, the price of a coffee, or even $0 if things are tight right now.\r\n\r\nIf you’d like to see if the system fits your plans for this year, you can check it out here: https://furtherinfo.info/youtube\r\n\r\nAngeline', 0, '2026-04-10 19:36:34', '2026-04-10 19:36:34'),
(216, 'Demetrius Guenther', 'demetrius.guenther@googlemail.com', '642105888', 'Thought you’d want this', 'Hi,\r\n\r\nNoticed your business online and wanted to pass this along.\r\n\r\nThere’s a 100% free tool that lets you promote your site across multiple classified sites with a single submission.\r\n\r\nThis is it:\r\nwww.classifiedsubmitter.com\r\n\r\nIt’s totally free and takes under a minute.\r\n\r\nIf you want more free tools, let me know.', 0, '2026-04-10 21:56:09', '2026-04-10 21:56:09'),
(217, 'NATREGTEGH1343476NEWETREWT', 'ybfremui@polosmail.com', '86238859549', 'TORTYT1343476TIRTYRTTR', 'MERTYHRTHYHT1343476MARTHHDF', 0, '2026-04-11 00:30:05', '2026-04-11 00:30:05'),
(218, 'DavidZep', 'no.reply.ChristopherPersson@gmail.com', '83396649468', 'Are you looking for a cost-effective and innovative advertising solution for a minimal cost?', 'Salutations! inoodex.com, \r\nI discovered inoodex.com while browsing online pages. \r\nWe help companies introduce their services using website contact pages. \r\nMany companies use online communication to create new opportunities. \r\nThe platform provides flexible pricing depending on usage. \r\n  \r\nIf this idea might interest you, feel free to contact us. \r\n \r\nThanks for taking a moment to read this. \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nWhatsApp - +375259112693 \r\nWhatsApp  https://wa.me/+375259112693', 0, '2026-04-11 20:18:42', '2026-04-11 20:18:42'),
(219, 'RobertIners', 'zekisuquc419@gmail.com', '83952817913', 'Hallo, i write about     price for reseller', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', 0, '2026-04-14 06:23:43', '2026-04-14 06:23:43'),
(220, 'Eric Jones', 'ericjonesmyemail@gmail.com', '555-555-1212', 'Strike when the iron’s hot', 'Hello Inoodex Com Owner,\r\n\r\nMy name is Eric and I’m betting you’d like your website Inoodex Com to generate more leads.\r\n\r\nHere’s how:\r\n\r\nWeb Visitors Into Leads is a software widget that works on your site, ready to capture any visitor’s Name, Email address, and Phone Number. It signals you as soon as they say they’re interested – so that you can talk to that lead while they’re still there at Inoodex Com.\r\n\r\nVisit https://blastleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation quickly… which is so powerful because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just how are you doing? notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n\r\nVisit https://blastleadgeneration.com to discover what Web Visitors Into Leads can do for your business, potentially converting up to 100 times more eyeballs into leads today!\r\n\r\nEric\r\n\r\nPS: Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment. Don’t keep losing them.\r\nWeb Visitors Into Leads offers a complimentary 14-day trial – and it even includes International Long Distance Calling.\r\nYou have customers waiting to talk with you right now… don’t keep them waiting.\r\nVisit https://blastleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://blastleadgeneration.com/unsubscribe.aspx?d=inoodex.com', 0, '2026-04-14 12:44:16', '2026-04-14 12:44:16'),
(221, 'Corey Johns', 'corey.johns@gmail.com', '658903420', 'Hi inoodex.com Admin.', 'We improve MOZ Domain authority 30+ in 15 Days its help to improve google rank, improve your website SEO, and you get traffic from google\r\n\r\nDA - 0 to 40 - (Only $29) - Yes, Limited time !!\r\n\r\n>> 100% Guarantee\r\n>> Improve Ranking\r\n>> White Hat Process\r\n>> Permanent Work\r\n>> 100% Manual Work\r\n>> 0% Spam score increase\r\n\r\n⚡ From our work your website keyword get rank on google and get organic traffic from google through keywords.\r\n\r\nContact now: intrug@gmail.com', 0, '2026-04-15 11:36:00', '2026-04-15 11:36:00'),
(222, 'Tracy Hacking', 'hacking.tracy@googlemail.com', '60237376', 'Seeking your expertise', 'The most prepared business owners all have one thing in common. They already know their number.\r\n\r\nBenchmarking your business borrowing power every quarter is the recommended frequency that keeps you confident and ready for unexpected cash flow challenges, emergencies, and exciting business opportunities.\r\n\r\nOur simple 2-minute borrowing power check is used by thousands of businesses monthly to confirm their:\r\n→ Maximum funding potential → Market rate → Loan term options → Payment\r\nSo you never have to guess when the need is present.\r\n\r\nIf you don\'t know your number yet, it takes 2 minutes and costs nothing to find out.\r\nGet My Number www.helloratesfastfunding.com\r\n\r\nNo credit impact. No obligation. No spam.\r\nJust confidence in how your business can work for you.\r\n\r\nRyan \r\nSenior Business Funding Advisor, HelloRates', 0, '2026-04-16 21:34:50', '2026-04-16 21:34:50'),
(223, 'Chastity Jung', 'chastity.jung16@yahoo.com', '7740152384', 'Can you help me with this?', 'The most prepared business owners all have one thing in common. They already know their number.\r\n\r\nBenchmarking your business borrowing power every quarter is the recommended frequency that keeps you confident and ready for unexpected cash flow challenges, emergencies, and exciting business opportunities.\r\n\r\nOur simple 2-minute borrowing power check is used by thousands of businesses monthly to confirm their:\r\n→ Maximum funding potential → Market rate → Loan term options → Payment\r\nSo you never have to guess when the need is present.\r\n\r\nIf you don\'t know your number yet, it takes 2 minutes and costs nothing to find out.\r\nGet My Number www.helloratesfastfunding.com\r\n\r\nNo credit impact. No obligation. No spam.\r\nJust confidence in how your business can work for you.\r\n\r\nRyan \r\nSenior Business Funding Advisor, HelloRates', 0, '2026-04-17 06:18:15', '2026-04-17 06:18:15'),
(224, 'Ronalderymn', 'jacksrenome@gmx.com', '83862133938', 'Aaaqfjfwkdjifiefowkd foekdwdeoghiejijgero jojfw', 'YyErjcwdkdjwjjwjjdwjddjwsjf ndsaKAqwdweihduncbbwebidaa iudwnishqwuvdwqihbfvweuiojsqjqioqdefiw dwqsqwijbfiewdncbhvdifqhioqsjnqw inoodex.com', 0, '2026-04-17 10:53:55', '2026-04-17 10:53:55'),
(225, 'Isabelle Garber', 'garber.isabelle@googlemail.com', '1142166659', 'A quick question', 'Hello,\r\n\r\nThought this might be useful for your website.\r\n\r\nI wanted to share a free resource that helps you boost your online visibility across multiple classified sites with just a few clicks.\r\n\r\nIf you want fast exposure, here’s the link:\r\nclassifiedsubmitter.com\r\n\r\nIt’s a free traffic booster and takes less time than submitting to even one site manually.\r\n\r\nI can send more ways to promote your site if you want.', 0, '2026-04-17 14:01:33', '2026-04-17 14:01:33'),
(226, 'Alexandria Edye', 'edye.alexandria@outlook.com', '48225452', 'Checking in', 'The Risk Angle\r\nNot knowing your business borrowing power is a risk most owners don\'t realize they\'re carrying.\r\n\r\nSmart business owners update and benchmark their business borrowing power on a quarterly basis.\r\nIt\'s the recommended frequency because cash flow challenges, equipment failures, and exciting opportunities rarely announce themselves in advance.\r\n\r\nOur simple 2-minute borrowing power check is used by thousands of businesses monthly to confirm their:\r\n→ Maximum funding potential → Market rate → Loan term options → Payment\r\nSo you never have to guess when the need is present.\r\n\r\nAt least find out where you stand. It takes 2 minutes and costs nothing.\r\nGet My Number www.helloratesfastfunding.com\r\n\r\nNo credit impact. No obligation. No spam.\r\nJust confidence in how your business can work for you.\r\n\r\nRyan \r\nSenior Business Funding Advisor, HelloRates\r\nHelloRates Business Funding Solutions helps thousands of businesses explore commercial financing options. This is not a credit application. Checking your borrowing power has no impact on your credit score. Offer only available to US based businesses.', 0, '2026-04-17 15:05:59', '2026-04-17 15:05:59'),
(227, 'Jayrn Smith', 'mawson.abby@gmail.com', '134618913', '[From Jayrn]The Single Marketing Number That Will Crush Your Competition', 'Hi, it’s Jayrn.\r\n\r\nEvery market has one rule: He who can spend the most to acquire a customer, wins. But here’s the question nobody answers: How do you actually do it?\r\n\r\nIn this video, Darcy Juarez walk through the single number that separates the amateurs from the market dominators—Maximum Allowable Cost Per Acquisition. \r\n\r\nGet this wrong, and you’ll bleed cash. Get it right, and you’ll buy customers at scale while your competitors are stuck Googling cheaper ad hacks.\r\n\r\nWatch it here: https://marketersmentor.com/crush-your-competition.php?refer=inoodex.com\r\n\r\n\r\nTo multiplying your leverage,\r\nJayrn\r\n\r\nP.S.: I’m Jayrn, a digital marketer and e-commerce seller with a passion for sharing knowledge. I share proven strategies, tips, and resources to help you grow your online business.\r\n\r\n\r\n\r\nMy Blog:\r\nhttps://www.jayrn.com\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=inoodex.com', 0, '2026-04-17 20:14:11', '2026-04-17 20:14:11'),
(228, 'Jayrn Smith', 'georgianna.birmingham@outlook.com', '6645652354', '[From Jayrn] The Referral System Most Businesses Miss', 'Hi, it’s Jayrn.\r\n\r\nIf you\'re tired of leaving your business\'s growth up to chance, it\'s time to take control of your referrals. \r\n\r\nIn this video, join Darcy Juarez and marketing legend Dan Kennedy as they dive deep into the art and science of creating a magnetic referral system that will revolutionize your business.\r\n\r\nDan Kennedy emphasizes the critical importance of maximizing referrals, pointing out that without a solid referral strategy, you\'re wasting the majority of your marketing budget. \r\n\r\nMost businesses underperform in obtaining referrals, largely due to a lack of strategy and tracking.\r\n\r\nWatch it here: https://marketersmentor.com/referral-system.php?refer=inoodex.com\r\n\r\n\r\nTo multiplying your leverage,\r\nJayrn\r\n\r\nP.S.: I’m Jayrn, a digital marketer and e-commerce seller with a passion for sharing knowledge. I share proven strategies, tips, and resources to help you grow your online business.\r\n\r\n\r\n\r\nMy Blog:\r\nhttps://www.jayrn.com\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=inoodex.com', 0, '2026-04-19 20:33:05', '2026-04-19 20:33:05'),
(229, 'Garfield Henegar', 'henegar.garfield@outlook.com', '292179269', 'seeking information', 'Convert your old quotes into TV ads\r\n\r\nYour database of past quotes gathering dust is pure profit. We take those \"dead\" emails and broadcast your TV ads directly to those homeowners on the big screen.\r\n\r\nOur Wealth Filter blocks low-income areas, making sure your money is focused on homeowners who can actually pay. \r\n\r\nIt’s a simple flat rate with zero management fees. 100% of your spend buys showing your ads to your target customers.\r\n\r\nCheck your area here:\r\n\r\nhttps://www.topshelfpromotion.com', 0, '2026-04-20 00:43:11', '2026-04-20 00:43:11'),
(230, 'RobertIners', 'zekisuquc419@gmail.com', '87713535296', 'Hi,   wrote about   the price for reseller', 'Hi, roeddwn i eisiau gwybod eich pris.', 0, '2026-04-20 01:50:19', '2026-04-20 01:50:19'),
(231, 'Mona', 'sales@larnach.bangeshop.com', '485364662', 'Mona Larnach', 'Good day, \r\n\r\nI hope this email finds you well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nBange is perfect for students, professionals and travelers. The backpacks and sling bags feature a built-in USB charging port, making it easy to charge your devices on the go.  Also they are waterproof and anti-theft design, making it ideal for carrying your valuables.\r\n\r\nBoth bags are made of durable and high-quality materials, and are perfect for everyday use or travel.\r\n\r\nOrder yours now at 50% OFF with FREE Shipping: http://bangeshop.com\r\n\r\nCheers,\r\n\r\nMona', 0, '2026-04-20 03:32:47', '2026-04-20 03:32:47'),
(232, 'RobertIners', 'zekisuquc419@gmail.com', '87434827657', 'Hallo  i am writing about   the prices', 'Hi, ego volo scire vestri pretium.', 0, '2026-04-20 18:28:34', '2026-04-20 18:28:34'),
(233, 'Daniel Wright', 'daniel.wright@jmailservice.com', '8054002077', 'More Searches. More Clicks. More Customers.', 'In most industries, only a limited number of businesses can secure premium keyword placements.\r\n\r\nIf there are specific search terms you\'d like to control, now is the time to check availability.\r\n\r\nSend me:\r\n - Your website\r\n - The keywords you want to target\r\n\r\nI\'ll confirm availability and provide guaranteed traffic projections.\r\n\r\nLet\'s secure them before your competitors do.', 0, '2026-04-22 08:54:42', '2026-04-22 08:54:42'),
(234, 'RobertIners', 'zekisuquc419@gmail.com', '86775988112', 'Hallo  i am wrote about your the price', 'Salam, qiymətinizi bilmək istədim.', 0, '2026-04-23 06:13:13', '2026-04-23 06:13:13');
INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(235, 'Jayrn Smith', 'luisa.schwartz@msn.com', '7708804028', '[From Jayrn] Why most people stay stuck (even working hard)', 'Hey, it’s Jayrn.\r\n\r\nThere’s a pattern I keep seeing…\r\n\r\nPeople who *work hard*, try different strategies, even invest in tools…\r\n\r\n…but still don’t see consistent results.\r\n\r\nIt’s not because they’re lazy.\r\nIt’s not because they’re unlucky.\r\n\r\nIt’s because they’re following **disconnected advice**.\r\n\r\nOne strategy here.\r\nAnother tactic there.\r\n\r\nNo real understanding of what actually drives revenue.\r\n\r\nAnd when you don’t understand the “why”…\r\n\r\nYou’re stuck guessing.\r\n\r\n---\r\n\r\nThat’s exactly where I was.\r\n\r\nUntil I started studying something different:\r\n\r\nNot surface-level tactics…\r\n\r\n…but the **actual thinking behind successful marketing campaigns**.\r\n\r\nThat’s when things finally started to click.\r\n\r\n---\r\n\r\nIf you want to see what I mean, take a look at this:\r\n\r\n������ https://marketersmentor.com/NO-BS-Letter.php?refer=inoodex.com\r\n\r\nEven just reading the page will shift how you think about marketing.\r\n\r\nMore tomorrow.\r\n\r\n—\r\nJayrn\r\n\r\nP.S.: I’m Jayrn, a digital marketer and e-commerce seller with a passion for sharing knowledge. I share proven strategies, tips, and resources to help you grow your online business.\r\n\r\n\r\n\r\nMy Blog:\r\nhttps://www.jayrn.com\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=inoodex.com', 0, '2026-04-25 20:06:30', '2026-04-25 20:06:30'),
(236, 'NAERTERHTE128113NERTHRRTH', 'yxxoiipe@duhastmail.com', '89442693986', 'TOTYJTRT128113TIRTYTH', 'METRYTRH128113MAWRERGTRH', 0, '2026-04-29 19:18:31', '2026-04-29 19:18:31'),
(237, 'RobertIners', 'zekisuquc419@gmail.com', '83939656782', 'Aloha, i am wrote about your   price', 'Salut, ech wollt Äre Präis wëssen.', 0, '2026-04-30 08:38:47', '2026-04-30 08:38:47'),
(238, 'NAEWTRER559479NEWETREWT', 'svvbvbfn@bekommenmail.com', '83337153626', 'TORTYT559479TIGFHFGER', 'MEYJYTJY559479MAYTRYR', 0, '2026-04-30 20:49:09', '2026-04-30 20:49:09'),
(239, 'RobertIners', 'zekisuquc419@gmail.com', '88494315166', 'Hi, i write about   the prices', 'Salut, ech wollt Äre Präis wëssen.', 0, '2026-04-30 21:50:48', '2026-04-30 21:50:48'),
(240, 'Sophie Lane', 'sophie@sendproud.com', '2155394452', 'Guaranteed results or your money back', 'Hi, I’m Sophie! I tried to find you on LinkedIn but couldn’t, so I’m reaching out here. I help businesses book meetings, drive traffic, and generate user sign ups through targeted outreach using my extensive private network, built over 12+ years, with access to over 100 million contacts. We’ll have a quick call to set a clear goal for your business, and I’ll personally work to make sure we reach it. You choose the result you want, whether that’s booked meetings, website traffic, user sign ups, or another measurable outcome, and if I fall short by even one, I’ll refund your money in full. Schedule a time with me here: https://calendly.com/sendproud/30min', 0, '2026-05-01 18:30:18', '2026-05-01 18:30:18'),
(241, 'RobertIners', 'zekisuquc419@gmail.com', '86627256133', 'Hello  i am write about   the price', 'Sveiki, aš norėjau sužinoti jūsų kainą.', 0, '2026-05-08 23:39:04', '2026-05-08 23:39:04'),
(242, 'Samuel Everett', 'samuel.everett@jmailservice.com', '8054002077', 'Start Getting Leads Tomorrow', 'We\'ve developed a unique advertising platform that places your business directly in front of people searching for your service - no waiting, no complex setup.\r\nCampaigns usually go live in one day, and you can update your keywords anytime at no extra cost.\r\nWould you like me to show you a few examples from your industry?', 0, '2026-05-09 08:17:42', '2026-05-09 08:17:42'),
(243, 'Mae Wilken', 'wilken.mae@gmail.com', '3104695553', 'Do you need advanced proxies for inoodex.com?', 'Want stable Proxy platforms for Inoodex Com?\r\n\r\nFor those who need reliable connections, this is exactly what you need. You get fast throughput, quick access, and affordable plans with guaranteed uptime.\r\n\r\nGet started today here: https://fas.st/t/4Sd3661X\r\n\r\nBest regards, Mae', 0, '2026-05-14 20:42:27', '2026-05-14 20:42:27'),
(244, 'Andrew Collins', 'andrew.collins@jmailservice.com', '8054002077', 'Should I Close This Out?', 'We drive targeted visitors straight to your website - and your campaign can go live by tomorrow.\r\nAre you interested?', 0, '2026-05-20 14:46:50', '2026-05-20 14:46:50'),
(245, 'Barry', 'sales@inoodex.com', '488469361', 'Barry Sturgeon', 'Hey there \r\n\r\nLooking to improve your posture and live a healthier life? Our Medico Postura™ Body Posture Corrector is here to help!\r\n\r\nExperience instant posture improvement with Medico Postura™. This easy-to-use device can be worn anywhere, anytime – at home, work, or even while you sleep.\r\n\r\nMade from lightweight, breathable fabric, it ensures comfort all day long.\r\n\r\nGrab it today at a fantastic 60% OFF: https://medicopostura.com\r\n\r\nPlus, enjoy FREE shipping for today only!\r\n\r\nDon\'t miss out on this amazing deal. Get yours now and start transforming your posture!\r\n\r\nBest Wishes, \r\n\r\nBarry', 0, '2026-05-27 07:01:12', '2026-05-27 07:01:12'),
(246, 'RobertIners', 'zekisuquc419@gmail.com', '81167229953', 'Aloha, i write about   the prices', 'Dia duit, theastaigh uaim do phraghas a fháil.', 0, '2026-06-01 19:57:54', '2026-06-01 19:57:54'),
(247, 'RobertIners', 'zekisuquc419@gmail.com', '89735463453', 'Hi, i write about your   price', 'Hi, ego volo scire vestri pretium.', 0, '2026-06-04 12:11:08', '2026-06-04 12:11:08'),
(248, 'Karri', 'sales@inoodex.com', NULL, 'Karri Dejesus', 'Morning \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF: https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nCheers, \r\n\r\nKarri', 0, '2026-06-05 19:46:24', '2026-06-05 19:46:24'),
(249, 'RobertIners', 'zekisuquc419@gmail.com', '87446757426', 'Hallo  i wrote about   the price for reseller', 'Hola, volia saber el seu preu.', 0, '2026-06-06 18:53:16', '2026-06-06 18:53:16'),
(250, 'Gemma Marshall', 'gemma.marshall112@gmail.com', '4116898883', 'Instagram Growth', 'Hi,\r\n\r\nI’m reaching out because we help brands connected to inoodex.com build authority on Instagram.\r\n\r\nWe use our customized AI system, mixed with natural manual interaction to drive niche-relevant followers to your page safely.\r\n\r\nOpen to finding out more about this?\r\n\r\nGemma', 0, '2026-06-13 16:12:51', '2026-06-13 16:12:51'),
(251, 'Christopher Hughes', 'christopher.hughes@jmailservice.com', '8054002077', 'Get More Clicks Without Waiting Weeks', 'We make it easy to capture customers at the exact moment they\'re searching online. Our system places your brand at the top of search results within a single day, and all clicks lead directly to your website.\r\nYou can track everything yourself inside Google Analytics.\r\nWould you like a short overview of how it works?', 0, '2026-06-16 09:58:21', '2026-06-16 09:58:21'),
(252, 'RobertIners', 'zekisuquc419@gmail.com', '83934913219', 'Hi,   wrote about   the price', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', 0, '2026-06-26 04:52:34', '2026-06-26 04:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hero_sliders`
--

CREATE TABLE `hero_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_24_105719_add_is_admin_to_users_table', 1),
(5, '2025_09_24_111259_create_blogs_table', 1),
(6, '2025_09_25_041418_create_portfolios_table', 1),
(7, '2025_09_27_052426_create_contacts_table', 1),
(8, '2025_09_27_054901_create_products_table', 1),
(9, '2025_09_27_070849_create_categories_table', 1),
(10, '2025_09_29_052625_create_teams_table', 1),
(11, '2025_10_15_070358_create_themes_table', 2),
(12, '2025_11_02_071903_create_contact_messages_table', 3),
(13, '2025_11_02_071904_create_contact_messages_table', 4),
(14, '2025_11_02_101725_create_partners_table', 5),
(15, '2025_12_30_115728_create_hero_sliders_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'INSPACE', '<p>INSPACE Construction</p>', 'uploads/partners/YOHmpSAplttCsirCw4GZmQH6luSkAtv9G1kDjo8O.png', '2025-11-02 05:15:55', '2025-12-30 19:25:11'),
(5, 'Islamicsomahar', NULL, 'uploads/partners/Mz82hFrP4bwkLvBzlagzh1QdNcLwPciYSuvro9qY.png', '2025-12-31 20:24:28', '2025-12-31 20:25:31'),
(6, 'Vhorer Somoy', NULL, 'uploads/partners/PneaglIT34VcehK9ARD9rTbnh5zln7sT8mz41Zhg.jpg', '2025-12-31 20:27:41', '2025-12-31 20:27:41'),
(7, 'Voice of Bangladesh', NULL, 'uploads/partners/bcWjV6G8GajfHx4eqTfIbZUX0J89fhrNNmHW2O0q.png', '2025-12-31 20:28:03', '2025-12-31 20:28:03'),
(8, 'Mega PC Solution', NULL, 'uploads/partners/WVDWn0nUDBeKxrLxmrIeK57K04uHdXPrVsRCt9be.png', '2025-12-31 20:29:04', '2025-12-31 20:29:04'),
(9, 'Joya', NULL, 'uploads/partners/NcgpqhB0iNQCo07RT8KDYHE1KArpu2RN8lYzGyc2.png', '2025-12-31 20:29:21', '2025-12-31 20:29:21'),
(10, 'CAD', NULL, 'uploads/partners/4UKRggoW4X9NyOoPnnx5dvcWsWqUegoKrm5cSZGv.png', '2025-12-31 20:30:13', '2025-12-31 20:30:13'),
(11, 'Tatkotha', NULL, 'uploads/partners/oTeZgdRvC5YCQVH9Kc5ZfB514gsg0T2fO7OS6bnI.png', '2025-12-31 20:30:37', '2025-12-31 20:30:37'),
(12, 'Electronics Parts BD', NULL, 'uploads/partners/z1j4K7kY29fvmqPL48Vwd0sNZFP4yzWWmKKAT22W.png', '2025-12-31 20:31:22', '2025-12-31 20:31:22'),
(13, 'Members Uniform', NULL, 'uploads/partners/wM4TUkja1pODxtrRFS6MH6DgKk8Oa9HtdHifrfud.png', '2025-12-31 20:32:27', '2025-12-31 20:32:27'),
(14, 'Foveero', NULL, 'uploads/partners/iqErD4IWQhWglJnOujCFb0BcJ5h56tUWz1acn0gG.png', '2025-12-31 20:33:58', '2025-12-31 20:33:58'),
(15, 'Sohoz Ltd', NULL, 'uploads/partners/ar9XTuNxIUtN995Ocutt6KZ0yd6TDc2MM0UI2MqG.png', '2025-12-31 20:34:53', '2025-12-31 20:34:53'),
(16, 'Ayash E-bazar', NULL, 'uploads/partners/o6yyQbJqLOP2upizdjNCQJaHnDCHOuGf07FKnN87.png', '2025-12-31 20:35:46', '2025-12-31 20:35:46'),
(17, 'DTS Consultancy', NULL, 'uploads/partners/cbhVnxxzaBMbbf1M81WgzZTSySbcdd8pomRtoL6j.jpg', '2025-12-31 20:39:53', '2025-12-31 20:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `demo_url` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `category_id`, `description`, `image`, `demo_url`, `status`, `created_at`, `updated_at`) VALUES
(9, 'USA Trending', '6', '<p>USA Trending is a blog site based on USA.</p>', 'portfolios/Y3cJWYVx3jFtOjlAOGDCovWjDmtaoGksyyZPUJt1.png', 'https://www.usatrending24.com/', 'active', '2025-11-16 22:04:47', '2025-12-31 19:57:56'),
(10, 'Islamic Somahar', '6', '<p>Islamic Somahar this is islamic blog site based on bangladesh.</p>', 'portfolios/qpdrsuKwriAAXCVS3tqJRR4m545Hh0DSOK8DXiWu.png', 'https://www.islamicsomahar.com', 'active', '2025-11-18 22:04:58', '2025-12-31 19:57:39'),
(11, 'Hawlader Shop', '7', '<p>Hawlader Shop is e-commerce website.</p>', 'portfolios/RqVQeeZHoF5HhRzHnfYIJeyfpdJxQLXb9TN5gztD.png', 'https://hawladershop.com/', 'active', '2025-11-18 22:10:21', '2025-12-31 19:57:19'),
(12, 'CAD Consultant BD', '5', '<p>CAD Consultant BD is a construction and consulting company</p>', 'portfolios/zeeH4P63U3iigtMQgU0wBadnvj7Ki4bnyPlAL9cl.png', 'https://cadconsultantsbd.com/', 'active', '2025-11-18 22:13:37', '2025-12-31 19:57:05'),
(13, 'Electronics Parts BD', '7', '<p>Electronics Parts BD is an E-commerce Website.</p>', 'portfolios/X9fndE84w0a1t3OsVf5Vb2oH9EuLbTdy284Unu5G.png', 'https://www.electronicspartsbd.com/', 'active', '2025-11-18 23:21:11', '2025-12-31 19:56:51'),
(14, 'Tatkotha Online Shop', '7', '<p>Tatkotha Online Shop</p>', 'portfolios/Vf8zqqv6Ot21MMC6lQTTdBlCTaC6T6QmHWtiPjhH.png', 'https://www.tatkotha.com/', 'active', '2025-11-18 23:33:03', '2025-12-31 19:56:34'),
(15, 'Foveero', '5', '<p>Foveero Interior Company</p>', 'portfolios/U9h7TIDzktouO5sLSrQ1dT2TEACEEi5yOxNTD1So.png', 'https://foveero.com/', 'active', '2025-11-18 23:53:25', '2025-12-31 19:54:11'),
(16, 'Members Uniform', '7', '<p>Members Uniform an e-commerce based on Dubai</p>', 'portfolios/ZKd5h2fWXTRerRfPL83qUuAYKvdenVOAyPM6PGq3.png', 'https://www.membersuniform.com/', 'active', '2025-11-19 00:02:08', '2025-12-31 19:53:36'),
(17, 'Somantoral Group', '5', '<p>Somantoral Group Architecture and Construction Firm</p>', 'portfolios/WNNJuvanfo8zRfNpIrI7GGje4WBXvOVHDZiJPDtl.jpg', 'https://www.somantoralgroup.com/', 'active', '2025-11-19 00:14:28', '2025-12-31 19:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `category_id` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_url` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category_id`, `image`, `product_url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Inventory Management', 'Inventory Management', '1', 'products/U0cRB8N3thMOcPVnTWxoVC53CB1tH5yrpTxUgLpG.png', 'https://inoodex.com/portfolio', 'active', '2025-09-29 07:03:46', '2025-12-31 20:18:03'),
(4, 'E-commerce', '<p>E-commerce</p>', '7', 'products/u0ax2X0q8eGKhA2YtF9DeRVlrPDYT0dU9HPhWhBl.jpg', 'https://inoodex.com', 'active', '2025-11-16 22:45:27', '2025-12-31 20:17:04'),
(5, 'School Management Software', '<p>School Management Software in Bangladesh</p>', '9', 'products/o4pxqWZlvHRK8PLVpBPx99TFwONKY0HzMzmU2ooe.jpg', 'https://education.inoodex.com/', 'active', '2026-01-07 19:52:49', '2026-01-07 19:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0IxqH6GLiK2fSk6wVheMzPxOILvwjgXUNw4v35r0', NULL, '162.0.235.62', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36 CloudflareWebScanner/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicDNQazRrYlptbTdTOTVHUjdYclgyU0tKVEhiNE16a0JZSkxVRGJobiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vaW5vb2RleC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1782615225),
('5yXNjZtFiWAX0wivk8bGjIxB6dV5cHjOElUPQ1Ps', NULL, '162.0.235.62', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVW1TdUhLVGRBcDRRWE1VMmRkY2VaUk9VVzZNS2dETXJ5S2xtYWZUQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vaW5vb2RleC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1782603667),
('AKAjjRNW8MBgKB2qZyhgf0o1WoGnXKLblnZOrEvP', NULL, '162.0.235.62', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWUtIVzRBOGN0NGdtTlFxZHdmTTlZRVYzRVNualBhcUY1aGdVSTBJTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vaW5vb2RleC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1782611144),
('CMEDJLcUTHMt9wOH0Hb1uS9WAOxVoOf2XUnfT1up', NULL, '162.0.235.62', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZnYybkd0Y08wVGg3MjY2VXhuT2tIWkY2VTNHYlRselV0RkJ4TlNMcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaW5vb2RleC5jb20vY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1782605426),
('DV3IHlkDnKQhVu0BLcxKeih9d1cpSPCiYjhS6y1r', NULL, '162.0.235.62', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHNSUGhIc2hoQVNxdklPdDBkN3VnS25uV2NNWGl3QXJHVnpXN2lqQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vd3d3Lmlub29kZXguY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1782618593),
('GfqFkEl8rAD3ESd6thnNyjnmRc8e1cqxHjdtjhvp', NULL, '162.0.235.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0g1blR0VWZtNjVFZk1RaVA5NFBKc1JodlNEQ0hwbUEySDdQNXNXVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vaW5vb2RleC5jb20vc29mdHdhcmUtZGV2ZWxvcG1lbnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1782622654),
('hkgZaI9xE7K2pNlYvMSM4uJl4tGl9z1l89BBq2q6', NULL, '162.0.235.62', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNFpxQm95UE1XeXJ6cGNuVmN5cTU5NXY0VWNmTFhONnZoYnpDcmgyeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vaW5vb2RleC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1782623938),
('l2qgj38rkqrWmCzPzCdwusr6mKVWzyA2S6giuLnE', NULL, '162.0.235.62', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOTZheDBPdURYY1I5MVhZUldIVFVYRUpxUURwU29vUkJTUFpCRUFINSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHBzOi8vd3d3Lmlub29kZXguY29tL2Jsb2dzL2hvdy10by1wcm90ZWN0LWEtd2Vic2l0ZS1mcm9tLWhhY2tlcnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1782608423),
('mxG0kAfv3bs6rqSsWQ5KLz976bPquZfBu3rGiwls', NULL, '162.0.235.62', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (HTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia2NBSTRjMk1WNGtVTzg5dDJsdGlJZGZnNGlMTmxJZHUxbTdobkF2eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzg6Imh0dHBzOi8vaW5vb2RleC5jb20vYmxvZ3MvaG93LWh5cGVyLXBlcnNvbmFsaXphdGlvbi1pbmNyZWFzZXMtY3VzdG9tZXItbG95YWx0eSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1782609469),
('oOFG5IU9ZkDB8edsyrzxtKXrDY8gDvQEdK2hioJn', NULL, '162.0.235.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.122 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRVBBQ2FaMnFpZFNTaE90U0ZrNndyamszaHA2aGdEaWtnbThBYmRkciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vd3d3Lmlub29kZXguY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1782602001),
('PxQbaE5xCvL3VznqCgFlGepqwOr8wBfxZoqxTKj1', NULL, '162.0.235.62', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiemUwaFFCallERzdMN245MkJ6T2szVjl3YWlSdHB6dmJVUUZ2b0NybCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vaW5vb2RleC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1782611144),
('VbczxIvLE5eyzosRR2VaYhloMwZWijeMSxTDJBQC', NULL, '162.0.235.62', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (HTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibFVjRmE4dnpHR0ljdFBHSDh2dk1ubXhhU3FiZXl2dnVzR2pZZjJTSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vaW5vb2RleC5jb20vcG9ydGZvbGlvLzE3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1782611439),
('VLodCBWxasPoQa1meVCsEEG331MgJ10wNiFF0vor', NULL, '162.0.235.62', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRkppeFI4SEZBZGx0UHhsRmhSc0RzS1ZJdXYzWmhsTzA1QjNSQVg1MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vaW5vb2RleC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1782611144),
('xk9SyNDPFeDaWl8UV6nFPyU8uGDMY4zvO7IpNw9N', NULL, '162.0.235.62', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWE1wMzhqaGdxYnFUQVlKb2NqSDkyN2NEVVhCTnNOYkZyazF2Y2toUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vaW5vb2RleC5jb20vcG9ydGZvbGlvLzE1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1782606820),
('zv8PdxMRvEqTkGfXNyb7uuaCovkxg0cuozZNSnLo', NULL, '162.0.235.62', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGoxNWdJZnh0dGVNTFd5UGpIdW9qeGZ4b09DTFlLTExQZFdJemlqciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vd3d3Lmlub29kZXguY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1782608102);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `image`, `bio`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Jr. Developer', 'teams/gjYzIjMDdJDQUYfYRNVAwS50boVlFVEqbFMlqpeC', '<p><em><strong>Test</strong></em></p>', 'active', '2025-10-14 05:54:15', '2026-06-06 18:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `image` varchar(255) DEFAULT NULL,
  `demo_url` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `title`, `description`, `category_id`, `price`, `image`, `demo_url`, `status`, `created_at`, `updated_at`) VALUES
(4, 'School Website -Demo 1', '<p>School Website -Demo 1</p>', '9', 30.00, 'themes/hgyNr34mqL3wd7OkEC46ZJNave4kcNosu3aroFfG.jpg', 'https://education.inoodex.com/', 'active', '2025-10-15 05:51:01', '2026-04-07 07:44:12'),
(5, 'School website Demo 2', '<p>School website Demo 2</p>', '9', 30.00, 'themes/PwdkxB0jbI7faImceYDJYERiJ1hEiNCNBdN9ONwQ.jpg', 'https://education.inoodex.com/demo2/', 'active', '2025-11-21 03:10:14', '2026-04-07 07:41:31'),
(6, 'School website Demo 3', '<p>School website Demo 3</p>', '9', 30.00, 'themes/Kxo5rpQk81soqbNIAXQCoDvPDXoSqbuU6I7PMxG9.jpg', 'https://education.inoodex.com/demo3/', 'active', '2025-11-21 03:14:15', '2026-04-07 07:38:58'),
(7, 'School website Demo 4', '<p>School website Demo 4</p>', '9', 30.00, 'themes/vHMLhVoMBXCyivtM33jBLJh2DfZvyYYnLqn7Lidh.jpg', 'https://education.inoodex.com/demo4/', 'active', '2025-11-21 03:17:37', '2026-04-07 07:34:57'),
(8, 'Clothing & Fashion E-commerce Website', '<p>Clothing &amp; Fashion E-commerce Website</p>', '7', 50.00, 'themes/hYkuBJoFUJ65mxkNr2a4E5E1sCfTWl8p0fDsxguU.jpg', 'https://cloth-inoodex.netlify.app/', 'active', '2025-11-21 03:27:23', '2026-04-07 07:31:30'),
(9, 'Interior Decor E-commerce Theme', '<p>Interior Decor E-commerce Theme</p>', '7', 30.00, 'themes/223sCVZO7EmdMAq49DRcM5J6gfHvTakWC5TB2Fvv.jpg', 'https://interior-inoodex.netlify.app/', 'active', '2025-11-23 04:22:04', '2026-04-07 07:18:01'),
(10, 'Grocery Shop E-commerce Theme', '<p>Grocery Shop E-commerce Theme</p>', '7', 30.00, 'themes/zVrCWrCQFIqdKIxkxwvbcLkPjKgxm9qSLHHJP8uQ.jpg', 'https://ecom-inoodex.netlify.app/', 'active', '2025-11-23 04:29:19', '2026-04-07 07:13:18'),
(11, 'Medical Hospital Website theme', '<p>Medical Hospital Website theme</p>', '2', 30.00, 'themes/F691awQF5akmnDOauwKAliA9zEPKUMjigkcWNtOr.jpg', 'https://inoo-medical.netlify.app/', 'active', '2025-11-23 04:39:09', '2026-04-06 08:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(2, 'Inoodex', 'hello@inoodex.com', NULL, '$2y$12$LBxjPRGE90z/ZjlanaRV5OlZwKq603H5nafN9JQ1pFjoCvYDIjjZS', NULL, '2026-03-29 09:57:54', '2026-03-29 09:57:54', 0),
(3, 'adminexs', 'adminexs@gmail.com', NULL, '$2y$12$Oam0Pp9CVPldbTgcUNRANewPpBZDIj71GDaR.fr9qWxxNECcm7deW', NULL, '2026-06-04 08:34:22', '2026-06-04 08:34:22', 0),
(4, 'asdasd', 'escanadem@gmail.com', NULL, '$2y$12$Z5CFMRVWI.M.u0xrL5gO6eZLa9myVtSggyyQzCGJH3Bzkw7dlGR5K', NULL, '2026-06-06 18:48:55', '2026-06-06 18:48:55', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hero_sliders`
--
ALTER TABLE `hero_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_sliders`
--
ALTER TABLE `hero_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
