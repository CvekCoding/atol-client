<?php

declare(strict_types=1);

namespace Lamoda\AtolClient\V4\DTO\Register;

use JMS\Serializer\Annotation as Serializer;

final class Item
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $price;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $quantity;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $sum;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("measurement_unit")
     */
    private $measurementUnit;

    /**
     * @var PaymentMethod
     *
     * @Serializer\Type("Enum<'Lamoda\AtolClient\V4\DTO\Register\PaymentMethod'>")
     * @Serializer\SerializedName("payment_method")
     */
    private $paymentMethod;

    /**
     * @var PaymentObject|null
     *
     * @Serializer\Type("Enum<'Lamoda\AtolClient\V4\DTO\Register\PaymentObject'>")
     * @Serializer\SerializedName("payment_object")
     */
    private $paymentObject;

    /**
     * @var Vat
     *
     * @Serializer\Type("Lamoda\AtolClient\V4\DTO\Register\Vat")
     */
    private $vat;

    /**
     * @var AgentInfo|null
     *
     * @Serializer\Type("Lamoda\AtolClient\V4\DTO\Register\AgentInfo")
     * @Serializer\SerializedName("agent_info")
     */
    private $agentInfo;

    /**
     * @var SupplierInfo|null
     *
     * @Serializer\Type("Lamoda\AtolClient\V4\DTO\Register\SupplierInfo")
     * @Serializer\SerializedName("supplier_info")
     */
    private $supplierInfo;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     */
    private $userData;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("nomenclature_code")
     */
    private $nomenclature;

    public function __construct(
        string $name,
        float $price,
        float $quantity,
        float $sum,
        PaymentMethod $paymentMethod,
        Vat $vat
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->sum = $sum;
        $this->paymentMethod = $paymentMethod;
        $this->vat = $vat;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getSum(): float
    {
        return $this->sum;
    }

    public function setSum(float $sum): self
    {
        $this->sum = $sum;

        return $this;
    }

    public function getMeasurementUnit(): ?string
    {
        return $this->measurementUnit;
    }

    public function setMeasurementUnit(?string $measurementUnit): self
    {
        $this->measurementUnit = $measurementUnit;

        return $this;
    }

    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(PaymentMethod $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getPaymentObject(): ?PaymentObject
    {
        return $this->paymentObject;
    }

    public function setPaymentObject(?PaymentObject $paymentObject): self
    {
        $this->paymentObject = $paymentObject;

        return $this;
    }

    public function getVat(): Vat
    {
        return $this->vat;
    }

    public function setVat(Vat $vat): self
    {
        $this->vat = $vat;

        return $this;
    }

    public function getAgentInfo(): ?AgentInfo
    {
        return $this->agentInfo;
    }

    public function setAgentInfo(?AgentInfo $agentInfo): self
    {
        $this->agentInfo = $agentInfo;

        return $this;
    }

    public function getSupplierInfo(): ?SupplierInfo
    {
        return $this->supplierInfo;
    }

    public function setSupplierInfo(?SupplierInfo $supplierInfo): self
    {
        $this->supplierInfo = $supplierInfo;

        return $this;
    }

    public function getUserData(): ?string
    {
        return $this->userData;
    }

    public function setUserData(?string $userData): self
    {
        $this->userData = $userData;

        return $this;
    }

    public function getNomenclature(): ?string
    {
        return $this->nomenclature;
    }

    public function setNomenclature(?string $nomenclature): self
    {
        $this->nomenclature = $nomenclature;

        return $this;
    }
}
