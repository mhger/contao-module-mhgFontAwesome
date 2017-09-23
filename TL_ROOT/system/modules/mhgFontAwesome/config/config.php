<?php

/**
 * Contao 3 Extension [mhgFontAwesome]
 *
 * Copyright (c) 2017 Medienhaus Gersöne UG (haftungsbeschränkt) | Pierre Gersöne
 *
 * @package     mhgFontAwesome
 * @author      Pierre Gersöne <mail@medienhaus-gersoene.de>
 * @link        https://www.medienhaus-gersoene.de Medienhaus Gersöne - Agentur für Neue Medien: Web, Design & Marketing
 * @license     LGPL-3.0+
 */
/**
 * Adds Font Awesome
 */
if (TL_MODE == 'FE') {
    $GLOBALS['TL_CSS']['fontawesome'] = 'axcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css|static';
}
