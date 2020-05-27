<? php

	   public function concetar()
       {
            $server="localhost";
            $pass="";
            $user="root";
            $base="examenp3";                      
            $con=mysql_connect($server, $user, $pass) or die ("Error al conectar a la base de datos");
            mysql_select_base($base, $con);
            return $con;
        }

    }
?>