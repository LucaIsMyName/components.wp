<?php

add_action('admin_head', 'customAdminStyles');
function customAdminStyles()
{
  echo '<style>
  #dashboard-widgets .postbox-container {
    width: 100% !important;
}
  </style>';
}