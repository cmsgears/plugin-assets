<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\assets\cmgtools;

// Yii Imports
use yii\web\View;

/**
 * Breeze can be used to load Breeze Framework from CMGTools.
 *
 * @since 1.0.0
 */
class Breeze extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	/**
	 * @inheritdoc
	 */
	public $sourcePath = '@bower/cmt-breeze/dist';

	/**
	 * @inheritdoc
	 */
	public $css = [
		'css/breeze.min.css'
	];

	/**
	 * @inheritdoc
	 */
	public $cssOptions = [
		'breeze' => View::POS_HEAD
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

			$this->js = [ 'css/breeze.css' ];
		}
    }

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// Breeze --------------------------------

}
