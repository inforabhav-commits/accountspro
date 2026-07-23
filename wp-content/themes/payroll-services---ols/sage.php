<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
require_once get_template_directory() . '/inc/platform-service-renderer.php';

payroll_render_platform_service_page( [
	'title'            => 'Assist Pro Sage Services | Payroll Servicess',
	'meta_description' => 'Professional Sage support services for setup, migration, payroll, cloud hosting, troubleshooting, data recovery, and ongoing support.',
	'footer_copy'      => 'Expert Sage setup, migration, payroll, cloud hosting, troubleshooting, backup, and ongoing support services.',
	'intro'            => 'Whether you are implementing Sage for the first time, migrating accounting data, resolving technical issues, or optimizing daily operations, AccountingAssistPro delivers Sage support tailored to your business.',
	'hero'             => [
		'eyebrow' => 'Sage Services', 'icon' => 'fa-solid fa-leaf', 'heading' => 'Assist Pro Sage Services', 'subheading' => 'Expert Sage solutions for small businesses, growing companies, and enterprises.',
		'bullets' => [ 'Experienced Sage professionals', 'Accurate payroll configuration', 'Secure employee data management', 'Cloud hosting and migration support' ],
		'stat' => '6+', 'stat_label' => 'Sage products supported',
		'images' => [
			[ 'src' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=700&auto=format&fit=crop', 'alt' => 'Sage support team planning software setup' ],
			[ 'src' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=700&auto=format&fit=crop', 'alt' => 'Accounting software records and reports' ],
			[ 'src' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=700&auto=format&fit=crop', 'alt' => 'Business software analytics dashboard' ],
		],
	],
	'offer'            => [
		'heading' => 'Our Sage Services',
		'copy' => 'Strategic Sage solutions built for precision, performance, security, and business continuity.',
		'cards' => [
			[ 'icon' => 'fa-solid fa-download', 'title' => 'Sage Installation & Setup', 'copy' => 'We install, configure, and customize Sage software to match your business requirements.', 'items' => [ 'New Installation', 'Software Configuration', 'Company Setup', 'User Management', 'License Activation' ] ],
			[ 'icon' => 'fa-solid fa-right-left', 'title' => 'Sage Migration Services', 'copy' => 'Move to a newer Sage version or migrate accounting data with minimal downtime.', 'items' => [ 'Data Migration', 'Company File Conversion', 'Cloud Migration', 'Data Validation', 'Post-Migration Testing' ] ],
			[ 'icon' => 'fa-solid fa-money-check-dollar', 'title' => 'Sage Payroll Services', 'copy' => 'Configure payroll, tax settings, employee payments, updates, and payroll troubleshooting.', 'items' => [ 'Payroll Setup', 'Employee Configuration', 'Tax Settings', 'Payroll Updates', 'Direct Deposit Assistance', 'Payroll Troubleshooting' ] ],
			[ 'icon' => 'fa-solid fa-cloud', 'title' => 'Sage Cloud Hosting', 'copy' => 'Run Sage applications securely from the cloud with reliable performance and remote accessibility.', 'items' => [ 'Secure Cloud Servers', 'Remote Access', 'Automatic Backups', 'Multi-User Access', 'Disaster Recovery', 'High Availability' ] ],
			[ 'icon' => 'fa-solid fa-screwdriver-wrench', 'title' => 'Error Troubleshooting', 'copy' => 'Diagnose and resolve common Sage errors that affect productivity and business operations.', 'items' => [ 'Installation Errors', 'Update Failures', 'Login Problems', 'Database Errors', 'Company File Issues', 'Performance Problems', 'Multi-User Issues', 'Printing Errors' ] ],
			[ 'icon' => 'fa-solid fa-database', 'title' => 'Sage Data Recovery & Backup', 'copy' => 'Keep accounting information safe with reliable backup strategies and recovery assistance.', 'items' => [ 'Backup Configuration', 'Data Recovery', 'File Restoration', 'Database Repair', 'Disaster Recovery Planning', 'Data Integrity Checks' ] ],
		],
	],
	'products'         => [
		'heading' => 'Sage Products We Support',
		'cards' => [
			[ 'icon' => 'fa-solid fa-calculator', 'title' => 'Sage 50 Accounting', 'copy' => 'Powerful desktop accounting software for small and medium-sized businesses.' ],
			[ 'icon' => 'fa-solid fa-briefcase', 'title' => 'Sage 100', 'copy' => 'Business management and financial software for growing organizations.' ],
			[ 'icon' => 'fa-solid fa-building', 'title' => 'Sage 300', 'copy' => 'ERP solution for businesses with complex financial operations.' ],
			[ 'icon' => 'fa-solid fa-cloud', 'title' => 'Sage Intacct', 'copy' => 'Cloud-native financial management software with automation and reporting.' ],
			[ 'icon' => 'fa-solid fa-laptop', 'title' => 'Sage Business Cloud Accounting', 'copy' => 'Online accounting software for flexibility and collaboration.' ],
			[ 'icon' => 'fa-solid fa-users', 'title' => 'Sage HR', 'copy' => 'Human resources and employee management software.' ],
		],
	],
	'industries'       => payroll_platform_industries( 'Industries We Serve', 'Our Sage support services are trusted by businesses across multiple industries.' ),
	'why'              => [ 'heading' => 'Why Businesses Choose Us?', 'copy' => 'Businesses trust us because we provide dependable Sage support with a focus on performance, security, and business continuity.', 'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=1000&auto=format&fit=crop', 'image_alt' => 'Sage support professionals assisting a business team', 'items' => [ 'Experienced Sage Professionals', 'Personalized Business Solutions', 'Secure Remote Support', 'Cloud Hosting Expertise', 'Fast Response Times', 'Scalable Support Services', 'Data Protection Best Practices' ] ],
	'process'          => [ 'heading' => 'Our 4-Step Support Process', 'copy' => 'A clear Sage support process for assessment, implementation, and continued maintenance.', 'steps' => [ [ 'title' => 'Consultation', 'copy' => 'Share your Sage issue or business requirements, and our experts evaluate the best solution.' ], [ 'title' => 'Assessment', 'copy' => 'We review your Sage software, configuration, and data to identify the root cause.' ], [ 'title' => 'Implement the Right Solution', 'copy' => 'We resolve errors, configure settings, migrate data, or optimize your Sage environment.' ], [ 'title' => 'Ongoing Support', 'copy' => 'Receive continued maintenance, updates, software guidance, and technical assistance.' ] ] ],
	'testimonials'     => [ [ 'initials' => 'BD', 'name' => 'Brielle Donovan', 'role' => 'Financial Controller', 'quote' => 'AccountingAssistPro made our Sage migration effortless. The transition was smooth, and our team was up and running without disruption.' ], [ 'initials' => 'GE', 'name' => 'Grant Ellison', 'role' => 'Operations Manager', 'quote' => 'Their Sage payroll support has been exceptional. They resolved our configuration issues quickly and helped streamline payroll.' ], [ 'initials' => 'MK', 'name' => 'Marissa Kensington', 'role' => 'Business Owner', 'quote' => 'From cloud hosting to technical support, AccountingAssistPro has become a trusted technology partner for our business.' ] ],
	'cta'              => [ 'heading' => 'Ready to Simplify Your Sage Workflow?', 'copy' => 'Speak with a Sage expert and get reliable support for your software, payroll, migration, or cloud hosting needs.', 'button' => 'Speak with a Sage Expert' ],
	'faqs'             => [ [ 'q' => 'Which Sage products do you support?', 'a' => 'We assist with Sage 50, Sage 100, Sage 300, Sage Intacct, Sage Business Cloud Accounting, and Sage HR.' ], [ 'q' => 'Can you help migrate data to a newer version of Sage?', 'a' => 'Yes. We provide secure migration services, including data validation and post-migration testing.' ], [ 'q' => 'Do you offer cloud hosting for Sage?', 'a' => 'Yes. Our cloud hosting solutions provide secure remote access, automatic backups, and scalable infrastructure.' ], [ 'q' => 'Can you help with Sage payroll?', 'a' => 'Yes. We assist with payroll setup, tax configuration, updates, troubleshooting, and payroll-related issues.' ], [ 'q' => 'Do you provide ongoing support?', 'a' => 'Yes. We offer continued assistance with troubleshooting, software updates, optimization, and general Sage maintenance.' ] ],
] );
