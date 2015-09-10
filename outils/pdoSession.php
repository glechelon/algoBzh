
<?php
    
    class Session{


        public function Session(){

            session_start();
            
            if (!isset($_SESSION["isConnected"])){

                $_SESSION["isConnected"] = FALSE;

            }

        }

        public function checkConnexion(){

             $res = FALSE;
            
            if (isset($_SESSION["isConnected"])){
                
                if($_SESSION["isConnected"]){
                    
                    $res = TRUE;
                }
            }

            return $res;
        }
        
       
    }    


?>