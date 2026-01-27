<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__aeb5ba22f29e6ba39486a2f49880de0f */
class __TwigTemplate_ec392dd7ae6508bc69c6a3973975f7ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"qc\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>SEO & URL • Boutique PrestaShop 23U2729</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminMeta';
    var iso_user = 'qc';
    var lang_is_rtl = '0';
    var full_language_code = 'qc';
    var full_cldr_language_code = 'fr-CA';
    var country_iso_code = 'CM';
    var _PS_VERSION_ = '8.1.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'b6cebc64c807fb3ebebdc99f2fcee8ee';
    var currentIndex = 'index.php?controller=AdminMeta';
    var employee_token = '090fab7552708c7182304fbd8a6e9c1d';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/admin278e8gncl50mfjvppmy/index.php/improve/modules/manage?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM';
    var admin_notification_get_link = '/admin278e8gncl50mfjvppmy/index.php/common/notifications?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM';
    var admin_notification_push_link = adminNotificationPushLink = '/admin278e8gncl50mfjvppmy/index.php/common/notifications/ack?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM';
    var tab_modules_list = ";
        // line 41
        echo "'';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/admin278e8gncl50mfjvppmy/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin278e8gncl50mfjvppmy/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin278e8gncl50mfjvppmy/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin278e8gncl50mfjvppmy/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin278e8gncl50mfjvppmy\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin278e8gncl50mfjvppmy\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\";
