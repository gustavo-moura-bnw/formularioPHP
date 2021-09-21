<?php

namespace App\Models\DAO;

use App\Models\Entidades\Usuario;

class UsuarioDAO extends BaseDAO
{
    public function verificaEmail($email)
    {
        try {

            $query = $this->select(
                "SELECT * FROM usuario WHERE email = '$email' "
            );

            return $query->fetch();

        }catch (\Exception $e){
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }

    public function salvar(Usuario $usuario) {
        try {
            $nome         = $usuario->getNome();
            $email        = $usuario->getEmail();
            $login        = $usuario->getLogin();
            $senha        = $usuario->getSenha();
            $status       = $usuario->getStatus();

            return $this->insert(
                'usuario',
                ":nome,:email,:login,:senha,:status",
                [
                    ':nome'=>$nome,
                    ':email'=>$email,
                    ':login'=>$login,
                    ':senha'=>$senha,
                    ':status'=>$status
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }
}