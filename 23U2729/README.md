# Déploiement PrestaShop - INF3611

## Informations Étudiant
- **Nom et Prénom** : JUNIOR TEMDEMNOU FABIEN
- **Matricule** : 23U2729
- **URL de l'application** : https://23U2729.systeme-res30.app

## Description de l'application

PrestaShop est une plateforme e-commerce open-source puissante permettant de créer et gérer des boutiques en ligne professionnelles. C'est l'une des solutions e-commerce les plus utilisées au monde avec plus de 300 000 boutiques actives.

### Cas d'usage en entreprise

#### 1. E-commerce B2C (Business-to-Consumer)
Vente directe de produits aux consommateurs finaux avec gestion complète du catalogue, des commandes et des paiements.

#### 2. E-commerce B2B (Business-to-Business)
Plateforme de vente pour professionnels avec tarifs négociés, commandes en gros et gestion de comptes clients entreprises.

#### 3. Marketplace Multi-vendeurs
Création de places de marché permettant à plusieurs vendeurs de proposer leurs produits sur une plateforme commune.

#### 4. Commerce International
Boutiques multi-devises et multi-langues pour le commerce transfrontalier avec gestion des taxes et frais de livraison internationaux.

#### 5. Gestion Omnicanal
Intégration avec points de vente physiques, marketplaces externes (Amazon, eBay) et synchronisation des stocks en temps réel.

## Instructions de démarrage

### Démarrer l'application
```bash
# Se connecter au VPS
ssh Jtf@37.60.250.220

# Aller dans le dossier du projet
cd ~/deployments/23U2729

# Lancer l'application
docker compose up -d

# Vérifier l'état des conteneurs
docker compose ps

# Voir les logs en temps réel
docker compose logs -f
```

### Arrêter l'application
```bash
cd ~/deployments/23U2729
docker compose down
```

### Redémarrer l'application
```bash
cd ~/deployments/23U2729
docker compose restart
```

## Architecture des services

### 1. Service `db` (MySQL 8.0)
**Rôle** : Base de données relationnelle pour le stockage de toutes les données PrestaShop.

**Données stockées** :
- Catalogue produits (descriptions, prix, images, catégories)
- Données clients (comptes, adresses, historique)
- Commandes et transactions
- Configuration de la boutique
- Modules et thèmes installés

**Configuration** :
- Port interne : 3306
- Image : mysql:8.0
- Authentification : mysql_native_password
- Persistance : `./prestashop_app/mysql:/var/lib/mysql`

### 2. Service `prestashop` (PrestaShop Latest)
**Rôle** : Application web e-commerce complète avec interface d'administration et front-office boutique.

**Fonctionnalités principales** :
- Gestion du catalogue produits
- Système de commande et paiement
- Gestion des clients et des comptes
- Modules de livraison et transporteurs
- Tableau de bord analytique
- Système de gestion de contenu (CMS)

**Configuration** :
- Port exposé : 5780 (hôte) → 80 (container)
- Image : prestashop/prestashop:latest
- Dépendance : Service `db` (MySQL)
- Persistance : `./prestashop_app/prestashop:/var/www/html`

### Réseau Docker
Réseau user-defined `prestashop_network` de type bridge pour l'isolation et la communication inter-conteneurs.

## Variables d'environnement

### Configuration Base de données
- `MYSQL_ROOT_PASSWORD` : Mot de passe root pour l'administration MySQL
- `MYSQL_DATABASE` : Nom de la base de données PrestaShop (prestashop)
- `MYSQL_USER` : Utilisateur MySQL dédié à PrestaShop
- `MYSQL_PASSWORD` : Mot de passe de l'utilisateur MySQL

### Configuration PrestaShop
- `DB_SERVER` : Hôte de la base de données (nom du service Docker: db)
- `DB_NAME` : Nom de la base de données à utiliser
- `DB_USER` : Utilisateur pour la connexion à la base
- `DB_PASSWD` : Mot de passe de connexion à la base
- `PS_DOMAIN` : Nom de domaine de la boutique (23U2729.systeme-res30.app)
- `PS_FOLDER_ADMIN` : Nom du dossier d'administration (sécurité)
- `PS_FOLDER_INSTALL` : Nom du dossier d'installation
- `PS_LANGUAGE` : Langue par défaut de la boutique (fr)
- `PS_COUNTRY` : Pays par défaut (CM - Cameroun)
- `PS_INSTALL_AUTO` : Active l'installation automatique (1)
- `ADMIN_MAIL` : Email de l'administrateur principal
- `ADMIN_PASSWD` : Mot de passe administrateur

### Configuration SMTP (Email)
- `SMTP_HOST` : Serveur SMTP (smtp.gmail.com)
- `SMTP_PORT` : Port SMTP (587 - STARTTLS)
- `SMTP_SECURE` : Activation SSL/TLS (false pour STARTTLS)
- `SMTP_USER` : Adresse email d'envoi (juniortemdemnoufabien@gmail.com)
- `SMTP_PASSWORD` : Mot de passe d'application Gmail

## Certificat TLS avec Certbot

### Certificat Wildcard utilisé
Le projet utilise un certificat SSL wildcard généré pour le domaine principal par le gestionnaire du serveur (AZAB A RANGA Franck Miguel).

