<?php
  // Check if admin
  if(is_admin()){
    // Add Admin Scripts
    function csr_add_admin_scripts(){
      wp_enqueue_style('csr-admin-style', plugins_url() . '/code-snippets-repo/css/admin-style.css');
    }
    add_action('admin_init', 'csr_add_admin_scripts');
  }

  // Add Scripts
  function csr_add_scripts(){
    wp_enqueue_style('csr-style', plugins_url() . '/code-snippets-repo/css/style.css');
  }
  add_action('wp_enqueue_scripts', 'csr_add_scripts');
