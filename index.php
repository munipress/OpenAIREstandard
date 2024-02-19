<?php

/**
 * @defgroup plugins_generic_openAIREstandard OpenAIREstandard Plugin
 */
 
/**
 * @file plugins/generic/openAIREstandard/index.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_openAIREstandard
 * @brief Wrapper for openAIREstandard plugin.
 *
 */
require_once('OpenAIREstandardPlugin.inc.php');

return new OpenAIREstandardPlugin();


