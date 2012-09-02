<?php

namespace {
    from('Hoa')
        ->import('Dispatcher.Kit');
}

namespace Hoathis {


    class KitAggreagate extends \Hoa\Dispatcher\Kit
    {

        private $_kits = array();


        public function getKit($kitName)
        {

            if (!array_key_exists($kitName, $this->_kits)) {

                $this->setKit($kitName);
            }

            return $this->_kits[$kitName];
        }

        private function setKit($kitName)
        {

            $this->_kits[$kitName] = dnew('Hoathis\Kit\\' . $kitName, array($this->router, $this->dispatcher, $this->view));
        }


        public function __get($kitName)
        {
            return $this->getKit($kitName);
        }


    }

}
