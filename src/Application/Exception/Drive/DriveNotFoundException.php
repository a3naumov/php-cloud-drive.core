<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\Exception\Drive;

use A3Naumov\CloudDriveCore\Application\Contract\Exception\Drive\DriveNotFoundExceptionInterface;

class DriveNotFoundException extends \Exception implements DriveNotFoundExceptionInterface
{
}
