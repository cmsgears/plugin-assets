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
use yii\web\AssetBundle;
use yii\web\View;

/**
 * CaptchaAsset can be used to load yii.captcha.js from yii assets directory.
 *
 * @since 1.0.0
 */
class CaptchaAsset extends AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	/**
	 * @inheritdoc
	 */
    public $sourcePath = '@yii/assets';

	/**
	 * @inheritdoc
	 */
    public $js = [
        'yii.captcha.js',
    ];

	/**
	 * @inheritdoc
	 */
	public $jsOptions = [
		'position' => View::POS_END
	];

	/**
	 * @inheritdoc
	 */
    public $depends = [
        'cmsgears\assets\yii\YiiAsset'
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

	// CaptchaAsset --------------------------

}
