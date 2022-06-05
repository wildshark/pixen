<?php

$_INC =[];

$_TEMPLATE=[
    "home"=>"page/ui-home.php",
    "service"=>"page/ui-service-details.php",
    "project"=>"page/ui-project.php",
    "contact"=>"page/ui-contact.php",
    "quote"=>"page/ui-quote.php"
];

function TopMenu(){

    return"
        <li><a href='?page=home'>Home</a></li>
        <li><a href='#0'>Service</a>
            <ul class='sub-menu'>
                <li><a href='team.html'>Team</a></li>
                <li><a href='pricing.html'>Pricing</a></li>
                <li><a href='faq.html'>Faq</a></li>
                <li><a href='team-details.html'>Team Details</a></li>
                <li><a href='service-details.html'>Service Details</a></li>
                <li><a href='project-details.html'>Project Details</a></li>
                <li><a href='privacy-policy.html'>Privacy Policy</a></li>
            </ul>
        </li>
        <li><a href='?page=project'>Project</a></li>
        <li><a href='?page=contact'>Contact</a></li>
    ";
}

?>