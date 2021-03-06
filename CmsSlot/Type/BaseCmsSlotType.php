<?php

/*
 * (c) Vincent Bouzeran <vincent.bouzeran@elao.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elao\CmsSlotBundle\CmsSlot\Type;

abstract class BaseCmsSlotType implements CmsSlotTypeInterface
{
    protected $templateDisplay;
    protected $templateEdit;

    public function setTemplateDisplay($templateDisplay)
    {
        $this->templateDisplay = $templateDisplay;
    }

    public function getTemplateDisplay()
    {
        return $this->templateDisplay;
    }

    public function setTemplateEdit($templateEdit)
    {
        $this->templateEdit = $templateEdit;
    }

    public function getTemplateEdit()
    {
        return $this->templateEdit;
    }

}
