<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\Mapper\Resource;

use A3Naumov\CloudDriveContract\ResourceInterface;
use A3Naumov\CloudDriveCore\Application\Contract\Dto\Resource\ResourceDtoInterface;
use A3Naumov\CloudDriveCore\Application\Contract\UseCase\Resource\Create;
use A3Naumov\CloudDriveCore\Application\Dto\Resource\ResourceDto;

class ResourceMapper
{
    public function fromDomain(ResourceInterface $resource): ResourceDtoInterface
    {
        return new ResourceDto(
            id: $resource->getId(),
            driveId: $resource->getDriveId(),
            parentId: $resource->getParentId(),
            name: $resource->getName(),
        );
    }

    public function fromResourceCreateCommand(Create\CommandInterface $command): ResourceDtoInterface
    {
        return new ResourceDto(
            id: null,
            driveId: $command->getDriveId(),
            parentId: $command->getParentId(),
            name: $command->getName(),
        );
    }
}
