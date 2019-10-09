<?php
namespace Core;

class View
{
    public function render($path, $data = null, $layout='app') 
    {
        if ( $data ) {
            extract($data);
        }
        $path .= '.php';
        include VIEWS."/layouts/${layout}.php";
    }

}
   