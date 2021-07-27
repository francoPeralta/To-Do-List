<?php
    namespace Controllers;

    use DAO\TaskDAO as TaskDAO;
    use Models\Task as Task;

    class TaskController
    {
        private $taskDAO;

        public function __construct()
        {
            $this->taskDAO = new TaskDAO();
        }

        public function ShowAddTask()
        {
            require_once(VIEWS_PATH."add-task.php");
        }

        public function Add($title, $date, $description)
        {
            $task = new Task();
            $task->setTitle($title);
            $task->setDate($date);
            $task->setDescription($description);

            $this->taskDAO->Add($task);

            $this->ShowAddTask();
        }

        public function ShowListTask()
        {
            $taskList = $this->taskDAO->GetAll();
            
            require_once(VIEWS_PATH."index.php");
        }

        public function Remove($id)
        {
            $this->taskDAO->Remove($id);

            $this->ShowListTask();
        }


    }
?>