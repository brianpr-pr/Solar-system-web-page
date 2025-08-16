<?php
//Paths

##START PUBLIC FOLDER
//Public folder
$public = "./public";

//Inside public

    //Media folder
    $publicMedia = "$public/media";

    //Inside media
        $mediaAudio = "$publicMedia/audio";
        $mediaFavicon = "$publicMedia/favicon";
        $mediaImages = "$publicMedia/images";
        $mediaLogos = "$publicMedia/logos";
        $mediaVideos = "$publicMedia/videos";
        $mediaGifts = "$publicMedia/gifts";
        $mediaModels = "$publicMedia/models";

    //Assets folder
    $publicAssets = "$public/assets";

    //Inside assets

        //Fonts folder
        $assetsFonts = "$publicAssets/fonts";
        
        //Styles folder
        $assetsStyles = "$publicAssets/styles";

        //Inside styles
            $styleHeader = "$assetsStyles/header.css";
            $styleBody = "$assetsStyles/body.css";
            $styleFooter = "$assetsStyles/footer.css";
##END PUBLIC FOLDER

##START RESOURCES FOLDER
//Resources folder:
$resources = "./resources";

//Inside resources

    //Uploads folder
    $resourcesUploads ="$resources/uploads";
##END RESOURCES FOLDER

##START SRC FOLDER
//Src folder
$src = "./src";

//Inside src

    //App folder
    $app = "$src/app";

    //Inside app
        $appAboutme = "$app/about_me.php";
        $appArticles = "$app/articles.php";

    //Components folder
    $components = "$src/components";

    //Data folder
    $data = "$src/data";
    
    //Inside data
        $script = "$data/script.sql";

    //Features folder
    $features = "$src/features";
##END RESOURCES FOLDER