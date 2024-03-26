<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /* Recommended size for pictures :
     * Desktop -> 1600x1000 (ratio 1.6)
     * Mobile ->
     */
    private array $projects = [
                "spotify_overlay" => [
                    "isMobile" => false,
                    "pictures" => [
                        "1.webp",
                        "2.webp"
                    ],
                    "tags" => [
                        "java",
                        "web",
                        "api",
                        "desktop_application"
                    ],
                    "steps" => [

                    ]
                ],
                "block_learning" => [
                    "isMobile" => true,
                    "pictures" => [],
                    "tags" => [
                        "dart",
                        "flutter",
                        "mobile_application"
                    ],
                    "steps" => [

                    ]
                ],
                "portfolio" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "php",
                        "symfony",
                        "web",
                        "website"
                    ],
                    "steps" => [

                    ]
                ],
                "portfolio_matthieu" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "php",
                        "symfony",
                        "web",
                        "website"
                    ],
                    "steps" => [

                    ]
                ],
                "angel_x_devil" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "php",
                        "symfony",
                        "web",
                        "website",
                        "shop"
                    ],
                    "steps" => [

                    ]
                ],
                "kingdoms_plugin" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "java",
                        "minecraft",
                        "plugin",
                        "api",
                        "web"
                    ],
                    "steps" => [

                    ]
                ],
                "kingdoms_app" => [
                    "isMobile" => true,
                    "pictures" => [],
                    "tags" => [
                        "dart",
                        "flutter",
                        "mobile_application",
                        "api",
                        "web",
                        "minecraft"
                    ],
                    "steps" => [

                    ]
                ],
                "faylisia_plugin" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "java",
                        "minecraft",
                        "plugin",
                        "discord_bot"
                    ],
                    "steps" => [

                    ]
                ],
                "our_little_world" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "unrealised",
                        "planed",
                        "game",
                        "c++",
                        "unreal_engine",
                        "3d",
                        "website",
                        "discord_bot"
                    ],
                    "steps" => [

                    ]
                ],
                "auto_vote_hyping" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "java",
                        "api",
                        "web",
                        "automating",
                        "minecraft",
                        "discord_bot"
                    ],
                    "steps" => [

                    ]
                ],
                "l_systems" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "python",
                        "desktop_application"
                    ],
                    "steps" => [

                    ]
                ],
                "extracteur_article_pdf" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "java",
                        "desktop_application",
                        "web",
                        "api"
                    ],
                    "steps" => [

                    ]
                ],
                "faylisia_launcher" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "java",
                        "desktop_application",
                        "web",
                        "api",
                        "minecraft"
                    ],
                    "steps" => [

                    ]
                ],
                "minexplore_tracker" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "java",
                        "plugin",
                        "minecraft",
                        "desktop_application"
                    ],
                    "steps" => [

                    ]
                ],
                "minexplore_addons" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "java",
                        "modding",
                        "minecraft"
                    ],
                    "steps" => [

                    ]
                ],
                "spotify_history_reader" => [
                    "isMobile" => true,
                    "pictures" => [],
                    "tags" => [
                        "dart",
                        "flutter",
                        "mobile_application"
                    ],
                    "steps" => [

                    ]
                ],
                "mhysb" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "java",
                        "modding",
                        "minecraft",
                        "discord_bot",
                        "automating"
                    ],
                    "steps" => [

                    ]
                ],
                "infoclass" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "unrealised",
                        "website",
                        "web",
                        "php",
                        "symfony"
                    ],
                    "steps" => [

                    ]
                ]
            ];

    #[Route('/projects', name: 'app_projects')]
    public function index(): Response
    {
        return $this->render('pages/projects.html.twig', [
            "projects" => $this->projects
        ]);
    }

    #[Route('/projects/{id}', name: 'app_project')]
    public function project(string $id): Response
    {
        if (!array_key_exists($id, $this->projects)) {
            $this->createNotFoundException();
        }

        return $this->render('pages/project.html.twig', [
            "project" => $id,
            "projectData" => $this->projects[$id]
        ]);
    }
}
