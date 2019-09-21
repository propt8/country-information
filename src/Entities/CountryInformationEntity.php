<?php

namespace propt8\Country\Entities;

class CountryInformationEntity extends Entity
{
    /**
     * @var string
     */
    protected $countryName;

    /**
     * @var null|string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $countryAlpha3Code;

    /**
     * @var int
     */
    protected $countryNumericCode;

    /**
     * @var string
     */
    protected $capital;

    /**
     * @var string
     */
    protected $countryDemonym;

    /**
     * @var null|int
     */
    protected $totalArea;

    /**
     * @var null|int
     */
    protected $population;

    /**
     * @var null|string
     */
    protected $iddCode;

    /**
     * @var null|string
     */
    protected $currencyCode;

    /**
     * @var null|string
     */
    protected $currencyName;

    /**
     * @var null|string
     */
    protected $currencySymbol;

    /**
     * @var null|string
     */
    protected $langCode;

    /**
     * @var null|string
     */
    protected $langName;

    /**
     * @var null|string
     */
    protected $cctld;

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return CountryInformationEntity
     */
    public function setCountryName(string $countryName): CountryInformationEntity
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $countryCode
     * @return CountryInformationEntity
     */
    public function setCountryCode(?string $countryCode): CountryInformationEntity
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryAlpha3Code(): string
    {
        return $this->countryAlpha3Code;
    }

    /**
     * @param string $countryAlpha3Code
     * @return CountryInformationEntity
     */
    public function setCountryAlpha3Code(string $countryAlpha3Code): CountryInformationEntity
    {
        $this->countryAlpha3Code = $countryAlpha3Code;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryNumericCode(): int
    {
        return $this->countryNumericCode;
    }

    /**
     * @param int $countryNumericCode
     * @return CountryInformationEntity
     */
    public function setCountryNumericCode(int $countryNumericCode): CountryInformationEntity
    {
        $this->countryNumericCode = $countryNumericCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCapital(): string
    {
        return $this->capital;
    }

    /**
     * @param string $capital
     * @return CountryInformationEntity
     */
    public function setCapital(string $capital): CountryInformationEntity
    {
        $this->capital = $capital;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryDemonym(): string
    {
        return $this->countryDemonym;
    }

    /**
     * @param string $countryDemonym
     * @return CountryInformationEntity
     */
    public function setCountryDemonym(string $countryDemonym): CountryInformationEntity
    {
        $this->countryDemonym = $countryDemonym;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalArea(): ?int
    {
        return $this->totalArea;
    }

    /**
     * @param int|null $totalArea
     * @return CountryInformationEntity
     */
    public function setTotalArea(?int $totalArea): CountryInformationEntity
    {
        $this->totalArea = $totalArea;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPopulation(): ?int
    {
        return $this->population;
    }

    /**
     * @param int|null $population
     * @return CountryInformationEntity
     */
    public function setPopulation(?int $population): CountryInformationEntity
    {
        $this->population = $population;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIddCode(): ?string
    {
        return $this->iddCode;
    }

    /**
     * @param string|null $iddCode
     * @return CountryInformationEntity
     */
    public function setIddCode(?string $iddCode): CountryInformationEntity
    {
        $this->iddCode = $iddCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @param string|null $currencyCode
     * @return CountryInformationEntity
     */
    public function setCurrencyCode(?string $currencyCode): CountryInformationEntity
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencyName(): ?string
    {
        return $this->currencyName;
    }

    /**
     * @param string|null $currencyName
     * @return CountryInformationEntity
     */
    public function setCurrencyName(?string $currencyName): CountryInformationEntity
    {
        $this->currencyName = $currencyName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencySymbol(): ?string
    {
        return $this->currencySymbol;
    }

    /**
     * @param string|null $currencySymbol
     * @return CountryInformationEntity
     */
    public function setCurrencySymbol(?string $currencySymbol): CountryInformationEntity
    {
        $this->currencySymbol = $currencySymbol;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLangCode(): ?string
    {
        return $this->langCode;
    }

    /**
     * @param string|null $langCode
     * @return CountryInformationEntity
     */
    public function setLangCode(?string $langCode): CountryInformationEntity
    {
        $this->langCode = $langCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLangName(): ?string
    {
        return $this->langName;
    }

    /**
     * @param string|null $langName
     * @return CountryInformationEntity
     */
    public function setLangName(?string $langName): CountryInformationEntity
    {
        $this->langName = $langName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCctld(): ?string
    {
        return $this->cctld;
    }

    /**
     * @param string|null $cctld
     * @return CountryInformationEntity
     */
    public function setCctld(?string $cctld): CountryInformationEntity
    {
        $this->cctld = $cctld;
        return $this;
    }
}