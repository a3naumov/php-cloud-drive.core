<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\Contract\UseCase\Resource\Create;

use A3Naumov\CloudDriveCore\Application\Contract\Dto\Resource\ResourceDtoInterface;
use A3Naumov\CloudDriveCore\Application\Contract\Exception\Drive\DriveNotFoundExceptionInterface;

interface HandlerInterface
{
    /**
     * @throws DriveNotFoundExceptionInterface
     */
    public function handle(CommandInterface $command): ResourceDtoInterface;
}
