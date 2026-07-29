<?php
/**
 * Jaiton Technologies - Centralized Navigation Configuration
 * Defines all navigation links used in headers, footers, and mobile panels.
 */

$nav_items = [
  [
    'label' => 'Home',
    'url' => '#hero',
    'has_dropdown' => false
  ],
  [
    'label' => 'Solutions',
    'url' => '#why-jaiton',
    'has_dropdown' => true,
    'menu_key' => 'solutions'
  ],
  [
    'label' => 'Industries',
    'url' => '#industries',
    'has_dropdown' => true,
    'menu_key' => 'industries'
  ],
  [
    'label' => 'Services',
    'url' => '#why-jaiton',
    'has_dropdown' => false
  ],
  [
    'label' => 'Company',
    'url' => '#why-jaiton',
    'has_dropdown' => false
  ],
  [
    'label' => 'Contact',
    'url' => '#contact',
    'has_dropdown' => false
  ]
];
?>
