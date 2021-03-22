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
 * Aos can be used to load Aos from CMGTools.
 *
 * @since 1.0.0
 */
class Aos extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	/**
	 * @inheritdoc
	 */
	public $sourcePath = '@bower/aos/dist';

	/**
	 * @inheritdoc
	 */
	public $css = [
		'aos.css'
	];

	/**
	 * @inheritdoc
	 */
	public $cssOptions = [
		'breeze' => View::POS_HEAD
	];

	/**
	 * @inheritdoc
	 */
	public $js = [
		'aos.js'
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

	/**
	 * @inheritdoc
	 */
    public function init() {

		if( YII_DEBUG ) {

			//$this->js = [ 'aos.js' ];
		}
    }

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// Aos -----------------------------------

}
