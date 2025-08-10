<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Domain\Exception\Resource;

use A3Naumov\CloudDriveContract\Exception\Resource\ResourceNotFoundExceptionInterface;

class ResourceNotFoundException extends \Exception implements ResourceNotFoundExceptionInterface
{
}
