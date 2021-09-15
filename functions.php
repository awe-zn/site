<?php

add_theme_support('post-thumbnails');

function function_admin_bar()
{
  return false;
}
add_filter('show_admin_bar', 'function_admin_bar');


function de_scripts()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.css');
  wp_enqueue_script('script', get_template_directory_uri() . '/dist/js/index.js', false, false, true);
}
add_action('wp_enqueue_scripts', 'de_scripts');

function pt_depositions()
{
  $labels = array(
    "name" => "Depoimentos",
    "singular_name" => "Depoimento",
    "add_new" => "Adicionar novo depoimento",
    "add_new_item" => "Adicionar novo depoimento",
    "edit_item" => "Editar depoimento",
    "new_item" => "Novo depoimento",
    "view_item" => "Ver depoimento",
    "view_items" => "Ver depoimentos",
    "search_items" => "Buscar depoimento",
    "not_found" => "Nenhum depoimento encontrado",
    "not_found_in_trash" => "Nenhum depoimento na lixeira",
    "all_items" => "Todos depoimentos",
    "uploaded_to_this_item" => "Carregado para este depoimento",
    "items_list" => "Lista de depoimentos",
    "item_updated" => "Depoimento atualizado"
  );

  $args = [
    "labels" => $labels,
    "description" => "Post type to do managements of detachs",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "query_var" => true,
    "supports" => ["title", "excerpt", "thumbnail"],
    "taxonomies" => array()
  ];

  register_post_type("depositions", $args);
}
function pt_projects()
{
  $labels = array(
    "name" => "Projetos",
    "singular_name" => "Projeto",
    "add_new" => "Adicionar novo projeto",
    "add_new_item" => "Adicionar novo projeto",
    "edit_item" => "Editar projeto",
    "new_item" => "Novo projeto",
    "view_item" => "Ver projeto",
    "view_items" => "Ver projetos",
    "search_items" => "Buscar projeto",
    "not_found" => "Nenhum projeto encontrado",
    "not_found_in_trash" => "Nenhum projeto na lixeira",
    "all_items" => "Todos projetos",
    "uploaded_to_this_item" => "Carregado para este projeto",
    "items_list" => "Lista de projetos",
    "item_updated" => "Projeto atualizado"
  );

  $args = [
    "labels" => $labels,
    "description" => "Post type to do managements of projects",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "query_var" => true,
    "supports" => ["title", "excerpt", "thumbnail"],
    "taxonomies" => array("projects_categories"),
  ];

  register_post_type("projects", $args);
}
function pt_news()
{
  $labels = array(
    "name" => "Notícias",
    "singular_name" => "Notícia",
    "add_new" => "Adicionar nova notícia",
    "add_new_item" => "Adicionar nova notícia",
    "edit_item" => "Editar notícia",
    "new_item" => "Nova notícia",
    "view_item" => "Ver notícia",
    "view_items" => "Ver notícias",
    "search_items" => "Buscar notícia",
    "not_found" => "Nenhuma notícia encontrada",
    "not_found_in_trash" => "Nenhuma notícia na lixeira",
    "all_items" => "Todas notícias",
    "uploaded_to_this_item" => "Carregado para esta notícia",
    "items_list" => "Lista de notícias",
    "item_updated" => "Notícia atualizada"
  );

  $args = [
    "labels" => $labels,
    "description" => "Post type to do managements of news",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => ["slug" => "noticias", "with_front" => true],
    "query_var" => true,
    "supports" => ["title", "excerpt", "editor", "thumbnail"],
    "taxonomies" => array("category"),
  ];

  register_post_type("news", $args);
}
function pt_team()
{
  $labels = array(
    "name" => "Membros",
    "singular_name" => "Membro",
    "add_new" => "Adicionar novo membro",
    "add_new_item" => "Adicionar novo membro",
    "edit_item" => "Editar membro",
    "new_item" => "Novo membro",
    "view_item" => "Ver membro",
    "view_items" => "Ver membros",
    "search_items" => "Buscar membro",
    "not_found" => "Nenhum membro encontrado",
    "not_found_in_trash" => "Nenhum membro na lixeira",
    "all_items" => "Todos membros",
    "uploaded_to_this_item" => "Carregado para este membro",
    "items_list" => "Lista de membros",
    "item_updated" => "Membro atualizado"
  );

  $args = [
    "labels" => $labels,
    "description" => "Post type to do managements of members team",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "query_var" => true,
    "supports" => ["title", "thumbnail"],
    "taxonomies" => array("teammates_types"),
  ];

  register_post_type("team", $args);
}
function pt_mentor()
{
  $labels = array(
    "name" => "Mentores",
    "singular_name" => "Mentor",
    "add_new" => "Adicionar novo mentor",
    "add_new_item" => "Adicionar novo mentor",
    "edit_item" => "Editar mentor",
    "new_item" => "Novo mentor",
    "view_item" => "Ver mentor",
    "view_items" => "Ver mentores",
    "search_items" => "Buscar mentor",
    "not_found" => "Nenhum mentor encontrado",
    "not_found_in_trash" => "Nenhum mentor na lixeira",
    "all_items" => "Todos mentores",
    "uploaded_to_this_item" => "Carregado para este mentor",
    "items_list" => "Lista de mentores",
    "item_updated" => "Mentor atualizado"
  );

  $args = [
    "labels" => $labels,
    "description" => "Post type to do managements of members mentor",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "query_var" => true,
    "supports" => ["title", "thumbnail"],
  ];

  register_post_type("mentor", $args);
}

