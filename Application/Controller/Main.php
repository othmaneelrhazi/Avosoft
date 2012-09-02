<?php

namespace Application\Controller {

    class Main extends \Hoathis\Controller\Generic
    {
		
		public function construct(){
			parent::construct();
		}



        public function IndexAction($_this)
        {
           //$xyl = $_this->view->getData();
           //$xyl->date->date = date('d M Y');

            //$_this->data->date->jour = date('d M Y');

           // \Hoathis\Debug::show($_this);

          // $_this->_kits['kit']->redirect('quelque part');

//            $file = require'hoa://Data/Module/config.php';
//
//            foreach($file['Kit'] as $key=>$value){
//
//               // $this->_kits[$key] = $this->_add($value);
//
//                echo $key.' '.$value;
//
//            }

            $_this->Response->redirect('c',array('_call'=>'error'));



//            //$_this->ajout();
//
//            $_this->addKit('Hoathis\Copix\Kit','gg');
//
//            $_this->k('gg')->redirect();
//
//            var_dump($_this->_kits);

           $_this->view->addOverlay('hoa://Application/View/Main/Index.xyl');
           $_this->view->render();
            //return;

        }




    }

}
