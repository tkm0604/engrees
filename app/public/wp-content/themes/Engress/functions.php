<?php
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( '_s_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _s_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _s, use a find and replace
		 * to change '_s' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_s', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', '_s' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'_s_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_s' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', '_s' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.min.css' );
	wp_style_add_data( '_s-style', 'rtl', 'replace' );

	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



//アクセスキー
define('ACCESS_KEY_ID', 'AKIAJIF4G7D75LW3RIBA');
//シークレットキー
define('SECRET_ACCESS_KEY', 'FwKtQ3p1b6vsBT2m2HacrmcsPOYmNCibb2fP4K6R');
//アソシエイトタグ
define('ASSOCIATE_TRACKING_ID', 'jzbkxut7qcpqb6b-22');
//キャッシュ更新間隔
define('AMAZON_CACHE_DAYS', '90'); //90日（APIで取得した商品情報を保存する期間）
//エラーキャッシュ更新間隔
define('ERROR_CACHE_DAYS', '3'); //3日（エラー情報を保存しておく期間：エラーメール間隔）

//ターゲットに文字列が含まれているか
if ( !function_exists( 'includes_string' ) ):
function includes_string($target, $searchstr){
  if (strpos($target, $searchstr) === false) {
    return false;
  } else {
    return true;
  }
}
endif;

//JSONがエラーを出力しているか
if ( !function_exists( 'is_paapi_json_error' ) ):
function is_paapi_json_error($json){
  return property_exists($json, 'Errors');
}
endif;

//PA-APIの返り値のJSONにアイテムが存在するか
if ( !function_exists( 'is_paapi_json_item_exist' ) ):
function is_paapi_json_item_exist($json){
  return property_exists($json->{'ItemsResult'}, 'Items');
}
endif;

//Amazon APIキャッシュIDの取得
if ( !function_exists( 'get_amazon_api_transient_id' ) ):
function get_amazon_api_transient_id($asin){
  return 'nlg_amazon_paapi_v5_asin_'.$asin;;
}
endif;

//WordPressで設定されているメールアドレス取得する
if ( !function_exists( 'get_wordpress_admin_email' ) ):
function get_wordpress_admin_email(){
  return get_option('admin_email');
}
endif;

//PA-APIで商品情報を取得できなかった場合のエラーログ
if ( !function_exists( 'email_amazon_product_error_message' ) ):
function email_amazon_product_error_message($asin, $message = ''){
  //メールで送信
  $subject = 'Amazon商品取得エラー';
  $mail_msg = 'Amazon商品リンクが取得できませんでした。'.PHP_EOL.
    PHP_EOL.
    'ASIN:'.$asin.PHP_EOL.
    'URL:'.get_the_permalink().PHP_EOL.
    'Message:'.$message.PHP_EOL;
  wp_mail( get_wordpress_admin_email(), $subject, $mail_msg );

  //エラーログに出力
  $date = date_i18n("Y-m-d H:i:s");
  $msg = $date.','.
         $asin.','.
         get_the_permalink().
         PHP_EOL;
  error_log($msg, 3, get_template_directory().'/amazon_errors.log');
}
endif;

//シンプルなアソシエイトURLの作成（PA-API制限時用）
if ( !function_exists( 'get_amazon_associate_url' ) ):
function get_amazon_associate_url($asin, $associate_tracking_id){
  $base_url = 'https://www.amazon.co.jp/exec/obidos/ASIN';
  $associate_url = $base_url.'/'.$asin.'/';
  if (!empty($associate_tracking_id)) {
    $associate_url .= $associate_tracking_id.'/';
  }
  $associate_url = esc_url($associate_url);
  return $associate_url;
}
endif;

//Amazon商品紹介リンクの外枠で囲む
if ( !function_exists( 'wrap_amazon_item_box' ) ):
function wrap_amazon_item_box($message){
  return '<div class="amazon-item-box no-icon amazon-item-error cf"><div>'.$message.'</div></div>';
}
endif;

