<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
abstract class AbstractPayload implements PayloadInterface
{
    /**
     * {@inheritdoc}
     */
    public function getResponseClass()
    {
        return sprintf('%sResponse', get_class($this));
    }
}