**Caractéristiques** :
- Type : Wildcard SSL/TLS
- Couverture : `systeme-res30.app` et `*.systeme-res30.app`
- Autorité : Let's Encrypt
- Validité : 90 jours (renouvellement automatique)

### Commande de génération du certificat
```bash
sudo certbot certonly --manual --preferred-challenges dns \
  -d systeme-res30.app -d *.systeme-res30.app \
  --email admin@systeme-res30.app \
  --agree-tos
```

**Fonctionnement** :
- Le certificat wildcard couvre automatiquement tous les sous-domaines
- Le sous-domaine `23U2729.systeme-res30.app` est couvert sans configuration supplémentaire
- Nginx utilise le certificat partagé situé dans `/etc/letsencrypt/live/systeme-res30.app/`

## Persistance des données avec Bind Volumes

### Volume MySQL : Base de données
**Chemin hôte** : `./prestashop_app/mysql`
**Chemin container** : `/var/lib/mysql`

**Contenu persisté** :
- Tables MySQL (produits, clients, commandes)
- Index et optimisations de requêtes
- Logs de transactions
- Configuration MySQL

**Avantage** : Les données de la base survivent aux redémarrages, mises à jour et suppressions de conteneurs. Backup facilité par accès direct aux fichiers.

### Volume PrestaShop : Application web
**Chemin hôte** : `./prestashop_app/prestashop`
**Chemin container** : `/var/www/html`

**Contenu persisté** :
- Code source PrestaShop et core
- Thèmes personnalisés et templates
- Modules installés et configurations
- Images de produits uploadées
- Fichiers de traduction
- Cache et fichiers générés

**Avantage** : Les personnalisations, modules et uploads restent intacts lors des redéploiements. Permet le développement et les modifications en direct.

### Garantie de persistance
Les bind volumes assurent que toutes les données sont stockées physiquement sur le VPS dans `/home/Jtf/deployments/23U2729/prestashop_app/`. Même en cas de suppression complète des conteneurs Docker, les données restent accessibles et peuvent être réutilisées instantanément lors d'un nouveau déploiement.

## Monétisation de l'application

### 1. Commission sur les ventes (Modèle Marketplace)
**Principe** : Facturer un pourcentage sur chaque transaction.
- Commission : 3-5% par vente
- Commission fixe : 500-1000 FCFA par transaction
- **Revenus estimés** : 500 000 - 2 000 000 FCFA/mois avec 100 vendeurs actifs

### 2. Abonnements mensuels (SaaS)
**Plans tarifaires** :
- **Plan Bronze** (10 produits) : 10 000 FCFA/mois
- **Plan Silver** (100 produits) : 25 000 FCFA/mois
- **Plan Gold** (produits illimités) : 50 000 FCFA/mois
- **Plan Enterprise** (multi-boutiques) : 100 000 FCFA/mois

**Revenus estimés** : 1 000 000 - 5 000 000 FCFA/mois avec 50-100 boutiques

### 3. Modules et extensions premium
**Modules développés** :
- Paiement Mobile Money (Orange, MTN) : 25 000 FCFA
- Livraison locale automatisée : 30 000 FCFA
- Multi-devises CEMAC : 15 000 FCFA
- Analytics avancés : 40 000 FCFA
- Gestion multi-entrepôts : 50 000 FCFA

**Revenus estimés** : 100 000 - 500 000 FCFA/mois en ventes de modules

### 4. Services professionnels
**Prestations** :
- Configuration boutique complète : 50 000 - 100 000 FCFA
- Migration de données : 75 000 - 150 000 FCFA
- Personnalisation thème : 100 000 - 300 000 FCFA
- Développement module sur mesure : 200 000 - 500 000 FCFA
- Formation e-commerce : 100 000 FCFA/session
- Support prioritaire : 25 000 FCFA/mois

### 5. Publicité et promotion
**Opportunités** :
- Espaces publicitaires dans les boutiques : 50 000 FCFA/mois
- Mise en avant de produits sponsorisés : 10 000 FCFA/semaine
- Newsletter sponsorisée : 75 000 FCFA/envoi
- Placement premium dans recherche : 100 000 FCFA/mois

### 6. Intégration paiements (Partenariats)
**Modèle de revenus** :
- Commission sur transactions Mobile Money : 0.5-1%
- Frais d'activation passerelle : 25 000 FCFA
- Partenariat avec banques : Commission négociée

### 7. Services à valeur ajoutée
- **Photographie produits** : 5 000 FCFA/produit
- **Rédaction descriptions** : 2 000 FCFA/produit
- **SEO et référencement** : 150 000 FCFA/mois
- **Campagnes publicitaires** : 200 000 - 500 000 FCFA/mois
- **Gestion réseaux sociaux** : 100 000 FCFA/mois

### Projection de revenus totaux
**Scénario conservateur** (50 boutiques) : 1 500 000 FCFA/mois
**Scénario optimiste** (150 boutiques) : 5 000 000 FCFA/mois
**Scénario agressif** (300+ boutiques) : 10 000 000+ FCFA/mois

**ROI** : Retour sur investissement attendu en 6-12 mois avec marketing ciblé et support client de qualité.
