<?php
/**
 * Jaiton Technologies - Case Study Details Page
 * 100% Match to Reference Image 38
 */
include_once 'includes/navigation.php';
include_once 'includes/header.php';

$case_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$case_studies = [
  0 => [
    'title' => 'Centralized Member Management Platform',
    'image' => 'assets/images/case/case-assoc-v2.jpg',
    'overview_1' => 'The organization required a centralized digital platform to efficiently manage member data, streamline administrative processes, and improve engagement across multiple departments and locations. Manual record-keeping and disconnected systems were causing data inconsistencies, delayed communication, and limited visibility into member activities.',
    'overview_2' => 'We developed a scalable centralized member management platform that enables secure member registration, profile management, and real-time data access through a unified dashboard. The system allows administrators to manage memberships, track renewals, monitor participation, and maintain accurate records effortlessly. Role-based access control ensures data security, while an intuitive interface enables smooth navigation for both administrators and members.',
    'services' => 'Enterprise Application Development',
    'location' => 'Bangalore, India',
    'date' => '15-11-2024',
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
    'title' => 'Industrial IoT Solution for Machine Manufacturer',
    'image' => 'assets/images/case/case-iot-v2.jpg',
    'overview_1' => 'The machine manufacturing client required an IoT embedded solution to enable real-time equipment monitoring and data analytics across industrial deployments. Legacy machines operated in isolation without telemetry stream visibility.',
    'overview_2' => 'We delivered an edge-to-cloud IoT architecture integrating hardware sensors, custom embedded firmware, and real-time cloud data pipelines. The system streams telemetry data, predicts component failures, and provides field engineers with instant diagnostic dashboards.',
    'services' => 'IoT Embedded Systems',
    'location' => 'Toronto, Canada',
    'date' => '20-02-2025',
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
    'image' => 'assets/images/case/case-farm-v2.jpg',
    'overview_1' => 'A community farm collective required a modern digital commerce platform to streamline produce listing, direct-to-consumer orders, and seasonal harvest box subscriptions.',
    'overview_2' => 'We created a mobile-first e-commerce system connecting community members directly with farm harvests. The platform features automated harvest subscription management, localized delivery route planning, and transparent farm-to-table order tracking.',
    'services' => 'AgriTech & E-Commerce',
    'location' => 'Sydney, Australia',
    'date' => '10-04-2025',
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

<main class="page_content">

  <!-- Page Banner Section - Start (100% Match to Image 38 Header) -->
  <section class="page_banner_section text-center" style="background-color: #020842 !important; background-image: url('assets/images/shapes/bg_pattern_4.svg'); padding: 80px 20px 70px; position: relative;">
    <div id="particles-js" class="particles-container">
      <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;"></canvas>
    </div>

    <div class="container position-relative" style="z-index: 2;">
      <div class="heading_focus_text text-white mb-2" style="font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #ffffff !important; display: inline-flex; align-items: center; justify-content: center; gap: 6px;">
        Recent Work
        <span class="badge bg-secondary ms-1" style="background-color: #F44380 !important; color: #ffffff !important; padding: 4px 10px; border-radius: 4px; font-size: 11.5px;"> Details </span>
      </div>
      <h1 class="page_title mb-0 text-white" style="font-family: 'Axiforma Bold', 'Poppins', sans-serif; font-size: clamp(34px, 4.5vw, 54px); font-weight: 800; color: #ffffff !important; line-height: 1.2;">Casestudies &amp; Details</h1>
    </div>
  </section>
  <!-- Page Banner Section - End -->

  <!-- Portfolio Details Section - Start (100% Match to Image 38 Body) -->
  <section class="portfolio_details_section section_space bg-light" style="background-color: #E3F0FF !important; padding-top: 70px; padding-bottom: 120px;">
    <div class="container" style="max-width: 1140px; padding-left: 20px; padding-right: 20px;">
      
      <!-- Big Hero Feature Image -->
      <div class="details_item_image mb-5" style="border-radius: 20px; overflow: hidden; height: 480px; box-shadow: 0 12px 35px rgba(2, 8, 66, 0.12);">
        <img src="<?php echo $current['image']; ?>" alt="<?php echo htmlspecialchars($current['title']); ?>" style="width: 100%; height: 100%; object-fit: cover; display: block;">
      </div>

      <!-- Main Case Title -->
      <h2 class="details_item_title" style="font-family: 'Axiforma Bold', sans-serif; font-size: clamp(28px, 3.2vw, 40px); font-weight: 700; color: #020842; margin-bottom: 24px; line-height: 1.25;">
        <?php echo htmlspecialchars($current['title']); ?>
      </h2>

      <!-- Overview Paragraphs -->
      <div class="overview_text_block mb-5" style="color: #49515B; font-size: 16.5px; line-height: 1.75;">
        <p class="mb-4"><?php echo htmlspecialchars($current['overview_1']); ?></p>
        <p class="mb-0"><?php echo htmlspecialchars($current['overview_2']); ?></p>
      </div>

      <hr style="border-color: #CBD5E1; margin: 40px 0;">

      <!-- Services, Location, Date Horizontal Info Row -->
      <ul class="portfolio_details_info_list icon_list unordered_list justify-content-lg-between mb-5" style="display: flex; flex-wrap: wrap; justify-content: space-between; padding: 22px 0; border-top: 1px solid #CBD5E1; border-bottom: 1px solid #CBD5E1; list-style: none; margin-bottom: 50px; gap: 20px;">
        <li>
          <span class="icon_list_text" style="font-size: 15px; color: #49515B;">
            <strong class="text-dark text-uppercase" style="color: #020842; font-weight: 700; margin-right: 6px;">SERVICES:</strong>
            <?php echo htmlspecialchars($current['services']); ?>
          </span>
        </li>
        <li>
          <span class="icon_list_text" style="font-size: 15px; color: #49515B;">
            <strong class="text-dark text-uppercase" style="color: #020842; font-weight: 700; margin-right: 6px;">LOCATION:</strong>
            <?php echo htmlspecialchars($current['location']); ?>
          </span>
        </li>
        <li>
          <span class="icon_list_text" style="font-size: 15px; color: #49515B;">
            <strong class="text-dark text-uppercase" style="color: #020842; font-weight: 700; margin-right: 6px;">COMPLETED DATE:</strong>
            <?php echo htmlspecialchars($current['date']); ?>
          </span>
        </li>
      </ul>

      <!-- Project Requirement Heading -->
      <h3 class="details_item_info_title pt-3" style="font-family: 'Axiforma Bold', sans-serif; font-size: 28px; font-weight: 700; color: #020842; margin-bottom: 18px;">Project Requirement</h3>
      <p style="color: #49515B; font-size: 16.5px; line-height: 1.7; margin-bottom: 28px;">
        <?php echo htmlspecialchars($current['req_text']); ?>
      </p>

      <!-- 2-Column Checkmark Requirement Grid -->
      <div class="row mb-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <ul class="unordered_list_block" style="padding: 0; margin: 0; list-style: none; display: flex; flex-direction: column; gap: 16px;">
            <?php foreach ($current['col1_reqs'] as $req): ?>
              <li style="display: flex; align-items: center; gap: 12px; font-size: 15.5px; font-weight: 600; color: #334155;">
                <span class="icon_list_icon"><i class="fa-solid fa-check text-primary" style="color: #0044EB; font-size: 16px;"></i></span>
                <span class="icon_list_text"><?php echo htmlspecialchars($req); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul class="unordered_list_block" style="padding: 0; margin: 0; list-style: none; display: flex; flex-direction: column; gap: 16px;">
            <?php foreach ($current['col2_reqs'] as $req): ?>
              <li style="display: flex; align-items: center; gap: 12px; font-size: 15.5px; font-weight: 600; color: #334155;">
                <span class="icon_list_icon"><i class="fa-solid fa-check text-primary" style="color: #0044EB; font-size: 16px;"></i></span>
                <span class="icon_list_text"><?php echo htmlspecialchars($req); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <!-- Solution & Result Heading -->
      <h3 class="details_item_info_title pt-4" style="font-family: 'Axiforma Bold', sans-serif; font-size: 28px; font-weight: 700; color: #020842; margin-bottom: 18px;">Solution &amp; Result</h3>
      <div class="solution_text_block mb-5" style="color: #49515B; font-size: 16.5px; line-height: 1.75;">
        <p class="mb-4"><?php echo htmlspecialchars($current['solution_1']); ?></p>
        <p class="mb-0"><?php echo htmlspecialchars($current['solution_2']); ?></p>
      </div>

      <!-- Our Recent Projects Heading -->
      <h3 class="details_item_info_title pt-4 mb-4" style="font-family: 'Axiforma Bold', sans-serif; font-size: 28px; font-weight: 700; color: #020842; margin-bottom: 28px;">Our Recent Projects</h3>
      <div class="row">
        <?php 
        $other_ids = array_filter([0, 1, 2], function($id) use ($case_id) { return $id !== $case_id; });
        foreach ($other_ids as $other_id): 
          $other = $case_studies[$other_id];
        ?>
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="portfolio_block portfolio_layout_2" style="background: #ffffff; border-radius: 18px; overflow: hidden; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06); transition: transform 0.3s ease, box-shadow 0.3s ease;">
              <div class="portfolio_image" style="height: 240px; overflow: hidden;">
                <a class="portfolio_image_wrap bg-light" href="case-study-details.php?id=<?php echo $other_id; ?>">
                  <img src="<?php echo $other['image']; ?>" alt="<?php echo htmlspecialchars($other['title']); ?>" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </a>
              </div>
              <div class="portfolio_content" style="padding: 24px 28px;">
                <h3 class="portfolio_title" style="font-family: 'Axiforma Bold', sans-serif; font-size: 20px; font-weight: 700; margin-bottom: 12px; line-height: 1.35;">
                  <a href="case-study-details.php?id=<?php echo $other_id; ?>" style="color: #020842; text-decoration: none;">
                    <?php echo htmlspecialchars($other['title']); ?>
                  </a>
                </h3>
                <ul class="category_list unordered_list" style="display: flex; gap: 15px; padding: 0; margin: 0; list-style: none;">
                  <li>
                    <a href="case-study-details.php?id=<?php echo $other_id; ?>" style="font-size: 13px; font-weight: 700; color: #0044EB; text-transform: uppercase; text-decoration: none;">
                      <i class="fa-solid fa-tags me-1"></i> <?php echo htmlspecialchars($other['services']); ?>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>
  <!-- Portfolio Details Section - End -->

</main>

<style>
.portfolio_block.portfolio_layout_2:hover {
  transform: translateY(-5px) !important;
  box-shadow: 0 16px 36px rgba(0, 68, 235, 0.18) !important;
}
</style>

<?php include_once 'includes/footer.php'; ?>