function create_posttypes()
{
  pt_depositions();
  pt_projects();
  pt_news();
  pt_team();
  pt_mentor();
};

function tx_projects_types()
{
  $labels = [
    "name" => "Tipos de projetos",
    "singular_name" => "Tipo de projeto",
    "menu_name" => "Tipos de projetos",
    "all_items" => "Todos os tipos de projetos",
    "edit_item" => "Editar tipo de projeto",
    "view_item" => "Ver tipo de projeto",
    "update_item" => "Atualizar nome o tipo de projeto",
    "add_new_item" => "Adicionar novo tipo de projeto",
    "new_item_name" => "Novo tipo de projeto",
    "parent_item" => "Tipo de projeto ascendente",
    "parent_item_colon" => "Tipo de projeto ascendente:",
    "search_items" => "Pesquisar tipos de projetos",
    "popular_items" => "Tipos de projetos mais populares",
    "separate_items_with_commas" => "Separe tipos de projetos com vírgulas",
    "add_or_remove_items" => "Adicionar ou excluir tipos de projetos",
    "choose_from_most_used" => "Escolher entre os termos mais usados dos tipos de projetos",
    "not_found" => "Nenhum tipo de projeto encontrado",
    "no_terms" => "Nenhum tipo de projeto",
    "items_list_navigation" => "Navegação na lista de tipos de projetos",
    "items_list" => "Lista de tipos de projetos",
    "back_to_items" => "Voltar para tipos de projetos",
  ];


  $args = [
    "label" => "Tipos de projetos",
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'projects_categories', 'with_front' => true,],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "projects_categories",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    "show_in_graphql" => false,
  ];
  register_taxonomy("projects_types", [], $args);
}
function tx_teammates_types()
{
  $labels = [
    "name" => "Tipos de membros",
    "singular_name" => "Tipo de membro",
    "menu_name" => "Tipos de membros",
    "all_items" => "Todos os tipos de membro",
    "edit_item" => "Editar tipo de membro",
    "view_item" => "Ver tipo de membro",
    "update_item" => "Atualizar nome o tipo de membro",
    "add_new_item" => "Adicionar novo tipo de membro",
    "new_item_name" => "Novo tipo de membro",
    "parent_item" => "Tipo de membro ascendente",
    "parent_item_colon" => "Tipo de membro ascendente:",
    "search_items" => "Pesquisar tipos de membro",
    "popular_items" => "Tipos de membros mais populares",
    "separate_items_with_commas" => "Separe tipos de membro com vírgulas",
    "add_or_remove_items" => "Adicionar ou excluir tipos de membro",
    "choose_from_most_used" => "Escolher entre os termos mais usados dos tipos de membro",
    "not_found" => "Nenhum tipo de membro encontrado",
    "no_terms" => "Nenhum tipo de membro",
    "items_list_navigation" => "Navegação na lista de tipos de membro",
    "items_list" => "Lista de tipos de membro",
    "back_to_items" => "Voltar para tipos de membro",
  ];


  $args = [
    "label" => "Tipos de membros",
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'projects_categories', 'with_front' => true,],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "projects_categories",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    "show_in_graphql" => false,
  ];
  register_taxonomy("teammates_types", [], $args);
}

function create_taxonomies()
{
  tx_projects_types();
  tx_teammates_types();
}

function add_features()
{
  create_taxonomies();
  create_posttypes();
}
add_action('init', 'add_features');

function remove_default_post_type()
{
  remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_default_post_type');
