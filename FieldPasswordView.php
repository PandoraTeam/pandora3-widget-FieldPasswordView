<?php
namespace Pandora3\Widgets\FieldPasswordView;

use Pandora3\Widgets\FieldText\FieldText;

/**
 * Class FieldPasswordView
 * @package Pandora3\Widgets\FieldPasswordView
 */
class FieldPasswordView extends FieldText {

	/**
	 * {@inheritdoc}
	 */
	protected function getView(): string {
		return __DIR__.'/Views/Widget';
	}

}