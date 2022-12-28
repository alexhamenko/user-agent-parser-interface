<?php

namespace Hillel\UserAgent\ParserInterface;

interface UserAgentParserInterface
{
    public function getBrowser(): string;
    public function getOS(): string;
}
