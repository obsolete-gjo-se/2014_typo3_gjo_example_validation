<?php
namespace Gjo\GjoExampleValidation\Validation\Validator;

use TYPO3\CMS\Extbase\Validation\Validator\NotEmptyValidator;

class RequiredValidator extends NotEmptyValidator
{

    /**
     * Checks if the given property ($propertyValue) is not empty (NULL, empty string, empty array or empty object).
     *
     * If at least one error occurred, the result is FALSE.
     *
     * @param mixed $value The value that should be validated
     * @return boolean TRUE if the value is valid, FALSE if an error occurred
     */
    public function isValid($value) {

        if ($value === NULL) {
            $this->addError(
                'validator.notempty.null',
                1404977877);
        }
        if ($value === '') {
            $this->addError(
                'validator.notempty.empty',
                1404977880);
        }
        if (is_array($value) && empty($value)) {
            $this->addError(
                'validator.notempty.empty',
                1404977885);
        }
        if (is_object($value) && $value instanceof \Countable && $value->count() === 0) {
            $this->addError(
                'validator.notempty.empty',
                1404977890);
        }
    }

}
