<?php

/*
 * This file is part of the Blackfire Player package.
 *
 * (c) Fabien Potencier <fabien@blackfire.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Blackfire\Player\Step;

/**
 * @author Fabien Potencier <fabien@blackfire.io>
 */
class ConfigurableStep extends AbstractStep
{
    protected $isBlackfireConfigured = false;

    private $auth;
    private $headers = [];
    private $wait;
    private $json;
    private $followRedirects;
    private $blackfire;
    private $samples;

    public function followRedirects($follow)
    {
        $this->followRedirects = $follow;

        return $this;
    }

    public function header($header)
    {
        $this->headers[] = $header;

        return $this;
    }

    public function auth($auth)
    {
        $this->auth = $auth;

        return $this;
    }

    public function wait($wait)
    {
        $this->wait = $wait;

        return $this;
    }

    public function json()
    {
        $this->json = true;

        return $this;
    }

    public function blackfire($env)
    {
        $this->blackfire = $env;

        return $this;
    }

    public function samples($samples)
    {
        $this->samples = $samples;
        $this->isBlackfireConfigured = true;

        return $this;
    }

    public function isFollowingRedirects()
    {
        return $this->followRedirects;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getAuth()
    {
        return $this->auth;
    }

    public function getWait()
    {
        return $this->wait;
    }

    public function isJson()
    {
        return $this->json;
    }

    public function getBlackfire()
    {
        return $this->blackfire;
    }

    public function getSamples()
    {
        return $this->samples;
    }
}
