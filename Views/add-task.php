<?php
    require_once('nav-2.php');
?>

    <div class="add">

        <div class="wrapper">

            <header>Añade una tarea</header>

            <form action="<?php echo FRONT_ROOT?> Task/Add" method="POST">

                <div class="dbl-field">

                    <div class="field">
                        <input type="text" placeholder="Titulo de la tarea" name="title">
                        <i class="fa fa-caret-square-right"></i>
                    </div>

                    <div class="field">
                        <input type="date" placeholder="Fecha" name="date">
                        <i class="fa fa-calendar-plus"></i>
                    </div>

                </div>

                <div class="message">
                    <textarea placeholder="Descripcion" name="description"></textarea>
                    <i class="material-icons">message</i>
                </div>

                <div class="button-area">
                    <button type="submit">Guardar</button>
                </div>
                
            </form>
            
        </div>

    </div>