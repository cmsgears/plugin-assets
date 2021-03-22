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

// CMG Imports
use cmsgears\google\maps\config\GoogleMapsProperties;

/**
 * GoogleMaps registers the assets specific to google maps.
 *
 * @since 1.0.0
 */
class GoogleMaps extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	public $version = '3';

	public $libraries = 'places';

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	public function registerAssetFiles( $view ) {

		parent::registerAssetFiles( $view );

		$mapProperties = GoogleMapsProperties::getInstance();

		$active	= $mapProperties->isActive();
		$key	= $mapProperties->getKey();

		if( $active ) {

			$script = "//maps.googleapis.com/maps/api/js?v={$this->version}&key={$key}&libraries={$this->libraries}";

			$view->registerJsFile( $script, [ 'position' => View::POS_HEAD ] );
		}
	}

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// GoogleMaps ----------------------------

}
