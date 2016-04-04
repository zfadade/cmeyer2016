<?php

error_reporting(E_ALL);

// This should FALSE in Production !
ini_set('display_errors', true);

header('Content-Type: text/html; charset=utf-8');

$pdo = new PDO('mysql:dbname=db619302666;host=localhost;charset=utf8', 'root', 'maiskrete35');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!empty($_POST['content'])) {
    $stmt = $pdo->prepare('INSERT INTO `texts` (`content`) VALUES (:content)');
    $stmt->execute(array('content' => $_POST['content']));
    print "Inserted into DB:  " . $_POST['content'];
}

$results = $pdo->query('SELECT * FROM `texts`')->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>

<html>
<head>
    <title>UTF-8 encoding test</title>
</head>
<body>

<h1>Display test</h1>

<p>
A good day, World!<br>
Schönen Tag, Welt!<br>
Une bonne journée, tout le monde!<br>
يوم جيد، العالم<br>
좋은 일, 세계!<br>
Một ngày tốt lành, thế giới!<br>
こんにちは、世界！<br>
</p>

<h1>Submission test</h1>

<form action="" method="post" accept-charset="utf-8">
    <textarea name="content"></textarea>
    <input type="submit" value="Submit">
</form>

<?php if (!empty($_POST['content'])) : ?>
    <h2>Last received data</h2>
    <pre><?php echo htmlspecialchars($_POST['content'], ENT_NOQUOTES, 'UTF-8'); ?></pre>
<?php endif; ?>

<h1>Output test</h1>

<ul>
    <?php foreach ($results as $result) : ?>
        <li>
            <pre><?php echo htmlspecialchars($result['content'], ENT_NOQUOTES, 'UTF-8'); ?></pre>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>