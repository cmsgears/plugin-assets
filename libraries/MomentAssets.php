<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\assets\libraries;

// Yii Imports
use yii\web\View;

/**
 * Moment.js is a date library for parsing, manipulating, and formatting dates.
 *
 * @since 1.0.0
 */
class MomentAssets extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	// Path Configuration
	public $sourcePath	= '@bower/moment/min';

	// Load Javascript
	public $js = [
		'moment.min.js'
	];

	// Position to load Javascript
	public $jsOptions = [
		'position' => View::POS_END
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

	// MomentAssets --------------------------

}