var currency = {\"iso_code\":\"XAF\",\"sign\":\"XAF\",\"name\":\"Franc CFA (BEAC)\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"XAF\",\"currencySymbol\":\"XAF\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,#";
        // line 67
        echo "#0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin278e8gncl50mfjvppmy/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin278e8gncl50mfjvppmy/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin278e8gncl50mfjvppmy/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin278e8gncl50mfjvppmy/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin278e8gncl50mfjvppmy/index.php/common/notifications?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-qc adminmeta\"
  data-base-url=\"/admin278e8gncl50mfjvppmy/index.php\"  data-token=\"ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminDashboard&amp;token=0e39b65f77015eca953297051d046cb6\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès Rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php/sell/orders?token=29899822c221e4f375e5310eab285cd5\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=005690154c70d62d8577d1d30ee86358\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php/improve/modules/manage?token=29899822c221e4f375e5310eab285cd5\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=54b5ff04e8a4abb6";
        // line 136
        echo "a484decd3f45ec29\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php/sell/catalog/products-v2/create?token=29899822c221e4f375e5310eab285cd5\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php/sell/catalog/categories/new?token=29899822c221e4f375e5310eab285cd5\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"86\"
        data-icon=\"icon-AdminParentMeta\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/seo-urls/?-18Jn2cKdEzVtJ-Q9OwM\"
        data-post-link=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminQuickAccesses&token=c34cf81bac085871aa5a7320765e0c68\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"SEO &amp; URL - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminQuickAccesses&token=c34cf81bac085871aa5a7320765e0c68\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"";
        // line 175
        echo "/admin278e8gncl50mfjvppmy/index.php?controller=AdminSearch&amp;token=0e39e97fa120fa157bbf0a86043ad58a\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=";
        // line 192
        echo "\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès Rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php/sell/orders?token=29899822c221e4f375e5310eab285cd5\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=005690154c70d62d8577d1d30ee86358\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php/improve/modules/manage?token=29899822c221e4f375e5310eab285cd5\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=54b5ff04e8a4abb6a484decd3f45ec29\"
             data-item=\"Nouveau bon de réduction\"
";
        // line 227
        echo "    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php/sell/catalog/products-v2/create?token=29899822c221e4f375e5310eab285cd5\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php/sell/catalog/categories/new?token=29899822c221e4f375e5310eab285cd5\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"84\"
      data-icon=\"icon-AdminParentMeta\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/seo-urls/?-18Jn2cKdEzVtJ-Q9OwM\"
      data-post-link=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminQuickAccesses&token=c34cf81bac085871aa5a7320765e0c68\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"SEO &amp; URL - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminQuickAccesses&token=c34cf81bac085871aa5a7320765e0c68\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://23u2729.systeme-res30.app/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                    ";
        // line 272
        echo "      <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous cons";
        // line 324
        echo "ulté vos <strong><a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=130a2de0f7d998b95583d5e16cfff1e8\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    <";
        // line 367
        echo "/a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://23u2729.systeme-res30.app/img/pr/default.jpg\" alt=\"FABIEN\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir FABIEN</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/employees/1/edit?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminLogin&amp;logout=1&amp;token=fa05e482df7d47f78fff7e828b145328\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/employees/toggle-navigation?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminDashboard&amp;token=0e39b65f77015eca953297051d046cb6\"></";
        // line 411
        echo "a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminDashboard&amp;token=0e39b65f77015eca953297051d046cb6\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/orders/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrder";
        // line 453
        echo "s\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/orders/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/orders/invoices/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/orders/credit-slips/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Notes de crédit
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/orders/delivery-slips/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                              ";
        // line 484
        echo "              
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminCarts&amp;token=130a2de0f7d998b95583d5e16cfff1e8\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/catalog/products?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/catalog/products?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Produits
                                </a>
                              </li>

                                              ";
        // line 515
        echo "                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/catalog/categories?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/catalog/monitoring/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminAttributesGroups&amp;token=8c044e65a3734fcda0aa55d4dbcc8432\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/catalog/brands/?_token=";
        // line 543
        echo "ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/attachments/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminCartRules&amp;token=54b5ff04e8a4abb6a484decd3f45ec29\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/stocks/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                          ";
        // line 575
        echo "            
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/customers/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/customers/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/addresses/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul";
        // line 604
        echo ">
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminCustomerThreads&amp;token=49aab6a77200df0a6196cc588d8b14dc\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Service à la clientèle
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminCustomerThreads&amp;token=49aab6a77200df0a6196cc588d8b14dc\" class=\"link\"> Service à la clientèle
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/sell/customer-service/order-messa";
        // line 633
        echo "ges/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminReturn&amp;token=c81324b5611809c622635f662082575b\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminStats&amp;token=005690154c70d62d8577d1d30ee86358\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
               ";
        // line 669
        echo " <span class=\"title\">Améliorer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/modules/manage?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/modules/manage?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin278e8gncl50mfjvppmy";
        // line 702
        echo "/index.php/improve/design/themes/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Conception
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/design/themes/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/design/mail_theme/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
";
        // line 732
        echo "                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/design/cms-pages/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Pages vues
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/design/modules/positions/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminImages&amp;token=d54b9366f990d69c5302fd6c6ef40993\" class=\"link\"> Paramètres de l&#039;image
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/modules/link-widget/list?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
              ";
        // line 761
        echo "                          </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminCarriers&amp;token=4fb3ad455c6a8acdb27396007e44fe55\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Expédition
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminCarriers&amp;token=4fb3ad455c6a8acdb27396007e44fe55\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/shipping/preferences/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" cla";
        // line 789
        echo "ss=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/payment/payment_methods?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/payment/payment_methods?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
      ";
        // line 822
        echo "                          <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/payment/preferences?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/international/localization/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/international/localization/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
   ";
        // line 853
        echo "                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/international/zones/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/international/taxes/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/improve/international/translations/settings?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
 ";
        // line 889
        echo "                                                     
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/preferences/preferences?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/preferences/preferences?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/order-preferences/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Paramètres d";
        // line 914
        echo "e commande
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/product-preferences/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Paramètres du produit
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/customer-preferences/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Paramètres du client
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/contacts/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"86\"";
        // line 945
        echo " id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/seo-urls/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminSearchConf&amp;token=a9237d5c557c33249723e919d3a67245\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/system-information/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
   ";
        // line 975
        echo "                                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/system-information/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/performance/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/administration/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/emails/?_token=ItUC26";
        // line 1003
        echo "3yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/import/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/employees/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/sql-requests/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\"";
        // line 1034
        echo " id=\"subtab-AdminLogs\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/logs/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/webservice-keys/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/feature-flags/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/advanced/security/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" class=";
        // line 1059
        echo "\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Trafic et SEO</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/seo-urls/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" aria-current=\"page\">SEO &amp; URL</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            SEO &amp; URL          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/seo-urls/new?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\"                  title=\"Ajouter une page\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Ajouter une page
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin278e8gncl50mfjvppmy/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fqc%252Fdoc%252FAdminMeta%253Fversion%253D8.1.7%2526cou";
        // line 1110
        echo "ntry%253Dqc/Aide?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li class=\"nav-item\">
                    <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/seo-urls/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" id=\"subtab-AdminMeta\" class=\"nav-link tab active current\" data-submenu=\"87\">
                      SEO & URL
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
        ";
        // line 1132
        echo "          </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/search-engines/?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\" id=\"subtab-AdminSearchEngines\" class=\"nav-link tab \" data-submenu=\"88\">
                      Moteurs de recherche
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin278e8gncl50mfjvppmy/index.php/configure/shop/seo-urls/new?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\"              title=\"Ajouter une page\"            >
              Ajouter une page
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
            ";
        // line 1161
        echo "   data-url=\"/admin278e8gncl50mfjvppmy/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fqc%252Fdoc%252FAdminMeta%253Fversion%253D8.1.7%2526country%253Dqc/Aide?_token=ItUC263yxEThvAAoJFq4Hgl-18Jn2cKdEzVtJ-Q9OwM\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1182
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"https://23u2729.systeme-res30.app/admin278e8gncl50mfjvppmy/index.php?controller=AdminDashboard&amp;token=0e39b65f77015eca953297051d046cb6\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1216
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1182
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1216
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__aeb5ba22f29e6ba39486a2f49880de0f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1383 => 1216,  1362 => 1182,  1351 => 102,  1342 => 1216,  1302 => 1182,  1279 => 1161,  1248 => 1132,  1224 => 1110,  1171 => 1059,  1144 => 1034,  1111 => 1003,  1081 => 975,  1049 => 945,  1016 => 914,  989 => 889,  951 => 853,  918 => 822,  883 => 789,  853 => 761,  822 => 732,  790 => 702,  755 => 669,  717 => 633,  686 => 604,  655 => 575,  621 => 543,  591 => 515,  558 => 484,  525 => 453,  481 => 411,  435 => 367,  390 => 324,  336 => 272,  289 => 227,  252 => 192,  233 => 175,  192 => 136,  153 => 102,  116 => 67,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__aeb5ba22f29e6ba39486a2f49880de0f", "");
    }
}
