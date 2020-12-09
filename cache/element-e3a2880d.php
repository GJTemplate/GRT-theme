<?php // $file = /home/m/markinf2/theme.cbsystems.ru/public_html/templates/yootheme/vendor/yootheme/builder/elements/map/element.json

return [
  '@import' => $filter->apply('path', './element.php', $file), 
  'name' => 'map', 
  'title' => 'Map', 
  'group' => 'multiple items', 
  'icon' => $filter->apply('url', 'images/icon.svg', $file), 
  'iconSmall' => $filter->apply('url', 'images/iconSmall.svg', $file), 
  'element' => true, 
  'container' => true, 
  'width' => 500, 
  'defaults' => [
    'show_title' => true, 
    'type' => 'roadmap', 
    'zoom' => 10, 
    'controls' => true, 
    'zooming' => false, 
    'dragging' => false
  ], 
  'placeholder' => [
    'children' => [[
        'type' => 'list_item', 
        'props' => []
      ]]
  ], 
  'templates' => [
    'render' => $filter->apply('path', './templates/template.php', $file), 
    'content' => $filter->apply('path', './templates/content.php', $file)
  ], 
  'fields' => [
    'content' => [
      'label' => 'Markers', 
      'type' => 'content-items', 
      'title' => 'title', 
      'button' => 'Add Marker', 
      'item' => 'map_marker'
    ], 
    'show_title' => [
      'type' => 'checkbox', 
      'text' => 'Show title'
    ], 
    'type' => [
      'label' => 'Type', 
      'description' => 'Choose a map type.', 
      'type' => 'select', 
      'options' => [
        'Roadmap' => 'roadmap', 
        'Satellite' => 'satellite'
      ]
    ], 
    'zoom' => [
      'label' => 'Zoom', 
      'description' => 'Set the initial resolution at which to display the map. 0 is fully zoomed out and 18 is at the highest resolution zoomed in.', 
      'type' => 'number', 
      'attrs' => [
        'min' => 0, 
        'max' => 18
      ]
    ], 
    'controls' => [
      'label' => 'Controls', 
      'description' => 'Display the map controls and define whether the map can be zoomed or be dragged using the mouse wheel or touch.', 
      'type' => 'checkbox', 
      'text' => 'Show map controls'
    ], 
    'zooming' => [
      'type' => 'checkbox', 
      'text' => 'Enable map zooming'
    ], 
    'dragging' => [
      'type' => 'checkbox', 
      'text' => 'Enable map dragging'
    ], 
    'height' => [
      'label' => 'Height', 
      'description' => 'Set the height in pixels, e.g. 300.', 
      'type' => 'text'
    ], 
    'width' => [
      'label' => 'Width', 
      'description' => 'Set the width in pixels, e.g. 600. If no width is set, the map will take the full width and keep the height. Or use the width only to define the breakpoint from which the map starts to shrink preserving the aspect ratio.', 
      'type' => 'text'
    ], 
    'width_breakpoint' => [
      'type' => 'checkbox', 
      'text' => 'Use as breakpoint only', 
      'enable' => 'width'
    ], 
    'popup_max_width' => [
      'label' => 'Popup max width', 
      'description' => 'Set a maximum width for the popup, e.g. 300.', 
      'type' => 'text'
    ], 
    'styler_hue' => [
      'label' => 'Hue', 
      'description' => 'Set the hue (e.g. #ff0000).', 
      'type' => 'color', 
      'alpha' => false, 
      'enable' => 'this.Config.values.google_maps'
    ], 
    'styler_lightness' => [
      'label' => 'Lightness', 
      'description' => 'Set percentage change in lightness (Between -100 and 100).', 
      'type' => 'range', 
      'attrs' => [
        'min' => -100, 
        'max' => 100, 
        'step' => 1
      ], 
      'enable' => 'this.Config.values.google_maps'
    ], 
    'styler_invert_lightness' => [
      'type' => 'checkbox', 
      'text' => 'Invert lightness', 
      'enable' => 'this.Config.values.google_maps'
    ], 
    'styler_saturation' => [
      'label' => 'Saturation', 
      'description' => 'Set percentage change in saturation (Between -100 and 100).', 
      'type' => 'range', 
      'attrs' => [
        'min' => -100, 
        'max' => 100, 
        'step' => 1
      ], 
      'enable' => 'this.Config.values.google_maps'
    ], 
    'styler_gamma' => [
      'label' => 'Gamma', 
      'description' => 'Set percentage change in the amount of gamma correction (Between 0.01 and 10.0, where 1.0 applies no correction).', 
      'type' => 'range', 
      'attrs' => [
        'min' => 0.5, 
        'max' => 2, 
        'step' => 0.1000000000000000055511151231257827021181583404541015625
      ], 
      'enable' => 'this.Config.values.google_maps'
    ], 
    'position' => $config->get('builder.position'), 
    'position_left' => $config->get('builder.position_left'), 
    'position_right' => $config->get('builder.position_right'), 
    'position_top' => $config->get('builder.position_top'), 
    'position_bottom' => $config->get('builder.position_bottom'), 
    'position_z_index' => $config->get('builder.position_z_index'), 
    'margin' => $config->get('builder.margin'), 
    'margin_remove_top' => $config->get('builder.margin_remove_top'), 
    'margin_remove_bottom' => $config->get('builder.margin_remove_bottom'), 
    'maxwidth' => $config->get('builder.maxwidth'), 
    'maxwidth_breakpoint' => $config->get('builder.maxwidth_breakpoint'), 
    'block_align' => $config->get('builder.block_align'), 
    'block_align_breakpoint' => $config->get('builder.block_align_breakpoint'), 
    'block_align_fallback' => $config->get('builder.block_align_fallback'), 
    'animation' => $config->get('builder.animation'), 
    '_parallax_button' => $config->get('builder._parallax_button'), 
    'visibility' => $config->get('builder.visibility'), 
    'container_padding_remove' => $config->get('builder.container_padding_remove'), 
    'name' => $config->get('builder.name'), 
    'status' => $config->get('builder.status'), 
    'id' => $config->get('builder.id'), 
    'class' => $config->get('builder.cls'), 
    'attributes' => $config->get('builder.attrs'), 
    'css' => [
      'label' => 'CSS', 
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>', 
      'type' => 'editor', 
      'editor' => 'code', 
      'mode' => 'css', 
      'attrs' => [
        'debounce' => 500
      ]
    ]
  ], 
  'fieldset' => [
    'default' => [
      'type' => 'tabs', 
      'fields' => [[
          'title' => 'Content', 
          'fields' => ['content', 'show_title']
        ], [
          'title' => 'Settings', 
          'fields' => [[
              'label' => 'Map', 
              'type' => 'group', 
              'divider' => true, 
              'fields' => ['type', 'zoom', 'controls', 'zooming', 'dragging', 'height', 'width', 'width_breakpoint', 'popup_max_width']
            ], [
              'label' => 'Style', 
              'description' => 'Only available for Google Maps.', 
              'type' => 'group', 
              'divider' => true, 
              'fields' => ['styler_hue', 'styler_lightness', 'styler_invert_lightness', 'styler_saturation', 'styler_gamma']
            ], [
              'label' => 'General', 
              'type' => 'group', 
              'fields' => ['position', 'position_left', 'position_right', 'position_top', 'position_bottom', 'position_z_index', 'margin', 'margin_remove_top', 'margin_remove_bottom', 'maxwidth', 'maxwidth_breakpoint', 'block_align', 'block_align_breakpoint', 'block_align_fallback', 'animation', '_parallax_button', 'visibility', 'container_padding_remove']
            ]]
        ], $config->get('builder.advanced')]
    ]
  ]
];
