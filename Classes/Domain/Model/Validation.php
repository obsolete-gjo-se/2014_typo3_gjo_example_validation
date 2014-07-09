<?php
namespace Gjo\GjoExampleValidation\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Validation extends AbstractEntity
{
    /**
     * @var string
     * @validate Gjo.GjoExampleValidation:Alphanumeric
     */
    protected $alphanumeric = '';

    /**
     * @var string
     *
     */
    protected $notEmpty = '';

    /**
     * @param string $alphanumeric
     * @return void
     */
    public function setAlphanumeric($alphanumeric)
    {
        $this->alphanumeric = $alphanumeric;
    }

    /**
     * @return string
     */
    public function getAlphanumeric()
    {
        return $this->alphanumeric;
    }

    /**
     * @param mixed $notEmpty
     * @return void
     */
    public function setNotEmpty($notEmpty)
    {
        $this->notEmpty = $notEmpty;
    }

    /**
     * @return string
     */
    public function getNotEmpty()
    {
        return $this->notEmpty;
    }



}