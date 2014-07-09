<?php
namespace Gjo\GjoExampleValidation\Validation\Validator;

use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;

class AlphanumericValidator extends AbstractValidator
{

    const REGEX_NOT_IN_WHITELIST = '/[^a-zAZäöüÄÖÜß0-9]/';
    const ERROR_CODE = 1404819258;

    /**
     * The given $value is valid if it is an alphanumeric string.
     *
     * @param mixed $value The value that should be validated
     * @return void
     */
    public function isValid($value)
    {
        if (preg_match(self::REGEX_NOT_IN_WHITELIST, $value) === 1) {
            $this->addError('Fehlermeldung - am besten aus LLL', self::ERROR_CODE);
        }
    }

    /**
     * This function just return the field value as it is. No transforming,
     * hashing will be done on server-side.
     *
     * @return string JavaScript code for evaluating the
     */
    public function returnFieldJS()
    {
        return 'return value;';
    }


    /**
     * Verändert den übergebenen Wert $value gemäß Regex.
     *
     * @param $value - The field value to be evaluated
     * @param $is_in - The "is_in" value of the field configuration from TCA
     * @param $set - Boolean defining if the value is written to the database or not.
     * @return mixed
     */
    public function evaluateFieldValue($value, $is_in, &$set)
    {
        return preg_replace(self::REGEX_NOT_IN_WHITELIST, '', $value);
    }


}
