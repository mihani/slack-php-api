<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class UsersProfileGetGetResponse200 extends \ArrayObject
{
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var ObjsUserProfile
     */
    protected $profile;

    /**
     * @return bool
     */
    public function getOk(): ?bool
    {
        return $this->ok;
    }

    /**
     * @param bool $ok
     *
     * @return self
     */
    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    /**
     * @return ObjsUserProfile
     */
    public function getProfile(): ?ObjsUserProfile
    {
        return $this->profile;
    }

    /**
     * @param ObjsUserProfile $profile
     *
     * @return self
     */
    public function setProfile(?ObjsUserProfile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }
}
