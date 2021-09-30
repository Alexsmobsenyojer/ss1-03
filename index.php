<?php
require_once "vendor".DIRECTORY_SEPARATOR."autoload.php";
$Names = ["Jakub Trejbal","Sorin Eni","Štěpán Kolarovský","Karel Nakládal","Thanh Hieu Ngo","Michal Plaček","Šimon Siksta","Jan Šlechta","Jakub Vávrů"];
$Emails = ["jakub.trejbal@student.ossp.cz","a@student.ossp.cz","b@student.ossp.cz","c@student.ossp.cz","d@student.ossp.cz","e@student.ossp.cz","f@student.ossp.cz","g@student.ossp.cz","h@student.ossp.cz"];

foreach (array_combine($Names,$Emails) as $name => $email) {
    $mail = new Nette\Mail\Message;
    $mail->setFrom('joe.biden@email.cz')
	->addTo($email)
	->setSubject('TRUMP NUDES')
	->setHtmlBody("<h1>Hezký den, jakpak se asi má ? </h1>". $name .
    "<p>V emailu vám posíláme aktuální novinky</p>");
    $mailer = new Nette\Mail\SmtpMailer([
        'host' => 'smtp.seznam.cz',
        'port' => '465',
        'username' => 'joe.biden@email.cz',
        'password' => 'donaldtrump2021',
        'secure' => 'ssl',
    ]);
    
    
    
    
    
    try{$mailer->send($mail); echo "Posláno uživateli: " . $name . " s emailem: " . $email . "<br />";}
    catch(Exception $e){echo $e->getMessage();}
}




    

?>
