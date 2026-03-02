<?php
require_once '../app/config/config.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {

    case 'about':
        require '../app/views/frontend/about.php';
        break;

    case 'courses':
        require '../app/views/frontend/courses.php';
        break;

    case 'results':
        require '../app/views/frontend/results.php';
        break;

    case 'faculty':
        require '../app/views/frontend/faculty.php';
        break;

    case 'admissions':
        require '../app/views/frontend/admissions.php';
        break;

    case 'gallery':
        require '../app/views/frontend/gallery.php';
        break;

    case 'testimonials':
        require '../app/views/frontend/testimonials.php';
        break;

    case 'faq':
        require '../app/views/frontend/faq.php';
        break;

    case 'contact':
        require '../app/views/frontend/contact.php';
        break;

    default:
        require '../app/views/frontend/index.php';
}