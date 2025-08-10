<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\UseCase\Resource\GetList;

use A3Naumov\CloudDriveContract\ResourceInterface;
use A3Naumov\CloudDriveCore\Application\Contract\UseCase\Resource\GetList\CommandInterface;
use A3Naumov\CloudDriveCore\Application\Contract\UseCase\Resource\GetList\HandlerInterface;
use A3Naumov\CloudDriveCore\Application\Mapper\Resource\ResourceMapper;
use A3Naumov\CloudDriveCore\Domain\Contract\Repository\ResourceRepositoryInterface;

class Handler implements HandlerInterface
{
    public function __construct(
        private readonly ResourceRepositoryInterface $resourceRepository,
        private readonly ResourceMapper $resourceMapper,
    ) {
    }

    public function handle(CommandInterface $command): array
    {
        return array_values(array_map(
            fn (ResourceInterface $resource) => $this->resourceMapper->fromDomain($resource),
            $this->getResources($command),
        ));
    }

    /**
     * @return ResourceInterface[]
     */
    private function getResources(CommandInterface $command): array
    {
        if ($command->getParentId()) {
            return $this->resourceRepository->findByParentId($command->getParentId());
        }

        if ($command->getDriveId()) {
            return $this->resourceRepository->findByDriveId($command->getDriveId());
        }

        return [];
    }
}
