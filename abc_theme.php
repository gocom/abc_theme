<?php

/**
 * This is an admin-side theme template for Textpattern.
 *
 * This theme simply extends hive.
 */

/**
 * Extends hive.
 */

theme::based_on('hive');

/**
 * The theme class.
 *
 * Theme classes should be named following a pattern
 * {themeName}_theme, where the {themeName} should be
 * same as this file, and the theme's directory.
 */

class abc_theme_theme extends hive_theme
{
	/**
	 * Overwrites the theme's properties to Hive's.
	 */

	public function __construct()
	{
		parent::__construct('hive');
		$this->name = 'abc_theme';
	}

	/**
	 * The manifest.
	 *
	 * @return array
	 */

	public function manifest()
	{
		return array(
			'author'      => 'Jukka Svahn',
			'author_uri'  => 'https://github.com/gocom/abc_theme',
			'version'     => '1.0.0',
			'description' => 'This is a theme template',
			'help'        => 'https://github.com/gocom/abc_theme',
		);
	}
}