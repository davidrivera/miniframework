if(typeof console == 'undefined') var console={log:function(){}};

$(function() {
	var body = $('body');
	
	if (body.hasClass('main_page')) {
		function setupRanker(data) {
			$('#ranker').fadeOut(200, function() {
				$(this).html(data).fadeIn(200);
				$('#ranker .game_display_tall').click(function(){
					$.post('/_ranker.php', { game_id: $(this).data('id') }, function(data) {
						setupRanker(data);
					})
				});
			});
		}

		$.get('/_ranker.php', setupRanker);
	}
	
	
	if (body.hasClass('user_profile')) {
		$('.edit_area').editable('http://www.example.com/save.php', { 
             type      : 'textarea',
             cancel    : 'Cancel',
             submit    : 'OK',
             indicator : 'Saving...',
             tooltip   : 'Click to edit...',
             style     : 'display: inline;'
         });
	}
	
	
	if (body.hasClass('game_profile')) {
		// stuff specific to the game_profile page
	}

	if ($('.top_games').length) {
		setInterval(function() {
			if ($('#my_top_games').length) {
				$.get('/_top_games.php?list_type=my', function(data) {
					$('#my_top_games').html(data);
					console.log('got my top games');
				});
			}
			if ($('#site_top_games').length) {
				$.get('/_top_games.php?list_type=site', function(data) {
					$('#site_top_games').html(data);
					console.log('got site top games');
				})
			}
		}, 1000);
	}
})
