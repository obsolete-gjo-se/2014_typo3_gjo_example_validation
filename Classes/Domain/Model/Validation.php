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
     * @validate Gjo.GjoExampleValidation:Required
     */
    protected $notEmpty = '';

    /**
     * @var int
     * @validate Gjo.GjoExampleValidation:NumberRange(minimum=0, maximum=100)
     */
    protected $numberRange = 0;

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

    /**
     * @param int $numberRange
     * @return void
     */
    public function setNumberRange($numberRange)
    {
        $this->numberRange = $numberRange;
    }

    /**
     * @return int
     */
    public function getNumberRange()
    {
        return $this->numberRange;
    }





}