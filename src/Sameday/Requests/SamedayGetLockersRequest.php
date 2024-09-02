<?php

namespace Sameday\Requests;

use Sameday\Http\SamedayRequest;

/**
 * Request to get lockers list.
 *
 * @package Sameday
 */
class SamedayGetLockersRequest implements SamedayRequestInterface
{
    /**
     * @var array
     */
    protected $lockerIds;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $locale;

    /**
     * SamedayGetLockersRequest constructor.
     *
     * @param array $lockerIds
     */
    public function __construct(array $lockerIds = [], string $countryCode = 'RO', string $locale = 'ro')
    {
        $this->lockerIds = $lockerIds;
        $this->countryCode = $countryCode;
        $this->locale = $locale;
    }

    /**
     * @inheritdoc
     */
    public function buildRequest()
    {
        return new SamedayRequest(
            true,
            'GET',
            "/api/locker/lockers?_format=json&countryCode={$this->countryCode}&_locale={$this->locale}",
            count($this->lockerIds) > 0 ? ['lockersList' => implode(',', $this->lockerIds)] : []
        );
    }

    /**
     * @return array
     */
    public function getLockerIds()
    {
        return $this->lockerIds;
    }

    /**
     * @param array $lockerIds
     *
     * @return $this
     */
    public function setLockerIds(array $lockerIds)
    {
        $this->lockerIds = $lockerIds;

        return $this;
    }
}
