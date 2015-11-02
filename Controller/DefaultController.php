<?php

namespace AppVentus\AlmanachBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/{framework}")
     * @Template()
     */
    public function indexAction($framework)
    {
        $almanach = $this->getParameter('almanach_'.$framework);
        $button = ($almanach['button']) ?: null;
        $dropdownButton = ($almanach['dropdownButton']) ?: null;
        $splitDropdownButton = ($almanach['splitDropdownButton']) ?: null;
        $buttonGroup = ($almanach['buttonGroup']) ?: null;

        return [
            'framework'                  => $framework,
            'config_button'              => $button,
            'config_dropdownButton'      => $dropdownButton,
            'config_splitDropdownButton' => $splitDropdownButton,
            'config_buttonGroup'         => $buttonGroup,
        ];
    }
}
