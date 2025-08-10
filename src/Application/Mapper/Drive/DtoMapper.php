<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\Mapper\Drive;

use A3Naumov\CloudDriveContract\DriveInterface;
use A3Naumov\CloudDriveCore\Application\Contract\Dto\Drive\DriveDtoInterface;
use A3Naumov\CloudDriveCore\Application\Contract\UseCase\Drive\Create;
use A3Naumov\CloudDriveCore\Application\Dto\Drive\DriveDto;

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

    public function fromDriveCreateCommand(Create\CommandInterface $command): DriveDtoInterface
    {
        return new DriveDto(
            id: null,
            driver: $command->getDriver(),
            name: $command->getName(),
        );
    }
}
