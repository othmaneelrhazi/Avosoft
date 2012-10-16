<?php
namespace App\Form {

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;

    use Symfony\Component\Validator\Constraints as Assert;


    class Client extends AbstractType
    {



        public function buildForm(FormBuilderInterface $builder, array $options)
        {

            $builder
                ->add('tCivilite', 'choice', array('required' => false, 'choices' => array('M.' => 'Monsieur',
                'Mde' => 'Madame', 'Mlle' => 'Mademoiselle'),'label'=>'Civilité'))
                ->add('tNom', 'text', array('required' => true, 'label' => 'Nom',"constraints"=>array(new Assert\NotBlank())))
                ->add('tPrenom','text',array('required'=>true,'label' => 'Prénom',"constraints"=>array(new Assert\NotBlank())))
                ->add('iCompteBancaire','text',array('required'=>false,'label' => 'Compte Bancaire',"constraints"=>array(new Assert\MinLength(12))))
                ->add('iGsm','text',array('required'=>false,'label' => 'Gsm',"constraints"=>array(new Assert\MinLength(10))))
                ->add('iTelephone','text',array('required'=>false,'label' => 'Téléphone',"constraints"=>array(new Assert\Length(9,9))))
                ->add('iFax','text',array('required'=>false,'label' => 'Fax',"constraints"=>array(new Assert\MinLength(9))))
                ->add('tEmail','email',array('required'=>false,'label' => 'Email',"constraints"=>array(new Assert\Email())));


        }

        public function getName()
        {
           return 'client';
        }


    }

}