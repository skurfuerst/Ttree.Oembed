<?php
namespace Ttree\Oembed\Provider;

/*                                                                        *
 * This script belongs to the Flow package "Ttree.Oembed".                *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Ttree\Oembed\Provider;

/**
 * oEmbed Link
 *
 * @author  Romain Ruetschi <romain.ruetschi@gmail.com>
 * @author  Dominique Feyer <dfeyer@ttree.ch>
 */
class Vimeo extends Provider {

	public function __construct() {
		parent::__construct(
			'http://www.vimeo.com/api/oembed.json',
			array(
				'http://*.vimeo.com/*',
				'http://vimeo.com/channels/*/*',
				'http://vimeo.com/groups/*/videos/*'
			),
			'http://www.vimeo.com',
			'Vimeo'
		);
	}

}

?>