<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\UseCase\Drive\Delete;

use A3Naumov\CloudDriveCore\Application\Contract\UseCase\Drive\Delete\CommandInterface;

class Command implements CommandInterface
{
    public function __construct(
        private readonly string $id,
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }
}
