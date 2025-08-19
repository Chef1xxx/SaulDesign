<?php
define("TEMPLATE_DIR", get_bloginfo('template_directory'));

//add_theme_support( 'post-thumbnails' );
show_admin_bar(false);

function assets($path)
{
    if (!$path) {
        return;
    }

    echo get_template_directory_uri() . 'assets/dist/' . $path;
}

function starts_with($haystack, $needles)
{
    foreach ((array) $needles as $needle) {
        if ($needle != '' && substr($haystack, 0, strlen($needle)) === (string) $needle) {
            return true;
        }
    }
    return false;
}

function mix($path, $manifestDirectory = '')
{
    if (!$manifestDirectory) {
        $manifestDirectory = "assets/dist/";
    }

    static $manifest;
    if (!starts_with($path, '/')) {
        $path = "/{$path}";
    }
    if ($manifestDirectory && !starts_with($manifestDirectory, '/')) {
        $manifestDirectory = "/{$manifestDirectory}";
    }
    $rootDir = dirname(__FILE__, 2);
    if (!$manifest){
        $manifestPath = $rootDir . $manifestDirectory . "mix-manifest.json";
        if (!file_exists($manifestPath)) {
            throw new Exception("The Mix manifest dors not exist.");
        }
        $manifest = json_decode(file_get_contents($manifestPath), true);
    }
    if (starts_with($manifest[$path], '/')){
        $manifest[$path] = ltrim($manifest[$path],'/');
    }
    
    $path = $manifestDirectory . $manifest[$path];
    return  get_template_directory_uri() . $path;
}




function get_option_theme($slug)
{
    $custom_settings = get_option('theme_settings');
    if (isset($custom_settings) && array_key_exists($slug, $custom_settings)) {
        return $custom_settings[$slug];
        ;
    }

    return null;
}

function href_phone_convert($phone)
{
    return str_replace(array('(', ')', ' ', '-'), '', $phone);
}

function get_assets_dir($url)
{
    if ($url != '/')
        $url = '/' . $url;
    return TEMPLATE_DIR . '' . $url;
}

function assets_dir($url)
{
    echo get_assets_dir($url);
}

function get_url_by_slug($slug, $param = "")
{
    $url = "";
    $page = get_page_by_path($slug);
    if ($page != null)
        $url = get_permalink($page);

    if ($param != "")
        return $url . "?" . $param;
    return $url;
}

function url_by_slug($slug)
{
    echo get_url_by_slug($slug);
}