if ( !class_exists( 'NelogPaapiV5' ) ):
class NelogPaapiV5 {

  private $accessKey = null;
  private $secretKey = null;
  private $path = null;
  private $regionName = null;
  private $serviceName = null;
  private $httpMethodName = null;
  private $queryParametes = array ();
  private $awsHeaders = array ();
  private $payload = "";

  private $HMACAlgorithm = "AWS4-HMAC-SHA256";
  private $aws4Request = "aws4_request";
  private $strSignedHeader = null;
  private $xAmzDate = null;
  private $currentDate = null;

  public function __construct($accessKey, $secretKey) {
      $this->accessKey = $accessKey;
      $this->secretKey = $secretKey;
      $this->xAmzDate = $this->getTimeStamp ();
      $this->currentDate = $this->getDate ();
  }

  function setPath($path) {
      $this->path = $path;
  }

  function setServiceName($serviceName) {
      $this->serviceName = $serviceName;
  }

  function setRegionName($regionName) {
      $this->regionName = $regionName;
  }

  function setPayload($payload) {
      $this->payload = $payload;
  }

  function setRequestMethod($method) {
      $this->httpMethodName = $method;
  }

  function addHeader($headerName, $headerValue) {
      $this->awsHeaders [$headerName] = $headerValue;
  }

  private function prepareCanonicalRequest() {
      $canonicalURL = "";
      $canonicalURL .= $this->httpMethodName . "\n";
      $canonicalURL .= $this->path . "\n" . "\n";
      $signedHeaders = '';
      foreach ( $this->awsHeaders as $key => $value ) {
          $signedHeaders .= $key . ";";
          $canonicalURL .= $key . ":" . $value . "\n";
      }
      $canonicalURL .= "\n";
      $this->strSignedHeader = substr ( $signedHeaders, 0, - 1 );
      $canonicalURL .= $this->strSignedHeader . "\n";
      $canonicalURL .= $this->generateHex ( $this->payload );
      return $canonicalURL;
  }

  private function prepareStringToSign($canonicalURL) {
      $stringToSign = '';
      $stringToSign .= $this->HMACAlgorithm . "\n";
      $stringToSign .= $this->xAmzDate . "\n";
      $stringToSign .= $this->currentDate . "/" . $this->regionName . "/" . $this->serviceName . "/" . $this->aws4Request . "\n";
      $stringToSign .= $this->generateHex ( $canonicalURL );
      return $stringToSign;
  }

  private function calculateSignature($stringToSign) {
      $signatureKey = $this->getSignatureKey ( $this->secretKey, $this->currentDate, $this->regionName, $this->serviceName );
      $signature = hash_hmac ( "sha256", $stringToSign, $signatureKey, true );
      $strHexSignature = strtolower ( bin2hex ( $signature ) );
      return $strHexSignature;
  }

  public function getHeaders() {
      $this->awsHeaders ['x-amz-date'] = $this->xAmzDate;
      ksort ( $this->awsHeaders );

      // Step 1: CREATE A CANONICAL REQUEST
      $canonicalURL = $this->prepareCanonicalRequest ();

      // Step 2: CREATE THE STRING TO SIGN
      $stringToSign = $this->prepareStringToSign ( $canonicalURL );

      // Step 3: CALCULATE THE SIGNATURE
      $signature = $this->calculateSignature ( $stringToSign );

      // Step 4: CALCULATE AUTHORIZATION HEADER
      if ($signature) {
          $this->awsHeaders ['Authorization'] = $this->buildAuthorizationString ( $signature );
          return $this->awsHeaders;
      }
  }

  private function buildAuthorizationString($strSignature) {
      return $this->HMACAlgorithm . " " . "Credential=" . $this->accessKey . "/" . $this->getDate () . "/" . $this->regionName . "/" . $this->serviceName . "/" . $this->aws4Request . "," . "SignedHeaders=" . $this->strSignedHeader . "," . "Signature=" . $strSignature;
  }

