<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    private array $projects = [
                "spotify_overlay" => [
                    "tags" => [
                        "java",
                        "web",
                        "api",
                        "desktop_application"
                    ]
                ],
                "block_learning" => [
                    "tags" => [
                        "dart",
                        "flutter",
                        "mobile_application"
                    ]
                ],
                "portfolio" => [
                    "tags" => [
                        "php",
                        "symfony",
                        "web",
                        "website"
                    ]
                ],
                "portfolio_matthieu" => [
                    "tags" => [
                        "php",
                        "symfony",
                        "web",
                        "website"
                    ]
                ],
                "angel_x_devil" => [
                    "tags" => [
                        "php",
                        "symfony",
                        "web",
                        "website",
                        "shop"
                    ]
                ],
                "kingdoms_plugin" => [
                    "tags" => [
                        "java",
                        "minecraft",
                        "plugin",
                        "api",
                        "web"
                    ]
                ],
                "kingdoms_app" => [
                    "tags" => [
                        "dart",
                        "flutter",
                        "mobile_application",
                        "api",
                        "web",
                        "minecraft"
                    ]
                ],
                "faylisia_plugin" => [
                    "tags" => [
                        "java",
                        "minecraft",
                        "plugin",
                        "discord_bot"
                    ]
                ],
                "our_little_world" => [
                    "tags" => [
                        "unrealised",
                        "planed",
                        "game",
                        "c++",
                        "unreal_engine",
                        "3d",
                        "website",
                        "discord_bot"
                    ]
                ],
                "auto_vote_hyping" => [
                    "tags" => [
                        "java",
                        "api",
                        "web",
                        "automating",
                        "minecraft",
                        "discord_bot"
                    ]
                ],
                "l_systems" => [
                    "tags" => [
                        "python",
                        "desktop_application"
                    ]
                ],
                "extracteur_article_pdf" => [
                    "tags" => [
                        "java",
                        "desktop_application",
                        "web",
                        "api"
                    ]
                ],
                "faylisia_launcher" => [
                    "tags" => [
                        "java",
                        "desktop_application",
                        "web",
                        "api",
                        "minecraft"
                    ]
                ],
                "minexplore_tracker" => [
                    "tags" => [
                        "java",
                        "plugin",
                        "minecraft",
                        "desktop_application"
                    ]
                ],
                "minexplore_addons" => [
                    "tags" => [
                        "java",
                        "modding",
                        "minecraft"
                    ]
                ],
                "spotify_history_reader" => [
                    "tags" => [
                        "dart",
                        "flutter",
                        "mobile_application"
                    ]
                ],
                "mhysb" => [
                    "tags" => [
                        "java",
                        "modding",
                        "minecraft",
                        "discord_bot",
                        "automating"
                    ]
                ],
                "infoclass" => [
                    "tags" => [
                        "unrealised",
                        "website",
                        "web",
                        "php",
                        "symfony"
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
}
