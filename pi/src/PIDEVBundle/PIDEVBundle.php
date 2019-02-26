<?php

namespace PIDEVBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PIDEVBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }

}
