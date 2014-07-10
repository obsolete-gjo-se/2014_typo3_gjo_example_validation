<?php
namespace Gjo\GjoExampleValidation\Validation\Validator;

use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;


class NumberRangeValidator extends AbstractValidator {

	/**
	 * @var array
	 */
	protected $supportedOptions = array(
		'minimum' => array(0, 'The minimum value to accept', 'integer'),
		'maximum' => array(PHP_INT_MAX, 'The maximum value to accept', 'integer'),
	);

	/**
	 * The given value is valid if it is a number in the specified range.
	 *
	 * @param mixed $value The value that should be validated
	 * @return void
	 * @api
	 */
	public function isValid($value) {
		if (!is_numeric($value)) {
			$this->addError(
				'validator.numberrange.notvalid Eigen',
                1404981850);
			return;
		}

		if (isset($this->options['minimum'])) {
			$minimum = $this->options['minimum'];
		} else {
			$minimum = 0;
		}
		if (isset($this->options['maximum'])) {
			$maximum = $this->options['maximum'];
		} else {
			$maximum = PHP_INT_MAX;
		}

		if ($minimum > $maximum) {
			$x = $minimum;
			$minimum = $maximum;
			$maximum = $x;
		}
		if ($value < $minimum || $value > $maximum) {
			$this->addError(
                "validator.numberrange.range ($minimum - $maximum)",
                1404981855,
                array($minimum, $maximum));
		}
	}
}
