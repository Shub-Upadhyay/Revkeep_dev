<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class AddClientOwnedToServices extends AbstractMigration
{
	/**
	 * Change Method.
	 *
	 * More information on this method is available here:
	 * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
	 * @return void
	 */
	public function change()
	{
		$table = $this->table('services');

		$table->addColumn('client_owned', 'boolean', [
			'default' => null,
			'null' => true,
		]);

		$table->update();
	}
}
