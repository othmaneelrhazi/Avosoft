<?php
namespace App\Form {

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;

    use Symfony\Component\Validator\Constraints as Assert;


    class DossierBis extends AbstractType
    {



        public function buildForm(FormBuilderInterface $builder, array $options)
        {

            $builder
                ->add('tDossier','text',array('required'=>true,'label' => 'Nom de dossier'))
                ->add('autocomplete', 'text', array('required' => true, 'label' => 'Client',"constraints"=>array(new Assert\NotBlank())))
                ->add('client','hidden')
                ->add('idDossier','hidden');


        }

        public function getName()
        {
           return 'dossier';
        }


    }

}