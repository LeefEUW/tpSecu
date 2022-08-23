<?php
class  Type{
        /*---------------------------------------------
                        Attributs
        -----------------------------------------------*/
        private ?int $id_type;
        private ?string $nom_type;
        /*---------------------------------------------
                        Constructeur
                        -----------------------------------------------*/
public function __construct(?int $id_type, ?string $nom){
            $this->id_type = $id_type;
            $this->nom_type = $nom;
        }
 /*---------------------------------------------
                        Getter et Setter
        -----------------------------------------------*/
        public function getIdType():?int{
            return $this->id_type;
        }
        public function getNomType():?string{
            return $this->nom_type;
        } 
        public function setIdType(?int $id):void{
            $this->id_type = $id;
        }
        public function setNomType(?string $nom):void{
            $this->nom_type = $nom;
        }
}
?>