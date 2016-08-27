<?php

namespace markety\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class marketyUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
