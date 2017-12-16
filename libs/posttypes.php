<?php
      add_action( 'init', 'add_projects');
      function add_projects() {
        $projects_args = array(
            'labels' => array(
              'name'                => 'Projekty',
              'singular_name'       => 'Projekty',
              'parent_item_colon'   => '',
              'all_items'           => 'Wszystkie projekty',
              'view_item'           => 'Zobacz projekty',
              'add_new_item'        => 'Dodaj nowy projekt',
              'add_new'             => 'Dodaj nowy projekt',
              'edit_item'           => 'Edytuj projekt',
              'update_item'         => 'Zaktualizuj projekt',
              'search_items'        => 'Szukaj projektów',
              'not_found'           => 'Nie znaleziono projekt',
              'not_found_in_trash'  => 'Nie znaleziono projekt w koszu'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','custom-fields'),
            'has_archive' => true);
        register_post_type('projects', $projects_args);}
 ?>
