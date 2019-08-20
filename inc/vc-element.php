<?php
//for icons
vc_map(array(
    'name'              =>      __('icon','astrum'),
    'description'       =>      'this is for icon',
    'base'              =>      'icons',
    'category'          =>      'astrum',
    'icon'              =>      'fa fa-map',
    'params'            =>      array(
        array(

            'param_name'        =>      'astum_icons',
            'type'              =>      'iconpicker',
            'heading'           =>      'choose icon'
        ),
        array(

            'param_name'        =>      'astum_icons_heading',
            'type'              =>      'textfield',
            'heading'           =>      'give  icon heading '
        ),
        array(

            'param_name'        =>      'astum_icons_des',
            'type'              =>      'textarea',
            'heading'           =>      'give  icon description'
        )
    )
));


//for recent works

vc_map(array(
    'name'              =>      __('recent works ','astrum'),
    'description'       =>      'this is for icon',
    'base'              =>      'recent_works',
    'category'          =>      'astrum',
    'icon'              =>      'fa fa-map',
    'params'            =>      array(

        array(

            'param_name'        =>      'recent_works_p',
            'type'              =>      'textfield',
            'heading'           =>      'post per slider  '
        ),

    )
));


// for clients

vc_map(array(
    'name'              =>      __('Our Clients ','astrum'),
    'description'       =>      'this is for clients ',
    'base'              =>      'client',
    'category'          =>      'astrum',
    'icon'              =>      'fa fa-map',
    'params'            =>      array(

        array(

            'param_name'        =>      'clients_p',
            'type'              =>      'textfield',
            'heading'           =>      'post per slider '
        ),

    )
));

// for  heading text

vc_map(array(
    'name'              =>      __('heading with text ','astrum'),
    'description'       =>      'this is for clients ',
    'base'              =>      'heading_text',
    'category'          =>      'astrum',
    'icon'              =>      'fa fa-map',
    'params'            =>      array(

        array(

            'param_name'        =>      'heading_text_h',
            'type'              =>      'textfield',
            'heading'           =>      'heading '
        ),
        array(

            'param_name'        =>      'heading_text_s',
            'type'              =>      'textfield',
            'heading'           =>      'span '
        ),
        array(

            'param_name'        =>      'heading_text_p',
            'type'              =>      'textarea',
            'heading'           =>      'paragraph '
        ),
    )
));


//skills

// for  heading text

vc_map(array(
    'name'              =>      __('ourt skills ','astrum'),
    'description'       =>      'this is for skills ',
    'base'              =>      'skills',
    'category'          =>      'astrum',
    'icon'              =>      'fa fa-map',
    'params'            =>      array(

        array(
            'type'          =>  'param_group',
            'heading'       =>  'skills groups ',
            'param_name'    =>  'skills_grp',
            'params'        =>  array(
                array(

                    'param_name'        =>      'skills_i',
                    'type'              =>      'iconpicker',
                    'heading'           =>      'icon '
                ),
                array(

                    'param_name'        =>      'skills_h',
                    'type'              =>      'textfield',
                    'heading'           =>      'heading '
                ),
                array(

                    'param_name'        =>      'skills_p',
                    'type'              =>      'textfield',
                    'heading'           =>      'percent '
                ),
            )
        )
    )
));

// team
// for clients

vc_map(array(
    'name'              =>      __('Our teams ','astrum'),
    'description'       =>      'this is for clients ',
    'base'              =>      'team',
    'category'          =>      'astrum',
    'icon'              =>      'fa fa-map',
    'params'            =>      array(

        array(

            'param_name'        =>      'team_p',
            'type'              =>      'textfield',
            'heading'           =>      'post per slider '
        ),

    )
));
