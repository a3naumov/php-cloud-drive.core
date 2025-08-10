<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Infrastructure\Repository;

use A3Naumov\CloudDriveContract\ResourceInterface;
use A3Naumov\CloudDriveCore\Domain\Contract\Repository\ResourceRepositoryInterface;
use A3Naumov\CloudDriveCore\Infrastructure\Contract\Entity\ResourceInterface as InfrastructureResourceInterface;
use A3Naumov\CloudDriveCore\Infrastructure\Contract\Repository\ResourceRepositoryInterface as InfrastructureResourceRepositoryInterface;
use A3Naumov\CloudDriveCore\Infrastructure\Mapper\Resource\EntityMapper;

class ResourceRepository implements ResourceRepositoryInterface
{
    public function __construct(
        private readonly InfrastructureResourceRepositoryInterface $infrastructureRepository,
        private readonly EntityMapper $mapper,
    ) {
    }

    public function findById(string $id): ?ResourceInterface
    {
        $infrastructureResource = $this->infrastructureRepository->findById($id);

        return $infrastructureResource
            ? $this->mapper->toDomain($infrastructureResource)
            : null;
    }

    public function findByDriveId(string $driveId): array
    {
        return array_values(array_map(
            fn (InfrastructureResourceInterface $resource) => $this->mapper->toDomain($resource),
            $this->infrastructureRepository->findByDriveId($driveId),
        ));
    }

    public function findByParentId(string $parentId): array
    {
        return array_values(array_map(
            fn (InfrastructureResourceInterface $resource) => $this->mapper->toDomain($resource),
            $this->infrastructureRepository->findByParentId($parentId),
        ));
    }

    public function save(ResourceInterface $resource): ResourceInterface
    {
        $infrastructureResource = $this->infrastructureRepository->save(
            resource: $this->mapper->fromDomain($resource),
        );

        return $this->mapper->toDomain($infrastructureResource);
    }
}
