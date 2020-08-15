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
use yii\web\View;

/**
 * A complete implementation of date and time picker.
 *
 * @since 1.0.0
 */
class DateTimeAssets extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	// Path Configuration
	public $sourcePath = '@bower/datetimepicker/build';

	// Load Javascript
	public $js = [
		'jquery.datetimepicker.full.min.js'
	];

	// Position to load Javascript
	public $jsOptions = [
		'position' => View::POS_END
	];

	public $css = [
		'jquery.datetimepicker.min.css'
	];

	// Define dependent Asset Loaders
	public $depends = [
		'cmsgears\assets\jquery\Jquery'
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

	// DateTimeAssets ------------------------

}
