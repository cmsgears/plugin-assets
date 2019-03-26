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
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Lazysizes can be used to lazy load images.
 *
 * @since 1.0.0
 */
class Lazysizes extends AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	/**
	 * @inheritdoc
	 */
	public $sourcePath = '@bower/lazysizes';

	/**
	 * @inheritdoc
	 */
	public $js = [
		'lazysizes.min.js'
	];

	/**
	 * @inheritdoc
	 */
	public $jsOptions = [
		'position' => View::POS_HEAD
	];

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	/**
	 * @inheritdoc
	 */
    public function init() {

		if( YII_DEBUG ) {

			$this->js = [ 'lazysizes.js' ];
		}
    }

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// Lazysizes -----------------------------

}