  private function generateHex($data) {
      return strtolower ( bin2hex ( hash ( "sha256", $data, true ) ) );
  }

  private function getSignatureKey($key, $date, $regionName, $serviceName) {
      $kSecret = "AWS4" . $key;
      $kDate = hash_hmac ( "sha256", $date, $kSecret, true );
      $kRegion = hash_hmac ( "sha256", $regionName, $kDate, true );
      $kService = hash_hmac ( "sha256", $serviceName, $kRegion, true );
      $kSigning = hash_hmac ( "sha256", $this->aws4Request, $kService, true );

      return $kSigning;
  }

  private function getTimeStamp() {
      return gmdate ( "Ymd\THis\Z" );
  }

  private function getDate() {
      return gmdate ( "Ymd" );
  }
}
endif;


//Amazon商品リンク作成
add_shortcode('amazon', 'generate_amazon_product_link');
if ( !function_exists( 'generate_amazon_product_link' ) ):
function generate_amazon_product_link($atts){
  extract( shortcode_atts( array(
    'asin' => null,
    'id' => null,
    'kw' => null,
    'title' => null,
    'desc' => null,
    'amazon' => 1,
    'rakuten' => 1,
    'yahoo' => 1,
  ), $atts ) );

  $asin = esc_html(trim($asin));

  //ASINが取得できない場合はID
  if (empty($asin)) {
    $asin = $id;
  }

  //アクセスキー
  $access_key_id = ACCESS_KEY_ID;
  //シークレットキー
  $secret_access_key = SECRET_ACCESS_KEY;
  //アソシエイトタグ
  $associate_tracking_id = ASSOCIATE_TRACKING_ID;
  //キャッシュ更新間隔
  $days = AMAZON_CACHE_DAYS;
  //キーワード
  $kw = trim($kw);


  //アクセスキーもしくはシークレットキーがない場合
  if (empty($access_key_id) || empty($secret_access_key)) {
    $error_message = 'Amazon APIのアクセスキーもしくはシークレットキーが設定されていません。';
    return wrap_amazon_item_box($error_message);
  }

  //ASINがない場合
  if (empty($asin)) {
    $error_message = 'Amazon商品リンクショートコード内にASINが入力されていません。';
    return wrap_amazon_item_box($error_message);
  }

  //アソシエイトurlの取得（デフォルト）
  $associate_url = get_amazon_associate_url($asin, $associate_tracking_id);

  $new_cache = false;
  //キャッシュの存在
  $transient_id = get_amazon_api_transient_id($asin);
  $json_cache = get_transient( $transient_id );
  if ($json_cache) {
    $res = $json_cache;
  } else {

    $serviceName = 'ProductAdvertisingAPI';
    $region = 'us-west-2';

    $payload = '{'
      .' "ItemIds": ['
      .'  "'.$asin.'"'
      .' ],'
      .' "Resources": ['
      .'  "BrowseNodeInfo.BrowseNodes",'
      .'  "BrowseNodeInfo.BrowseNodes.Ancestor",'
      .'  "BrowseNodeInfo.BrowseNodes.SalesRank",'
      .'  "BrowseNodeInfo.WebsiteSalesRank",'
      .'  "CustomerReviews.Count",'
      .'  "CustomerReviews.StarRating",'
      .'  "Images.Primary.Small",'
      .'  "Images.Primary.Medium",'
      .'  "Images.Primary.Large",'
      .'  "Images.Variants.Small",'
      .'  "Images.Variants.Medium",'
      .'  "Images.Variants.Large",'
      .'  "ItemInfo.ByLineInfo",'
      .'  "ItemInfo.ContentInfo",'
      .'  "ItemInfo.ContentRating",'
      .'  "ItemInfo.Classifications",'
      .'  "ItemInfo.ExternalIds",'
      .'  "ItemInfo.Features",'
      .'  "ItemInfo.ManufactureInfo",'
      .'  "ItemInfo.ProductInfo",'
      .'  "ItemInfo.TechnicalInfo",'
      .'  "ItemInfo.Title",'
      .'  "ItemInfo.TradeInInfo",'
      .'  "Offers.Listings.Availability.MaxOrderQuantity",'
      .'  "Offers.Listings.Availability.Message",'
      .'  "Offers.Listings.Availability.MinOrderQuantity",'
      .'  "Offers.Listings.Availability.Type",'
      .'  "Offers.Listings.Condition",'
      .'  "Offers.Listings.Condition.SubCondition",'
      .'  "Offers.Listings.DeliveryInfo.IsAmazonFulfilled",'
      .'  "Offers.Listings.DeliveryInfo.IsFreeShippingEligible",'
      .'  "Offers.Listings.DeliveryInfo.IsPrimeEligible",'
      .'  "Offers.Listings.DeliveryInfo.ShippingCharges",'
      .'  "Offers.Listings.IsBuyBoxWinner",'
      .'  "Offers.Listings.LoyaltyPoints.Points",'
      .'  "Offers.Listings.MerchantInfo",'
      .'  "Offers.Listings.Price",'
      .'  "Offers.Listings.ProgramEligibility.IsPrimeExclusive",'
      .'  "Offers.Listings.ProgramEligibility.IsPrimePantry",'
      .'  "Offers.Listings.Promotions",'
      .'  "Offers.Listings.SavingBasis",'
      .'  "Offers.Summaries.HighestPrice",'
      .'  "Offers.Summaries.LowestPrice",'
      .'  "Offers.Summaries.OfferCount",'
      .'  "ParentASIN",'
      .'  "RentalOffers.Listings.Availability.MaxOrderQuantity",'
      .'  "RentalOffers.Listings.Availability.Message",'
      .'  "RentalOffers.Listings.Availability.MinOrderQuantity",'
      .'  "RentalOffers.Listings.Availability.Type",'
      .'  "RentalOffers.Listings.BasePrice",'
      .'  "RentalOffers.Listings.Condition",'
      .'  "RentalOffers.Listings.Condition.SubCondition",'
      .'  "RentalOffers.Listings.DeliveryInfo.IsAmazonFulfilled",'
      .'  "RentalOffers.Listings.DeliveryInfo.IsFreeShippingEligible",'
      .'  "RentalOffers.Listings.DeliveryInfo.IsPrimeEligible",'
      .'  "RentalOffers.Listings.DeliveryInfo.ShippingCharges",'
      .'  "RentalOffers.Listings.MerchantInfo"'
      .' ],'
      .' "PartnerTag": "'.$associate_tracking_id.'",'
      .' "PartnerType": "Associates",'
      .' "Marketplace": "www.amazon.co.jp"'
      .'}';
    $host = 'webservices.amazon.co.jp';
    $uriPath = '/paapi5/getitems';
    $awsv5 = new NelogPaapiV5 ($access_key_id, $secret_access_key);
    $awsv5->setRegionName($region);
    $awsv5->setServiceName($serviceName);
    $awsv5->setPath ($uriPath);
    $awsv5->setPayload ($payload);
    $awsv5->setRequestMethod ("POST");
    $awsv5->addHeader ('content-encoding', 'amz-1.0');
    $awsv5->addHeader ('content-type', 'application/json; charset=utf-8');
    $awsv5->addHeader ('host', $host);
    $awsv5->addHeader ('x-amz-target', 'com.amazon.paapi5.v1.ProductAdvertisingAPIv1.GetItems');
    $headers = $awsv5->getHeaders ();
    $headerString = "";
    foreach ( $headers as $key => $value ) {
      $headerString .= $key . ': ' . $value . "\r\n";
    }
    $params = array (
      'http' => array (
        'header' => $headerString,
        'method' => 'POST',
        'content' => $payload,
        'ignore_errors' => true,
      )
    );
    $stream = stream_context_create( $params );

    $fp = @fopen ( 'https://'.$host.$uriPath, 'rb', false, $stream );

    if (!$fp) {
      $error_message = 'fopenが利用できないようです。サーバーの「php.ini設定」の「allow_url_fopen」項目が「ON」になっているかを確認してください。';
      email_amazon_product_error_message($asin, $error_message);
      return wrap_amazon_item_box($error_message);
    }

    $res = false;

    $res = @stream_get_contents( $fp );

    //503エラーの場合はfalseを返す
    if (includes_string($res, 'Website Temporarily Unavailable')) {
      $res = false;
    }


    $new_cache = true;
  }

  //JSONが取得できた場合
  if ($res) {
    $responsed_json = $res;

    // JSON取得
    $json = json_decode( $res );
    //_v($json);

    if (is_paapi_json_error($json)) {
      $error_message = '<a href="'.$associate_url.'" target="_blank" rel="nofollow noopener">'.'Amazonで詳細を見る'.'</a>';

      $json_error_code    = $json->{'Errors'}[0]->{'Code'};
      $json_error_message = $json->{'Errors'}[0]->{'Message'};

      if (is_user_logged_in()) {
        $admin_message = '<b>'.'管理者用エラーメッセージ'.'</b><br>'.PHP_EOL;
        $admin_message .= 'アイテムを取得できませんでした。'.'<br>'.PHP_EOL.PHP_EOL;
        $admin_message .= '<pre class="nohighlight"><b>'.$json_error_code.'</b><br>'.preg_replace('/AWS Access Key ID: .+?\. /', '', $json_error_message).'</pre>'.PHP_EOL.PHP_EOL;
        $admin_message .= '<span style="colof:red;">このエラーメッセージは"サイト管理者のみ"に表示されています。少し時間おいてリロードしてください。</span>'.PHP_EOL;
        $error_message .= '<br><br>'.$admin_message;
      }


      $transient_id = get_amazon_api_transient_id($asin);
      $json_cache = get_transient( $transient_id );
      //キャッシュがないときメール送信
      if (!$json_cache) {
        //メールの送信
        $msg = 'アイテムを取得できませんでした。'.PHP_EOL.
          $json_error_code.PHP_EOL.
          $json_error_message.PHP_EOL;
        email_amazon_product_error_message($asin, $msg);

        if ($json_error_code != 'TooManyRequests') {
          //エラーの場合は指定期間キャッシュ
          $expiration = DAY_IN_SECONDS * ERROR_CACHE_DAYS;
          //Amazon APIキャッシュの保存
          set_transient($transient_id, $res, $expiration);
        }
      }


      return wrap_amazon_item_box($error_message);
    }

    if (!is_paapi_json_item_exist($json)) {
      $error_message = '商品を取得できませんでした。存在しないASINを指定している可能性があります。';

      email_amazon_product_error_message($asin, $error_message);
      return wrap_amazon_item_box($error_message);
    }

    if (is_paapi_json_item_exist($json)) {
      $item = $json->{'ItemsResult'}->{'Items'}[0];

      ///////////////////////////////////////
      // アマゾンURL
      ///////////////////////////////////////
      $DetailPageURL = esc_url($item->DetailPageURL);
      if ($DetailPageURL) {
        $associate_url = $DetailPageURL;
      }

      //イメージセットを取得する
      $Images = $item->{'Images'};
      $ImageItem = $Images->{'Primary'};

      $SmallImage = $ImageItem->{'Small'};
      $SmallImageUrl = $SmallImage->URL;
      $SmallImageWidth = $SmallImage->Width;
      $SmallImageHeight = $SmallImage->Height;
      $MediumImage = $ImageItem->{'Medium'};
      $MediumImageUrl = $MediumImage->URL;
      $MediumImageWidth = $MediumImage->Width;
      $MediumImageHeight = $MediumImage->Height;
      $LargeImage = $ImageItem->{'Large'};
      $LargeImageUrl = $LargeImage->URL;
      $LargeImageWidth = $LargeImage->Width;
      $LargeImageHeight = $LargeImage->Height;

      $ImageUrl = $MediumImageUrl;
      $ImageWidth = $MediumImageWidth;
      $ImageHeight = $MediumImageHeight;

      //小さなアマゾンリンク
      $small_class = null;
      if (!$kw) {
        $small_class = ' pis-s';

        $ImageUrl = $SmallImageUrl;
        $ImageWidth = $SmallImageWidth;
        $ImageHeight = $SmallImageHeight;
      }


      $ItemInfo = isset($item->{'ItemInfo'}) ? $item->{'ItemInfo'} : null;

      ///////////////////////////////////////////
      // 商品リンク出力用の変数設定
      ///////////////////////////////////////////
      if ($title) {
        $Title = $title;
      } else {
        $Title = $ItemInfo->{'Title'}->{'DisplayValue'};
      }

      //説明文
      $description_tag = null;
      if ($desc) {
        $description_tag = '<div class="amazon-item-description">'.$desc.'</div>';
      }

      //商品グレープ
      $Classifications = $ItemInfo->{'Classifications'};
      $ProductGroup = esc_html($Classifications->{'ProductGroup'}->{'DisplayValue'});
      $ProductGroupClass = strtolower($ProductGroup);
      $ProductGroupClass = str_replace(' ', '-', $ProductGroupClass);
      //_v($ProductGroup);

      $ByLineInfo = $ItemInfo->{'ByLineInfo'};
      $Publisher = esc_html(isset($ByLineInfo->{'Publisher'}->{'DisplayValue'}) ? $ByLineInfo->{'Publisher'}->{'DisplayValue'} : null);
      $Manufacturer = esc_html(isset($ByLineInfo->{'Manufacturer'}->{'DisplayValue'}) ? $ByLineInfo->{'Manufacturer'}->{'DisplayValue'} : null);
      $Brand = esc_html(isset($ByLineInfo->{'Brand'}->{'DisplayValue'}) ? $ByLineInfo->{'Brand'}->{'DisplayValue'} : null);
      $Binding = esc_html(isset($ByLineInfo->{'Binding'}->{'DisplayValue'}) ? $ByLineInfo->{'Binding'}->{'DisplayValue'} : null);
      $Author = esc_html(isset($ByLineInfo->{'Author'}->{'DisplayValue'}) ? $ByLineInfo->{'Author'}->{'DisplayValue'} : null);
      $Artist = esc_html(isset($ByLineInfo->{'Artist'}->{'DisplayValue'}) ? $ByLineInfo->{'Artist'}->{'DisplayValue'} : null);
      $Actor = esc_html(isset($ByLineInfo->{'Actor'}->{'DisplayValue'}) ? $ByLineInfo->{'Actor'}->{'DisplayValue'} : null);
      $Creator = esc_html(isset($ByLineInfo->{'Creator'}->{'DisplayValue'}) ? $ByLineInfo->{'Creator'}->{'DisplayValue'} : null);
      $Director = esc_html(isset($ByLineInfo->{'Director'}->{'DisplayValue'}) ? $ByLineInfo->{'Director'}->{'DisplayValue'} : null);
      if ($Author) {
        $maker = $Author;
      } elseif ($Artist) {
        $maker = $Artist;
      } elseif ($Actor) {
        $maker = $Actor;
      } elseif ($Creator) {
        $maker = $Creator;
      } elseif ($Director) {
        $maker = $Director;
      } elseif ($Publisher) {
        $maker = $Publisher;
      } elseif ($Brand) {
        $maker = $Brand;
      } elseif ($Manufacturer) {
        $maker = $Manufacturer;
      } else {
        $maker = $Binding;
      }


      $buttons_tag = null;
      if ($kw) {
        //Amazonボタンの取得
        $amazon_btn_tag = null;
        if ($amazon) {
          $amazon_url = 'https://www.amazon.co.jp/gp/search?keywords='.urlencode($kw).'&tag='.$associate_tracking_id;
          $amazon_btn_tag =
            '<div class="shoplinkamazon">'.
              '<a href="'.esc_url($amazon_url).'" target="_blank" rel="nofollow noopener">'.'Amazonで探す'.'</a>'.
            '</div>';
        }

        //楽天ボタンの取得
        $rakuten_btn_tag = null;
        if ($rakuten_affiliate_id && $rakuten) {
          $rakuten_url = 'https://hb.afl.rakuten.co.jp/hgc/'.$rakuten_affiliate_id.'/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F'.urlencode($kw).'%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F';
          $rakuten_btn_tag =
            '<div class="shoplinkrakuten">'.
              '<a href="'.esc_url($rakuten_url).'" target="_blank" rel="nofollow noopener">'.'楽天市場で探す'.'</a>'.
            '</div>';
        }

        //Yahoo!ボタンの取得
        $yahoo_tag = null;
        if ($sid && $pid && $yahoo) {
          $yahoo_url = 'https://ck.jp.ap.valuecommerce.com/servlet/referral?sid='.$sid.'&pid='.$pid.'&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3D'.$kw;
          $yahoo_tag =
            '<div class="shoplinkyahoo">'.
              '<a href="'.esc_url($yahoo_url).'" target="_blank" rel="nofollow noopener">'.'Yahoo!で探す'.'</a>'.
            '</div>';
        }
        //ボタンコンテナ
        $buttons_tag =
          '<div class="amazon-item-buttons">'.
            $amazon_btn_tag.
            $rakuten_btn_tag.
            $yahoo_tag.
          '</div>';
      }

      $tag =
        '<div class="amazon-item-box no-icon '.$small_class.' '.$ProductGroupClass.' '.$asin.' cf">'.
          '<figure class="amazon-item-thumb">'.
            '<a href="'.esc_url($associate_url).'" class="amazon-item-thumb-link" target="_blank" title="'.esc_attr($Title).'" rel="nofollow">'.
              '<img src="'.esc_attr($ImageUrl).'" alt="'.esc_attr($Title).'" width="'.esc_attr($ImageWidth).'" height="'.esc_attr($ImageHeight).'" class="amazon-item-thumb-image">'.
            '</a>'.
          '</figure>'.
          '<div class="amazon-item-content">'.
            '<div class="amazon-item-title">'.
              '<a href="'.esc_url($associate_url).'" class="amazon-item-title-link" target="_blank" title="'.esc_attr($Title).'" rel="nofollow noopener">'.
                 esc_html($Title).
              '</a>'.
            '</div>'.
            '<div class="amazon-item-snippet">'.
              '<div class="amazon-item-maker">'.
                $maker.
              '</div>'.
              $description_tag.
              $buttons_tag.
            '</div>'.
          '</div>'.
        '</div>';
    } else {
      $error_message = '商品を取得できませんでした。存在しないASINを指定している可能性があります。';
      $tag = wrap_amazon_item_box($error_message);
    }

    if ($new_cache) {
      //キャッシュ更新間隔（randで次回のキャッシュ切れ同時読み込みを防ぐ：3時間のばらつきを与える）
      $expiration = 60 * 60 * 24 * $days + (rand(0, 180) * 60);
      //Amazon APIキャッシュの保存
      set_transient($transient_id, $responsed_json, $expiration);
    }

    return $tag;
  }

}
endif;

/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
      $title = single_cat_title('',false);
  } elseif (is_tag()) {
      $title = single_tag_title('',false);
} elseif (is_tax()) {
    $title = single_term_title('',false);
} elseif (is_post_type_archive() ){
  $title = post_type_archive_title('',false);
} elseif (is_date()) {
    $title = get_the_time('Y年n月');
} elseif (is_search()) {
    $title = '検索結果：'.esc_html( get_search_query(false) );
} elseif (is_404()) {
    $title = '「404」ページが見つかりません';
} else {

}
  return $title;
});

// function change_pre_get_posts($query){
//   if(!is_admin() && $query->is_main_query()){
//     if(is_category()){
//       $query->set('posts_per_page', 5);
//     }
//   }
// }
// add_action('pre_get_posts', 'change_pre_get_posts');