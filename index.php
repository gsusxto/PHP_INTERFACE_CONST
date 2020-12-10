<?php

interface vida{
        const tipo = array('organica','no organica');
        public function respirar($tiempo="5",$cantidad_oxigeno, $estado);
        public function bombiarfluido();
}
interface muerte extends vida{
    const estado = array('pulso leve', 'no tiene pulso');
}
class Humano implements muerte{
    public function saludar(){
        return "hola".muerte::tipo[0]."como estas";
    }
    public function respirar($tiempo, $cantidad_oxigeno,$estado){
    
    }
    public function bombiarfluido(){
                                     
    }
    public function pulso(){
                                     
    }
}
$obj = new Humano();
echo $obj->saludar();

?>