<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\Contract\UseCase\Drive\Create;

use A3Naumov\CloudDriveCore\Application\Contract\Dto\Drive\DriveDtoInterface;
use A3Naumov\CloudDriveCore\Application\Contract\Exception\Drive\InvalidDriverExceptionInterface;

interface HandlerInterface
{
    /**
     * @throws InvalidDriverExceptionInterface
     */
    public function handle(CommandInterface $command): DriveDtoInterface;
}
