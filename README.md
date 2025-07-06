# MindDrop

MindDrop est un MVP d'application de soutien émotionnel géolocalisé. Ce dépôt contient un squelette de projet basé sur Laravel 11, Vue 3 et Leaflet.

## Structure

- `composer.json` et `package.json` : dépendances de base
- `routes/api.php` : routes API pour les drops anonymes et l'IA
- `app/Models` : modèles Eloquent (`MindDrop`, `Mood`, `UserToken`)
- `app/Http/Controllers` : `MindDropController` et `IAController`
- `app/Http/Middleware` : middleware de gestion du token anonyme
- `database/migrations` : migrations de tables
- `resources/js` : pages Vue (`MapPage.vue`, `DropPage.vue`)

Ce code est incomplet mais sert de point de départ pour étendre l'application.
