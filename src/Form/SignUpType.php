<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class SignUpType extends AbstractType
{
    public function __construct(private TranslatorInterface $translator)
    {

    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => $this->translator->trans("form.label.firstName"),
                "required" => true,
                'attr' => [
                    'placeholder' => $this->translator->trans("form.placeholder.firstName")
                ]
            ])
            ->add('lastName', TextType::class, [
                'label' => $this->translator->trans("form.label.lastName"),
                "required" => true,
                'attr' => [
                    'placeholder' => $this->translator->trans("form.placeholder.lastName")
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => $this->translator->trans("form.label.email"),
                'invalid_message' => $this->translator->trans('form.error.invalidEmail'),
                "required" => true,
                'attr' => [
                    'placeholder' => $this->translator->trans("form.placeholder.email")
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => $this->translator->trans("form.label.phone"),
                'invalid_message' => $this->translator->trans('form.error.invalidPhone'),
                "required" => true,
                'attr' => [
                    'placeholder' => $this->translator->trans("form.placeholder.phone")
                ]
            ])
            ->add('password', RepeatedType::class, [
                "type" => PasswordType::class,
                'invalid_message' => $this->translator->trans('form.error.notSamePasswords'),
                'required' => true,
                'first_options'  => [
                    'label' => $this->translator->trans("form.label.password"),
                    'required' => true,
                    'attr' => [
                        'placeholder' => $this->translator->trans("form.placeholder.password")
                    ]
                ],
                'second_options' => [
                    'label' => $this->translator->trans("form.label.repeatPassword"),
                    'required' => true,
                    'attr' => [
                        'placeholder' => $this->translator->trans("form.placeholder.repeatPassword")
                    ]
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => $this->translator->trans("form.label.signUp")
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
