# Déploiement PrestaShop -INF361

## Informations Étudiants
-> Noms et Prénoms: JUNIOR TEMDEMNOU FABIEN
-> Matricule:  23U2729
-> URL de l'application: https://23u2729.systeme-res30.app

### Description de l'application
PrestaShop est une plateforme e-commerce permettant de gérer
des boutiques professionnelles. Ce déploiement utilise Docker pour 
garantir isolation et performance.

## Cas d'usage en entreprise 
1. E-commerce B2c :Vente directe aux consommateurs.
2. Marketplace: Plateforme multi-vendeurs.
3. International : Gestion multi-devices et multi-langues.

## Architecture Techinque 
L'architecture repose sur un modèle a trois couches :
1. Reverse Proxy Nginx: Gère le HTTPS (port 443) et redirige vers le port 5780.
2. Prestashop 8.1 : Serveur applicatif Apache/PHP.
3. MariaDB 10.11 :  Base de données relationnelle persistante.

## Instruction de démarrage
 
```bash
cd ~/deployments/23U2729
docker compose up -d
docker compose ps

## Configuration et Variables 
-> Base de données : MARIADB_DATABASE=prestashop 
-> Domaine : 23u2729.systeme-res30.app
-> Installation : Automatisée via PS_INSTALL_AUTO=1

## Stratégies de Monétisation

- Commissions : 3-5% par vente validée.
- Abonnements : Plans Bronze/Silver/Gold (10k à 50k FCFA/mois).
- Services Pro : Installation Mobile Money (25 000 FCFA).
- Publicité : Produits sponsorisés sur la boutique.

## Maintenance et Sécurité
-> Diagnostic Nginx : sudo nginx -t 
-> Persistance : Utilisation de Bind Volumes pour la sécurité des données .

