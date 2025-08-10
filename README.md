# php-cloud-drive.core

1) Implement

| Type     | Entity                                                                   | Factory                                                                                 | Repository                                                                             |
|----------|--------------------------------------------------------------------------|-----------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------|
| Drive    | A3Naumov\CloudDriveCore\Infrastructure\Contract\Entity\DriveInterface    | A3Naumov\CloudDriveCore\Infrastructure\Contract\Factory\Entity\DriveFactoryInterface    | A3Naumov\CloudDriveCore\Infrastructure\Contract\Repository\DriveRepositoryInterface    |
| Resource | A3Naumov\CloudDriveCore\Infrastructure\Contract\Entity\ResourceInterface | A3Naumov\CloudDriveCore\Infrastructure\Contract\Factory\Entity\ResourceFactoryInterface | A3Naumov\CloudDriveCore\Infrastructure\Contract\Repository\ResourceRepositoryInterface |

2) Register available drivers

```php
/** @var \A3Naumov\CloudDriveContract\Drive\DriverInterface $driver */
$driver = ...;

/** @var \A3Naumov\CloudDriveCore\Domain\Service\DriverRegistry $driverRegistry */
$driverRegistry->register(driver: $driver);
```
