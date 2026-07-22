<?php
// 記事データの定義（通常はデータベースから取得）
$posts = [
    [
        'date' => '6月 22, 2026',
        'title' => '駄菓子と夏風物詩',
        'category' => '夏の風物詩',
        'content' => '日本の夏の風物詩は色々ありますが、風鈴やすだれはほとんど失われた風物詩ですね。駄菓子屋さんは失われましたが、駄菓子コーナーは最近モールにありますね。駄菓子屋さんで買う色付きの甘いジュースはいわゆるワンコインで購入できる夏のたおしみでした。上級生になるとラムネなども変えましたが。'
    ]
];

// HTMLエスケープ関数
function h($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shakeblog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>
    <div class="content-wrapper">
        <?php foreach ($posts as $post): ?>
            <article class="post-card">
                <div class="post-header">
                    <p class="post-date"><?php echo h($post['date']); ?></p>
                    <h2 class="post-title"><?php echo h($post['title']); ?></h2>
                    <div class="post-menu-container">
                        <button class="post-menu-button">メニュー ▲</button>
                    </div>
                </div>
                
                <div class="post-body">
                    <span class="post-category"><?php echo h($post['category']); ?></span>
                    <p class="post-content"><?php echo h($post['content']); ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>
</html>