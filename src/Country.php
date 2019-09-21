<?php

namespace propt8\Country;

use propt8\Country\Entities\CountryInformationEntity;
use propt8\Country\Entities\Entity;

/**
 * Class Country
 * @package propt8\Country
 * @method static Country countryName(string $key)
 * @method static Country countryCode(string $key)
 * @method static Country countryAlpha3Code(string $key)
 * @method static Country countryNumericCode(int $key)
 * @method static Country capital(string $key)
 * @method static Country countryDemonym(string $key)
 * @method static Country totalArea(int $key)
 * @method static Country population(int $key)
 * @method static Country iddCode(string $key)
 * @method static Country currencyCode(string $key)
 * @method static Country currencyName(string $key)
 * @method static Country currencySymbol(string $key)
 * @method static Country langCode(string $key)
 * @method static Country langName(string $key)
 * @method static Country cctld(string $key)
 *
 * @method CountryInformationEntity toArray()
 * @method CountryInformationEntity getCountryName()
 * @method CountryInformationEntity getCountryCode()
 * @method CountryInformationEntity getCountryAlpha3Code()
 * @method CountryInformationEntity getCountryNumericCodee()
 * @method CountryInformationEntity getCapital()
 * @method CountryInformationEntity getCountryDemonym()
 * @method CountryInformationEntity getTotalArea()
 * @method CountryInformationEntity getPopulation()
 * @method CountryInformationEntity getIddCode()
 * @method CountryInformationEntity getCurrencyCode()
 * @method CountryInformationEntity getCurrencyName()
 * @method CountryInformationEntity getCurrencySymbol()
 * @method CountryInformationEntity getLangCode()
 * @method CountryInformationEntity getLangName()
 * @method CountryInformationEntity getCctld()
 */
class Country
{
    /**
     * @param $method
     * @param $arguments
     * @return CountryInformationEntity|null
     * @throws \Exception
     */
    public static function __callStatic($method, $arguments): ?CountryInformationEntity
    {
        if (!self::validateMethod($method)) {
            throw new \Exception('METHOD_NOT_FOUND');
        }

        if(empty($arguments[0]) || !is_string($arguments[0])) {
            throw new \Exception('KEY_IS_REQUIRED');
        }

        return self::search($method, $arguments[0]);
    }

    /**
     * @param string $method
     * @return bool
     */
    private static function validateMethod(string $method): bool
    {
        return in_array(unCamelCase($method), array_keys(Resource::$country[0]));
    }

    /**
     * @param string $type
     * @param $key
     * @return CountryInformationEntity|null
     * @throws \Exception
     */
    public static function search(string $type, $key): ?CountryInformationEntity
    {
        $type = unCamelCase($type);

        foreach (Resource::$country as $country) {
            if (strtolower($country[$type]) == strtolower($key)) {
                return Entity::toObject(new CountryInformationEntity(), $country);
            }
        }

        throw new \Exception('NOT_FOUND');
    }
}