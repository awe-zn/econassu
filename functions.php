<?php
function meu_widget() {
  register_sidebar( array(
    "name" => "Após cabeçalho",
    "id" => "apos_header",
    "before_widget" => "<div>",
    "after_widget" => "</div>",
    "description" => "Área depois do cabeçalho, usada normalmente para alertas",
  ));
  register_sidebar( array(
    "name" => "Seção sobre",
    "id" => "section_about",
    "before_widget" => "<div class='sec-about'>",
    "after_widget" => "</div>",
    "description" => "Área destinada ao texto sobre o evento que ficará na tela inicial",
    ));
}
add_action( "widgets_init", "meu_widget" );

// Suporte à menu no tema
function support_theme() {
  register_nav_menu("primary", __("Menu Principal", "econassu"));
}
add_action("after_setup_theme", "support_theme");

function create_post_types() {
  post_type_convidado();
  post_type_programacao();
  post_type_apoios();
  custom_fields();
}

function post_type_convidado(){
  register_post_type( "convidados",
        array(
            "labels" => array(
                "name" => "Convidados",
                "singular_name" => "Convidado",
                "add_new" => "Adicionar novo convidado",
                "add_new_item" => "Adicionar novo convidado",
                "edit_item" => "Editar convidado",
                "new_item" => "Novo convidado",
                "view_item" => "Ver convidado",
                "view_items" => "Ver convidados",
                "search_items" => "Buscar convidado",
                "not_found" => "Nenhum convidado encontrado",
                "not_found_in_trash" => "Nenhum convidado na lixeira",
                "all_items" => "Todos convidados",
                "uploaded_to_this_item" => "Carregado para este convidado",
                "items_list" => "Lista de convidados",
                "item_updated" => "Convidado atualizado"
            ),
            "description" => "Área para registro de todos convidados",
            "public" => true,
            "supports" => Array()
        )
    );

    remove_post_type_support("convidados", "editor");
}

function post_type_programacao(){
  register_post_type( "programacao",
        array(
            "labels" => array(
                "name" => "Programação",
                "singular_name" => "Programação",
                "add_new" => "Adicionar nova atividade à programação",
                "add_new_item" => "Adicionar nova atividade à programação",
                "edit_item" => "Editar atividade da programação",
                "new_item" => "Nova atividade",
                "view_item" => "Ver atividade",
                "view_items" => "Ver atividades",
                "search_items" => "Buscar atividade",
                "not_found" => "Nenhuma atividade encontrada",
                "not_found_in_trash" => "Nenhuma atividade na lixeira",
                "all_items" => "Todas atividades da programação",
                "uploaded_to_this_item" => "Carregado para esta atividade",
                "items_list" => "Lista de atividades",
                "item_updated" => "Atividade atualizada"
            ),
            "description" => "Área para registro de atividades na programação do evento",
            "public" => true,
            "supports" => Array()
        )
    );
}

function post_type_apoios(){
  register_post_type( "apoio",
        array(
            "labels" => array(
                "name" => "Apoios",
                "singular_name" => "Apoio",
                "add_new" => "Adicionar novo apoiador",
                "add_new_item" => "Adicionar novo apoiador",
                "edit_item" => "Editar apoiador",
                "new_item" => "Nova apoiador",
                "view_item" => "Ver apoiador",
                "view_items" => "Ver apoiador",
                "search_items" => "Buscar apoiador",
                "not_found" => "Nenhuma apoiador encontrado",
                "not_found_in_trash" => "Nenhuma apoiador na lixeira",
                "all_items" => "Todos apoiadores",
                "uploaded_to_this_item" => "Carregado para este apoiador",
                "items_list" => "Lista de apoiadores",
                "item_updated" => "Apoiador atualizado"
            ),
            "description" => "Área para registro de apoiadores",
            "public" => true,
            "supports" => Array('title')
        )
    );
}

function custom_fields() {
  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'group_5f135d728ad7f',
      'title' => 'Apoiador',
      'fields' => array(
        array(
          'key' => 'field_5f135d77d51aa',
          'label' => 'Apoiador',
          'name' => 'apoiador-logo',
          'type' => 'image',
          'instructions' => '',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'url',
          'preview_size' => 'full',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'apoio',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
    ));
    
    acf_add_local_field_group(array(
      'key' => 'group_5f1334c8878d5',
      'title' => 'Convidados',
      'fields' => array(
        array(
          'key' => 'field_5f1334e77b377',
          'label' => 'Foto do convidado',
          'name' => 'convidado-foto',
          'type' => 'image',
          'instructions' => 'Inserir imagem do convidado.
    A imagem será exibida na tela inicial junto com nome e pequeno texto sobre ele',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'url',
          'preview_size' => 'full',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array(
          'key' => 'field_5f133606a142d',
          'label' => 'Texto sobre o convidado',
          'name' => 'convidado-sobre',
          'type' => 'text',
          'instructions' => '',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'convidados',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
    ));
    
    endif;
}
add_action( "init", "create_post_types" );