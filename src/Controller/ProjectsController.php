<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /* Recommended size for pictures :
     * Desktop -> ~1600x1000 (ratio ~1.6)
     * Mobile -> 350x758 (ratio ~0.46)
     *
     * "pictures" represents medias, they should be written like :
     *      "filename.ext" => [type, scrollable]" with :
     *      - type = "picture", "video" or "pdf" (video not implemented yet)
     *      - scrollable = true or false depending on if media should scroll when hovered (needed only if media type is picture)
     */
    private array $projects = [
                "spotify_overlay" => [
                    "isMobile" => false,
                    "pictures" => [
                        "1.webp" => ["picture", false],
                        "2.webp" => ["picture", false]
                    ],
                    "tags" => [
                        "java",
                        "web",
                        "api",
                        "desktop_application"
                    ],
                    "steps" => [
                        "analyse",
                        "development",
                        "usability",
                        "improvement_ideas"
                    ]
                ],
                "block_learning" => [
                    "isMobile" => true,
                    "pictures" => [
                        "1.webp" => ["picture", false],
                        "2.webp" => ["picture", false],
                        "3.webp" => ["picture", false],
                        "4.webp" => ["picture", false],
                        "5.webp" => ["picture", false]
                    ],
                    "tags" => [
                        "dart",
                        "flutter",
                        "mobile_application"
                    ],
                    "steps" => [
                        "validation",
                        "configuration",
                        "sharing",
                        "improvement_ideas"
                    ]
                ],
                "portfolio" => [
                    "isMobile" => false,
                    "pictures" => [
                        "1.webp" => ["picture", true],
                        "2.webp" => ["picture", true],
                        "3.webp" => ["picture", true]
                    ],
                    "tags" => [
                        "php",
                        "symfony",
                        "web",
                        "website"
                    ],
                    "steps" => [

                    ],
                ],
                "portfolio_matthieu" => [
                    "isMobile" => false,
                    "pictures" => [
                        "1.webp" => ["picture", false],
                        "2.webp" => ["picture", true],
                        "3.webp" => ["picture", true],
                        "4.webp" => ["picture", true],
                        "5.webp" => ["picture", true],
                        "6.webp" => ["picture", true],
                        "7.webp" => ["picture", true]
                    ],
                    "tags" => [
                        "php",
                        "symfony",
                        "web",
                        "website"
                    ],
                    "steps" => [
                        "update"
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

                    ],
                    "ended" => false
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

                    ],
                    "ended" => false
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

                    ],
                    "ended" => false
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

                    ],
                    "ended" => false
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

                    ],
                    "ended" => false
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

                    ],
                    "ended" => false
                ],
                "l_systems" => [
                    "isMobile" => false,
                    "pictures" => [],
                    "tags" => [
                        "python",
                        "desktop_application"
                    ],
                    "steps" => [

                    ],
                    "ended" => false
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

                    ],
                    "ended" => false
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

                    ],
                    "ended" => false
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

                    ],
                    "ended" => false
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

                    ],
                    "ended" => false
                ],
                "spotify_history_reader" => [
                    "isMobile" => true,
                    "pictures" => [
                        "1.webp" => ["picture", false],
                        "2.webp" => ["picture", false],
                        "3.webp" => ["picture", false],
                        "4.webp" => ["picture", false]
                    ],
                    "tags" => [
                        "dart",
                        "flutter",
                        "mobile_application"
                    ],
                    "steps" => [
                        "update"
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

                    ],
                    "ended" => false
                ],
                "infoclass" => [
                    "isMobile" => false,
                    "pictures" => [
                        "1.pdf" => ["pdf"]
                    ],
                    "tags" => [
                        "unrealised",
                        "website",
                        "web",
                        "php",
                        "symfony"
                    ],
                    "steps" => [
                        "source",
                        "update"
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
