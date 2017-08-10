<?php

  // Create Custom Post Type
  function csr_register_snippet(){
    $labels = array(
        'name'                  => _x( 'Snippets', 'Post type general name', 'code-snippets-repo' ),
        'singular_name'         => _x( 'Snippet', 'Post type singular name', 'code-snippets-repo' ),
        'menu_name'             => _x( 'Snippets', 'Admin Menu text', 'code-snippets-repo' ),
        'name_admin_bar'        => _x( 'Snippet', 'Add New on Toolbar', 'code-snippets-repo' ),
        'add_new'               => __( 'Add New', 'code-snippets-repo' ),
        'add_new_item'          => __( 'Add New Snippet', 'code-snippets-repo' ),
        'new_item'              => __( 'New Snippet', 'code-snippets-repo' ),
        'edit_item'             => __( 'Edit Snippet', 'code-snippets-repo' ),
        'view_item'             => __( 'View Snippet', 'code-snippets-repo' ),
        'all_items'             => __( 'All Snippets', 'code-snippets-repo' ),
        'search_items'          => __( 'Search Snippets', 'code-snippets-repo' ),
        'parent_item_colon'     => __( 'Parent Snippets:', 'code-snippets-repo' ),
        'not_found'             => __( 'No snippets found.', 'code-snippets-repo' ),
        'not_found_in_trash'    => __( 'No snippets found in Trash.', 'code-snippets-repo' ),
        'archives'              => _x( 'Snippet archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'code-snippets-repo' ),
        'filter_items_list'     => _x( 'Filter snippets list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'code-snippets-repo' ),
        'items_list_navigation' => _x( 'Snippets list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'code-snippets-repo' ),
        'items_list'            => _x( 'Snippets list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'code-snippets-repo' ),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'code-snippets-repo'),
        // 'taxonomies'         => array('category'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'snippet' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-editor-code',
        'can_export'         => true,
        'supports'           => array( 'title', 'editor' ),
    );

    // Register Post Type
    register_post_type('snippet', $args);

  }
  add_action('init', 'csr_register_snippet');

  register_activation_hook(__FILE__, function () {
    csr_register_snippet();
    flush_rewrite_rules();
  });

  register_deactivation_hook(__FILE__, function () {
      flush_rewrite_rules();
  });
