<?php 
namespace Controllers;

use MVC\Router;

class LoginController { //Controlador de authenticacion que tiene cada metodo adentro 
    public static function login(Router $router){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Para el post del Login
            
        }

        //Render a la vista
        $router->render('auth/login', [ //Muestro la vista de login
            'titulo' => 'Log in'
        ]); 

    }

    public static function logout(){
        echo "Desde login";

    }

    public static function crear(Router $router){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Para el post del Login
                
            }

            //Render a la vista
            $router->render('auth/crear', [ //Muestro la vista de crear
                'titulo' => 'Create your account'
            ]); 

       
    }

    public static function olvide(Router $router){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Para el post del Login
            
        }

        //Muestra la vista
        $router->render('auth/olvide', [
            'titulo' => 'Forgot my password'
        ]);
    }

    public static function reestablecer(){
        echo "Desde reestablecer";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Para el post del Login
            
        }
    }

    public static function mensaje(){
        echo "Desde mensaje";
    }

    public static function confirmar(){
        echo "Desde confirmar";
    }
}


?>