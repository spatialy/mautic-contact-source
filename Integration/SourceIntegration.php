<?php

/*
 * @copyright   2018 Mautic Contributors. All rights reserved
 * @author      Digital Media Solutions, LLC
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticContactSourceBundle\Integration;

use Mautic\PluginBundle\Integration\AbstractIntegration;

/**
 * Class SourceIntegration.
 *
 * This plugin does not add integrations. This is here purely for name/logo/etc.
 */
class SourceIntegration extends AbstractIntegration
{
    /**
     * @return string
     */
    public function getAuthenticationType()
    {
        return 'none';
    }

    /**
     * @return array
     */
    public function getSupportedFeatures()
    {
        return [];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Source';
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return 'Sources';
    }

    /**
     * @param \Symfony\Component\Form\FormBuilder $builder
     * @param array                               $data
     * @param string                              $formArea
     */
    public function appendToForm(&$builder, $data, $formArea)
    {
        if ('features' == $formArea) {
            $builder->add(
                'verbose',
                'text',
                [
                    'label'      => 'mautic.contactsource.api.verbose',
                    'data'       => !isset($data['verbose']) ? '1' : $data['verbose'],
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'tooltip' => 'mautic.contactsource.api.verbose.tooltip',
                    ],
                    'required'   => false,
                ]
            );
            $builder->add(
                'domain',
                'text',
                [
                    'label'      => 'mautic.contactsource.api.docs.domain',
                    'data'       => !isset($data['domain']) ? null : $data['domain'],
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'tooltip' => 'mautic.contactsource.api.docs.domain.tooltip',
                    ],
                    'required'   => false,
                ]
            );
            $builder->add(
                'assistance',
                'text',
                [
                    'label'      => 'mautic.contactsource.api.docs.assistance',
                    'data'       => !isset($data['assistance']) ? null : $data['assistance'],
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'tooltip' => 'mautic.contactsource.api.docs.assistance.tooltip',
                    ],
                    'required'   => false,
                ]
            );
            $builder->add(
                'introduction',
                'textarea',
                [
                    'label'      => 'mautic.contactsource.api.docs.introduction',
                    'data'       => !isset($data['introduction']) ? null : $data['introduction'],
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'   => 'form-control editor editor-advanced',
                        'tooltip' => 'mautic.contactsource.api.docs.introduction.tooltip',
                    ],
                    'required'   => false,
                ]
            );
        }
    }
}
