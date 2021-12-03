<?php
    class login {
        public function LoginProcess($Sentence) {
            return count(explode(" ",$Sentence));
        }
    }
?>