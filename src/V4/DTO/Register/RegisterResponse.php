<?php

declare(strict_types=1);

namespace Lamoda\AtolClient\V4\DTO\Register;

use JMS\Serializer\Annotation as Serializer;
use Lamoda\AtolClient\V4\DTO\Shared\ErrorTrait;
use Lamoda\AtolClient\V4\DTO\Shared\TimestampTrait;

final class RegisterResponse
{
    use TimestampTrait;
    use ErrorTrait;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     */
    private $uuid;

    /**
     * @var SplitReceipt[]|null
     *
     * @Serializer\SerializedName("split_receipt_data")
     * @Serializer\Type("array<Lamoda\AtolClient\V4\DTO\Register\SplitReceipt>")
     */
    private $splitReceipts;

    /**
     * @var Status | null
     *
     * @Serializer\Type("Enum<'Lamoda\AtolClient\V4\DTO\Register\Status'>")
     */
    private $status;

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function getSplitReceipts(): ?array
    {
        return $this->splitReceipts;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }
}
