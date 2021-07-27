<?php
    namespace DAO;

    use Models\Task as Task;

    interface ITaskDAO
    {
        function Add(Task $task);
        function GetAll();
        function Remove($id);
    }
?>