<?php
    namespace DAO;

    use DAO\ITaskDAO as ITaskDAO;
    use Models\Task as Task;

    class TaskDAO implements ITaskDAO
    {
        private $taskList = array();

        public function Add(Task $task)
        {
            $this->RetrieveData(); 

            array_push($this->taskList, $task); 

            $this->SaveData(); 
        }

        public function GetAll() 
        {
            $this->RetrieveData();

            return $this->taskList;
        }

        private function SaveData()
        {
            $arrayToEncode = array(); 

            foreach($this->taskList as $task)
            {
                $valuesArray["id"] = $task->getId();
                $valuesArray["title"] = $task->getTitle();
                $valuesArray["date"] = $task->getDate();
                $valuesArray["description"] = $task->getDescription();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT); 

            file_put_contents('Data/task.json', $jsonContent); 
        }

        private function RetrieveData()
        {
            $this->taskList = array(); 

            if(file_exists('Data/task.json')) 
            {
                $jsonContent = file_get_contents('Data/task.json'); 

                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array(); 

                foreach($arrayToDecode as $valuesArray) 
                {
                    $task = new Task();
                    $task->setId($valuesArray["id"]);
                    $task->setTitle($valuesArray["title"]);
                    $task->setDate($valuesArray["date"]);
                    $task->setDescription($valuesArray["description"]);

                    array_push($this->taskList, $task);
                }
            }
        }

        public function Remove($id)
        {
            $this->RetrieveData(); 

            $this->taskList = array_filter($this->taskList, function($task) use($id){
                return $task->getId() != $id;
            });

            $this->SaveData();
        }
    }
?>