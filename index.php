<?php

// Define the template file path
$template_file_path = 'src/index.html';

// Read the template file contents into a variable
$template_content = fread(fopen($template_file_path, 'r'), filesize($template_file_path));


class hotel
{
    public function __construct(public $name, public $description)
    {
    }
}



// Define the data for the hotel placeholders
$hotels_data = [new hotel('Hotel Wien','Description of Hotel Wien Lorem ipsum dolor  sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd '),
    new hotel('Hotel Salzburg', 'Description of Hotel Salzburg Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd'),
    new hotel('Hotel Bregenz', 'Description of Hotel Bregenz Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd'),
    new hotel('Hotel Innsbruck','Description of Hotel Innsbruck Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd')];


function getHTML($hotels_data) {
    $HTML = '';

    foreach ($hotels_data as $hotels) {
        $HTML .= "<h1 style='margin-top: 30px; font-weight: bold; font-size: x-large'>" . $hotels->name . "</h1> <h2 style='overflow: visible; width: 500px'>" . $hotels->description . "</h2>";
    }
    return $HTML;
}

    // Replace the placeholders with the data
    $template_content = str_replace('+#+Hotel+#+', getHTML($hotels_data), $template_content);

    // Output the hotel content
echo $template_content;





