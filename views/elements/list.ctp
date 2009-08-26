<div id="comments">
<h3>Comments</h3>
<?php if (isset($comments) && !empty($comments)) :?>
	<?php foreach ($comments as $comment) : ?>
		<div class="comment">
			<h4 class="comment-name"><?php echo $comment['Comment']['name']; ?> posted a comment at <?php echo $time->niceShort($comment['Comment']['created']); ?></h4>
			<div class="comment-description"><?php echo $comment['Comment']['body']; ?></div>
		</div>
	<?php endforeach;?>
<?php else : ?>
	There are no comments at this time.
<?php endif; ?>
</div>