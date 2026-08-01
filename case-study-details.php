<?php
/**
 * Jaiton Technologies - Case Study Details Page
 * 100% Pixel-Perfect Alignment to Reference Image Spacing, Layout & Typography
 */
include_once 'includes/navigation.php';

$case_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$case_studies = [
  0 => [
    'title' => 'Centralized Member Management Platform',
    'image' => 'assets/images/case/case-1.webp',
    'overview_1' => 'The organization required a centralized digital platform to efficiently manage member data, streamline administrative processes, and improve engagement across multiple departments and locations. Manual record-keeping and disconnected systems were causing data inconsistencies, delayed communication, and limited visibility into member activities.',
    'overview_2' => 'We developed a scalable centralized member management platform that enables secure member registration, profile management, and real-time data access through a unified dashboard. The system allows administrators to manage memberships, track renewals, monitor participation, and maintain accurate records effortlessly. Role-based access control ensures data security, while an intuitive interface enables smooth navigation for both administrators and members.',
    'services' => 'Enterprise Application Development',
    'location' => 'Bangalore, India',
    'date' => '15-11-2024',
    'tags' => ['Enterprise App', 'Member Management'],
    'req_text' => 'The organization required a robust member management system to centralize data, automate routine administrative tasks, and improve member engagement. The platform needed to support secure access, real-time updates, and scalability to accommodate future growth.',
    'col1_reqs' => [
      'Centralized member database',
      'Secure member registration & login',
      'Role-based access control',
      'Membership status & renewal tracking'
    ],
    'col2_reqs' => [
      'Automated notifications & alerts',
      'Reporting & analytics dashboard',
      'Secure cloud-based infrastructure',
      'Scalable cloud infrastructure'
    ],
    'solution_1' => 'We designed and implemented a centralized member management platform tailored to the organization’s operational needs. The solution provided a unified dashboard to manage member profiles, track activity, handle renewals, and generate real-time reports. Secure authentication and role-based permissions ensured data protection and controlled access across different user levels.',
    'solution_2' => 'As a result, the organization experienced improved data accuracy, faster administrative workflows, and enhanced member communication. Automation reduced manual effort, while centralized access enabled better decision-making. The platform successfully improved operational efficiency, strengthened member engagement, and provided a scalable foundation for future expansion.'
  ],
  1 => [
    'title' => 'IoT Embedded Solution for Machine Manufacturer',
    'image' => 'assets/images/case/case-2.webp',
    'overview_1' => 'The machine manufacturing client required an IoT embedded solution to enable real-time equipment monitoring and data analytics across industrial deployments. Legacy machines operated in isolation without telemetry stream visibility.',
    'overview_2' => 'We delivered an edge-to-cloud IoT architecture integrating hardware sensors, custom embedded firmware, and real-time cloud data pipelines. The system streams telemetry data, predicts component failures, and provides field engineers with instant diagnostic dashboards.',
    'services' => 'IoT Embedded Systems',
    'location' => 'Toronto, Canada',
    'date' => '20-02-2025',
    'tags' => ['IoT Embedded Systems', 'Manufacturing Industry'],
    'req_text' => 'The factory needed remote diagnostics, edge anomaly detection, and predictive maintenance alerts to prevent costly equipment breakdowns and optimize operational uptime across industrial facilities.',
    'col1_reqs' => [
      'Edge sensor integration & telemetry',
      'Real-time diagnostic stream',
      'MQTT & Modbus protocol bridge',
      'Predictive maintenance tracking'
    ],
    'col2_reqs' => [
      'Automated anomaly alerts',
      'Reporting & analytics dashboard',
      'Secure cloud-based infrastructure',
      'High-availability time-series database'
    ],
    'solution_1' => 'We implemented custom firmware microservices streaming sensor data over low-latency MQTT queues. Edge analytics nodes process temperature, vibration, and duty cycles in real time to detect operational anomalies before equipment failure occurs.',
    'solution_2' => 'The implementation reduced unplanned downtime by 32%, decreased maintenance costs, and gave field engineers instant remote access to machine diagnostics worldwide.'
  ],
  2 => [
    'title' => 'Community-Managed Farm E-Commerce Platform',
    'image' => 'assets/images/case/case-3.webp',
    'overview_1' => 'A community farm collective required a modern digital commerce platform to streamline produce listing, direct-to-consumer orders, and seasonal harvest box subscriptions.',
    'overview_2' => 'We created a mobile-first e-commerce system connecting community members directly with farm harvests. The platform features automated harvest subscription management, localized delivery route planning, and transparent farm-to-table order tracking.',
    'services' => 'AgriTech & E-Commerce',
    'location' => 'Sydney, Australia',
    'date' => '10-04-2025',
    'tags' => ['AgriTech', 'E-Commerce'],
    'req_text' => 'The platform required user-friendly produce browsing, automated harvest subscription billing, localized delivery route calculation, and multi-farm vendor management.',
    'col1_reqs' => [
      'Direct-to-consumer produce shop',
      'Mobile payment gateway integration',
      'Produce availability tracking',
      'Localized delivery route planning'
    ],
    'col2_reqs' => [
      'Automated subscription management',
      'Reporting & sales dashboard',
      'Secure cloud-based infrastructure',
      'Scalable e-commerce architecture'
    ],
    'solution_1' => 'We developed an intuitive e-commerce experience tailored for local farms. Customers can subscribe to weekly harvest boxes, customize order deliveries, and track farm updates seamlessly from their mobile devices.',
    'solution_2' => 'The farm collective expanded its consumer reach, improved ordering efficiency by 45%, and built lasting community engagement through transparent farm-to-table access.'
  ]
];

