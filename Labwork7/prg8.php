<?php
$db_env = getenv('DB_ENV') ?: 'development';

switch ($db_env) {
    case 'production':
        echo "Loading production DB config...";
        break;
    case 'staging':
        echo "Loading staging DB config...";
        break;
    default:
        echo "Loading development DB config...";
}
?>
