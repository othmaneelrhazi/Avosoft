<?php
namespace App\Form {

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;

    use Symfony\Component\Validator\Constraints as Assert;


    class AutocompleteDossier extends AbstractType
    {



        public function buildForm(FormBuilderInterface $builder, array $options)
        {

            $builder

                ->add('autocomplete', 'text', array('required' => true, 'label' => 'Nom de dossier',"constraints"=>array(new Assert\NotBlank())))
                ->add('idDossier','hidden');


        }

        public function getName()
        {
           return 'dossier';
        }


    }

}