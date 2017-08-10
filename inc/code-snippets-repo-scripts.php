<?php
  // Add Scripts
  function csr_add_scripts(){
    wp_enqueue_style('csr-style', plugins_url() . '/code-snippets-repo/css/style.css');
  }
  add_action('wp_enqueue_scripts', 'csr_add_scripts');
