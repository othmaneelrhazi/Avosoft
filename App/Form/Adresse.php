<?php
namespace App\Form {

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;

    use Symfony\Component\Validator\Constraints as Assert;


    class Adresse extends AbstractType
    {



        public function buildForm(FormBuilderInterface $builder, array $options)
        {

            $builder
                ->add('tNomRue','text',array('required'=>false,'label'=>'Rue'))
                ->add('iNumero', 'text', array('required' => false, 'label' => 'Numéro'))
                ->add('tBte','text',array('required'=>false,'label' => 'Boite'))
                ->add('iCodePostal','text',array('required'=>false,'label' => 'Code Postal',"constraints"=>array(new Assert\Length(4,4))))
                ->add('tLocalite','text',array('required'=>false,'label' => 'Localité'));

        }

        public function getName()
        {
           return 'adresse';
        }


    }

}