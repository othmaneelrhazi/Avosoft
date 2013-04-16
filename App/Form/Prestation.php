<?php
namespace App\Form {

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;

    use Symfony\Component\Validator\Constraints as Assert;


    class Prestation extends AbstractType
    {



        public function buildForm(FormBuilderInterface $builder, array $options)
        {

            $builder
                ->add('autocomplete', 'text', array('required' => true, 'label' => 'Choisir Dossier',"constraints"=>array(new Assert\NotBlank())))
                ->add('dossier','hidden');


        }

        public function getName()
        {
           return 'dossier';
        }


    }

}