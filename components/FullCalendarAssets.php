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
 * Full Calendar can be used to manage calendar events.
 *
 * @since 1.0.0
 */
class FullCalendarAssets extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	// Path Configuration
	public $sourcePath	= '@themes/assets/vendor/fullcalendar/lib';

	// Load Javascript
	public $js = [
		'main.min.js'
	];

	// Position to load Javascript
	public $jsOptions = [
		'position' => View::POS_END
	];

	// Load Styles
	public $css = [
		'main.min.css'
	];

	// Define dependent Asset Loaders
	public $depends = [
		'cmsgears\assets\jquery\Jquery',
		'cmsgears\assets\libraries\MomentAssets'
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

	// FullCalendarAssets --------------------

}
