<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\Contract\UseCase\Resource\GetById;

interface CommandInterface
{
    public function getId(): string;
}
