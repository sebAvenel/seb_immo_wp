<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'seb_immo_wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`DrTa4:&99HvGtmULcNas2jY0q1m3U:86#+n/p/{cpGt5|{e$~4d#@6Ki[tG9jT[' );
define( 'SECURE_AUTH_KEY',  'e~C:I=_MkcxjO8;dq[ek[<IGA3K`4KYdM9xK0dSj0*q.!U|r:3|We}l%!M2d#A#W' );
define( 'LOGGED_IN_KEY',    ']G-xG>fwoO$[-b-[VLD)wA+)^7b4qp=?@]4eQQ@[_`rm<Lt&*f4CF6ei-aN4c|/r' );
define( 'NONCE_KEY',        'U*}-K1C,O:TUx J$UqcjL[De6eo7Uo2SN.=K o*X*4v5hb|6:=,X?4qfEFhoDQaK' );
define( 'AUTH_SALT',        '^725_krF4{_wUj~Eby.*3r(V}ugM em+jKX}@5]Pd)AhLMBS?NLL`8`%~.;LB}e~' );
define( 'SECURE_AUTH_SALT', 'v$UU522px_}zXOw(4eE1a6E B4r;(V,32+Y?1+]]B,70~jb.Om<A^E]8rw+[c3|x' );
define( 'LOGGED_IN_SALT',   '8l5/6w8y2]tJ!kA@4W~N-uIFiIJCH<%K6d5xtXF`%hxJaX.{2U7`D`(6}`,:[@O[' );
define( 'NONCE_SALT',       'iP+j>w:,cU$pJA<;od69?fECjY|U&?h-}k|),&#^Z|*4*xk.^.9 )hXmR t/^7X>' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'si_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
