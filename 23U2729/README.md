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
- **Service `db` (MariaDB 10.11) :** Gère le stockage persistant des données (produits, clients, commandes).
- **Service `prestashop` (v8.1) :** Contient le code source PHP et l'interface de gestion de la boutique.
- **Réseau `23U2729_prestashop_network` :** Isole les conteneurs pour une communication sécurisée.


## Explication des Variables d'Environnement
- `MARIADB_ROOT_PASSWORD` : Mot de passe administrateur de la base de données.
- `DB_SERVER` : Indique à PrestaShop le nom du conteneur de base de données à contacter.
- `PS_DOMAIN` : Définit le nom de domaine officiel de la boutique pour générer les liens.
- `PS_INSTALL_AUTO` : Définit si l'installation doit se lancer automatiquement au démarrage.


## Sécurité et Certificat TLS (Let's Encrypt / Certbot)
- **Rôle de Let's Encrypt :** Autorité de certification gratuite et ouverte fournissant des certificats SSL/TLS.
- **Rôle de Certbot :** Client logiciel utilisé pour automatiser la demande, la validation et l'installation du certificat.
- **Génération du certificat :**
  ```bash
  sudo systemctl stop nginx
  sudo certbot certonly --standalone -d 23u2729.systeme-res30.app
  sudo systemctl start nginx
```


- Répertoire des certificats : Les fichiers (fullchain.pem et privkey.pem) se trouvent dans :
/etc/letsencrypt/live/23u2729.systeme-res30.app/

## Fichier de Configuration Nginx (Reverse Proxy)
Le fichier se trouve dans /etc/nginx/sites-enabled/23U2729.conf. Il écoute sur le port 443, gère le chiffrement SSL et redirige le trafic vers le port 5780 du serveur hôte.
# Instruction de démarrage
 
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

