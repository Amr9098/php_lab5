<?php
class DbConfig
{
	private $_host = 'localhost:3309';
	private $_username = 'amr';
	private $_password = '123';
	private $_database = 'll';

	protected $connection;

	public function __construct()
	{
		if (!isset($this->connection)) {

			$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}
		}

		return $this->connection;
	}
}
?>
