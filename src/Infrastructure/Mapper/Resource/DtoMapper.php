<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Infrastructure\Mapper\Resource;

use A3Naumov\CloudDriveContract\ResourceInterface;
use A3Naumov\CloudDriveCore\Infrastructure\Contract\Dto\Resource\ResourceDtoInterface;
use A3Naumov\CloudDriveCore\Infrastructure\Dto\Resource\ResourceDto;

class DtoMapper
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
}
