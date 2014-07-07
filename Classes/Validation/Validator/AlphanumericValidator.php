<?php
namespace Gjo\GjoExampleValidation\Validation\Validator;

use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;

class AlphanumericValidator extends AbstractValidator {

	/**
	 * The given $value is valid if it is an alphanumeric string, which is defined as [\pL\d]*.
	 *
	 * @param mixed $value The value that should be validated
	 * @return void
	 */
	public function isValid($value) {
		if (!is_string($value) || preg_match('/^[\pL\d]*$/u', $value) !== 1) {
			$this->addError($this->translateErrorMessage('Es ist keine AlphaNum', 'extbase'), 1221551320);
		}
	}


    public function evaluateFieldValue($value, $is_in, &$set) {



//        if (!is_string($value) || preg_match('/^[\pL\d]*$/u', $value) !== 1) {
//
//        }
        return $value . '[added by PHP aus NANAN]';
    }


}
