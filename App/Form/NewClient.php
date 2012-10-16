<?php
namespace App\Form {

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;

    use Symfony\Component\Validator\Constraints as Assert;


    class NewClient extends AbstractType
    {



        public function buildForm(FormBuilderInterface $builder, array $options)
        {

            $builder
                ->add('tCivilite', 'choice', array('required' => false, 'choices' => array('M.' => 'Monsieur',
                'Mde' => 'Madame', 'Mlle' => 'Mademoiselle'),'label'=>'Civilité'))
                ->add('tNom', 'text', array('required' => true, 'label' => 'Nom',"constraints"=>array(new Assert\NotBlank())))
                ->add('tPrenom','text',array('required'=>true,'label' => 'Prénom',"constraints"=>array(new Assert\NotBlank())));


        }

        public function getName()
        {
           return 'client';
        }


    }

}