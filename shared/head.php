<title><?php echo $title; ?></title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width,minimum-scale=1">
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="rating" content="adult">
<meta name="rating" content="RTA-5042-1996-1400-1577-RTA">
<meta name="robots" content="all">

<?php 
    if($identifier == 'index'){
        echo '
            <link rel="stylesheet" media="tv" onload="if(media!=\'screen\')media=\'screen\'" href="assets/styles/css/emoji.min.css">
        ';
    }
?>
<link rel="stylesheet" media="screen" href="assets/styles/css/bootstrap.min.css">

<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

<link rel="canonical" href="<?php echo $canonical_url ?>">
