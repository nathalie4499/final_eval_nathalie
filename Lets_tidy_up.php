#In this exercise you will need to use PHP to handle a request to process an Ajax form. 
#The form will add a new vehicle to the database and will contain the following fields: - Make - Model - Year - Colour

<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $make = $_POST['make'] ?? null;
    $model = $_POST['model'] ?? null;
    $year = $_POST['year'] ?? null;
    $color = $_POST['color'] ?? null;
    

    $makeOk = (!empty($make));
    $modelOk = (!empty($model));
    $yearOk = (!empty($year));
    $colorOk = (!empty($color));
    
    
    if($makeOk && $modelOk && $yearOk && $colorOk) {
        $sql = 'INSERT INTO vehicle(make, model, year, color) VALUES(:make, :model, :year, :color)';

    } else {
        
        echo "form incomplete";
    }
    
}




