<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <!-- Le styles -->
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style> 

<?php
    include_once 'templates/render.php';
    $render = new render();
    $arrFileCSS = array(
            'bootstrap.css',
            'datepicker.css',
            'bootstrap-responsive.css',
            'style.css',
            'editor.css'
    );
    $render->renderCSS('admin', $arrFileCSS);
    $arrFileJS = array(
        'jquery.js',
        'jquery-ui-custom.js',
        'bootstrap.js',
        'bootstrap-datepicker.js',
        'editor/editor.js',
        'editor/vi.js'
    );
    $render->renderJS('admin', $arrFileJS);
?>
    <link href="<?php echo URL_BASE ?>/favicon.ico" rel="shortcut icon"/>

    <!-- Le styles -->