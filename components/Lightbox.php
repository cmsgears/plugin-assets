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
 * Lightbox can be used for lightbox slider.
 *
 * @since 1.0.0
 */
class Lightbox extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	/**
	 * @inheritdoc
	 */
	public $sourcePath = '@bower/lightbox2/dist';

	/**
	 * @inheritdoc
	 */
	public $css = [
		'css/lightbox.min.css'
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
		'js/lightbox.min.js'
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

			$this->js = [ 'js/lightbox.js' ];
		}
    }

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// Lightbox ------------------------------

}
