<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\assets\vapps;

// Yii Imports
use yii\web\View;

/**
 * BaseAssets registers the most commonly used Velocity Apps of Core Module.
 *
 * @since 1.0.0
 */
class BaseAssets extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	// Path Configuration
	public $sourcePath = '@cmgtools/velocity-apps/src';

	// Load JS
	public $js = [
		'apps/core/base.js',
		'apps/core/grid.js',
		'apps/core/autoload.js',
		'apps/core/services/follower.js',
		'apps/core/controllers/site.js',
		'apps/core/controllers/province.js',
		'apps/core/controllers/region.js',
		'apps/core/controllers/city.js',
		'apps/core/controllers/comment.js',
		'apps/core/controllers/follower.js'
	];

	// JS Position
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

	// BaseAssets ----------------------------

}
