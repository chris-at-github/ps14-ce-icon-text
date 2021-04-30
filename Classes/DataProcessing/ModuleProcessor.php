<?php

namespace Ps14\CeIconText\DataProcessing;

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class ModuleProcessor extends \Ps\Xo\DataProcessing\ModuleProcessor implements DataProcessorInterface {

	/**
	 * @var string[]
	 */
	protected $importCssFiles = [
		'/assets/css/modules/icon-text.css'
	];

	/**
	 * @param ContentObjectRenderer $cObj The data of the content element or page
	 * @param array $contentObjectConfiguration The configuration of Content Object
	 * @param array $processorConfiguration The configuration of this processor
	 * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
	 * @return array the processed data as key/value store
	 */
	public function process(ContentObjectRenderer $cObj, array $contentObjectConfiguration, array $processorConfiguration, array $processedData) {

		if(isset($processedData['flexform']) === true && isset($processedData['data']['frame_classes']) === true) {
			$processedData['data']['frame_classes'] .= ' ce-icon-text--' . $processedData['flexform']['settings']['layout'];
			$processedData['data']['frame_classes'] .= ' ce-icon-text--' . $processedData['flexform']['settings']['align']['inner'];
		}

		return $processedData;
	}
}