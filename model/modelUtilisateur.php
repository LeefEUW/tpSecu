<?php

    class Utilisateur{
        /*---------------------------------------------
                    Attributs
        ---------------------------------------------*/
        private ?int $id_util;
        private ?string $nom_util;
        private ?string $prenom_util;
        private ?string $mail_util;
        private ?string $mdp_util;
        private ?int $id_role;
        private ?bool $valide_util;
        private ?string $token_util;
        /*---------------------------------------------
                    Constructeur
        ---------------------------------------------*/
        public function __construct(?string $nom, ?string $prenom, ?string $mail,
        ?string $mdp, ?int $id_role){
            $this->nom_util = $nom;
            $this->prenom = $prenom;
            $this->mail_util = $mail;
            $this->mdp_util = $mdp;
            $this->id_role = $id_role;
            $this->valide_util = 0;
        }
        /*---------------------------------------------
                    Getter et Setter
        ---------------------------------------------*/
        public function getIdUtil():?int{
            return $this->id_util;
        }
        public function getNomUtil():?string{
            return $this->nom_util;
        }
        public function getPrenomUtil():?string{
            return $this->prenom_util;
        }
        public function getMailUtil():?string{
            return $this->mail_util;
        }
        public function getMdpUtil():?string{
            return $this->mdp_util;
        }
        public function getIdRole():?int{
            return $this->id_role;
        }
        public function getValideUtil():?int{
            return $this->valide_util;
        }
        public function getTokenUtil():?string{
            return $this->token_util;
        }
        public function setIdUtil(?int $id):void{
            $this->id_util = $id;
        }
        public function setNomUtil(?string $nom):void{
            $this->nom_util = $nom;
        }
        public function setPrenomUtil(?string $prenom):void{
            $this->prenom_util = $prenom;
        }
        public function setMailUtil(?string $mail):void{
            $this->mail_util = $mail;
        }
        public function setMdpUtil(?string $mdp):void{
            $this->mdp_util = $mdp;
        }
        public function setIdRole(?int $id):void{
            $this->id_role = $id;
        }
        public function setValideUtil(?bool $val):void{
            $this->valide_util = $val;
        }
        public function setTokenUtil(?string $token):void{
            $this->token_util = $token;
        }
    }
?>