$current = isset($case_studies[$case_id]) ? $case_studies[$case_id] : $case_studies[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?php echo htmlspecialchars($current['title']); ?> | Case Studies - Jaiton Technologies</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/logo/favicon.webp">
  
  <!-- Google Fonts: Inter & Outfit -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3.3 CSS CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Custom Core Stylesheets -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/animations.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <style>
    /* ==========================================================================
       Jaiton Technologies - Executive Enterprise Case Study Design System
       Powered by Bootstrap 5 & Modern Web Best Practices
       ========================================================================== */

    /* Reset & Clean Foundation */
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background-color: #EBF3FF;
      color: #334155;
      margin: 0;
      padding: 0;
      -webkit-font-smoothing: antialiased;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Outfit', 'Inter', sans-serif;
      letter-spacing: -0.5px;
    }

    .site-header {
      display: none !important;
    }

    /* Top Header Bar */
    .cs-top-navbar {
      background-color: #ffffff;
      padding: 16px 0;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      position: relative;
      z-index: 999;
      box-shadow: 0 4px 20px rgba(2, 8, 66, 0.03);
    }
    .cs-nav-container {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 15px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }
    .cs-nav-logo img {
      height: 38px;
      width: auto;
      display: block;
    }
    .cs-nav-links {
      display: flex;
      align-items: center;
      gap: 32px;
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .cs-nav-links li a {
      color: #1E293B;
      font-size: 14.5px;
      font-weight: 600;
      text-decoration: none;
      transition: color 0.2s ease;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .cs-nav-links li a:hover {
      color: #6D28FF;
    }
    .cs-nav-links li a i {
      font-size: 11px;
      color: #64748B;
    }
    .cs-nav-actions {
      display: flex;
      align-items: center;
      gap: 22px;
    }
    .cs-signin-link {
      color: #1E293B;
      font-size: 14px;
      font-weight: 700;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: color 0.2s ease;
    }
    .cs-signin-link:hover {
      color: #6D28FF;
    }
    .cs-btn-estimate {
      background-color: #6D28FF;
      color: #ffffff;
      font-size: 13.5px;
      font-weight: 700;
      padding: 12px 24px;
      border-radius: 50px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.25s ease;
      box-shadow: 0 4px 14px rgba(109, 40, 255, 0.25);
    }
    .cs-btn-estimate:hover {
      background-color: #5B1EDF;
      transform: translateY(-2px);
      box-shadow: 0 8px 22px rgba(109, 40, 255, 0.38);
    }

    /* ==========================================================================
       Page Banner Section (Executive Navy-Indigo Gradient with Glow)
       ========================================================================== */
    .page_banner_section {
      background-color: #060e1e;
      background-image: radial-gradient(circle at 50% 25%, rgba(109, 40, 255, 0.22) 0%, transparent 65%), url('assets/images/shapes/bg_pattern_4.svg');
      background-size: cover;
      background-position: center center;
      padding: 120px 0 100px;
      text-align: center;
      position: relative;
      z-index: 1;
      overflow: hidden;
    }
    .heading_focus_text {
      color: #ffffff;
      font-size: 13.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1.8px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-bottom: 16px;
    }
    .heading_focus_text .badge.bg-secondary {
      background-color: #F44380 !important;
      color: #ffffff;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.6px;
      box-shadow: 0 2px 10px rgba(244, 67, 128, 0.35);
    }
    .page_title {
      font-size: clamp(38px, 4.5vw, 54px);
      font-weight: 800;
      color: #ffffff;
      margin: 0;
      line-height: 1.15;
      text-shadow: 0 2px 12px rgba(0, 0, 0, 0.3);
    }

    /* ==========================================================================
       Portfolio Details Section (Sleek Executive Layout)
       ========================================================================== */
    .portfolio_details_section {
      background-color: #EBF3FF;
      padding: 60px 0 100px;
    }
    .portfolio_details_section .container {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 15px;
    }

    /* Executive Hero Showcase Banner (380px with subtle zoom & shadow - ZERO WHITE LINE) */
    .details_item_image {
      border-radius: 24px;
      overflow: hidden;
      height: 380px;
      margin-bottom: 44px;
      background-color: #020842 !important;
      border: none !important;
      box-shadow: 0 18px 42px rgba(2, 8, 66, 0.11), 0 4px 12px rgba(2, 8, 66, 0.04);
      position: relative !important;
    }
    .details_item_image img {
      width: 101% !important;
      height: 101% !important;
      position: relative !important;
      top: -0.5% !important;
      left: -0.5% !important;
      object-fit: cover;
      object-position: center;
      display: block !important;
      border: none !important;
      margin: 0 !important;
      padding: 0 !important;
      transition: transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .details_item_image:hover img {
      transform: scale(1.03);
    }

    /* Headings & Readability */
    .details_item_title {
      font-size: clamp(30px, 3.4vw, 40px);
      font-weight: 800;
      color: #020842;
      margin-bottom: 24px;
      line-height: 1.25;
      letter-spacing: -0.6px;
    }
    .portfolio_details_section p {
      color: #4A5568;
      font-size: 16.5px;
      line-height: 1.8;
      margin-bottom: 20px;
      font-weight: 400;
    }
    .portfolio_details_section hr {
      border: none;
      border-top: 1px solid rgba(2, 8, 66, 0.1);
      margin: 34px 0;
      opacity: 1;
    }

    /* Metadata Info Bar (SERVICES, LOCATION, COMPLETED DATE) */
    .portfolio_details_info_list {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      padding: 22px 30px;
      list-style: none;
      margin: 30px 0 45px 0;
      background: #ffffff;
      border-radius: 16px;
      border: 1px solid rgba(2, 8, 66, 0.06);
      box-shadow: 0 8px 24px rgba(2, 8, 66, 0.04);
      row-gap: 14px;
      column-gap: 40px;
    }
    .portfolio_details_info_list li {
      font-size: 15px;
      color: #4A5568;
      line-height: 1.5;
    }
    .portfolio_details_info_list li strong {
      color: #020842;
      font-weight: 800;
      font-size: 14.5px;
      margin-right: 8px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    /* Section Info Subheadings */
    .details_item_info_title {
      font-size: 28px;
      font-weight: 800;
      color: #020842;
      margin-top: 40px;
      margin-bottom: 18px;
      line-height: 1.3;
      letter-spacing: -0.5px;
    }

    /* Project Requirements Interactive Checkmark Cards */
    .unordered_list_block {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 14px;
    }
    .unordered_list_block li {
      display: flex;
      align-items: center;
      gap: 14px;
      font-size: 15.5px;
      font-weight: 600;
      color: #1E293B;
      padding: 10px 14px;
      border-radius: 12px;
      transition: all 0.25s ease;
      background: rgba(255, 255, 255, 0.6);
      border: 1px solid transparent;
    }
    .unordered_list_block li:hover {
      background: #ffffff;
      border-color: rgba(37, 99, 235, 0.15);
      box-shadow: 0 6px 18px rgba(37, 99, 235, 0.08);
      transform: translateX(4px);
    }
    .icon_list_icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 24px;
      height: 24px;
      flex-shrink: 0;
    }
    .icon_list_icon img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    /* Our Recent Projects Executive Cards (.portfolio_block.portfolio_layout_2) */
    .portfolio_block.portfolio_layout_2 {
      background: #ffffff;
      border-radius: 24px;
      overflow: hidden;
      border: 1px solid rgba(2, 8, 66, 0.06);
      box-shadow: 0 10px 30px rgba(2, 8, 66, 0.05);
      transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
      display: flex;
      flex-direction: column;
      height: 100%;
      margin-bottom: 30px;
    }
    .portfolio_block.portfolio_layout_2:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 48px rgba(37, 99, 235, 0.14);
      border-color: rgba(37, 99, 235, 0.22);
    }
    .portfolio_block.portfolio_layout_2 .portfolio_image {
      height: 260px;
      width: 100%;
      overflow: hidden;
      background-color: #020842 !important;
      border: none !important;
      display: block;
      position: relative;
    }
    .portfolio_block.portfolio_layout_2 .portfolio_image img {
      width: 101% !important;
      height: 101% !important;
      position: relative !important;
      top: -0.5% !important;
      left: -0.5% !important;
      object-fit: cover;
      display: block !important;
      border: none !important;
      margin: 0 !important;
      padding: 0 !important;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .portfolio_block.portfolio_layout_2:hover .portfolio_image img {
      transform: scale(1.06);
    }
    .portfolio_block.portfolio_layout_2 .portfolio_content {
      padding: 26px 30px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .portfolio_block.portfolio_layout_2 .category_list {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 12px;
      list-style: none;
      padding: 0;
    }
    .portfolio_block.portfolio_layout_2 .category_list li a {
      font-size: 13px;
      font-weight: 700;
      color: #2563EB;
      background: rgba(37, 99, 235, 0.08);
      padding: 5px 14px;
      border-radius: 50px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: all 0.2s ease;
    }
    .portfolio_block.portfolio_layout_2 .category_list li a:hover {
      background: #2563EB;
      color: #ffffff;
    }
    .portfolio_block.portfolio_layout_2 .portfolio_title {
      font-size: 22px;
      font-weight: 800;
      color: #020842;
      margin: 0;
      line-height: 1.35;
      letter-spacing: -0.4px;
    }
    .portfolio_block.portfolio_layout_2 .portfolio_title a {
      color: #020842;
      text-decoration: none;
      transition: color 0.2s ease;
    }
    .portfolio_block.portfolio_layout_2 .portfolio_title a:hover {
      color: #2563EB;
    }

    /* Responsive Breakdown */
    @media screen and (max-width: 991px) {
      .cs-nav-links {
        display: none;
      }
      .cs-top-navbar {
        padding: 14px 0;
      }
      .details_item_image {
        height: 260px;
      }
      .page_banner_section {
        padding: 90px 0 70px;
      }
      .page_title {
        font-size: 38px;
        line-height: 48px;
      }
      .portfolio_details_info_list {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <!-- Section 1: Top Navigation Bar (Sticky White Navbar) -->
  <header class="cs-top-navbar">
    <div class="cs-nav-container">
      <a href="index.php" class="cs-nav-logo">
        <img src="assets/logo/Logo.png" alt="Jaiton Technologies">
      </a>
      <ul class="cs-nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#why-jaiton">Company <i class="fa-solid fa-chevron-down"></i></a></li>
        <li><a href="index.php#why-jaiton">Services <i class="fa-solid fa-chevron-down"></i></a></li>
        <li><a href="index.php#why-jaiton">Partnered <i class="fa-solid fa-chevron-down"></i></a></li>
        <li><a href="index.php#industries">Locations <i class="fa-solid fa-chevron-down"></i></a></li>
        <li><a href="index.php#contact">Contact</a></li>
      </ul>
      <div class="cs-nav-actions">
        <a href="index.php#contact" class="cs-signin-link">SIGN IN <i class="fa-solid fa-arrow-up-right"></i></a>
        <a href="index.php#contact" class="cs-btn-estimate">ESTIMATE PROJECT <i class="fa-solid fa-arrow-up-right"></i></a>
      </div>
    </div>
  </header>

  <!-- Main Content - Using exact HTML classes from jaiton.com template -->
  <main class="page_content">

    <!-- Page Banner Section - Start
      ================================================== -->
    <section class="page_banner_section text-center" style="background-image: url('assets/images/shapes/bg_pattern_4.svg');">
      <div class="container position-relative" style="z-index: 2;">
        <div class="heading_focus_text text-white">
          Recent Work
          <span class="badge bg-secondary"> Details </span>
        </div>
        <h1 class="page_title mb-0 text-white">Casestudies &amp; Details</h1>
      </div>
    </section>
    <!-- Page Banner Section - End
      ================================================== -->

    <!-- Portfolio Details Section - Start
      ================================================== -->
    <section class="portfolio_details_section section_space bg-light">
      <div class="container">
        <div class="details_item_image">
          <img src="<?php echo htmlspecialchars($current['image']); ?>" alt="<?php echo htmlspecialchars($current['title']); ?> - Jaiton Technologies">
        </div>
        <h2 class="details_item_title"><?php echo htmlspecialchars($current['title']); ?></h2>
        <p class="mb-0">
          <?php echo htmlspecialchars($current['overview_1']); ?>
        </p>
        <p class="mb-0">
          <?php echo htmlspecialchars($current['overview_2']); ?>
        </p><hr>
        <ul class="portfolio_details_info_list icon_list unordered_list justify-content-lg-between mb-5">
          <li>
            <span class="icon_list_text">
              <strong class="text-dark text-uppercase">Services:</strong>
              <?php echo htmlspecialchars($current['services']); ?>
            </span>
          </li>
          <li>
            <span class="icon_list_text">
              <strong class="text-dark text-uppercase">Location:</strong>
              <?php echo htmlspecialchars($current['location']); ?>
            </span>
          </li>
          <li>
            <span class="icon_list_text">
              <strong class="text-dark text-uppercase">Completed Date:</strong>
              <?php echo htmlspecialchars($current['date']); ?>
            </span>
          </li>
        </ul>

        <h3 class="details_item_info_title pt-4">Project Requirement</h3>
        <p>
          <?php echo htmlspecialchars($current['req_text']); ?>
        </p>
        <div class="row mb-4">
          <div class="col-lg-5">
            <ul class="icon_list unordered_list_block">
              <?php foreach ($current['col1_reqs'] as $req): ?>
                <li>
                  <span class="icon_list_icon">
                    <img src="assets/images/icons/icon_check_3.svg" alt="Check SVG Icon">
                  </span>
                  <span class="icon_list_text">
                    <?php echo htmlspecialchars($req); ?>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="col-lg-5">
            <ul class="icon_list unordered_list_block">
              <?php foreach ($current['col2_reqs'] as $req): ?>
                <li>
                  <span class="icon_list_icon">
                    <img src="assets/images/icons/icon_check_3.svg" alt="Check SVG Icon">
                  </span>
                  <span class="icon_list_text">
                    <?php echo htmlspecialchars($req); ?>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <h3 class="details_item_info_title pt-4">Solution &amp; Result</h3>
        <p>
          <?php echo htmlspecialchars($current['solution_1']); ?>
        </p><p>
          <?php echo htmlspecialchars($current['solution_2']); ?>
         </p>
        <h3 class="details_item_info_title pt-5 mb-4">Our Recent Projects</h3>
        <div class="row">
          <?php 
          $other_ids = array_filter([0, 1, 2], function($id) use ($case_id) { return $id !== $case_id; });
          foreach ($other_ids as $other_id): 
            $other = $case_studies[$other_id];
          ?>
            <div class="col-lg-6">
              <div class="portfolio_block portfolio_layout_2">
                <div class="portfolio_image">
                  <a class="portfolio_image_wrap bg-light" href="case-study-details.php?id=<?php echo $other_id; ?>">
                    <img src="<?php echo htmlspecialchars($other['image']); ?>" alt="<?php echo htmlspecialchars($other['title']); ?>">
                  </a>
                </div>
                <div class="portfolio_content">
                  <ul class="category_list unordered_list">
                    <?php if (isset($other['tags'])): ?>
                      <?php foreach ($other['tags'] as $tag): ?>
                        <li><a href="case-study-details.php?id=<?php echo $other_id; ?>"><i class="fa-solid fa-tags"></i> <?php echo htmlspecialchars($tag); ?></a></li>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <li><a href="case-study-details.php?id=<?php echo $other_id; ?>"><i class="fa-solid fa-tags"></i> <?php echo htmlspecialchars($other['services']); ?></a></li>
                    <?php endif; ?>
                  </ul>
                  <h3 class="portfolio_title">
                    <a href="case-study-details.php?id=<?php echo $other_id; ?>">
                      <?php echo htmlspecialchars($other['title']); ?>
                    </a>
                  </h3>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- Portfolio Details Section - End
      ================================================== -->

  </main>

  <!-- Section 4: Full Enterprise Light Footer -->
  <?php include_once 'includes/footer.php'; ?>

  <!-- Bootstrap 5.3.3 JS Bundle CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

