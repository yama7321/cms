<h1>
    Articles tagged with
    <?= /* @var $tags */ $this->Text->toList(h($tags), 'or') ?>
</h1>

<section>
    <?php /* @var $articles */ foreach ($articles as $article): ?>
        <article>
            <!-- リンクの作成に HtmlHelper を使用 -->
            <h4><?= $this->Html->link(
                    $article->title,
                    ['controller' => 'Articles', 'action' => 'view', $article->slug]
                ) ?></h4>
            <span><?= h($article->created) ?></span>
        </article>
    <?php endforeach; ?>
</section>
