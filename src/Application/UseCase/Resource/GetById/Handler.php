<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Application\UseCase\Resource\GetById;

use A3Naumov\CloudDriveCore\Application\Contract\Dto\Resource\ResourceDtoInterface;
use A3Naumov\CloudDriveCore\Application\Contract\UseCase\Resource\GetById\CommandInterface;
use A3Naumov\CloudDriveCore\Application\Contract\UseCase\Resource\GetById\HandlerInterface;
use A3Naumov\CloudDriveCore\Application\Mapper\Resource\ResourceMapper;
use A3Naumov\CloudDriveCore\Domain\Contract\Repository\ResourceRepositoryInterface;

class Handler implements HandlerInterface
{
    public function __construct(
        private readonly ResourceRepositoryInterface $resourceRepository,
        private readonly ResourceMapper $resourceMapper,
    ) {
    }

    public function handle(CommandInterface $command): ?ResourceDtoInterface
    {
        $resource = $this->resourceRepository->findById($command->getId());

        return $resource
            ? $this->resourceMapper->fromDomain($resource)
            : null;
    }
}
