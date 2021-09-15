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
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "query_var" => true,
    "rewrite" => ["slug" => "projetos", "with_front" => true],
    "supports" => ["title", "excerpt", "thumbnail"],
    "taxonomies" => array("projects_types"),
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
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
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
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "query_var" => true,
    "rewrite" => ["slug" => "equipe", "with_front" => true],
    "supports" => ["title", "excerpt", "thumbnail"],
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
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "projects_types",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => true,
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
    "rewrite" => ['slug' => 'teammates_types', 'with_front' => true],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "teammates_types",
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


class new_general_setting
{
  function new_general_setting()
  {
    add_filter('admin_init', array(&$this, 'register_fields'));
  }
  function register_fields()
  {
    register_setting('general', 'link_instagram', 'esc_attr');
    register_setting('general', 'link_behance', 'esc_attr');
    register_setting('general', 'link_github', 'esc_attr');
    register_setting('general', 'link_linkedin', 'esc_attr');
    register_setting('general', 'phone_number', 'esc_attr');
    register_setting('general', 'link_whatsapp', 'esc_attr');
    register_setting('general', 'email', 'esc_attr');
    register_setting('general', 'addres', 'esc_attr');

    add_settings_field('link_instagram', '<label for="link_instagram">' . __('Link do perfil no Instagram', 'link_instagram') . '</label>', array(&$this, 'field_link_instagram'), 'general');
    add_settings_field('link_behance', '<label for="link_behance">' . __('Link do perfil no Behance', 'link_behance') . '</label>', array(&$this, 'field_link_behance'), 'general');
    add_settings_field('link_github', '<label for="link_github">' . __('Link do perfil no GitHub', 'link_github') . '</label>', array(&$this, 'field_link_github'), 'general');
    add_settings_field('link_linkedin', '<label for="link_linkedin">' . __('Link do perfil no LinkedIn', 'link_linkedin') . '</label>', array(&$this, 'field_link_linkedin'), 'general');
    add_settings_field('phone_number', '<label for="phone_number">' . __('Número telefônico', 'phone_number') . '</label>', array(&$this, 'field_phone_number'), 'general');
    add_settings_field('link_whatsapp', '<label for="link_whatsapp">' . __('Link do WhatsApp', 'link_whatsapp') . '</label>', array(&$this, 'field_link_whatsapp'), 'general');
    add_settings_field('email', '<label for="email">' . __('Endereço de email', 'email') . '</label>', array(&$this, 'field_email'), 'general');
    add_settings_field('addres', '<label for="addres">' . __('Endereço', 'addres') . '</label>', array(&$this, 'field_addres'), 'general');
  }
  function field_link_instagram()
  {
    $value = get_option('link_instagram', '');
    echo '<input type="url" id="link_instagram" name="link_instagram" value="' . $value . '" />';
  }
  function field_link_behance()
  {
    $value = get_option('link_behance', '');
    echo '<input type="url" id="link_behance" name="link_behance" value="' . $value . '" />';
  }
  function field_link_github()
  {
    $value = get_option('link_github', '');
    echo '<input type="url" id="link_github" name="link_github" value="' . $value . '" />';
  }
  function field_link_linkedin()
  {
    $value = get_option('link_linkedin', '');
    echo '<input type="url" id="link_linkedin" name="link_linkedin" value="' . $value . '" />';
  }
  function field_phone_number()
  {
    $value = get_option('phone_number', '');
    echo '<input type="text" id="phone_number" name="phone_number" value="' . $value . '" />';
  }
  function field_link_whatsapp()
  {
    $value = get_option('link_whatsapp', '');
    echo '<input type="url" id="link_whatsapp" name="link_whatsapp" value="' . $value . '" />';
  }
  function field_email()
  {
    $value = get_option('email', '');
    echo '<input type="email" id="email" name="email" value="' . $value . '" />';
  }
  function field_addres()
  {
    $value = get_option('addres', '');
    echo '<input type="text" id="addres" name="addres" value="' . $value . '" />';
  }
}

$new_general_setting = new new_general_setting();
