<?php
    require_once('nav.php');
?>

    <div class="view">

        <?php
            foreach ($taskList as $task) {
                
        ?>    
            
            <div class="task">
                            
                    <header>
                        
                        <div>
                            <?php echo $task->getTitle()?>
                            <br>
                            <span>(<?php echo $task->getDate()?>)</span>
                        </div>    

                        <form action="<?php echo FRONT_ROOT."Task/Remove" ?>" method="GET">
                            <div class="delete-area">
                                <button type="submit" name="id" class="delete-button" value="<?php echo $task->getId()?>">Eliminar</button>
                            </div>
                        </form>

                    </header>
                        
                    <div class="description">
                        <p><?php echo $task->getDescription()?></p>
                    </div>

            </div>
            
            <br>
        <?php  
            }
        ?>
          
    </div>