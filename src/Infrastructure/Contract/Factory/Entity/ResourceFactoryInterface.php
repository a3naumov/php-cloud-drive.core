<?php

declare(strict_types=1);

namespace A3Naumov\CloudDriveCore\Infrastructure\Contract\Factory\Entity;

use A3Naumov\CloudDriveCore\Infrastructure\Contract\Dto\Resource\ResourceDtoInterface;
use A3Naumov\CloudDriveCore\Infrastructure\Contract\Entity\ResourceInterface;

interface ResourceFactoryInterface
{
    /**
     * @throws \InvalidArgumentException
     */
    public function create(ResourceDtoInterface $resourceDto): ResourceInterface;
}
