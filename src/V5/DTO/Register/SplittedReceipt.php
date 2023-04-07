<?php

declare(strict_types=1);

namespace Lamoda\AtolClient\V5\DTO\Register;

use JMS\Serializer\Annotation as Serializer;

final class SplittedReceipt
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $uuid;

    public function getUuid(): string
    {
        return $this->uuid;
    }
}
