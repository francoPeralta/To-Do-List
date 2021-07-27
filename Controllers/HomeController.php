<?php
    namespace Controllers;

    use DAO\TaskDAO as TaskDAO;

    class HomeController
    {
        private $taskDAO;

        public function __construct()
        {
            $this->taskDAO = new TaskDAO();
        }

        public function Index($message = "")
        {
            $taskList = $this->taskDAO->GetAll();

            require_once(VIEWS_PATH."index.php");
        }        
    }
?>