<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\Factory\Entity;

use A3Naumov\CloudDriveContract\DriveInterface;
use A3Naumov\CloudDriveCore\Application\Contract\Dto\Drive\DriveDtoInterface;
use A3Naumov\CloudDriveCore\Domain\Entity\Drive;
use A3Naumov\CloudDriveCore\Domain\Exception\Drive\InvalidDriverException;
use A3Naumov\CloudDriveCore\Domain\Service\DriverRegistry;

class DriveFactory
{
    public function __construct(
        private readonly DriverRegistry $driverRegistry,
    ) {
    }

    /**
     * @throws InvalidDriverException
     */
    public function create(DriveDtoInterface $driveDto): DriveInterface
    {
        return new Drive(
            id: null,
            driver: $this->driverRegistry->get($driveDto->getDriver()),
            name: $driveDto->getName(),
        );
    }
}
