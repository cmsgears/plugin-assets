<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\assets\components;

// Yii Imports
use yii\web\AssetBundle;
use yii\web\View;

/**
 * IntlTelInput can be used to accept international numbers.
 *
 * @since 1.0.0
 */
class IntlTelInput extends AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	/**
	 * @inheritdoc
	 */
	public $sourcePath = '@bower/intl-tel-input';

	/**
	 * @inheritdoc
	 */
	public $css = [
		'build/css/intlTelInput.min'
	];

	/**
	 * @inheritdoc
	 */
	public $cssOptions = [
		'position' => View::POS_HEAD
	];

	/**
	 * @inheritdoc
	 */
	public $js = [
		'build/js/utils.js',
		'build/js/intlTelInput.min.js',
		'build/js/intlTelInput-jquery.min.js'
	];

	/**
	 * @inheritdoc
	 */
	public $jsOptions = [
		'position' => View::POS_END
	];

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// IntlTelInput --------------------------

}
