document.querySelectorAll('.reply-comment').forEach(function (element) {
    element.addEventListener('click', function (event) {
        event.preventDefault();
        const commentForm = document.querySelector('#commentform');
        const commentId = event.currentTarget.getAttribute('data-comment-id');
        if (commentForm) {
            // Set the comment parent ID to the clicked comment's ID
            const parentIdField = commentForm.querySelector('#comment_parent');
            if (parentIdField) {
                parentIdField.value = commentId;
            }
            // Scroll to and focus on the comment form
            commentForm.scrollIntoView({
                behavior: 'smooth'
            });
            const commentTextarea = commentForm.querySelector('textarea[name="comment"]');
            if (commentTextarea) {
                commentTextarea.focus();
            }
        }
    });
});