<?php
/**
*
* Contact admin extension for the phpBB Forum Software package.
*
* @copyright 2016 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace rmcgirr83\contactadmin\migrations;

/**
* Primary migration
*/

class version_1_1_12 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\rmcgirr83\contactadmin\migrations\version_100');
	}

	public function update_data()
	{
		return array(
			array('config.remove', array('contactadmin_mail_chk')),
			array('config.add', array('contactadmin_email_chk', false)),
		);
	}
}
