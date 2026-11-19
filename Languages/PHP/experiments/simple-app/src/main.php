<?php
declare(strict_types=1);

require_once __DIR__ . "/Models/User.php";

use Models\User as MainUser;

function app(): void
{
    $newUser = new MainUser("D", 20);

    $newUser->getDetails();
}

app();
