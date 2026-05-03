<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Blog personnel Laravel

Une application web développée avec Laravel permettant à un blogueur de créer, gérer et publier des articles techniques.
Les visiteurs peuvent lire les articles sans compte et les filtrer par catégorie.

## Contexte du projet

Ce projet a été réalisé dans le cadre d’une mission freelance pour un ancien camarade de formation souhaitant lancer son blog personnel.

L’objectif est de créer une plateforme simple et efficace où :

Le blogueur peut gérer ses articles (CRUD complet)
Les visiteurs peuvent consulter les articles publiés
Les articles peuvent être filtrés par catégorie
L’authentification est requise uniquement pour l’administrateur (blogueur)
## Fonctionnalités
## Blog public
## US1 – Liste des articles publiés
Affichage des articles publiés uniquement
Informations affichées :
Titre
Catégorie
Date de publication
Extrait du contenu
## US2 – Détail d’un article
Lecture complète d’un article
Affichage de la catégorie associée
## US3 – Filtrage par catégorie
Filtrer les articles publiés selon leur catégorie
## Authentification
## US4 – Connexion / Déconnexion
Connexion avec email et mot de passe
Déconnexion sécurisée
## Pas d’inscription publique
✔ Comptes créés via Seeder uniquement
🛠️ Gestion des articles (Dashboard blogueur)
📊 US5 – Tableau de bord
Liste de tous les articles :
brouillons
publiés
Affichage du statut de chaque article
## US6 – Créer un article
Création d’un article avec :
Titre
Contenu
Catégorie
Statut (brouillon / publié)
## US7 – Modifier un article
Modification complète :
titre
contenu
catégorie
statut (brouillon ↔ publié)
 ## US8 – Supprimer un article
Suppression d’un article
Confirmation avant suppression
## Technologies utilisées
Laravel
Blade Templates
Eloquent ORM
MySQL
Tailwind CSS (si utilisé)
Laravel Auth (Breeze / Jetstream)
## Structure générale
routes/web.php → routes de l’application
app/Models → modèles (Article, Category, User)
app/Http/Controllers → logique métier
resources/views → interface Blade
database/migrations → structure base de données
database/seeders → création utilisateur admin
 ## Sécurité
Authentification obligatoire pour la gestion des articles
Middleware auth pour protéger le dashboard
Protection CSRF sur tous les formulaires
Autorisation des actions par utilisateur
 ## Objectif pédagogique

Ce projet permet de pratiquer :

Architecture MVC Laravel
CRUD complet
Authentification
Relations Eloquent (User → Articles → Categories)
Filtrage et requêtes
Blade templating
Améliorations possibles
Système de commentaires
Likes / réactions
Upload d’images pour articles
Pagination des articles
Dashboard avec statistiques
