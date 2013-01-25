<?php

namespace Dlancea\CoffeePhpBundle\Assetic\Filter;

use Assetic\Asset\AssetInterface;
use Assetic\Filter\FilterInterface;

class CoffeePhpFilter implements FilterInterface {

	public function filterLoad(AssetInterface $asset) {
		// derp
	}

	public function filterDump(AssetInterface $asset) {
		$content = $asset->getContent();

		// Compiler::compile doesn't like empty strings

		try {
			if (trim($content))
				$content = \CoffeeScript\Compiler::compile($content, array('filename' => $asset->getSourcePath()));
		} catch (Exception $e) {
			$content = $e->getMessage();
		}

		$asset->setContent($content);
	}

}