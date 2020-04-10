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
 * OrgAssets registers the Velocity Apps of Organization Module.
 *
 * @since 1.0.0
 */
class OrgAssets extends \yii\web\AssetBundle {

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
		'apps/org/base.js',
		'apps/org/services/organization.js',
		'apps/org/controllers/organization.js'
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

	// OrgAssets -----------------------------

}
