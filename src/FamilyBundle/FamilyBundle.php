<?php

namespace FamilyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FamilyBundle extends Bundle
{
    public function getParent()
    {
        return "FOSUserBundle";
    }
}