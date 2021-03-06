<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ChannelsHistoryGetResponse200 extends \ArrayObject
{
    /**
     * @var bool
     */
    protected $hasMore;
    /**
     * @var ObjsMessage[]
     */
    protected $messages;
    /**
     * @var bool
     */
    protected $ok;

    /**
     * @return bool
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
     * @param bool $hasMore
     *
     * @return self
     */
    public function setHasMore(?bool $hasMore): self
    {
        $this->hasMore = $hasMore;

        return $this;
    }

    /**
     * @return ObjsMessage[]
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }

    /**
     * @param ObjsMessage[] $messages
     *
     * @return self
     */
    public function setMessages(?array $messages): self
    {
        $this->messages = $messages;

        return $this;
    }

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
}
