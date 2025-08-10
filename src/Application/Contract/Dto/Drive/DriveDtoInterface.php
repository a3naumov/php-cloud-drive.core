<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\Contract\Dto\Drive;

interface DriveDtoInterface
{
    public function getId(): ?string;

    public function getDriver(): string;

    public function getName(): string;
}
