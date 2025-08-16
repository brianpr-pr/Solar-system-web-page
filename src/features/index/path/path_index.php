<?php
//General path
include "./src/components/paths/path_general.php";

##START INDEX
//Index folder
$index = "$features/index";

//Inside index

    //Styles folder
    $styleIndex = "$index/style";

    //Inside styles
        $styleIndexFile = "$styleIndex/index_style.css";
    
    //Components folder
    $componentsIndex = "$index/components";

    //Inside components
        $componentsDisplayModels = "$componentsIndex/display_models";
        //Inside display_models
            $DisplayModelsMain = "$componentsDisplayModels/main.js";

        $componentsPlanetsSlider = "$componentsIndex/planets_slider";
        //Inside planets_slider
            $planetsSliderGetData = "$componentsPlanetsSlider/get_data.php";

    //Data folder


##END INDEX