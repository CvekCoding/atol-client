<?php

declare(strict_types=1);

namespace Lamoda\AtolClient\V4\DTO\Correction;

use JMS\Serializer\Annotation as Serializer;

final class CorrectionInfo
{
    /**
     * @var CorrectionType
     *
     * @Serializer\Type("Enum<'Lamoda\AtolClient\V4\DTO\Correction\CorrectionType'>")
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime<'d.m.Y'>")
     * @Serializer\SerializedName("base_date")
     */
    private $baseDate;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("base_number")
     */
    private $baseNumber;

    public function __construct(CorrectionType $type, \DateTime $baseDate, string $baseNumber)
    {
        $this->type = $type;
        $this->baseDate = $baseDate;
        $this->baseNumber = $baseNumber;
    }

    public function getType(): CorrectionType
    {
        return $this->type;
    }

    public function setType(CorrectionType $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getBaseDate(): \DateTime
    {
        return $this->baseDate;
    }

    public function setBaseDate(\DateTime $baseDate): self
    {
        $this->baseDate = $baseDate;

        return $this;
    }

    public function getBaseNumber(): string
    {
        return $this->baseNumber;
    }

    public function setBaseNumber(string $baseNumber): self
    {
        $this->baseNumber = $baseNumber;

        return $this;
    }

}
