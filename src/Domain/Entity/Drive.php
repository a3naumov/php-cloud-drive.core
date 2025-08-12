<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Domain\Entity;

use A3Naumov\CloudDriveContract\Drive\DriverInterface;
use A3Naumov\CloudDriveContract\DriveInterface;
use A3Naumov\CloudDriveContract\ResourceInterface;
use A3Naumov\CloudDriveCore\Domain\Exception\Resource\ResourceNotFoundException;

class Drive implements DriveInterface
{
    public function __construct(
        private readonly ?string $id,
        private readonly DriverInterface $driver,
        private string $name,
    ) {
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getDriver(): DriverInterface
    {
        return $this->driver;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function addResource(ResourceInterface $resource): static
    {
        if (!$resource->getId()) {
            throw new ResourceNotFoundException();
        }

        $this->driver->addResource(drive: $this, resource: $resource);

        return $this;
    }
}
