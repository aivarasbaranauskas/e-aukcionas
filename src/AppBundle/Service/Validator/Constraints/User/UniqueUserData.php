<?php

namespace AppBundle\Service\Validator\Constraints\User;

use Symfony\Component\Validator\Constraint;

class UniqueUserData extends Constraint
{
    /** @var string */
    public $message = 'Toks %field% jau egzistuoja.';

    /**
     * @inheritdoc
     */
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}
