<?php
/**
 * Jaiton Technologies - Australian Enterprise Homepage
 * Central entry point. Loads all layout components, design systems, and visual layers.
 */

// 1. Central Navigation Configuration (Pre-configured navigation array)
include_once 'includes/navigation.php';

// 2. Head & Header Navigation Wrapper
include_once 'includes/header.php';

// 3. Page Components (Sequential Layout)
include_once 'components/hero.php';
include_once 'components/trusted.php';
include_once 'components/services.php';
include_once 'components/why-jaiton.php';
include_once 'components/mission-vision.php';
include_once 'components/industries.php';
include_once 'components/featured.php';
include_once 'components/global-presence.php';
include_once 'components/cta.php';
include_once 'components/contact-preview.php';

// 4. Footer & Script Loaders
include_once 'includes/footer.php';
?>
