<?php  
  foreach($array as $row){
?>
<div id="todo-<?php echo $row["Id"];?>">

   <div id="" class="">

      <p><b>Texto: </b><?php echo $row["texto"];?></p>

      <p><b>Descripcion: </b><?php echo $row["Descripcion"];?></p>

      <button class="button button1"  onclick="borrar('<?php echo $row["Id"];?>')">Borrar</button>

      <div class="dropdown">

         <span> 
         <button class="button button2">Actualizar</button>
            <hr>
         </span>

         <div id="editForm<?php echo $row["Id"];?>" class=" dropdowncontent ">
            <div class="espacio"><input type="text" class="" id="editartext<?php echo $row["Id"];?>" placeholder="texto"
                  value="<?php echo $row["texto"];?>"></div>
            <div class="espacio"><textarea class="" id="editardescrip<?php echo $row["Id"];?>"
                  placeholder="Descripcion"><?php echo $row["Descripcion"];?></textarea></div>
            <div class="espacio"><input type="submit" class="" value="Send"
                  onclick="editar('<?php echo $row["Id"];?>')"></div>
         </div>

      </div>

   </div>
</div>
<?php
  }
?>