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
define( 'DB_NAME', 'khalid' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'user1' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'yes' );

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
define( 'AUTH_KEY',         'Y_g]Jn_B@@.fC<;6Z[{Rhs#]X2PXHna.*`G<bSb_R!m6:FZAx%WTKRtg$A#*^*i:' );
define( 'SECURE_AUTH_KEY',  'lN*yO,7Gl[:@@X,{wXSAmVxoR~ms94C`63SJo+v=[bI/A];7S320_+oWR(E;JB-l' );
define( 'LOGGED_IN_KEY',    '<{?/:faSN+]b%EOh>5#WRxM.IFX}D/?jTd9^IPQ3mtG^1;RbVmQpi3mzxu)(1K^ ' );
define( 'NONCE_KEY',        '1h>a@yy3,^i/ZO<dcjVUvt*hdInGL}Ys`PkI}]&Orzi}tv*fy>]bA}%fZHF]S -k' );
define( 'AUTH_SALT',        'Z:qMU`zCR&)Zoi3_.RwLq6n:z{1#j+j25#3vP n.tm.EV@y-Z!g_xE|/?+~e(&(I' );
define( 'SECURE_AUTH_SALT', 'DSk9E0mmU)2>6F}$JM2zR*w}:qP+cklJea>!`3so-9H[#SW+5^B;gypSG(QjmxbN' );
define( 'LOGGED_IN_SALT',   '?h{P0C7t[P}?$LNW^pB5!1>DpiPhM16IsDSfbPP[;4RUCg1Ml!5VG|jo=[P<=EyK' );
define( 'NONCE_SALT',       ')N:~7^@R`~c6i3iU4OhJMobGLT#8I{ByudDlZ7r;f8,vl_f=D`{e]d8$6Kt@(6{;' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
