<?php
class ACFCS {
    public static function fieldTab($attrs=array()) {
        return array (
            'key' => 'field-' . $attrs['name'],
            'label' => isset($attrs['label']) ? $attrs['label'] : '',
            'name' => $attrs['name'],
            'type' => 'tab',
            'instructions' => isset($attrs['instructions']) ? $attrs['instructions'] : '',
            'required' => isset($attrs['required']) ? $attrs['required'] : 0,
            'conditional_logic' => isset($attrs['conditional_logic']) ? $attrs['conditional_logic'] : 0,
            'wrapper' => isset($attrs['wrapper']) ? $attrs['wrapper'] :  array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => isset($attrs['placement']) ? $attrs['placement'] : 'top',
            'endpoint' => isset($attrs['endpoint']) ? $attrs['endpoint'] : 0,
        );
    }

    public static function getText($attrs=array()) {
        return array (
            'key' => 'field-' . $attrs['name'],
            'label' => isset($attrs['label']) ? $attrs['label'] : '',
            'name' => $attrs['name'],
            'type' => 'text',
            'instructions' => isset($attrs['instructions']) ? $attrs['instructions'] : '',
            'required' => isset($attrs['required']) ? $attrs['required'] : 0,
            'conditional_logic' => isset($attrs['conditional_logic']) ? $attrs['conditional_logic'] : 0,
            'wrapper' => isset($attrs['wrapper']) ? $attrs['wrapper'] : array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => isset($attrs['default_value']) ? $attrs['default_value'] : '',
            'placeholder' => isset($attrs['placeholder']) ? $attrs['placeholder'] : '',
            'prepend' => isset($attrs['prepend']) ? $attrs['prepend'] : '',
            'append' => isset($attrs['append']) ? $attrs['append'] : '',
            'maxlength' => isset($attrs['maxlength']) ? $attrs['maxlength'] : '',
        );
    }

    public static function getAreaText($attrs=array()) {
        return array (
            'key' => 'field-' . $attrs['name'],
            'label' => isset($attrs['label']) ? $attrs['label'] : '',
            'name' => $attrs['name'],
            'type' => 'textarea',
            'instructions' => isset($attrs['instructions']) ? $attrs['instructions'] : '',
            'required' => isset($attrs['required']) ? $attrs['required'] : 0,
            'conditional_logic' => isset($attrs['conditional_logic']) ? $attrs['conditional_logic'] : 0,
            'wrapper' => isset($attrs['wrapper']) ? $attrs['wrapper'] : array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => isset($attrs['default_value']) ? $attrs['default_value'] : '',
            'placeholder' => isset($attrs['placeholder']) ? $attrs['placeholder'] : '',
            'maxlength' => isset($attrs['maxlength']) ? $attrs['maxlength'] : '',
            'rows' => isset($attrs['rows']) ? $attrs['rows'] : '',
            'new_lines' => isset($attrs['new_lines']) ? $attrs['wpautop'] : '',
        );
    }

    public static function getImage($attrs=array()) {
        return array (
            'key' => 'field-' . $attrs['name'],
            'label' => isset($attrs['label']) ? $attrs['label'] : '',
            'name' => $attrs['name'],
            'type' => 'image',
            'instructions' => isset($attrs['instructions']) ? $attrs['instructions'] : '',
            'required' => isset($attrs['required']) ? $attrs['required'] : 0,
            'conditional_logic' => isset($attrs['conditional_logic']) ? $attrs['conditional_logic'] : 0,
            'wrapper' => isset($attrs['wrapper']) ? $attrs['wpautop'] : array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => isset($attrs['return_format']) ? $attrs['return_format'] : 'array',
            'preview_size' => isset($attrs['preview_size']) ? $attrs['preview_size'] : 'full',
            'library' => isset($attrs['library']) ? $attrs['library'] : 'all',
            'min_width' => isset($attrs['min_width']) ? $attrs['min_width'] : '',
            'min_height' => isset($attrs['min_height']) ? $attrs['min_height'] : '',
            'min_size' => isset($attrs['min_size']) ? $attrs['min_size'] : '',
            'max_width' => isset($attrs['max_width']) ? $attrs['max_width'] : '',
            'max_height' => isset($attrs['max_height']) ? $attrs['max_height'] : '',
            'max_size' => isset($attrs['max_size']) ? $attrs['max_size'] : '',
            'mime_types' => isset($attrs['mime_types']) ? $attrs['mime_types'] : '',
        );
    }

    public static function getRepeater($attrs=array()) {
        return array (
            'key' => 'field-' . $attrs['name'],
            'label' => isset($attrs['label']) ? $attrs['label'] : '',
            'name' => $attrs['name'],
            'type' => 'repeater',
            'instructions' => isset($attrs['instructions']) ? $attrs['instructions'] : '',
            'required' => isset($attrs['required']) ? $attrs['required'] : 0,
            'conditional_logic' => isset($attrs['conditional_logic']) ? $attrs['conditional_logic'] : 0,
            'wrapper' => isset($attrs['wrapper']) ? $attrs['wrapper'] : array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => isset($attrs['collapsed']) ? $attrs['collapsed'] : '',
            'min' => isset($attrs['min']) ? $attrs['min'] : 0,
            'max' => isset($attrs['max']) ? $attrs['max'] : 0,
            'layout' => isset($attrs['layout']) ? $attrs['layout'] : 'table',
            'button_label' => isset($attrs['button_label']) ? $attrs['button_label'] : '',
            'sub_fields' => isset($attrs['sub_fields']) ? $attrs['sub_fields'] : array()
        );
    }

    public static function getFile($attrs=array()) {
        return array (
            'key' => 'field-' . $attrs['name'],
            'label' => isset($attrs['label']) ? $attrs['label'] : '',
            'name' => $attrs['name'],
            'type' => 'file',
            'instructions' => isset($attrs['instructions']) ? $attrs['instructions'] : '',
            'required' => isset($attrs['required']) ? $attrs['required'] : 0,
            'conditional_logic' => isset($attrs['conditional_logic']) ? $attrs['conditional_logic'] : 0,
            'wrapper' => isset($attrs['wrapper']) ? $attrs['wrapper'] : array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => isset($attrs['return_format']) ? $attrs['return_format'] : 'url',
            'library' => isset($attrs['library']) ? $attrs['library'] : 'all',
            'min_size' => isset($attrs['min_size']) ? $attrs['min_size'] : '',
            'max_size' => isset($attrs['max_size']) ? $attrs['max_size'] : '',
            'mime_types' => isset($attrs['mime_types']) ? $attrs['mime_types'] : '',
        );
    }
}