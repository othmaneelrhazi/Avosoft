<?php
namespace App\Form {

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;

    use Symfony\Component\Validator\Constraints as Assert;


    class Livre extends AbstractType
    {


        public function buildForm(FormBuilderInterface $builder, array $options)
        {

            $builder
                ->add('dDate', 'text', array('required' => true, 'label' => 'Date de la prestation'))
               // ->add('dossier','select')
                ->add('iHonnoraire', 'text', array('required' => true, 'label' => 'Honoraire de la prestation'))
                ->add('iProvisionIn', 'text', array('required' => true, 'label' => 'Provision In'))
                ->add('iProvisionOut', 'text', array('required' => true, 'label' => 'Provision Out'))
                ->add('iTiersIn', 'text', array('required' => true, 'label' => 'Tiers In'))
                ->add('iTiersOut', 'text', array('required' => true, 'label' => 'Tiers Out'))
                ->add('tHuissiers', 'text', array('required' => true, 'label' => 'Huissiers'))
                ->add('tConfrere', 'text', array('required' => true, 'label' => 'Confrère'))
                ->add('iFrais', 'text', array('required' => true, 'label' => 'Frais'))
                ->add('tCommentaire', 'textarea', array('required' => false,'label' => 'Commentaire'));


        }

        public function getName()
        {
            return 'livre';
        }


    }

}