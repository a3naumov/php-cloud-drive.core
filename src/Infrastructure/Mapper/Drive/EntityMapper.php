<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Infrastructure\Mapper\Drive;

use A3Naumov\CloudDriveContract\DriveInterface;
use A3Naumov\CloudDriveCore\Domain\Entity\Drive;
use A3Naumov\CloudDriveCore\Domain\Exception\Drive\InvalidDriverException;
use A3Naumov\CloudDriveCore\Domain\Service\DriverRegistry;
use A3Naumov\CloudDriveCore\Infrastructure\Contract\Entity\DriveInterface as InfrastructureDriveInterface;
use A3Naumov\CloudDriveCore\Infrastructure\Contract\Factory\Entity\DriveFactoryInterface;

class EntityMapper
{
    public function __construct(
        private readonly DriverRegistry $driverRegistry,
        private readonly DriveFactoryInterface $driveFactory,
        private readonly DtoMapper $dtoMapper,
    ) {
    }

    public function fromDomain(DriveInterface $drive): InfrastructureDriveInterface
    {
        return $this->driveFactory->create(
            driveDto: $this->dtoMapper->fromDomain($drive),
        );
    }

    /**
     * @throws InvalidDriverException
     */
    public function toDomain(InfrastructureDriveInterface $drive): DriveInterface
    {
        return new Drive(
            id: $drive->getId()?->__toString(),
            driver: $this->driverRegistry->get($drive->getDriver()),
            name: $drive->getName(),
        );
    }
}
