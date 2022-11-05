<?php

namespace Hudzhal\UserAgent;

interface UserAgentServiceInterface
{
    public function parse($ua);

    public function browser(): ?string;

    public function os(): ?string;
}
