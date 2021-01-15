<?php

/**
 * @property Seeder $seeder
 * @property CI_Migration $migration
 */
class Dbfixture extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Only accessible via CLI
        if (is_cli() === false) {
            exit();
        }
    }

    public function migrate()
    {
        $this->load->library('migration');
        if ($this->migration->current() === false) {
            echo $this->migration->error_string() . PHP_EOL;
        }
    }

    public function seed()
    {
        $this->load->library('seeder');
        foreach (glob(APPPATH.'database/seeds/*Seeder.php') as $file) {
            $seeder = basename($file, '.php');
            $this->seeder->call($seeder);
        }
    }

    public function all()
    {
        $this->migrate();
        $this->seed();
    }
}
