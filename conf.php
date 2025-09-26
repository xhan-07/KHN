<?php
// Site configuration
$conf['site_name'] = "BBIT DevOps";
$conf['site_email'] = "info@bbit.edu";
$conf['site_url'] = "http://localhost/dol/";

// Site language
$conf['language'] = "en";

// Database constants
$conf['db_type'] = "pdo";
$conf['db_host'] = "localhost";
$conf['db_user'] = "root";
$conf['db_pass'] = "";
$conf['db_name'] = "dol";

// Email configuration
$conf['mail_type'] = "smtp"; // Options: smtp, sendmail, mail
$conf['smtp_host'] = "smtp.gmail.com";
$conf['smtp_user'] = "your_email@gmail.com";
$conf['smtp_pass'] = "your_app_password";
$conf['smtp_port'] = 465;
$conf['smtp_secure'] = "ssl";

// Valid email domains for registration
$conf['valid_email_domains'] = ["gmail.com", "yahoo.com", "outlook.com", "strathmore.edu"];

// Valid password length
$conf['min_password_length'] = 4;