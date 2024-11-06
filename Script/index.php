<?php
// Default to 'login' if no 'page' parameter is given
$page = isset($_GET['page']) ? $_GET['page'] : 'login';

// Construct the path to the page
$pagePath = 'pages/' . $page . '.php';

// Check if the file exists before including
if (file_exists($pagePath)) {
    require_once($pagePath);
} else {
    // Handle the error if the file doesn't exist
    echo "Page '$page' not found!";
}
?>
