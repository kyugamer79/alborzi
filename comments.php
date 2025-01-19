<!-- Comment Form -->
<a href="#comment-reply"></a>
<div class="contact-container">
    <div class="py-4">
        <?php comment_form([
            'fields' => [
                'author' => '<label class="form-group relative order-1">
                                        <input placeholder="نام شما" type="text" class="form-control w-full text-base rounded-2xl border border-slate-200 text-slate-400 p-4 focus-visible:border-teal-400 focus:text-zinc-600 transition-all duration-300 focus:ring-0" name="author">
                                    </label>',

                'email' => '<div class="form-group relative order-2">
                                        <input placeholder="ایمیل شما" type="email" class="form-control w-full text-base rounded-2xl border border-slate-200 text-slate-400 p-4 focus-visible:border-teal-400 focus:text-zinc-600 transition-all duration-300 focus:ring-0" name="email">
                                    </div>',
                'cookies' => '',
            ],
            'comment_field' => '<div class="relative order-3">
                                    <textarea placeholder="نظر شما" class="form-control resize-none w-full h-[120px] text-base rounded-2xl border border-slate-200 text-slate-400 p-4 focus-visible:border-teal-400 focus:text-zinc-600 transition-all duration-300 focus:ring-0" name="comment"></textarea>
                                </div>',
            'comment_notes_before' => '',
            'class_form' => 'flex flex-col gap-4',
            'class_container' => '',
            'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title py-2 hidden">',
            'title_reply_after' => '</h3>',
            'submit_field' => '<div class="grid justify-end order-3">
            <div class="group form-submit flex items-center gap-2 cursor-pointer">
                        <svg class="icon rotate-45 object border border-slate-200 size-12 bg-white group-hover:bg-teal-600 rounded-full p-2 group-hover:text-white transition-all duration-300 comment-submit-icon"><use href="#icon-Arrow-17"/></svg>
                    <div class="text-zinc-600 text-sm cursor-pointer comment-submit-text">%1$s %2$s</div>
                        </div>
                     </div>',
            'class_submit' => 'comment-submit-btn cursor-pointer'
        ]); ?>
    </div>
</div>

<?php if (have_comments()): ?>
    <div class="comment-list flex flex-col gap-5" id="comment-list">
        <?php
        $comments = get_comments(array(
            'post_id' => get_the_ID(),
            'status' => 'approve',
            'orderby' => 'comment_date',
            'order' => 'ASC'
        ));
        ?>
        <?php foreach ($comments as $comment):
            if ($comment->comment_parent != 0) {
                continue;
            }
            ?>
            <div class="flex flex-col gap-10 p-6 border border-slate-200 rounded-2xl">
                <div class="flex items-center gap-3">
                    <!-- Avatar -->
                    <div>
                        <?php echo get_avatar($comment, 50, '', 'avatar', ['class' => 'rounded-full']); ?>
                    </div>
                    <div class="flex flex-col gap-5">
                        <!-- Name & Reply -->
                        <div class="flex flex-row gap-2">
                            <?php echo get_comment_author_link($comment); ?>
                            <a class="reply-comment cursor-pointer text-neutral-800 text-base" href="#commentform"
                                data-comment-id='<?php echo $comment->comment_ID; ?>'>
                                <svg class="icon">
                                    <use href="#icon-Reply,-Share,-Circle" />
                                </svg>
                            </a>
                        </div>
                        <!-- Date & Time-->
                        <div class="flex flex-row gap-1 text-xs text-zinc-300">
                            <!-- Date -->
                            <div>
                                <time
                                    datetime="<?php echo get_comment_date('c', $comment); ?>"><?php echo get_comment_date('', $comment); ?></time>
                            </div>
                            ،
                            <!-- Time -->
                            <div>
                                <?php comment_time('H:i:s'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- comment text -->
                <div class="text-sm">
                    <?php echo $comment->comment_content; ?>
                </div>
                <?php
                $children = get_comments([
                    'post_id' => get_the_ID(),
                    'status' => 'approve',
                    'orderby' => 'comment_date',
                    'order' => 'ASC',
                    'parent' => $comment->comment_ID,
                ]); ?>
                <?php if ($children): ?>
                    <!-- comment children -->
                    <div class="bg-teal-50 p-4 rounded-3xl">
                        <?php foreach ($children as $child_comment): ?>
                            <div class="flex flex-col gap-8">
                                <div class="flex items-center gap-5">
                                    <!-- Avatar -->
                                    <div>
                                        <?php echo get_avatar($child_comment, 50, '', 'avatar', ['class' => 'rounded-full']); ?>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <!-- Name & Reply -->
                                        <div class="flex flex-row gap-2">
                                            <?php echo get_comment_author_link($child_comment); ?>
                                            <a class="cursor-pointer" href="#commentform"
                                                data-comment-id='<?php echo $child_comment->comment_ID; ?>'>
                                                <svg class="icon">
                                                    <use href="#icon-Reply,-Share,-Circle" />
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- Date & Time-->
                                        <div class="flex flex-row gap-1 text-zinc-400 text-xs">
                                            <!-- Date -->
                                            <div>
                                                <time
                                                    datetime="<?php echo get_comment_date('c', $child_comment); ?>"><?php echo get_comment_date('', $child_comment); ?></time>
                                            </div>
                                            ،
                                            <!-- Time -->
                                            <div>
                                                <?php comment_time('H:i:s'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- comment text -->
                                <div class="text-sm">
                                    <?php echo $child_comment->comment_content; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <div class="comment-list">
        <p class="fs-h2 text-secondary-400">کامنتی ثبت نشده است</p>
    </div>
<?php endif; ?>