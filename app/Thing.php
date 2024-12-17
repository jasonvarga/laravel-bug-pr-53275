<?php

namespace App;

class Thing implements ThingInterface
{
    public function __construct(private string $handle) {}
}
