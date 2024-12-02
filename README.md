# Navi

## Todo
- Voir issues GitHub / fabrice1618
- Tester les écrans générés (pagespeed, accessibilité...)

## Done
- installer git dans les VM
- creation des containers
- tester la maquette et la finaliser
- regler les droits d'acces des fichiers dans apache
- séparer dashboard (juste un hello word dedans) et header(bandeau navbar)
- éviter la répétition des ouverture/fermeture des balise PHP
- créer les vues (documents, devoirs...)
- Harmoniser les différents écrans existants (couleurs, centrage, tailles)
- Améliorer le code pour générer les vues

## Démarrage des containers

Démarrage / arrêt d'un service

```bash
docker compose up -d web
docker ps
docker compose stop web
```