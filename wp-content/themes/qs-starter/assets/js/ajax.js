jQuery(document).ready(function () {
	console.log("ajax js init");

	jQuery(".feedback-answers button").click(function (e) {
		e.preventDefault();
		var feedback = jQuery(this).attr("class");
		var post_id = jQuery(this).parents(".feedback-answers").attr("data-id");
		save_post_feedback(feedback, post_id);
	});
});

function save_post_feedback(feedback, post_id) {
	jQuery.ajax({
		type: "post",
		dataType: "json",
		url: ajaxurl,
		data: {
			action: "save_feedback",
			feedback: feedback,
			post_id: post_id,
		},
		success: function (response) {
			jQuery(".feedback-ajax").html(
				'<span class="response">' + response.message + "</span>"
			);
			setTimeout(function () {
				jQuery(".feedback-ajax .response").remove();
			}, 5000);
		},
	});
}
