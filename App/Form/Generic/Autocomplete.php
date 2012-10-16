<?php
namespace App\Form\Generic {

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;

    use Symfony\Component\Validator\Constraints as Assert;


    class Autocomplete extends AbstractType
    {



        public function buildForm(FormBuilderInterface $builder, array $options)
        {

            $builder

                ->add('autocomplete', 'text', array('required' => true, 'label' => 'Nom',"constraints"=>array(new Assert\NotBlank())))
                ->add('id','hidden');


        }

        public function getName()
        {
           return 'generic';
        }


    }

}