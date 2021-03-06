<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\assets\yii;

// Yii Imports
use yii\web\View;

/**
 * ActiveFormAsset can be used to load yii.activeForm.js from yii assets directory.
 *
 * @since 1.0.0
 */
class ActiveFormAsset extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	/**
	 * @inheritdoc
	 */
    public $sourcePath = '@yii/assets';

	// Load Javascript
	public $js = [
		'yii.activeForm.js',
	];

	// Position to load Javascript
	public $jsOptions = [
		'position' => View::POS_END
	];

	// Dependency
	public $depends = [
		'cmsgears\core\common\assets\YiiAsset'
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

	// ActiveFormAsset -----------------------

}
