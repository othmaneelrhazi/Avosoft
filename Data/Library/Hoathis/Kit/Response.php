<?php

namespace { from('Hoa')->import('Dispatcher.Kit');}

namespace Hoathis\Kit {

    class Response extends \Hoa\Dispatcher\Kit {

        public function redirect($ruleId, Array $data, $status = 302, $secured = null) {

            // Le routeur est sur $this->router, facile.
            $uri = $this->router->unroute($ruleId, $data, $secured);
   
            // Où est la réponse HTTP ? Dur à dire.
            // En fait, la vue va s'écrire sur un flux qui est le flux sortant.
            // Dans le cas d'une appli Web, ce sera notre réponse HTTP !
            $response = $this->view->getOutputStream();
            $response->sendHeader('Location', $uri, true, $status);
            exit;
        }

    }

}
