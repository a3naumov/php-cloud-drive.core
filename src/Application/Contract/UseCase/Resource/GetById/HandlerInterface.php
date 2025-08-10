<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\Contract\UseCase\Resource\GetById;

use A3Naumov\CloudDriveCore\Application\Contract\Dto\Resource\ResourceDtoInterface;

interface HandlerInterface
{
    public function handle(CommandInterface $command): ?ResourceDtoInterface;
}
