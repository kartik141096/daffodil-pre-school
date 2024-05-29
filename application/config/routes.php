<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Gallery
$route['photo-gallery'] = 'Web/photo_gallery';
$route['video-gallery'] = 'Web/video_gallery';
$route['ecard-gallery'] = 'Web/ecard_gallery';
