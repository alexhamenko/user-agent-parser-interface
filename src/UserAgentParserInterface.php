<?php

namespace Hillel\UserAgent\ParserInterface;

interface UserAgentParserInterface
{
    public function parse(): void;
    public function getBrowser(): string;
    public function getOS(): string;
}
