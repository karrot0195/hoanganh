<?php
// generate fields

$video_fields = array(
    ACFCS::getFile(array('name' => 'video-file'))
);

if (!empty($page)) {
    acf_add_local_field_group(array (
        'key' => 'group_pt_video',
        'title' => 'video',
        'fields' => $video_fields,
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'videos',
                ),
            )
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array (
            0 => 'the_content',
        ),
        'active' => 1,
        'description' => '',
    ));
}