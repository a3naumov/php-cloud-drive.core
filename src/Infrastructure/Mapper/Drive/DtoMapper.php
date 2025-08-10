<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Infrastructure\Mapper\Drive;

use A3Naumov\CloudDriveContract\DriveInterface;
use A3Naumov\CloudDriveCore\Infrastructure\Contract\Dto\Drive\DriveDtoInterface;
use A3Naumov\CloudDriveCore\Infrastructure\Dto\Drive\DriveDto;

class DtoMapper
{
    public function fromDomain(DriveInterface $drive): DriveDtoInterface
    {
        return new DriveDto(
            id: $drive->getId(),
            driver: $drive->getDriver()->getCode(),
            name: $drive->getName(),
        );
    }
}
