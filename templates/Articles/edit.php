<!-- File: templates/Articles/edit.php -->

<h1>記事の編集</h1>
<?php
/* @var $article */
echo $this->Form->create($article);
echo $this->Form->control('user_id', ['type' => 'hidden']);
echo $this->Form->control('title');
echo $this->Form->control('body', ['rows' => '3']);
/* @var $tags */
echo $this->Form->control('tags._ids', ['options' => $tags]);
echo $this->Form->button(__('Save Article'));
echo $this->Form->end();
?>
