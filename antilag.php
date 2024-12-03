<?php

$webhook_url = "https://discord.com/api/webhooks/1313326574254297088/v7Z_g7d40NUlMY3jlXajJG55usZGEuArfvU9Ek2OFlso7i6Ur30MhQsj8fSHvada2mxA";

$auth_key = "skibidiskibidiskibiditoilets"; 

if (isset($_GET['key']) && $_GET['key'] === $auth_key) {
    echo $webhook_url;
} else {
    http_response_code(403);
    echo "Forbidden kys fag";
}
?>
