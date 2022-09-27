<?php
    class UsersView extends User{
        
        public function showUsers(){
            $resultado = $this->getUsers();
            for($x = 0; $x < count($resultado); $x++){
                ?> 
                <tr>
                    <td>asd</td>
                    <td><?php echo $resultado[$x]['Nombre'];?> </td>
                    <td><?php echo $resultado[$x]['Documento'];?> </td>
                    <td><?php echo $resultado[$x]['Usuario'];?> </td>
                    <td><?php echo $resultado[$x]['Email'];?> </td>
                </tr>
            <?php }
        }

    }

?>