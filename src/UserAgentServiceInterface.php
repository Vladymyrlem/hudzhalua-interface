<?php

namespace Hudzhal\UserAgent;

interface UserAgentServiceInterface
{
    public function browser(): ?string;

    public function os(): ?string;
}
