<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class SignInType extends AbstractType
{
    public function __construct(private TranslatorInterface $translator)
    {

    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => $this->translator->trans("form.label.email"),
                'invalid_message' => $this->translator->trans('form.error.invalidEmail'),
                "required" => true,
                'attr' => [
                    'placeholder' => $this->translator->trans("form.placeholder.email")
                ]
            ])
            ->add('password', PasswordType::class, [
                'label' => $this->translator->trans("form.label.password"),
                'required' => true,
                'attr' => [
                    'placeholder' => $this->translator->trans("form.placeholder.password")
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => $this->translator->trans("form.label.signIn")
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
