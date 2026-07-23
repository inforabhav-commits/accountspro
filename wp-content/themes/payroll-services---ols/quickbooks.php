<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
require_once get_template_directory() . '/inc/platform-service-renderer.php';

payroll_render_platform_service_page( [
	'title'            => 'QuickBooks Services for Businesses, Accountants & Bookkeepers | Payroll Servicess',
	'meta_description' => 'Professional QuickBooks support for setup, payroll, payments, banking, reports, account management, taxes, migration, and troubleshooting.',
	'footer_copy'      => 'Professional QuickBooks support for setup, bookkeeping, payroll, banking, reporting, taxes, migration, and troubleshooting.',
	'intro'            => 'From initial setup to monthly books to year-end tax prep, our certified QuickBooks ProAdvisors keep your business finances accurate, organized, and ready for growth whether you use QuickBooks Online or QuickBooks Desktop.',
	'hero'             => [
		'eyebrow'     => 'QuickBooks Services',
		'icon'        => 'fa-solid fa-q',
		'heading'     => 'QuickBooks Services for Businesses, Accountants & Bookkeepers',
		'subheading'  => 'Simplify your accounting with professional QuickBooks support services.',
		'bullets'     => [ 'QuickBooks Online and Desktop support', 'Payroll, payments, and tax assistance', 'Banking and reconciliation help', 'Reports, accounting, and file support' ],
		'stat'        => '360',
		'stat_label'  => 'QuickBooks workflows supported',
		'images'      => [
			[ 'src' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=700&auto=format&fit=crop', 'alt' => 'Accounting team reviewing QuickBooks reports' ],
			[ 'src' => 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?q=80&w=700&auto=format&fit=crop', 'alt' => 'Bookkeeping records and financial statements' ],
			[ 'src' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=700&auto=format&fit=crop', 'alt' => 'Business owner reviewing accounting data' ],
		],
	],
	'offer'            => [
		'heading' => 'Our QuickBooks Professional Services',
		'copy'    => 'Complete QuickBooks solutions under one roof for efficient accounting, reduced downtime, and better financial accuracy.',
		'cards'   => [
			[ 'icon' => 'fa-solid fa-users', 'title' => 'Employees & Payroll', 'copy' => 'Simplify payroll management with employee setup, payroll processing, tax forms, and issue resolution.', 'items' => [ 'Paychecks & Direct Deposit', 'W-2s & Year-End Forms', 'Employee Time Tracking', 'Payroll Forms & Filings', 'New Employee Setup', 'Payroll Error Corrections' ] ],
			[ 'icon' => 'fa-solid fa-credit-card', 'title' => 'Payments', 'copy' => 'Manage invoices, payments, purchase orders, and vendor bills with expert QuickBooks support.', 'items' => [ 'Payment Processing', 'Invoicing', 'Funding & Deposits', 'Payment Errors', 'Purchase Orders', 'Bills & Accounts Payable' ] ],
			[ 'icon' => 'fa-solid fa-building-columns', 'title' => 'Banking', 'copy' => 'Manage bank accounts, reconcile transactions, and resolve banking issues with ease.', 'items' => [ 'Bank Reconciliation', 'Online Banking Setup', 'Bank Feeds', 'Banking Errors', 'Bank Feed Troubleshooting', 'Transaction Matching' ] ],
			[ 'icon' => 'fa-solid fa-chart-line', 'title' => 'Reports & Accounting', 'copy' => 'Create accurate reports, manage accounts, and gain valuable financial insights.', 'items' => [ 'Financial Reports', 'General Ledger', 'Export Reports', 'Budgets & Forecasting', 'Journal Entries', 'Custom Reports' ] ],
			[ 'icon' => 'fa-solid fa-user-gear', 'title' => 'Account Management', 'copy' => 'Manage your QuickBooks account, users, subscriptions, and company settings with ease.', 'items' => [ 'Manage Accounts & Users', 'Profile Updates', 'Password & Login Issues', 'Billing & Subscription', 'Company File Setup', 'Data Backup & Restore' ] ],
			[ 'icon' => 'fa-solid fa-file-invoice-dollar', 'title' => 'Taxes', 'copy' => 'Simplify tax management with support for sales tax, payroll tax, payments, and filing.', 'items' => [ 'Sales Tax Setup', 'Payroll Tax Management', 'Tax Payments', 'Tax Filing', 'Sales Tax Returns', '1099 Contractor Forms' ] ],
		],
	],
	'products'         => [
		'heading' => 'QuickBooks Versions We Support',
		'cards'   => [
			[ 'icon' => 'fa-solid fa-desktop', 'title' => 'QuickBooks Desktop', 'copy' => 'Installed accounting software for Windows with advanced finance, inventory, payroll, and reporting tools.' ],
			[ 'icon' => 'fa-solid fa-layer-group', 'title' => 'Desktop Editions', 'copy' => 'QuickBooks Pro, Premier, Enterprise, Accountant, and Desktop Plus support.' ],
			[ 'icon' => 'fa-solid fa-cloud', 'title' => 'QuickBooks Online', 'copy' => 'Cloud-based accounting with access from anywhere, real-time collaboration, and secure cloud storage.' ],
			[ 'icon' => 'fa-solid fa-seedling', 'title' => 'Simple Start', 'copy' => 'Basic accounting for freelancers, sole proprietors, and startups.' ],
			[ 'icon' => 'fa-solid fa-list-check', 'title' => 'Essentials & Plus', 'copy' => 'Bill management, time tracking, inventory tracking, projects, and budgeting features.' ],
			[ 'icon' => 'fa-solid fa-rocket', 'title' => 'Advanced', 'copy' => 'Automation, custom reporting, enhanced security, and workflow management for larger teams.' ],
		],
	],
	'industries'       => payroll_platform_industries( 'Industries We Support with QuickBooks Services', 'Our QuickBooks services support accounting and financial management needs across many industries.' ),
	'why'              => [
		'heading'   => 'Why Choose AccountingAssistPro?',
		'copy'      => 'Businesses rely on AccountingAssistPro because we deliver dependable accounting software solutions with personalized help.',
		'image'     => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=1000&auto=format&fit=crop',
		'image_alt' => 'QuickBooks support professional reviewing financial reports',
		'items'     => [ 'Experienced QuickBooks support professionals', 'Wide range of Desktop issue support', 'Step-by-step troubleshooting guidance', 'Data protection best practices', 'Remote support available', 'Fast response times', 'Business-focused solutions', 'Support for small businesses and accounting professionals' ],
	],
	'process'          => [
		'heading' => 'Fast, Simple & Hassle-Free Assistance in 4 Steps',
		'copy'    => 'We make getting QuickBooks help easy with a streamlined support process.',
		'steps'   => [
			[ 'title' => 'Contact Our Experts', 'copy' => 'Reach out to our QuickBooks specialists and explain the issue or requirement.' ],
			[ 'title' => 'Analyze the Problem', 'copy' => 'We assess your QuickBooks environment to identify the root cause and best solution.' ],
			[ 'title' => 'Assistance', 'copy' => 'Our experts repair, configure, migrate, or optimize your QuickBooks workflow.' ],
			[ 'title' => 'Ongoing Support', 'copy' => 'We provide continued guidance and technical help to keep QuickBooks running smoothly.' ],
		],
	],
	'testimonials'     => [
		[ 'initials' => 'EC', 'name' => 'Ethan Caldwell', 'role' => 'Founder', 'quote' => 'AccountingAssistPro resolved our QuickBooks company file issue quickly and professionally. We were back to work with minimal downtime.' ],
		[ 'initials' => 'VH', 'name' => 'Vanessa Holloway', 'role' => 'Finance Manager', 'quote' => 'We needed help migrating from QuickBooks Desktop to QuickBooks Online, and the process was seamless and accurate.' ],
		[ 'initials' => 'PW', 'name' => 'Preston Whitaker', 'role' => 'Operations Director', 'quote' => 'From payroll setup to multi-user errors, AccountingAssistPro has been an excellent QuickBooks support partner.' ],
	],
	'cta'              => [ 'heading' => 'Ready to Optimize Your QuickBooks Experience?', 'copy' => 'Speak with an expert and get reliable QuickBooks support for your business.', 'button' => 'Speak with an Expert' ],
	'faqs'             => [
		[ 'q' => 'Which QuickBooks version is right for my business?', 'a' => 'The best version depends on your business size, number of users, required features, and whether you prefer desktop or cloud accounting.' ],
		[ 'q' => 'Can you migrate my data from QuickBooks Desktop to QuickBooks Online?', 'a' => 'Yes. We assist with secure data migration while preserving as much historical financial information as possible.' ],
		[ 'q' => 'Do you support multi-user QuickBooks environments?', 'a' => 'Yes. We help configure and troubleshoot multi-user setups for collaborative access.' ],
		[ 'q' => 'Can QuickBooks Desktop be hosted on the cloud?', 'a' => 'Yes. QuickBooks Desktop can be hosted in a secure cloud environment for remote access.' ],
		[ 'q' => 'Do you provide ongoing QuickBooks support?', 'a' => 'Yes. We offer setup, maintenance, troubleshooting, upgrades, and optimization support.' ],
		[ 'q' => 'What is QuickBooks Tool Hub?', 'a' => 'QuickBooks Tool Hub is a utility from Intuit that includes troubleshooting tools for common QuickBooks Desktop issues.' ],
		[ 'q' => 'Can Tool Hub fix every QuickBooks error?', 'a' => 'No. Some issues require additional troubleshooting, file repair, or manual configuration.' ],
		[ 'q' => 'Is Tool Hub available for QuickBooks Online?', 'a' => 'No. QuickBooks Tool Hub is designed for QuickBooks Desktop.' ],
	],
] );
