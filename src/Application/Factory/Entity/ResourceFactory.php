<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\Factory\Entity;

use A3Naumov\CloudDriveContract\ResourceInterface;
use A3Naumov\CloudDriveCore\Application\Contract\Dto\Resource\ResourceDtoInterface;
use A3Naumov\CloudDriveCore\Domain\Entity\Resource;

class ResourceFactory
{
    public function create(ResourceDtoInterface $resourceDto): ResourceInterface
    {
        return new Resource(
            id: null,
            driveId: $resourceDto->getDriveId(),
            parentId: $resourceDto->getParentId(),
            name: $resourceDto->getName(),
        );
    }
}
